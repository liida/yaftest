<?php /* Smarty version Smarty-3.1.14, created on 2013-12-11 14:47:26
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\teacher\fee\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1615252a80a7ed51107-92690747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ba53a9f438404bc72a0ee440bcd3a634ec42ee0' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\teacher\\fee\\edit.html',
      1 => 1386742509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1615252a80a7ed51107-92690747',
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
  'unifunc' => 'content_52a80a7ed93799_49018729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a80a7ed93799_49018729')) {function content_52a80a7ed93799_49018729($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#text").formValidator({onshow:"请输入课程名称",onfocus:"课程名称长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"课程名称长度为2-20个字符"});
	$("#total").formValidator({onshow:"请输入总课次",onfocus:"总课次必须在1-100之间"}).inputValidator({type:"number",min:1,max:100,onerror:"总课次必须在1-100之间"});
	$("#fee").formValidator({onshow:"请输入薪酬",onfocus:"薪酬必须在1-5000之间"}).inputValidator({type:"number",min:1,max:5000,onerror:"薪酬必须在1-5000之间"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/teacher_fee/edit?teacher=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['teacher'];?>
" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="80" align="right">课程名称：</td> 
		<td><input type="text" name="text"  class="input-text" id="text" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
"  size=10>
		</td>
	</tr>
	<tr>
		<td width="80" align="right">总课次：</td> 
		<td><input type="text" name="total"  class="input-text" id="total" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['total'];?>
" size=5>
		</td>
	</tr>
	<tr>
		<td width="80" align="right">薪酬：</td> 
		<td><input type="text" name="fee"  class="input-text" id="fee" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['fee'];?>
"  size=5>元/课次
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