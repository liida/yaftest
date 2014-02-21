<?php /* Smarty version Smarty-3.1.14, created on 2013-12-13 12:00:27
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\total\login\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2639452aa820e8cea92-86092438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a57941900e31b736effe880bd007fc577fd229' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\total\\login\\detail.html',
      1 => 1386907203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2639452aa820e8cea92-86092438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52aa820ea3c499_80545047',
  'variables' => 
  array (
    'start_date' => 0,
    'end_date' => 0,
    '_GET' => 0,
    'datas' => 0,
    'data' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52aa820ea3c499_80545047')) {function content_52aa820ea3c499_80545047($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
	<div class="content-menu ib-a blue line-x"> 
       	<a href="/admin/total_login/day"><em>每日登录</em></a><span>|</span> 
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
			<th align="left">用户</th>
			<th align="left">账号</th>
			<th align="left">登录时间</th>
			<th align="left">登录IP</th>
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
		<td align="left"><?php echo userName($_smarty_tpl->tpl_vars['data']->value['user']);?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['account'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['create_time'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['ip'];?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['agent']==0){?>网站<?php }elseif($_smarty_tpl->tpl_vars['data']->value['agent']==1){?>手机网页版<?php }elseif($_smarty_tpl->tpl_vars['data']->value['agent']==2){?>android<?php }elseif($_smarty_tpl->tpl_vars['data']->value['agent']==3){?>ios<?php }?></td>
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