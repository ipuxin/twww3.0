<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = '请等待';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>	<div style="background: #f1f1f1;">
    <div class="container">
        <ul class="navigation">
            <li >
                <div>
                    <i>1</i>
                    <p>个人/企业信息填写</p>
                </div>
            </li>
            <li >
                <div>
                    <i>2</i>
                    <p>店铺信息填写</p>
                </div>
            </li>
            <li class="current">
                <div>
                    <i>3</i>
                    <p>资质审核</p>
                </div>
            </li>
            <li>
                <div>
                    <i>4</i>
                    <p>入驻成功</p>
                </div>
            </li>
        </ul>

        <div class="add-info1 ">
            <p>您的申请已提交，请耐心等待！</p>
            <p>我们将在48小时内处理您的申请！</p>
        </div>
    </div>
</div>
	