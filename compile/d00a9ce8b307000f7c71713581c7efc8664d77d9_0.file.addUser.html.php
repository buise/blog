<?php
/* Smarty version 3.1.30, created on 2017-06-30 05:47:01
  from "F:\ST\wamp\www\MVC\template\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5955c9b5898a06_89774680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd00a9ce8b307000f7c71713581c7efc8664d77d9' => 
    array (
      0 => 'F:\\ST\\wamp\\www\\MVC\\template\\addUser.html',
      1 => 1498794399,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5955c9b5898a06_89774680 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加用户</title>
</head>
<body>
<form action="index.php?d=admin&f=user&a=addUser" method="post">
    <div>
        用户名：<input type="text" name="uname">
    </div>
    <div>
        密码：<input type="password" name="upass">
    </div>
    <div>
        角色：<select name="role" id="">
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
        <input type="submit" value="添加用户">
    </div>
</form>
</body>
</html><?php }
}
