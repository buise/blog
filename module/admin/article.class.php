<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 14:13
 */
class article extends Main {
    public function lookart(){

        $db=new Db('test.write');
        $page=new page();

//        全部
        $result=$db->select();
        $num=count($result);
        $page->pageNum=3;
        $page->total=$num;
        $str=$page->show();
        $limit=$page->limit;
        $this->smarty->assign("pages",$str);
        $sql="select * from test.write ORDER BY wstatus ASC $limit";
        $results=$db->db->query($sql);

        $this->smarty->assign("article",$results);
        $this->smarty->display("admin/lookArt.html");
    }

    public function status(){
        $wid=$_REQUEST['wid'];
        $wstatus=$_REQUEST['status'];
        $db=new db('test.write');
        $result=$db->update("wstatus='{$wstatus}' where wid=$wid");
    }
}