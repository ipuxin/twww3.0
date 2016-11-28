<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$siteconfig = \common\models\System::findOne(['id' => 1]);
$this->title = $siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' => $siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $siteconfig->description]);
?>

<div class="container mt10">
    <div class="row">
        <div class="col-sm-2 has-bar my-gywm-h">
            <div class="row has-logo">
                <img src="/images/abo_log_03.png" alt="关于我们">
            </div>
            <div class='row my-tabbable'>
                <ul class='nav nav-stacked my-nav'>
                    <li class='active'><a href='#tab1' data-toggle='tab'>公司简介</a></li>
                    <li><a href='#tab2' data-toggle='tab'>企业文化</a></li>
                    <li><a href='#tab3' data-toggle='tab'>经营理念</a></li>
                    <li><a href='#tab4' data-toggle='tab'>未来规划</a></li>
                </ul>

            </div>
        </div>
        <div class="col-sm-10 my-gywm-h my-bg">
            <div class='tab-content'>
                <!--公司简介-->
                <div class='tab-pane active my-gywm-h' id='tab1'>
                    <div class="mycon-abo">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="公司简介">公司简介
                                    </div>
                                </div>
                            </div>
                            <div class="row my-gray-line"> <!--灰色色分割线--></div>
                            <div class="row area-tit-box">
                                <div class="col-sm-1"></div>
                                <div class="col-xs-11  col-sm-11 my-abo-con">
                                    拼一下商城是上海果色天香网络科技有限公司旗下的品牌，于2015年在上海成立，
                                    拼一下是通过“社交+电商”的模式，让更多的用户带着乐趣分享实惠，以更优惠
                                    的价格购买心仪的商品：商品覆盖全品类，价格持续心动，更有一元夺宝、免费试
                                    用、幸运抽奖等优惠活动。
                                </div>
                            </div>
                            <div class="row mt30">
                                <img src="/images/abo_03.jpg" alt="公司简介" class="img-responsive center-block bounceIn animated">
                            </div>
                        </div>
<!--                        <div class="row mt30">-->
<!--                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">-->
<!--                        </div>-->
                    </div>
                </div>
                <!--企业文化-->
                <div class='tab-pane my-gywm-h' id='tab2'>
                    <div class="mycon-abo">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="公司简介">公司简介
                                    </div>
                                </div>
                            </div>
                            <div class="row my-gray-line"> <!--灰色色分割线--></div>
                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit">
                                            <span class="my-bold">使命：</span>让购物变得简单高效、有乐趣
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit">
                                            <span class="my-bold">愿景：</span>成为全球一流的社交电商平台
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-9 has-area-tit">
                                            <span class="my-bold">价值观：</span>简介透明、平等开放；突破常规，追求卓越；快速有效，拥抱变化；团队作战、互相补位
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="row mt30">-->
<!--                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">-->
<!--                        </div>-->
                    </div>
                </div>
                <!--经营理念-->
                <div class='tab-pane my-gywm-h' id='tab3'>
                    <div class="mycon-abo">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="经营理念">经营理念
                                    </div>
                                </div>
                            </div>
                            <div class="row my-gray-line"> <!--灰色色分割线--></div>
                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit">
                                            <span class="my-bold">用户：</span>用户是上帝，也是我们的衣食父母，坚持用户利益至上；
                                            <div class="row">
                                                <div class="col-xs-10 col-md-offset-1 abo-con-ml">
                                                    不断倾听和深刻理解用户需求，不断给用户惊喜；<br>
                                                    不断提供超预期的体验和服务，不断创造新的用户价值；
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit">
                                            <span class="my-bold">合伙人：</span>尊重和善待合伙人，真诚合作，一起共建共生共赢的生态环境；
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit">
                                            <span class="my-bold">员工：</span>员工是公司最大的资产，不断激发员工潜能，使员工与企业共赢、共成长；
                                            <div class="row">
                                                <div class="col-xs-10 col-md-offset-1 abo-con-ml">
                                                    善待每一位员工，关爱员工身心健康；
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row area-tit-box">
                                <div class="col-xs-12  col-sm-12 my-abo-con">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit">
                                            <span class="my-bold">社会：</span>怀感恩的心，注重社会责任，尽企业的力量，汇报社会，帮助需要帮助的人，塑造健康企业形象。
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        <div class="row mt30">-->
<!--                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">-->
<!--                        </div>-->
                    </div>
                </div>
                <!--未来规划-->
                <div class='tab-pane my-gywm-h' id='tab4'>
                    <div class="mycon-abo">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="公司简介">未来规划
                                    </div>
                                </div>
                            </div>
                            <div class="row my-gray-line"> <!--灰色色分割线--></div>
                            <div class="row area-tit-box">
                                <div class="col-sm-1"></div>
                                <div class="col-xs-11  col-sm-11 my-abo-con">
                                    “拼一下商城”专注于经销商的社交电商，公司以区域合伙人为联营体系，竭力打造社交电商的商业帝国。我们的每一步
                                    都离不开你的关注和支持，相信未来我们能够共创无可限量的价值！！
                                </div>
                            </div>
                            <div class="row mt30">

                            </div>
                        </div>
<!--                        <div class="row mt30">-->
<!--                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>