<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\LoginHandler;
use src\handlers\UserHandler;

class LoginController extends Controller
{
    private $loggedUser;
    private $isLogged = false;

    public function __construct()
    {
        $this->loggedUser = LoginHandler::getLoggedUser();
        if (!empty($this->loggedUser)) {
            $this->isLogged = true;
        }
    }

    public function index()
    {
        $this->render('login');
    }

    public function action()
    {
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if ($email and $password) {

            $user = UserHandler::findByEmail($email);

            // se não achou o usuário
            if (empty($user)) {
                echo "Não achou";
                exit;
            }

            // verificar senha
            if (!password_verify($password, $user['password'])) {
                echo "errou";
                exit;
            }

            // gerar novo token e gravar
            LoginHandler::_genToken($user['id']);


            var_dump($user);
        } else {
            $this->redirect("/login");
        }
    }
}
