/**
 * Created by Administrator on 2017/5/10.
 */
$(document).ready(function () {
//        设置时间
    function gs(a) {
        if(a<10){
            return a="0"+a
        }else{
            return a
        }
    }
    let time=new Date();
    let y=time.getFullYear();
    let m=gs(time.getMonth()+1);
    let d=gs(time.getDate());
    let h=gs(time.getHours());
    let min=gs(time.getMinutes());
    let s=gs(time.getSeconds());
    $('.time').html(`${y}-${m}-${d} ${h}:${min}:${s}`)
    let t=setInterval(function () {
        time=new Date();
        y=time.getFullYear();
        m=gs(time.getMonth()+1);
        d=gs(time.getDate());
        h=gs(time.getHours());
        min=gs(time.getMinutes());
        s=gs(time.getSeconds());
        $('.time').html(`${y}-${m}-${d} ${h}:${min}:${s}`)
    },1000)
})