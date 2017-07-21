<?php
/* Smarty version 3.1.30, created on 2017-07-20 05:41:33
  from "E:\wamp\www\MVC\template\admin\lookArt.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5970266dd3c620_05779715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68dad44f44c6848aebd067f13848e73b9022735b' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\admin\\lookArt.html',
      1 => 1500522092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5970266dd3c620_05779715 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
iscroll.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
lookArt.js"><?php echo '</script'; ?>
>
</head>
<style>
    table{
        border: 1px solid #e4e4e4;
        margin:20px auto;
        display: block;
        float:right;
        width:1100px;
    }
    th,td{
        border: 1px solid #e4e4e4;
        box-sizing: border-box;
        padding:5px 15px;
        text-align: center;

    }
    td:nth-child(3){
        text-align: left;
    }
    td:nth-child(6){
        width:300px;
        overflow: hidden;
    }
    a{
        color:#555;
    }
    a:hover{
        color:#FF6709;
    }
    .look{
        width:80px;
        height:30px;
        background: #ff6709;
        border-radius:5px;
        color:#fff;
        text-align: center;
        line-height:30px;
    }
    .status{
        width:60px;
        height:30px;
        text-align: center;
        line-height:30px;
        border-radius:5px;
        color:#fff;
    }
    .hidden{
        position: absolute;
        left:0;
        top:0;
        bottom:0;
        right:0;
        background: rgba(0,0,0,0.8);
        display: none;
    }
    .hidden-con{
        position: absolute;
        left:80px;
        top:40px;
        right:150px;
        bottom:20px;
        overflow: scroll;
        background: #fff;
        z-index: 10;
        text-align: left;
        padding:10px;
    }
    button{
        width:80px;
        height:30px;
        position: absolute;
        right:40px;
        background: #fff;
        border: none;
        border-radius: 5px;
    }
    button:nth-of-type(1){
        top:100px;
    }
    button:nth-of-type(2){
        top:150px;
    }
    button:nth-of-type(3){
        top:200px;
    }
    .page{
        width:100%;
        height:30px;
        line-height:30px;
        text-align: center;
        position: fixed;
        bottom:0;
        left:0;
        background: rgba(0,0,0,0.1);
        margin:0;
    }
</style>
<body>
<table cellspacing="0">
    <tr>
        <th>文章ID</th>
        <th>文章标题</th>
        <th>文章类型</th>
        <th>文章作者</th>
        <th>关键字</th>
        <th>简介</th>
        <th>缩略图</th>
        <th>查看内容</th>
        <th>文章状态</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr id="aa<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wtitle'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wauthor'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wword'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['wjj'];?>
</td>
        <td>
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['wimg'];?>
" alt="" style="width:100px;max-height: 100px">
        </td>
        <td>
            <div class="look" wid="<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">观看</div>
            <div class="hidden">
                <div class="hidden-con">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['wcon'];?>

                </div>
                <button class="tg">通过</button>
                <button class="jy">禁言</button>
                <button class="gb" value="$v['wstatus']" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
">关闭</button>
            </div>
        </td>
        <td>
            <input type="hidden" name="eee" value="0">
            <?php if ($_smarty_tpl->tpl_vars['v']->value['wstatus'] == 0) {?>
            <div class="status" style="background: #e4e4e4">
                审核中
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['wstatus'] == 1) {?>
            <div class="status" style="background: green">
                已通过
            </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['v']->value['wstatus'] == 2) {?>
            <div class="status" style="background: red">
                未通过
            </div>
            <?php }?>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<p class="page"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</p>
</body>
</html><?php }
}
