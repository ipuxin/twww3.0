<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title ='联系我们';
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
                    <h2 class="text-center bounceIn animated" style="margin: 20px 0; font-size: 30px; color: #333;">拼一下商务留言板</h2>
                    <p class="text-center bounceIn animated" style="margin: 30px 0; font-size: 14px; color: #666;">如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。</p>
                    <div class="col-md-12 contact-form wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                        <!--     <form>
                <input type="text" placeholder="姓名" required>
                <input type="text" placeholder="手机" required>
                <input type="text" placeholder="E-mail" required>
                <input type="text" placeholder="经营城市" required>
                <input type="text" placeholder="预计投资金额" required>
                <input type="text" placeholder="现经营生意" required>
                <input type="submit" value="提交申请">
            </form>


            <h1><?= Html::encode($this->title) ?></h1>
-->
                        <?= $this->render('_form', [
                            'model' => $model,
                        ]) ?>

                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //container -->
        </div>

    </div>
    <div class="container">
        <div class="row my-yellow-line mt30">
        </div>
        <div class="row app-tip">
            <img src="/images/app_07.jpg" alt="">
            <span>拼一下是全新的购物方式，是真正意义的团购。用户通过发起朋友和家人令居等的拼团，以更低的价格获得更好的产品</span>
        </div>
    </div>
    <div class="row">
        <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
    </div>
</div>


