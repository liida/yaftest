<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 14:32:55
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\total\login\day.html" */ ?>
<?php /*%%SmartyHeaderCode:19237528494c792a627-04752622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c86df58c06addd715dda978febf66b8ce8073dc' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\total\\login\\day.html',
      1 => 1386924736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19237528494c792a627-04752622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528494c7978826_96766468',
  'variables' => 
  array (
    'start_date' => 0,
    'end_date' => 0,
    'total' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528494c7978826_96766468')) {function content_528494c7978826_96766468($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
	<div class="content-menu ib-a blue line-x"> 
        <a class="on" href="javascript:;"><em>每日登录</em></a><span>|</span> 
        <a href="/admin/total_login/detail"><em>明细</em></a>
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
			<th align="left">日期</th>
			<th align="left">用户总数</th>
			<th align="left">网站</th>
			<th align="left">手机网页版</th>
			<th align="left">android</th>
			<th align="left">ios</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['total']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['login_date'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['data']->value['disnums'];?>
（<?php echo $_smarty_tpl->tpl_vars['data']->value['nums'];?>
次）</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['detail'][0]){?><?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][0][1];?>
（<?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][0][0];?>
次）<?php }else{ ?>0<?php }?></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['detail'][1]){?><?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][1][1];?>
（<?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][1][0];?>
次）<?php }else{ ?>0<?php }?></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['detail'][2]){?><?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][2][1];?>
（<?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][2][0];?>
次）<?php }else{ ?>0<?php }?></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['data']->value['detail'][3]){?><?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][3][1];?>
（<?php echo $_smarty_tpl->tpl_vars['data']->value['detail'][3][0];?>
次）<?php }else{ ?>0<?php }?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>