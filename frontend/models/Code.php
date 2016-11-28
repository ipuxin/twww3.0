<?php
namespace frontend\models;

use yii\base\Model;

class Code extends Model{
	public $code;

	public function rules(){
		return [
		    //captchaAction => 控制器/方法名
			['code' , 'captcha' , 'captchaAction' => 'demo/captcha' , 'message' => '验证码不正确'],
		];
	}

}











?>