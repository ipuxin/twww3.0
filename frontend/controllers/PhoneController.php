<?php
namespace frontend\controllers;

use Yii;
use common\models\Phone;
use yii\web\Controller;

class PhoneController extends Controller
{
    /**
     * @return array
     * 验证码
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\captchaAction',
                'maxLength' => 4,
                'minLength' => 4,
                'width' => 80,
                'height' => 40
            ]
        ];
    }

}

?>
}