<?php

namespace src\handlers;

use \core\Model;
use \src\models\User;

class UserHandler
{
    // retorna todos os usuários do banco
    public static function findAll(): array
    {
        $users = User::select()
            ->get();
        return $users;
    }

    public static function findById(int $id): array
    {
        $user = User::select()
            ->where('id', $id)
            ->one();

        // se não retornar resultado vira array
        if (!is_array($user)) {
            $user = [];
        }
        return $user;
    }

    public static function findByEmail($email): array
    {
        $user = User::select()
            ->where('email', $email)
            ->one();

        // se não retornar resultado vira array
        if (!is_array($user)) {
            $user = [];
        }

        return (array) $user;
    }

    public static function findByToken($token): array
    {
        $user = User::select()
            ->where('token', $token)
            ->one();

        // se não retornar resultado vira array
        if (!is_array($user)) {
            $user = [];
        }
        return $user;
    }

    public static function updateName($name, $id)
    {
        User::update()
            ->set('name', $name)
            ->where('id', $id)
            ->execute();
        return true;
    }

    public static function updatePassword($password, $id)
    {
        User::update()
            ->set('password', $password)
            ->where('id', $id)
            ->execute();
        return true;
    }

    public static function updateToken($token, $id)
    {
        User::update()
            ->set('token', $token)
            ->where('id', $id)
            ->execute();
        return true;
    }
}
