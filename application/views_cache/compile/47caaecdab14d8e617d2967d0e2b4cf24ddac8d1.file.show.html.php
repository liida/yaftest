<?php /* Smarty version Smarty-3.1.14, created on 2014-01-09 16:16:02
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\comment\show.html" */ ?>
<?php /*%%SmartyHeaderCode:3031052ce555f801bf7-90378110%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47caaecdab14d8e617d2967d0e2b4cf24ddac8d1' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\comment\\show.html',
      1 => 1389255358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3031052ce555f801bf7-90378110',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ce555f9a3bd1_97172926',
  'variables' => 
  array (
    'teacherComment' => 0,
    'path' => 0,
    'attachInfo' => 0,
    'comments' => 0,
    'comment' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce555f9a3bd1_97172926')) {function content_52ce555f9a3bd1_97172926($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
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
 		url:"/school/comment/reply",
 		data:'id='+pid+'&content='+content+'&act=show',
 		success:function(data){
 			if(data == 1){
			 	window.top.art.dialog({
					id:'show_message',
					content:'回复成功', 
					title:'提示', 
					lock:true
				},function(){
					location.reload();
				});
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
<div id="event_info_other" style="margin:0;">
	<div class="other_3" style="margin:0;">
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