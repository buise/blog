<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/27
 * Time: 17:44
 */
class session{
    public function session(){
        session_start();
    }

    public function set($key,$val){
        $_SESSION[$key]=$val;
    }

    public function get($key){
        if (isset($_SESSION[$key])){
            return $_SESSION[$key];
        }else{
            return false;
        }
    }

    public function del($key){
        unset($_SESSION[$key]);
    }

    public function clear(){
        foreach($_SESSION as $key=>$val){
            unset($_SESSION[$key]);
        }
    }
}