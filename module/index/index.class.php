<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 17:27
 */
if (!defined('MARK')){
    header("content-type:text/html;charset=utf-8");
    echo ("非法侵入");
    exit();
}
class Index extends Main {
    function init(){
        $db=new db('test.write');
        $result=$db->order('wclick desc')->select();

        $cate=new db('category');
        $result1=$cate->select();

        $dbs=new mysqli('localhost','root','','test','3306');
        $sql="select test.write.*,person.pimg from test.write inner join person WHERE test.write.wauthor=person.pname";
        $dbs->query("set names utf8");
        $result2=$dbs->query($sql);

        $person=new db('person');
        $result3=$person->select();

        $this->smarty->assign('name',$this->session->get('pname'));
        $this->smarty->assign('header','index/header.html');
        $this->smarty->assign('all',$result);
        $this->smarty->assign('category',$result1);
        $this->smarty->assign('article',$result2);
        $this->smarty->assign('author',$result3);
        $this->smarty->display("index/index.html");
    }

    public function myself(){
        $name=$this->session->get('pname');
        $db=new db('person');
        $result=$db->where("pname='{$name}'")->select();
        $this->smarty->assign('name',$name);
        $this->smarty->assign('person',$result);
        $this->smarty->assign('header','index/header.html');
        $this->smarty->display("index/myself.html");
    }
}
