<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 15:16:20
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\vote\info.html" */ ?>
<?php /*%%SmartyHeaderCode:247765274a44aecc130-42594012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f8add6334dad239a95c371d36142ebdde1e08ba' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\vote\\info.html',
      1 => 1383376571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247765274a44aecc130-42594012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274a44af1a345_84568019',
  'variables' => 
  array (
    'voted' => 0,
    'path' => 0,
    'data' => 0,
    'vote' => 0,
    'options' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274a44af1a345_84568019')) {function content_5274a44af1a345_84568019($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="common-form">
<?php if ($_smarty_tpl->tpl_vars['voted']->value==1){?>
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
vote/vote.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
vote/vote.js" language="javascript" type="text/javascript" ></script>
<style type="text/css">
.vote_title{width:100px;}
</style>
<script type="text/javascript">
<!--
$(function(){
	$("#vote_result").study_vote(<?php echo $_smarty_tpl->tpl_vars['data']->value;?>
);
});
//-->
</script>

<table width="100%" class="table_form">
	<tr>
		<td width="120" align="right">标题：</td> 
		<td><?php echo $_smarty_tpl->tpl_vars['vote']->value['title'];?>

		</td>
	</tr>
	<tr>
		<td width="120" align="right">投票结果：</td> 
		<td id="vote_result">
		</td>
	</tr>
</table>
<?php }else{ ?>
<form name="myform" action="/teacher/vote/do" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['vote']->value['title'];?>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
"/></td>
	</tr>
	<tr>
		<td>
			<ul class="vote_option">
			<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
			<li><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
" name="option[]">&nbsp;<?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
</li>
			<?php } ?>
			</ul>
		</td>
	</tr>
	<tr>
		<td><input name="dosubmit" type="submit" id="dosubmit" value="提交" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
<?php }?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>