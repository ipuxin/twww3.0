<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Info */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'info'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
  

	<!-- products-top -->
	<div class="products-top">
		<!-- container -->
		<div class="container">
			<h3 class="wow fadeInRight animated text-center" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;"> <?=  $model->title  ?><span class="pull-right"> </span></h3>
			<p class="text-center" style="font-size: 14px; margin: 20px 0;"><?= date('Y年-m月-d日',$model->created_at) ; ?>   </p>
			<div class="products-top-grids wow fadeInLeft animated " data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<div class="col-md-12 products-grid ">
				  <?= $model->content ?>
				 
					<a href="../" class="pull-right" style="font-size: 16px; color: #333333;">返回上页><i class="fa fa-home"></i></a>
					<div class="clearfix"> </div>
				</div>				
				<div class="clearfix"> </div>
			</div>
	
		</div>
		
		<!-- container -->
 	</div>
	<!-- //products-top -->
 
