<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "user".
 *
 * @property integer $id_user
 * @property string $email
 * @property string $password
 * @property string $first_name
 * @property string $last_name
 * @property string $login
 * @property string $auth_key
 * @property string $access_token
 * @property string $role
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'password', 'first_name', 'last_name', 'login'], 'required'],
            [['email', 'password', 'first_name', 'last_name', 'login', 'auth_key', 'access_token'], 'string', 'max' => 45],
        ];
    }
}
