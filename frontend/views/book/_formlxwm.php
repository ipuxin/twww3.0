<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">
    <?php $form = ActiveForm::begin(); ?>
        <?php    // echo  $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

  <?= $form->field($model, 'name', [
        'template' => '  {input} <div class="help-block"></div>',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('name'),
            'value'=>'测试姓名'
        ],
    ])?>

    <?= $form->field($model, 'tel' , [
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('tel'),
            'value'=>'18039208956'
        ],
		])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail' ,[
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('mail'),
            'value'=>'631752525@qq.com'
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city',[
        'template' => '  {input} <div class="help-block">{error}</div>',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('city'),
            'value'=>'郑州'
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'money',[
        'template' => '  {input}',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('money'),
            'value'=>'100000'
        ],])->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business',[
        'template' => '  {input}',
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('business'),
            'value'=>'水果销售'
        ],])->textInput(['maxlength' => true]) ?>

    <div class="form-group  " >
        <input type="submit" value="提交申请">
    </div>

    <?php ActiveForm::end(); ?>

</div>
