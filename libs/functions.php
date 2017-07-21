<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 14:41
 */
function e($aa){
    if(is_array($aa)){
        var_dump($aa);
    }elseif (is_string($aa)){
        echo $aa;
    }
}