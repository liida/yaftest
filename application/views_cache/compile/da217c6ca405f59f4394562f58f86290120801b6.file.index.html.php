<?php /* Smarty version Smarty-3.1.14, created on 2013-11-15 17:29:15
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\message\index.html" */ ?>
<?php /*%%SmartyHeaderCode:324395274753c99fcf2-13511581%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da217c6ca405f59f4394562f58f86290120801b6' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\message\\index.html',
      1 => 1384507699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324395274753c99fcf2-13511581',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274753ca95eb8_65338005',
  'variables' => 
  array (
    'c' => 0,
    'type' => 0,
    'messages' => 0,
    'message' => 0,
    'applys' => 0,
    'apply' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274753ca95eb8_65338005')) {function content_5274753ca95eb8_65338005($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="col-tab">
<ul class="tabBut_ts cu-li">
           <li id="tab_setting_1" <?php if ($_smarty_tpl->tpl_vars['c']->value=='message'&&$_smarty_tpl->tpl_vars['type']->value=='1'){?>class="on"<?php }?> onclick="message(1);">通知</li>
           <li id="tab_setting_2" <?php if ($_smarty_tpl->tpl_vars['c']->value=='message'&&$_smarty_tpl->tpl_vars['type']->value=='2'){?>class="on"<?php }?> onclick="message(2);">问卷调查</li>
           <li id="tab_setting_3" <?php if ($_smarty_tpl->tpl_vars['c']->value=='apply'){?>class="on"<?php }?> onclick="message(3);">申请</li>
</ul>
<?php if ($_smarty_tpl->tpl_vars['c']->value=='message'&&$_smarty_tpl->tpl_vars['type']->value=='1'){?>
<div id="message_1" class="contentList">
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
<ul class="message_ts">
	<li class="logo"><?php if ($_smarty_tpl->tpl_vars['message']->value['school']){?><?php echo imageUrl($_smarty_tpl->tpl_vars['message']->value['school'],3,50);?>
<?php }else{ ?><?php echo imageUrl($_smarty_tpl->tpl_vars['message']->value['from'],1,50);?>
<?php }?></li>
	<li class="content"><p class="black"><?php echo schoolName($_smarty_tpl->tpl_vars['message']->value['school']);?>
</p><p><?php echo $_smarty_tpl->tpl_vars['message']->value['content'];?>
</p></li>
	<li class="date"><p class="black2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['message']->value['create_time'],'%Y-%m-%d %H:%M');?>
<p></li>
</ul>  
<?php }
if (!$_smarty_tpl->tpl_vars['message']->_loop) {
?>
<ul class="message_ts">
<li>暂无通知消息</li>
</ul>
<?php } ?>
</div>  
<?php }elseif($_smarty_tpl->tpl_vars['c']->value=='message'&&$_smarty_tpl->tpl_vars['type']->value=='2'){?>
<div id="message_2" class="contentList">
<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value){
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
<ul class="message_ts">
	<li class="logo"><?php if ($_smarty_tpl->tpl_vars['message']->value['school']){?><?php echo imageUrl($_smarty_tpl->tpl_vars['message']->value['school'],3,50);?>
<?php }else{ ?><?php echo imageUrl($_smarty_tpl->tpl_vars['message']->value['from'],1,50);?>
<?php }?></li>
	<li class="content"><p class="black"><?php echo schoolName($_smarty_tpl->tpl_vars['message']->value['school']);?>
</p><p class="link" style="cursor: pointer;" onclick="vote(<?php echo $_smarty_tpl->tpl_vars['message']->value['source']['id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['message']->value['source']['title'];?>
</p></li>
	<li class="date"><p class="black2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['message']->value['create_time'],'%Y-%m-%d %H:%M');?>
<p></li>
</ul>  
<?php }
if (!$_smarty_tpl->tpl_vars['message']->_loop) {
?>
<ul class="message_ts">
<li>暂无问卷调查</li>
</ul>  
<?php } ?>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['c']->value=='apply'){?>
<div id="message_3" class="contentList">
<?php  $_smarty_tpl->tpl_vars['apply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['apply']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['apply']->key => $_smarty_tpl->tpl_vars['apply']->value){
$_smarty_tpl->tpl_vars['apply']->_loop = true;
?>
<ul class="message_ts">
	<li class="logo"><?php if ($_smarty_tpl->tpl_vars['apply']->value['type']==3||$_smarty_tpl->tpl_vars['apply']->value['type']==7){?><?php echo imageUrl($_smarty_tpl->tpl_vars['apply']->value['from'],3,50);?>
<?php }else{ ?><?php echo imageUrl($_smarty_tpl->tpl_vars['apply']->value['from'],1,50);?>
<?php }?></li>
	<li class="content"><p class="black"><?php if ($_smarty_tpl->tpl_vars['apply']->value['type']==3||$_smarty_tpl->tpl_vars['apply']->value['type']==7){?><?php echo schoolName($_smarty_tpl->tpl_vars['apply']->value['from']);?>
<?php }else{ ?><?php echo userName($_smarty_tpl->tpl_vars['apply']->value['from']);?>
<?php }?></p><p class="link" style="cursor: pointer;" onclick="doapply(<?php echo $_smarty_tpl->tpl_vars['apply']->value['id'];?>
,'<?php echo applyContent($_smarty_tpl->tpl_vars['apply']->value['type'],$_smarty_tpl->tpl_vars['apply']->value['from'],$_smarty_tpl->tpl_vars['apply']->value['student']);?>
')"><?php echo applyContent($_smarty_tpl->tpl_vars['apply']->value['type'],$_smarty_tpl->tpl_vars['apply']->value['from'],$_smarty_tpl->tpl_vars['apply']->value['student']);?>
</p></li>
	<li class="date"><p class="black2"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['apply']->value['create_time'],'%Y-%m-%d %H:%M');?>
<p></li>
</ul>  
<?php }
if (!$_smarty_tpl->tpl_vars['apply']->_loop) {
?>
<ul class="message_ts">
<li>暂无申请</li>
</ul>  
<?php } ?>
</div>
<?php }?>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>	
</div>
<script language="JavaScript">
<!--
function message(type){
	if(type == 3) location.href='/teacher/apply/index';
	else if(type == 0 || type == 1 || type == 2)location.href='/teacher/message/index?type='+type;
}
function vote(id){
	window.top.art.dialog({
		id:'vote',
		iframe:'/teacher/vote/info?id='+id, 
		title:'问卷详情', 
		width:'700', 
		height:'400', 
		lock:true
	});
}
function doapply(id,content){
	window.top.art.dialog({
		id:'apply',
		content:content, 
		title:'是否同意', 
		lock:true
	},function(){
		$.ajax({
			type:'post',
			url:'/teacher/apply/do',
			data:'id='+id+'&status=1',
			success:function(data){
				if(data=="1"){
					alert("加入机构成功")
					location.reload();
				}else{
					alert(data)
				}
			}
		});
		window.top.art.dialog({id:'apply'}).close();
	}, function(){
		/*
		$.ajax({
			type:'post',
			url:'/teacher/apply/do',
			data:'id='+id+'&status=2',
			success:function(data){
				if(data=="1"){
					location.reload();
				}else{
					alert(data)
				}
			}
		});
		*/
		window.top.art.dialog({id:'apply'}).close();
	});
}
//-->
</script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>