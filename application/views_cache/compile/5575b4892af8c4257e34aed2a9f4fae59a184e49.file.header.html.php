<?php /* Smarty version Smarty-3.1.14, created on 2013-11-15 16:14:20
         compiled from "F:\root\hulapai\web\system\application\views\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:18998526f12c99cb9a2-59446959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5575b4892af8c4257e34aed2a9f4fae59a184e49' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\header.html',
      1 => 1384493208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18998526f12c99cb9a2-59446959',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12c9a312c5_11767299',
  'variables' => 
  array (
    'path' => 0,
    'USER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12c9a312c5_11767299')) {function content_526f12c9a312c5_11767299($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
common.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
dialog.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
admin_common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
formvalidatorregex.js" charset="UTF-8"></script>
<title>呼啦派</title>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>
<body>
<div class="header_top">
	<div class="contenter">
		<div class="rt">
	    	<div class="tab_style white cut_line text-r">
		    	<?php if ($_smarty_tpl->tpl_vars['USER']->value){?><?php if ($_smarty_tpl->tpl_vars['USER']->value['nickname']){?><?php echo $_smarty_tpl->tpl_vars['USER']->value['nickname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['USER']->value['account'];?>
<?php }?>，<a href="/Logout">退出</a><span>|</span><a href="/User">用户中心</a><?php }else{ ?><a href="/Login">登录</a>-<a href="/Register">注册</a><?php }?>
		    	<span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/guide" target="_blank">帮助中心</a>
		    	<!-- <span>|</span><a href="#">提建议</a> -->
	        </div>
	        <div class="style_but"></div>
	    </div>
	</div>
</div><?php }} ?>