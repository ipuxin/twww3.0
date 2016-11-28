<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SellerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="seller-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'cityname') ?>

    <?= $form->field($model, 'realname') ?>

    <?= $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'mail') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'business') ?>

    <?php // echo $form->field($model, 'legal_person') ?>

    <?php // echo $form->field($model, 'personid') ?>

    <?php // echo $form->field($model, 'person_id_timestar') ?>

    <?php // echo $form->field($model, 'person_id_timeend') ?>

    <?php // echo $form->field($model, 'company') ?>

    <?php // echo $form->field($model, 'company_add') ?>

    <?php // echo $form->field($model, 'company_code') ?>

    <?php // echo $form->field($model, 'company_organization_code') ?>

    <?php // echo $form->field($model, 'company_taxpayer_identification_code') ?>

    <?php // echo $form->field($model, 'company_social_code') ?>

    <?php // echo $form->field($model, 'personpida') ?>

    <?php // echo $form->field($model, 'personpidb') ?>

    <?php // echo $form->field($model, 'company_business_license') ?>

    <?php // echo $form->field($model, 'company_business_license_timestar') ?>

    <?php // echo $form->field($model, 'company_business_license_timeend') ?>

    <?php // echo $form->field($model, 'tax_registration_certificate') ?>

    <?php // echo $form->field($model, 'organization_certificate') ?>

    <?php // echo $form->field($model, 'organization_validity_period') ?>

    <?php // echo $form->field($model, 'organization_validity_period_end') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'trademark') ?>

    <?php // echo $form->field($model, 'brand_certificate') ?>

    <?php // echo $form->field($model, 'qc_report') ?>

    <?php // echo $form->field($model, 'qc_other') ?>

    <?php // echo $form->field($model, 'shopname') ?>

    <?php // echo $form->field($model, 'shoplogo') ?>

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
