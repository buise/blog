/**
 * Created by Administrator on 2017/7/17.
 */
$(document).ready(function () {
    $('.look').click(function () {
        $(this).next().css("display","block");
    })
    $('.tg').click(function () {
        $(this).siblings('.gb').attr('value','1');
    })
    $('.jy').click(function () {
        $(this).siblings('.gb').attr('value','2');
    })
    $('.gb').click(function () {
        var aa=$(this).attr('value');
        var wid=$(this).attr('id');
        $.ajax({
            url:'index.php?d=admin&f=article&a=status',
            type:'post',
            data:{
                wid:wid,
                status:aa
            },
            success:function () {
                $('.hidden').css('display','none');
                console.log($("#aa"+wid+" .status"));
                if(aa==0){
                    $("#aa"+wid+" .status").css('background','#e4e4e4').html("审核中")
                }
                if(aa==1){
                    $("#aa"+wid+" .status").css('background','green').html("已通过")
                }
                if(aa==2){
                    $("#aa"+wid+" .status").css('background','red').html("未通过")
                }
            }
        })
    })
})