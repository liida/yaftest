<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:08:52
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\group\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1941052ca80b4f10ab9-39798271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2599c8f5fd9b81ee770b026b9c36e87cce618014' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\group\\edit.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941052ca80b4f10ab9-39798271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ca80b504b6d3_20923168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ca80b504b6d3_20923168')) {function content_52ca80b504b6d3_20923168($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入分组名称",onfocus:"分组名称长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"分组名称长度为2-20个字符"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/group/edit" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td width="120" align="right">分组名称：</td> 
			<td><input type="text" name="name"  class="input-text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
">
			</td>
		</tr>
		<tr>
			<td width="120" align="right"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
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