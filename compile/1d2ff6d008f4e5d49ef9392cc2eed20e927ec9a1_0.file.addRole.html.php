<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:36:50
  from "E:\wamp\www\MVC\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59702552102911_37666966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2ff6d008f4e5d49ef9392cc2eed20e927ec9a1' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\addRole.html',
      1 => 1500521808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59702552102911_37666966 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加角色</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
</head>
<style>
    .form-control{
        width:30%;
        margin:20px;
    }
    .btn-default{
        height:30px;
        margin:20px;
        background: #31b0d5;
        border-color: #46b8da;
        color:#fff;
    }
</style>
<body>
<form action="index.php?d=admin&f=role&a=addRole" method="post">
    <div>
        <input type="text" name="rname" class="form-control" placeholder="填写角色名">
    </div>
    <div style="margin-left:20px;">
        <span>角色权限：</span>
        <label class="checkbox-inline">
            <input type="checkbox" name="right[]" required value="1">浏览后台文章
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" name="right[]" value="2">管理后台文章
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" name="right[]" value="3">管理后台人员信息
        </label>
    </div>
    <div>
        <input class="btn btn-default" type="submit">
    </div>
</form>
</body>
</html><?php }
}
