<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 15:42:15
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\grade\add.html" */ ?>
<?php /*%%SmartyHeaderCode:18364527b4457888df4-66138768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ad180b21791ac753bec6a4339d71019573f695' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\grade\\add.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18364527b4457888df4-66138768',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527b44578cb488_96503771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527b44578cb488_96503771')) {function content_527b44578cb488_96503771($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入班级名称",onfocus:"班级名称长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"班级名称长度为2-20个字符"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/grade/add" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width=80 align="right">班级名称：</td> 
		<td><input type="text" name="name"  class="input-text" id="name">
		</td>
	</tr>
	<tr>
		<td></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>