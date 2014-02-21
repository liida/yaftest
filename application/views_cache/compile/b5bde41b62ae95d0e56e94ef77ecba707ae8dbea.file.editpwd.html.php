<?php /* Smarty version Smarty-3.1.14, created on 2013-12-31 18:23:14
         compiled from "F:\root\hulapai\web\system\application\views\user\editpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:203775274aa815ea817-05710389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bde41b62ae95d0e56e94ef77ecba707ae8dbea' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\user\\editpwd.html',
      1 => 1385956414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203775274aa815ea817-05710389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274aa815fa226_94615353',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274aa815fa226_94615353')) {function content_5274aa815fa226_94615353($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#oldpassword").formValidator({onshow:"请输入旧密码",onfocus:"长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"长度为6-16个字符"});
	$("#password").formValidator({onshow:"请输入新密码",onfocus:"长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"长度为6-16个字符"}).compareValidator({desid:"oldpassword",operateor:"!=",datatype:"string",onerror:"新旧密码不能一致"});
	$("#repassword").formValidator({onshow:"请输入确认密码",onfocus:"长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"长度为6-16个字符"}).compareValidator({desid:"password",operateor:"=",datatype:"string",onerror:"两次密码必须一致"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/user/editPwd" method="post" id="myform">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right">旧密码：</td> 
	<td><input type="password" name="oldpassword" class="input-text" id="oldpassword" value=""></input></td>
	</tr>
	<tr>
	<td align="right">新密码：</td> 
	<td><input type="password" name="password" class="input-text" id="password" value=""></input></td>
	</tr>
	<tr>
	<td align="right">确认密码：</td> 
	<td><input type="password" name="repassword" class="input-text" id="repassword" value=""></input></td>
	</tr>
	<tr>
	<td align="right"></td> 
	<td><input name="dosubmit" type="submit" value="保存" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>