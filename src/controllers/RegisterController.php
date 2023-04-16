<?php

namespace src\controllers;

use \core\Controller;
use src\handlers\UserHandler;
use \src\models\User;

class RegisterController extends Controller
{
    public function userCad()
    {
        $this->render('user_cad');
    }

    public function userCadAction()
    {
        $name = filter_input(INPUT_POST, "name");
        $password = filter_input(INPUT_POST, "password");
        $repeat_password = filter_input(INPUT_POST, "repeat_password");
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $cpf = filter_input(INPUT_POST, "cpf");
        $phone = filter_input(INPUT_POST, "phone");

        // se não receber algum dado dá erro
        if (!$name or !$password or !$repeat_password or !$email or !$cpf or !$phone) {
            echo "Não recebi todo os dados!";
            exit;
        }

        // somente aceitar senha >= a 5
        if (strlen($password) < 5) {
            echo "senha não pode ser menor que 5 caracteres!";
            exit;
        }

        // as senhas tem que bater pra continuar
        if ($password != $repeat_password) {
            echo "As senhas não batem";
            exit;
        }

        // não pode ter email igual no banco
        if (UserHandler::findByEmail($email)) {
            echo "Email já existe no banco";
            exit;
        }

        // montar objeto de usuário
        $user = new User;
        $user->setName($name);
        $user->setPassword(password_hash($password, PASSWORD_DEFAULT));
        $user->setEmail($email);
        $user->setCpf($cpf);
        $user->setPhone($phone);

        UserHandler::add($user);

        $this->redirect("/cadastrar");
    }
}
