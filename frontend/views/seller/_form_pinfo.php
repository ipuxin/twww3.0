<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Sinfo */
/* @var $form yii\widgets\ActiveForm */
?>



    <?php
    $form = ActiveForm::begin([
        'id' => 'form-pro-add',
        'options' => ['class' => 'form form-horizontal'],
        'fieldConfig' => [
            'template' => " {label}\n<div class=\"formControls col-lg-5 \">{input}  {error}</div> ",
            'labelOptions' => ['class' => 'col-lg-3 control-label text-right'], // label 的样式定义
        ],
    ]);
    ?>

    <?php   //echo $form->field($model, 'sid')->textInput() ?>

    <?= $form->field($model, 'shopname')->textInput(['maxlength' => true]) ?>
    <div class="form-group">

        <div class="col-lg-offset-3 col-lg-8">
            <p style="color:red">注：企业店铺出现旗舰、专卖、专营、官方、直营、官、官方认证、官方授权、商城、商店、企业、特卖、折扣等关键词，需要根据相关证明资质而定，否则会被驳回</p>
        </div>
    </div>



    <?= $form->field($model, 'shoplogo')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload',[])  ?>

    <div  class="form-group">

        <div class="col-lg-offset-3 col-lg-8">
            <p style="color:red">注：正方形图片（尺寸为300*300），大小不超过32k。请务必使用自己的店铺logo。<br>出现以下几类的logo，审核时将会被驳回：</p>
            <p style="color: blue; line-height: 2;">1.内容上直接使用实物照片。2.网上下载未经处理的图片。3.出现广告语。<br>4.使用未经授权的他人品牌。5.出现第三方电商平台信息。6.使用拼一下logo。</p>
        </div>
    </div>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <div class="col-lg-offset-3 col-lg-8">
            <p style="color:red">注：正方形图片（尺寸为300*300），大小不超过32k。请务必使用自己的店铺logo。<br>出现以下几类的logo，审核时将会被驳回：</p>
            <p style="color: blue; line-height: 2;">1.内容上直接使用实物照片。2.网上下载未经处理的图片。3.出现广告语。<br>4.使用未经授权的他人品牌。5.出现第三方电商平台信息。6.使用拼一下logo。</p>
        </div>

    </div>


    <?= $form->field($model, 'zhifubaoaccount')->textInput(['maxlength' => true]) ?>

    <?php  // echo $form->field($model, 'status')->textInput() ?>

    <?php  //echo  $form->field($model, 'created_at')->textInput() ?>

    <?php   //echo $form->field($model, 'updated_at')->textInput() ?>
    <div class="form-group">

        <div class="col-lg-offset-3 col-lg-8">
            <p style="color:red;">注：经营食品类和酒类的企业，需要在质检报告上上传《食品流通许可证》和《酒类流通许可证》（酒类流通登记备案）</p>
        </div>
    </div>

    <div class="form-group row clearfix text-center">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '下一步') : Yii::t('app', '更新'), ['class' => $model->isNewRecord ? 'btn   pdd-danger  submit-btn ' : 'btn   pdd-danger  submit-btn ']) ?>
    </div>

    <?php ActiveForm::end(); ?>
