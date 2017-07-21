<?php
/* Smarty version 3.1.30, created on 2017-07-14 09:00:21
  from "E:\wamp\www\MVC\template\admin\changeUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59686c05e802c8_68011653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8172b773aad2ba1a2b4ca5e8d6d01ef57af5f0db' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\changeUser.html',
      1 => 1500015618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59686c05e802c8_68011653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改角色</title>
</head>
<body>
<form action="index.php?d=admin&f=role&a=addRole" method="post">
    <div>
        角色名字：<input type="text" name="rname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value[0]['name'];?>
">
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
</html>
<?php echo '<script'; ?>
>
    $('input[name=rname]').focus(function () {
        alert($('input[name=rname]').val());
    })
<?php echo '</script'; ?>
><?php }
}
