<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:40:27
  from "E:\wamp\www\MVC\template\admin\lookUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970262b09e9b1_50433308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2dfc784f541fbd417a78ffcdccc63421f49b8ec' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\lookUser.html',
      1 => 1500522025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970262b09e9b1_50433308 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
</head>
<style>
    table{
        border: 1px solid #e4e4e4;
        margin:20px auto;
    }
    th,td{
        border: 1px solid #e4e4e4;
        box-sizing: border-box;
        padding:5px 15px;
        text-align: center;
    }
    a{
        color:#555;
    }
    a:hover{
        color:#FF6709;
    }
</style>
<body>
<table cellspacing="0" class="table table-striped">
    <tr>
        <th>用户名</th>
        <th>角色</th>
        <th>注册时间</th>
        <th>离线时间</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['firstTime'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['endTime'];?>
</td>
        <td>
            <a href="index.php?d=admin&f=user&a=del&name=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">删除</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
