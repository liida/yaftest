<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 14:50:07
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\event\info.html" */ ?>
<?php /*%%SmartyHeaderCode:91045270d2010876e7-87675020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dc6a507c890efe2461d9ba2964dde341e5178c2' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\event\\info.html',
      1 => 1385707785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91045270d2010876e7-87675020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270d201104706_10394598',
  'variables' => 
  array (
    'path' => 0,
    'event' => 0,
    'teacherComment' => 0,
    'attachInfo' => 0,
    'comments' => 0,
    'comment' => 0,
    'pages' => 0,
    'others' => 0,
    'other' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270d201104706_10394598')) {function content_5270d201104706_10394598($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.jeditable.js"></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$('.remark').editable('/student/event/infoEdit', { 
		 name:'remark',
		 type      : 'text',
		 width     :120,
		 height    :18,
         cancel    : '取消',
         submit    : '确定'
	 });
	 $('.fee').editable('/student/event/infoEdit', { 
		 name:'fee',
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
	 		url:"/student/event/infoEdit",
	 		data:"color="+color+"&id=<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
"
	 	});
	 });
});
function reply(e){
	var content = $(e).prev('.reply_content').val();
	if(!content || content == '回复：'){
		alert('回复内容不能为空');
		return false;
	}
	var pid = $('#pid').val();
	$.ajax({
 		type:"post",
 		url:"/student/comment/reply",
 		data:'pid='+pid+'&content='+content,
 		success:function(data){
 			if(data == 1){
			 	location.reload();
 			}else{
 				alert(data)
 			}
 		}
 	});
}
//-->
</script>
<div class="pad_common">
<div class="common-form">
<div id="event_info">
<table width="60%" class="table_form contentWrap">
	<tr>
	<td width="200">课程名称：<a class="remark event_remark_ts" id="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['remark'];?>
</a></td> 
	<td width="200">学&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;费：<a class="fee event_fee_ts" id="<?php echo $_smarty_tpl->tpl_vars['event']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['event']->value['fee'];?>
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
		<input type="hidden" name="event" id="event" value="<?php echo $_smarty_tpl->tpl_vars['event']->value['event'];?>
"/>
		<div class="comments">
			<?php if (!$_smarty_tpl->tpl_vars['teacherComment']->value){?>
			<p class="no_content">暂时没有点评</p>
			<?php }else{ ?>
			<ul>
				<li class="avatar"><?php echo imageUrl($_smarty_tpl->tpl_vars['teacherComment']->value['creator'],1,50);?>
</li>
				<li class="comment">
					<span class="mark"></span>
					<span style="color:#333"><?php echo teacherName($_smarty_tpl->tpl_vars['teacherComment']->value['creator']);?>
(老师)</span>
					<span class="link"><?php echo $_smarty_tpl->tpl_vars['teacherComment']->value['content'];?>

					<?php  $_smarty_tpl->tpl_vars['attachInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teacherComment']->value['attachInfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachInfo']->key => $_smarty_tpl->tpl_vars['attachInfo']->value){
$_smarty_tpl->tpl_vars['attachInfo']->_loop = true;
?>
					<span class="attach link" link="<?php echo $_smarty_tpl->tpl_vars['path']->value['image'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_path'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_name'];?>
">附件：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['attachInfo']->value['attach_name'],15,"...",true);?>
</span>
					<?php } ?>
					</span>
					<span class="ccc"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['teacherComment']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</span>
					
				</li>				
			</ul>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<ul>
				<li class="avatar"><?php echo imageUrl($_smarty_tpl->tpl_vars['comment']->value['creator'],1,50);?>
</li>
				<li class="comment">
					<span class="mark"></span>
					<span style="color:#333"><?php if ($_smarty_tpl->tpl_vars['comment']->value['character']=="teacher"||$_smarty_tpl->tpl_vars['comment']->value['character']=="school"){?><?php echo teacherName($_smarty_tpl->tpl_vars['comment']->value['creator']);?>
(老师)<?php }elseif($_smarty_tpl->tpl_vars['comment']->value['character']=="student"){?><?php echo studentName($_smarty_tpl->tpl_vars['comment']->value['student']);?>
<?php echo relation($_smarty_tpl->tpl_vars['comment']->value['creator'],$_smarty_tpl->tpl_vars['comment']->value['student']);?>
<?php }?></span>
					<span style="color:#999"><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

					<?php  $_smarty_tpl->tpl_vars['attachInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comment']->value['attachInfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachInfo']->key => $_smarty_tpl->tpl_vars['attachInfo']->value){
$_smarty_tpl->tpl_vars['attachInfo']->_loop = true;
?>
					<span class="attach link" link="<?php echo $_smarty_tpl->tpl_vars['path']->value['image'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_path'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_name'];?>
">附件：<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['attachInfo']->value['attach_name'],15,"...",true);?>
</span>
					<?php } ?>
					</span>
					<span class="ccc"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</span>
					
				</li>				
			</ul>
			<?php } ?>
			<span class="reply">
				<input type="hidden" name="pid" id="pid" value="<?php echo $_smarty_tpl->tpl_vars['teacherComment']->value['id'];?>
"/>
				<input type="text" def='回复：' value="" class="input-text ufocus reply_content" name="content">
				<input name="dosubmit" type="submit" value="回复" class="button state_highlight" style="width:60px;" onclick="reply(this)">
			</span>
			<?php }?>
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
				<li class="event"><span><a href="/student/event/info?id=<?php echo $_smarty_tpl->tpl_vars['other']->value['event'];?>
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
<script language="JavaScript">
<!--
$(".attach").click(function(){
	var link = $(this).attr('link');
	window.top.art.dialog({
		id:'attach',
		content:"<img src='"+link+"'/>", 
		title:'查看附件', 	
		lock:true
	});
});
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>