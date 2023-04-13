<?php

namespace src\controllers;

use \core\Controller;

class TestController extends Controller
{
    public function index()
    {
        echo "<pre>";
        print_r(json_encode($_POST));
        echo "</pre>";
        exit;
    }
}
