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
    public function create() {
        return $this->save();
    }
 /**
     * @return $id
     */
    public function getId()
    {
        return $this->id;
    }

 /**
     * @return $username
     */
    public function getUsername()
    {
        return $this->username;
    }

 /**
     * @return $password
     */
    public function getPassword()
    {
        return $this->password;
    }

 /**
     * @return $create_time
     */
    public function getCreate_time()
    {
        return $this->create_time;
    }

 /**
     * @return $login_time
     */
    public function getLogin_time()
    {
        return $this->login_time;
    }

 /**
     * @return $login_ip
     */
    public function getLogin_ip()
    {
        return $this->login_ip;
    }

 /**
     * @return $nick
     */
    public function getNick()
    {
        return $this->nick;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setCreate_time($create_time)
    {
        $this->create_time = $create_time;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setLogin_time($login_time)
    {
        $this->login_time = $login_time;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setLogin_ip($login_ip)
    {
        $this->login_ip = $login_ip;
    }

 /**
     * @param !CodeTemplates.settercomment.paramtagcontent!
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

}
