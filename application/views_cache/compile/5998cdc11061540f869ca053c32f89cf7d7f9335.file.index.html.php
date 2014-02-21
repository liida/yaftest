<?php /* Smarty version Smarty-3.1.14, created on 2013-12-05 15:17:59
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\attendance\index.html" */ ?>
<?php /*%%SmartyHeaderCode:140825270b1fdda3213-98549223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5998cdc11061540f869ca053c32f89cf7d7f9335' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\attendance\\index.html',
      1 => 1386227876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140825270b1fdda3213-98549223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270b1fde96e12_13180897',
  'variables' => 
  array (
    '_GET' => 0,
    'events' => 0,
    'event' => 0,
    'attend' => 0,
    'absence' => 0,
    'leave' => 0,
    'attended' => 0,
    'unattended' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270b1fde96e12_13180897')) {function content_5270b1fde96e12_13180897($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="remark" class="input-text ufocus" id="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['remark'];?>
" def="课程名称">
			<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['_GET']->value['start_date'],'起始日期');?>

			<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['_GET']->value['end_date'],'终止日期');?>

			<?php echo Html::selectAttendances($_smarty_tpl->tpl_vars['_GET']->value['attendance'],'attendance','attendance','出勤状态');?>

			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
	<input type="hidden" name="pc_hash" value="bLHaEA">
</form>
<div class="table-list">
<table width="100%" cellspacing="0" >
	<thead>
		<tr>
			<th>课程名称</th>
			<th>上课日期</th>
			<th>上课时间</th>
			<th>上课老师</th>
			<th>状态</th>
		</tr>
	</thead>
<tbody>
<?php $_smarty_tpl->tpl_vars['attend'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['absence'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['leave'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['attended'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['unattended'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <tr>
		<td align="center"><a class="link" href="/student/event/info?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['remark'];?>
</a></td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%Y-%m-%d');?>
<?php if ($_smarty_tpl->tpl_vars['event']->value['is_loop']){?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%Y-%m-%d');?>
<?php }?></td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%H:%M');?>
至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%H:%M');?>
</td>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['event']->value['teacher'],1,30);?>
&nbsp;<?php echo teacherName($_smarty_tpl->tpl_vars['event']->value['teacher']);?>
</td>
		<td align="center">		
			<?php if ($_smarty_tpl->tpl_vars['event']->value['attended']){?>
			<?php $_smarty_tpl->tpl_vars['attend'] = new Smarty_variable($_smarty_tpl->tpl_vars['attend']->value+$_smarty_tpl->tpl_vars['event']->value['attend'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['absence'] = new Smarty_variable($_smarty_tpl->tpl_vars['absence']->value+$_smarty_tpl->tpl_vars['event']->value['absence'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['leave'] = new Smarty_variable($_smarty_tpl->tpl_vars['leave']->value+$_smarty_tpl->tpl_vars['event']->value['leave'], null, 0);?>
			<?php $_smarty_tpl->tpl_vars['attended'] = new Smarty_variable($_smarty_tpl->tpl_vars['attended']->value+1, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['event']->value['attend']==1){?><span>出勤</span><?php }elseif($_smarty_tpl->tpl_vars['event']->value['absence']==1){?><span class="yellow">缺勤</span><?php }elseif($_smarty_tpl->tpl_vars['event']->value['leave']==1){?><span class="red">请假</span><?php }?>
			<?php }else{ ?>
			<?php $_smarty_tpl->tpl_vars['unattended'] = new Smarty_variable($_smarty_tpl->tpl_vars['unattended']->value+1, null, 0);?>
			<span class="red">未考勤</span>
			<?php }?>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
<tr><td colspan=6>暂无课程数据</td></tr>
<?php } ?>
</tbody>
</table>
<div style="margin-top:2px;">
已考勤(&nbsp;出勤：<span class="yellow"><?php echo $_smarty_tpl->tpl_vars['attend']->value;?>
</span>&nbsp;缺勤：<span class="yellow"><?php echo $_smarty_tpl->tpl_vars['absence']->value;?>
</span>&nbsp;请假：<span class="yellow"><?php echo $_smarty_tpl->tpl_vars['leave']->value;?>
</span>&nbsp;)&nbsp;未考勤(&nbsp;<span class="red"><?php echo $_smarty_tpl->tpl_vars['unattended']->value;?>
</span>&nbsp;)
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>