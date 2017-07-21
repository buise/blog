<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:39:03
  from "E:\wamp\www\MVC\template\admin\lookPer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597025d78d8f66_99224309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9241e94da0f19691b2a9d8830b4f1db2ec4cdaca' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\lookPer.html',
      1 => 1500521938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597025d78d8f66_99224309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
    td:nth-child(2){
        text-align: left;
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
        <th>会员ID</th>
        <th>头像</th>
        <th>会员名</th>
        <th>电话</th>
        <th>昵称</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['person']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
</td>
        <td>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pimg'];?>
" alt="" style="width:40px;height:40px;border-radius:50%;">
        </td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pname'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ptel'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['pnick'];?>
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
