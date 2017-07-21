<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 12:14
 */
class person extends Main {
    public function lookPerson(){
        $db=new Db("person");
        $result=$db->select();
        $this->smarty->assign("person",$result);
        $this->smarty->display("admin/lookPer.html");
    }
}