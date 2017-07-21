<?php
/* Smarty version 3.1.30, created on 2017-07-20 09:38:00
  from "E:\wamp\www\MVC\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59705dd8a03d92_85984001',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db72236075d00e534d6c6ccc565b7375ac8dbc4c' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\index.html',
      1 => 1500536279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59705dd8a03d92_85984001 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index-index.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>
swiper.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
swiper.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index-index.js"><?php echo '</script'; ?>
>
<div class="content">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <a class="swiper-slide" href="index.php?d=index&f=show&id=<?php echo $_smarty_tpl->tpl_vars['all']->value[0]['wid'];?>
" style="background: url('<?php echo IMG_PATH;?>
ww.jpg');background-size: 100%;">
                <p class="banner-title"><?php echo $_smarty_tpl->tpl_vars['all']->value[0]['wtitle'];?>
</p>
            </a>
            <a class="swiper-slide" href="index.php?d=index&f=show&id=<?php echo $_smarty_tpl->tpl_vars['all']->value[1]['wid'];?>
" style="background: url('<?php echo IMG_PATH;?>
bg2.jpg');background-size: 100%; background-position: center">
                <p class="banner-title"><?php echo $_smarty_tpl->tpl_vars['all']->value[1]['wtitle'];?>
</p>
            </a>
            <a class="swiper-slide" href="index.php?d=index&f=show&id=<?php echo $_smarty_tpl->tpl_vars['all']->value[2]['wid'];?>
" style="background: url('<?php echo IMG_PATH;?>
X.jpg');background-size: 100%; background-position: center">
                <p class="banner-title"><?php echo $_smarty_tpl->tpl_vars['all']->value[2]['wtitle'];?>
</p>
            </a>
            <a class="swiper-slide" href="index.php?d=index&f=show&id=<?php echo $_smarty_tpl->tpl_vars['all']->value[3]['wid'];?>
" style="background: url('<?php echo IMG_PATH;?>
bg.jpg');background-size: 100%">
                <p class="banner-title"><?php echo $_smarty_tpl->tpl_vars['all']->value[3]['wtitle'];?>
</p>
            </a>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div class="banner">
        <h3>本周热门推荐</h3>
        <ul>
            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 0;
if ($_smarty_tpl->tpl_vars['i']->value < 5) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value < 5; $_smarty_tpl->tpl_vars['i']->value++) {
?>
            <li>
                <a href="index.php?d=index&f=show&id=<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->tpl_vars['i']->value]['wid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['all']->value[$_smarty_tpl->tpl_vars['i']->value]['wtitle'];?>
</a>
            </li>
            <?php }
}
?>

        </ul>
    </div>

    <div class="choose">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>

    <div class="article">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['v']->value['wstatus'] == 1) {?>
            <li>
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['wimg'];?>
" alt="" class="art-right">
                <div class="top">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pimg'];?>
" alt="">
                    <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['wauthor'];?>
</h2>
                    <h3><?php echo $_smarty_tpl->tpl_vars['v']->value['wtime'];?>
</h3>
                </div>
                <div class="midden">
                    <a href="index.php?d=index&f=show&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['wid'];?>
" class="art-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['wtitle'];?>
</a>
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['wjj'];?>
</p>
                    <h1><?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
</h1>
                </div>
            </li>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>

    <div class="author">
        <h3><span>---------------- </span>热门作者<span> ----------------</span></h3>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['author']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <a href="">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['pimg'];?>
" alt="">
                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value['pname'];?>
</span>
                </a>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    </div>


</div>

</body>
</html><?php }
}
