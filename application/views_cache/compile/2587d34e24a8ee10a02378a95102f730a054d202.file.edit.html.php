<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 16:16:10
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\grade\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1942152c12bca5b56d6-70748390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2587d34e24a8ee10a02378a95102f730a054d202' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\grade\\edit.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1942152c12bca5b56d6-70748390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c12bca61ee62_57571157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c12bca61ee62_57571157')) {function content_52c12bca61ee62_57571157($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form name="myform" action="/school/grade/edit" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width=80 align="right">班级名称：</td> 
		<td><input type="text" name="name"  class="input-text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['grade']->value['name'];?>
">
		</td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
"/></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>