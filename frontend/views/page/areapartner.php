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
            <img src="/images/area_img_02.jpg" alt="First slide">
        </div>
        <div class="item active my-hide xs-show">
            <img src="/images/area_xl_ban.jpg" alt="First slide">
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
    <div class="containe">
        <div class="row area-tit-box">
            <div class="col-xs-12 col-sm-6">
                <div class="row">
                    <div class="col-xs-1">
                        <img src="/images/area_img_08.jpg" alt="" class="img-responsive" style="float: right;margin-top: 21px;
    margin-right: -36px;">
                    </div>
                    <div class="col-xs-8 area-tit">
                        “新零售”已成趋势
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-8 col-md-offset-1 area-con">
                        移动互联网的高速发展，传统线下零售行业受到了电商冲击，
                        发展困难；移动互联网时代，线上零售因服务体验问题，发展
                        遇到瓶颈。未来，线下与线上零售将深度结合，再加上现代物
                        流、大数据、云计算等构成未来新零售，引领全新的商业模式
                        拼一下商城，优选优质商家，做社交电商的领航者，开创新零
                        售商业时代。
                    </div>
                </div>
            </div>
            <div class="col-xs-12  col-sm-4">
                <img src="/images/area_img_05.jpg" alt="“新零售”已成趋势" class="img-responsive">
            </div>
            <div class="col-xs-0  col-sm-2"></div>
        </div>
        <div class="row my-yellow-line">
            <!--            黄色分割线-->
        </div>
        <div class="row area-tit-box">

            <div class="col-sm-1">

            </div>
            <div class="col-xs-12  col-sm-5">
                <img src="/images/area_img_13.jpg" alt="拼一下商城专注社交电商" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-5 col-md-offset-1">
                <div class="row">
                    <div class="col-xs-2">
                        <img src="/images/area_img_08.jpg" alt="" class="img-responsive area-tip-img-r">
                    </div>
                    <div class="col-xs-10 area-tit">
                        拼一下商城专注社交电商
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-8 col-md-offset-1 area-con">
                        拼一下商城是一家致力于发展社交电商的第三方购物平台，为全国经销商和商家提供入驻资源，将沟通分享与社交的理念融入电商运营中，形成了属于拼一下的新社交电商思维，即拼一下的用户通过发起拼团邀请，在和朋友、家人、邻居等一起组团成功后，以更低的价格买到实惠的优质商品。
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-yellow-line"> <!--黄色分割线--></div>
        <div class="row area-tit-box">
            <div class="col-xs-12 col-sm-6">
                <div class="row">
                    <div class="col-xs-2">
                        <img src="/images/area_img_08.jpg" alt="" class="img-responsive area-tip-img3">
                    </div>
                    <div class="col-xs-10 area-tit">
                        全民创业时代 政府重点扶持项目
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-8 col-md-offset-2 area-con">
                        自2015年6月，国务院常务会议正式确定大力推进：“大众创
                        业，万众创新”的政策措施以来，拼一下商城作为全民创业的
                        领导平台，受到了政府的高度关注和大力支持。
                    </div>
                </div>
            </div>
            <div class="col-xs-12  col-sm-6" style="margin-left:-15px;">
                <img src="/images/area_img_17.jpg" alt="全民创业时代  政府重点扶持项目" class="img-responsive">
            </div>
        </div>
        <div class="row my-yellow-line">
            <!--            黄色分割线-->
        </div>
    </div>
    <div class="container">
        <div class="row are-tit-cen">
            <div class="area-cen-tit">
                <img src="/images/area_img_08.jpg" alt="为什么选择我们？">&nbsp;为什么选择我们？
            </div>
        </div>
        <div class="row area-con-b">
            <span class="nor-red">代理人唯一，区域保护</span><br>
            每个区域只招募唯一一位合伙人，充分保障合伙人的利益，避免内部恶性竞争。<br>
            <span class="nor-red">一条龙服务</span><br>
            你给我们信任，我们给你诚挚、专业的一条龙服务，全程帮扶。<br>
            <span class="nor-red">总部协助推广</span><br>
            总部会进行全国招商和推广，让您的区域营收进一步放大，坐享其成。<br>
            <span class="nor-red">与总部业务收益五五分成</span><br>
            代理一个区域，三年内每天享受该区域订单总收入的2%<br>
            <span class="nor-red">七大扶持政策：</span><br>
            品牌支持：品牌宣传，品牌曝光，新媒体宣传<br>
            技术支持：公司自主研发团队24小时全天技术支持<br>
            用户支持：庞大的用户粉丝活跃平台，保障商户入驻的交易量<br>
            产品支持：免费提供强大的后台管理系统与系统培训、更新支持<br>
            运营支持：免费为区域合伙人提供可行性的商家入驻方案，以及培训合伙人市场营销技巧与活动运营方案<br>
            培训支持：免费为合伙人定期进行市场以及运营培训，让你的思想也插上互联网的翅膀<br>
            客服支持：总部有专业客服团队协作各个商家进行协调处理。<br>

        </div>
        <div class="row my-yellow-line">
            <!--            黄色分割线-->
        </div>
        <div class="row are-tit-cen">
            <div class="area-cen-tit">
                <img src="/images/area_img_08.jpg" alt="为什么选择我们？">&nbsp;加盟拼一下商城，实现财富自由
            </div>
        </div>

        <div class="row area-con-b">
            <span class="nor-red">你需要做什么？</span><br>
            ①代理一个区；<br>②邀请本地商家入驻拼一下平台；<br>
            <span class="nor-red">你能得到什么？</span><br>
            ①独立的城市平台和独立的后台管理系统；<br>
            ②在本区域的商家订单佣金提成，坐享2%；<br>
            ③代理期间内免费享受平台技术服务和维护升级、营销支持、运营支持等七大扶持政策。<br>
            <span class="nor-red">我们做什么？</span><br>
            ①系统优化升级：系统迭代更新，各种新型营销方式不间断开发。<br>
            ②专业营销：营销策划，品牌推广，招募区域合伙人，形成联动效应，加快品牌业务发展。<br>
            ③平台运营：在线客服、平台维护、产品研发。<br>
        </div>
        <div class="row my-yellow-line">
            <!--            黄色分割线-->
        </div>
        <div class="row are-tit-cen">
            <div class="area-cen-tit">
                <img src="/images/area_img_08.jpg" alt="为什么选择我们？">&nbsp;加盟服务流程？
            </div>
        </div>
        <div class="row area-con-b">
            <img src="/images/area-bot.png" alt="加盟服务流程？" class="img-responsive center-block">
        </div>
        <div class="row my-yellow-line">
            <!--            黄色分割线-->
        </div>
        <div class="row are-tit-cen">
            <div class="area-cen-tit">
                <img src="/images/area_img_08.jpg" alt="媒体合作">&nbsp;媒体合作
            </div>
        </div>
        <div class="row area-con-b">
            <img src="/images/area_media_11.jpg" alt="加盟服务流程？" class="img-responsive center-block">
        </div>
        <div class="row my-yellow-line">
            <!--            黄色分割线-->
        </div>
        <div class="row are-tit-cen">
            <div class="area-cen-tit">
                <img src="/images/area_img_08.jpg" alt="商务留言板">&nbsp;商务留言板
            </div>
        </div>
        <div class="row are-tit-cen mt10">
                如果您想进入拼购行业，或者盘活资产/利用自己闲暇时间做有意义的事，您可以申请成为拼一下城市合伙人。
        </div>
        <div class="row area-con-b">
            <?= $this->render('@app/views/book/_formareapartner', [
                'model' => $model,
            ]) ?>
            <?php
            if (Yii::$app->getSession()->hasFlash('success')) {
                echo Alert::widget([
                    'options' => [
                        'class' => 'alert-success', //这里是提示框的class
                    ],
                    'body' => Yii::$app->getSession()->getFlash('success'), //消息体
                ]);
            }
            ?>
        </div>

    </div>
    <div class="row">
        <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
    </div>
</div>


