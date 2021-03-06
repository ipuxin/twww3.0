<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Person */
/* @var $form yii\widgets\ActiveForm */
?>

<script language="javascript" type="text/javascript">
    //定义 城市 数据数组
    cityArray = new Array();

    <?php
    $CITY = '[{"Code":"110000","Name":"\u5317\u4eac\u5e02","Cities":[{"Code":"110100","Name":"\u5317\u4eac\u5e02"}]},{"Code":"120000","Name":"\u5929\u6d25\u5e02","Cities":[{"Code":"120100","Name":"\u5929\u6d25\u5e02"}]},{"Code":"130000","Name":"\u6cb3\u5317\u7701","Cities":[{"Code":"130100","Name":"\u77f3\u5bb6\u5e84\u5e02"},{"Code":"130200","Name":"\u5510\u5c71\u5e02"},{"Code":"130300","Name":"\u79e6\u7687\u5c9b\u5e02"},{"Code":"130400","Name":"\u90af\u90f8\u5e02"},{"Code":"130500","Name":"\u90a2\u53f0\u5e02"},{"Code":"130600","Name":"\u4fdd\u5b9a\u5e02"},{"Code":"130700","Name":"\u5f20\u5bb6\u53e3\u5e02"},{"Code":"130800","Name":"\u627f\u5fb7\u5e02"},{"Code":"130900","Name":"\u6ca7\u5dde\u5e02"},{"Code":"131000","Name":"\u5eca\u574a\u5e02"},{"Code":"131100","Name":"\u8861\u6c34\u5e02"}]},{"Code":"140000","Name":"\u5c71\u897f\u7701","Cities":[{"Code":"140100","Name":"\u592a\u539f\u5e02"},{"Code":"140200","Name":"\u5927\u540c\u5e02"},{"Code":"140300","Name":"\u9633\u6cc9\u5e02"},{"Code":"140400","Name":"\u957f\u6cbb\u5e02"},{"Code":"140500","Name":"\u664b\u57ce\u5e02"},{"Code":"140600","Name":"\u6714\u5dde\u5e02"},{"Code":"140700","Name":"\u664b\u4e2d\u5e02"},{"Code":"140800","Name":"\u8fd0\u57ce\u5e02"},{"Code":"140900","Name":"\u5ffb\u5dde\u5e02"},{"Code":"141000","Name":"\u4e34\u6c7e\u5e02"},{"Code":"141100","Name":"\u5415\u6881\u5e02"}]},{"Code":"150000","Name":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a","Cities":[{"Code":"150100","Name":"\u547c\u548c\u6d69\u7279\u5e02"},{"Code":"150200","Name":"\u5305\u5934\u5e02"},{"Code":"150300","Name":"\u4e4c\u6d77\u5e02"},{"Code":"150400","Name":"\u8d64\u5cf0\u5e02"},{"Code":"150500","Name":"\u901a\u8fbd\u5e02"},{"Code":"150600","Name":"\u9102\u5c14\u591a\u65af\u5e02"},{"Code":"150700","Name":"\u547c\u4f26\u8d1d\u5c14\u5e02"},{"Code":"150800","Name":"\u5df4\u5f66\u6dd6\u5c14\u5e02"},{"Code":"150900","Name":"\u4e4c\u5170\u5bdf\u5e03\u5e02"},{"Code":"152200","Name":"\u5174\u5b89\u76df"},{"Code":"152500","Name":"\u9521\u6797\u90ed\u52d2\u76df"},{"Code":"152900","Name":"\u963f\u62c9\u5584\u76df"}]},{"Code":"210000","Name":"\u8fbd\u5b81\u7701","Cities":[{"Code":"210100","Name":"\u6c88\u9633\u5e02"},{"Code":"210200","Name":"\u5927\u8fde\u5e02"},{"Code":"210300","Name":"\u978d\u5c71\u5e02"},{"Code":"210400","Name":"\u629a\u987a\u5e02"},{"Code":"210500","Name":"\u672c\u6eaa\u5e02"},{"Code":"210600","Name":"\u4e39\u4e1c\u5e02"},{"Code":"210700","Name":"\u9526\u5dde\u5e02"},{"Code":"210800","Name":"\u8425\u53e3\u5e02"},{"Code":"210900","Name":"\u961c\u65b0\u5e02"},{"Code":"211000","Name":"\u8fbd\u9633\u5e02"},{"Code":"211100","Name":"\u76d8\u9526\u5e02"},{"Code":"211200","Name":"\u94c1\u5cad\u5e02"},{"Code":"211300","Name":"\u671d\u9633\u5e02"},{"Code":"211400","Name":"\u846b\u82a6\u5c9b\u5e02"}]},{"Code":"220000","Name":"\u5409\u6797\u7701","Cities":[{"Code":"220100","Name":"\u957f\u6625\u5e02"},{"Code":"220200","Name":"\u5409\u6797\u5e02"},{"Code":"220300","Name":"\u56db\u5e73\u5e02"},{"Code":"220400","Name":"\u8fbd\u6e90\u5e02"},{"Code":"220500","Name":"\u901a\u5316\u5e02"},{"Code":"220600","Name":"\u767d\u5c71\u5e02"},{"Code":"220700","Name":"\u677e\u539f\u5e02"},{"Code":"220800","Name":"\u767d\u57ce\u5e02"},{"Code":"222400","Name":"\u5ef6\u8fb9\u671d\u9c9c\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"230000","Name":"\u9ed1\u9f99\u6c5f\u7701","Cities":[{"Code":"230100","Name":"\u54c8\u5c14\u6ee8\u5e02"},{"Code":"230200","Name":"\u9f50\u9f50\u54c8\u5c14\u5e02"},{"Code":"230300","Name":"\u9e21\u897f\u5e02"},{"Code":"230400","Name":"\u9e64\u5c97\u5e02"},{"Code":"230500","Name":"\u53cc\u9e2d\u5c71\u5e02"},{"Code":"230600","Name":"\u5927\u5e86\u5e02"},{"Code":"230700","Name":"\u4f0a\u6625\u5e02"},{"Code":"230800","Name":"\u4f73\u6728\u65af\u5e02"},{"Code":"230900","Name":"\u4e03\u53f0\u6cb3\u5e02"},{"Code":"231000","Name":"\u7261\u4e39\u6c5f\u5e02"},{"Code":"231100","Name":"\u9ed1\u6cb3\u5e02"},{"Code":"231200","Name":"\u7ee5\u5316\u5e02"},{"Code":"232700","Name":"\u5927\u5174\u5b89\u5cad\u5730\u533a"}]},{"Code":"310000","Name":"\u4e0a\u6d77\u5e02","Cities":[{"Code":"310100","Name":"\u4e0a\u6d77\u5e02"}]},{"Code":"320000","Name":"\u6c5f\u82cf\u7701","Cities":[{"Code":"320100","Name":"\u5357\u4eac\u5e02"},{"Code":"320200","Name":"\u65e0\u9521\u5e02"},{"Code":"320300","Name":"\u5f90\u5dde\u5e02"},{"Code":"320400","Name":"\u5e38\u5dde\u5e02"},{"Code":"320500","Name":"\u82cf\u5dde\u5e02"},{"Code":"320600","Name":"\u5357\u901a\u5e02"},{"Code":"320700","Name":"\u8fde\u4e91\u6e2f\u5e02"},{"Code":"320800","Name":"\u6dee\u5b89\u5e02"},{"Code":"320900","Name":"\u76d0\u57ce\u5e02"},{"Code":"321000","Name":"\u626c\u5dde\u5e02"},{"Code":"321100","Name":"\u9547\u6c5f\u5e02"},{"Code":"321200","Name":"\u6cf0\u5dde\u5e02"},{"Code":"321300","Name":"\u5bbf\u8fc1\u5e02"}]},{"Code":"330000","Name":"\u6d59\u6c5f\u7701","Cities":[{"Code":"330100","Name":"\u676d\u5dde\u5e02"},{"Code":"330200","Name":"\u5b81\u6ce2\u5e02"},{"Code":"330300","Name":"\u6e29\u5dde\u5e02"},{"Code":"330400","Name":"\u5609\u5174\u5e02"},{"Code":"330500","Name":"\u6e56\u5dde\u5e02"},{"Code":"330600","Name":"\u7ecd\u5174\u5e02"},{"Code":"330700","Name":"\u91d1\u534e\u5e02"},{"Code":"330800","Name":"\u8862\u5dde\u5e02"},{"Code":"330900","Name":"\u821f\u5c71\u5e02"},{"Code":"331000","Name":"\u53f0\u5dde\u5e02"},{"Code":"331100","Name":"\u4e3d\u6c34\u5e02"}]},{"Code":"340000","Name":"\u5b89\u5fbd\u7701","Cities":[{"Code":"340100","Name":"\u5408\u80a5\u5e02"},{"Code":"340200","Name":"\u829c\u6e56\u5e02"},{"Code":"340300","Name":"\u868c\u57e0\u5e02"},{"Code":"340400","Name":"\u6dee\u5357\u5e02"},{"Code":"340500","Name":"\u9a6c\u978d\u5c71\u5e02"},{"Code":"340600","Name":"\u6dee\u5317\u5e02"},{"Code":"340700","Name":"\u94dc\u9675\u5e02"},{"Code":"340800","Name":"\u5b89\u5e86\u5e02"},{"Code":"341000","Name":"\u9ec4\u5c71\u5e02"},{"Code":"341100","Name":"\u6ec1\u5dde\u5e02"},{"Code":"341200","Name":"\u961c\u9633\u5e02"},{"Code":"341300","Name":"\u5bbf\u5dde\u5e02"},{"Code":"341500","Name":"\u516d\u5b89\u5e02"},{"Code":"341600","Name":"\u4eb3\u5dde\u5e02"},{"Code":"341700","Name":"\u6c60\u5dde\u5e02"},{"Code":"341800","Name":"\u5ba3\u57ce\u5e02"}]},{"Code":"350000","Name":"\u798f\u5efa\u7701","Cities":[{"Code":"350100","Name":"\u798f\u5dde\u5e02"},{"Code":"350200","Name":"\u53a6\u95e8\u5e02"},{"Code":"350300","Name":"\u8386\u7530\u5e02"},{"Code":"350400","Name":"\u4e09\u660e\u5e02"},{"Code":"350500","Name":"\u6cc9\u5dde\u5e02"},{"Code":"350600","Name":"\u6f33\u5dde\u5e02"},{"Code":"350700","Name":"\u5357\u5e73\u5e02"},{"Code":"350800","Name":"\u9f99\u5ca9\u5e02"},{"Code":"350900","Name":"\u5b81\u5fb7\u5e02"}]},{"Code":"360000","Name":"\u6c5f\u897f\u7701","Cities":[{"Code":"360100","Name":"\u5357\u660c\u5e02"},{"Code":"360200","Name":"\u666f\u5fb7\u9547\u5e02"},{"Code":"360300","Name":"\u840d\u4e61\u5e02"},{"Code":"360400","Name":"\u4e5d\u6c5f\u5e02"},{"Code":"360500","Name":"\u65b0\u4f59\u5e02"},{"Code":"360600","Name":"\u9e70\u6f6d\u5e02"},{"Code":"360700","Name":"\u8d63\u5dde\u5e02"},{"Code":"360800","Name":"\u5409\u5b89\u5e02"},{"Code":"360900","Name":"\u5b9c\u6625\u5e02"},{"Code":"361000","Name":"\u629a\u5dde\u5e02"},{"Code":"361100","Name":"\u4e0a\u9976\u5e02"}]},{"Code":"370000","Name":"\u5c71\u4e1c\u7701","Cities":[{"Code":"370100","Name":"\u6d4e\u5357\u5e02"},{"Code":"370200","Name":"\u9752\u5c9b\u5e02"},{"Code":"370300","Name":"\u6dc4\u535a\u5e02"},{"Code":"370400","Name":"\u67a3\u5e84\u5e02"},{"Code":"370500","Name":"\u4e1c\u8425\u5e02"},{"Code":"370600","Name":"\u70df\u53f0\u5e02"},{"Code":"370700","Name":"\u6f4d\u574a\u5e02"},{"Code":"370800","Name":"\u6d4e\u5b81\u5e02"},{"Code":"370900","Name":"\u6cf0\u5b89\u5e02"},{"Code":"371000","Name":"\u5a01\u6d77\u5e02"},{"Code":"371100","Name":"\u65e5\u7167\u5e02"},{"Code":"371200","Name":"\u83b1\u829c\u5e02"},{"Code":"371300","Name":"\u4e34\u6c82\u5e02"},{"Code":"371400","Name":"\u5fb7\u5dde\u5e02"},{"Code":"371500","Name":"\u804a\u57ce\u5e02"},{"Code":"371600","Name":"\u6ee8\u5dde\u5e02"},{"Code":"371700","Name":"\u83cf\u6cfd\u5e02"}]},{"Code":"410000","Name":"\u6cb3\u5357\u7701","Cities":[{"Code":"410100","Name":"\u90d1\u5dde\u5e02"},{"Code":"410200","Name":"\u5f00\u5c01\u5e02"},{"Code":"410300","Name":"\u6d1b\u9633\u5e02"},{"Code":"410400","Name":"\u5e73\u9876\u5c71\u5e02"},{"Code":"410500","Name":"\u5b89\u9633\u5e02"},{"Code":"410600","Name":"\u9e64\u58c1\u5e02"},{"Code":"410700","Name":"\u65b0\u4e61\u5e02"},{"Code":"410800","Name":"\u7126\u4f5c\u5e02"},{"Code":"410900","Name":"\u6fee\u9633\u5e02"},{"Code":"411000","Name":"\u8bb8\u660c\u5e02"},{"Code":"411100","Name":"\u6f2f\u6cb3\u5e02"},{"Code":"411200","Name":"\u4e09\u95e8\u5ce1\u5e02"},{"Code":"411300","Name":"\u5357\u9633\u5e02"},{"Code":"411400","Name":"\u5546\u4e18\u5e02"},{"Code":"411500","Name":"\u4fe1\u9633\u5e02"},{"Code":"411600","Name":"\u5468\u53e3\u5e02"},{"Code":"411700","Name":"\u9a7b\u9a6c\u5e97\u5e02"},{"Code":"419001","Name":"\u6d4e\u6e90\u5e02"}]},{"Code":"420000","Name":"\u6e56\u5317\u7701","Cities":[{"Code":"420100","Name":"\u6b66\u6c49\u5e02"},{"Code":"420200","Name":"\u9ec4\u77f3\u5e02"},{"Code":"420300","Name":"\u5341\u5830\u5e02"},{"Code":"420500","Name":"\u5b9c\u660c\u5e02"},{"Code":"420600","Name":"\u8944\u9633\u5e02"},{"Code":"420700","Name":"\u9102\u5dde\u5e02"},{"Code":"420800","Name":"\u8346\u95e8\u5e02"},{"Code":"420900","Name":"\u5b5d\u611f\u5e02"},{"Code":"421000","Name":"\u8346\u5dde\u5e02"},{"Code":"421100","Name":"\u9ec4\u5188\u5e02"},{"Code":"421200","Name":"\u54b8\u5b81\u5e02"},{"Code":"421300","Name":"\u968f\u5dde\u5e02"},{"Code":"422800","Name":"\u6069\u65bd\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"Code":"429004","Name":"\u4ed9\u6843\u5e02"},{"Code":"429005","Name":"\u6f5c\u6c5f\u5e02"},{"Code":"429006","Name":"\u5929\u95e8\u5e02"},{"Code":"429021","Name":"\u795e\u519c\u67b6\u6797\u533a"}]},{"Code":"430000","Name":"\u6e56\u5357\u7701","Cities":[{"Code":"430100","Name":"\u957f\u6c99\u5e02"},{"Code":"430200","Name":"\u682a\u6d32\u5e02"},{"Code":"430300","Name":"\u6e58\u6f6d\u5e02"},{"Code":"430400","Name":"\u8861\u9633\u5e02"},{"Code":"430500","Name":"\u90b5\u9633\u5e02"},{"Code":"430600","Name":"\u5cb3\u9633\u5e02"},{"Code":"430700","Name":"\u5e38\u5fb7\u5e02"},{"Code":"430800","Name":"\u5f20\u5bb6\u754c\u5e02"},{"Code":"430900","Name":"\u76ca\u9633\u5e02"},{"Code":"431000","Name":"\u90f4\u5dde\u5e02"},{"Code":"431100","Name":"\u6c38\u5dde\u5e02"},{"Code":"431200","Name":"\u6000\u5316\u5e02"},{"Code":"431300","Name":"\u5a04\u5e95\u5e02"},{"Code":"433100","Name":"\u6e58\u897f\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"440000","Name":"\u5e7f\u4e1c\u7701","Cities":[{"Code":"440100","Name":"\u5e7f\u5dde\u5e02"},{"Code":"440200","Name":"\u97f6\u5173\u5e02"},{"Code":"440300","Name":"\u6df1\u5733\u5e02"},{"Code":"440400","Name":"\u73e0\u6d77\u5e02"},{"Code":"440500","Name":"\u6c55\u5934\u5e02"},{"Code":"440600","Name":"\u4f5b\u5c71\u5e02"},{"Code":"440700","Name":"\u6c5f\u95e8\u5e02"},{"Code":"440800","Name":"\u6e5b\u6c5f\u5e02"},{"Code":"440900","Name":"\u8302\u540d\u5e02"},{"Code":"441200","Name":"\u8087\u5e86\u5e02"},{"Code":"441300","Name":"\u60e0\u5dde\u5e02"},{"Code":"441400","Name":"\u6885\u5dde\u5e02"},{"Code":"441500","Name":"\u6c55\u5c3e\u5e02"},{"Code":"441600","Name":"\u6cb3\u6e90\u5e02"},{"Code":"441700","Name":"\u9633\u6c5f\u5e02"},{"Code":"441800","Name":"\u6e05\u8fdc\u5e02"},{"Code":"441900","Name":"\u4e1c\u839e\u5e02"},{"Code":"442000","Name":"\u4e2d\u5c71\u5e02"},{"Code":"445100","Name":"\u6f6e\u5dde\u5e02"},{"Code":"445200","Name":"\u63ed\u9633\u5e02"},{"Code":"445300","Name":"\u4e91\u6d6e\u5e02"}]},{"Code":"450000","Name":"\u5e7f\u897f\u58ee\u65cf\u81ea\u6cbb\u533a","Cities":[{"Code":"450100","Name":"\u5357\u5b81\u5e02"},{"Code":"450200","Name":"\u67f3\u5dde\u5e02"},{"Code":"450300","Name":"\u6842\u6797\u5e02"},{"Code":"450400","Name":"\u68a7\u5dde\u5e02"},{"Code":"450500","Name":"\u5317\u6d77\u5e02"},{"Code":"450600","Name":"\u9632\u57ce\u6e2f\u5e02"},{"Code":"450700","Name":"\u94a6\u5dde\u5e02"},{"Code":"450800","Name":"\u8d35\u6e2f\u5e02"},{"Code":"450900","Name":"\u7389\u6797\u5e02"},{"Code":"451000","Name":"\u767e\u8272\u5e02"},{"Code":"451100","Name":"\u8d3a\u5dde\u5e02"},{"Code":"451200","Name":"\u6cb3\u6c60\u5e02"},{"Code":"451300","Name":"\u6765\u5bbe\u5e02"},{"Code":"451400","Name":"\u5d07\u5de6\u5e02"}]},{"Code":"460000","Name":"\u6d77\u5357\u7701","Cities":[{"Code":"460100","Name":"\u6d77\u53e3\u5e02"},{"Code":"460200","Name":"\u4e09\u4e9a\u5e02"},{"Code":"460300","Name":"\u4e09\u6c99\u5e02"},{"Code":"469001","Name":"\u4e94\u6307\u5c71\u5e02"},{"Code":"469002","Name":"\u743c\u6d77\u5e02"},{"Code":"460400","Name":"\u510b\u5dde\u5e02"},{"Code":"469005","Name":"\u6587\u660c\u5e02"},{"Code":"469006","Name":"\u4e07\u5b81\u5e02"},{"Code":"469007","Name":"\u4e1c\u65b9\u5e02"},{"Code":"469021","Name":"\u5b9a\u5b89\u53bf"},{"Code":"469022","Name":"\u5c6f\u660c\u53bf"},{"Code":"469023","Name":"\u6f84\u8fc8\u53bf"},{"Code":"469024","Name":"\u4e34\u9ad8\u53bf"},{"Code":"469025","Name":"\u767d\u6c99\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469026","Name":"\u660c\u6c5f\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469027","Name":"\u4e50\u4e1c\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469028","Name":"\u9675\u6c34\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469029","Name":"\u4fdd\u4ead\u9ece\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469030","Name":"\u743c\u4e2d\u9ece\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"}]},{"Code":"500000","Name":"\u91cd\u5e86\u5e02","Cities":[{"Code":"500100","Name":"\u91cd\u5e86\u5e02"}]},{"Code":"510000","Name":"\u56db\u5ddd\u7701","Cities":[{"Code":"510100","Name":"\u6210\u90fd\u5e02"},{"Code":"510300","Name":"\u81ea\u8d21\u5e02"},{"Code":"510400","Name":"\u6500\u679d\u82b1\u5e02"},{"Code":"510500","Name":"\u6cf8\u5dde\u5e02"},{"Code":"510600","Name":"\u5fb7\u9633\u5e02"},{"Code":"510700","Name":"\u7ef5\u9633\u5e02"},{"Code":"510800","Name":"\u5e7f\u5143\u5e02"},{"Code":"510900","Name":"\u9042\u5b81\u5e02"},{"Code":"511000","Name":"\u5185\u6c5f\u5e02"},{"Code":"511100","Name":"\u4e50\u5c71\u5e02"},{"Code":"511300","Name":"\u5357\u5145\u5e02"},{"Code":"511400","Name":"\u7709\u5c71\u5e02"},{"Code":"511500","Name":"\u5b9c\u5bbe\u5e02"},{"Code":"511600","Name":"\u5e7f\u5b89\u5e02"},{"Code":"511700","Name":"\u8fbe\u5dde\u5e02"},{"Code":"511800","Name":"\u96c5\u5b89\u5e02"},{"Code":"511900","Name":"\u5df4\u4e2d\u5e02"},{"Code":"512000","Name":"\u8d44\u9633\u5e02"},{"Code":"513200","Name":"\u963f\u575d\u85cf\u65cf\u7f8c\u65cf\u81ea\u6cbb\u5dde"},{"Code":"513300","Name":"\u7518\u5b5c\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"513400","Name":"\u51c9\u5c71\u5f5d\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"520000","Name":"\u8d35\u5dde\u7701","Cities":[{"Code":"520100","Name":"\u8d35\u9633\u5e02"},{"Code":"520200","Name":"\u516d\u76d8\u6c34\u5e02"},{"Code":"520300","Name":"\u9075\u4e49\u5e02"},{"Code":"520400","Name":"\u5b89\u987a\u5e02"},{"Code":"520600","Name":"\u94dc\u4ec1\u5e02"},{"Code":"522300","Name":"\u9ed4\u897f\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"Code":"520500","Name":"\u6bd5\u8282\u5e02"},{"Code":"522600","Name":"\u9ed4\u4e1c\u5357\u82d7\u65cf\u4f97\u65cf\u81ea\u6cbb\u5dde"},{"Code":"522700","Name":"\u9ed4\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"530000","Name":"\u4e91\u5357\u7701","Cities":[{"Code":"530100","Name":"\u6606\u660e\u5e02"},{"Code":"530300","Name":"\u66f2\u9756\u5e02"},{"Code":"530400","Name":"\u7389\u6eaa\u5e02"},{"Code":"530500","Name":"\u4fdd\u5c71\u5e02"},{"Code":"530600","Name":"\u662d\u901a\u5e02"},{"Code":"530700","Name":"\u4e3d\u6c5f\u5e02"},{"Code":"530800","Name":"\u666e\u6d31\u5e02"},{"Code":"530900","Name":"\u4e34\u6ca7\u5e02"},{"Code":"532300","Name":"\u695a\u96c4\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532500","Name":"\u7ea2\u6cb3\u54c8\u5c3c\u65cf\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532600","Name":"\u6587\u5c71\u58ee\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532800","Name":"\u897f\u53cc\u7248\u7eb3\u50a3\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532900","Name":"\u5927\u7406\u767d\u65cf\u81ea\u6cbb\u5dde"},{"Code":"533100","Name":"\u5fb7\u5b8f\u50a3\u65cf\u666f\u9887\u65cf\u81ea\u6cbb\u5dde"},{"Code":"533300","Name":"\u6012\u6c5f\u5088\u50f3\u65cf\u81ea\u6cbb\u5dde"},{"Code":"533400","Name":"\u8fea\u5e86\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"540000","Name":"\u897f\u85cf\u81ea\u6cbb\u533a","Cities":[{"Code":"540100","Name":"\u62c9\u8428\u5e02"},{"Code":"540300","Name":"\u660c\u90fd\u5e02"},{"Code":"542200","Name":"\u5c71\u5357\u5730\u533a"},{"Code":"540200","Name":"\u65e5\u5580\u5219\u5e02"},{"Code":"542400","Name":"\u90a3\u66f2\u5730\u533a"},{"Code":"542500","Name":"\u963f\u91cc\u5730\u533a"},{"Code":"540400","Name":"\u6797\u829d\u5e02"}]},{"Code":"610000","Name":"\u9655\u897f\u7701","Cities":[{"Code":"610100","Name":"\u897f\u5b89\u5e02"},{"Code":"610200","Name":"\u94dc\u5ddd\u5e02"},{"Code":"610300","Name":"\u5b9d\u9e21\u5e02"},{"Code":"610400","Name":"\u54b8\u9633\u5e02"},{"Code":"610500","Name":"\u6e2d\u5357\u5e02"},{"Code":"610600","Name":"\u5ef6\u5b89\u5e02"},{"Code":"610700","Name":"\u6c49\u4e2d\u5e02"},{"Code":"610800","Name":"\u6986\u6797\u5e02"},{"Code":"610900","Name":"\u5b89\u5eb7\u5e02"},{"Code":"611000","Name":"\u5546\u6d1b\u5e02"}]},{"Code":"620000","Name":"\u7518\u8083\u7701","Cities":[{"Code":"620100","Name":"\u5170\u5dde\u5e02"},{"Code":"620200","Name":"\u5609\u5cea\u5173\u5e02"},{"Code":"620300","Name":"\u91d1\u660c\u5e02"},{"Code":"620400","Name":"\u767d\u94f6\u5e02"},{"Code":"620500","Name":"\u5929\u6c34\u5e02"},{"Code":"620600","Name":"\u6b66\u5a01\u5e02"},{"Code":"620700","Name":"\u5f20\u6396\u5e02"},{"Code":"620800","Name":"\u5e73\u51c9\u5e02"},{"Code":"620900","Name":"\u9152\u6cc9\u5e02"},{"Code":"621000","Name":"\u5e86\u9633\u5e02"},{"Code":"621100","Name":"\u5b9a\u897f\u5e02"},{"Code":"621200","Name":"\u9647\u5357\u5e02"},{"Code":"622900","Name":"\u4e34\u590f\u56de\u65cf\u81ea\u6cbb\u5dde"},{"Code":"623000","Name":"\u7518\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"630000","Name":"\u9752\u6d77\u7701","Cities":[{"Code":"630100","Name":"\u897f\u5b81\u5e02"},{"Code":"630200","Name":"\u6d77\u4e1c\u5e02"},{"Code":"632200","Name":"\u6d77\u5317\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632300","Name":"\u9ec4\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632500","Name":"\u6d77\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632600","Name":"\u679c\u6d1b\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632700","Name":"\u7389\u6811\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632800","Name":"\u6d77\u897f\u8499\u53e4\u65cf\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"640000","Name":"\u5b81\u590f\u56de\u65cf\u81ea\u6cbb\u533a","Cities":[{"Code":"640100","Name":"\u94f6\u5ddd\u5e02"},{"Code":"640200","Name":"\u77f3\u5634\u5c71\u5e02"},{"Code":"640300","Name":"\u5434\u5fe0\u5e02"},{"Code":"640400","Name":"\u56fa\u539f\u5e02"},{"Code":"640500","Name":"\u4e2d\u536b\u5e02"}]},{"Code":"650000","Name":"\u65b0\u7586\u7ef4\u543e\u5c14\u81ea\u6cbb\u533a","Cities":[{"Code":"650100","Name":"\u4e4c\u9c81\u6728\u9f50\u5e02"},{"Code":"650200","Name":"\u514b\u62c9\u739b\u4f9d\u5e02"},{"Code":"650400","Name":"\u5410\u9c81\u756a\u5e02"},{"Code":"652200","Name":"\u54c8\u5bc6\u5730\u533a"},{"Code":"652300","Name":"\u660c\u5409\u56de\u65cf\u81ea\u6cbb\u5dde"},{"Code":"652700","Name":"\u535a\u5c14\u5854\u62c9\u8499\u53e4\u81ea\u6cbb\u5dde"},{"Code":"652800","Name":"\u5df4\u97f3\u90ed\u695e\u8499\u53e4\u81ea\u6cbb\u5dde"},{"Code":"652900","Name":"\u963f\u514b\u82cf\u5730\u533a"},{"Code":"653000","Name":"\u514b\u5b5c\u52d2\u82cf\u67ef\u5c14\u514b\u5b5c\u81ea\u6cbb\u5dde"},{"Code":"653100","Name":"\u5580\u4ec0\u5730\u533a"},{"Code":"653200","Name":"\u548c\u7530\u5730\u533a"},{"Code":"654000","Name":"\u4f0a\u7281\u54c8\u8428\u514b\u81ea\u6cbb\u5dde"},{"Code":"654200","Name":"\u5854\u57ce\u5730\u533a"},{"Code":"654300","Name":"\u963f\u52d2\u6cf0\u5730\u533a"},{"Code":"659001","Name":"\u77f3\u6cb3\u5b50\u5e02"},{"Code":"659002","Name":"\u963f\u62c9\u5c14\u5e02"},{"Code":"659003","Name":"\u56fe\u6728\u8212\u514b\u5e02"},{"Code":"659004","Name":"\u4e94\u5bb6\u6e20\u5e02"},{"Code":"659005","Name":"\u5317\u5c6f\u5e02"},{"Code":"659006","Name":"\u94c1\u95e8\u5173\u5e02"},{"Code":"659007","Name":"\u53cc\u6cb3\u5e02"},{"Code":"659008","Name":"\u53ef\u514b\u8fbe\u62c9\u5e02"}]},{"Code":"710000","Name":"\u53f0\u6e7e\u7701","Cities":""},{"Code":"810000","Name":"\u9999\u6e2f\u7279\u522b\u884c\u653f\u533a","Cities":[{"Code":"810001","Name":"\u4e2d\u897f\u5340"},{"Code":"810002","Name":"\u7063\u4ed4\u5340"},{"Code":"810003","Name":"\u6771\u5340"},{"Code":"810004","Name":"\u5357\u5340"},{"Code":"810005","Name":"\u6cb9\u5c16\u65fa\u5340"},{"Code":"810006","Name":"\u6df1\u6c34\u57d7\u5340"},{"Code":"810007","Name":"\u4e5d\u9f8d\u57ce\u5340"},{"Code":"810008","Name":"\u9ec3\u5927\u4ed9\u5340"},{"Code":"810009","Name":"\u89c0\u5858\u5340"},{"Code":"810010","Name":"\u8343\u7063\u5340"},{"Code":"810011","Name":"\u5c6f\u9580\u5340"},{"Code":"810012","Name":"\u5143\u6717\u5340"},{"Code":"810013","Name":"\u5317\u5340"},{"Code":"810014","Name":"\u5927\u57d4\u5340"},{"Code":"810015","Name":"\u897f\u8ca2\u5340"},{"Code":"810016","Name":"\u6c99\u7530\u5340"},{"Code":"810017","Name":"\u8475\u9752\u5340"},{"Code":"810018","Name":"\u96e2\u5cf6\u5340"}]},{"Code":"820000","Name":"\u6fb3\u95e8\u7279\u522b\u884c\u653f\u533a","Cities":[{"Code":"820001","Name":"\u82b1\u5730\u746a\u5802\u5340"},{"Code":"820002","Name":"\u82b1\u738b\u5802\u5340"},{"Code":"820003","Name":"\u671b\u5fb7\u5802\u5340"},{"Code":"820004","Name":"\u5927\u5802\u5340"},{"Code":"820005","Name":"\u98a8\u9806\u5802\u5340"},{"Code":"820006","Name":"\u5609\u6a21\u5802\u5340"},{"Code":"820007","Name":"\u8def\u6c39\u586b\u6d77\u5340"},{"Code":"820008","Name":"\u8056\u65b9\u6fdf\u5404\u5802\u5340"}]}]';
    $City_arr = json_decode($CITY, true);
    //print_r($City_arr);
    foreach ($City_arr as $k => $v) {
        $cityCode = Array();
        $cityName = Array();
        if ($v['Cities']) foreach ($v['Cities'] as $sss) {
            $cityCode[] = $sss['Code'] . '=' . $sss['Name'];
            $cityName[] = $sss['Name'];
        }
        $cityCode = implode("|", $cityCode);
        $cityName = implode("|", $cityName);
        echo 'cityArray[' . $k . '] = new Array("' . $v["Name"] . '", "' . $cityName . '","' . $cityCode . '");';
    }

    echo 'cityArray[' . ($k + 1) . '] = new Array("其它", "其它");';
    echo 'cityArray[' . ($k + 2) . '] = new Array("请选择", "-请选择-");';
    ?>

    function getCity(currProvince) {
        //当前 所选择 的 省
        var currProvince = currProvince;
        var i, j, k;
        //清空 城市 下拉选单
        document.all.selCity.length = 0;
        for (i = 0; i < cityArray.length; i++) {
            //得到 当前省 在 城市数组中的位置
            if (cityArray[i][0] == currProvince) {
                //得到 当前省 所辖制的 地市
                var tmpcityArray = cityArray[i][2].split("|");
                var tmpcityArray2 = cityArray[i][1].split("|")
                for (j = 0; j < tmpcityArray.length; j++) {
                    //填充 城市 下拉选单
                    document.all.selCity.options[document.all.selCity.length] = new Option(tmpcityArray2[j], tmpcityArray[j]);
                }
            }
        }
    }
</script>


<!-- 此处getCity()方法获取的是option标签中的value属性所对应的值，而不是页面显示的值 -->


<?php
//$CITY = '[{"Code":"110000","Name":"\u5317\u4eac\u5e02","Cities":[{"Code":"110100","Name":"\u5317\u4eac\u5e02"}]},{"Code":"120000","Name":"\u5929\u6d25\u5e02","Cities":[{"Code":"120100","Name":"\u5929\u6d25\u5e02"}]},{"Code":"130000","Name":"\u6cb3\u5317\u7701","Cities":[{"Code":"130100","Name":"\u77f3\u5bb6\u5e84\u5e02"},{"Code":"130200","Name":"\u5510\u5c71\u5e02"},{"Code":"130300","Name":"\u79e6\u7687\u5c9b\u5e02"},{"Code":"130400","Name":"\u90af\u90f8\u5e02"},{"Code":"130500","Name":"\u90a2\u53f0\u5e02"},{"Code":"130600","Name":"\u4fdd\u5b9a\u5e02"},{"Code":"130700","Name":"\u5f20\u5bb6\u53e3\u5e02"},{"Code":"130800","Name":"\u627f\u5fb7\u5e02"},{"Code":"130900","Name":"\u6ca7\u5dde\u5e02"},{"Code":"131000","Name":"\u5eca\u574a\u5e02"},{"Code":"131100","Name":"\u8861\u6c34\u5e02"}]},{"Code":"140000","Name":"\u5c71\u897f\u7701","Cities":[{"Code":"140100","Name":"\u592a\u539f\u5e02"},{"Code":"140200","Name":"\u5927\u540c\u5e02"},{"Code":"140300","Name":"\u9633\u6cc9\u5e02"},{"Code":"140400","Name":"\u957f\u6cbb\u5e02"},{"Code":"140500","Name":"\u664b\u57ce\u5e02"},{"Code":"140600","Name":"\u6714\u5dde\u5e02"},{"Code":"140700","Name":"\u664b\u4e2d\u5e02"},{"Code":"140800","Name":"\u8fd0\u57ce\u5e02"},{"Code":"140900","Name":"\u5ffb\u5dde\u5e02"},{"Code":"141000","Name":"\u4e34\u6c7e\u5e02"},{"Code":"141100","Name":"\u5415\u6881\u5e02"}]},{"Code":"150000","Name":"\u5185\u8499\u53e4\u81ea\u6cbb\u533a","Cities":[{"Code":"150100","Name":"\u547c\u548c\u6d69\u7279\u5e02"},{"Code":"150200","Name":"\u5305\u5934\u5e02"},{"Code":"150300","Name":"\u4e4c\u6d77\u5e02"},{"Code":"150400","Name":"\u8d64\u5cf0\u5e02"},{"Code":"150500","Name":"\u901a\u8fbd\u5e02"},{"Code":"150600","Name":"\u9102\u5c14\u591a\u65af\u5e02"},{"Code":"150700","Name":"\u547c\u4f26\u8d1d\u5c14\u5e02"},{"Code":"150800","Name":"\u5df4\u5f66\u6dd6\u5c14\u5e02"},{"Code":"150900","Name":"\u4e4c\u5170\u5bdf\u5e03\u5e02"},{"Code":"152200","Name":"\u5174\u5b89\u76df"},{"Code":"152500","Name":"\u9521\u6797\u90ed\u52d2\u76df"},{"Code":"152900","Name":"\u963f\u62c9\u5584\u76df"}]},{"Code":"210000","Name":"\u8fbd\u5b81\u7701","Cities":[{"Code":"210100","Name":"\u6c88\u9633\u5e02"},{"Code":"210200","Name":"\u5927\u8fde\u5e02"},{"Code":"210300","Name":"\u978d\u5c71\u5e02"},{"Code":"210400","Name":"\u629a\u987a\u5e02"},{"Code":"210500","Name":"\u672c\u6eaa\u5e02"},{"Code":"210600","Name":"\u4e39\u4e1c\u5e02"},{"Code":"210700","Name":"\u9526\u5dde\u5e02"},{"Code":"210800","Name":"\u8425\u53e3\u5e02"},{"Code":"210900","Name":"\u961c\u65b0\u5e02"},{"Code":"211000","Name":"\u8fbd\u9633\u5e02"},{"Code":"211100","Name":"\u76d8\u9526\u5e02"},{"Code":"211200","Name":"\u94c1\u5cad\u5e02"},{"Code":"211300","Name":"\u671d\u9633\u5e02"},{"Code":"211400","Name":"\u846b\u82a6\u5c9b\u5e02"}]},{"Code":"220000","Name":"\u5409\u6797\u7701","Cities":[{"Code":"220100","Name":"\u957f\u6625\u5e02"},{"Code":"220200","Name":"\u5409\u6797\u5e02"},{"Code":"220300","Name":"\u56db\u5e73\u5e02"},{"Code":"220400","Name":"\u8fbd\u6e90\u5e02"},{"Code":"220500","Name":"\u901a\u5316\u5e02"},{"Code":"220600","Name":"\u767d\u5c71\u5e02"},{"Code":"220700","Name":"\u677e\u539f\u5e02"},{"Code":"220800","Name":"\u767d\u57ce\u5e02"},{"Code":"222400","Name":"\u5ef6\u8fb9\u671d\u9c9c\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"230000","Name":"\u9ed1\u9f99\u6c5f\u7701","Cities":[{"Code":"230100","Name":"\u54c8\u5c14\u6ee8\u5e02"},{"Code":"230200","Name":"\u9f50\u9f50\u54c8\u5c14\u5e02"},{"Code":"230300","Name":"\u9e21\u897f\u5e02"},{"Code":"230400","Name":"\u9e64\u5c97\u5e02"},{"Code":"230500","Name":"\u53cc\u9e2d\u5c71\u5e02"},{"Code":"230600","Name":"\u5927\u5e86\u5e02"},{"Code":"230700","Name":"\u4f0a\u6625\u5e02"},{"Code":"230800","Name":"\u4f73\u6728\u65af\u5e02"},{"Code":"230900","Name":"\u4e03\u53f0\u6cb3\u5e02"},{"Code":"231000","Name":"\u7261\u4e39\u6c5f\u5e02"},{"Code":"231100","Name":"\u9ed1\u6cb3\u5e02"},{"Code":"231200","Name":"\u7ee5\u5316\u5e02"},{"Code":"232700","Name":"\u5927\u5174\u5b89\u5cad\u5730\u533a"}]},{"Code":"310000","Name":"\u4e0a\u6d77\u5e02","Cities":[{"Code":"310100","Name":"\u4e0a\u6d77\u5e02"}]},{"Code":"320000","Name":"\u6c5f\u82cf\u7701","Cities":[{"Code":"320100","Name":"\u5357\u4eac\u5e02"},{"Code":"320200","Name":"\u65e0\u9521\u5e02"},{"Code":"320300","Name":"\u5f90\u5dde\u5e02"},{"Code":"320400","Name":"\u5e38\u5dde\u5e02"},{"Code":"320500","Name":"\u82cf\u5dde\u5e02"},{"Code":"320600","Name":"\u5357\u901a\u5e02"},{"Code":"320700","Name":"\u8fde\u4e91\u6e2f\u5e02"},{"Code":"320800","Name":"\u6dee\u5b89\u5e02"},{"Code":"320900","Name":"\u76d0\u57ce\u5e02"},{"Code":"321000","Name":"\u626c\u5dde\u5e02"},{"Code":"321100","Name":"\u9547\u6c5f\u5e02"},{"Code":"321200","Name":"\u6cf0\u5dde\u5e02"},{"Code":"321300","Name":"\u5bbf\u8fc1\u5e02"}]},{"Code":"330000","Name":"\u6d59\u6c5f\u7701","Cities":[{"Code":"330100","Name":"\u676d\u5dde\u5e02"},{"Code":"330200","Name":"\u5b81\u6ce2\u5e02"},{"Code":"330300","Name":"\u6e29\u5dde\u5e02"},{"Code":"330400","Name":"\u5609\u5174\u5e02"},{"Code":"330500","Name":"\u6e56\u5dde\u5e02"},{"Code":"330600","Name":"\u7ecd\u5174\u5e02"},{"Code":"330700","Name":"\u91d1\u534e\u5e02"},{"Code":"330800","Name":"\u8862\u5dde\u5e02"},{"Code":"330900","Name":"\u821f\u5c71\u5e02"},{"Code":"331000","Name":"\u53f0\u5dde\u5e02"},{"Code":"331100","Name":"\u4e3d\u6c34\u5e02"}]},{"Code":"340000","Name":"\u5b89\u5fbd\u7701","Cities":[{"Code":"340100","Name":"\u5408\u80a5\u5e02"},{"Code":"340200","Name":"\u829c\u6e56\u5e02"},{"Code":"340300","Name":"\u868c\u57e0\u5e02"},{"Code":"340400","Name":"\u6dee\u5357\u5e02"},{"Code":"340500","Name":"\u9a6c\u978d\u5c71\u5e02"},{"Code":"340600","Name":"\u6dee\u5317\u5e02"},{"Code":"340700","Name":"\u94dc\u9675\u5e02"},{"Code":"340800","Name":"\u5b89\u5e86\u5e02"},{"Code":"341000","Name":"\u9ec4\u5c71\u5e02"},{"Code":"341100","Name":"\u6ec1\u5dde\u5e02"},{"Code":"341200","Name":"\u961c\u9633\u5e02"},{"Code":"341300","Name":"\u5bbf\u5dde\u5e02"},{"Code":"341500","Name":"\u516d\u5b89\u5e02"},{"Code":"341600","Name":"\u4eb3\u5dde\u5e02"},{"Code":"341700","Name":"\u6c60\u5dde\u5e02"},{"Code":"341800","Name":"\u5ba3\u57ce\u5e02"}]},{"Code":"350000","Name":"\u798f\u5efa\u7701","Cities":[{"Code":"350100","Name":"\u798f\u5dde\u5e02"},{"Code":"350200","Name":"\u53a6\u95e8\u5e02"},{"Code":"350300","Name":"\u8386\u7530\u5e02"},{"Code":"350400","Name":"\u4e09\u660e\u5e02"},{"Code":"350500","Name":"\u6cc9\u5dde\u5e02"},{"Code":"350600","Name":"\u6f33\u5dde\u5e02"},{"Code":"350700","Name":"\u5357\u5e73\u5e02"},{"Code":"350800","Name":"\u9f99\u5ca9\u5e02"},{"Code":"350900","Name":"\u5b81\u5fb7\u5e02"}]},{"Code":"360000","Name":"\u6c5f\u897f\u7701","Cities":[{"Code":"360100","Name":"\u5357\u660c\u5e02"},{"Code":"360200","Name":"\u666f\u5fb7\u9547\u5e02"},{"Code":"360300","Name":"\u840d\u4e61\u5e02"},{"Code":"360400","Name":"\u4e5d\u6c5f\u5e02"},{"Code":"360500","Name":"\u65b0\u4f59\u5e02"},{"Code":"360600","Name":"\u9e70\u6f6d\u5e02"},{"Code":"360700","Name":"\u8d63\u5dde\u5e02"},{"Code":"360800","Name":"\u5409\u5b89\u5e02"},{"Code":"360900","Name":"\u5b9c\u6625\u5e02"},{"Code":"361000","Name":"\u629a\u5dde\u5e02"},{"Code":"361100","Name":"\u4e0a\u9976\u5e02"}]},{"Code":"370000","Name":"\u5c71\u4e1c\u7701","Cities":[{"Code":"370100","Name":"\u6d4e\u5357\u5e02"},{"Code":"370200","Name":"\u9752\u5c9b\u5e02"},{"Code":"370300","Name":"\u6dc4\u535a\u5e02"},{"Code":"370400","Name":"\u67a3\u5e84\u5e02"},{"Code":"370500","Name":"\u4e1c\u8425\u5e02"},{"Code":"370600","Name":"\u70df\u53f0\u5e02"},{"Code":"370700","Name":"\u6f4d\u574a\u5e02"},{"Code":"370800","Name":"\u6d4e\u5b81\u5e02"},{"Code":"370900","Name":"\u6cf0\u5b89\u5e02"},{"Code":"371000","Name":"\u5a01\u6d77\u5e02"},{"Code":"371100","Name":"\u65e5\u7167\u5e02"},{"Code":"371200","Name":"\u83b1\u829c\u5e02"},{"Code":"371300","Name":"\u4e34\u6c82\u5e02"},{"Code":"371400","Name":"\u5fb7\u5dde\u5e02"},{"Code":"371500","Name":"\u804a\u57ce\u5e02"},{"Code":"371600","Name":"\u6ee8\u5dde\u5e02"},{"Code":"371700","Name":"\u83cf\u6cfd\u5e02"}]},{"Code":"410000","Name":"\u6cb3\u5357\u7701","Cities":[{"Code":"410100","Name":"\u90d1\u5dde\u5e02"},{"Code":"410200","Name":"\u5f00\u5c01\u5e02"},{"Code":"410300","Name":"\u6d1b\u9633\u5e02"},{"Code":"410400","Name":"\u5e73\u9876\u5c71\u5e02"},{"Code":"410500","Name":"\u5b89\u9633\u5e02"},{"Code":"410600","Name":"\u9e64\u58c1\u5e02"},{"Code":"410700","Name":"\u65b0\u4e61\u5e02"},{"Code":"410800","Name":"\u7126\u4f5c\u5e02"},{"Code":"410900","Name":"\u6fee\u9633\u5e02"},{"Code":"411000","Name":"\u8bb8\u660c\u5e02"},{"Code":"411100","Name":"\u6f2f\u6cb3\u5e02"},{"Code":"411200","Name":"\u4e09\u95e8\u5ce1\u5e02"},{"Code":"411300","Name":"\u5357\u9633\u5e02"},{"Code":"411400","Name":"\u5546\u4e18\u5e02"},{"Code":"411500","Name":"\u4fe1\u9633\u5e02"},{"Code":"411600","Name":"\u5468\u53e3\u5e02"},{"Code":"411700","Name":"\u9a7b\u9a6c\u5e97\u5e02"},{"Code":"419001","Name":"\u6d4e\u6e90\u5e02"}]},{"Code":"420000","Name":"\u6e56\u5317\u7701","Cities":[{"Code":"420100","Name":"\u6b66\u6c49\u5e02"},{"Code":"420200","Name":"\u9ec4\u77f3\u5e02"},{"Code":"420300","Name":"\u5341\u5830\u5e02"},{"Code":"420500","Name":"\u5b9c\u660c\u5e02"},{"Code":"420600","Name":"\u8944\u9633\u5e02"},{"Code":"420700","Name":"\u9102\u5dde\u5e02"},{"Code":"420800","Name":"\u8346\u95e8\u5e02"},{"Code":"420900","Name":"\u5b5d\u611f\u5e02"},{"Code":"421000","Name":"\u8346\u5dde\u5e02"},{"Code":"421100","Name":"\u9ec4\u5188\u5e02"},{"Code":"421200","Name":"\u54b8\u5b81\u5e02"},{"Code":"421300","Name":"\u968f\u5dde\u5e02"},{"Code":"422800","Name":"\u6069\u65bd\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"Code":"429004","Name":"\u4ed9\u6843\u5e02"},{"Code":"429005","Name":"\u6f5c\u6c5f\u5e02"},{"Code":"429006","Name":"\u5929\u95e8\u5e02"},{"Code":"429021","Name":"\u795e\u519c\u67b6\u6797\u533a"}]},{"Code":"430000","Name":"\u6e56\u5357\u7701","Cities":[{"Code":"430100","Name":"\u957f\u6c99\u5e02"},{"Code":"430200","Name":"\u682a\u6d32\u5e02"},{"Code":"430300","Name":"\u6e58\u6f6d\u5e02"},{"Code":"430400","Name":"\u8861\u9633\u5e02"},{"Code":"430500","Name":"\u90b5\u9633\u5e02"},{"Code":"430600","Name":"\u5cb3\u9633\u5e02"},{"Code":"430700","Name":"\u5e38\u5fb7\u5e02"},{"Code":"430800","Name":"\u5f20\u5bb6\u754c\u5e02"},{"Code":"430900","Name":"\u76ca\u9633\u5e02"},{"Code":"431000","Name":"\u90f4\u5dde\u5e02"},{"Code":"431100","Name":"\u6c38\u5dde\u5e02"},{"Code":"431200","Name":"\u6000\u5316\u5e02"},{"Code":"431300","Name":"\u5a04\u5e95\u5e02"},{"Code":"433100","Name":"\u6e58\u897f\u571f\u5bb6\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"440000","Name":"\u5e7f\u4e1c\u7701","Cities":[{"Code":"440100","Name":"\u5e7f\u5dde\u5e02"},{"Code":"440200","Name":"\u97f6\u5173\u5e02"},{"Code":"440300","Name":"\u6df1\u5733\u5e02"},{"Code":"440400","Name":"\u73e0\u6d77\u5e02"},{"Code":"440500","Name":"\u6c55\u5934\u5e02"},{"Code":"440600","Name":"\u4f5b\u5c71\u5e02"},{"Code":"440700","Name":"\u6c5f\u95e8\u5e02"},{"Code":"440800","Name":"\u6e5b\u6c5f\u5e02"},{"Code":"440900","Name":"\u8302\u540d\u5e02"},{"Code":"441200","Name":"\u8087\u5e86\u5e02"},{"Code":"441300","Name":"\u60e0\u5dde\u5e02"},{"Code":"441400","Name":"\u6885\u5dde\u5e02"},{"Code":"441500","Name":"\u6c55\u5c3e\u5e02"},{"Code":"441600","Name":"\u6cb3\u6e90\u5e02"},{"Code":"441700","Name":"\u9633\u6c5f\u5e02"},{"Code":"441800","Name":"\u6e05\u8fdc\u5e02"},{"Code":"441900","Name":"\u4e1c\u839e\u5e02"},{"Code":"442000","Name":"\u4e2d\u5c71\u5e02"},{"Code":"445100","Name":"\u6f6e\u5dde\u5e02"},{"Code":"445200","Name":"\u63ed\u9633\u5e02"},{"Code":"445300","Name":"\u4e91\u6d6e\u5e02"}]},{"Code":"450000","Name":"\u5e7f\u897f\u58ee\u65cf\u81ea\u6cbb\u533a","Cities":[{"Code":"450100","Name":"\u5357\u5b81\u5e02"},{"Code":"450200","Name":"\u67f3\u5dde\u5e02"},{"Code":"450300","Name":"\u6842\u6797\u5e02"},{"Code":"450400","Name":"\u68a7\u5dde\u5e02"},{"Code":"450500","Name":"\u5317\u6d77\u5e02"},{"Code":"450600","Name":"\u9632\u57ce\u6e2f\u5e02"},{"Code":"450700","Name":"\u94a6\u5dde\u5e02"},{"Code":"450800","Name":"\u8d35\u6e2f\u5e02"},{"Code":"450900","Name":"\u7389\u6797\u5e02"},{"Code":"451000","Name":"\u767e\u8272\u5e02"},{"Code":"451100","Name":"\u8d3a\u5dde\u5e02"},{"Code":"451200","Name":"\u6cb3\u6c60\u5e02"},{"Code":"451300","Name":"\u6765\u5bbe\u5e02"},{"Code":"451400","Name":"\u5d07\u5de6\u5e02"}]},{"Code":"460000","Name":"\u6d77\u5357\u7701","Cities":[{"Code":"460100","Name":"\u6d77\u53e3\u5e02"},{"Code":"460200","Name":"\u4e09\u4e9a\u5e02"},{"Code":"460300","Name":"\u4e09\u6c99\u5e02"},{"Code":"469001","Name":"\u4e94\u6307\u5c71\u5e02"},{"Code":"469002","Name":"\u743c\u6d77\u5e02"},{"Code":"460400","Name":"\u510b\u5dde\u5e02"},{"Code":"469005","Name":"\u6587\u660c\u5e02"},{"Code":"469006","Name":"\u4e07\u5b81\u5e02"},{"Code":"469007","Name":"\u4e1c\u65b9\u5e02"},{"Code":"469021","Name":"\u5b9a\u5b89\u53bf"},{"Code":"469022","Name":"\u5c6f\u660c\u53bf"},{"Code":"469023","Name":"\u6f84\u8fc8\u53bf"},{"Code":"469024","Name":"\u4e34\u9ad8\u53bf"},{"Code":"469025","Name":"\u767d\u6c99\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469026","Name":"\u660c\u6c5f\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469027","Name":"\u4e50\u4e1c\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469028","Name":"\u9675\u6c34\u9ece\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469029","Name":"\u4fdd\u4ead\u9ece\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"},{"Code":"469030","Name":"\u743c\u4e2d\u9ece\u65cf\u82d7\u65cf\u81ea\u6cbb\u53bf"}]},{"Code":"500000","Name":"\u91cd\u5e86\u5e02","Cities":[{"Code":"500100","Name":"\u91cd\u5e86\u5e02"}]},{"Code":"510000","Name":"\u56db\u5ddd\u7701","Cities":[{"Code":"510100","Name":"\u6210\u90fd\u5e02"},{"Code":"510300","Name":"\u81ea\u8d21\u5e02"},{"Code":"510400","Name":"\u6500\u679d\u82b1\u5e02"},{"Code":"510500","Name":"\u6cf8\u5dde\u5e02"},{"Code":"510600","Name":"\u5fb7\u9633\u5e02"},{"Code":"510700","Name":"\u7ef5\u9633\u5e02"},{"Code":"510800","Name":"\u5e7f\u5143\u5e02"},{"Code":"510900","Name":"\u9042\u5b81\u5e02"},{"Code":"511000","Name":"\u5185\u6c5f\u5e02"},{"Code":"511100","Name":"\u4e50\u5c71\u5e02"},{"Code":"511300","Name":"\u5357\u5145\u5e02"},{"Code":"511400","Name":"\u7709\u5c71\u5e02"},{"Code":"511500","Name":"\u5b9c\u5bbe\u5e02"},{"Code":"511600","Name":"\u5e7f\u5b89\u5e02"},{"Code":"511700","Name":"\u8fbe\u5dde\u5e02"},{"Code":"511800","Name":"\u96c5\u5b89\u5e02"},{"Code":"511900","Name":"\u5df4\u4e2d\u5e02"},{"Code":"512000","Name":"\u8d44\u9633\u5e02"},{"Code":"513200","Name":"\u963f\u575d\u85cf\u65cf\u7f8c\u65cf\u81ea\u6cbb\u5dde"},{"Code":"513300","Name":"\u7518\u5b5c\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"513400","Name":"\u51c9\u5c71\u5f5d\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"520000","Name":"\u8d35\u5dde\u7701","Cities":[{"Code":"520100","Name":"\u8d35\u9633\u5e02"},{"Code":"520200","Name":"\u516d\u76d8\u6c34\u5e02"},{"Code":"520300","Name":"\u9075\u4e49\u5e02"},{"Code":"520400","Name":"\u5b89\u987a\u5e02"},{"Code":"520600","Name":"\u94dc\u4ec1\u5e02"},{"Code":"522300","Name":"\u9ed4\u897f\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"Code":"520500","Name":"\u6bd5\u8282\u5e02"},{"Code":"522600","Name":"\u9ed4\u4e1c\u5357\u82d7\u65cf\u4f97\u65cf\u81ea\u6cbb\u5dde"},{"Code":"522700","Name":"\u9ed4\u5357\u5e03\u4f9d\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"530000","Name":"\u4e91\u5357\u7701","Cities":[{"Code":"530100","Name":"\u6606\u660e\u5e02"},{"Code":"530300","Name":"\u66f2\u9756\u5e02"},{"Code":"530400","Name":"\u7389\u6eaa\u5e02"},{"Code":"530500","Name":"\u4fdd\u5c71\u5e02"},{"Code":"530600","Name":"\u662d\u901a\u5e02"},{"Code":"530700","Name":"\u4e3d\u6c5f\u5e02"},{"Code":"530800","Name":"\u666e\u6d31\u5e02"},{"Code":"530900","Name":"\u4e34\u6ca7\u5e02"},{"Code":"532300","Name":"\u695a\u96c4\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532500","Name":"\u7ea2\u6cb3\u54c8\u5c3c\u65cf\u5f5d\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532600","Name":"\u6587\u5c71\u58ee\u65cf\u82d7\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532800","Name":"\u897f\u53cc\u7248\u7eb3\u50a3\u65cf\u81ea\u6cbb\u5dde"},{"Code":"532900","Name":"\u5927\u7406\u767d\u65cf\u81ea\u6cbb\u5dde"},{"Code":"533100","Name":"\u5fb7\u5b8f\u50a3\u65cf\u666f\u9887\u65cf\u81ea\u6cbb\u5dde"},{"Code":"533300","Name":"\u6012\u6c5f\u5088\u50f3\u65cf\u81ea\u6cbb\u5dde"},{"Code":"533400","Name":"\u8fea\u5e86\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"540000","Name":"\u897f\u85cf\u81ea\u6cbb\u533a","Cities":[{"Code":"540100","Name":"\u62c9\u8428\u5e02"},{"Code":"540300","Name":"\u660c\u90fd\u5e02"},{"Code":"542200","Name":"\u5c71\u5357\u5730\u533a"},{"Code":"540200","Name":"\u65e5\u5580\u5219\u5e02"},{"Code":"542400","Name":"\u90a3\u66f2\u5730\u533a"},{"Code":"542500","Name":"\u963f\u91cc\u5730\u533a"},{"Code":"540400","Name":"\u6797\u829d\u5e02"}]},{"Code":"610000","Name":"\u9655\u897f\u7701","Cities":[{"Code":"610100","Name":"\u897f\u5b89\u5e02"},{"Code":"610200","Name":"\u94dc\u5ddd\u5e02"},{"Code":"610300","Name":"\u5b9d\u9e21\u5e02"},{"Code":"610400","Name":"\u54b8\u9633\u5e02"},{"Code":"610500","Name":"\u6e2d\u5357\u5e02"},{"Code":"610600","Name":"\u5ef6\u5b89\u5e02"},{"Code":"610700","Name":"\u6c49\u4e2d\u5e02"},{"Code":"610800","Name":"\u6986\u6797\u5e02"},{"Code":"610900","Name":"\u5b89\u5eb7\u5e02"},{"Code":"611000","Name":"\u5546\u6d1b\u5e02"}]},{"Code":"620000","Name":"\u7518\u8083\u7701","Cities":[{"Code":"620100","Name":"\u5170\u5dde\u5e02"},{"Code":"620200","Name":"\u5609\u5cea\u5173\u5e02"},{"Code":"620300","Name":"\u91d1\u660c\u5e02"},{"Code":"620400","Name":"\u767d\u94f6\u5e02"},{"Code":"620500","Name":"\u5929\u6c34\u5e02"},{"Code":"620600","Name":"\u6b66\u5a01\u5e02"},{"Code":"620700","Name":"\u5f20\u6396\u5e02"},{"Code":"620800","Name":"\u5e73\u51c9\u5e02"},{"Code":"620900","Name":"\u9152\u6cc9\u5e02"},{"Code":"621000","Name":"\u5e86\u9633\u5e02"},{"Code":"621100","Name":"\u5b9a\u897f\u5e02"},{"Code":"621200","Name":"\u9647\u5357\u5e02"},{"Code":"622900","Name":"\u4e34\u590f\u56de\u65cf\u81ea\u6cbb\u5dde"},{"Code":"623000","Name":"\u7518\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"630000","Name":"\u9752\u6d77\u7701","Cities":[{"Code":"630100","Name":"\u897f\u5b81\u5e02"},{"Code":"630200","Name":"\u6d77\u4e1c\u5e02"},{"Code":"632200","Name":"\u6d77\u5317\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632300","Name":"\u9ec4\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632500","Name":"\u6d77\u5357\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632600","Name":"\u679c\u6d1b\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632700","Name":"\u7389\u6811\u85cf\u65cf\u81ea\u6cbb\u5dde"},{"Code":"632800","Name":"\u6d77\u897f\u8499\u53e4\u65cf\u85cf\u65cf\u81ea\u6cbb\u5dde"}]},{"Code":"640000","Name":"\u5b81\u590f\u56de\u65cf\u81ea\u6cbb\u533a","Cities":[{"Code":"640100","Name":"\u94f6\u5ddd\u5e02"},{"Code":"640200","Name":"\u77f3\u5634\u5c71\u5e02"},{"Code":"640300","Name":"\u5434\u5fe0\u5e02"},{"Code":"640400","Name":"\u56fa\u539f\u5e02"},{"Code":"640500","Name":"\u4e2d\u536b\u5e02"}]},{"Code":"650000","Name":"\u65b0\u7586\u7ef4\u543e\u5c14\u81ea\u6cbb\u533a","Cities":[{"Code":"650100","Name":"\u4e4c\u9c81\u6728\u9f50\u5e02"},{"Code":"650200","Name":"\u514b\u62c9\u739b\u4f9d\u5e02"},{"Code":"650400","Name":"\u5410\u9c81\u756a\u5e02"},{"Code":"652200","Name":"\u54c8\u5bc6\u5730\u533a"},{"Code":"652300","Name":"\u660c\u5409\u56de\u65cf\u81ea\u6cbb\u5dde"},{"Code":"652700","Name":"\u535a\u5c14\u5854\u62c9\u8499\u53e4\u81ea\u6cbb\u5dde"},{"Code":"652800","Name":"\u5df4\u97f3\u90ed\u695e\u8499\u53e4\u81ea\u6cbb\u5dde"},{"Code":"652900","Name":"\u963f\u514b\u82cf\u5730\u533a"},{"Code":"653000","Name":"\u514b\u5b5c\u52d2\u82cf\u67ef\u5c14\u514b\u5b5c\u81ea\u6cbb\u5dde"},{"Code":"653100","Name":"\u5580\u4ec0\u5730\u533a"},{"Code":"653200","Name":"\u548c\u7530\u5730\u533a"},{"Code":"654000","Name":"\u4f0a\u7281\u54c8\u8428\u514b\u81ea\u6cbb\u5dde"},{"Code":"654200","Name":"\u5854\u57ce\u5730\u533a"},{"Code":"654300","Name":"\u963f\u52d2\u6cf0\u5730\u533a"},{"Code":"659001","Name":"\u77f3\u6cb3\u5b50\u5e02"},{"Code":"659002","Name":"\u963f\u62c9\u5c14\u5e02"},{"Code":"659003","Name":"\u56fe\u6728\u8212\u514b\u5e02"},{"Code":"659004","Name":"\u4e94\u5bb6\u6e20\u5e02"},{"Code":"659005","Name":"\u5317\u5c6f\u5e02"},{"Code":"659006","Name":"\u94c1\u95e8\u5173\u5e02"},{"Code":"659007","Name":"\u53cc\u6cb3\u5e02"},{"Code":"659008","Name":"\u53ef\u514b\u8fbe\u62c9\u5e02"}]},{"Code":"710000","Name":"\u53f0\u6e7e\u7701","Cities":""},{"Code":"810000","Name":"\u9999\u6e2f\u7279\u522b\u884c\u653f\u533a","Cities":[{"Code":"810001","Name":"\u4e2d\u897f\u5340"},{"Code":"810002","Name":"\u7063\u4ed4\u5340"},{"Code":"810003","Name":"\u6771\u5340"},{"Code":"810004","Name":"\u5357\u5340"},{"Code":"810005","Name":"\u6cb9\u5c16\u65fa\u5340"},{"Code":"810006","Name":"\u6df1\u6c34\u57d7\u5340"},{"Code":"810007","Name":"\u4e5d\u9f8d\u57ce\u5340"},{"Code":"810008","Name":"\u9ec3\u5927\u4ed9\u5340"},{"Code":"810009","Name":"\u89c0\u5858\u5340"},{"Code":"810010","Name":"\u8343\u7063\u5340"},{"Code":"810011","Name":"\u5c6f\u9580\u5340"},{"Code":"810012","Name":"\u5143\u6717\u5340"},{"Code":"810013","Name":"\u5317\u5340"},{"Code":"810014","Name":"\u5927\u57d4\u5340"},{"Code":"810015","Name":"\u897f\u8ca2\u5340"},{"Code":"810016","Name":"\u6c99\u7530\u5340"},{"Code":"810017","Name":"\u8475\u9752\u5340"},{"Code":"810018","Name":"\u96e2\u5cf6\u5340"}]},{"Code":"820000","Name":"\u6fb3\u95e8\u7279\u522b\u884c\u653f\u533a","Cities":[{"Code":"820001","Name":"\u82b1\u5730\u746a\u5802\u5340"},{"Code":"820002","Name":"\u82b1\u738b\u5802\u5340"},{"Code":"820003","Name":"\u671b\u5fb7\u5802\u5340"},{"Code":"820004","Name":"\u5927\u5802\u5340"},{"Code":"820005","Name":"\u98a8\u9806\u5802\u5340"},{"Code":"820006","Name":"\u5609\u6a21\u5802\u5340"},{"Code":"820007","Name":"\u8def\u6c39\u586b\u6d77\u5340"},{"Code":"820008","Name":"\u8056\u65b9\u6fdf\u5404\u5802\u5340"}]}]';
//$City_arr = json_decode($CITY, true);
$form = ActiveForm::begin([
    'id' => 'form-pro-add',
    'options' => ['class' => 'form form-horizontal'],
//    'action' => 'http://www.pp.cms/person/receive',
//    'action' => 'http://twx.pingoing.cn/ajax/CreatShopShenqing',
    'fieldConfig' => [
        'template' => " {label}\n<div class=\"formControls col-lg-5 \">{input}  {error}</div> ",
        'labelOptions' => ['class' => 'col-lg-3 control-label text-right'], // label 的样式定义
    ],
]);
?>

<input type="hidden" id="person-types" class="form-control" name="Person[type]" value="个人">

<div class="form-group field-person-cityname required">
    <label class="col-lg-3 control-label text-right" for="person-cityname">所在城市</label>
    <div class="  formControls col-lg-5">
        <select id="selProvince" onChange="getCity(this.options[this.selectedIndex].value)" class="form-control"
                name="Person[cityname]">
            <option value="">-请选择-</option>
            <?php
            foreach ($City_arr as $k => $v) {
                echo '<option value="' . $v["Name"] . '">' . $v["Name"] . '</option>';
            }
            ?>
        </select>
        <select class="form-control" id="selCity" name="Person[cityname]">
            <option value="">-请选择-</option>
        </select>


    </div>
</div>


<?php //echo $form->field($model, 'cityname')->dropDownList(ArrayHelper::map($City_arr, 'Code', 'Name')) ?>



<?= $form->field($model, 'realname')->textInput(['maxlength' => true, 'placeholder' => "请输入管理人的真实姓名",'value'=>'test999']) ?>

<?= $form->field($model, 'mobile')->textInput(['maxlength' => true, 'placeholder' => "请输入手机号码",'value'=>'13848988986']) ?>
<div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
        <p style="color:red">注：此手机号为商家登陆后台的账号，提现接收验证码的初始手机号</p>
    </div>

</div>


<?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => "请输入常用邮箱，便于审核信息及后期规则的及时送达",'value'=>'999@qq.com']) ?>

<?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'placeholder' => "请输入后台登录密码",'value'=>'111']) ?>

<?= $form->field($model, 'personid')->textInput(['maxlength' => true, 'placeholder' => "请输入管理人的证件号（身份证、护照、军官证等均可）",'value'=>'412702198904257499']) ?>

<div class="form-group">

    <div class="col-lg-offset-3 col-lg-8">
        <p style="color:red">注：请确认您的身份证号码填写无误，该身份证号必须与您上传的身份证照片一致</p>
    </div>
</div>

<?= $form->field($model, 'business')->textInput(['maxlength' => true])->dropDownList(['1' => '生鲜水果', '2' => '食品饮料', '3' => '居家生活', '4' => '母婴玩具', '5' => '美妆护肤', '6' => '服饰箱包', '7' => '运动户外', '8' => '3C家电'], ['prompt' => '-请选择-']) ?>

<h4>店铺管理人基本信息
    <small> (注：上传的相片，横图长宽像素最大为1000*700，竖图长宽像素最大为1000*1400，图片大小在5M以内)</small>
</h4>

<?php // $form->field($model, 'personpica')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'personpica')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>

<?= $form->field($model, 'personpicb')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>

<!--         class="form-control " placeholder="请选择时间"             -->


<?= $form->field($model, 'person_id_timestar')->textInput(['maxlength' => true, 'class' => "form-control ", 'placeholder' => '请选择时间-', 'id' => "datetimepicker"]) ?>

<?= $form->field($model, 'person_id_timeend')->textInput(['maxlength' => true, 'placeholder' => '请选择时间+', 'id' => "datetimepicker1"]) ?>

<?= $form->field($model, 'person_id_andheadpic')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>

<?= $form->field($model, 'person_halfbody')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>

<?= $form->field($model, 'trademark')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>

<div class=" form-group">

    <div class="col-lg-offset-3 col-lg-8">
        <p>(可选,最多不超过13张)</p>
    </div>

</div>
<?= $form->field($model, 'brand_certificate')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>
<div class=" form-group">

    <div class="col-lg-offset-3 col-lg-8">
        <p>(可选,最多不超过13张)</p>
    </div>

</div>

<?= $form->field($model, 'qc_report')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>
<div class=" form-group">

    <div class="col-lg-offset-3 col-lg-8">
        <p>(可选,最多不超过13张)</p>
    </div>

</div>


<?php // echo $form->field($model, 'qc_other')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload',[]) ?>

<?php //  echo $form->field($model, 'status')->textInput() ?>
<?php //  echo  $form->field($model, 'created_at')->textInput() ?>

<?php //  echo  $form->field($model, 'updated_at')->textInput() ?>




<?= $form->field($model, 'shopname')->textInput(['maxlength' => true, 'placeholder' => "请输入店铺名称",'value'=>'shopname99']) ?>
<div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
        <p style="color:red">注：个人店铺名称禁止出现旗舰、专卖、专营、官方、直营、官方认证、官方授权、商城、商店、企业、特卖、折扣等关键词，否则入驻会被驳回</p>
    </div>

</div>

<?= $form->field($model, 'shoplogo')->textInput(['maxlength' => true])->widget('common\widgets\file_upload\FileUpload', []) ?>
<div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
        <p style="color:red">注：正方形图片（尺寸为300*300），大小不超过32k。请务必使用自己的店铺logo。<br>出现以下几类的logo，审核时将会被驳回：</p>
        <p style="color: blue; line-height: 2;">1.内容上直接使用实物照片。2.网上下载未经处理的图片。3.出现广告语。<br>4.使用未经授权的他人品牌。5.出现第三方电商平台信息。6.使用拼一下logo。
        </p>
    </div>

</div>
<?= $form->field($model, 'address')->textInput(['maxlength' => true, 'placeholder' => " 地址",'value'=>'dzzhifubaoaccount001']) ?>
<?= $form->field($model, 'shopinfo')->textInput(['maxlength' => true])->textarea(['rows' => '6', 'placeholder' => "介绍此店铺专营类目及特色"]) ?>


<div class="form-group">
    <div class="col-lg-offset-3 col-lg-8">
        <p style="color:red">(1)个人店铺不能出现厂家直营、直销、批发零售、涉及品牌、个人联系方式或者第三方平台的信息<br>(2)企业店铺不能出现批发零售、个人联系方式或者第三方平台的信息<br>(3)详情不超过200字
        </p>
    </div>
</div>
<?= $form->field($model, 'zhifubaoaccount')->textInput(['maxlength' => true,'value'=>'zhifubaoaccount001']) ?>
<?= $form->field($model, 'invitation')->textInput(['maxlength' => true,'value'=>'yaoqingma001']) ?>

<div class="form-group">
            <?= $form->field($model, 'alreadyRed')->checkbox(['id' => 'alreadyRedBtn'])->label('', ['style' => 'color:red']) ?>
            <?= Html::a('《拼一下商城入驻协议书》', ['page/protocol'], ['id' => 'alreadyRedA']) ?>
</div>


<div class="form-group row clearfix text-center">
    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', '下一步') : Yii::t('app', '更新'), ['disabled' => 'false', 'id' => 'nextPerson', 'class' => $model->isNewRecord ? 'btn   pdd-danger  submit-btn' : 'btn   pdd-danger  submit-btn']) ?>
</div>

<?php ActiveForm::end(); ?>
<script>

    /**
     * 下一步验证
     * @type {Element}
     */
    window.onload = function () {
        var alreadyRedBtn = document.getElementById('alreadyRedBtn');
        var nextPerson = document.getElementById('nextPerson');
        alreadyRedBtn.onclick = function () {
            var selCity = $('#selCity').val();
            if (selCity == '') {
                alert('请填写所在城市');
                nextPerson.disabled = false;
            }
            if (alreadyRedBtn.checked) {
                nextPerson.disabled = false;
            } else {
                nextPerson.disabled = true;
            }
        }
    }
</script>
<style>
    @media (min-width: 1200px) {
        #alreadyRedA {
            float: left;
            margin-left: 451px;
            margin-top: -58px;
        }
    }
    @media (max-width: 1200px) {
        #alreadyRedA {
            float: left;
            margin-top: -20px;
        }
    }

    #alreadyRedA {

        color: red;
    }
</style>

