<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 16:17:12
         compiled from "F:\root\hulapai\web\system\application\views\excel\teacher.html" */ ?>
<?php /*%%SmartyHeaderCode:16672528dc1889c4490-85602879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8562f94915fa73bb66c3c635ef7888f7192e0a18' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\excel\\teacher.html',
      1 => 1385021794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16672528dc1889c4490-85602879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528dc1889d7d10_64152473',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528dc1889d7d10_64152473')) {function content_528dc1889d7d10_64152473($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="common-form">
<form name="myform" action="/excel/teacher" method="post" id="myform" enctype="multipart/form-data">
<p class="content_tip" style="margin-left:110px;">注:基本资料是注册用户个人的相关信息</p>
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right">导入老师</td> 
	<td>
	<input id="upfile" name="upfile" type="file">
	</td>
	</tr>
	<tr>
	<td align="right"></td> 
	<td><input name="dosubmit" type="submit" value="导入" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>