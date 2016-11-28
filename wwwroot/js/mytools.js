/**
 * Created by ipuxin on 2016/11/14.
 */
/**
 * 验证码刷新
 */
$('.change').click(function () {
    $('.captcha').click();
});
/**
 * ajax,验证验证码是否正确，如果正确，发送按钮可点
 */
// $('.db').click(function () {
//     alert('ok');
//     var url = '/page/hasshop';
//     var data = {'vCode': parseInt($('#verifyCode').val())};
//     var success = function (response) {
//         if (response.errno == 0) {
//             alert('恭喜!添加成功!');
//         } else {
//             alert('下次恭喜!没有加成功!');
//         }
//     }
//     $.get(url, data, success, 'json');
// })
/**
 * 模态框调整
 */
$('#myModal-register').modal({
    show: true,
    backdrop: 'static',
    keyboard: false,
});