<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 17:03:44
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\event\viewplugin.html" */ ?>
<?php /*%%SmartyHeaderCode:208645274bff08acf28-29818944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e563f8bb6135156992a4cdcc52b0c8e2fd8aace6' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\event\\viewplugin.html',
      1 => 1383382771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208645274bff08acf28-29818944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'teachers' => 0,
    'students' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274bff0935ac7_84303930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274bff0935ac7_84303930')) {function content_5274bff0935ac7_84303930($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.min.js"></script>
<title>呼啦派-学生</title>
</head>
<script type="text/javascript">
window.hulapai = new Array();
window.hulapai.module = 'teacher';
window.hulapai.urlEvent = "/teacher/event/index?is_view=1";
window.hulapai.urlEventEdit = "/teacher/event/edit";
window.hulapai.urlEventInfo = "/teacher/event/info";
window.hulapai.urlComment = "/teacher/comment/index";
window.hulapai.urlAttendance = "/teacher/attendance/index";
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

</script>
<body>
<div class="pad-lr-10">
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
</body>
</html><?php }} ?>