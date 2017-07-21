<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 10:04
 */
class Main{
    function Main(){
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir(ROOT_PATH.'template');
        $this->smarty->setCompileDir(ROOT_PATH.'compile');
        $this->session=new session();
    }

    function jump($mess,$url){
        echo "<script>alert('{$mess}');location.href='{$url}'</script>";
    }
}