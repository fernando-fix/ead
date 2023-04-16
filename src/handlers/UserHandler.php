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
        return count($users) < 1 ? self::_postArrayToObject($users) : $users;
    }

    public static function findById(int $id)
    {
        $user = User::select()
            ->where('id', $id)
            ->one();

        return $user ? self::_postItemToObject($user) : false;
    }

    public static function findByEmail($email)
    {
        $user = User::select()
            ->where('email', $email)
            ->one();

        return $user ? self::_postItemToObject($user) : false;
    }

    public static function findByToken($token)
    {
        $user = User::select()
            ->where('token', $token)
            ->one();

        return $user ? self::_postItemToObject($user) : false;
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

    public static function add(User $user): object
    {
        User::insert(
            [
                'name' => $user->getName(),
                'password' => $user->getPassword(),
                'email' => $user->getEmail(),
                'cpf' => $user->getCpf(),
                'phone' => $user->getPhone(),
                'avatar' => $user->getAvatar(),
                'token' => $user->getToken()
            ]
        )
            ->execute();

        return $user;
    }

    public static function _postItemToObject($user)
    {
        $newUser = new User();

        $newUser->setId($user['id']);
        $newUser->setName($user['name']);
        $newUser->setPassword($user['password']);
        $newUser->setEmail($user['email']);
        $newUser->setCpf($user['cpf']);
        $newUser->setPhone($user['phone']);
        $newUser->setAvatar($user['avatar']);
        $newUser->setToken($user['token']);

        return $newUser;
    }
    public static function _postArrayToObject($users)
    {
        $newUserArray = [];

        foreach ($users as $user) {
            $newUser = self::_postItemToObject($user);
            $newUserArray[] = $newUser;
        }

        return $newUserArray;
    }
}
