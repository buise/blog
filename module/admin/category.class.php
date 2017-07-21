<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 10:33
 */
class category extends Main {
    public function add(){
        $db=new Db('category');
        $sort=new sort();
        $sort->tree($db,0);
        $this->smarty->assign("str",$sort->str);
        $this->smarty->display("admin/addCat.html");
    }

    public function addCat(){
        $cname=$_POST['cname'];
        $pid=$_POST['pid'];
        $db=new Db('category');
        $result=$db->insert("pid=$pid,cname='{$cname}'");
        if($result){
            $this->jump("添加成功",'index.php?d=admin&f=category&a=add');
        }else{
            $this->jump("添加失败",'index.php?d=admin&f=category&a=add');
        }
    }

    public function lookCat(){
        $db=new Db('category');
        $sort=new sort();
        $sort->table($db,0);
        $this->smarty->assign("str",$sort->str);
        $this->smarty->display("admin/lookCat.html");
    }

    public function delCat(){
        $cid=$_REQUEST['id'];
        $db=new Db('category');
        $result=$db->where("cid=$cid")->delete();
        if($result){
            $this->jump("删除成功",'index.php?d=admin&f=category&a=lookCat');
        }else{
            $this->jump("删除失败",'index.php?d=admin&f=category&a=lookCat');
        }
    }
}