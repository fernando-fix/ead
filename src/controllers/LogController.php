<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\LogHandler;
use src\models\Log;

class LogController extends Controller
{
    public static function register($user_id, $type, $description)
    {
        $newLog = new Log;
        $newLog->setUserId($user_id);
        $newLog->setType($type);
        $newLog->setDescription($description);
        $newLog->setCreatedAt(date('Y/m/d H:i:s'));

        LogHandler::add($newLog);
    }
}
