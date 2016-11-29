<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = '联系我们';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mycon mt10">
    <div class="container mt30 bounceIn animated">
        <div class="row">
            <div class="mail">
                <!-- container -->
                <div class="container">
                    <div class="col-md-12 contact-form  bounceIn animated">
                        <div class="col-md-6 contact-form  ">

                            <h2 class="   bounceIn animated" style="margin: 20px 0; font-size: 30px; color: #333;">
                                拼一下商务留言板</h2>
                            <p class="  bounceIn animated" style="margin: 30px 0; font-size: 14px; color: #666;">
                                如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。</p>

                            <!--  <form>
                                  <input type="text" placeholder="姓名" required>
                                  <input type="text" placeholder="手机" required>
                                  <input type="text" placeholder="E-mail" required>
                                  <input type="text" placeholder="经营城市" required>
                                  <input type="text" placeholder="预计投资金额" required>
                                  <input type="text" placeholder="现经营生意" required>
                                  <input type="submit" value="提交申请">
                              </form>  -->

                            <?= $this->render('@app/views/book/_formlxwm', [
                                'model' => $model,
                            ]) ?>
                            <?php
                            if (Yii::$app->getSession()->hasFlash('success')) {
                                echo Alert::widget([
                                    'options' => [
                                        'class' => 'alert-success', //这里是提示框的class
                                    ],
                                    'body' => Yii::$app->getSession()->getFlash('success'), //消息体
                                ]);
                            }
                            ?>
                        </div>

                        <div class="col-md-6 contact-form  ">
                            <p style="text-align: center;"><br></p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司名称：上海果色天香网络科技有限公司</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司地址：上海市杨浦区国定东路200号</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;免费电话：400-8088-917</p>
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;招商地址：上海市普陀区中江路118弄22号<br></p>
                            <p style="text-align: center;">
                                <img width="530" height="260" src="http://api.map.baidu.com/staticimage?center=121.399162,31.228743&amp;zoom=15&amp;width=530&amp;height=260&amp;markers=121.400204,31.22801">
                            </p>
                            <p style="text-align: center;">招商部地址</p>
                            <p style="text-align: center;"><br>
                                <img width="530" height="260" src="http://api.map.baidu.com/staticimage?center=121.526698,31.305343&amp;zoom=13&amp;width=530&amp;height=260&amp;markers=121.526141,31.303415">
                            </p>
                            <p style="text-align: center;">项目方地址</p></div>
                    </div>
                    <div class="clearfix"></div>

                </div>
            </div>
            <!-- //container -->


        </div>

    </div>
    <div class="container">
        <div class="row my-yellow-line mt30">
        </div>
    </div>
    <div class="row">
        <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
    </div>
</div>

