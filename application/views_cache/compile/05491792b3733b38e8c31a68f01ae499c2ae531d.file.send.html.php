<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 11:59:14
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\notify\send.html" */ ?>
<?php /*%%SmartyHeaderCode:22100527c6192cc6b86-70455032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05491792b3733b38e8c31a68f01ae499c2ae531d' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\notify\\send.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22100527c6192cc6b86-70455032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'votes' => 0,
    '_GET' => 0,
    'vote' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527c6192d3be81_36715478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527c6192d3be81_36715478')) {function content_527c6192d3be81_36715478($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#title").formValidator({onshow:"请输入标题",onfocus:"标题长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"标题长度为2-20个字符"});
	$("#multi").formValidator({onshow:"请选择类型",onfocus:"请选择类型"}).inputValidator({min:1,max:2,onerror:"请选择类型"});
	<?php if (!$_smarty_tpl->tpl_vars['votes']->value&&$_smarty_tpl->tpl_vars['_GET']->value['type']==2){?>
	window.top.art.dialog({
		id:'add',
		iframe:'/admin/vote/add', 
		title:'新问卷', 
		width:'750', 
		height:'460', 
		lock:true
	});
	<?php }?>
});
//-->
</script>
<div class="pad-lr-10">
<div class="common-form">
<form name="myform" action="/admin/notify/send" method="post" id="myform">
	<table width="100%" class="table_form">
		<input type="hidden" name="type" id="type" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['type'];?>
">
		<tr>
			<td width="120" align="right">选择老师</td> 
			<td><?php echo Html::selectTeacher(0);?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">选择学生</td> 
			<td><?php echo Html::selectStudent(0);?>

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
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>