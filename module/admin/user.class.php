<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/28
 * Time: 22:00
 */
class user extends Main {
    public function user(){
        parent::__construct();
        if(!$this->session->get('name')){
            $this->jump('请先登录','index.php?d=admin&f=login');
            exit();
        }
    }

    public function add(){
        $db=new Db('role');
        $result=$db->select();
        $this->smarty->assign('role',$result);
        $this->smarty->display('admin/addUser.html');
    }

    public function addUser(){
        $uname=$_POST['uname'];
        $upass=$_POST['upass'];
        $role=explode('>',$_POST['role'])[1];
        $power=explode('>',$_POST['role'])[0];
        $db=new Db('user');
        $result=$db->insert("name='{$uname}',pass='{$upass}',role='{$role}',power='{$power}'");
        if($result){
            $this->jump('添加用户成功','index.php?d=admin&f=user&a=add');
        }
    }

    public function lookUser(){
        $db=new Db('user');
        $result=$db->select();
        $this->smarty->assign('users',$result);
        $this->smarty->display('admin/lookUser.html');
    }

    public function del(){
        $loginname=$this->session->get('name');
        $name=$_GET['name'];
        $db=new Db('user');
        $result=$db->field("power")->where("name='$loginname'")->select();
        $str=$result[0]['power'];
        if(in_array(3,explode("-",$str))){
            if($name==$this->session->get('name')){
                $this->jump('不能删除自己','index.php?d=admin&f=user&a=lookUser');
                exit();
            }
            $db1=new Db('user');
            $result1=$db1->delete("name={$name}");
            if($result1){
                $this->jump('删除用户成功','index.php?d=admin&f=user&a=lookUser');
            }
        }else{
            $this->jump('你没有权限','index.php?d=admin&f=user&a=lookUser');
            exit();
        }
    }

    public function change(){
        $loginname=$this->session->get('name');
        $name=$_GET['name'];
        $db=new Db('user');
        $result=$db->field("power")->where("name='$loginname'")->select();
        $str=$result[0]['power'];
        if(in_array(3,explode("-",$str))){
            $db1=new Db('user');
            $result1=$db1->where("name='$name'")->select();
            $this->smarty->assign('user',$result1);
            $this->smarty->display('admin/changeUser.html');
        }else{
            $this->jump('你没有权限','index.php?d=admin&f=user&a=lookUser');
            exit();
        }
    }
}