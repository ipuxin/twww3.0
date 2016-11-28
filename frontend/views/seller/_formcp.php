<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Seller */
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

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cityname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'realname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'business')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'legal_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_id_timestar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'person_id_timeend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_add')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_organization_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_taxpayer_identification_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_social_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personpida')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personpidb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_business_license')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_business_license_timestar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_business_license_timeend')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tax_registration_certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_validity_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_validity_period_end')->textInput(['maxlength' => true]) ?>

    <?php //echo $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trademark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brand_certificate')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qc_report')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qc_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shopname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoplogo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zhifubaoaccount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('shop', 'Create') : Yii::t('shop', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
