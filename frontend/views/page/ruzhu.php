<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title =' 商家入驻';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<!--nav end  --><div class="rz" style="background: #f1f1f1;">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-md-offset-1 person">
				<h2>个人入驻</h2>
				<p>适合个人、个体户入驻，提供身份证即可入驻</p>
				<p class="rj">
					<a href="person" class="btn btn-primary btn-lg"  style="padding: 10px 30px;">马上入驻</a>
				</p>
			</div>
			<div class="col-md-5 col-md-offset-1 person">
				<h2>企业入驻</h2>
				<p>适合公司/企业入驻，提供营业执照等资料即可入驻</p>
				<label class="checkbox-inline">
					<input type="radio" name="optionsRadiosinline" id="optionsRadios3" checked="checked" value="option1" >旗舰店
				</label>
				<label class="checkbox-inline">
					<input type="radio" name="optionsRadiosinline" id="optionsRadios4" value="option2">专卖店
				</label>
				<label class="checkbox-inline">
					<input type="radio" name="optionsRadiosinline" id="optionsRadios5" value="option3">专营店
				</label>
				<label class="checkbox-inline">
					<input type="radio" name="optionsRadiosinline" id="optionsRadios6" value="option4">普通店
				</label>
				<p class="rj1">
					<a href="company" class="btn btn-primary btn-lg" style="padding: 10px 30px;">马上入驻</a>
				</p>
			</div>
		</div>
	</div>
</div>