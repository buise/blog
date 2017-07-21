<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/11
 * Time: 15:08
 */
class upload{
    public $type="image/jpeg,image/jpg,image/png,image/git";
    public $size;
    public $root="./upload";
    public $fullpath;
    public function __construct(){
        $this->size=20*1024*1024;
    }

//    接受数据
    private function accept($aa='file'){
        $this->data=$_FILES[$aa];
    }
//    检查数据
    private function check(){
        if (is_uploaded_file($this->data["tmp_name"])){
            if (strrchr($this->type,$this->data["type"])&&$this->data["size"]<$this->size){
                return true;
            }
        }
        return false;
    }
//    创建路径
    private function createPath(){
        if(!is_dir($this->root)){
            mkdir($this->root);
        }
        $path=$this->root."/".date("Y-m-d");
        if(!is_dir($path)){
            mkdir($path);
        }
        $name=time().$this->data["name"];
        $this->fullpath=$path."/".$name;
    }
//    移动文件
    private function move(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
        echo $this->fullpath;
    }
//    调用函数
    public function alls(){
        $this->accept();
        if ($this->check()){
            $this->createPath();
            $this->move();
        };
    }
}