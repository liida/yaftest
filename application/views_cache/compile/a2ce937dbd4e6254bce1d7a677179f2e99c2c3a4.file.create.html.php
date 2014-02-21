<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 10:56:13
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\create.html" */ ?>
<?php /*%%SmartyHeaderCode:2579352785e4d7017d7-01688284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ce937dbd4e6254bce1d7a677179f2e99c2c3a4' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\create.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2579352785e4d7017d7-01688284',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52785e4d77b5d1_77741900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52785e4d77b5d1_77741900')) {function content_52785e4d77b5d1_77741900($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入学生名",onfocus:"学生名长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"学生名长度为2-20个字符"});
	$("#parent_name").formValidator({onshow:"请输入家长",onfocus:"家长名长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"家长名长度为2-20个字符"});
	$("#phone").formValidator({onshow:"请输入联系电话",onfocus:"请输入联系电话"}).regexValidator({regexp:"(^(1)[0-9]{10}$)|(^(([0\\+]\\d{2,3}-)?(0\\d{2,3})-)?(\\d{7,8})(-(\\d{3,}))?$)", onerror:"你输入的联系电话不正确"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/student/create" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="120" align="right">学生名：</td> 
		<td><input type="text" name="name"  class="input-text" id="name">
		</td>
	</tr>
	<tr>
		<td width="120" align="right">家长：</td> 
		<td><input type="text" name="parent_name"  class="input-text" id="parent_name">
		</td>
	</tr>
	<tr>
		<td width="120" align="right">联系电话：</td> 
		<td><input type="text" name="phone"  class="input-text" id="phone">
		</td>
	</tr>
	<tr>
		<td width="120"></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>