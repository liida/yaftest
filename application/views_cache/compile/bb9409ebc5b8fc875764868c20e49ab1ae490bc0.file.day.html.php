<?php /* Smarty version Smarty-3.1.14, created on 2013-11-15 11:49:16
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\total\commentreply\day.html" */ ?>
<?php /*%%SmartyHeaderCode:15393528591940e4453-70690483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb9409ebc5b8fc875764868c20e49ab1ae490bc0' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\total\\commentreply\\day.html',
      1 => 1384487333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15393528591940e4453-70690483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5285919419b163_56608565',
  'variables' => 
  array (
    'start_date' => 0,
    'end_date' => 0,
    'agent' => 0,
    'total' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5285919419b163_56608565')) {function content_5285919419b163_56608565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
	<div class="content-menu ib-a blue line-x"> 
       	<a href="/admin/total_commentReply/index"><em>点评回复</em></a><span>|</span>
        <a class="on" href="javascript:;"><em>每日新增</em></a><span>|</span> 
        <a href="/admin/total_commentReply/detail"><em>明细</em></a> 
    </div>
</div>
<div class="pad-lr-10">
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			开始日期：<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['start_date']->value);?>
&nbsp;&nbsp;结束日期：<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['end_date']->value);?>

			来源：<?php echo Html::selectAgent($_smarty_tpl->tpl_vars['agent']->value,'agent','agent','');?>

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
			<th align="left">点评回复总数</th>
			<th align="left">日期</th>
			<th align="left">机构</th>
			<th align="left">来源</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['total']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['nums'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_date'];?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['school']){?><?php echo schoolName($_smarty_tpl->tpl_vars['data']->value['school']);?>
<?php }else{ ?>无<?php }?></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['agent']==0){?>网站<?php }elseif($_smarty_tpl->tpl_vars['data']->value['agent']==1){?>手机网页版<?php }elseif($_smarty_tpl->tpl_vars['data']->value['agent']==2){?>android<?php }elseif($_smarty_tpl->tpl_vars['data']->value['agent']==3){?>ios<?php }?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>