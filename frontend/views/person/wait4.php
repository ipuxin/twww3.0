<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = '未通过';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?> <div style="background: #f1f1f1;">
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
            <img src="images/dan.png" />
            <p class="suc">审核未通过</p>
            <p class="dan">您填写开店信息未通过</p>
            <p>对不起，您填写的开店信息审核未通过，不能发布商品，请重新按照要求再次填写。</p>
            <a href="company.html" class="btn btn-primary btn-lg" style="background: #fd7c69; margin: 20px 0;">修改申请</a>
        </div>
    </div>
</div>