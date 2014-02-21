<?php /* Smarty version Smarty-3.1.14, created on 2013-11-26 18:37:01
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\import\auth.html" */ ?>
<?php /*%%SmartyHeaderCode:13646529479cd80d3f2-08317709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28b4a87d62e392b3aebb4681bf5607322fdcc726' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\import\\auth.html',
      1 => 1385350731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13646529479cd80d3f2-08317709',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529479cd8e41a9_77999694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529479cd8e41a9_77999694')) {function content_529479cd8e41a9_77999694($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="common-form">
<form name="myform" action="/public/authCode" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right">输入授权码</td> 
	<td>
	<input name="authCode" id="authCode" type="authCode" class="input-text" value=""/>
	</td>
	</tr>
	<tr>
	<td align="right"></td> 
	<td><input name="dosubmit" type="submit" value="确认" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>