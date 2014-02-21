<?php /* Smarty version Smarty-3.1.14, created on 2013-11-06 16:55:24
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\vote\info.html" */ ?>
<?php /*%%SmartyHeaderCode:199495278b07fe1c318-00165125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd88af68adfbdc6383a730fb8b8123bd1b2d4117' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\vote\\info.html',
      1 => 1383728120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199495278b07fe1c318-00165125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278b07ff395e6_51305716',
  'variables' => 
  array (
    '_GET' => 0,
    'path' => 0,
    'data' => 0,
    'vote' => 0,
    'optionDatas' => 0,
    'voteRecords' => 0,
    'voteRecord' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b07ff395e6_51305716')) {function content_5278b07ff395e6_51305716($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']==1){?>
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

<div class="common-form">
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
</div>
<?php }elseif($_smarty_tpl->tpl_vars['_GET']->value['type']==2){?>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
">
			<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['type'];?>
">
			<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['_GET']->value['option'];?>
<?php $_tmp1=ob_get_clean();?><?php echo Html::select($_smarty_tpl->tpl_vars['optionDatas']->value,$_tmp1,'option','option','选项');?>

			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
	<input type="hidden" name="pc_hash" value="bLHaEA">
</form>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">用户</th>
			<th align="left">选项</th>
			<th align="left">投票时间</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['voteRecord'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voteRecord']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['voteRecords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voteRecord']->key => $_smarty_tpl->tpl_vars['voteRecord']->value){
$_smarty_tpl->tpl_vars['voteRecord']->_loop = true;
?>
    <tr>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['voteRecord']->value['character']=="teacher"){?><?php echo teacherName($_smarty_tpl->tpl_vars['voteRecord']->value['user']);?>
(老师)<?php }elseif($_smarty_tpl->tpl_vars['voteRecord']->value['character']=="student"){?><?php echo studentName($_smarty_tpl->tpl_vars['voteRecord']->value['student']);?>
<?php echo relation($_smarty_tpl->tpl_vars['voteRecord']->value['user'],$_smarty_tpl->tpl_vars['voteRecord']->value['student']);?>
<?php }elseif($_smarty_tpl->tpl_vars['voteRecord']->value['character']=="user"){?>{userName($voteRecord.user)}}<?php }?></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['optionDatas']->value[$_smarty_tpl->tpl_vars['voteRecord']->value['option']];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['voteRecord']->value['create_time'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['voteRecord']->_loop) {
?>
<tr><td colspan=4>暂无投票记录</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>