<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = Yii::t('app', '个人商家入驻信息');
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>


<div style="background: #f1f1f1;">
    <div class="container">
        <ul class="navigation">
            <li class="current">
                <div>
                    <i>1</i>
                    <p>个人/企业信息填写</p>
                </div>
            </li>
            <li>
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

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>

        </div>

    </div>


    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script>

        $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd hh:ii'

        });
        $('#datetimepicker1').datetimepicker({
            format: 'yyyy-mm-dd hh:ii'

        });
    </script>

