<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 15:19:23
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\event\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26055527099a396c6e5-45531840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9f4689f3d3e27bbcb64d0a5347b3fd894f36afb' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\event\\index.html',
      1 => 1388042351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26055527099a396c6e5-45531840',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527099a3bed174_86817915',
  'variables' => 
  array (
    'childEvent' => 0,
    'schoolCourses' => 0,
    '_GET' => 0,
    'teachers' => 0,
    'sorts' => 0,
    'parents' => 0,
    'events' => 0,
    'event' => 0,
    'teacher' => 0,
    'nowTime' => 0,
    'whole' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527099a3bed174_86817915')) {function content_527099a3bed174_86817915($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
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
<div class="pad_common" <?php if ($_smarty_tpl->tpl_vars['childEvent']->value){?>style="padding:0;"<?php }?>>
<?php if (!$_smarty_tpl->tpl_vars['childEvent']->value){?>
<form method="get" action="" name="searchform" id="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<?php echo Html::select($_smarty_tpl->tpl_vars['schoolCourses']->value,$_smarty_tpl->tpl_vars['_GET']->value['course'],'course','course','授课内容');?>

			<input type="text" name="text" class="input-text ufocus" id="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['text'];?>
" def="课程名称">
			<?php echo Html::select($_smarty_tpl->tpl_vars['teachers']->value,$_smarty_tpl->tpl_vars['_GET']->value['teacher'],'teacher','teacher','全部老师');?>

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
<?php }else{ ?>
<script language="javascript">
var parent = <?php echo $_smarty_tpl->tpl_vars['parents']->value;?>
;
var childs = new Array();

function getChilds(rec, length, start, end)
{
	if(!start || !end && !rec || !rec) return ;
	var recStr = rec.split("#");
	var recArr = recStr.split("_");
	var result = new Array();
	start = strtotime(start);
	end = strtotime(end);
	if(recArr[0] == 'day')
	{
		while(start < end)
		{
			if(recStr[1] >0 && result.length == recStr[1]) continue;
			var _end = start + length;
			result.push({
				'start_date' : timetostr(start),
				'end_date'   : timetostr(_end),
				'length'	 : length
			});
			start += recArr[1] * 86400;
		}
	}else if(recArr[0] == 'week'){
		var week_day = recArr[4].split(",");
		for (i=0; i<week_day.length; i++)
		{
			var _start = '';
			while (end > _start)
			{
				if(recStr[1] >0 && result.length == recStr[1]) continue;
				var _end = _start + length;
				result.push({
					'start_date' : timetostr(start),
					'end_date'   : timetostr(_end),
					'length'	 : length
				});
				_start += (recArr[1] * 7) * 86400;
			}
		}
	}
}

function timetoUTC(datetime)
{
	var tmp_datetime = datetime.replace(/:/g,'-'); 
    tmp_datetime = tmp_datetime.replace(/ /g,'-'); 
    var arr = tmp_datetime.split("-");
	if(arr.length < 6)
	{
		for(var i=arr.length; i> arr.length-1; i--)
		{
			arr[i] = 0;
		}
	}
	return new Date(Date.UTC(arr[0],arr[1]-1,arr[2],arr[3]-8,arr[4],arr[5])); 	
}

function strtotime(datetime){ 
	var utc = timeToUtc(datetime);
    return parseInt(utc.getTime()/1000); 
} 
  
function timetostr(unix) { 
    var now = new Date(parseInt(unix) * 1000); 
    return now.toLocaleString().replace(/年|月/g, "-").replace(/日/g, " "); 
}

function getWeek(datetime)
{
	var utc = timeToUtc(datetime);
	return utc.getDay();
}

function week(start, step)
{
	var w = getWeek(start);

}
</script>
<?php }?>
<form name="myform" action="/school/event/delete" method="post" id="myform">
<div class="table-list">
<table width="100%" cellspacing="0" >
	<thead>
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['childEvent']->value){?><th><input type="checkbox" value="" name="checkAll" class="checkAll" rel="id[]"/></th><?php }?>
			<th><?php if (!$_smarty_tpl->tpl_vars['childEvent']->value){?><a class="link" href="javascript:dosort('course')">授课内容</a><?php }else{ ?>授课内容<?php }?></th>
			<th><?php if (!$_smarty_tpl->tpl_vars['childEvent']->value){?><a class="link" href="javascript:dosort('text')">课程名称</a><?php }else{ ?>课程名称<?php }?></th>
			<th><?php if (!$_smarty_tpl->tpl_vars['childEvent']->value){?><a class="link" href="javascript:dosort('start_date')">上课日期</a><?php }else{ ?>上课日期<?php }?></th>
			<th><?php if (!$_smarty_tpl->tpl_vars['childEvent']->value){?><a class="link" href="javascript:dosort('start_date')">上课时间</a><?php }else{ ?>上课时间<?php }?></th>
			<th><?php if (!$_smarty_tpl->tpl_vars['childEvent']->value){?><a class="link" href="javascript:dosort('teacher')">上课老师</a><?php }else{ ?>上课老师<?php }?></th>
			<th>课次总数</th>
			<th></th>
		</tr>
	</thead>
<tbody>
<?php $_smarty_tpl->tpl_vars['nowTime'] = new Smarty_variable(date('Y-m-d H:i:s'), null, 0);?>
<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
    <tr>
		<?php if ($_smarty_tpl->tpl_vars['childEvent']->value){?><td align="center"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
" name="id[]"/></td><?php }?>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['courseName'];?>
</td>
		<td align="center" <?php if ($_smarty_tpl->tpl_vars['event']->value['is_loop']){?>class="link" onclick="childEvent(<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>
')"<?php }?>><?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>
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
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['classes'];?>
</td>
		<td align="center">		
			<a href="<?php if ($_smarty_tpl->tpl_vars['_GET']->value['event']){?>javascript:doedit('<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
')<?php }else{ ?>/school/event/edit?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
<?php }?>">[修改]</a>
			<?php $_smarty_tpl->tpl_vars['whole'] = new Smarty_variable(-1, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['event']->value['start_date']>$_smarty_tpl->tpl_vars['nowTime']->value){?>	
			<?php $_smarty_tpl->tpl_vars['whole'] = new Smarty_variable(1, null, 0);?>
			<?php }elseif($_smarty_tpl->tpl_vars['event']->value['end_date']<$_smarty_tpl->tpl_vars['nowTime']->value){?>
			<?php $_smarty_tpl->tpl_vars['whole'] = new Smarty_variable(1, null, 0);?>
			<?php }?>	
			<a href="javascript:<?php if ($_smarty_tpl->tpl_vars['event']->value['is_loop']){?>select_delete('<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>
',<?php echo $_smarty_tpl->tpl_vars['whole']->value;?>
)<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_GET']->value['event']){?>if(confirm('是否删除?')){dodelete('<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
')}<?php }else{ ?>confirmurl('/school/event/delete?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
', '是否删除?')<?php }?><?php }?>">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
<tr><td colspan=<?php if ($_smarty_tpl->tpl_vars['childEvent']->value){?>8<?php }else{ ?>7<?php }?>>暂无课程数据</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php if ($_smarty_tpl->tpl_vars['childEvent']->value){?>
<input name="param" type="hidden" value="event=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['event'];?>
&start_date=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['start_date'];?>
&end_date=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['end_date'];?>
&hour=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['hour'];?>
&teacher=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['teacher'];?>
">
<input name="pid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['event'];?>
" id="pid">
<input name="doedit" type="submit" value="批量修改" class="button" onclick="pedit();">
<input name="dodelete" type="submit" value="批量删除" class="button" onclick="document.myform.action='/school/event/pdelete'">
<?php }?>
</form>
</div>
<script language="JavaScript">
<!--
function childEvent(id,name){
	window.top.art.dialog({
		id:'childEvent',
		iframe:'/school/event/index?event='+id+'&start_date=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['start_date'];?>
&end_date=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['end_date'];?>
&hour=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['hour'];?>
&teacher=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['teacher'];?>
', 
		title:name, 
		width:'800', 
		height:'420', 
		lock:true
	});
}
function select_delete(id,name,whole){
	var url = "/school/event/delete?id="+id;
	if(whole == -1){
		var tip = "<button class=\"button aui_state_highlight\" onclick=\"window.top.art.dialog({id:'changeDelEvent'}).close();window.top.document.getElementById('rightMain').contentWindow.location.href='"+url+"&whole=1'\">整个课程</button>&nbsp;&nbsp;<button class=\"button aui_state_highlight\" onclick=\"window.top.art.dialog({id:'changeDelEvent'}).close();window.top.document.getElementById('rightMain').contentWindow.location.href='"+url+"&whole=0'\">未上课程</button>";
	}else if(whole == 0){
		var tip = "<button class=\"button aui_state_highlight\" onclick=\"window.top.art.dialog({id:'changeDelEvent'}).close();window.top.document.getElementById('rightMain').contentWindow.location.href='"+url+"&whole=0'\">未上课程</button>";
	}else if(whole == 1){
		var tip = "<button class=\"button aui_state_highlight\" onclick=\"window.top.art.dialog({id:'changeDelEvent'}).close();window.top.document.getElementById('rightMain').contentWindow.location.href='"+url+"&whole=1'\">整个课程</button>";
	}else{
		alert('whole错误');
		return false;
	}
	window.top.art.dialog({
		id:'changeDelEvent',
		content:tip, 
		title:'请选择删除课程类型', 
		lock:true
	});
}
<?php if ($_smarty_tpl->tpl_vars['_GET']->value['event']){?>
function dodelete(id){
	var i = 0;
	$("input[name=id[]]").each(function(){
		var v = $(this).val();
		if(id == v){
			$(this).attr("checked",true);
			i = 1;
		}else{
			$(this).attr("checked",false);
		}
	});
	if(i){
		document.myform.action='/school/event/pdelete';
		document.myform.dodelete.click();
	}
}
function doedit(id){
	window.top.right.location = '/school/event/edit?id='+id;
	window.top.art.dialog({id:'childEvent'}).close();
}
function pedit(){
	var pid = $("#pid").val();
	var param = 'pid='+pid;
	$("input[name=id[]]").each(function(){
		if($(this).attr("checked")){
			param += '&id[]='+$(this).val();
		}
	});
	window.top.right.location = '/school/event/pedit?'+param
	window.top.art.dialog({id:'childEvent'}).close();
	return false;
}
<?php }?>
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>