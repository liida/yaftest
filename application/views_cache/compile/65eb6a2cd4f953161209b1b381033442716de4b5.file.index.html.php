<?php /* Smarty version Smarty-3.1.14, created on 2013-11-14 15:15:49
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\student\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26515528478a5934980-46409296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65eb6a2cd4f953161209b1b381033442716de4b5' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\student\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26515528478a5934980-46409296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'students' => 0,
    'student' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528478a5a1ef81_01712170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528478a5a1ef81_01712170')) {function content_528478a5a1ef81_01712170($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
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
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			<?php echo Html::selectStatus($_smarty_tpl->tpl_vars['_GET']->value['status'],'status','status','状态');?>

			<input type="submit" value="搜索" class="button search" name="search">
			</td>
			</tr>
	    </tbody>
	</table>
</form>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">学生名</th>
			<th align="left">加入时间</th>
			<th align="left">状态</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <tr>
		<td align="left"><a href="javascript:info(<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
')" class="link"><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['id'],2,30);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</a></td>
		<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['student']->value['status']==2){?>冻结<?php }elseif($_smarty_tpl->tpl_vars['student']->value['status']==1){?>删除<?php }elseif($_smarty_tpl->tpl_vars['student']->value['status']==0){?>正常<?php }?></td>
		
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
function info(student,name){
	window.top.art.dialog({
		id:'info',
		iframe:'/admin/student/info?student='+student, 
		title:'学生详情《'+name+'》', 
		width:'580', 
		height:'380',
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>