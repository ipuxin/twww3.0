<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('shop', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="person-view">

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
            'email:email',
            'password',
            'personid',
            'business',
            'personpica',
            'personpicb',
            'person_id_timestar',
            'person_id_timeend',
            'person_id_andheadpic',
            'person_halfbody',
            'trademark',
            'brand_certificate',
            'qc_report',
            'qc_other',
            'shopname',
            'shoplogo',
            'address',
            'zhifubaoaccount',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
