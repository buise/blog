<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:39:15
  from "E:\wamp\www\MVC\template\admin\lookRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597025e37e5891_35386331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49d760cda664f75cdd63877be50087c00e2b216d' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\lookRole.html',
      1 => 1500521937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597025e37e5891_35386331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>查看角色</title>
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
    p{
        text-align:right;
        color:#999;
        font-size:12px;
        margin-right:40px;
    }
</style>
<body>
<form action="index.php?d=admin&f=role&a=lookRole" method="post">
    <table cellspacing="0" class="table table-striped">
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
