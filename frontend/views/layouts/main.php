<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content=" UI:lirong941122@qq.com   Bront-end: offert@qq.com  Back-end:ncplum@qq.com">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php $this->beginBody() ?>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?08ad2f3c2954a67a1f40d24bf6692287";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>
<body>
<div class="navbar top1 top1V2" style="min-height: 90px;">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span>更多...</span>

                <!--	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>-->
            </button>
            <a class="navbar-brand navbar-brandV2" href="http://www.pingoing.cn/">
                <img src="/images/logo.png" class="img-responsive col-md-2"></a>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav navbar-navV2">
                <li><?= Html::a('网站首页', ['site/index']) ?> </li>
                <li><?= Html::a('区域合伙人', ['page/areapartner']) ?> </li>
<!--                <li>--><?//= Html::a('商户合伙人', ['page/shop']) ?><!--</li>-->
                <li><?= Html::a('我要开店', ['page/hasshop']) ?></li>
                <li><?= Html::a('成功案例', ['partner/index']) ?></li>
                <li> <?= Html::a('关于我们', ['page/gywm']) ?></li>
                <li> <?= Html::a('联系我们', ['page/lxwm']) ?></li>
                <li><?= Html::a('下载APP', ['page/app']) ?></li>
            </ul>
        </div>
    </div>
</div>

<?= Alert::widget() ?>
<?= $content ?>

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-lg-offset-1  footer-left  bounceIn animated" data-wow-delay="0.4s"
                 style="visibility: visible; -webkit-animation-delay: 0.4s;">
                <ul>
                    <li><?= Html::a('网站首页', ['site/index']) ?> </li>
                    <li><?= Html::a('区域合伙人', ['page/areapartner']) ?></li>
<!--                    <li>--><?//= Html::a('商户合伙人', ['page/shop']) ?><!--</li>-->
                    <li><?= Html::a('我要开店', ['page/hasshop']) ?></li>
                    <li><?= Html::a('成功案例', ['partner/index']) ?></li>
                    <li> <?= Html::a('关于我们', ['page/gywm']) ?></li>
                    <li> <?= Html::a('联系我们', ['book/lxwm']) ?></li>
                    <li><?= Html::a('下载APP', ['page/app']) ?> </li>
                </ul>
            </div>
        </div>
        <div class="row my-address">
            <div class="col-sm-6  col-lg-offset-2">
                <p>公司地址：上海市杨浦区国定东路200号</p>
                <p>客服热线：400-6590698</p>
                <p>招商热线：400-8088917</p>
                <p>招商地址：河南省郑州市高新区科学大道89升龙又一城写字楼B座</p>
            </div>

            <div class="col-sm-3 text-center footer-right  wow fadeInRight animated">
                <a href="#"><img src="/images/ewm.png" alt="拼一下二维码"/></a>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="row">
            <div class="col-lg-12 my-footer-cen">沪ICP备15028933号-1 2016 上海果色天香网络科技有限公司 版权所有</div>
        </div>
    </div>
    <!-- //container -->
</div>
<!-- //footer -->

<!-- container -->

<script>
    (function () {
        var _53code = document.createElement("script");
        _53code.src = "//tb.53kf.com/code/code/10136363/1";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(_53code, s);
    })();
</script>


<script
    type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1259173407'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1259173407%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
<style>
    #cnzz_stat_icon_1259173407 {
        display: none
    }
</style>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
