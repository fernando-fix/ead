<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\CourseHandler;
use src\handlers\LessonHandler;
use src\handlers\ModuleHandler;

class ModuleController extends Controller
{
    public function upOne($args)
    {
        dd($args);
    }
    public function upAll($args)
    {
        dd($args);
    }
    public function downOne($args)
    {
        dd($args);
    }
    public function downAll($args)
    {
        dd($args);
    }
    public function del($args)
    {
        $course_id = $args['idcourse'];

        $course = CourseHandler::findById($course_id);
        $module_id = $args['idmodule'];

        // depois colocar a checagem para ver se o modulo é do curso mesmo.

        ModuleHandler::delByModuleId($module_id);
        LessonHandler::delByModuleId($module_id);

        $this->redirect("/curso/{$course->getSlug()}/modulos");
    }
}
