/**
 * Created by Administrator on 2017/7/1.
 */
$(document).ready(function () {


    $('.login-d').click(function () {
        $('.hid').css('display','block');
        $('label').css('display','none');
    })

    $('body').delegate('.hid','click',function (event) {
        let obj=event.target;
        if(obj.className=='hid'){
            $('.hid').css('display','none');
        }
    })

    $('.j-res').click(function () {
        $('.hid').css('display','none');
        $('.den').css('display','block');
    })

    $('.login-z').click(function () {
        $('.den').css('display','block');
        $('label').css('display','none');
    })

    $('body').delegate('.den','click',function (event) {
        let obj=event.target;
        if(obj.className=='den'){
            $('.den').css('display','none');
        }
    })

    $('.j-login').click(function () {
        $('.hid').css('display','block');
        $('.den').css('display','none');
    })

    // 注册
    $('#huo').click(function () {
        var tel=$('input[name=tel]').val();
        $.ajax({
            url:"index.php?f=res&a=tel",
            type:"post",
            data:{
                to:tel,
            },
            success:function (e) {
                alert(e);
            }
        })
    })

    $('.den .submit').click(function () {
        let rename=$('input[name=rename]').val();
        let repass=$('input[name=repass]').val();
        let repass1=$('input[name=repass2]').val();
        let retel=$('input[name=tel]').val();
        let recode=$('input[name=recode]').val();
        if(rename&&repass&&repass1&&recode){
            if(repass==repass1){
                $.ajax({
                    url:'index.php?a=admin&f=res&a=add',
                    type:'post',
                    data:{
                        name:rename,
                        pass:repass,
                        code:recode,
                        tel:retel,
                    },
                    success:function (e) {
                        alert(e);
                    }
                })
            }else{
                alert('两次输入的密码不同')
            }
        }else{
            alert('请认真填写个人信息')
        }

    })

    $('.hid .submit').click(function () {
        let name=$('input[name=name]').val();
        let pass=$('input[name=pass]').val();
        let code=$('input[name=code]').val();
        if(name&&pass&&code){
            $.ajax({
                url:'index.php?a=admin&f=res&a=login',
                type:'post',
                data:{
                    name:name,
                    pass:pass,
                    code:code,
                },
                success:function (e) {
                    if(e.indexOf("ok")>-1){
                        location.href=e.substr(2);
                    }else{
                        alert(e);
                    }
                }
            })
        }else{
            alert('请认真输入信息')
        }
    })

    $('.out').click(function () {
        $.ajax({
            url:"index.php?m=index&f=res&a=out",
            type:"post",
            success:function(e){
                if(e=="ok"){
                    location.href="index.php";
                }
            }
        })
    })

    $('.write').click(function () {
        $.ajax({
            url:"index.php?f=write&a=wen",
            success:function (text) {
                if(text=='yes'){
                    location.href="index.php?f=write";
                }else{
                    $('.hid').css('display','block');
            }
            }
        })
    })
})