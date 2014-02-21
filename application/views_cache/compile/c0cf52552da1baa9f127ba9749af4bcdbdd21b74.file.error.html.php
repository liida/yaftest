<?php /* Smarty version Smarty-3.1.14, created on 2013-11-13 11:37:25
         compiled from "F:\root\hulapai\web\system\application\views\error\error.html" */ ?>
<?php /*%%SmartyHeaderCode:29926526f130bc5b030-39818393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0cf52552da1baa9f127ba9749af4bcdbdd21b74' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\error\\error.html',
      1 => 1384313835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29926526f130bc5b030-39818393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f130bc9d6c5_78409199',
  'variables' => 
  array (
    'path' => 0,
    'code' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f130bc9d6c5_78409199')) {function content_526f130bc9d6c5_78409199($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>错误信息</title>
<style type="text/css">
<!--
*{ padding:0; margin:0; font-size:12px}
a:link,a:visited{text-decoration:none;color:#0068a6}
a:hover,a:active{color:#ff6600;text-decoration: underline}
.showMsg{border: 1px solid #1e64c8; zoom:1; width:450px; height:172px;position:absolute;top:44%;left:50%;margin:-87px 0 0 -225px}
.showMsg h5{background-image: url(<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
msg_img/msg.png);background-repeat: no-repeat; color:#fff; padding-left:35px; height:25px; line-height:26px;*line-height:28px; overflow:hidden; font-size:14px; text-align:left}
.showMsg .content{ padding:46px 12px 10px 45px; font-size:14px; height:64px; text-align:left}
.showMsg .bottom{ background:#e4ecf7; margin: 0 1px 1px 1px;line-height:26px; *line-height:30px; height:26px; text-align:center}
.showMsg .ok,.showMsg .guery{background: url(<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
msg_img/msg_bg.png) no-repeat 0px -560px;}
.showMsg .guery{background-position: left -460px;}
-->
</style>
<script type="text/javaScript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.min.js"></script>
<script language="JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
admin_common.js"></script>
</head>
<body>
<div class="showMsg" style="text-align:center">
	<?php if ($_smarty_tpl->tpl_vars['code']->value==9999){?>
	<h5>DB错误信息</h5>
	<?php }elseif($_smarty_tpl->tpl_vars['code']->value==404){?>
	<h5>找不到文件</h5>
	<?php }else{ ?>
	<h5>错误信息</h5>
	<?php }?>
    <div class="content guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <div class="bottom">
	<a href="javascript:history.back();" >[点这里返回上一页]</a>
</div>
</body>
</html><?php }} ?>