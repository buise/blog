<?php
/* Smarty version 3.1.30, created on 2017-07-20 03:05:23
  from "E:\wamp\www\MVC\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597001d3d4b8c9_42600366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51a70f0c0c7a89656c4cb1060bf925a5981aabd3' => 
    array (
      0 => 'E:\\wamp\\www\\MVC\\template\\index\\show.html',
      1 => 1500512723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597001d3d4b8c9_42600366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
index-show.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
angular.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
index-show.js"><?php echo '</script'; ?>
>
<div class="artbox" id="<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wid'];?>
" ng-app="message" ng-controller="ctrl">
    <h3 class="artitle"><?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wtitle'];?>
</h3>
    <p class="artjj">作者：<span> <?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wauthor'];?>
</span> 发布时间：<span> <?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wtime'];?>
</span> 点击量：<span> <?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wclick']+1;?>
</span></p>
    <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wimg'];?>
" alt="" class="artimg">
    <div class="content"><?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wcon'];?>
</div>




    <div class="message" id="yes">
        <h3>留言区<span>(目前有10条留言)</span></h3>
        <textarea name="message" rows="5" ng-model="con"></textarea>
        <button ng-click="addmess(0)">留言</button>
        <button>取消</button>

        <div class="history" ng-repeat="item in data">
            <div class="lybox">
                <img  src="<?php echo $_smarty_tpl->tpl_vars['article']->value[0]['wimg'];?>
" alt="">
                <div class="lyxx">
                    <h3 ng-bind="item.mname"></h3>
                    <p><span>1楼</span> <span ng-bind="item.mtime"></span></p>
                </div>
                <div class="lycon" ng-bind="item.mcon">></div>
                <button class="hfbut">回复</button>
            </div>
            <div class="hfbox" ng-repeat="v in item.son">
                <p><span ng-bind="v.mname"></span><span ng-bind="v.mtime"></span></p>
                <div class="lycon" ng-bind="v.mcon">></div>
                <button class="hfbut">回复</button>
            </div>

            <div class="replay">
                <textarea name="message" rows="5" ng-model="cons"></textarea>
                <button ng-click="addmess(item.mid)">留言</button>
                <button>取消</button>
            </div>
        </div>
    </div>

    <div class="message" id="no">
        <h3>留言区</h3>
        <p style="padding-left:30px;line-height: 40px;height:40px;width:100%">想要留言么，请先<span style="color:#ff6709">登陆</span></p>
    </div>
</div>
</body>
<?php echo '<script'; ?>
>
    angular.module('message',[])
        .controller("ctrl",function ($scope,$http) {
            $scope.cons='';
            var id=document.querySelector('.artbox').id;
             $http({
                 method: 'get',
                 url: 'index.php?f=show&a=message&id='+id,
             }).then(function successCallback(e) {
                 $scope.data=e.data;
             }, function errorCallback(e) {
                 console.log("angular error")
             });

             $scope.addmess=function (id) {
                 var wwid=document.querySelector('.artbox').id;
                 if(id==0){
                     $http({
                         method: 'get',
                         params:{
                             con:$scope.con,
                             type:id,
                         },
                         url: 'index.php?f=show&a=addMessage&id='+wwid,
                     }).then(function successCallback(e) {
                         $http({
                             method: 'get',
                             url: 'index.php?f=show&a=message&id='+wwid,
                         }).then(function successCallback(e) {
                             $scope.data=e.data;
                         })
                     })
                 }else{
                     $http({
                         method: 'get',
                         params:{
                             con:$scope.cons,
                             type:id,
                         },
                         url: 'index.php?f=show&a=addMessage&id='+wwid,
                     }).then(function successCallback(e) {
                         $http({
                             method: 'get',
                             url: 'index.php?f=show&a=message&id='+wwid,
                         }).then(function successCallback(e) {
                             $scope.data=e.data;
                         })
                     })
                 }
             }
        })
<?php echo '</script'; ?>
>
</html><?php }
}
