<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\LoginHandler;
use src\handlers\UserHandler;

class HomeController extends Controller
{
    private $loggedUser;
    private $isLogged = false;

    public function __construct()
    {
        $this->loggedUser = LoginHandler::getLoggedUser();
        if ($this->loggedUser) {
            $this->isLogged = true;
        }
    }

    public function index()
    {

        $user = $this->loggedUser;

        $this->render('home', ['users' => $user]);
    }
}
