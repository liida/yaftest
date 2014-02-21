<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 18:20:44
         compiled from "F:\root\hulapai\web\system\application\views\public\header_main.html" */ ?>
<?php /*%%SmartyHeaderCode:7190526f12d3610c06-14557332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '294356af6229c875380b621d71f018fe1980534b' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\header_main.html',
      1 => 1385103616,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7190526f12d3610c06-14557332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12d366e825_29423542',
  'variables' => 
  array (
    'MENU' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12d366e825_29423542')) {function content_526f12d366e825_29423542($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="header">
	<div class="contenter">
		<div class="logo lf"><a href="/user"></a></div>
		<div class="logo_line lf"></div>
	    <div class="col-auto lf" style="overflow: visible">
	        <ul class="nav black" id="top_menu">
	        	<li id="" class="top_menu logo_line"></li>
	        	<?php if (strtolower($_SERVER['REQUEST_URI'])=='/register'){?>
	        	<li id="" class="top_menu on"><a href="/register" hidefocus="true" style="outline:none;">注册</a></li>
	        	<?php }elseif(strtolower($_SERVER['REQUEST_URI'])=='/findpwd'){?>
	        	<li id="" class="top_menu on"><a href="/findpwd" hidefocus="true" style="outline:none;">找回密码</a></li>
	        	<?php }else{ ?>
	        	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MENU']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
	        	<li id="" class="top_menu <?php if (strtolower($_SERVER['REQUEST_URI'])=='/$k'){?>on<?php }?>"><a href="/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</a></li>
	        	<?php } ?>
	        	<?php }?>
	        </ul>
	    </div>
	 </div>
</div><?php }} ?>