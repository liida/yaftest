<?php /* Smarty version Smarty-3.1.14, created on 2014-01-09 15:32:19
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\comment\info.html" */ ?>
<?php /*%%SmartyHeaderCode:313265271d23b6cd4c2-03697718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfa339e1a032114a0321657afb28f7898572e1d9' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\comment\\info.html',
      1 => 1384915293,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313265271d23b6cd4c2-03697718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5271d23b7c10c1_47859102',
  'variables' => 
  array (
    'event' => 0,
    'teacherComment' => 0,
    'path' => 0,
    'attachInfo' => 0,
    'comments' => 0,
    'comment' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271d23b7c10c1_47859102')) {function content_5271d23b7c10c1_47859102($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
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
 		url:"/teacher/comment/reply",
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
	<td colspan=2 width="200">课程名称：<?php echo $_smarty_tpl->tpl_vars['event']->value['remark'];?>
</td> 
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
</table>
</div>
<div id="event_info_other">
	<div class="other_3">
		<div class="comments">
			<ul>
				<li class="comment_2">
					<span style="color:#333"><?php echo studentName($_smarty_tpl->tpl_vars['teacherComment']->value['student']);?>
</span>
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
		</div>
		<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
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