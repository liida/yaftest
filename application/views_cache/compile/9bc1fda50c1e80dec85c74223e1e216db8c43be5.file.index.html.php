<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 13:12:39
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\comment\index.html" */ ?>
<?php /*%%SmartyHeaderCode:127252709f56a9ee48-62478072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc1fda50c1e80dec85c74223e1e216db8c43be5' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\comment\\index.html',
      1 => 1385458105,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127252709f56a9ee48-62478072',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52709f56d1ba67_23005541',
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
<?php if ($_valid && !is_callable('content_52709f56d1ba67_23005541')) {function content_52709f56d1ba67_23005541($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
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
</script>
<div class="pad_common">
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']!="list"){?>
<p class="content_tip">注:以下数据为截止至<?php echo date('Y-m-d');?>
为止的点评</p>
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
			<?php echo Html::selectCommented($_smarty_tpl->tpl_vars['_GET']->value['commented'],'commented','commented','点评状态');?>

			<?php }else{ ?>
			<?php echo Html::selectCommented($_smarty_tpl->tpl_vars['_GET']->value['commented'],'commented','commented','点评状态');?>

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
<form name="myform" action="/school/comment/do?act=2" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="id[]"/></th>
			<th align="left">学生名</th>
			<th>点评</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_data']->key => $_smarty_tpl->tpl_vars['_data']->value){
$_smarty_tpl->tpl_vars['_data']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['_data']->value['event'];?>
_<?php echo $_smarty_tpl->tpl_vars['_data']->value['student'];?>
" name="id[]"/></td>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['_data']->value['student'],2,30);?>
&nbsp;<?php echo studentName($_smarty_tpl->tpl_vars['_data']->value['student']);?>
</td>
		<td align="center">		
			<?php if (!$_smarty_tpl->tpl_vars['_data']->value['commented']){?>
			<a href="javascript:comment(<?php echo $_smarty_tpl->tpl_vars['_data']->value['event'];?>
,<?php echo $_smarty_tpl->tpl_vars['_data']->value['student'];?>
,'<?php echo $_smarty_tpl->tpl_vars['_data']->value['remark'];?>
','<?php echo studentName($_smarty_tpl->tpl_vars['_data']->value['student']);?>
')" class="red">[未点评]</a>
			<?php }else{ ?>
			<a href="javascript:showcomment(<?php echo $_smarty_tpl->tpl_vars['_data']->value['event'];?>
,<?php echo $_smarty_tpl->tpl_vars['_data']->value['student'];?>
,'<?php echo $_smarty_tpl->tpl_vars['_data']->value['remark'];?>
','<?php echo studentName($_smarty_tpl->tpl_vars['_data']->value['student']);?>
')">[已点评]</a>
			<?php }?>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['_data']->_loop) {
?>
<tr><td colspan=6>暂无点评数据</td></tr>
<?php } ?>
</tbody>
</table>
 <div class="bk15"></div>
 	<input type="hidden" name="event" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['event'];?>
">
    <input name="dosubmit" type="submit" value="批量点评" class="button">
</form>
<script language="JavaScript">
<!--
function comment(event,student,courseName,studentName){
	window.top.art.dialog({
		id:'comment',
		iframe:'/school/comment/do?act=1&event='+event+'&student='+student, 
		title:'点评《'+courseName+'》-'+studentName, 
		width:'450', 
		height:'300', 
		lock:true
	});
}
function showcomment(event,student,courseName,studentName){
	window.top.art.dialog({
		id:'showcomment',
		iframe:'/school/comment/info?event='+event+'&student='+student, 
		title:'点评详情《'+courseName+'》-'+studentName, 
		width:'700', 
		height:'500', 
		lock:true
	});
}
//-->
</script>
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
			<a href="javascript:list(<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['event']->value['courseName'];?>
')"><?php if ($_smarty_tpl->tpl_vars['event']->value['commented']){?><span>[已点评]</span><?php }else{ ?><span class="red">[未点评]</span><?php }?></a>
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
function list(id,name){
	window.top.art.dialog({
		id:'list',
		iframe:'/school/comment/index?act=list&event='+id, 
		title:name, 
		width:'800', 
		height:'420', 
		lock:true
	});
}
//-->
</script>
<?php }?>
</div>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>