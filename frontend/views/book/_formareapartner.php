<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="col-mb-10 col-md-offset-2">
    <?php
    $form = ActiveForm::begin([
        'options' => [
            'class' => 'form-horizontal',
            'role' => 'form'
        ],
    ]); ?>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">姓名</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'name', [
                'template' => '{input} <div class="help-block">{error}</div>',
                'inputOptions' => [
                    'class' => 'form-control my-input-box',
                ],
            ])->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">电话</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'tel', [
                'template' => '{input} <div class="help-block">{error}</div>',
                'inputOptions' => [
                    'class' => 'form-control my-input-box',
                ],
            ])->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">城市</label>
        <div class="col-sm-6">
            <?= $form->field($model, 'city', [
                'template' => '{input} <div class="help-block">{error}</div>',
                'inputOptions' => [
                    'class' => 'form-control my-input-box',
                ],
            ])->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default my-btn-area" style="margin-left: -15px;">提交申请</button>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>