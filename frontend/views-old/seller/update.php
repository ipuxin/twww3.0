<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Seller */

$this->title = Yii::t('shop', 'Update {modelClass}: ', [
    'modelClass' => 'Seller',
]) . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('shop', 'Sellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('shop', 'Update');
?>
<div class="seller-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
