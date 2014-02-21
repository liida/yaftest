<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 11:02:29
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\index\addschool.html" */ ?>
<?php /*%%SmartyHeaderCode:1130652746570072d52-16386348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1144b1be774ab71e8ee5d9d472919e0c1c285413' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\index\\addschool.html',
      1 => 1383360662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1130652746570072d52-16386348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527465700865e8_82688273',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527465700865e8_82688273')) {function content_527465700865e8_82688273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#code").formValidator({
		onshow:"请输入机构号",
		onfocus:"请输入机构号"
	}).inputValidator({
		min:2,
		max:15,
		onerror:"请输入机构号"
	}).ajaxValidator({
	    type : "get",
		url : "/public/schoolExist",
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
		onerror : "机构号不存在",
		onwait : "检测中"
	});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/student/index/addSchool" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td><input type="text" name="code"  class="input-text ufocus" id="code" def="请输入机构号">
	</tr>
	<tr>
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>