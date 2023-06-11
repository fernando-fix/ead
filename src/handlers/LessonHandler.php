<?php

namespace src\handlers;

use \core\Model;
use src\models\Module;
use \src\models\Lesson;

class LessonHandler
{
    // retorna todos os cursos do banco
    public static function findAll(): array
    {
        $lessons = Lesson::select()
            ->get();
        return count($lessons) > 0 ? self::_postArrayToObject($lessons) : $lessons;
    }

    // retorna um curso do banco pelo id
    public static function findById($id)
    {
        $lesson = Lesson::select()
            ->where('id', $id)
            ->one();
        return $lesson ? self::_postItemToObject($lesson) : false;
    }

    // retorna um curso do banco pelo slug
    public static function findBySlug($slug)
    {
        $lesson = Lesson::select()
            ->where('slug', $slug)
            ->one();
        return $lesson ? self::_postItemToObject($lesson) : false;
    }


    // retorna as aulas pelo id do curso
    public static function findByCourseId($id)
    {
        $lessons = Lesson::select()
            ->where('course_id', $id)
            ->get();
        return count($lessons) > 0 ? self::_postArrayToObject($lessons) : $lessons;
    }

    // retorna a primeira aula de uma curso
    public static function findFirstLessonByCourseId($id, $orderBy = 'id')
    {
        // para achar a primeira lição primeiro lista por módulo depois por lição
        $lesson = Lesson::select()
            ->where('course_id', $id)
            ->orderBy('module_id')
            ->orderBy($orderBy)
            ->one();
        return $lesson ? self::_postItemToObject($lesson) : false;
    }

    public static function findByModuleId($id, $orderBy = 'id')
    {
        $lessons = Lesson::select()
            ->where('module_id', $id)
            ->orderBy($orderBy)
            ->get();
        return count($lessons) > 0 ? self::_postArrayToObject($lessons) : $lessons;
    }

    public static function findByCourseAndModuleId($course_id, $module_id, $orderBy = 'id')
    {
        $lessons = Lesson::select()
            ->where('course_id', $course_id)
            ->where('module_id', $module_id)
            ->orderBy($orderBy)
            ->get();
        return count($lessons) > 0 ? self::_postArrayToObject($lessons) : $lessons;
    }


    public static function add(Lesson $lesson)
    {
        $lesson->insert(
            [
                [
                    'name' => $lesson->getName(),
                    'slug' => $lesson->getSlug(),
                    'order_number' => $lesson->getOrderNumber(),
                    'module_id' => $lesson->getModuleId(),
                    'course_id' => $lesson->getCourseId(),
                    'url' => $lesson->getUrl()
                ],
            ]
        )->execute();
    }

    public static function delByCourseId($course_id)
    {
        Lesson::delete()
            ->where('course_id', $course_id)
            ->execute();
        return true;
    }

    public static function delByModuleId($module_id)
    {
        Lesson::delete()
            ->where('module_id', $module_id)
            ->execute();
        return true;
    }

    public static function _postItemToObject($lesson)
    {
        $newLesson = new Lesson();

        $newLesson->setId($lesson['id']);
        $newLesson->setName($lesson['name']);
        $newLesson->setSlug($lesson['slug']);
        $newLesson->setOrderNumber($lesson['order_number']);
        $newLesson->setModuleId($lesson['module_id']);
        $newLesson->setCourseId($lesson['course_id']);
        $newLesson->setUrl($lesson['url']);

        return $newLesson;
    }

    public static function _postArrayToObject($lessons)
    {
        $newLessonArray = [];

        foreach ($lessons as $lesson) {
            $newLesson = self::_postItemToObject($lesson);
            $newLessonArray[] = $newLesson;
        }

        return $newLessonArray;
    }
}
