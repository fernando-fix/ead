<?php

namespace src\controllers;

use Cocur\Slugify\Slugify;
use \core\Controller;
use src\models\Course;
use src\handlers\CourseHandler;
use src\handlers\LessonHandler;
use src\handlers\ModuleHandler;
use src\models\Module;

class CourseController extends Controller
{

    public function courses()
    {
        $courses = CourseHandler::findAll();
        $data['courses'] = $courses;

        $this->render('courses', $data);
    }

    public function course($args)
    {
        $course = CourseHandler::findBySlug($args['slugcourse']);

        if (!$course) {
            $this->render('404');
            exit;
        }

        // não esquecer de implementar qual a ultima aula assistida
        $firstLesson = LessonHandler::findFirstLessonByCourseId($course->getId(), 'order_number');

        $data['course'] = $course;
        $data['firstLesson'] = $firstLesson;

        $this->render('course-panel', $data);
    }

    public function lesson($args)
    {
        // informações da lição e curso
        $course = CourseHandler::findBySlug($args['slugcourse']);
        $lesson = LessonHandler::findBySlug($args['sluglesson']);

        if (empty($course) or empty($lesson)) {
            $this->redirect("/cursos");
        }

        // informação dos módulos e lições
        $modules = ModuleHandler::findByCourseId($course->getId(), 'order_number');

        // se não achar o curso ou a aula, retorna 404
        if (!$course || !$lesson) {
            $this->render('404');
            exit;
        }

        // verifica se a aula pertence ao curso
        if ($lesson->getCourseId() != $course->getId()) {
            $this->render('404');
            exit;
        }

        // forma uma array com aulas classificadas por modulo
        foreach ($modules as $module) {
            $lessonsByModule = LessonHandler::findByCourseAndModuleId($course->getId(), $module->getId(), 'order_number');
            $lessons[] = [
                'module' => $module,
                'lessons' => $lessonsByModule
            ];
        }

        $data['course'] = $course;
        $data['lesson'] = $lesson;
        $data['lessons'] = $lessons;

        $this->render('lesson', $data);
    }

    public function courseCad()
    {
        $this->render('course_cad');
    }

    public function courseCadAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $nickname = filter_input(INPUT_POST, 'nickname');
        $url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL);

        // Verificar se eu recebi todos os dados
        if (!empty($name) && !empty($url) && !empty($nickname)) {

            // transformar apelido em slug
            $nickname = (new Slugify)->slugify($nickname);

            // tratar imagem recebida
            $logo_name = $_FILES['logo']['name'];
            $logo_type = $_FILES['logo']['type'];
            $logo_tmp = $_FILES['logo']['tmp_name'];
            // pegar extensão do arquivo
            $extension = pathinfo($logo_name, PATHINFO_EXTENSION);
            // colocar a extensão no slug do arquivo
            $logo_new_name = $nickname . "." .  $extension;
            // Mover o arquivo para a pasta
            move_uploaded_file($logo_tmp, "media/logos/courses/" . $logo_new_name);

            // Verifica se é do youtube
            if (strpos($url, 'watch?v=') !== false) {
                // Substitui "watch?v=" por "embed/"
                $url = str_replace('watch?v=', 'embed/', $url);
                $url = $url . "?rel=0";
            }

            $course = new Course;
            $course->setName($name);
            $course->setSlug($nickname);
            $course->setLogo($logo_new_name);
            $course->setUrl($url);

            CourseHandler::add($course);
            $this->redirect('/cursos/adm');

            exit;
        } else {

            $this->redirect('/curso/cadastrar');
            exit;
        }
    }

    public function moduleCadAction()
    {
        $name = filter_input(INPUT_POST, 'name');
        $course_id = filter_input(INPUT_POST, 'course_id');
    }

    public function lessonCadAction()
    {
    }

    public function adm_courses()
    {
        $courses = CourseHandler::findAll();
        $new_courses = [];

        foreach ($courses as $course) {
            $modules = ModuleHandler::findByCourseId($course->getId());
            $lessons = LessonHandler::findByCourseId($course->getId());
            $new_courses[] = [
                'course' => $course,
                'modules' => $modules,
                'lessons' => $lessons
            ];
        }

        $data['courses'] = $new_courses;
        $this->render('courses_adm', $data);
    }

    public function adm_course_edit($args)
    {
        $data = [];

        $course_slug = $args['slugcourse'];
        $course = CourseHandler::findBySlug($course_slug);

        if ($course != false) {
            $data['course'] = $course;
        } else {
            $this->redirect('/cursos/adm');
        }


        $this->render('course_edit', $data);
    }

    public function adm_modules($args)
    {
        $course_slug = $args['slugcourse'];
        $course = CourseHandler::findBySlug($course_slug);
        $modules = ModuleHandler::findByCourseId($course->getId(), 'order_number');
        $modulesAndLessons = [];

        foreach ($modules as $module) {
            $modulesAndLessons[] = [
                'module' => $module,
                'lessons' => LessonHandler::findByModuleId($module->getId())
            ];
        }

        $data['modules'] = $modules;
        $data['course'] = $course;
        $data['modulesAndLessons'] = $modulesAndLessons;
        $this->render('modules_adm', $data);
    }

    public function adm_module_cad($args)
    {
        $slug_course = $args['slugcourse'];
        $course = CourseHandler::findBySlug($slug_course);
        $data['course'] = $course;
        $this->render("module_cad", $data);
    }

    public function adm_module_cad_action()
    {
        $course_id = filter_input(INPUT_POST, 'course_id');
        $name = filter_input(INPUT_POST, 'name');

        // transformar nickname em slug
        $nickname = (new Slugify())->slugify($name);

        // se não recebeu os dados vai para outra página
        if (empty($course_id) or empty($name)) {
            // depois avaliar se é a melhor coisa a se fazer
            $this->redirect('/cursos/adm');
        }

        $course = CourseHandler::findById($course_id);

        // get the max value from order_number
        $modules = ModuleHandler::findByCourseId($course->getId());
        $max_order_number = 1;
        foreach ($modules as $module) {
            if ($module->getOrderNumber() >= $max_order_number) {
                $max_order_number = $module->getOrderNumber() + 1;
            }
        }


        // montar o obj
        $new_module = new Module;
        $new_module->setName($name);
        $new_module->setCourseId($course_id);
        $new_module->setSlug($nickname);
        $new_module->setOrderNumber($max_order_number);

        ModuleHandler::add($new_module);

        $this->redirect("/curso/{$course->getSlug()}/modulos");
    }

    public function adm_course_del($args)
    {
        $course_id = $args['courseid'];
        $course = CourseHandler::findById($course_id);
        CourseHandler::del($course_id);
        ModuleHandler::delByCourseId($course_id);
        LessonHandler::delByCourseId($course_id);
        unlink("media/logos/courses/" . $course->getLogo());
        $this->redirect('/cursos/adm');
    }
}
