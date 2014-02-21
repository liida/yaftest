<?php /* Smarty version Smarty-3.1.14, created on 2013-11-25 13:48:05
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\notify\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6655292e49567e5c0-92100543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '872fc6addcdbc92c4855555131951045d645e10d' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\notify\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6655292e49567e5c0-92100543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'notifies' => 0,
    'notify' => 0,
    'key' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5292e49578fcc2_66523913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5292e49578fcc2_66523913')) {function content_5292e49578fcc2_66523913($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-lr-10">
<div class="subnav">
</div>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="content" class="input-text ufocus" id="content" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['content'];?>
" def="内容">
			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
</form>
<div class="table-list">

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">内容</th>
			<th>接收老师</th>
			<th>接收学生</th>
			<th>发送时间</th>
			<th>状态</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['notify'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notify']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['notifies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notify']->key => $_smarty_tpl->tpl_vars['notify']->value){
$_smarty_tpl->tpl_vars['notify']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['notify']->key;
?>
    <tr>
		<td align="left" title="<?php echo $_smarty_tpl->tpl_vars['notify']->value['content'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notify']->value['content'],30,"...",true);?>
</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['notify']->value['teacher']){?><a class="link" href="javascript:show(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
,'teacher');"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notify']->value['teacher'],30,"...",true);?>
</a><?php }else{ ?>无<?php }?>
		<div class="send_teacher_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['notify']->value['teacher'];?>
</div>
		</td>
		<td align="center">
		<?php if ($_smarty_tpl->tpl_vars['notify']->value['student']){?><a class="link" href="javascript:show(<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
,'student');"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['notify']->value['student'],30,"...",true);?>
</a><?php }else{ ?>无<?php }?>
		<div class="send_student_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['notify']->value['student'];?>
</div>
		</td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['notify']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['notify']->value['status']==1){?>已发送<?php }elseif($_smarty_tpl->tpl_vars['notify']->value['status']==0){?>待发送<?php }?></td>
    </tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--
function show(key,type){
	window.top.art.dialog({
		id:'show',
		content:$(".send_"+type+"_"+key)[0], 
		title:'通知人员', 
		width:'450', 
		height:'300', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>