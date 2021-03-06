<?php
/* Smarty version 3.1.30, created on 2017-07-17 08:12:56
  from "E:\wamp\www\MVC\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c556810cdb3_61066985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15091e8fb44c93246654ee62ec3b34f7d5689288' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\main.html',
      1 => 1500271975,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c556810cdb3_61066985 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>学生管理表</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index.js"><?php echo '</script'; ?>
>
</head>
<body>
<section id="top">
    <h1>
        <p>欢迎<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
使用本系统
            <a href="index.php?d=admin&f=login&a=out">[注销]</a>
        </p>
    </h1>
    <a href="index.php" class="index" target="_blank">浏览首页</a>
    <h2>
        <span class="time"></span>
    </h2>
</section>
<section id="left">
    <ul>
        <li>
            <span>用户管理</span>
            <ul>
                <li>
                    <a href="index.php?d=admin&f=user&a=add" target="content">添加用户</a>
                </li>
                <li>
                    <a href="index.php?d=admin&f=user&a=lookUser" target="content">查看用户</a>
                </li>
            </ul>
        </li>
        <li>
            <span>会员管理</span>
            <ul>
                <li>
                    <a href="index.php?d=admin&f=person&a=lookPerson" target="content">查看会员</a>
                </li>
            </ul>
        </li>
        <li>
            <span>角色管理</span>
            <ul>
                <li>
                    <a href="index.php?d=admin&f=role&a=add" target="content">添加角色</a>
                </li>
                <li>
                    <a href="index.php?d=admin&f=role&a=lookRole" target="content">查看角色</a>
                </li>
            </ul>
        </li>
        <li>
            <span>栏目管理</span>
            <ul>
                <li>
                    <a href="index.php?d=admin&f=category&a=add" target="content">添加栏目</a>
                </li>
                <li>
                    <a href="index.php?d=admin&f=category&a=lookcat" target="content">查看栏目</a>
                </li>
            </ul>
        </li>
        <li>
            <span>文章管理</span>
            <ul>
                <li>
                    <a href="index.php?d=admin&f=article&a=lookart" target="content">查看文章</a>
                </li>
            </ul>
        </li>
    </ul>
</section>
<iframe src="index.php?d=admin&f=login&a=face" frameborder="0" id="right" name="content">

</iframe>
</body>
</html><?php }
}
