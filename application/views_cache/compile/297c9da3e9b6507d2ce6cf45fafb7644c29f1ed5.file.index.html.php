<?php /* Smarty version Smarty-3.1.14, created on 2013-12-13 12:23:00
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\total\commentreply\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17963528591790f2269-94401403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '297c9da3e9b6507d2ce6cf45fafb7644c29f1ed5' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\total\\commentreply\\index.html',
      1 => 1386908031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17963528591790f2269-94401403',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5285917916c062_42980598',
  'variables' => 
  array (
    '_GET' => 0,
    'total' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5285917916c062_42980598')) {function content_5285917916c062_42980598($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
	<div class="content-menu ib-a blue line-x"> 
       	<a class="on" href="javascript:;"><em>点评回复</em></a><span>|</span>
        <a href="/admin/total_commentReply/day"><em>每日新增</em></a><span>|</span> 
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
			来源：<?php echo Html::selectAgent($_smarty_tpl->tpl_vars['_GET']->value['agent'],'agent','agent','来源');?>

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