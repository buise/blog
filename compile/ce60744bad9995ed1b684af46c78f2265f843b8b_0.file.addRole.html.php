<?php
/* Smarty version 3.1.30, created on 2017-06-30 04:10:49
  from "F:\ST\wamp\www\MVC\template\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955b3294f6578_04584579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce60744bad9995ed1b684af46c78f2265f843b8b' => 
    array (
      0 => 'F:\\ST\\wamp\\www\\MVC\\template\\addRole.html',
      1 => 1498788647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955b3294f6578_04584579 (Smarty_Internal_Template $_smarty_tpl) {
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
