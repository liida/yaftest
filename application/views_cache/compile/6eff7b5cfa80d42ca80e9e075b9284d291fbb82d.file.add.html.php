<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 15:36:37
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\course\add.html" */ ?>
<?php /*%%SmartyHeaderCode:18835274ab856f3a44-35331648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eff7b5cfa80d42ca80e9e075b9284d291fbb82d' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\course\\add.html',
      1 => 1383377781,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18835274ab856f3a44-35331648',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274ab8571ab50_31002353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274ab8571ab50_31002353')) {function content_5274ab8571ab50_31002353($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#type").formValidator({onshow:"请选择分类",onfocus:"请选择分类"}).inputValidator({min:1,onerror:"请选择分类"})
	$("#title").formValidator({onshow:"请输入名称",onfocus:"名称长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"名称长度为2-20个字符"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/teacher/course/add" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width=50 align="right">分类：</td> 
		<td><?php echo Html::selectCourseType('','','type','title');?>

		</td>
	</tr>
	<tr>
		<td width=50 align="right"></td> 
		<td><input name="dosubmit" type="submit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>