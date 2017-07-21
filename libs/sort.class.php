<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/5/11
 * Time: 15:23
 */
class sort{
    public function __construct(){
        $this->str="";
    }
    public function tree($db,$pid,$n=0,$cur=0){
        $re=$db->where("pid='{$pid}'")->select();
        foreach($re as $item=>$value){
            $string=str_repeat('-',$n);
            if($cur==$value['cid']){
                $this->str.="
            <option selected value={$value['cname']}>$string{$value['cname']}</option>
            ";
            }else{
                $this->str.="
            <option value={$value['cname']}>$string{$value['cname']}</option>
            ";
            }
            $this->tree($db,$value['cid'],$n+2,$cur);
        }
    }
    public function table($db,$pid,$n=0){
        $re=$db->where("pid='{$pid}'")->select();
        foreach($re as $item=>$value){
            $string=str_repeat('-',$n);
            $this->str.="
            <tr>
            <td>{$value['cid']}</td>
            <td>$string{$value['cname']}</td>
            <td>{$value['pid']}</td>
            <td>
            <a href='index.php?d=admin&f=category&a=delCat&id={$value["cid"]}'>删除</a>
            <a href='index.php?d=admin&f=category&a=chaCat&id={$value["cid"]}'>编辑</a>
</td>
</tr>
            ";
            $this->table($db,$value['cid'],$n+2);
        }
    }
}