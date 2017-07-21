/**
 * Created by Administrator on 2017/7/18.
 */
window.onload=function () {
    var id=$('.artbox').attr("id");
    $.ajax({
        url:"index.php?f=show&a=click",
        type:"post",
        data:{
            id:id,
        },
        success:function (text) {
            console.log(text);
        }
    })

    // 点击回复
    $(".message").delegate(".hfbut","click",function(){
        $(this).parents(".history").find(".replay").toggle();
    })


    // 判断登陆
    $.ajax({
        url:"index.php?f=show&a=wenmess",
        success:function (text) {
            if(text=='no'){
                $('#yes').css('display','none')
            }else {
                $('#no').css('display','none')
            }
        }
    })

    $('#no span').click(function () {
        console.log($('.hid'))
        $('.hid').css('display','block');
    })

    // 留言功能
    // angular.module('message',[])
    //     .controller("ctrl",function ($scope,$http) {
    //         var id=document.querySelector('.artbox').id;
    //         console.log(id);
            // $http({
            //     method: 'get',
            //     url: 'index.php?f=show&a=message&',
            // }).then(function successCallback(e) {
            //     console.log(e.data);
            // }, function errorCallback(e) {
            //     // 请求失败执行代码
            // });
        // })
}