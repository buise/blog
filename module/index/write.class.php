<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/15
 * Time: 11:40
 */
class write extends Main {
    public function init(){
        $pname=$this->session->get('pname');
        if(!$pname){
            e("非法入侵");
            exit();
        }
        $db=new Db('category');
        $sort=new sort();
        $sort->tree($db,0);
        $this->smarty->assign('name',$pname);
        $this->smarty->assign('str',$sort->str);
        $this->smarty->assign('header','index/header.html');
        $this->smarty->display('index/write.html');
    }

    public function wen(){
        $pname=$this->session->get('pname');
        if ($pname){
            e('yes');
        }else{
            e('no');
        }
    }

    public function add(){
        $wauthor=$this->session->get('pname');
        $wtitle=$_POST['wtitle'];
        $cid=$_POST['cid'];
        $wword=$_POST['wword'];
        $wjj=$_POST['wjj'];
        $wcon=$_POST['wcon'];
        $wimg=$_POST['urlimg'];


        $wdb=new Db("test.write");
        $sql="insert into test.write (wtitle,wauthor,cid,wword,wjj,wcon,wimg) VALUES ('$wtitle','$wauthor','$cid','$wword','$wjj','$wcon','$wimg')";
        $wresult=$wdb->db->query($sql);
        if($wresult){
            $this->jump("文章已提交，等待审核","index.php?f=write");
        }else{
            $this->jump("发布失败","index.php?f=write");
        }
    }
}