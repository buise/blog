/**
 * Created by Administrator on 2017/7/14.
 */
$(function () {
    let imgObj=document.querySelector(".urlimg")
    let obj=new Upload();
    obj.createView({par:document.querySelector(".boximg")});
    obj.uping("index.php?m=index&f=myself&a=upload",function(url){
        imgObj.value=url;
    });

    $('.yes').click(function () {
        let img=$('input[name=urlimg]').val()?$('input[name=urlimg]').val():$('.img').attr('src');
        let nick=$('input[name=nick]').val();
        let pass=$('input[name=pass2]').val();
        $.ajax({
            url:'index.php?f=myself&a=change',
            type:'post',
            data:{
                img:img,
                nick:nick,
                pass:pass
            },
            success:function (text) {
                alert(text);
                $('.img').attr('src',img);
            }
        })
    })
})
