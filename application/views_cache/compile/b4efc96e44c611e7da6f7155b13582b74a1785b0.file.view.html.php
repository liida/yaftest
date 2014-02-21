<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 15:21:53
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\event\view.html" */ ?>
<?php /*%%SmartyHeaderCode:216185270a847f241d3-65510605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4efc96e44c611e7da6f7155b13582b74a1785b0' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\event\\view.html',
      1 => 1388042334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216185270a847f241d3-65510605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270a84807e1d1_29145946',
  'variables' => 
  array (
    'course' => 0,
    'teacher' => 0,
    'text' => 0,
    '_GET' => 0,
    'path' => 0,
    'teachers' => 0,
    'students' => 0,
    'schoolCourses' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270a84807e1d1_29145946')) {function content_5270a84807e1d1_29145946($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
window.hulapai = new Array();
window.hulapai.module = 'school';
window.hulapai.urlEvent = "/school/event/index?is_view=1&course=<?php echo $_smarty_tpl->tpl_vars['course']->value;?>
&teacher=<?php echo $_smarty_tpl->tpl_vars['teacher']->value;?>
&text=<?php echo $_smarty_tpl->tpl_vars['text']->value;?>
";
window.hulapai.urlEventEdit = "/school/event/edit";
window.hulapai.urlComment = "/school/comment/index";
window.hulapai.urlAttendance = "/school/attendance/index";
window.hulapai.start_date = "<?php echo $_smarty_tpl->tpl_vars['_GET']->value['start_date'];?>
";
window.hulapai.end_date = "<?php echo $_smarty_tpl->tpl_vars['_GET']->value['end_date'];?>
";
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/dhtmlxscheduler.js" type="text/javascript" charset="utf-8"></script>

<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/ext/dhtmlxscheduler_minical.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/ext/dhtmlxscheduler_dhx_terrace.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/dhtmlxscheduler_dhx_terrace.css" type="text/css" title="no title" charset="utf-8">
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/ext/dhtmlxscheduler_year_view.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/ext/dhtmlxscheduler_readonly.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/locale_cn.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/schedule.color.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/schedule.selector.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/schedule.init.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
schedule/schedule.init.css" type="text/css" title="no title" charset="utf-8">

<style type="text/css">
	html, body{
		margin:0px;
		padding:0px;
		height:100%;
		overflow:hidden;
	}	
	.dhx_cal_event_line.custom, .dhx_cal_event.custom div{
		background-color:#fd7;
		border-color:#da6;
		color:#444;
	}
</style>
<script type="text/javascript">
	var teachers = <?php echo (($tmp = @$_smarty_tpl->tpl_vars['teachers']->value)===null||$tmp==='' ? array() : $tmp);?>
;// // 初始老师	
	var students =<?php echo (($tmp = @$_smarty_tpl->tpl_vars['students']->value)===null||$tmp==='' ? array() : $tmp);?>
;// 初始学生
	function init() {		
		var sch = document.getElementById("scheduler_here");
		sch.style.height = parseInt(document.body.offsetHeight)+"px";	
		scheduler.customer();
	}
	$(document).ready(function(){	
		$(".dhx_cal_tab[name='add_tab']").click(function(e){
			scheduler.addEventNow(null, null, e);
		});	
		init();	
	});
	function print(v)
	{
		if (typeof v == 'object')
		{
			v = Obj(v);
		}else{
			v = v + " " + (typeof v);
		}
		document.write(v);
	}

function Obj(obj)
{
	var result = '';
	for (i in obj)
	{		
		result += i + "\t" + obj[i] + "\t" + typeof(obj[i]) + "\n";
	}
	return result;
}
function checkSearch(){
	if(!window.hulapai.start_date || !window.hulapai.end_date) return false;
	$("#start_date").val(window.hulapai.start_date);
	$("#end_date").val(window.hulapai.end_date);
	return true;
}
</script>
<div class="pad-lr-10">
	<div style="margin: 5px 0 0 0;position: relative;">
		<form method="get" action="" name="searchform" id="searchform" onsubmit="return checkSearch();">
		<table width="100%" cellspacing="0" class="search-form">
		    <tbody>
				<tr>
				<td>
				<div class="explain-col">
				<?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,$_smarty_tpl->tpl_vars['_GET']->value['course'],'course','course','授课内容');?>

				<input type="text" name="text" class="input-text ufocus" id="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['text'];?>
" def="课程名称">
				<?php echo Html::select($_smarty_tpl->tpl_vars['teachers']->value,$_smarty_tpl->tpl_vars['_GET']->value['teacher'],'teacher','teacher','全部老师');?>

				<input type="hidden" name="start_date" id="start_date" value=""/>
				<input type="hidden" name="end_date" id="end_date" value=""/>
				<input type="submit" value="搜索" class="button search" name="search" id="search">
			</div>
				</td>
				</tr>
		    </tbody>
		</table>
		</form>
	</div>
	<div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
		
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
			<div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>			
			<div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
			<div class="dhx_cal_tab" name="year_tab" style="right:76px;"></div>
			<!-- <div class="dhx_cal_tab" name="add_tab" style="right:380px;" >添加</div> -->
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>		
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>