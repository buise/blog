<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:36:50
  from "E:\wamp\www\MVC\template\admin\addCat.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59702552e166a8_57458956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fef7b88803a0b2786b598d8fad4a4a13d1ec5a5' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\addCat.html',
      1 => 1500521808,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59702552e166a8_57458956 (Smarty_Internal_Template $_smarty_tpl) {
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
    .form-control{
        width:30%;
        margin:20px;
    }
    .btn-default{
        height:30px;
        margin:0 20px;
        background: #31b0d5;
        border-color: #46b8da;
        color:#fff;
    }
</style>
<body>
<form action="index.php?d=admin&f=category&a=addCat" method="post">
    <div>
        <select name="pid" id="" class="form-control">
            <option value="0">作为一级栏目</option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
    </div>
    <div>
        <input type="text" name="cname" class="form-control" placeholder="填写栏目名">
    </div>
    <div>
        <input class="btn btn-default" type="submit">
    </div>
</form>
</body>
</html><?php }
}
