<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
use  yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = ' 我要开店';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pt">
    <div class="container navtion">
        <ul class="clearfix">
            <li class="active">
                <a href="shop.html">招商首页</a>
            </li>
            <li>
                <a href="lc.html">入驻流程</a>
            </li>
            <li>
                <a href="pro.html">常见问题</a>
            </li>
            <li>
                <a href="busguide.html">商家使用手册</a>
            </li>
        </ul>
    </div>
</div>

<div class="container">

    <!-- 按钮触发模态框 -->
    <div class="mt pull-right">

        <!--		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
        <!--			马上入驻-->
        <!--		</button>-->
        <a href="<?= Url::to(['page/ruzhu']) ?>" class="btn btn-primary btn-lg">
            马上入驻
        </a>


        <!--		<a href="-->
        <? //=  Url::to(['page/busguide']) ?><!--" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
        <!--		<a href="-->
        <? //=  Url::to(['page/busguide']) ?><!--" class="btn btn-primary btn-lg" data-toggle="modal">-->
        <!--			商家使用手册-->
        <!--		</a>-->
        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal1">
            问题咨询
        </button>
    </div>
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        登录
                    </h4>
                </div>
                <form role="form" class="login-content mtk" style="overflow: hidden;">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="请输入手机号">
                    </div>
                    <div class="form-group" id="captchaCode">
                        <img id="captcha" src="images/yzm.jpg">
                        <input type="text" class="form-control" placeholder="请输入右侧验证码" style="border-right: 0;">
                        <span id="change">看不清<br>换一张</span>
                    </div>
                    <div class="form-group" id="code-input" style="float: left;">
                        <input type="text" class="form-control" placeholder="请输入短信验证码" style="border-right: none;">

                    </div>
                    <button type="submit" class="db">发送验证码</button>
                    <div class="form-group">
                        <input type="submit" class="form-control dy" value="登录">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal -->
    </div>
</div>
<!-- 模态框1（Modal） -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    联系方式
                </h4>
            </div>
            <p>咨询电话：400-6590-698</p>
            <p>企业QQ群:526318045</p>
            <p>服务时间：10:00-22:00</p>
            <p style="margin: 20px 0;">入驻过程中，如果遇到问题，请添加拼一下商家入驻咨询群，<br>我们将提供专人解决您的问题。</p>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>


<div class="zs">
    <img src="images/kd.jpg" class="img-responsive">
    <img src="images/s1.jpg" class="img-responsive">
    <img src="images/s2.jpg" class="img-responsive">
    <img src="images/s3.jpg" class="img-responsive">
    <img src="images/s4.jpg" class="img-responsive">

</div>
<!--footer star-->