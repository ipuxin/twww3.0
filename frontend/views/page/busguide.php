<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
use  yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = ' 商家常见问题';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pt">
    <div class="container navtion">
        <ul class="clearfix">
            <li>
                <a href="shop.html">招商首页</a>
            </li>
            <li>
                <a href="lc.html">入驻流程</a>
            </li>
            <li>
                <a href="pro.html">常见问题</a>
            </li>
            <li class="active">
                <a href="busguide.html">商家使用手册</a>
            </li>
        </ul>
    </div>
</div>

<div class="container">

    <!-- 按钮触发模态框 -->
    <div class="mt pull-right">

        <a href="<?= Url::to(['page/ruzhu']) ?>" class="btn btn-primary btn-lg">
            马上入驻
        </a>
<!--        <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">-->
<!--            商家使用手册-->
<!--        </button>-->
    </div>
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        登录
                    </h4>
                </div>
                <form role="form" class="login-content mtk" style="overflow: hidden;">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="请输入手机号">
                    </div>
                    <div class="form-group" id="captchaCode">
                        <img id="captcha" src="images/yzm.jpg">
                        <input type="text" class="form-control" placeholder="请输入右侧验证码">

                    </div>
                    <div class="form-group" id="code-input" style="float: left;">
                        <input type="text" class="form-control" placeholder="请输入短信验证码" style="border-right: none;">
                    </div>
                    <button type="submit" class="db">发送验证码</button>
                    <div class="form-group">
                        <input type="submit" class="form-control dy" value="登录">
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal -->
    </div>
</div>
<div class="pro-list">
    <style>
        /*.container p img{*/
            /*max-width: 1342px; width: 100%;*/
        /*}*/
    </style>
    <div class="container">
        <!--		<h1>一、商家常见问题</h1>-->
        <h2>1、登录，拼一下商家后台登录网址：<a href="http://adm.pingoing.cn/">http://adm.pingoing.cn/</a></h2>
        <p>商家在pc端申请入驻审核通过以后，可通过申请入驻时提交的账号密码登录商家后台</p>
        <p><img src="/images/busguide-0101.png" alt="登录商家后台" title="登录商家后台" style="max-width:421px ; width:100%;"></p>
        <h2>2、登录商家后台首先完善我的资料和我的店铺相关信息。</h2>
        <p>我的资料：</p>
        <p><img src="/images/busguide-0201.png" alt="我的资料" title="我的资料" style="max-width:745px ; width:100%;"></p>
        <p>我的店铺：</p>
        <p><img src="/images/busguide-0202.png" alt="我的资料" title="我的资料" style="max-width:451px ; width:100%;"></p>
        <p><em>发货地址：</em>售卖商品仓储地址；</p>
        <p><em>退货地址：</em>出现售后问题，客户将商品寄回商家收货的地址；</p>
        <p><em>包邮金额：</em>本店铺商品购买满多少包邮，满包邮仅针对普通商品，拼团商品价格均为包邮价格；</p>
        <p><em>支付宝账号：</em>此账号为交易金额提现账号；</p>
        <p><em>申请提现：</em>填写提现金额，提交申请，2个工作日之内到账。</p>
        <p style="color: #999;">注：客户下单支付，金额计入账户余额，客户确认收货（客户未确认，发货10天，系统自动确认）交易金额计入可提现余额，商家可提现至支付宝账号。</p>

        <h2>3、商品编辑</h2>
        <p>商品列表:</p>
        <p><img src="/images/busguide-0301.png" alt="商品列表" title="商品列表" style="max-width:1342px ; width:100%;"></p>
        <p>已发布商品修改，在商品列表中点击产品名称或编辑，进入编辑页面进行修改。</p>
        <h2>4、发布商品</h2>
        <p>基本信息</p>
        <p><img src="/images/busguide-0401.png" alt="基本信息" title="基本信息" style="max-width:488px ; width:100%;"></p>
        <p><em>商品类别：</em>普通商品为单买商品，其他为拼团商品；</p>
        <p><em>产品小图：</em>不大于32K，宽160*高160，在我的订单中和产品分类显示；</p>
        <p><em>产品大图：</em>不大于32K，128K，宽1080*高540，在商城首页显示；</p>
        <p><em>产品相册：</em>不大于32K，128K，宽540*高470，在商品页滚动显示；</p>
        <p><em>发货地址：</em>为售卖商品仓储所在地。</p>
        <p>拼团设置</p>
        <p><img src="/images/busguide-0402.png" alt="拼团设置" title="拼团设置" style="max-width: 555px; width:100%;"></p>
        <p><em>开团人数：</em>团购需要参与人数；</p>
        <p><em>团购限时：</em>团购进行时间超出团购限时，团购失败，系统自动退还已付款会员支付款项；</p>
        <p><em>抽奖人数：</em>为每个团中奖的人数，幸运抽奖未中奖会员系统自动退款，一元夺宝未中奖不退款。</p>
        <h2>5、优惠券设置</h2>
        <p><img src="/images/busguide-0501.png" alt="拼团设置" title="拼团设置" style="max-width: 564px; width:100%;"></p>
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
        <h2>6、订单单个发货</h2>
        <p><img src="/images/busguide-0601.png" alt="单个订单发货" title="单个订单发货" style="max-width:962px; width:100%;"></p>
        <p><em>单个订单发货：</em>进入待发货订单详情，输入快递单号，选择使用快递商，更改订单状态为已发货，点击保存。</p>
        <p style="color: #999;">注：快递商在设置中添加</p>
        <h2>7、订单批量发货</h2>
        <p><img src="/images/busguide-0701.png" alt="订单批量发货" title="订单批量发货" style="max-width: 807px; width:100%;"></p>
        <p><em>订单导出：</em>订单状态选择待发货，选择对应下单时间，点击导出，将文件保存到桌面。</p>
        <p><img src="/images/busguide-0702.png" alt="订单导出" title="订单导出" style="max-width: 934px; width:100%;"></p>
        <p><em>订单批量导入：</em>导出订单发货后，将对应订单ID，快递编号，快递名称，快递单号按上图格式填写好，选择、导入即可；</p>
        <p><em>快递编号：</em>点击快递编号按钮可查看快递名称对应快递编号，如果没有要查看快递，可在设置菜单中设置需要的快递。</p>
        <h2>8、快递商设置</h2>
        <p><img src="/images/busguide-0801.png" alt="快递商设置" title="快递商设置" style="max-width:1334px; width:100%;"></p>
        <p><em>快递商设置：</em>点击对应快递名称即可。</p>

    </div>
</div>
<!--footer star-->  