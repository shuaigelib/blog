<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userinfo".
 *
 * @property integer $id
 * @property string $usertype
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $iphone
 * @property string $e_mail
 * @property string $sex
 * @property string $creattime
 * @property string $login_time
 * @property string $login_ip
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
            [['usertype', 'iphone', 'sex'], 'integer'],
            [['username', 'password'], 'required'],
            [['creattime', 'login_time'], 'safe'],
            [['username', 'password', 'name', 'e_mail', 'login_ip'], 'string', 'max' => 50],
            [['usertype'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'usertype' => 'Usertype',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'iphone' => 'Iphone',
            'e_mail' => 'E Mail',
            'sex' => 'Sex',
            'creattime' => 'Creattime',
            'login_time' => 'Login Time',
            'login_ip' => 'Login Ip',
        ];
    }
    
    public function login($param) {
        ;
    }
}
