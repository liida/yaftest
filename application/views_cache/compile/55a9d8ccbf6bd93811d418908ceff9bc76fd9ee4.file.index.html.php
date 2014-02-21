<?php /* Smarty version Smarty-3.1.14, created on 2013-11-28 11:39:09
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\teacher\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19407527077af786e29-51234440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55a9d8ccbf6bd93811d418908ceff9bc76fd9ee4' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\teacher\\index.html',
      1 => 1385101267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19407527077af786e29-51234440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527077af8f4820_31034139',
  'variables' => 
  array (
    '_GET' => 0,
    'groups' => 0,
    'teachers' => 0,
    'teacher' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527077af8f4820_31034139')) {function content_527077af8f4820_31034139($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    
</div>
<p class="content_tip">注:冻结的老师无法开课，发送通知,问卷</p>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="teacherName" class="input-text ufocus" id="teacherName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['teacherName'];?>
" def="老师名">
			<?php echo Html::select($_smarty_tpl->tpl_vars['groups']->value,$_smarty_tpl->tpl_vars['_GET']->value['group'],'group','group','分组');?>

			<?php echo Html::selectStatus($_smarty_tpl->tpl_vars['_GET']->value['status'],'status','status','状态');?>

			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
	<input type="hidden" name="pc_hash" value="bLHaEA">
</form>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">教师名</th>
			<th align="left">所在组</th>
			<th align="left">联系方式</th>
			<th align="left">加入时间</th>
			<th align="left">状态</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teachers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['teacher']->value['teacher'],1,30);?>
&nbsp;<a href="javascript:teacherInfo(<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
,'<?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
')" class="link"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
</a></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['groupNames'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['account'];?>
</td>
		<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['teacher']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['teacher']->value['status']==2){?><a class="red" href="/school/teacher/freeze?teacher=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
">冻结</a><?php }elseif($_smarty_tpl->tpl_vars['teacher']->value['status']==1){?>删除<?php }elseif($_smarty_tpl->tpl_vars['teacher']->value['status']==0){?><a class="link" href="/school/teacher/freeze?teacher=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
">正常</a><?php }?></td>
		<td align="center">	
			<?php if ($_smarty_tpl->tpl_vars['teacher']->value['status']!=1){?>
			<a href="javascript:group(<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
,'<?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
')">[分组]</a>
			<a href="javascript:confirmurl('/school/teacher/delete?teacher=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
', '是否删除?')">[删除]</a>
			<?php }?>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['teacher']->_loop) {
?>
<tr><td colspan=6>暂无老师</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--

function group(teacher,name){
	window.top.art.dialog({
		id:'group',
		iframe:'/school/teacher/group?teacher='+teacher, 
		title:'老师分组《'+name+'》', 
		width:'700', 
		height:'500', 
		lock:true
	}, function(){
		var d = window.top.art.dialog({
			id:'group'
		}).data.iframe;
		var form = d.document.getElementById('dosubmit');
		form.click();
		return false;
	}, function(){
		window.top.art.dialog({id:'group'}).close();
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>