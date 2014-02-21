<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 14:16:45
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\money\add.html" */ ?>
<?php /*%%SmartyHeaderCode:185425298314def02e4-30017490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3413078353d848236b5e01ab3a781f4d4a6a3b0a' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\money\\add.html',
      1 => 1385705534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185425298314def02e4-30017490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5298314df2ac64_83037701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298314df2ac64_83037701')) {function content_5298314df2ac64_83037701($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){},onsuccess:function(){
		var create_time = $("#create_time").val();
		if(!create_time){
			alert('请选择缴费时间！');
			return false;
		}
	}});
	$("#money").formValidator({onshow:"请输入缴费金额",onfocus:"缴费金额必须在1-20000之间"}).inputValidator({type:"number",min:1,max:20000,onerror:"总课次必须在1-20000之间"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/student_money/add?student=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['student'];?>
" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="80" align="right">学生：</td> 
		<td><?php echo studentName($_smarty_tpl->tpl_vars['_GET']->value['student']);?>

		</td>
	</tr>
	<tr>
		<td width="80" align="right">缴费金额：</td> 
		<td><input type="text" name="money"  class="input-text" id="money" value="" size=5>元
		</td>
	</tr>
	<tr>
		<td width="80" align="right">缴费时间：</td> 
		<td><?php echo Html::date('create_time','','',1);?>

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