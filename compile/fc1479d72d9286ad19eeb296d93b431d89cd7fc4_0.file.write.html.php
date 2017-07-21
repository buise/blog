<?php
/* Smarty version 3.1.30, created on 2017-07-20 12:34:51
  from "E:\wamp\www\MVC\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970874b9a2f75_78308083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc1479d72d9286ad19eeb296d93b431d89cd7fc4' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\write.html',
      1 => 1500546890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970874b9a2f75_78308083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
bootstrap.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
write.css">
<?php echo '<script'; ?>
 src="<?php echo STATIC_PATH;?>
word/ueditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STATIC_PATH;?>
word/ueditor.all.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo STATIC_PATH;?>
word/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
write.js"><?php echo '</script'; ?>
>
<style>
    .form-control{
        /*width:30%;*/
        margin:20px 0;
    }
</style>
<div class="boxcon">
    <form action="index.php?f=write&a=add" method="post">
        <input type="text" placeholder="输入标题" name="wtitle" class="form-control">
        <select name="cid" id="" class="form-control">
            <option value="0">请选择类型</option>
            <?php echo $_smarty_tpl->tpl_vars['str']->value;?>

        </select>
        <input type="text" placeholder="关键字"  name="wword" class="form-control">
        <input type="text" placeholder="简介"  name="wjj" class="form-control">
        <?php echo '<script'; ?>
 id="editor" type="text/plain" name="wcon"><?php echo '</script'; ?>
>
        添加缩略图:
        <div class="boximg">
            <input type="hidden" name="urlimg" class="urlimg" >
        </div>
        <input type="submit" value="发布">
    </form>
</div>
</body>
</html><?php }
}
