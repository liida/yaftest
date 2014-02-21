<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 15:17:20
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\vote\info.html" */ ?>
<?php /*%%SmartyHeaderCode:1189552749a3e716e07-49861241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc16e513201f10bd314d018df086f8276e6f3af' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\vote\\info.html',
      1 => 1383376527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189552749a3e716e07-49861241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52749a3e736204_44147652',
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
<?php if ($_valid && !is_callable('content_52749a3e736204_44147652')) {function content_52749a3e736204_44147652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<form name="myform" action="/student/vote/do" method="post" id="myform">
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