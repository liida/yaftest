<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 17:18:29
         compiled from "F:\root\hulapai\web\system\application\views\public\message.html" */ ?>
<?php /*%%SmartyHeaderCode:31088526f12db36ad03-26562865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c1f1a679b0e834ccb6c1f8238003c43b81ac094' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\message.html',
      1 => 1388999879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31088526f12db36ad03-26562865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12db3d8324_90883339',
  'variables' => 
  array (
    'path' => 0,
    'message' => 0,
    'url_forward' => 0,
    'dialog' => 0,
    'reload' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12db3d8324_90883339')) {function content_526f12db3d8324_90883339($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
dialog.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
admin_common.js"></script>
<title>提示信息</title>
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
</head>
<body>
<div class="showMsg" style="text-align:center">
	<h5>提示信息</h5>
    <div class="content guery" style="display:inline-block;display:-moz-inline-stack;zoom:1;*display:inline;max-width:330px"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <div class="bottom">
    <?php if ($_smarty_tpl->tpl_vars['url_forward']->value==''){?>
	<a href="javascript:history.back(-1);" >[点这里返回上一页]</a>
	<script language="javascript">setTimeout("history.back(-1);",3000);</script> 
	<?php }else{ ?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['url_forward']->value;?>
">[点这里跳转]</a>
	<script language="javascript">setTimeout("redirect('<?php echo $_smarty_tpl->tpl_vars['url_forward']->value;?>
');",3000);</script> 
	<?php }?>
</div>

<script style="text/javascript">
var main = window.top.document.getElementById("rightMain");
if(main) {
   var mainContent = (main.contentWindow || main.contentDocument);
}else{
   var mainContent = window.top;
}
<?php if ($_smarty_tpl->tpl_vars['dialog']->value){?>
<?php if ($_smarty_tpl->tpl_vars['message']->value){?>
window.top.art.dialog({id:"<?php echo $_smarty_tpl->tpl_vars['dialog']->value;?>
"}).hide();
window.top.art.dialog({
	id:'show_message',
	content:'<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
', 
	title:'提示', 
	lock:true
},function(){
	<?php if ($_smarty_tpl->tpl_vars['reload']->value){?>
	mainContent.location.reload();
	<?php }?>
	window.top.art.dialog({id:"<?php echo $_smarty_tpl->tpl_vars['dialog']->value;?>
"}).close();
});
<?php }else{ ?>
window.top.art.dialog({id:"<?php echo $_smarty_tpl->tpl_vars['dialog']->value;?>
"}).close();
<?php }?>
<?php }?>
</script>
</div>
</body>
</html><?php }} ?>