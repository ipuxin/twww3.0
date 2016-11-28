<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Pinfo */

$this->title = Yii::t('app', 'Create Pinfo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
