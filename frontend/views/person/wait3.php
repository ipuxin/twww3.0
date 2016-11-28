<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Person */

$this->title = '入驻成功';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'People'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>	<!--nav end  -->
<div style="background: #f1f1f1;">
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
            <li>
                <div>
                    <i>3</i>
                    <p>资质审核</p>
                </div>
            </li>
            <li class="current">
                <div>
                    <i>4</i>
                    <p>入驻成功</p>
                </div>
            </li>
        </ul>

        <div class="add-info1 ">
            <img src="images/suc.png" />
            <p class="suc">审核通过</p>
            <p class="con">恭喜您，审核已通过。请牢记您的账号、密码，快登陆拼一下官方后台<br>
                <a href="http://pyx.pingoing.cn/">http://pyx.pingoing.cn/</a>看看您的小店吧~
            </p>
        </div>
    </div>
</div>
</script>