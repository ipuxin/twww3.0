<?php
use yii\helpers\Html;
use yii\widgets\ListView;
/* @var $this yii\web\View */
$siteconfig=\common\models\System::findOne(['id'=>1]);
$this->title=$siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' =>$siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' =>$siteconfig->description]);
?>


<div class="container" style="margin-top: 50px; ">
    <div class="news-text">
        <h3>合作伙伴<span class="pull-right"> <a href="http://www.pingoing.cn/partner" style="text-decoration: none; color: #333333; font-size: 18px;">查看更多></a></span></h3>

    </div>
    <div class="news-grids">
        <?= ListView::widget([
            'dataProvider' => $dataProvider,
            'layout' => '{items}  <div class="clearfix  "></div> <div class="text-center " style="margin: 15px;"> {pager}</div> ',
            'itemOptions' => ['class' => 'item'],
            'itemView' =>'list_index',
        ]) ?>


    </div>



</div>

<div class="testimonials">
    <div class="container">
        <div class="news-text">
            <h3 style="margin: 30px 0 50px  0;">媒体合作</h3>

        </div>
        <div class="testimonial-nfo wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <div class="row"  >
                <div class="col-md-3 col-xs-3"><img src="images/bd.jpg"  class="img-responsive"></div>
                <div class="col-md-3 col-xs-3"><img src="images/sl0.jpg"  class="img-responsive"></div>
                <div class="col-md-2 col-xs-2 "><img src="images/tx.jpg" class="img-responsive"></div>
                <div class="col-md-2 col-xs-2"><img src="images/sh.jpg" class="img-responsive" style="padding-left: 20px;"></div>
                <div class="col-md-2 col-xs-2"><img src="images/tt.jpg " class="img-responsive"></div>

            </div>
            <div class="row"  style="margin-top: 50px;">
                <div class="col-md-3 col-xs-3" ><img src="images/al.jpg" class="img-responsive"></div>
                <div class="col-md-3 col-xs-3"><img src="images/sd.jpg" class="img-responsive"></div>
                <div class="col-md-3 col-xs-3"><img src="images/zs.jpg" class="img-responsive"></div>
                <div class="col-md-3 col-xs-3"><img src="images/zh.jpg" class="img-responsive"></div>
            </div>
        </div>
    </div>
</div>


