<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 18:18:08
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\event\add.html" */ ?>
<?php /*%%SmartyHeaderCode:4059527099ca838b81-47092230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c1cfed696d5311a276513796840f5147271b7a' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\event\\add.html',
      1 => 1389176232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4059527099ca838b81-47092230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527099ca946448_22048195',
  'variables' => 
  array (
    'schoolCourses' => 0,
    'school' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527099ca946448_22048195')) {function content_527099ca946448_22048195($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	<?php if (!$_smarty_tpl->tpl_vars['schoolCourses']->value){?>
		window.top.art.dialog({
			id:'add',
			iframe:'/school/course/add', 
			title:'添加教学范围', 
			width:'500', 
			height:'150', 
			lock:true
		});
	<?php }?>
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/event/add" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width=120 align="right">授课内容：</td> 
		<td><?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,'','course','course');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">课程名称：</td> 
		<td><input type="text" name="text"  class="input-text" id="text">
		</td>
	</tr>
	<tr>
		<td width=120 align="right">重复设置：</td> 
		<td><?php echo Html::selectEventRecType('','rec_type');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">日期：</td> 
		<td><?php echo Html::date('start_date','','',0,0,true,1,true,1);?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">时间：</td> 
		<td>
		<?php echo Html::selectHour('','start_hour','start_hour');?>
：<?php echo Html::selectMinute('','start_minute','start_minute');?>
&nbsp;至&nbsp;<?php echo Html::selectHour('','end_hour','end_hour');?>
：<?php echo Html::selectMinute('','end_minute','end_minute');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">课时：</td> 
		<td><input type="text" name="class_time" class="input-text" id="class_time" size=5 value="1.0">
		</td>
	</tr>
	<tr>
		<td width=120 align="right">老师设置：</td> 
		<td>
			<?php echo Html::selectTeacher($_smarty_tpl->tpl_vars['school']->value,$_smarty_tpl->tpl_vars['event']->value,1);?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">学员设置：</td> 
		<td>
			<?php echo Html::selectStudent($_smarty_tpl->tpl_vars['school']->value,$_smarty_tpl->tpl_vars['event']->value);?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">颜色设置：</td> 
		<td><?php echo Html::eventColor('','color');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right"><input type="hidden" id="grade" name="grade" value="0"/>
		</td> 
		<td><input name="dosubmit" type="submit" value="确定" class="button state_highlight" id="kq"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>