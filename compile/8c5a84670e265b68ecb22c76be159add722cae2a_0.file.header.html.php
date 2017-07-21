<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:57:38
  from "E:\wamp\www\MVC\template\index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596992b2508d79_71399318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5a84670e265b68ecb22c76be159add722cae2a' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\header.html',
      1 => 1500091057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596992b2508d79_71399318 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博客家园</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
header.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
header.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
validate.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container-fluid box">
    <div class="row boxs">
        <div class="col-sm-6 left">
            <a href="index.php" class="logo">
                <img src="<?php echo IMG_PATH;?>
logo.jpg" alt="">
                <span>博客天地</span>
            </a>
        </div>
        <div class="col-sm-offset-3 col-sm-3 right">
            <div class="write">
                <span>写文章</span>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['name']->value) {?>
            <div class="login">
                <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

                <span>|</span>
                <a href="index.php?a=myself">查看个人资料</a>
                <span>|</span>
                <a class="out">注销</a>
            </div>
            <?php } else { ?>
            <div class="login">
                <a class="login-d">登录</a>
                <span>|</span>
                <a class="login-z">注册</a>
            </div>
            <?php }?>

        </div>
    </div>
</div>

<!--点击登录弹出框-->
<!--登录-->
<div class="hid">
    <div class="con">
        <div class="lo-top">
            <span>登录</span>
        </div>
        <form class="vi" action="" method="post">
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
            <div class="submit">登录</div>
            <a class="j-res">注册新用户</a>
        </form>
    </div>
</div>
<!--注册-->
<div class="den">
    <div class="tent">
        <div class="lo-top">
            <span>注册</span>
        </div>
        <form class="vi2" action="" method="post">
            <div>
                <input type="text" name="rename" placeholder="用户名" autocomplete="off">
            </div>
            <div>
                <input type="password" name="repass" placeholder="密码" autocomplete="off">
            </div>
            <div>
                <input type="password" name="repass2" placeholder="确认密码" autocomplete="off">
            </div>
            <div>
                <input type="text" name="tel" placeholder="输入手机号" autocomplete="off">
            </div>
            <div>
                <input type="text" name="recode" placeholder="验证码" autocomplete="off">
                <div id="huo">获取验证码</div>
            </div>
            <div class="submit">注册</div>
            <a class="j-login">已有账号，直接登录</a>
        </form>
    </div>
</div><?php }
}
