<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:38:05
  from "E:\wamp\www\MVC\template\admin\lookCat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970259df01ef5_88922004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf45862b8a7aa271305b7cd94a8b8cf782f28f9' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\lookCat.html',
      1 => 1500521879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970259df01ef5_88922004 (Smarty_Internal_Template $_smarty_tpl) {
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
        <th>栏目ID</th>
        <th>栏目名</th>
        <th>上级栏目ID</th>
        <th>操作</th>
    </tr>
    <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

</table>
</body>
</html><?php }
}
