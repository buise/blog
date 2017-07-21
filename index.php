<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/22
 * Time: 14:39
 */
define('MARK',true);
header("content-type:text/html;charset=utf-8");

//文件根目录
define("ROOT_PATH",substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],'/')+1));

//lib文件目录
define("LIBS_PATH",ROOT_PATH.'libs/');

//模块目录
define("MODULE_PATH",ROOT_PATH.'module/');

//服务器目录
define("HTTP_PATH",$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER['SCRIPT_NAME'],'/')+1));

//静态目录
define("STATIC_PATH",HTTP_PATH."static/");
//css,js,img文件目录
define("CSS_PATH",STATIC_PATH."css/");
define("JS_PATH",STATIC_PATH."js/");
define("IMG_PATH",STATIC_PATH."img/");

$prot=substr($_SERVER["SERVER_PROTOCOL"],0,strrpos($_SERVER["SERVER_PROTOCOL"],"/"));
define("SELF_PATH",$prot."://".$_SERVER["HTTP_HOST"].$_SERVER["SCRIPT_NAME"]);

include_once LIBS_PATH."functions.php";

include_once LIBS_PATH."db.class.php";

include_once LIBS_PATH."smarty/Smarty.class.php";

include_once LIBS_PATH."main.class.php";

include_once LIBS_PATH."route.class.php";

include_once LIBS_PATH."session.class.php";

include_once LIBS_PATH."upload.class.php";

include_once LIBS_PATH."sort.class.php";

include_once LIBS_PATH."page.class.php";

$obj=new Route();
$obj->info();