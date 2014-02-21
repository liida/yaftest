<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 12:29:24
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\notify\send.html" */ ?>
<?php /*%%SmartyHeaderCode:1146452747fa47efa50-78617369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70449ba3d8f5aefe5e68f6573ba12fc6218e22fd' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\notify\\send.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1146452747fa47efa50-78617369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'votes' => 0,
    '_GET' => 0,
    'school' => 0,
    'vote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52747fa48802f7_11056535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52747fa48802f7_11056535')) {function content_52747fa48802f7_11056535($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#title").formValidator({onshow:"请输入标题",onfocus:"标题长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"标题长度为2-20个字符"});
	$("#multi").formValidator({onshow:"请选择类型",onfocus:"请选择类型"}).inputValidator({min:1,max:2,onerror:"请选择类型"});
	<?php if (!$_smarty_tpl->tpl_vars['votes']->value&&$_smarty_tpl->tpl_vars['_GET']->value['type']==2){?>
	window.top.art.dialog({
		id:'add',
		iframe:'/school/vote/add', 
		title:'新问卷', 
		width:'750', 
		height:'460', 
		lock:true
	});
	<?php }?>
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/notify/send" method="post" id="myform">
	<table width="100%" class="table_form">
		<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['type'];?>
">
		<tr>
			<td width="120" align="right">选择老师</td> 
			<td><?php echo Html::selectTeacher($_smarty_tpl->tpl_vars['school']->value);?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">选择学生</td> 
			<td><?php echo Html::selectStudent($_smarty_tpl->tpl_vars['school']->value);?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">内容</td> 
			<td>
			<?php if ($_smarty_tpl->tpl_vars['_GET']->value['type']==1){?>
			<textarea name="content" id="content" style="width:50%;height:120px;"></textarea>
			<?php }elseif($_smarty_tpl->tpl_vars['_GET']->value['type']==2){?>
			<?php echo Html::select($_smarty_tpl->tpl_vars['votes']->value,$_smarty_tpl->tpl_vars['vote']->value,'vote','vote');?>

			<?php }?>
			</td>
		</tr>
		<tr>
			<td width="120" align="right"></td> 
			<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
			</td>
		</tr>
	</table>
</form>
<div id="vote" style="display:none;"><?php echo Html::select($_smarty_tpl->tpl_vars['votes']->value,'','vote','vote');?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>