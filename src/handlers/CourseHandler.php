<?php

namespace src\handlers;

use \core\Model;
use \src\models\Course;

class CourseHandler
{
    // retorna todos os cursos do banco
    public static function findAll(): array
    {
        $courses = Course::select()
            ->get();
        return count($courses) > 0 ? self::_postArrayToObject($courses) : $courses;
    }

    // retorna um curso do banco pelo id
    public static function findById($id)
    {
        $course = Course::select()
            ->where('id', $id)
            ->one();
        return $course ? self::_postItemToObject($course) : false;
    }

    // retorna um curso do banco pelo slug
    public static function findBySlug($slug)
    {
        $course = Course::select()
            ->where('slug', $slug)
            ->one();
        return $course ? self::_postItemToObject($course) : false;
    }

    public static function add(Course $course)
    {
        $course->insert(
            [
                [
                    'name' => $course->getName(),
                    'slug' => $course->getSlug(),
                    'logo' => $course->getLogo(),
                    'url' => $course->getUrl()
                ],
            ]
        )->execute();
    }

    public static function del($id)
    {
        Course::delete()
            ->where('id', $id)
            ->execute();
        return true;
    }

    public static function _postItemToObject($course)
    {
        $newCourse = new Course();

        $newCourse->setId($course['id']);
        $newCourse->setName($course['name']);
        $newCourse->setSlug($course['slug']);
        $newCourse->setLogo($course['logo']);
        $newCourse->setUrl($course['url']);

        return $newCourse;
    }

    public static function _postArrayToObject($courses)
    {
        $newCourseArray = [];

        foreach ($courses as $course) {
            $newCourse = self::_postItemToObject($course);
            $newCourseArray[] = $newCourse;
        }

        return $newCourseArray;
    }
}
