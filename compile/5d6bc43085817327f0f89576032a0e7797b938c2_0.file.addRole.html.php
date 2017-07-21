<?php
/* Smarty version 3.1.30, created on 2017-07-01 03:04:31
  from "F:\ST\wamp\www\MVC\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5956f51f208b92_50948645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6bc43085817327f0f89576032a0e7797b938c2' => 
    array (
      0 => 'F:\\ST\\wamp\\www\\MVC\\template\\admin\\addRole.html',
      1 => 1498788647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5956f51f208b92_50948645 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加角色</title>
</head>
<body>
<form action="index.php?d=admin&f=role&a=addRole" method="post">
    <div>
        角色名字：<input type="text" name="rname">
    </div>
    <div>
        角色权限：<input type="checkbox" name="right[]" required value="1">浏览后台文章
        <input type="checkbox" name="right[]" value="2">管理后台文章
        <input type="checkbox" name="right[]" value="3">管理后台人员信息
    </div>
    <div>
        <input type="submit">
    </div>
</form>
</body>
</html><?php }
}
