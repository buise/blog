<?php
/* Smarty version 3.1.30, created on 2017-07-01 02:39:34
  from "F:\ST\wamp\www\MVC\template\lookRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5956ef462aa613_62716642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4226024059efbb33b63a03805ea92e6de10e41e6' => 
    array (
      0 => 'F:\\ST\\wamp\\www\\MVC\\template\\lookRole.html',
      1 => 1498818913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5956ef462aa613_62716642 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看角色</title>
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
    p{
        text-align:right;
        color:#999;
        font-size:12px;
        margin-right:40px;
    }
</style>
<body>
<form action="index.php?d=admin&f=role&a=lookRole" method="post">
    <table cellspacing="0">
        <tr>
            <th>角色名</th>
            <th>角色权限</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['power'];?>
</td>
            <td>
                <a href="">删除</a>
                <a href="">编辑</a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>
    <p>数字所代表的权利：1、可以浏览后台文章 2、可以管理后台文章 3、可以管理后台人员信息</p>
</form>
</body>
</html><?php }
}
