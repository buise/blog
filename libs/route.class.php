<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 17:04
 */
class Route{
    private static $d;
    private static $f;
    private static $a;

    public function info(){
        $this->getInfo();
    }

    public function getInfo(){
        self::$d=isset($_REQUEST['d'])&&!empty($_REQUEST['d'])?$_REQUEST['d']:'index';
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:'index';
        self::$a=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:'init';
        $this->getDir();
    }

    public function getDir(){
        $d=MODULE_PATH.self::$d;
        if(is_dir($d)){
            $f=$d."/".self::$f.".class.php";
            if(is_file($f)){
                include_once $f;
                if(class_exists(self::$f)){
                    $obj1=new self::$f();
                    if (method_exists($obj1,self::$a)){
                        $a=self::$a;
                        $obj1->$a();
                    }else{
                        e(self::$a."方法不存在");
                    }
                }else{
                    e(self::$f."类不存在");
                }
            }else{
                e($f."文件不存在");
            }
        }else{
            e($d."文件夹不存在");
        }
    }
}