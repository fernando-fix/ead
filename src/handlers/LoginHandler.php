<?php

namespace src\handlers;

use \core\Model;
use \src\models\User;

class LoginHandler
{

    public static function getLoggedUser()
    {
        $token = "";
        if (isset($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $loggedUser = UserHandler::findByToken($token);
            // se achou usuário gera novo token e grava no banco
            if (!empty($loggedUser)) {
                self::_genToken($loggedUser->getId());
                // retorna usuário logado
                return $loggedUser;
            }
        }
        $_SESSION['token'] = "";
        return false;
    }

    public static function _genToken($userId)
    {
        $token = md5(time() . rand(1111, 9999) . time());
        $_SESSION['token'] = $token;
        UserHandler::updateToken($token, $userId);
        return $token;
    }
}
