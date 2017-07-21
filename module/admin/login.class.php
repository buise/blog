<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 9:34
 */
class login extends Main {
    public function init(){
        if ($this->session->get('name')){
            $this->jump('已登录','index.php?d=admin&f=login&a=main');
            exit;
        }
        $this->smarty->display('admin/login.html');
    }
    public function png(){
        include_once LIBS_PATH."png.class.php";
        $png=new png();
        $code=$png->yzm;
        $this->session->set('code',$code);
    }
    public function check(){
        if ($this->session->get('name')){
            $this->jump('已登录','index.php?d=admin&f=login&a=main');
            exit;
        }
        $name=$_REQUEST['name'];
        $pass=$_REQUEST['pass'];
        $code=strtolower($_REQUEST['code']);
        $yzm=strtolower($this->session->get('code'));
        if($code!=$yzm){
            $this->jump('验证码有误','index.php?d=admin&f=login');
            exit();
        }
        $db=new db('user');
        $result=$db->where("name='{$name}'")->select();
        if(!$result){
            $this->jump('账号不存在','index.php?d=admin&f=login');
            exit();
        }
        if($result[0]['pass']==$pass){
            $this->session->set('name',$name);
            $this->jump('登录成功','index.php?d=admin&f=login&a=main');
            exit();
        }else{
            $this->jump('密码错误','index.php?d=admin&f=login');
        }
    }

    public function out(){
        if(!$this->session->get('name')){
            $this->jump('还没登录，无需退出','index.php?d=admin&f=login');
            exit();
        }
        date_default_timezone_set('Asia/shanghai');
        $time=date("Y-m-d H:i:s",time());
        $name=$this->session->clear();
        $db=new db('user');
        $db->update("endtime='{$time}' where name='{$name}'");
        $this->session->clear();
        $this->jump('退出成功','index.php?d=admin&f=login');
    }

    public function main(){
        if(!$this->session->get('name')){
            $this->jump('请先登录','index.php?d=admin&f=login');
            exit();
        }
        $name=$this->session->get('name');
        $this->smarty->assign('name',$name);
        $this->smarty->display('admin/main.html');
    }

    public function face(){
        if(!$this->session->get('name')){
            $this->jump('请先登录','index.php?d=admin&f=login');
            exit();
        }
        $this->smarty->display('admin/face.html');
    }
}