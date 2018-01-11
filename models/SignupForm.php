<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $email;
    public $login;
    public $password;
    public $firstName;
    public $lastName;

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => 'app\models\User'],
            ['login', 'unique', 'targetClass' => 'app\models\User'],
            ['password', 'string', 'min' => 2, 'max' => 10]
        ];
    }

    public function signup()
    {
        $user = new User();

        $user->email = $_POST['SignupForm']['email'];
        $user->login = $_POST['SignupForm']['login'];
        $user->password = $_POST['SignupForm']['password'];
        $user->first_name = $_POST['SignupForm']['firstName'];
        $user->last_name = $_POST['SignupForm']['lastName'];
        $user->role = 'user';

        return $user->save();
    }
}