<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 18:34:24
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\total\student.html" */ ?>
<?php /*%%SmartyHeaderCode:93675278c4e95a3c08-00487336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b983afe83600d7ff28b217bc669c002230e4928' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\total\\student.html',
      1 => 1388054019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93675278c4e95a3c08-00487336',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278c4e966afb3_68366603',
  'variables' => 
  array (
    '_GET' => 0,
    'schoolCourses' => 0,
    'sorts' => 0,
    'students' => 0,
    'student' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278c4e966afb3_68366603')) {function content_5278c4e966afb3_68366603($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript">
function dosort(type){
	var sorts = $("#sorts").val();
	if(sorts.indexOf(type) >= 0){
		if(sorts.indexOf('desc') >= 0){
			sorts = type+' asc';
		}else{
			sorts = type+' desc';
		}
	}else{
		sorts = type+' desc';
	}
	$("#sorts").val(sorts);
	$("#searchform").submit();
}
</script>
<div class="pad_common">
<p class="content_tip">注:以下数据为截止至<?php echo date('Y-m-d',strtotime('-1 day'));?>
为止的统计结果</p>
<form method="get" action="" name="searchform"  id="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			<?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,$_smarty_tpl->tpl_vars['_GET']->value['course'],'course','course','授课内容');?>

			<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['_GET']->value['start_date'],'起始日期');?>

			<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['_GET']->value['end_date'],'终止日期');?>

			<input type="hidden" name="sorts" class="input-text" id="sorts" value="<?php echo $_smarty_tpl->tpl_vars['sorts']->value;?>
">
			<input type="submit" value="搜索" class="button search" name="search">
			<input type="submit" value="导出" class="button search" name="export">
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
			<th>学生</th>
			<th>授课内容</th>
			<th><a class="link" href="javascript:dosort('event_nums')">课次数</a></th>
			<th><a class="link" href="javascript:dosort('classes')">课时数</a></th>
			<th><a class="link" href="javascript:dosort('attend')">出勤数</a></th>
			<th><a class="link" href="javascript:dosort('absence')">缺勤数</a></th>
			<th><a class="link" href="javascript:dosort('`leave`')">请假数</a></th>
			<th>未考勤数</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <tr>
		<td align="left"><a href="javascript:studentInfo(<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
,'<?php echo studentName($_smarty_tpl->tpl_vars['student']->value['student']);?>
')" class="link"><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['student'],2,30);?>
&nbsp;<?php echo studentName($_smarty_tpl->tpl_vars['student']->value['student']);?>
</a></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['courseName']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['courseName'];?>
<?php }else{ ?>--<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['event_nums']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['event_nums'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['classes']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['classes'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['attend']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['attend'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['absence']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['absence'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['leave']){?><?php echo $_smarty_tpl->tpl_vars['student']->value['leave'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php if (($_smarty_tpl->tpl_vars['student']->value['event_nums']-$_smarty_tpl->tpl_vars['student']->value['attend']-$_smarty_tpl->tpl_vars['student']->value['absence']-$_smarty_tpl->tpl_vars['student']->value['leave'])>0){?><p class="red"><?php echo $_smarty_tpl->tpl_vars['student']->value['event_nums']-$_smarty_tpl->tpl_vars['student']->value['attend']-$_smarty_tpl->tpl_vars['student']->value['absence']-$_smarty_tpl->tpl_vars['student']->value['leave'];?>
</p><?php }else{ ?>0<?php }?></td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>
<tr><td colspan=7>暂无记录</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>