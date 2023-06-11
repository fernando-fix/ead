<?php

namespace src\controllers;

use Cocur\Slugify\Slugify;
use \core\Controller;
use src\handlers\CourseHandler;
use src\handlers\LessonHandler;
use src\handlers\ModuleHandler;
use src\models\Lesson;

class LessonController extends Controller
{
    public function adm_lessons($args)
    {
        $course_id = $args['idcourse'];
        $module_id = $args['idmodule'];

        $course = CourseHandler::findById($course_id);
        $module = ModuleHandler::findById($module_id);
        $lessons = LessonHandler::findByCourseAndModuleId($course_id, $module_id, 'order_number');

        $data['course'] = $course;
        $data['module'] = $module;
        $data['lessons'] = $lessons;

        $this->render('lessons_adm', $data);
    }

    public function cad($args)
    {
        $course_id = $args['idcourse'];
        $module_id = $args['idmodule'];

        $course = CourseHandler::findById($course_id);
        $module = ModuleHandler::findById($module_id);

        $data['course'] = $course;
        $data['module'] = $module;

        $this->render('lesson_cad', $data);
    }

    public function cad_action($args)
    {
        $course_id = filter_input(INPUT_POST, "course_id");
        $module_id = filter_input(INPUT_POST, "module_id");
        $name = filter_input(INPUT_POST, "name");
        $url = filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL);

        if (empty($course_id) or empty($module_id) or empty($name) or empty($url)) {
            echo "Faltando dados";
            $this->redirect('/cursos/adm');
        }

        // Verifica se é do youtube
        if (strpos($url, 'watch?v=') !== false) {
            // Substitui "watch?v=" por "embed/"
            $url = str_replace('watch?v=', 'embed/', $url);
            $url = $url . "?rel=0";
        }

        // transformando o nome em slug
        $slug = (new Slugify())->slugify($name);

        // decidir numero de ordem quer será gravado no banco
        $lessons = LessonHandler::findByCourseId($course_id);
        $max_order_number = 1;
        foreach ($lessons as $lesson) {
            if ($lesson->getOrderNumber() >= $max_order_number) {
                $max_order_number = $lesson->getOrderNumber() + 1;
            }
        }

        // montar o objeto para mandar para o banco
        $newLesson = new Lesson;
        $newLesson->setName($name);
        $newLesson->setSlug($slug);
        $newLesson->setOrderNumber($max_order_number);
        $newLesson->setModuleId($module_id);
        $newLesson->setCourseId($course_id);
        $newLesson->setUrl($url);

        // gravar no banco
        LessonHandler::add($newLesson);

        $this->redirect("/curso/{$course_id}/modulo/{$module_id}/aulas");
    }
}
