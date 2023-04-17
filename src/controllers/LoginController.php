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
        if ($this->loggedUser) {
            $this->isLogged = true;
        }
    }

    public function userLogin()
    {
        $this->render('user_login');
    }

    public function userLoginAction()
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
            if (!password_verify($password, $user->getPassword())) {
                echo "errou";
                exit;
            }

            // gerar novo token e gravar
            LoginHandler::_genToken($user->getId());

            var_dump($user);
        } else {
            $this->redirect("/entrar");
        }
    }
}
