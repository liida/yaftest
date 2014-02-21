<?php /* Smarty version Smarty-3.1.14, created on 2013-12-16 11:34:44
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\group\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1018352ae74d41f0340-85318612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3edb59223a173094cca2fe73b8f2c1ab4d616e1b' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\group\\add.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1018352ae74d41f0340-85318612',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ae74d4251de2_72474960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ae74d4251de2_72474960')) {function content_52ae74d4251de2_72474960($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form name="myform" action="/school/group/add" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="120" align="right">分组名称：</td> 
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