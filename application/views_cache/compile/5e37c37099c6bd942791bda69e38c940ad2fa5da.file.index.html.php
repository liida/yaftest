<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 16:14:25
         compiled from "F:\root\hulapai\web\system\application\views\excel\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8211528dc064ac7477-12172549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e37c37099c6bd942791bda69e38c940ad2fa5da' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\excel\\index.html',
      1 => 1385021661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8211528dc064ac7477-12172549',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528dc064afa102_79459423',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528dc064afa102_79459423')) {function content_528dc064afa102_79459423($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="common-form">
<form name="myform" action="/user/info" method="post" id="myform">
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
	<td><input name="dosubmit" type="submit" value="保存" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>