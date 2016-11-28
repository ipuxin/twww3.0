<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Seller */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('shop', 'Sellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seller-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('shop', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('shop', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('shop', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'cityname',
            'realname',
            'mobile',
            'mail',
            'password',
            'business',
            'legal_person',
            'personid',
            'person_id_timestar',
            'person_id_timeend',
            'company',
            'company_add',
            'company_code',
            'company_organization_code',
            'company_taxpayer_identification_code',
            'company_social_code',
            'personpida',
            'personpidb',
            'company_business_license',
            'company_business_license_timestar',
            'company_business_license_timeend',
            'tax_registration_certificate',
            'organization_certificate',
            'organization_validity_period',
            'organization_validity_period_end',
            'address',
            'trademark',
            'brand_certificate',
            'qc_report',
            'qc_other',
            'shopname',
            'shoplogo',
            'zhifubaoaccount',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
