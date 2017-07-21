<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/29
 * Time: 17:55
 */
class role extends Main {
    public function add(){
        $this->smarty->display('admin/addRole.html');
    }

    public function addRole(){
        $rname=$_POST['rname'];
        $right=implode('-',$_POST['right']);
        $db=new Db('role');
        $result=$db->insert("rname='{$rname}',power='{$right}'");
        if($result){
            $this->jump('添加角色成功','index.php?d=admin&f=role&a=add');
        }
    }

    public function lookRole(){
        $db=new Db('role');
        $result=$db->select();
        $this->smarty->assign('roles',$result);
        $this->smarty->display('admin/lookRole.html');
    }
}