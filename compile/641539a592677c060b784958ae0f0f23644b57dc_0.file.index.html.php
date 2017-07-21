<?php
/* Smarty version 3.1.30, created on 2017-06-28 02:56:57
  from "F:\ST\wamp\www\MVC\template\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5952fed9bc8681_25004803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '641539a592677c060b784958ae0f0f23644b57dc' => 
    array (
      0 => 'F:\\ST\\wamp\\www\\MVC\\template\\index.html',
      1 => 1498531652,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5952fed9bc8681_25004803 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['aa']->value, 'a');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
</h1>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
