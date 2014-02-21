<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 11:46:12
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\import\student.html" */ ?>
<?php /*%%SmartyHeaderCode:21681528dd5724f4246-18133901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8dc88bf82dd0fa6eab80a684f974926cc5702a8' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\import\\student.html',
      1 => 1388373810,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21681528dd5724f4246-18133901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528dd572507ac9_50178383',
  'variables' => 
  array (
    'import' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528dd572507ac9_50178383')) {function content_528dd572507ac9_50178383($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['import']->value){?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"长度为6-16个字符"})
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/import/student" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right">导入学生</td> 
	<td>
	<input id="upfile" name="upfile" type="file">
	</td>
	</tr>
	<tr>
	<td width=120 align="right">密码</td> 
	<td>
	<input name="password" id="password" type="password" class="input-text" value=""/>
	</td>
	</tr>
	<tr>
	<td align="right"></td> 
	<td><input name="dosubmit" type="submit" value="导入" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php }else{ ?>
123
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>