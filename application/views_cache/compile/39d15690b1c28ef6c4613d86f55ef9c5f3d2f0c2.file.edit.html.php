<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 14:16:55
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\money\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2831529831570c1645-57469758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39d15690b1c28ef6c4613d86f55ef9c5f3d2f0c2' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\money\\edit.html',
      1 => 1385705540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2831529831570c1645-57469758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529831571230e8_70006615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529831571230e8_70006615')) {function content_529831571230e8_70006615($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form name="myform" action="/school/student_money/edit?student=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['student'];?>
" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="80" align="right">学生：</td> 
		<td><?php echo studentName($_smarty_tpl->tpl_vars['_GET']->value['student']);?>

		</td>
	</tr>
	<tr>
		<td width="80" align="right">缴费金额：</td> 
		<td><input type="text" name="money"  class="input-text" id="money" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['money'];?>
" size=5>元
		</td>
	</tr>
	<tr>
		<td width="80" align="right">缴费时间：</td> 
		<td><?php echo Html::date('create_time',smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['create_time'],'%Y-%m-%d %H:%M:%S'),'',1);?>

		</td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>