<?php /* Smarty version Smarty-3.1.14, created on 2014-01-10 13:54:54
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\event\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:10228527099a7e999e6-17787084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c59abd73f11619569ea646bb8cd2449b95800038' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\event\\edit.html',
      1 => 1389176260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10228527099a7e999e6-17787084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527099a8108fc1_14587962',
  'variables' => 
  array (
    'schoolCourses' => 0,
    'eventInfo' => 0,
    'school' => 0,
    'event' => 0,
    'courseTeachers' => 0,
    'courseStudents' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527099a8108fc1_14587962')) {function content_527099a8108fc1_14587962($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
function startDateWeek(type){
	//日期到周
	if(type == 1){
		var start_date = $("#start_date").val();
		if(!start_date){
			return false;
		}
		start_date = new Date(Date.parse(start_date.replace(/-/g, "/")));
		var week = start_date.getDay();
		$("#week option:[value="+week+"]").attr("selected",true);
	//周到日期
	}else if(type == 2){
		var week = parseInt($("#week").val());
		if(week < 0){
			return false;
		}
		var start_date = $("#bak_start_date").val();
		if(!start_date){
			start_date = new Date();
			var year = start_date.getFullYear();
			var month = start_date.getMonth()+1;
			month = month >= 10 ? month : '0'+month;
			var date = start_date.getDate();
			date = date >= 10 ? date : '0'+date;
			$("#bak_start_date").val(year+'-'+month+'-'+date);
		}else{
			start_date = new Date(Date.parse(start_date.replace(/-/g, "/")));
		}
		var w = parseInt(start_date.getDay());
		if(week > w){
			start_date.setDate(start_date.getDate()+(week-w));
		}else if(week < w){
			start_date.setDate(start_date.getDate()+(7 - w + week));
		}
		var year = start_date.getFullYear();
		var month = start_date.getMonth()+1;
		month = month >= 10 ? month : '0'+month;
		var date = start_date.getDate();
		date = date >= 10 ? date : '0'+date;
		$("#start_date").val(year+'-'+month+'-'+date);
	}
}
function checkFrom(whole){
	if(whole != 0 && whole != 1){
		alert('参数错误');
		return false;
	}
	document.myform.whole.value=whole;
	return true;
}

function clearNoNum(val, elem){   
	//先把非数字的都替换掉，除了数字和.
	val = val.replace(/[^\d.]/g,"");
	//必须保证第一个为数字而不是.
	val = val.replace(/^\./g,"");
	//保证只有出现一个.而没有多个.
	val = val.replace(/\.{2,}/g,".");
	//保证.只出现一次，而不能出现两次以上
	val = val.replace(".","$#$").replace(/\./g,"").replace("$#$",".");
	//只能输入1个小数
	val = val.replace(/^(\d+)\.(\d).*$/,'$1.$2');
	if(!val || val > 10 || val < 0){
		alert("课时必须在1-10之间,最多带一位小数");
		return false;
	}
	$(elem).val(val);
	return true;
}

$(function(){
	startDateWeek(1);
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){},onsuccess:function(){
		var start_hour = $("#start_hour").val();
        var start_minute = $("#start_minute").val();
        var end_hour = $("#end_hour").val();
        var end_minute = $("#end_minute").val();
        if(!start_hour || !start_minute || !end_hour || !end_minute) return '上课时间4项必须选择';
        var start = parseInt(start_hour,10)*60+parseInt(start_minute,10);
        var end = parseInt(end_hour,10)*60+parseInt(end_minute,10);
        var limit = end - start;
        if(limit < 30){
        	alert('上课结束时间必须大于上课开始时间30分钟');
        	return false;
        }
        var rec_type = $("#rec_type").val();
		if(rec_type == "week_1" || rec_type == "week_2"){
			var week = 0;
			$("input:[name=week[]]").each(function(){
				if($(this).attr("checked")) week = 1;
			});
			if(!week){
				alert('请选择星期');
        		return false;
			}
		}
		if($(".select_teacher_op").length < 1){
			alert('请选择老师并设置权限');
        	return false;
		}
		$("#selectTeacher").val('选择老师');
		if($(".select_student_op").length < 1){
			alert('请选择学生');
        	return false;
		}
		$("#selectStudent").val('选择学生');
		$("#kq").attr("disabled",true);
		return true;
	}});
	$("#course").formValidator({onshow:"请选择课程分类",onfocus:"请选择课程分类"}).inputValidator({min:1,onerror:"请选择课程分类"});
	$("#start_date").formValidator({onshow:"请选择上课开始日期",onfocus:"请选择上课开始日期"}).inputValidator({min:1,onerror:"请选择上课开始日期"});
	$("#start_hour").formValidator({onshow:"请选择开始时间",onfocus:"请选择开始时间"}).inputValidator({type:"number",min:1,max:24,onerror:"请选择开始时间"});
	$("#end_hour").formValidator({onshow:"请选择结束时间",onfocus:"请选择结束时间"}).inputValidator({type:"number",min:1,max:24,onerror:"请选择结束时间"});
	$("#text").formValidator({onshow:"请输入标题",onfocus:"标题长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"标题长度为2-20个字符"});
	$("#num").formValidator({onshow:"请输入课程总次数",onfocus:"课程总次数必须在1-100之间"}).inputValidator({type:"number",min:1,max:100,onerror:"课程总次数必须在1-100之间"});
	$("#class_time").formValidator({onshow:"请输入课时",onfocus:"课时必须在1-10之间,最多带一位小数"}).functionValidator({fun: clearNoNum});;
	$("#bak_start_date").change(function(){
		startDateWeek(1);
	});
	$("#week").change(function(){
		startDateWeek(2);
	});
	$("#course").change(function(){
		var i = $(this).val();
		if(i) $("#text").val($("#course option[value="+i+"]").text());
	});
});

//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/event/edit" method="post" id="myform">
<table width="100%" class="table_form">
	<input type="hidden" name="whole" id="whole" value="0">
	<tr>
		<td width=120 align="right">授课内容：</td> 
		<td><?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,$_smarty_tpl->tpl_vars['eventInfo']->value['course'],'course','course');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">课程名称：</td> 
		<td><input type="text" name="text"  class="input-text" id="text" value="<?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['text'];?>
">
		</td>
	</tr>
	<?php if (!$_smarty_tpl->tpl_vars['eventInfo']->value['pid']){?>
	<tr>
		<td width=120 align="right">重复设置：</td> 
		<td><?php echo Html::selectEventRecType($_smarty_tpl->tpl_vars['eventInfo']->value['rec_type'],'rec_type','rec_type',$_smarty_tpl->tpl_vars['eventInfo']->value['num'],$_smarty_tpl->tpl_vars['eventInfo']->value['week']);?>

		</td>
	</tr>
	<?php }?>
	<tr>
		<td width=120 align="right">日期：</td> 
		<td><?php echo Html::date('start_date',smarty_modifier_date_format($_smarty_tpl->tpl_vars['eventInfo']->value['start_date'],'%Y-%m-%d'),'',0,0,true,1,true,1);?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">时间：</td> 
		<td>
			<?php echo Html::selectHour(smarty_modifier_date_format($_smarty_tpl->tpl_vars['eventInfo']->value['start_date'],'%H'),'start_hour','start_hour');?>
：<?php echo Html::selectMinute(smarty_modifier_date_format($_smarty_tpl->tpl_vars['eventInfo']->value['start_date'],'%M'),'start_minute','start_minute');?>
&nbsp;至&nbsp;<?php echo Html::selectHour(smarty_modifier_date_format($_smarty_tpl->tpl_vars['eventInfo']->value['end_date'],'%H'),'end_hour','end_hour');?>
：<?php echo Html::selectMinute(smarty_modifier_date_format($_smarty_tpl->tpl_vars['eventInfo']->value['end_date'],'%M'),'end_minute','end_minute');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">课时：</td> 
		<td><input type="text" name="class_time" class="input-text" id="class_time" size=5 value="<?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['class_time'];?>
">
		</td>
	</tr>
	<tr>
		<td width=120 align="right">老师设置：</td> 
		<td>
			<?php echo Html::selectTeacher($_smarty_tpl->tpl_vars['school']->value,$_smarty_tpl->tpl_vars['event']->value,1,$_smarty_tpl->tpl_vars['courseTeachers']->value);?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">学员设置：</td> 
		<td>
			<?php echo Html::selectStudent($_smarty_tpl->tpl_vars['school']->value,$_smarty_tpl->tpl_vars['event']->value,$_smarty_tpl->tpl_vars['courseStudents']->value);?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">颜色设置：</td> 
		<td><?php echo Html::eventColor($_smarty_tpl->tpl_vars['eventInfo']->value['color'],'color');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['id'];?>
"/><input type="hidden" id="grade" name="grade" value="<?php echo $_smarty_tpl->tpl_vars['eventInfo']->value['grade'];?>
"/>
		<input type="hidden" id="refer" name="refer" value="<?php echo $_SERVER['HTTP_REFERER'];?>
"/>
		</td> 
		<td>
			<?php if ($_smarty_tpl->tpl_vars['eventInfo']->value['is_loop']){?>
			<input name="dosubmit" type="submit" value="修改所有未上课程" class="button state_highlight" style="width:150px;" onclick="if(!checkFrom(0)) return false;">
			<input name="dosubmit" type="submit" value="修改全部循环课程" class="button state_highlight" style="width:150px;" onclick="if(!checkFrom(1)) return false;">
			<?php }else{ ?>
			<input name="dosubmit" type="submit" value="修改" class="button state_highlight" onclick="if(!checkFrom(0)) return false;">
			<?php }?>
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>