<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:23:57
  from "E:\wamp\www\MVC\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970224debe089_83544730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '498dcbf7d14faa67a5647efa362ee66d273872e0' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\addUser.html',
      1 => 1500521036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970224debe089_83544730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加用户</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
</head>
<style>
    .form-control{
        width:30%;
        margin:20px;
    }
    .btn-info{
        margin:0 20px;
    }
</style>
<body>
<form action="index.php?d=admin&f=user&a=addUser" method="post">
    <div>
        <input type="text" name="uname"  required class="form-control" placeholder="输入用户名">
    </div>
    <div>
        <input type="password" name="upass" class="form-control" placeholder="输入密码">
    </div>
    <div>
        <select name="role" id="" class="form-control">
            <option value="0" name="role">--选择角色--</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['role']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['power'];?>
><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
" name="role"><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </div>
    <div>
        <input type="submit" value="添加用户" class="btn btn-info">
    </div>
</form>
</body>
</html><?php }
}
