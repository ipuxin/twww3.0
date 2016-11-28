<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title =' 入驻流程';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>	<div class="pt">
	<div class="container navtion">
		<ul class="clearfix">
			<li>
				<a href="shop.html">招商首页</a>
			</li>
			<li class="active">
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
		 
		<a href="<?=  Url::to(['page/ruzhu']) ?>" class="btn btn-primary btn-lg"  >
			马上入驻
		</a>
<!--		<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
<!--			商家使用手册-->
<!--		</button>-->
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
						<input type="text" class="form-control" placeholder="请输入右侧验证码">

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
<div class="zs" style="margin: 20px 0;">
	<img src="images/rz1.jpg" class="img-responsive">
	<img src="images/rz2.jpg" class="img-responsive">
	<img src="images/rz3.jpg" class="img-responsive">
	<img src="images/rz4.jpg" class="img-responsive">
	<img src="images/rz5.jpg" class="img-responsive">
	<img src="images/rz6.jpg" class="img-responsive">
</div>
<!--footer star--><!--footer star-->