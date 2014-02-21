<?php /* Smarty version Smarty-3.1.14, created on 2013-12-05 15:11:13
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\attendance\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1749952709f4ea37899-83460472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ace4f2e36ed24b5f29e1b3f3bf9acc94bacc05dd' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\attendance\\index.html',
      1 => 1386227469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1749952709f4ea37899-83460472',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52709f4eca4aa0_71487176',
  'variables' => 
  array (
    '_GET' => 0,
    'schoolCourses' => 0,
    'teachers' => 0,
    'sorts' => 0,
    'data' => 0,
    '_data' => 0,
    'events' => 0,
    'event' => 0,
    'teacher' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52709f4eca4aa0_71487176')) {function content_52709f4eca4aa0_71487176($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
function doattendance(type){
	if(type == 1){
		$('input[value="attend"]').attr("checked",true);
	}else if(type == 2){
		$('input[value="absence"]').attr("checked",true);
	}else if(type == 3){
		$('input[value="leave"]').attr("checked",true);
	}else{
		alert('参数错误！');
		return false;
	}
	
	document.myform.action='/school/attendance/do?attendance='+type;
	
}
</script>
<div class="pad_common">
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']!="list"){?>
<p class="content_tip">注:以下数据为截止至<?php echo date('Y-m-d');?>
为止的考勤</p>
<?php }?>
<form method="get" action="" name="searchform" id="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['act'];?>
">
			<input type="hidden" name="event" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['event'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']=="list"){?>
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			<?php echo Html::selectAttendances($_smarty_tpl->tpl_vars['_GET']->value['attendance'],'attendance','attendance','出勤状态');?>

			<?php }else{ ?>
			<?php echo Html::selectAttended($_smarty_tpl->tpl_vars['_GET']->value['attended'],'attended','attended','考勤状态');?>

			<?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,$_smarty_tpl->tpl_vars['_GET']->value['course'],'course','course','授课内容');?>

			<input type="text" name="text" class="input-text ufocus" id="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['text'];?>
" def="课程名称">
			<?php echo Html::select($_smarty_tpl->tpl_vars['teachers']->value,$_smarty_tpl->tpl_vars['_GET']->value['teacher'],'teacher','teacher','老师');?>

			<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['_GET']->value['start_date'],'起始日期');?>

			<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['_GET']->value['end_date'],'终止日期');?>

			<input type="hidden" name="sorts" class="input-text" id="sorts" value="<?php echo $_smarty_tpl->tpl_vars['sorts']->value;?>
">
			<?php }?>
			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
	<input type="hidden" name="pc_hash" value="bLHaEA">
</form>
<div class="table-list">
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']=="list"){?>
<form name="myform" action="/school/attendance/do" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">学生名</th>
			<th>出勤</th>
			<th>缺勤</th>
			<th>请假</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_data']->key => $_smarty_tpl->tpl_vars['_data']->value){
$_smarty_tpl->tpl_vars['_data']->_loop = true;
?>
    <tr <?php if (!$_smarty_tpl->tpl_vars['_data']->value['attended']){?>class="red"<?php }?>>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['_data']->value['student'],2,30);?>
&nbsp;<?php echo studentName($_smarty_tpl->tpl_vars['_data']->value['student']);?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_data']->value['id'];?>
" name="id[]"/></td>
		<td align="center"><input type="radio" name="attendance[<?php echo $_smarty_tpl->tpl_vars['_data']->value['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['_data']->value['attend']==1){?>checked=checked<?php }?> value="attend">&nbsp;出勤&nbsp;</td>
		<td align="center"><input type="radio" name="attendance[<?php echo $_smarty_tpl->tpl_vars['_data']->value['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['_data']->value['absence']==1){?>checked=checked<?php }?> value="absence">&nbsp;缺勤&nbsp;</td>
		<td align="center"><input type="radio" name="attendance[<?php echo $_smarty_tpl->tpl_vars['_data']->value['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['_data']->value['leave']==1){?>checked=checked<?php }?> value="leave">&nbsp;请假&nbsp;</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['_data']->_loop) {
?>
<tr><td colspan=7>暂无考勤数据</td></tr>
<?php } ?>
</tbody>
</table>
    <div class="bk15"></div>
    <input type="hidden" name="isStudentInfo" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['isStudentInfo'];?>
">
    <input type="hidden" name="event" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['event'];?>
">
    <button class="button" onclick="doattendance(1);return false;">全部出勤</button>
    <button class="button" onclick="doattendance(2);return false;">全部缺勤</button>
    <button class="button" onclick="doattendance(3);return false;">全部请假</button>
    <input name="dosubmit" type="submit" value="提交" class="button" style="float:right;">
</form>
<?php }else{ ?>
<table width="100%" cellspacing="0" >
	<thead>
		<tr>
			<th><a class="link" href="javascript:dosort('course')">授课内容</a></th>
			<th><a class="link" href="javascript:dosort('text')">课程名称</a></th>
			<th><a class="link" href="javascript:dosort('start_date')">上课日期</a></th>
			<th><a class="link" href="javascript:dosort('start_date')">上课时间</a></th>
			<th><a class="link" href="javascript:dosort('teacher')">上课老师</a></th>
			<th>操作</th>
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
至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%H:%M');?>
</td>
		<td align="left">
		<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['event']->value['teacher']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
?>
		<?php echo imageUrl($_smarty_tpl->tpl_vars['teacher']->value,1,30);?>
&nbsp;<?php echo teacherName($_smarty_tpl->tpl_vars['teacher']->value);?>

		<?php } ?>
		</td>
		<td align="center">		
			<a href="javascript:attendance(<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['event']->value['courseName'];?>
')"><?php if ($_smarty_tpl->tpl_vars['event']->value['attended']){?><span>[已考勤]</span><?php }else{ ?><span class="red">[未考勤]</span><?php }?></a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
<tr><td colspan=6>暂无课程数据</td></tr>
<?php } ?>
</tbody>
</table>
<script language="JavaScript">
<!--
function attendance(id,name){
	window.top.art.dialog({
		id:'attendance',
		iframe:'/school/attendance/index?act=list&event='+id, 
		title:name, 
		width:'450', 
		height:'420', 
		lock:true
	});
}
//-->
</script>
<?php }?>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>