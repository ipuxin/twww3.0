<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PersonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="person-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'cityname') ?>

    <?= $form->field($model, 'realname') ?>

    <?= $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'personid') ?>

    <?php // echo $form->field($model, 'business') ?>

    <?php // echo $form->field($model, 'personpica') ?>

    <?php // echo $form->field($model, 'personpicb') ?>

    <?php // echo $form->field($model, 'person_id_timestar') ?>

    <?php // echo $form->field($model, 'person_id_timeend') ?>

    <?php // echo $form->field($model, 'person_id_andheadpic') ?>

    <?php // echo $form->field($model, 'person_halfbody') ?>

    <?php // echo $form->field($model, 'trademark') ?>

    <?php // echo $form->field($model, 'brand_certificate') ?>

    <?php // echo $form->field($model, 'qc_report') ?>

    <?php // echo $form->field($model, 'qc_other') ?>

    <?php // echo $form->field($model, 'shopname') ?>

    <?php // echo $form->field($model, 'shoplogo') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'zhifubaoaccount') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('shop', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('shop', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
