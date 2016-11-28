<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$siteconfig = \common\models\System::findOne(['id' => 1]);
$this->title = $siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' => $siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $siteconfig->description]);
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- 轮播（Carousel）指标 -->

    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active xs-hide">
            <img src="/images/ind_lg_ban_02.jpg" alt="First slide">
        </div>
        <div class="item active my-hide xs-show">
            <img src="/images/xs_ind_ban_03.jpg" alt="First slide">
        </div>
    </div>
    <!-- 轮播（Carousel）导航 -->
</div>
<!--banner end-->
<!--
汇集10年以上经验的资深买手
优选本地好货，给您提供24h达的配送服务
-->
<div class="mycon">
    <div class="containe ind-tit-box-a">
        <div class="row">
            <div class="col-lg-3 col-md-5  col-sm-4  col-xs-3">
                <div class="ind-tit-line-l"></div>
                <div class="ind-tit-dot-l"></div>
            </div>
            <div class="col-lg-6 col-md-2  col-sm-4  col-xs-6 ind_titb">汇集10年以上经验的资深买手<br>
                <span class="xs-hide">优选精品好货，给您提供极速直达的配送服务</span>
            </div>
            <div class="col-lg-3 col-md-5 col-sm-4 col-xs-3">
                <div class="ind-tit-line-r"></div>
                <div class="ind-tit-dot-r"></div>
            </div>
        </div>
        <div class="row ind-cen-big-img">
            <img src="/images/ind_cen_big_06.jpg" alt="汇集10年以上经验的资深买手" class="img-responsive center-block">
        </div>
    </div>
    <!----
    汇集10年以上经验的资深买手
    优选本地好货，给您提供24h达的配送服务
    -->
    <!--活动专区-->
    <div class="containe ind-tit-box-a">
        <div class="row">
            <div class="col-lg-5 col-md-5  col-sm-4  col-xs-3">
                <div class="ind-tit-line-l"></div>
                <div class="ind-tit-dot-l"></div>
            </div>
            <div class="col-lg-2 col-md-2  col-sm-4  col-xs-6 ind_tita">
                活动专区
            </div>
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-3">
                <div class="ind-tit-line-r"></div>
                <div class="ind-tit-dot-r"></div>
            </div>
        </div>
    </div>
    <div class="lc">
        <div class="container">
            <div class="lc-show">
                <ul>
                    <li><a href=""><img src="/images/ind_f_img_23.jpg" class="img-responsive center-block">
                            <p>好产品，拼出乐趣，团到实惠</p></a></li>

                    <li><a href=""><img src="/images/ind_f_img_25.jpg" class="img-responsive center-block">
                            <p>超值产品，1元抢购</p></a></li>

                    <li><a href=""><img src="/images/ind_f_img_27.jpg" class="img-responsive center-block">
                            <p>每天抽一下，好礼送不停</p></a></li>

                    <li><a href=""><img src="/images/ind_f_img_29.jpg" class="img-responsive center-block">
                            <p>给你一个试用的特权</p></a></li>

                </ul>
            </div>
        </div>
    </div>
    <!---活动专区-->
    <!--我们的服务-->
    <div class="containe ind-tit-box-a">
        <div class="row">
            <div class="col-lg-5 col-md-5  col-sm-4  col-xs-3">
                <div class="ind-tit-line-l"></div>
                <div class="ind-tit-dot-l"></div>
            </div>
            <div class="col-lg-2 col-md-2  col-sm-4  col-xs-6 ind_tita">
                我们的服务
            </div>
            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-3">
                <div class="ind-tit-line-r"></div>
                <div class="ind-tit-dot-r"></div>
            </div>
        </div>
    </div>
    <div class="containe">
        <div class="row">
            <div class="service-con">
                <div class="col-lg-7 col-md-7  col-sm-7  col-xs-12">
                    <img src="/images/ind_map.png" alt="我们的服务" class="img-responsive">
                </div>
                <div class="col-lg-5 col-md-5  col-sm-5  col-xs-12 ind-service">

                    400+个城市的<span style="color:#5e70b2 !important;">区域</span>合伙人用心服务<br>
                    4000+的经销商专业优选，给您精品好货<br>
                    近万件商品，<span style="color:#5e70b2 !important;">满足你的挑剔</span><br>
                    <span style="color:#5e70b2 !important;">极速直达</span>，让您买的舒心，售后无忧<br>
                </div>
            </div>
        </div>
        <div class="row ind-service-you xs-hide">
            <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4">
                <div class="ind-service-l">
                    <img src="/images/ind_you.png" alt="全场包邮"><span>全场包邮</span>
                </div>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4 ind-service-cen  ml15  mr15">
                <img src="/images/ind_you.png" alt="正品保证"><span>正品保证</span>
            </div>
            <div class="col-lg-4 col-md-4  col-sm-4  col-xs-4">
                <div class="ind-service-r">
                    <img src="/images/ind_you.png" alt="24h直达"><span>24h直达</span>
                </div>
            </div>
        </div>
        <div class="row my-hide xs-show ind-service-you-xm">
            <img src="/images/ind_sm_mobile_23.jpg" alt="正品保证" class="img-responsive">
        </div>
    </div>
    <!---我们的服务-->
    <!--  product  star-->
</div>


