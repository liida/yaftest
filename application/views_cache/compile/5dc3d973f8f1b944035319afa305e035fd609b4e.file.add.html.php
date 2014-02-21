<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 14:14:55
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\user\group\add.html" */ ?>
<?php /*%%SmartyHeaderCode:3161352ca49df51f4f4-04171621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc3d973f8f1b944035319afa305e035fd609b4e' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\user\\group\\add.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3161352ca49df51f4f4-04171621',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ca49df57d108_86995392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ca49df57d108_86995392')) {function content_52ca49df57d108_86995392($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({
		onshow:"请输入用户组名",
		onfocus:"用户组名应该为2-20位之间"
	}).inputValidator({
		min:2,
		max:20,
		onerror:"用户组名应该为2-20位之间"
	})

});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/user_group/add" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td width="50" align="right">组名：</td> 
			<td><input type="text" name="info[name]"  class="input-text" id="name"></td>
		</tr>
		<tr>
			<td></td> 
			<td><input name="dosubmit" type="submit" value="提交" class="button state_highlight"></td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>