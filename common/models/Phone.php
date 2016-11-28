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
            ['phone', 'required', 'on' => ['myphone', 'phoneNormal']],
            ['phone', 'integer', 'on' => ['myphone', 'phoneNormal']],
            ['phone', 'string', 'min' => 11, 'max' => 11, 'on' => ['myphone', 'phoneNormal']],
            ['phone', 'match', 'pattern' => '/^1[0-9]{10}$/', 'message' => '{attribute}必须为1开头的11位纯数字', 'on' => ['myphone', 'phoneNormal']],
            ['phone', 'unique', 'message' => '手机号已注册过', 'on' => ['findByMobile']],

            ['code', 'required', 'on' => ['checkCode']],
            ['code', 'integer', 'on' => ['checkCode']],
            ['code', 'string', 'min' => 4, 'max' => 4, 'on' => ['checkCode']],

            //captchaAction 是生成验证码的控制器
            ['verifyCode', 'captcha', 'captchaAction' => 'page/captcha', 'message' => '验证码不正确', 'on' => ['myCaptchaCode']],
        ];
    }

    /**
     * 判断手机号是否合法
     */
    public function phoneNormal($data)
    {
        $this->scenario = 'phoneNormal';

        if ($this->load($data) && $this->validate()) {
            //手机号基础规则符合
            if ($this->findByMobile($data)) {

                //如果手机号存在，返回true，执行登录
                $session = Yii::$app->session;
                $session['phone'] = $data['Phone']['phone'];
                return true;
            } else {
                //手机号不存在，完成注册流程

                //检测验证码是否合法
                if ($this->myCaptchaCode($data)) {
                    //如果验证码通过,发送短信
//                    exit($data['Phone']['phone']);
                    if ($this->sendCode($data['Phone']['phone'])) {
                        //如果发送成功，程序暂停，等待用户输入短信验证码
                        return false;
                    }
                    //发送短信。
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }

    /**
     * @param $mobile
     * 判断手机号是否注册过，如果注册过直接跳转到协议页面
     */
    public function findByMobile($data)
    {
        $this->scenario = 'findByMobile';
        //如果验证通过，说明没有注册，则执行发送验证码前的校验

        //validate 1:表示不存在该手机号
        if ($this->load($data) && $this->validate()) {
            //不存在，接着完成注册
            return false;
        } else {
            return true;
        }
    }

    /**
     * 执行图形验证码
     */
    public function myCaptchaCode($data)
    {
        $this->scenario = 'myCaptchaCode';

        if ($this->load($data) && $this->validate()) {
            return true;
        }
        return false;
    }


    /**
     * @param $mobile
     * 手机号，验证码验证
     * 发送验证码前的校验
     */
    public function sendCode($number)
    {
        //企业ID $userid
        $userid = '';
//用户账号 $account
        $account = 'jksc614';
//用户密码 $password
        $password = '745896';
//发送到的目标手机号码 $mobile
        $mobile = $number;
//验证码
        $code = rand(1000, 9999);
//短信内容 $content
        $content = "您正在登录拼一下招商平台，需要进行校验，验证码：{$code}，请于60秒内完成验证，若非本人操作,请忽略本短信。【拼一下】";

//发送短信（其他方法相同）
        $gateway = "http://sh2.ipyy.com/smsJson.aspx?action=send&userid={$userid}&account={$account}&password={$password}&mobile={$mobile}&content={$content}&sendTime=";
//开启curl获取数据
        $curlobj = curl_init();
//设置curl的参数
        curl_setopt($curlobj, CURLOPT_URL, $gateway);
//不显示头信息
        curl_setopt($curlobj, CURLOPT_HEADER, 0);
//不直接打印
        curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($curlobj);
//4.关闭
        curl_close($curlobj);
        $res = json_decode($res, 1);

        /**
         * Array
         * (
         * [returnstatus] => Success
         * [message] => 操作成功
         * [remainpoint] => 161063
         * [taskID] => 1611153856413679
         * [successCounts] => 1
         * )
         */
        if ($res['successCounts'] > 0) {
            //如果发送短信成功,存储到session;
            $lifetime = 60 * 60 * 2;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['code'] = $code;
            //存储发送时间
            $session['create_time'] = time();

            return true;
        } else {
            return false;
        }
    }

    /**
     * 检测短信验证码是否正确
     */
    public function checkCode($data)
    {
        $this->scenario = 'checkCode';

        if ($this->load($data) && $this->validate()) {
            //验证数据是否正确
            $postCode = intval($data['Phone']['code']);
            $sessionCode = Yii::$app->session['code'];
            if ($postCode == $sessionCode) {
                //如果验证通过，则返回真，准备跳转
                return true;
            }
        }
        return false;
    }

    /**
     * 注册成功，存session，存表
     * Array
     * (
     * [_csrf-frontend] => TGc3MFlPaTQDNAZbHxo5cT8KQFgoHFxrFS16QBEJWXIYNmNJKwUrTQ==
     * [Phone] => Array
     * (
     * [phone] => 17073542686
     * [verifyCode] => fsze
     * [code] => 3228
     * )
     *
     * )
     */
    public function savePhoneData($data)
    {
        //手机号
        $phone = $data['Phone']['phone'];
        //验证码
        $code = $data['Phone']['code'];

        //存表
//        $data['Phone']['use_time'] = $date = time();
//        $data['Phone']['create_time'] = Yii::$app->session['create_time'];
//        $data['Phone']['code'] = $code;
//        $data['Phone']['phone'] = $phone;
//        $data['Phone']['used'] = 1;
        $this->use_time = $date = time();
        $this->create_time = Yii::$app->session['create_time'];
        $this->code = $code;
        $this->phone = $phone;
        $this->used = 1;

        $this->save();

        $lifetime = 60 * 60 * 2;
        $session = Yii::$app->session;
        session_set_cookie_params($lifetime);
        $session['phone'] = $phone;
        $session['code'] = $code;

        return true;
    }

    /**
     * 获取状态
     */
    public function getStatus($phone)
    {
        $mystatus = self::find()->where('phone=:phone', [':phone' => $phone])->one()->mystatus;
        return intval($mystatus);
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