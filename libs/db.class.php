<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/23
 * Time: 8:44
 */
if (!defined('MARK')){
    header("content-type:text/html;charset=utf-8");
    echo ("非法侵入");
    exit();
}
class Db{
    private $host; //连接的服务器名
    private $user; //连接的用户名
    private $pass; //连接的密码
    private $database; //连接的数据库名
    private $port; //连接的端口号
    public $db;
    public function db($table){
        $this->table=$table;
        $config=include ROOT_PATH."config.php";
        $this->host=$config['database']['host'];
        $this->user=$config['database']['user'];
        $this->pass=$config['database']['pass'];
        $this->database=$config['database']['database'];
        $this->port=$config['database']['port'];
        $this->db=new mysqli($this->host, $this->user,$this->pass,$this->database,$this->port);
        if(!$this->db){
            echo mysqli_connect_error();
            exit();
        };
        $this->db->query('set names utf8');
        $this->opts['fie']="*";
        $this->opts['where']=$this->opts['order']=$this->opts['limit']='';
    }


//    查询
    public function select(){
        $sql="select ".$this->opts['fie']." from ".$this->table." ".$this->opts['where']." ".$this->opts['order']." ".$this->opts['limit'];
        $result=$this->db->query($sql);
        $array=array();
        while ($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }

//    删除
    public function delete($parame=""){
        if(!empty($parame)){
            $this->opts['where']=" WHERE ".$parame;
        }
        $sql="delete from ".$this->table.$this->opts['where'];
        return $result=$this->db->query($sql);
    }
//    添加
    public function insert($parame=""){
        if(!empty($parame)){
            $arr=explode(',',$parame);
            $keys="";
            $val="";
            foreach ($arr as $v){
                $brr=explode('=',$v);
                $keys.=$brr[0].',';
                $val.=$brr[1].',';
            }
            $keys=substr($keys,0,-1);
            $val=substr($val,0,-1);
            $this->opts['fie']=$keys;
            $this->opts['value']=' VALUES ('.$val.')';
        }
        $sql="insert into ".$this->table." (".$this->opts['fie'].")".$this->opts['value'];
        return $result=$this->db->query($sql);
    }
//    修改
    public function update($parame=""){
        $par=strtolower($parame);
        $index=strrpos($par,'where');
        if($index>0){
            $this->opts['fie']=substr($par,0,$index);
            $this->opts['where']=substr($par,$index);
        }elseif ($index===0){
            $this->opts['where']=substr($par,0);
        }
        $sql="update ".$this->table." set ".$this->opts['fie']." ".$this->opts['where'];
        return $result=$this->db->query($sql);
    }

//    设置字段
    public function field($parame="*"){
        $this->opts['fie']=$parame;
        return $this;
    }
//    设置条件
    public function where($parame){
        $this->opts['where']=' WHERE '.$parame;
        return $this;
    }
//    设置排序规则
    public function order($parame){
        $this->opts['order']=' ORDER by '.$parame;
        return $this;
    }
//    设置限制结果
    public function limit($parame){
        $this->opts['limit']=' LIMIT '.$parame;
        return $this;
    }
//    设置字段值
    public function value($parame){
        $this->opts['value']=' VALUES ('.$parame.')';
        return $this;
    }
}