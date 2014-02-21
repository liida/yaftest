<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 18:20:44
         compiled from "F:\root\hulapai\web\system\application\views\user\left.html" */ ?>
<?php /*%%SmartyHeaderCode:22935526f12d367a3a0-67803904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82137dbac8a7908184cad6cdce9a6e94a8a9fa19' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\user\\left.html',
      1 => 1385091689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22935526f12d367a3a0-67803904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12d3685f26_72409076',
  'variables' => 
  array (
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12d3685f26_72409076')) {function content_526f12d3685f26_72409076($_smarty_tpl) {?><h3 class="f14"><span class="switchs cu on" title="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
"></span><p class="menu_user">个人资料</p></h3>
<ul>
    <li id="_MP_1_1" class="sub_menu">
    	<a href="javascript:_MP(1,1,'/user/info');" hidefocus="true" style="outline:none;">基本资料</a>
    </li>
    <!-- <li id="_MP_1_2" class="sub_menu">
    	<a href="javascript:_MP(1,2,'/user/avatar');" hidefocus="true" style="outline:none;">修改头像</a>
    </li> -->
</ul>
<script type="text/javascript">
$(".switchs").each(function(i){
    var ul = $(this).parent().next();
    $(this).click(
    function(){
        if(ul.is(':visible')){
            ul.hide();
            $(this).removeClass('on');
        }else{
            ul.show();
            $(this).addClass('on');
        }
    })
});
</script>
<?php }} ?>