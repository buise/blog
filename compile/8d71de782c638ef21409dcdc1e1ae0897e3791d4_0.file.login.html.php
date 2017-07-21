<?php
/* Smarty version 3.1.30, created on 2017-06-28 11:59:08
  from "F:\ST\wamp\www\MVC\template\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59537deccb0466_57103267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d71de782c638ef21409dcdc1e1ae0897e3791d4' => 
    array (
      0 => 'F:\\ST\\wamp\\www\\MVC\\template\\login.html',
      1 => 1498643948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59537deccb0466_57103267 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
login.css">
<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>-->
<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
bootstrap.min.js"><?php echo '</script'; ?>
>-->
<body>
<div class="container">
    <div class="row">
        <div class="lefts col-xs-offset-1 col-xs-10 hidden-sm hidden-md hidden-lg">
            <span>博客后台管理入口</span>
        </div>
        <div class="left col-sm-offset-1 col-sm-5 hidden-xs">
            <span>博客后台管理入口</span>
            <img src="<?php echo IMG_PATH;?>
right.jpg" alt="">
        </div>
        <div class="right col-sm-5 col-sm-offset-0 col-xs-offset-1 col-xs-10">
            <form action="index.php?d=admin&f=login&a=check" method="post">
                <div>
                    <input type="text" name="name" placeholder="用户名" autocomplete="off">
                </div>
                <div>
                    <input type="password" name="pass" placeholder="密码" autocomplete="off">
                </div>
                <div>
                    <input type="text" name="code" placeholder="验证码" autocomplete="off">
                    <img src="index.php?d=admin&f=login&a=png" alt="" onclick="this.src='index.php?d=admin&f=login&a=png&i='+Math.random()" style="height:40px;margin-left:10px;">
                </div>
                <input type="submit">
            </form>
        </div>
    </div>
</div>
</body>
</html><?php }
}
