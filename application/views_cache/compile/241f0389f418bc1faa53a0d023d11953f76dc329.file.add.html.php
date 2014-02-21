<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:28:02
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\teacher\add.html" */ ?>
<?php /*%%SmartyHeaderCode:21995527077b47a49b8-11289601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '241f0389f418bc1faa53a0d023d11953f76dc329' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\teacher\\add.html',
      1 => 1389004076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21995527077b47a49b8-11289601',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527077b47a49b8_83570779',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527077b47a49b8_83570779')) {function content_527077b47a49b8_83570779($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({
		onshow:"请输入用户手机号/呼啦号",
		onfocus:"请输入用户手机号/呼啦号"
	}).inputValidator({
		min:2,
		max:15,
		onerror:"请输入用户手机号/呼啦号"
	}).ajaxValidator({
	    type : "get",
		url : "/public/userExist",
		data :"",
		datatype : "html",
		async:'false',
		success : function(data){	
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "用户账号/呼啦号不存在",
		onwait : "检测中"
	});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/teacher/add" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="120" align="right">用户账号/呼啦号：</td> 
		<td><input type="text" name="username"  class="input-text" id="username">
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