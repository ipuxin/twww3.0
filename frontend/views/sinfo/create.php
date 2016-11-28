<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sinfo */

$this->title = Yii::t('app', 'Create Sinfo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sinfos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
