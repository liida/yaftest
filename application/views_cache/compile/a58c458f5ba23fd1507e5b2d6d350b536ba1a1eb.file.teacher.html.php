<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 11:30:22
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\import\teacher.html" */ ?>
<?php /*%%SmartyHeaderCode:28362528dca25d955e7-33121382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58c458f5ba23fd1507e5b2d6d350b536ba1a1eb' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\import\\teacher.html',
      1 => 1388374219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28362528dca25d955e7-33121382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528dca25db0b66_77577141',
  'variables' => 
  array (
    'import' => 0,
    'teachers' => 0,
    'teacher' => 0,
    'notify' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528dca25db0b66_77577141')) {function content_528dca25db0b66_77577141($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if (!$_smarty_tpl->tpl_vars['import']->value){?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"长度为6-16个字符"})
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/import/teacher" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right">导入老师</td> 
	<td>
	<input id="upfile" name="upfile" type="file">
	</td>
	</tr>
	<tr>
	<td width=120 align="right">密码</td> 
	<td>
	<input name="password" id="password" type="password" class="input-text" value=""/>
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
<?php }else{ ?>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"长度为6-16个字符"})
});
//-->
</script>
<div class="pad_common">
<div class="subnav">
</div>
<div class="table-list">

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th>老师名</th>
			<th>手机号</th>
			<th>地址</th>
			<th></th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['teachers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['teacher']->key;
?>
    <tr>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['account'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['address'];?>
</td>
		<td align="center"><a href="javascript:showDetail(<?php echo $_smarty_tpl->tpl_vars['notify']->value['id'];?>
)" class="link">[查看详情]</a></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>