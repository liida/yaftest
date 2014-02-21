<?php /* Smarty version Smarty-3.1.14, created on 2013-12-05 18:19:48
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\total\teacher.html" */ ?>
<?php /*%%SmartyHeaderCode:180525278c4ea1db2b9-27852566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75ea2ba2bcbd86c39f43a81d8777c5bc90005fca' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\total\\teacher.html',
      1 => 1386238785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180525278c4ea1db2b9-27852566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278c4ea26f9d7_83991669',
  'variables' => 
  array (
    '_GET' => 0,
    'schoolCourses' => 0,
    'sorts' => 0,
    'teachers' => 0,
    'teacher' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278c4ea26f9d7_83991669')) {function content_5278c4ea26f9d7_83991669($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
			<input type="text" name="teacherName" class="input-text ufocus" id="teacherName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['teacherName'];?>
" def="老师名">
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
			<th>老师</th>
			<th>授课内容</th>
			<th><a class="link" href="javascript:dosort('event_nums')">课次数</a></th>
			<th><a class="link" href="javascript:dosort('classes')">课时数</a></th>
			<th>点评数</th>
			<th>回复数</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teachers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
?>
    <tr>
		<td align="left"><a href="javascript:teacherInfo(<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
,'<?php echo teacherName($_smarty_tpl->tpl_vars['teacher']->value['teacher']);?>
')" class="link"><?php echo imageUrl($_smarty_tpl->tpl_vars['teacher']->value['teacher'],1,30);?>
&nbsp;<?php echo teacherName($_smarty_tpl->tpl_vars['teacher']->value['teacher']);?>
</a></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['teacher']->value['courseName']){?><?php echo $_smarty_tpl->tpl_vars['teacher']->value['courseName'];?>
<?php }else{ ?>--<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['teacher']->value['event_nums']){?><?php echo $_smarty_tpl->tpl_vars['teacher']->value['event_nums'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['teacher']->value['classes']){?><?php echo $_smarty_tpl->tpl_vars['teacher']->value['classes'];?>
<?php }else{ ?>0<?php }?></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['comments'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['replies'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['teacher']->_loop) {
?>
<tr><td colspan=5>暂无记录</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>