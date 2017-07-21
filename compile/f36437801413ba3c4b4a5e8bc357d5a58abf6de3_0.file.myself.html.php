<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:36:14
  from "E:\wamp\www\MVC\template\index\myself.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59698dae3b0719_62603620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36437801413ba3c4b4a5e8bc357d5a58abf6de3' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\myself.html',
      1 => 1500089773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59698dae3b0719_62603620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
myself.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
myself.css">
<div class="my-left">
    <a href="index.php?a=myself" style="color:#ff6709">个人信息</a><br>
    <a href="">发布的文章</a><br>
    <a href="">我的留言</a><br>
    <a href="">我的回复</a><br>
    <a href="">我的关注</a><br>
    <a href="">我的粉丝</a><br>
</div>
<div class="my-right">
    <table>
        <tr>
            <td>
                头像
            </td>
            <td>
                <img src="<?php echo $_smarty_tpl->tpl_vars['person']->value[0]['pimg'];?>
" alt="" style="width:100px;height:100px;border-radius:50%" class="img">
            </td>
            <td class="boximg">
                <input type="hidden" name="urlimg" class="urlimg">
            </td>
        </tr>
        <tr>
            <td>
                用户名
            </td>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['person']->value[0]['pname'];?>

            </td>
        </tr>
        <tr>
            <td>
                昵称
            </td>
            <td>
                <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['person']->value[0]['pnick'];?>
" name="nick">
            </td>
        </tr>
        <tr>
            <td>
                修改密码
            </td>
            <td>
                <input type="password" value="<?php echo $_smarty_tpl->tpl_vars['person']->value[0]['ppass'];?>
" name="pass2">
            </td>
        </tr>
        <tr>
            <td>
                电话
            </td>
            <td>
                <div class="tel">
                    <?php echo $_smarty_tpl->tpl_vars['person']->value[0]['ptel'];?>

                </div>
            </td>
        </tr>
    </table>
    <div class="yes">确认修改</div>
</div>
</body>
</html><?php }
}
