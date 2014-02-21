<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 11:21:58
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\info.html" */ ?>
<?php /*%%SmartyHeaderCode:34152709d897c6da4-49332248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2607b10e09f404006510de2215028c1bbc12206' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\info.html',
      1 => 1387250513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34152709d897c6da4-49332248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52709d89b0ad69_87936804',
  'variables' => 
  array (
    'path' => 0,
    'student' => 0,
    'parents' => 0,
    'parent' => 0,
    '_GET' => 0,
    'events' => 0,
    'event' => 0,
    'pageEvents' => 0,
    'comments' => 0,
    '_data' => 0,
    'attachInfo' => 0,
    'pageComments' => 0,
    'remarks' => 0,
    'remark' => 0,
    'hads' => 0,
    'data' => 0,
    'hadMoney' => 0,
    'usedMoney' => 0,
    'lessedMoney' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52709d89b0ad69_87936804')) {function content_52709d89b0ad69_87936804($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
ul.parentList{display:inline-block;_zoom:1;*display:inline;vertical-align:top}
.parentList li{width:200px;height:50px;}
.parentList li p{float:left;width:120px;}
.parentList li .img{width:30px;margin-top:5px;}
.parentList li p span{display:inline-block;vertical-align:middle;margin-left:5px;}
.desList{width:100%;height:auto;overflow:hidden;}
.desList li{border:1px solid #CCC;padding:4px 10px;width:200px;height:20px;margin: 4px 2px;float:left; position: relative;}
.desList li span{position: absolute;left:195px;cursor: pointer;float:right; width:8px;height:20px;display:inline-block;padding-right:10px;border-left: 1px solid #CCC; background:url('<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete_icon.png') no-repeat right;}
.student_total{background: url("<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
/hulapai/header_bg.png") repeat;margin-top:10px;height:30px;}
.student_total p{float:left;line-height:30px;padding:0 8px;}
</style>
<div class="pad_common">
<div class="common-form">
	<table width="100%" class="table_form">
		<tr>
			<td width="150" valign="top"><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['id'],2,150);?>
</td> 
			<td width="270" valign="top">
				<table class="table_form list">
					<tr>
						<td align="left">姓名：<?php echo studentName($_smarty_tpl->tpl_vars['student']->value['id']);?>
(<?php echo $_smarty_tpl->tpl_vars['student']->value['hulaid'];?>
)</td> 							
					</tr>
					<tr>
						<td align="left">生日：<?php echo $_smarty_tpl->tpl_vars['student']->value['birthday'];?>
</td> 							
					</tr>
					<tr>
						<td align="left">性别：<?php if ($_smarty_tpl->tpl_vars['student']->value['gender']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['student']->value['gender']==2){?>女<?php }else{ ?>未知<?php }?></td> 								
					</tr>	
					<tr>
						<td align="left">加入时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td> 							
					</tr>			
				</table>
			</td> 
			<td width="300" valign="top">
				<table class="table_form">
					<tr>
						<td width="80" align="left" valign="top">联系方式：</td>
						<td>
							<ul class="parentList">
								<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
								<li><p class="img"><?php echo imageUrl($_smarty_tpl->tpl_vars['parent']->value['user'],1,30);?>
</p><p><span><?php echo $_smarty_tpl->tpl_vars['parent']->value['nickname'];?>
(<?php if ($_smarty_tpl->tpl_vars['parent']->value['relation']==1){?>本人<?php }elseif($_smarty_tpl->tpl_vars['parent']->value['relation']==2){?>爸爸<?php }elseif($_smarty_tpl->tpl_vars['parent']->value['relation']==3){?>妈妈<?php }elseif($_smarty_tpl->tpl_vars['parent']->value['relation']==4){?>家长<?php }?>)</span><span><?php echo $_smarty_tpl->tpl_vars['parent']->value['account'];?>
</span></p></li>
								<?php } ?>
							</ul>							
						</td>
					</tr>		
				</table>
			</td> 
		</tr>
	</table>
</div>
<div class="col-tab">
		<ul class="tabBut cu-li">
	            <li id="tab_setting_4" <?php if (!$_smarty_tpl->tpl_vars['_GET']->value['act']||$_smarty_tpl->tpl_vars['_GET']->value['act']==4){?>class="on"<?php }?> onclick="SwapTab('setting','on','',4,4);">基本信息</li>
	            <li id="tab_setting_1" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']==1){?>class="on"<?php }?> onclick="SwapTab('setting','on','',4,1);">课程</li>
	            <!--<li id="tab_setting_2" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']==2){?>class="on"<?php }?> onclick="SwapTab('setting','on','',4,2);">评价</li>-->
	            <li id="tab_setting_3" <?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']==3){?>class="on"<?php }?> onclick="SwapTab('setting','on','',4,3);">备注</li>
		</ul>
	<?php if ($_smarty_tpl->tpl_vars['_GET']->value['act']==1){?>
	<div id="div_setting_1" class="contentList">
		<p class="content_tip">注:以下数据为截止至<?php echo date('Y-m-d');?>
为止的课程</p>
		<form method="get" action="" name="searchform">
			<table width="100%" cellspacing="0" class="search-form">
			    <tbody>
					<tr>
					<td>
					<div class="explain-col">
					<input type="hidden" name="student" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
"/>
					<input type="hidden" name="act" value="1"/>
					<input type="text" name="text" class="input-text ufocus" id="text" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['text'];?>
" def="课程名称">
					<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['_GET']->value['start_date'],'起始日期');?>

					<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['_GET']->value['end_date'],'终止日期');?>

					<input type="submit" value="搜索" class="button search" name="search">
				</div>
					</td>
					</tr>
			    </tbody>
			</table>
		</form>
		<table width="100%" cellspacing="0" class="table-list">
			<thead>
				<tr>
					<th>课程名称</th>
					<th>上课日期</th>
					<th>上课时间</th>
					<th>上课老师</th>
					<th>考勤</th>
					<th>点评</th>
				</tr>
			</thead>
			<tbody class="ul_content">
			<?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value){
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
		    <tr>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>
</td>
				<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%Y-%m-%d');?>
<?php if ($_smarty_tpl->tpl_vars['event']->value['is_loop']){?>至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%Y-%m-%d');?>
<?php }?></td>
				<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['start_date'],'%H:%M');?>
至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['end_date'],'%H:%M');?>
</td>
				<td align="center"><?php echo teacherName($_smarty_tpl->tpl_vars['event']->value['teacher']);?>
</td>
				<td align="center">		
					<a class="link" href="javascript:attendance(<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
,'<?php echo $_smarty_tpl->tpl_vars['event']->value['text'];?>
','<?php echo studentName($_smarty_tpl->tpl_vars['event']->value['student']);?>
')"><?php if ($_smarty_tpl->tpl_vars['event']->value['courseAttended']){?><?php if ($_smarty_tpl->tpl_vars['event']->value['attend']){?><span>出勤</span><?php }elseif($_smarty_tpl->tpl_vars['event']->value['leave']){?><span>请假</span><?php }elseif($_smarty_tpl->tpl_vars['event']->value['absence']){?><span>缺勤</span><?php }?><?php }else{ ?><span class="red">[未考勤]</span><?php }?></a>
				</td>
				<td align="center">		
					<?php if ($_smarty_tpl->tpl_vars['event']->value['courseCommented']){?><a class="link" href="javascript:showcomment(<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
,<?php echo $_smarty_tpl->tpl_vars['event']->value['student'];?>
,'<?php echo $_smarty_tpl->tpl_vars['event']->value['remark'];?>
','<?php echo studentName($_smarty_tpl->tpl_vars['event']->value['student']);?>
')"><span>[已点评]</span></a><?php }else{ ?><a class="link" href="javascript:comment(<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
,<?php echo $_smarty_tpl->tpl_vars['event']->value['student'];?>
,'<?php echo $_smarty_tpl->tpl_vars['event']->value['remark'];?>
','<?php echo studentName($_smarty_tpl->tpl_vars['event']->value['student']);?>
')"><span class="red">[未点评]</span></a><?php }?>
				</td>
		    </tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['event']->_loop) {
?>
			<tr><td colspan=6>暂无课程数据</td></tr>
			<?php } ?>
			</tbody>
		</table>
		<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pageEvents']->value;?>
</div>	
	</div>
	<?php }elseif($_smarty_tpl->tpl_vars['_GET']->value['act']==2){?>
	<div id="div_setting_2" class="contentList">
		<table width="100%" cellspacing="0" class="table-list">
			<thead>
				<tr>
					<th align="left">用户</th>
					<th>内容</th>
					<th>附件</th>
					<th>点评时间</th>
				</tr>
			</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_data']->key => $_smarty_tpl->tpl_vars['_data']->value){
$_smarty_tpl->tpl_vars['_data']->_loop = true;
?>
		    <tr>
				<td align="left"><?php if ($_smarty_tpl->tpl_vars['_data']->value['anonymous']){?>【匿名】<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_data']->value['character']=="teacher"||$_smarty_tpl->tpl_vars['_data']->value['character']=="school"){?><?php echo teacherName($_smarty_tpl->tpl_vars['_data']->value['creator']);?>
(老师)<?php }elseif($_smarty_tpl->tpl_vars['_data']->value['character']=="student"){?><?php echo studentName($_smarty_tpl->tpl_vars['_data']->value['student']);?>
<?php echo relation($_smarty_tpl->tpl_vars['_data']->value['creator'],$_smarty_tpl->tpl_vars['_data']->value['student']);?>
<?php }?><?php }?></td>
				<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['_data']->value['content'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_data']->value['content'],30,"...",true);?>
</td>
				<td align="center">
				<?php  $_smarty_tpl->tpl_vars['attachInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_data']->value['attachInfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachInfo']->key => $_smarty_tpl->tpl_vars['attachInfo']->value){
$_smarty_tpl->tpl_vars['attachInfo']->_loop = true;
?>
				<span class="attach link" link="<?php echo $_smarty_tpl->tpl_vars['path']->value['image'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_path'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['attach_name'];?>
</span>
				<?php } ?>
				</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['_data']->value['create_time'];?>
</td>
		    </tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['_data']->_loop) {
?>
		<tr><td colspan=4>暂无点评数据</td></tr>
		<?php } ?>
		</tbody>
		</table>
		<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pageComments']->value;?>
</div>
	</div>
	<?php }elseif($_smarty_tpl->tpl_vars['_GET']->value['act']==3){?>
	<div id="div_setting_3" class="contentList">
		<ul class="desList ul_content">
			<?php  $_smarty_tpl->tpl_vars['remark'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['remark']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['remarks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['remark']->key => $_smarty_tpl->tpl_vars['remark']->value){
$_smarty_tpl->tpl_vars['remark']->_loop = true;
?>
			<li id="remark_<?php echo $_smarty_tpl->tpl_vars['remark']->value['id'];?>
">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['remark']->value['remark'];?>
<span onclick="delremark(<?php echo $_smarty_tpl->tpl_vars['remark']->value['id'];?>
)"></span></li>
			<?php }
if (!$_smarty_tpl->tpl_vars['remark']->_loop) {
?>
			&nbsp;&nbsp;&nbsp;&nbsp;暂无
			<?php } ?>
		</ul>	
		<form name="myform" action="/school/student/remark?act=1" method="post" id="myform">
		<table width="100%" class="table_form">
			<tr>
				<td style="padding: 10px 0;"><textarea name="remark" id="remark" style="width:150px;height:80px;"></textarea>
				<input type="hidden" name="student" id="student" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
">
				</td>
			</tr>
			<tr>
				<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
				</td>
			</tr>
		</table>
		</form>							
	</div>
	<?php }elseif(!$_smarty_tpl->tpl_vars['_GET']->value['act']||$_smarty_tpl->tpl_vars['_GET']->value['act']==4){?>
	<div id="div_setting_4" class="contentList">
		<table width="100%" cellspacing="0" class="table-list">
			<thead>
				<tr>
					<th>课程名称</th>
					<th>单价（元/课次）</th>
					<th>总课次数</th>
					<th>已上课次</th>
					<th>已考勤课次</th>
					<th>未考勤课次</th>
					<th>消费金额（元）</th>
					<th></th>
				</tr>
			</thead>
			<tbody class="ul_content">
			<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
		    <tr>
				<td align="left"><a href="/school/student/info?student=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
&act=1&text=<?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>
" class="link"><?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>
</a></td>
				<td align="center"><?php if ($_smarty_tpl->tpl_vars['data']->value['fee_setting']){?><?php echo $_smarty_tpl->tpl_vars['data']->value['fee'];?>
<?php }else{ ?>--<?php }?></td>
				<td align="center"><?php if ($_smarty_tpl->tpl_vars['data']->value['fee_setting']){?><?php echo $_smarty_tpl->tpl_vars['data']->value['total'];?>
<?php }else{ ?>--<?php }?></td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value['had'];?>
</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value['attended'];?>
（出勤：<?php echo $_smarty_tpl->tpl_vars['data']->value['attend'];?>
&nbsp;请假：<?php echo $_smarty_tpl->tpl_vars['data']->value['leave'];?>
缺勤：<?php echo $_smarty_tpl->tpl_vars['data']->value['absence'];?>
）</td>
				<td align="center"><?php echo $_smarty_tpl->tpl_vars['data']->value['had']-$_smarty_tpl->tpl_vars['data']->value['attended'];?>
</td>
				<td align="center"><?php if ($_smarty_tpl->tpl_vars['data']->value['fee_setting']){?><?php if ($_smarty_tpl->tpl_vars['data']->value['lessed']>0){?><?php echo $_smarty_tpl->tpl_vars['data']->value['used'];?>
(-<?php echo $_smarty_tpl->tpl_vars['data']->value['lessed'];?>
)<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value['used'];?>
<?php }?><?php }else{ ?>--<?php }?></td>
				<td align="center">		
					<?php if ($_smarty_tpl->tpl_vars['data']->value['fee_setting']){?>
					<a class="link" href="javascript:editTotalCfg(<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['data']->value['student'];?>
)">[编辑]</a>
					<a class="link" href="javascript:confirmurl('/school/student_fee/delete?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&student=<?php echo $_smarty_tpl->tpl_vars['data']->value['student'];?>
','是否重置？')">[重置]</a>
					<?php }else{ ?>
					<a class="link" href="javascript:addTotalCfg(<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>
')">[编辑]</a>
					<?php }?>
				</td>
		    </tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['data']->_loop) {
?>
			<tr><td colspan=8>暂无学费统计数据</td></tr>
			<?php } ?>
			</tbody>
		</table>
		<div class="student_total">
			<p>学费统计<span class="ccc" style="margin-left:15px;">|</span></p>
			<p>已缴费金额：<span class="yellow"><?php echo $_smarty_tpl->tpl_vars['hadMoney']->value;?>
</span>元</p>
			<p>已消费金额：<span class="yellow"><?php echo $_smarty_tpl->tpl_vars['usedMoney']->value;?>
</span>元</p>
			<p>剩余金额：<span class="yellow"><?php if ($_smarty_tpl->tpl_vars['lessedMoney']->value>0){?>-<?php echo $_smarty_tpl->tpl_vars['lessedMoney']->value;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['hadMoney']->value-$_smarty_tpl->tpl_vars['usedMoney']->value;?>
<?php }?></span>元</p>
			<p class="link" style="float:right;margin-right:10px;" onclick="fee(<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
)">缴费记录</p>
		</div>					
	</div>
	<?php }?>
</div>
</div>
<script language="JavaScript">
<!--
function remark(student){
	window.top.art.dialog({
		id:'remark',
		iframe:'/school/student/remark?act=1&student='+student, 
		title:'添加学生备注', 
		width:'300', 
		height:'200', 
		lock:true
	});
}
function delremark(id){
	$.ajax({
		'type':'post',
		'url':'/school/student/remark?act=2&id='+id, 
		'success':function(msg){
			if(msg == 1) $("#remark_"+id).remove();
			else alert(msg)
		}
	})
}
function SwapTab(name,cls_show,cls_hide,cnt,cur){
    for(i=1;i<=cnt;i++){
		if(i==cur){
			 $('#div_'+name+'_'+i).show();
			 $('#tab_'+name+'_'+i).attr('class',cls_show);
		}else{
			 $('#div_'+name+'_'+i).hide();
			 $('#tab_'+name+'_'+i).attr('class',cls_hide);
		}
	}
	location.href='/school/student/info?student='+<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
+'&act='+cur;
}

$(".attach").click(function(){
	var link = $(this).attr('link');
	window.top.art.dialog({
		id:'attach',
		content:"<img src='"+link+"'/>", 
		title:'查看附件', 	
		lock:true
	});
});

function comment(event,student,courseName,studentName){
	window.top.art.dialog({
		id:'comment',
		iframe:'/school/comment/do?isStudentInfo=1&act=1&event='+event+'&student='+student, 
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
		width:'600', 
		height:'500', 
		lock:true
	});
}

function attendance(id,name,studentName){
	window.top.art.dialog({
		id:'attendance',
		iframe:'/school/attendance/index?act=list&event='+id+'&studentName='+studentName+'&isStudentInfo=1', 
		title:name, 
		width:'450', 
		height:'420', 
		lock:true
	});
}

function editTotalCfg(id,student){
	window.top.art.dialog({
		id:'editTotalCfg',
		iframe:'/school/student_fee/edit?id='+id+'&student='+student, 
		title:'学费设置', 
		width:'420', 
		height:'200', 
		lock:true
	});
}

function addTotalCfg(student,text){
	window.top.art.dialog({
		id:'addTotalCfg',
		iframe:'/school/student_fee/add?student='+student+'&text='+text, 
		title:'学费设置', 
		width:'420', 
		height:'200', 
		lock:true
	});
}

function fee(student){
	window.top.art.dialog({
		id:'fee',
		iframe:'/school/student_money/index?student='+student, 
		title:'缴费记录', 
		width:'450', 
		height:'400', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>