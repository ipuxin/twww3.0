<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Seller */

$this->title = Yii::t('shop', 'Create Seller');
$this->params['breadcrumbs'][] = ['label' => Yii::t('shop', 'Sellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="seller-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

