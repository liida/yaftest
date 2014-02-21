<?php /* Smarty version Smarty-3.1.14, created on 2013-11-13 11:04:11
         compiled from "F:\root\hulapai\web\system\application\views\public\header_index.html" */ ?>
<?php /*%%SmartyHeaderCode:32721526f12c9979911-22430718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65218942098180f1c8ab4a0b6164a8dbc0419602' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\header_index.html',
      1 => 1384237097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32721526f12c9979911-22430718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12c99bfe26_39715736',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12c99bfe26_39715736')) {function content_526f12c99bfe26_39715736($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="header">
	<div class="contenter">
		<div class="logo lf"><a href="/user"></a></div>
	    <div class="col-auto lf" style="overflow: visible">
	        <ul class="nav black left_464" id="top_menu">
	        	<li id="" class="top_menu <?php if (strtolower($_SERVER['REQUEST_URI'])=='/login'){?>on<?php }?>"><a href="/login" hidefocus="true" style="outline:none;">首页</a></li>
	        	<li id="" class="top_menu <?php if (strtolower($_SERVER['REQUEST_URI'])=='/download'){?>on<?php }?>"><a href="/download" hidefocus="true" style="outline:none;">下载</a></li>
	        	<li id="" class="top_menu <?php if (strtolower($_SERVER['REQUEST_URI'])=='index/guide'){?>on<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/guide" target="_blank" hidefocus="true" style="outline:none;">帮助中心</a></li>
	        </ul>
	    </div>
	 </div>
</div><?php }} ?>