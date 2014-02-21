<?php /* Smarty version Smarty-3.1.14, created on 2013-11-15 11:46:20
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\total\blog\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:3527528596b9698187-59040148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c163e1270a554b7dbf40891f0e199db95a49623' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\total\\blog\\detail.html',
      1 => 1384487140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3527528596b9698187-59040148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528596b974ee84_28563426',
  'variables' => 
  array (
    'start_date' => 0,
    'end_date' => 0,
    'from' => 0,
    'datas' => 0,
    'data' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528596b974ee84_28563426')) {function content_528596b974ee84_28563426($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
	<div class="content-menu ib-a blue line-x"> 
       	<a href="/admin/total_blog/index"><em>呼啦圈</em></a><span>|</span>
        <a href="/admin/total_blog/day"><em>每日新增</em></a><span>|</span> 
        <a class="on" href="javascript:;"><em>明细</em></a> 
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

			来源：<?php echo Html::selectAgent($_smarty_tpl->tpl_vars['from']->value,'from','from','');?>

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
			<th align="left">内容</th>
			<th align="left">发布时间</th>
			<th align="left">来源</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo userName($_smarty_tpl->tpl_vars['data']->value['uid']);?>
</td>
		<td align="left" title="<?php echo $_smarty_tpl->tpl_vars['data']->value['content'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['data']->value['content'],30,"...",true);?>
</td>
		<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['publish_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['from']==0){?>网站<?php }elseif($_smarty_tpl->tpl_vars['data']->value['from']==1){?>手机网页版<?php }elseif($_smarty_tpl->tpl_vars['data']->value['from']==2){?>android<?php }elseif($_smarty_tpl->tpl_vars['data']->value['from']==3){?>ios<?php }?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>