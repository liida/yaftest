<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 11:49:14
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\total\event.html" */ ?>
<?php /*%%SmartyHeaderCode:282695278c4eb696669-27331441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce7bea96603ddc01106be173b3d22e3e90a7d28c' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\total\\event.html',
      1 => 1385101501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282695278c4eb696669-27331441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278c4eb7b3923_13808980',
  'variables' => 
  array (
    'schoolCourses' => 0,
    '_GET' => 0,
    'teachers' => 0,
    'events' => 0,
    'event' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278c4eb7b3923_13808980')) {function content_5278c4eb7b3923_13808980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<p class="content_tip">注:以下数据为截止至<?php echo date('Y-m-d',strtotime('-1 day'));?>
为止的统计结果</p>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,$_smarty_tpl->tpl_vars['_GET']->value['course'],'course','course','授课内容');?>

			<input type="text" name="text" class="input-text ufocus" id="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['text'];?>
" def="课程名称">
			<?php echo Html::select($_smarty_tpl->tpl_vars['teachers']->value,$_smarty_tpl->tpl_vars['_GET']->value['teacher'],'teacher','teacher','上课老师');?>

			<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['_GET']->value['start_date'],'起始日期');?>

			<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['_GET']->value['end_date'],'终止日期');?>

			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
</form>
<div class="table-list">
<table width="100%" cellspacing="0" >
	<thead>
		<tr>
			<th>授课内容</th>
			<th>课程名称</th>
			<th>上课日期</th>
			<th>上课时间</th>
			<th>上课老师</th>
			<th>学生数</th>
			<th>出勤</th>
			<th>缺勤</th>
			<th>请假</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <tr>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['courseName'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>
</td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%Y-%m-%d');?>
<?php if ($_smarty_tpl->tpl_vars['event']->value['is_loop']){?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%Y-%m-%d');?>
<?php }?></td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%H:%M');?>
~<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%H:%M');?>
</td>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['event']->value['teacher'],1,30);?>
&nbsp;<?php echo teacherName($_smarty_tpl->tpl_vars['event']->value['teacher']);?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['studentNum'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['attend'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['leave'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['absence'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
<tr><td colspan=9>暂无记录</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>