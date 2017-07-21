/**
 * Created by Administrator on 2017/7/17.
 */

window.onload=function () {
    var ue = UE.getEditor('editor');
    let imgObj=document.querySelector(".urlimg");
    let obj=new Upload();
    obj.createView({par:document.querySelector(".boximg")});
    obj.uping("index.php?m=index&f=myself&a=upload",function(url){
        imgObj.value=url;
    });
}