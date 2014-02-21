<?php /* Smarty version Smarty-3.1.14, created on 2013-11-20 18:35:47
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\event\view.html" */ ?>
<?php /*%%SmartyHeaderCode:28605527094b95f0c26-94353126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2526ecb178bf8b62e44f100fb47c3eae09271b70' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\event\\view.html',
      1 => 1383801605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28605527094b95f0c26-94353126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527094b967d644_34311097',
  'variables' => 
  array (
    'path' => 0,
    'teachers' => 0,
    'students' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527094b967d644_34311097')) {function content_527094b967d644_34311097($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
window.hulapai = new Array();
window.hulapai.module = 'student';
window.hulapai.urlEvent = "/student/event/index?is_view=1";
window.hulapai.urlEventEdit = "/student/event/edit";
window.hulapai.urlEventInfo = "/student/event/info";
window.hulapai.urlComment = "/student/comment/index";
window.hulapai.urlAttendance = "/student/attendance/index";
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
		sch.style.height = parseInt(WINHEIGHT)+"px";	
		scheduler.customer();
	}
	$(document).ready(function(){	
		$(".dhx_cal_tab[name='add_tab']").click(function(e){
			scheduler.addEventNow(null, null, e);
		});	
		init();	
		var windowHeight = document.body.offsetHeight;
		//$("#scheduler_here").height(WINHEIGHT);
		//$(".dhx_cal_data").height(WINHEIGHT);
		$(".dhx_cal_tab").width(45);
		$(".dhx_cal_tab.active").css('left','60px');
		$(".dhx_cal_tab.dhx_cal_tab_last").css('left','106px');
		$(".dhx_cal_tab.dhx_cal_tab_standalone").css('left','170px');		
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
<div class="pad_common">
<div class="common-form">
	<div id="scheduler_here" class="dhx_cal_container" style='width:100%;height:400px;'>
		<div class="dhx_cal_navline">
			<div class="dhx_cal_prev_button">&nbsp;</div>
			<div class="dhx_cal_next_button">&nbsp;</div>
			<div class="dhx_cal_today_button"></div>
			<div class="dhx_cal_date"></div>
			<div class="dhx_cal_tab" name="day_tab" style="right:204px;"></div>
			<div class="dhx_cal_tab" name="week_tab" style="right:140px;"></div>			
			<div class="dhx_cal_tab" name="month_tab" style="right:76px;"></div>
			<!--<div class="dhx_cal_tab" name="year_tab" style="right:76px;"></div>-->
			<!-- <div class="dhx_cal_tab" name="add_tab" style="right:380px;" >添加</div> -->
		</div>
		<div class="dhx_cal_header">
		</div>
		<div class="dhx_cal_data">
		</div>		
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>