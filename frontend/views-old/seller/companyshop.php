<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Seller */

$this->title = Yii::t('app', '商家注册信息');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Sellers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="background: #f1f1f1;">
    <div class="container">
        <ul class="navigation">
            <li >
                <div>
                    <i>1</i>
                    <p>个人/企业信息填写</p>
                </div>
            </li>
            <li class="current">
                <div>
                    <i>2</i>
                    <p>店铺信息填写</p>
                </div>
            </li>
            <li>
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

        <div class="add-info">
            <h4>店铺管理人基本信息</h4>

            <?= $this->render('_form_pinfo', [
                'model' => $model,
            ]) ?>

        </div>
    </div>
</div>


<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.js"></script>

