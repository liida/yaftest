<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 18:07:31
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\course\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2791252bbffe3173845-71477961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4a17bc57fe0f37b8aa7c24c97e03b82dcc12f1' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\course\\edit.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2791252bbffe3173845-71477961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ptype' => 0,
    'type' => 0,
    'courseInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbffe32040e3_62905512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbffe32040e3_62905512')) {function content_52bbffe32040e3_62905512($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form name="myform" action="/school/course/edit" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width=50 align="right">分类：</td> 
		<td><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['ptype']->value;?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo Html::selectCourseType($_tmp1,$_tmp2,'type','title',$_smarty_tpl->tpl_vars['courseInfo']->value['title']);?>

		</td>
	</tr>
	<tr>
		<td width=50 align="right"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['id'];?>
"/></td> 
		<td><input name="dosubmit" type="submit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>