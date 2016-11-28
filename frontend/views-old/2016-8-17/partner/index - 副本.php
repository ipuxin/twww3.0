<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel common\models\InfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'partner');
$this->params['breadcrumbs'][] = $this->title;
?>
    <!--        <?= Breadcrumbs::widget([

                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [
                ],
                'tag'=>'p',
                'itemTemplate'=>'{link}/',
                'activeItemTemplate'=>'{link}',
                'options'=> ['class' => 'line30 top10'],
            ]) ?>
-->
<div class="products-top">
    <!-- container -->
    <div class="container">
        <h3 class="wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">合作伙伴<span class="pull-right"> <a href="#" style="text-decoration: none; color: #333333; font-size: 18px;">查看更多></a></span></h3>
        <div class="products-top-grids wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
                    <?= ListView::widget([
                        'dataProvider' => $dataProvider,
                        'layout' => '{items}  <div class="clearfix  "></div> <div class="text-center " style="margin: 15px;"> {pager}</div> ',
                        'itemOptions' => ['class' => 'item'],
                        'itemView' =>'list_index',
                     ]) ?>
            </div>
                </div>
            </div>



