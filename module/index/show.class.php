<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/18
 * Time: 10:38
 */
class show extends Main {
    public function init(){
        $wid=$_REQUEST['id'];
        $db=new db('test.write');
        $result=$db->where("wid=$wid")->select();
        $this->smarty->assign('article',$result);
        $this->smarty->assign('name',$this->session->get('pname'));
        $this->smarty->assign('header','index/header.html');
        $this->smarty->display("index/show.html");
    }

    public function click(){
        $wid=$_REQUEST['id'];
        $db=new db('test.write');
        $sql = "update test.write set wclick=wclick+1 where wid={$wid}";
        $result=$db->db->query($sql);
        if($result){
            e("ok");
        }else{
            e("error");
        }
    }

    public function message(){
        $wid=$_REQUEST['id'];
        $db=new Db("message");
        $sql="select message.*,person.pimg from message,person WHERE message.mname=person.pname && message.mart=$wid";
        $db->db->query("set names utf8");
        $result=$db->db->query($sql);
        $array=array();
        $brray=array();
        while ($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        foreach ($array as $item=>$value){
            if ($value['mtype']==0){
                $brray[]=$value;
            }
        }
        foreach ($brray as $k => $v) {
            foreach ($array as $v1) {
                if(!isset($brray[$k]["son"])){
                    $array[$k]["son"]=array();
                }
                if ($v1["mtype"] != 0) {
                    if ($v1["mtype"] == $v["mid"]) {
                        $brray[$k]["son"][] = $v1;

                    }
                }
            }
        }
        e(json_encode($brray));
    }

    public function wenmess(){
        $pname=$this->session->get('pname');
        if ($pname){
            e('yes');
        }else{
            e('no');
        }
    }

    public function addMessage(){
        $name=$this->session->get('pname');
        if(!$name){
            exit();
        }
        $wid=$_REQUEST['id'];
        $mcon=$_REQUEST['con'];
        $type=$_REQUEST['type'];
        $db=new Db("message");
        $result=$db->insert("mname='{$name}',mcon='{$mcon}',mtype={$type},mart={$wid}");
        e($result);
    }
}