<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\UserHandler;

class TestController extends Controller
{
    public function index()
    {
        echo "<pre>";
        print_r(json_encode($_POST));
        echo "</pre>";
        exit;
    }

    public function show()
    {
        echo "<pre>";
        print_r(UserHandler::findAll());
        echo "</pre>";
        exit;
    }
}
