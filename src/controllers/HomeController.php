<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\LoginHandler;

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
        LogController::register(1, 'tipo', 'registro qualquer');

        $user = $this->loggedUser;

        $this->render('home', ['users' => $user]);
    }

    public function logout()
    {
        $this->isLogged = false;
        $this->loggedUser = null;
        $_SESSION['token'] = null;
        
        $this->redirect('/');
    }
}
