<?php /* Smarty version Smarty-3.1.14, created on 2013-12-05 15:15:22
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\event\info.html" */ ?>
<?php /*%%SmartyHeaderCode:198285270e56a456b65-18697370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72d46a51ec67e4e9db69201dd3857c67ed841ed5' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\event\\info.html',
      1 => 1386227718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198285270e56a456b65-18697370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270e56a4d0961_02570809',
  'variables' => 
  array (
    'path' => 0,
    'event' => 0,
    'students' => 0,
    'student' => 0,
    '_GET' => 0,
    'pages' => 0,
    'others' => 0,
    'other' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270e56a4d0961_02570809')) {function content_5270e56a4d0961_02570809($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.jeditable.js"></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$('.remark').editable('/teacher/event/infoEdit', { 
		 name:'remark',
		 type      : 'text',
		 width     :120,
		 height    :18,
         cancel    : '取消',
         submit    : '确定'
	 });
	 
	 $('.event_color').click(function(){
	 	var color = $("#color").val();
	 	$.ajax({
	 		type:"post",
	 		url:"/teacher/event/infoEdit",
	 		data:"color="+color+"&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
"
	 	});
	 });
	 
	 $('.attendance').change(function(){ 	
	 	var attendance = $(this).val();
	 	var id = $(this).parent().children(".courseId").val();
	 	if(attendance && id){
		 	
		 }
	 });
	 
	 $('.attendanceStatus').click(function(){ 	
	 	var attendanceArea = $(this).parent('p').children('.attendanceArea');
	 	$(this).addClass('on');
	 	attendanceArea.show();
	 });
	 
	 $('.doattendance').click(function(){ 	
	 	var event = $("#eventId").val();
	 	var attendance=$(this).val();
	 	var student = $(this).attr('student');
	 	var id = $(this).attr('id');
	 	var param = 'event='+event+'&attendance='+attendance+'&datas['+event+']['+id+']='+student;
	 	var that = this;
	 	$.ajax({
	 		type:"post",
	 		url:"/teacher/attendance/do?act=3",
	 		data:param,
	 		success:function(data){
	 			if(data == 1){
				 	location.reload();
	 			}else{
	 				alert(data)
	 			}
	 		}
	 	});
	 	
	 });
	 
	 $('.eventtostudent').each(function(){
	 	var student = $(this).parent('p').parent('.checkArea').parent('ul');
	 	if($(this).attr("checked")){
	 		if(!student.hasClass("checked"))  student.addClass("checked");
	 	}else{
	 		if(student.hasClass("checked"))  student.removeClass("checked");
	 	}
	 });
	 $(".checkArea").click(function(){
	 	var checked = $(this).parent('ul').hasClass("checked");
	 	if(!checked){
	 		$(this).parent('ul').addClass("checked");
	 		$(this).children('p').children('.eventtostudent').attr("checked",true);
	 	}else{
	 		$(this).parent('ul').removeClass("checked");
	 		$(this).children('p').children('.eventtostudent').attr("checked",false);
	 	}
	 });
});
function comment(event,student){
	window.top.art.dialog({
		id:'comment',
		iframe:'/teacher/comment/do?act=1&event='+event+'&student='+student, 
		title:'点评', 
		width:'580', 
		height:'400',
		lock:true
	});
}

function pcomment(){
	var event = $("#eventId").val();
	var param = 'event='+event;
	$("input[name=id[]]").each(function(){
		if($(this).attr("checked")){
			param += '&id[]='+$(this).val();
		}
	});
	window.top.art.dialog({
		id:'comment',
		iframe:'/teacher/comment/do?act=2&'+param, 
		title:'点评', 
		width:'580', 
		height:'400',
		lock:true
	});
}

function pattendance(){
	var event = $("#eventId").val();
	var param = 'event='+event;
	$("input[name=id[]]").each(function(){
		if($(this).attr("checked")){
			param += '&id[]='+$(this).val();
		}
	});
	window.top.art.dialog({
		id:'attendance',
		iframe:'/teacher/attendance/do?act=2&'+param, 
		title:'考勤', 
		width:'300', 
		height:'200',
		lock:true
	});
}
//-->
</script>
<div class="pad_common">
<div class="common-form">
<div id="event_info">
<table width="60%" class="table_form contentWrap">
	<tr>
	<td colspan=2 width="200">课程名称：<a class="remark event_remark_ts" id="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['remark'];?>
</a></td> 
	</tr>
	<tr>
	<td width="200">日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;期：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%Y-%m-%d');?>
</td> 
	<td width="200">时&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%H');?>
：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%M');?>
&nbsp;至&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%H');?>
：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%M');?>
</td>
	</tr>
	<tr>
	<td colspan=2 width="200"><li style="float:left;">颜&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色：</li><?php echo Html::eventColor($_smarty_tpl->tpl_vars['event']->value['color'],'color');?>
</td> 
	</tr>
</table>
</div>
<div id="event_info_other">
	<div class="other_1">
		<div class="student">
		<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
		<ul>
			<div class="checkArea"><p style="display:none;"><input type="checkbox" name="id[]" class="eventtostudent" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['event'];?>
_<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
"/></p></div>
			<li>
				<p class="avatar"><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['student'],2,50);?>
</p>
				<p class="name"><?php echo studentName($_smarty_tpl->tpl_vars['student']->value['student']);?>
</p>
				<p class="attendance">
					<span class="attendanceStatus"><?php if ($_smarty_tpl->tpl_vars['student']->value['attended']){?><?php if ($_smarty_tpl->tpl_vars['student']->value['attend']){?>出勤<?php }elseif($_smarty_tpl->tpl_vars['student']->value['absence']){?>缺勤<?php }elseif($_smarty_tpl->tpl_vars['student']->value['leave']){?>请假<?php }?><?php }else{ ?>未考勤<?php }?></span>
					<span class="attendanceArea" style="display:none;">
						<span><input type="radio" name="attendance_<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" class="doattendance" id="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
" student="<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['student']->value['attend']){?>checked=checked<?php }?>>&nbsp;&nbsp;出勤</span>
						<span><input type="radio" name="attendance_<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" class="doattendance" id="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
" student="<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" value="2" <?php if ($_smarty_tpl->tpl_vars['student']->value['absence']){?>checked=checked<?php }?>>&nbsp;&nbsp;缺勤</span>
						<span><input type="radio" name="attendance_<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" class="doattendance" id="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
" student="<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" value="3" <?php if ($_smarty_tpl->tpl_vars['student']->value['leave']){?>checked=checked<?php }?>>&nbsp;&nbsp;请假</span>
					</span>
				</p>
			</li>
			<li><p class="comment">点评：<?php if ($_smarty_tpl->tpl_vars['student']->value['comment']){?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['student']->value['comment'],40,"...",true);?>
【<span><a href="/teacher/comment/info?id=<?php echo $_smarty_tpl->tpl_vars['student']->value['event'];?>
&student=<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
">详细</a></span>】<?php }else{ ?><span><a href="javascript:comment(<?php echo $_smarty_tpl->tpl_vars['student']->value['event'];?>
,<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
)">未点评</a><?php }?></p></li>
		</ul>
		<?php } ?>
		<div class="bk15"></div>
		<input type="hidden" name="event" id="eventId" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['id'];?>
">
	    <input name="dosubmit" type="submit" value="批量点评" class="button"  onclick="pcomment()">
	    <input name="dosubmit" type="submit" value="批量考勤" class="button"  onclick="pattendance()">
		</div>
		<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
	</div>
	<div class="other_2">
		<div class="events">
			<ul>
				<li><span>相关课程</span></li>
				<?php  $_smarty_tpl->tpl_vars['other'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['other']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['others']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['other']->key => $_smarty_tpl->tpl_vars['other']->value){
$_smarty_tpl->tpl_vars['other']->_loop = true;
?>
				<li class="event"><span><a href="/teacher/event/info?id=<?php echo $_smarty_tpl->tpl_vars['other']->value['event'];?>
"><?php echo $_smarty_tpl->tpl_vars['other']->value['remark'];?>
</a></span><span class="ccc" style="font-size:12px"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['other']->value['start_date'],'%Y-%m-%d');?>
&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['other']->value['start_date'],'%H:%M');?>
&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['other']->value['end_date'],'%H:%M');?>
</span></li>
				<?php }
if (!$_smarty_tpl->tpl_vars['other']->_loop) {
?>
				<li><span>暂无</span></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>