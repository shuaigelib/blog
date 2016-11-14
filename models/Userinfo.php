<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userinfo".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $create_time
 * @property string $login_time
 * @property string $login_ip
 * @property string $nick
 */
class Userinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['create_time', 'login_time'], 'safe'],
            [['username', 'password', 'login_ip', 'nick'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'create_time' => 'Create Time',
            'login_time' => 'Login Time',
            'login_ip' => 'Login Ip',
            'nick' => 'Nick',
        ];
    }
}
