<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 17:04:17
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1519252786332204285-56054208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218043443ae4cfc460263da7b62c6a9e4b34edfb' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\add.html',
      1 => 1383641544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1519252786332204285-56054208',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52786332275724_56355733',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52786332275724_56355733')) {function content_52786332275724_56355733($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form name="myform" action="/school/student/add" method="post" id="myform">
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