<?php

use yii\helpers\Html;
use yii\widgets\ListView;
use yii\captcha\Captcha;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
$siteconfig = \common\models\System::findOne(['id' => 1]);
$this->title = $siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' => $siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $siteconfig->description]);
?>
<?php
if (Yii::$app->session['code']) {
    //如果session中存在验证码，则按钮和输入框正常。
    $disabled = false;
} else {
    $disabled = 1;
}
?>
<!-- 模态框（Modal）注册用弹窗 -->
<div class="modal fade" id="myModal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog my-modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header my-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title my-modal-title" id="myModalLabel">
                    登录
                </h4>
            </div>
            <?php
            //手机号码验证，图形验证码验证
            $form = ActiveForm::begin([
//                'action' => ['page/hasshop'],
                'options' => ['class' => 'login-content mtk'],
                'fieldConfig' => [
                    'template' => '{input}{error}',
                ]
            ]);
            ?>
            <div class="form-group">
                <?= $form->field($model, 'phone')->textInput(['class' => 'form-control my-form-control', 'value' => '17073542686', 'placeholder' => "请输入手机号"]); ?>
            </div>

            <div class="form-group" id="captchaCode">
                <?= Captcha::widget([
                    'model' => $model,
                    'attribute' => 'verifyCode',
                    //验证码的 action 与 Model 是对应的
                    'captchaAction' => 'page/captcha',
                    //调整验证码图片的位置
                    'template' => '{image}{input}',
                    //设置验证码input的样式和id
                    'options' => [
                        'class' => 'form-control my-form-control',
                        'id' => 'verifyCode',
                        'placeholder' => "请输入右侧验证码"
                    ],
                    //设置验证码图片的样式和id
                    'imageOptions' => [
                        'class' => 'captcha',
                        'id' => 'verifyCode-image',
                        'alt' => '点击刷新',
                        'title' => '点击刷新',
                        'style' => 'cursor: pointer;'
                    ],
                ]) ?>
                <span class="change">看不清<br>换一张</span>
            </div>
            <div class="form-group" id="code-input" style="float: left;">
                <?= $form->field($model, 'code')->textInput(['class' => 'form-control my-form-control', 'placeholder' => "请输入短信验证码", 'disabled' => $disabled]); ?>
            </div>
            <!--            <a href="javascript:;" class='db'>发送验证码</a>-->
            <?= Html::submitButton('发送验证码', ['class' => 'db']); ?>
            <div class="form-group">
                <?= Html::submitButton('登录', ['class' => 'form-control dy', 'disabled' => $disabled]) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>

<!-- 模态框1（Modal） -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    联系方式
                </h4>
            </div>
            <p>咨询电话：400-6590-698</p>
            <p>企业QQ群:526318045</p>
            <p>服务时间：10:00-22:00</p>
            <p style="margin: 20px 0;">入驻过程中，如果遇到问题，请添加拼一下商家入驻咨询群，<br>我们将提供专人解决您的问题。</p>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>
<div class="container mt10">
    <div class="row">
        <div class="col-sm-2 has-bar">
            <div class="row has-logo">
                <a href="javascript:;" data-toggle="modal" data-target="#myModal-register">
                    <img src="/images/has_shop_03.jpg" alt="我要开店"></a>
            </div>
            <div class='row my-tabbable'>
                <ul class='nav nav-stacked my-nav'>
                    <li class='active'><a href='#tab1' data-toggle='tab'>商家入驻</a></li>
                    <li><a href='#tab2' data-toggle='tab'>入驻流程</a></li>
                    <li><a href='#tab3' data-toggle='tab'>常见问题</a></li>
                    <li><a href='#tab4' data-toggle='tab'>使用手册</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-10">
            <div class='tab-content'>
                <!--我要开店-->
                <div class='tab-pane active' id='tab1'>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active xs-hide">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                            <div class="item active my-hide xs-show">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                    </div>
                    <!--banner end-->
                    <div class="mycon">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="商家入驻">商家入驻
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-3">
                                    <a href="/ruzhu.html" style="float:left;"><img src="/images/rzlc_03.png" alt="马上入住"></a>
                                    <a href="" style="float:left;" data-toggle="modal" data-target="#myModal1"><img
                                            src="/images/rzlc_04.png" alt="咨询问题"></a>
                                </div>
                            </div>
                            <div class="row my-gray-line"></div>
                            <div class="row area-tit-box">
                                <div class="col-xs-12 col-sm-8">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit  my-fz-block">
                                            免费入驻，无扣点，无保证金
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8 col-md-offset-1 area-con">
                                            入驻拼一下，不需要收取任何费用，完全免费。店铺账户余额，
                                            可以随时提现，保证您的资金流快速运转。
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12  col-sm-3">
                                    <img src="/images/do_09.jpg" alt="免费入驻，无扣点，无保证金" class="img-responsive">
                                </div>
                                <div class="col-xs-0  col-sm-1"></div>
                            </div>
                            <div class="row my-yellow-line">
                                <!--黄色分割线-->
                            </div>
                            <div class="row area-tit-box">
                                <div class="col-sm-2">

                                </div>
                                <div class="col-xs-12  col-sm-2">
                                    <img src="/images/do_14.jpg" alt="本地化电商社交新模式，赢得可见未来" class="img-responsive">
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-10 my-fz-block">
                                            社交电商新模式，赢得可见未来
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8 col-md-offset-2 area-con">
                                            拼一下是通过“社交+电商”的模式，让更多的用户带着乐趣分
                                            享实惠，以更优惠的价格购买心仪的商品：商品覆盖全品类，
                                            价格持续心动，更有一元夺宝、免费试用、幸运抽奖等优惠活
                                            动。
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-yellow-line"> <!--黄色分割线--></div>
                            <div class="row area-tit-box">
                                <div class="col-xs-12 col-sm-8">
                                    <div class="row">
                                        <div class="col-xs-1">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-8 has-area-tit  my-fz-block">
                                            享受可靠扶持
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8 col-md-offset-1 area-con">
                                            ① 对于优质商家，每天都可给予免费资源位，活动与日销并
                                            行，玩法多样。<br>
                                            ② 配合品牌的推广需求，深入合作展开定制化的营销方案，
                                            拼团、一元夺宝、免费试用、幸运抽奖。<br>
                                            ③ 专业招商经理一对一贴心服务，高效灵活的帮助商家在拼
                                            一下平台迅速提升销售额和影响力。<br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12  col-sm-3">
                                    <img src="/images/do_18.jpg" alt="免费入驻，无扣点，无保证金" class="img-responsive">
                                </div>
                                <div class="col-xs-0  col-sm-1"></div>
                            </div>
                            <div class="row my-yellow-line">
                                <!--            黄色分割线-->
                            </div>
                            <div class="row area-tit-box">
                                <div class="col-sm-1">

                                </div>
                                <div class="col-xs-12  col-sm-4">
                                    <img src="/images/do_22.jpg" alt="本地化电商社交新模式，赢得可见未来" class="img-responsive">
                                </div>
                                <div class="col-xs-12 col-sm-7">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <img src="/images/do_07.jpg" alt=""
                                                 class="img-responsive area-tip-img">
                                        </div>
                                        <div class="col-xs-10  my-fz-block">
                                            招商标准
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-8 col-md-offset-2 area-con">
                                            ① 有自己的发货能力，最好做过淘宝、京东等电商<br>
                                            ② 商品当季价格有优势<br>
                                            ③ 商品质量有保障<br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
                        </div>
                    </div>
                </div>
                <!--入驻流程-->
                <div class='tab-pane' id='tab2'>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active xs-hide">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                            <div class="item active my-hide xs-show">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                    </div>
                    <!--banner end-->
                    <div class="mycon">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="入驻流程">入驻流程
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-3">
                                    <a href="/ruzhu.html" style="float:left;"><img src="/images/rzlc_03.png" alt="马上入住"></a>
                                    <a href="" style="float:left;" data-toggle="modal" data-target="#myModal1"><img
                                            src="/images/rzlc_04.png" alt="咨询问题"></a>
                                </div>
                            </div>
                            <div class="row my-gray-line"></div>
                            <div class="row">
                                <img src="/images/rzlc_08.png" alt="" class="img-responsive center-block">
                            </div>
                            <div class="row my-yellow-line">
                                <!--黄色分割线-->
                            </div>
                            <div class="row">
                                <img src="/images/rzlc_11.png" alt="" class="img-responsive center-block">
                            </div>
                            <div class="row my-yellow-line">
                                <!--黄色分割线-->
                            </div>
                            <div class="row">
                                <img src="/images/rzlc_14.png" alt="" class="img-responsive center-block">
                            </div>
                            <div class="row my-yellow-line">
                                <!--黄色分割线-->
                            </div>
                            <div class="row">
                                <img src="/images/rzlc_18.png" alt="" class="img-responsive center-block">
                            </div>
                            <div class="row my-yellow-line">
                                <!--黄色分割线-->
                            </div>
                            <div class="row">
                                <img src="/images/rzlc_21.png" alt="" class="img-responsive center-block">
                            </div>
                        </div>
                        <div class="row mt30">
                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
                        </div>
                    </div>
                </div>
                <!--常见问题-->
                <div class='tab-pane' id='tab3'>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active xs-hide">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                            <div class="item active my-hide xs-show">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                    </div>
                    <!--banner end-->
                    <div class="mycon">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="常见问题">常见问题
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-3">
                                    <a href="/ruzhu.html" style="float:left;"><img src="/images/rzlc_03.png" alt="马上入住"></a>
                                    <a href="" style="float:left;" data-toggle="modal" data-target="#myModal1"><img
                                            src="/images/rzlc_04.png" alt="咨询问题"></a>
                                </div>
                            </div>
                            <div class="row my-gray-line"></div>
                            <div class="row">
                                <div class="col-xs-12 has-cjwt-con">
                                    一、商家常见问题<br>
                                    <span class="nor-red">Q：</span>拼一下商城是什么平台？<br>
                                    <span class="nor-red">A：</span>电子商务未来发展趋势是怎样的呢?关键词有：移动化，平台化，物联网，社交购物，O2O等。而拼一下商城顺应发展趋势，通过“社交+电商”的模式，让更多的用户带着乐趣分享实惠，以更优惠的价格购买心仪的商品：商品覆盖全品类，价格持续心动，更有一元夺宝、免费试用、幸运抽奖等优惠活动。
                                    <br>
                                    <span class="nor-red">Q：</span>如何入驻？
                                    <br>
                                    <span class="nor-red">A：</span>进入拼一下微信端商城或者APP,点击“个人中心”，点击“我是商家”，通过链接进入拼一下官网（www.
                                    pingoing.cn）,选择我要开店，流程为：第一，请选择店铺类型；第二、上传相关资质、提交店铺名、店铺LOGO、 店铺详情等信息；第三、上传新商品。
                                    <br>
                                    <span class="nor-red">Q：</span>入驻企业和个人的区别？
                                    <br>
                                    <span class="nor-red">A：</span>入驻时选择企业，则要上传企业三证：企业营业执照、组织机构代码、税务登记证。 选择个人入驻，则需要上
                                    传身份证原件正反面、个人近照及手持身份证的近照。
                                    <br>
                                    <span class="nor-red">Q：</span>经营的产品类目比较多，入驻时只能选择一个主营类目怎么办？<br>
                                    <span class="nor-red">A：</span>入驻平台时，先选择重要的主营类目，后期还可申请添加销售其他类目产品，类目一旦选择后，便不能再更改。<br>
                                    <span class="nor-red">Q：</span>拼一下商城店铺命名规则<br>
                                    <span class="nor-red">A：</span>每个城市两个以上店铺申请相同的符合规定的店铺名称，拼一下商城依照申请在先原则核定，其他店铺没有权
                                    限申请已经通过审核的店铺名称；未经品牌商或生产商授权，店铺名称禁止使用“特约经营”、“特约经销”、“总
                                    经销”、“总代理”、“厂家认证”、“官方店铺”等可以使买家误认为改店铺已经取得相应品牌授权的表述或内容
                                    个人卖家店铺名称禁止使用“旗舰”、“专卖”、“专营”、“官方”、“直营”、“官方认证”、“官方授权”等 表述或内容。<br>

                                    二、关于提交资质问题<br>
                                    <span class="nor-red">Q：</span>在境外注册的公司，入驻时，怎么填写企业三证？
                                    <br>
                                    <span class="nor-red">A：</span>境外注册的公司为单证，可以在企业营业执照、组织机构代码、税务登记证、统一社会信用代码一栏全部填写
                                    境外单证上的代码，上传资质图片时，也统一上传境外单证资质。
                                    <br>
                                    <span class="nor-red">Q：</span>三证合一的商家如何填写营业执照、组织机构代码、税务登记？<br>

                                    <span class="nor-red">A：</span>三证合一的商家在填写营业执照、组织机构代码、税务登记时，全部填写税务统一社会信用代码，选择上传照
                                    片时，也同样全部上传税务统一社会信用代码的资质。
                                    <br>
                                    <span class="nor-red">Q：</span>未更新为三证合一的企业商家，如何填写统一社会信用代码？
                                    <br>
                                    <span class="nor-red">A：</span>企业商家还未更新为三证合一，在填写统一信用代码这一栏，填写企业营业执照代码即可，上传税务统一社会
                                    信用代码的资质图片时，也同样上传企业营业执照。
                                    <br>
                                    <span class="nor-red">Q：</span>提交了入驻信息，会在多久审核？<br>
                                    <span class="nor-red">A：</span>平台会在2个工作日内审核，如果通过审核，商家会收到平台发送的审核通过信息。<br>
                                    <span class="nor-red">Q：</span>食品类目商家入驻时，还需要向平台提交什么资质？<br>

                                    <span class="nor-red">A：</span>食品类目商家入驻时，必须具备食品流通许可证（食品经营许可证），食品生产厂家则需具备食品生产许可证
                                    或食品卫生许可证，以备公司查验。
                                    <br>
                                    <span class="nor-red">Q：</span>商家入驻时，审核资质不通过，拒绝理由为被列入企业异常经营名录，该怎么办？<br>
                                    <span class="nor-red">A：</span>出现该问题时，商家自行到全国企业信用信息公示系统（http://gsxt.saic.gov.cn/）查询被列入异常经营名
                                    录的原因。若企业被工商局列入异常的问题已得到解决，但由于信息的延迟，全国企业信用信息公示系统未做变更， 则需要向平台提交所在地工商部门盖章的移出经营异常名录申请表。
                                    <br>
                                    <span class="nor-red">Q：</span>为什么商家上传资质图片时，总是出现格式错误？<br>
                                    <span class="nor-red">A：</span>有两种种情况会上传不了：①图片后缀名不对，图片后缀名是不是与规定的标准格式一致。②图片大小不是规
                                    定的范围以内。<br>

                                    三、关于商家服务规则的疑问<br>
                                    <span class="nor-red">Q：</span>发货时间要求？
                                    <br>
                                    <span class="nor-red">A：</span>拼一下平台商家必须承诺客户在支付成功后24小时内进行发货（对于拼团类别的，需要在拼团成功后24小时内
                                    进行发货），发货后快递单号要及时导入系统，以物流信息为证。做好用户体验，提高用户满意度，这也是拼一下极 速发货的特色。
                                    <br>
                                    <span class="nor-red">Q：</span>商家客服在线服务原则<br>
                                    <span class="nor-red">A：</span>①
                                    平台要求商家客服在每天9:00—21:00之间需保持在线客服电话畅通接受用户咨询。同时，平台会不定期、不定时 的对商家客服在线情况进行抽检。
                                    ② 商家客服需保持良好的服务用语及服务态度，不能出现不礼貌言语，或在沟通中使用文字辱骂、贬低用户的情况，
                                    包含且不限于人身攻击、侮辱、贬低用户、威胁性语言等情况。如有发现或用户投诉，平台将会严格处理。
                                    <br>
                                    <span class="nor-red">Q：</span>出现售后问题，商家该怎么处理？<br>

                                    <span class="nor-red">A：</span>如果客户收到商品出现破损或者与商城介绍不符等售后问题，商家需要与客户积极沟通协商处理，如需商家做
                                    出售后处理，则依据实际情况可协商选择给客户部分退款或者全额退款。如果商家处理后或者拒绝处理，客户对处理
                                    结果不满意，客户有权利直接申诉到拼一下官方售后处（进入拼一下微信公众号，在公众号客服处留言即可或者直接 联系售后服务电话：400-6590-698进行申诉。）
                                    <br>
                                    <span class="nor-red">Q：</span>退货服务相关说明<br>

                                    <span class="nor-red">A：</span>生鲜、水果、冻品类，客户收到货后如果有问题的话，需要24小时内找对应商家进行处理协商。如果退货原因
                                    是因为商家原因（实收货物与商城描述不符或者实收货物有破损等），商家需要根据实际情况进行理赔。如果退货原 因是因为客户个人需求原因，则不支持无理由退货服务。

                                    四、商家违规处理<br>
                                    <span class="nor-red">Q：</span>禁售商品及违规处罚<br>

                                    <span class="nor-red">A：</span>为了遵守相关法律法规，防止违规销售、禁售、限售、限运产品给卖家及拼一下商城平台及客户带来的风险，
                                    建立公平、诚信、透明的平台运营环境，特制订本规则。详情及违规处罚请参考《拼一下商城禁售商品及违规处罚细 则》。<br>

                                    <span class="nor-red">Q：</span>商城假货处理规则<br>

                                    <span class="nor-red">A：</span>为了营造文明、和谐的电子商务环境，保障商家、买家的合法权益，特制定本规则。详情及违规处罚请参考
                                    《拼一下商城假货违规处罚细则》。
                                    <br>
                                    <span class="nor-red">Q：</span>商家品质抽检规则<br>

                                    <span class="nor-red">A：</span>为保障拼一下商城用户的合法权益，保证拼一下商城商品品质及用户口碑，维护拼一下商城的正常经营秩序；
                                    同时，维护及促进商家公平、开放的竞争环境，把更多优质资源、流量放送给优质商家，特制订本规则，详情请参考
                                    《拼一下商城商品品质抽检细则》。本规则适用于拼一下商城上所有入驻商家。针对卖家在拼一下商城所售商品的质量、品牌及版权抽检。<br>

                                    <span class="nor-red">Q：</span>差评申诉处理规则<br>

                                    <span class="nor-red">A：</span>由于买家明显恶意、疏忽等其他显而易见的原因导致的订单差评，卖家可以提出修改该差评的申请，并由平台
                                    审核人员根据规则进行审核处理的规则和流程。
                                    <br>
                                    <span class="nor-red">Q：</span>商家投诉及意见反馈<br>

                                    <span class="nor-red">A：</span>拼一下商城致力于为商家提供优质的服务，营造公平、合理的经营环境，但由于种种原因，还是有很多做得不
                                    完善的地方，欢迎大家批评指正。所有廉政举报、服务投诉、意见反馈可发送邮件到：service@pin1xia.cn
                                    如果您遇到以下情况（包括但不限于），欢迎给我们发送邮件进行反馈：
                                    <br>
                                    （1）平台工作人员有收受贿赂、以公谋私的情况，或者在分配资源时有不公平现象
                                    <br>
                                    （2）平台工作人员服务水平有问题、服务态度有问题，比如响应不及时、不能妥善解答疑问等
                                    <br>
                                    （3）平台商家的违规行为
                                    <br>
                                    （4）平台的重大漏洞，平台商家的违规行为
                                    <br>
                                    （5）对于平台发展的合理化建议，或者是单纯对平台的吐槽、不满都没关系 我们承诺，您发送的每一封邮件，平台都会认真对待，每一封邮件都会直接转发到平台高管邮箱。
                                    <br>
                                    五、平台费用结算<br>
                                    <span class="nor-red">Q：</span>商家入驻收取费用说明<br>

                                    <span class="nor-red">A：</span>为了鼓励商家入驻，2016年10月1日至2016年12月31日期间不收取任何佣金费用，只有：代微信收取0.6%交
                                    易手续费。<br>

                                    <span class="nor-red">Q：</span>商家费用提现说明<br>

                                    <span class="nor-red">A：</span>拼一下商城商家入驻后，产生的订单费用为自动结算，可以通过PC端后台，移动微信端商城或者APP，进入商
                                    城首页，“个人中心-我是商家”
                                    进行实时查看。卖家可提现余额是在买家确认收货后，买家确认收货后实时结算到
                                    可提现余额；系统确认收货时间为10天，以上传快递单号时间为准后的10天，确认后实时到账。实时提现，一天只能 提取一次。<br>

                                    <span class="nor-red">Q：</span>商家提现协议说明<br>

                                    <span class="nor-red">A：</span>入驻商家可以通过拼一下商城平台向您开放的提现功能将您账户中的交易资金转入您绑定的支付宝账户中。拼
                                    一下商城将于收到您的前述指示后，尽快通过第三
                                    方机构将相应的款项汇入您绑定的支付宝账户（详情转账金额 及 处理方式依据《支付宝服务协议》规定执行）。拼一下商城在用户提交提现支付后进行支付操作，拼一下商城不收取
                                    任何费用，如果第三方产生费用根据第三方相关协议需要产生的费用由用户自行承担。
                                    <br>
                                    <span class="nor-red">Q：</span>退货售后相关注意事项<br>

                                    <span class="nor-red">A：</span>（1）商家在以下规定时间内未发货时，消费者可提出退款申诉： ①
                                    普通商品，单买成功订单或者拼团成功订单24小时之内未发货的； ②
                                    预售商品，超出商家填写的预售发货时间的；
                                    <br>（2）退款申诉与普通售后投诉的区别:普通售后投诉是指客户若需要售后服务处理，全程由相应的拼一下入驻
                                    商家直接介入处理；退款申诉是指若消费者对商家售后处理不满意或者商家拒绝售后处理，则消费者则可以直接申诉 到拼一下商城官方客服进行处理。
                                    <br>
                                    <span class="nor-red">Q：</span>退款商家处理指南<br>

                                    <span class="nor-red">A：</span>① 商家收到相应退款申请之后需要在商家管理后台中处理相应申诉，处理时间规定为48小时内，逾期未处理
                                    默认为商家同意买家退款申请，进入退款流程； ②
                                    商家在收到退款申请时，若对申请有异议，可以积极与买家联系，要求买家修改或撤销相关申诉，但商家无权主动 修改申诉； ③
                                    若商家在与买家协商未果又不同意买家申诉时，必须在48小时内在商家后台内点击不同意按钮，逾期未点击，系统 默认商家已同意买家申诉，进入退款流程； ④
                                    商家驳回买家申诉之后平台将介入处理， <span class="nor-red">⑤ 一旦申诉进入拼一下商城介入处理中，平台将全权裁断申诉，</span> ⑥
                                    为最大程度保障买卖双方利益，拼一下商城平台希望买家和商家能够友好协商处理相关售后； ⑦
                                    拼一下商城平台介入处理售后纠纷，若判定为消费者售后成立，将按照平台规则处理退款售后，并计算入商家售后 纠纷率，纠纷率将影响店铺权重和申报活动资格。

                                </div>
                            </div>
                        </div>
                        <div class="row mt30">
                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
                        </div>
                    </div>
                </div>
                <!--使用手册-->
                <div class='tab-pane' id='tab4'>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active xs-hide">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                            <div class="item active my-hide xs-show">
                                <img src="/images/do_03.jpg" alt="First slide">
                            </div>
                        </div>
                        <!-- 轮播（Carousel）导航 -->
                    </div>
                    <!--banner end-->
                    <div class="mycon">
                        <div class="containe">
                            <div class="row mt30">
                                <div class="col-sm-3">
                                    <div class="has-tit-top">
                                        <img src="/images/abo_xing.png" alt="使用手册">使用手册
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                </div>
                                <div class="col-sm-3">
                                    <a href="/ruzhu.html" style="float:left;"><img src="/images/rzlc_03.png" alt="马上入住"></a>
                                    <a href="" style="float:left;" data-toggle="modal" data-target="#myModal1"><img
                                            src="/images/rzlc_04.png" alt="咨询问题"></a>
                                </div>
                            </div>
                            <div class="row my-gray-line"></div>
                            <div class="row">
                                <div class="container my-hasshop-fz">
                                    <!--		<h1>一、商家常见问题</h1>-->
                                    1、登录，拼一下商家后台登录网址：<a class="nor-red" href="http://adm.pingoing.cn/">http://adm.pingoing.cn/</a><br>
                                    <p>商家在pc端申请入驻审核通过以后，可通过申请入驻时提交的账号密码登录商家后台</p>
                                    <p><img class="img-responsive" src="/images/busguide-0101.png" alt="登录商家后台"
                                            title="登录商家后台"
                                            style="max-width:421px ; "></p>
                                    2、登录商家后台首先完善我的资料和我的店铺相关信息。
                                    <p>我的资料：</p>
                                    <p><img class="img-responsive" src="/images/busguide-0201.png" alt="我的资料"
                                            title="我的资料"
                                            style="max-width:745px ; "></p>
                                    <p>我的店铺：</p>
                                    <p><img class="img-responsive" src="/images/busguide-0202.png" alt="我的资料"
                                            title="我的资料"
                                            style="max-width:451px ; "></p>
                                    <p><em>发货地址：</em>售卖商品仓储地址；</p>
                                    <p><em>退货地址：</em>出现售后问题，客户将商品寄回商家收货的地址；</p>
                                    <p><em>包邮金额：</em>本店铺商品购买满多少包邮，满包邮仅针对普通商品，拼团商品价格均为包邮价格；</p>
                                    <p><em>支付宝账号：</em>此账号为交易金额提现账号；</p>
                                    <p><em>申请提现：</em>填写提现金额，提交申请，2个工作日之内到账。</p>
                                    <p style="color: #999;">
                                        注：客户下单支付，金额计入账户余额，客户确认收货（客户未确认，发货10天，系统自动确认）交易金额计入可提现余额，商家可提现至支付宝账号。</p>

                                    3、商品编辑
                                    <p>商品列表:</p>
                                    <p><img class="img-responsive" src="/images/busguide-0301.png" alt="商品列表"
                                            title="商品列表"
                                            style="max-width:1342px ; "></p>
                                    <p>已发布商品修改，在商品列表中点击产品名称或编辑，进入编辑页面进行修改。</p>
                                    4、发布商品
                                    <p>基本信息</p>
                                    <p><img class="img-responsive" src="/images/busguide-0401.png" alt="基本信息"
                                            title="基本信息"
                                            style="max-width:488px ; "></p>
                                    <p><em>商品类别：</em>普通商品为单买商品，其他为拼团商品；</p>
                                    <p><em>产品小图：</em>不大于32K，宽160*高160，在我的订单中和产品分类显示；</p>
                                    <p><em>产品大图：</em>不大于32K，128K，宽1080*高540，在商城首页显示；</p>
                                    <p><em>产品相册：</em>不大于32K，128K，宽540*高470，在商品页滚动显示；</p>
                                    <p><em>发货地址：</em>为售卖商品仓储所在地。</p>
                                    <p>拼团设置</p>
                                    <p><img class="img-responsive" src="/images/busguide-0402.png" alt="拼团设置"
                                            title="拼团设置"
                                            style="max-width: 555px; "></p>
                                    <p><em>开团人数：</em>团购需要参与人数；</p>
                                    <p><em>团购限时：</em>团购进行时间超出团购限时，团购失败，系统自动退还已付款会员支付款项；</p>
                                    <p><em>抽奖人数：</em>为每个团中奖的人数，幸运抽奖未中奖会员系统自动退款，一元夺宝未中奖不退款。</p>
                                    5、优惠券设置
                                    <p><img class="img-responsive" src="/images/busguide-0501.png" alt="拼团设置"
                                            title="拼团设置"
                                            style="max-width: 564px; "></p>
                                    <p><em>满减额度：</em>购买产品价格超过多少元可以使用；</p>
                                    <p><em>支付方式限制：</em>不限指不限制使用方式，单买指购买普通商品时使用，开团指购买团购商品时开团时可以使用，参团指购买团购商品时参团时使用；</p>
                                    <p><em>限制商品ID：</em>此优惠券只能购买对应ID的商品时才能使用；</p>
                                    <p><em>推荐商品ID：</em>通过优惠券链接领取优惠券时，优惠券展示图片会展示对应ID的产品图片；</p>
                                    <p><em>发放数量：</em>一条优惠券链接可以包含的优惠券总数；</p>
                                    <p><em>优惠金额：</em>优惠券的优惠额度；</p>
                                    <p><em>发放方式：</em>无限制指不限制发放方式，限一张指每个账号只能领取一张该优惠券；限每天一张指每个账号每天可以领取一张该优惠券；</p>
                                    <p><em>发放时间：</em>该优惠券只能在这个时间段之内发放；</p>
                                    <p><em>是否绝对时间：</em>选择是使用时间可选择一个时间段，选择否使用时间可填是几天；</p>
                                    <p><em>优惠券发放途径：</em>一，在订单中推送优惠券，二，通过扫描优惠券列表中二维码，推送优惠券链到微信朋友。</p>
                                    6、订单单个发货
                                    <p><img class="img-responsive" src="/images/busguide-0601.png" alt="单个订单发货"
                                            title="单个订单发货"
                                            style="max-width:962px; "></p>
                                    <p><em>单个订单发货：</em>进入待发货订单详情，输入快递单号，选择使用快递商，更改订单状态为已发货，点击保存。</p>
                                    <p style="color: #999;">注：快递商在设置中添加</p>
                                    7、订单批量发货
                                    <p><img class="img-responsive" src="/images/busguide-0701.png" alt="订单批量发货"
                                            title="订单批量发货"
                                            style="max-width: 807px; "></p>
                                    <p><em>订单导出：</em>订单状态选择待发货，选择对应下单时间，点击导出，将文件保存到桌面。</p>
                                    <p><img class="img-responsive" src="/images/busguide-0702.png" alt="订单导出"
                                            title="订单导出"
                                            style="max-width: 934px; "></p>
                                    <p><em>订单批量导入：</em>导出订单发货后，将对应订单ID，快递编号，快递名称，快递单号按上图格式填写好，选择、导入即可；</p>
                                    <p><em>快递编号：</em>点击快递编号按钮可查看快递名称对应快递编号，如果没有要查看快递，可在设置菜单中设置需要的快递。</p>
                                    8、快递商设置
                                    <p><img class="img-responsive" src="/images/busguide-0801.png" alt="快递商设置"
                                            title="快递商设置"
                                            style="max-width:1334px; "></p>
                                    <p><em>快递商设置：</em>点击对应快递名称即可。</p>

                                </div>
                            </div>

                        </div>
                        <div class="row mt30">
                            <img src="/images/suc_bg_03.jpg" style="width: 100%;" alt="">
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>
<script>

</script>