<?php
namespace common\models;

use yii;
use yii\db\ActiveRecord;

/**
 * Class Phone
 * @package common\models
 * 手机注册，验证码
 */
class Phone extends ActiveRecord
{
    public $verifyCode; //验证码字段

    public static function tableName()
    {
        return 'phone';
    }

    public function attributeLabels()
    {
        return [
            'verifyCode' => '图形验证码',
            'code' => '短信验证码',
            'phone' => '手机号码',
            'repass' => '确认密码'
        ];
    }

    public function rules()
    {
        return [
            ['phone', 'required', 'on' => ['myphone']],
            ['phone', 'integer', 'on' => ['myphone']],
            ['phone', 'string', 'min' => 11, 'max' => 11, 'on' => ['myphone']],
            ['phone', 'match', 'pattern' => '/^1[0-9]{10}$/', 'message' => '{attribute}必须为1开头的11位纯数字', 'on' => ['myphone']],
            ['phone', 'unique', 'message' => '手机号已注册过', 'on' => ['findmobile']],

//            ['code', 'required', 'on' => ['phoneLogin']],
//            ['code', 'integer', 'on' => ['phoneLogin']],
//            ['code', 'string', 'min' => 4, 'max' => 4, 'on' => ['phoneLogin']],
//            ['code', 'required', 'requiredValue' => $this->getCode(), 'message' => '手机验证码输入错误', 'on' => ['phoneLogin']],

            //captchaAction 是生成验证码的控制器
            ['verifyCode', 'captcha', 'captchaAction' => 'page/captcha', 'message' => '验证码不正确', 'on' => ['myphone']],
        ];
    }

    /**
     * @param $mobile
     * 判断手机号是否注册过，如果注册过直接跳转到协议页面
     */
    public function findByMobile($data)
    {
        $this->scenario = 'findmobile';
        //如果验证通过，说明没有注册，则执行发送验证码前的校验
//        $res = self::find()->where();
//        echo '<pre>';
//        print_r($data);
//        echo '<hr>';
//        print_r($this->load($data));
//        echo '<hr>';
//        print_r($this->validate());
//        echo '</pre>';
//        exit('<hr>');

        if ($this->load($data) && $this->validate()) {
//            $isSet = $this->validate();
            echo '<pre>';
            print_r( $this->validate());
            echo '</pre>';
            exit('<hr>');
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $mobile
     * 手机号，验证码验证
     * 发送验证码前的校验
     */
    public function sendCode($mobile)
    {
        //设置场景为：phone
        //设定场景为登录
        $this->scenario = 'phone';

    }

    /**
     * @return int
     * 验证手机验证码，设置场景为：phoneLogin
     */
    public function getCode()
    {
        $this->scenario = 'phoneLogin';
        //检查session是否打开
        if (!Yii::$app->session->isActive) {
            Yii::$app->session->open();
        }
        //取得验证码和短信发送时间session
        $signup_sms_code = intval(Yii::$app->session->get('login_sms_code'));
        $signup_sms_time = Yii::$app->session->get('login_sms_time');
        if (time() - $signup_sms_time < 600) {
            return $signup_sms_code;
        } else {
            return 888888;
        }
    }

}