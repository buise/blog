<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/15
 * Time: 10:30
 */
class myself extends Main {
    public function upload(){
        $obj=new upload();
        $obj->alls();
    }

    public function change(){
        $name=$this->session->get('pname');
        $img=$_REQUEST['img'];
        $pass=$_REQUEST['pass'];
        $nick=$_REQUEST['nick'];
        $db=new Db('person');
        $result=$db->update("pimg='{$img}',ppass='{$pass}',pnick='{$nick}' where pname='{$name}'");
        if($result){
            e('ok');
        }else{
            e('error');
        }
    }
}