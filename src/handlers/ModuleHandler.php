<?php

namespace src\handlers;

use src\models\Module;

class ModuleHandler
{
    // retorna todos os modulos do banco
    public static function findAll(): array
    {
        $modules = Module::select()
            ->get();
        return count($modules) > 0 ? self::_postArrayToObject($modules) : $modules;
    }

    // retorna um modulo do banco pelo id
    public static function findById($id)
    {
        $module = Module::select()
            ->where('id', $id)
            ->one();
        return $module ? self::_postItemToObject($module) : false;
    }

    // retorna os modulos pelo id do curso
    public static function findByCourseId($id, $orderBy = 'id')
    {
        $modules = Module::select()
            ->where('course_id', $id)
            ->orderBy($orderBy)
            ->get();
        return count($modules) > 0 ? self::_postArrayToObject($modules) : $modules;
    }

    public static function add(Module $module)
    {
        $module->insert(
            [
                [
                    'name' => $module->getName(),
                    'slug' => $module->getSlug(),
                    'order_number' => $module->getOrderNumber(),
                    'course_id' => $module->getCourseId()
                ],
            ]
        )->execute();
    }



    public static function delByCourseId($course_id)
    {
        Module::delete()
            ->where('course_id', $course_id)
            ->execute();
        return true;
    }

    public static function delByModuleId($module_id)
    {
        Module::delete()
            ->where('id', $module_id)
            ->execute();
        return true;
    }

    public static function _postItemToObject($module)
    {
        $newModule = new Module();

        $newModule->setId($module['id']);
        $newModule->setName($module['name']);
        $newModule->setOrderNumber($module['order_number']);
        $newModule->setCourseId($module['course_id']);

        return $newModule;
    }

    public static function _postArrayToObject($module)
    {
        $newModuleArray = [];

        foreach ($module as $module) {
            $newModule = self::_postItemToObject($module);
            $newModuleArray[] = $newModule;
        }

        return $newModuleArray;
    }
}
