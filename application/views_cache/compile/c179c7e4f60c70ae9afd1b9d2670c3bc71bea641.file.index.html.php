<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 10:35:06
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\teacher\index.html" */ ?>
<?php /*%%SmartyHeaderCode:30897526f1eda447212-04072207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c179c7e4f60c70ae9afd1b9d2670c3bc71bea641' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\teacher\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30897526f1eda447212-04072207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'teachers' => 0,
    'teacher' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1eda50a716_52952889',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1eda50a716_52952889')) {function content_526f1eda50a716_52952889($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
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
			<input type="text" name="teacherName" class="input-text ufocus" id="teacherName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['teacherName'];?>
" def="老师名">
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
			<th align="left">联系方式</th>
			<th align="left">加入时间</th>
			<th align="left">状态</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teachers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
?>
    <tr>
		<td align="left"><a href="javascript:info(<?php echo $_smarty_tpl->tpl_vars['teacher']->value['user'];?>
,'<?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
')" class="link"><?php echo imageUrl($_smarty_tpl->tpl_vars['teacher']->value['user'],1,30);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
</a></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['account'];?>
</td>
		<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['teacher']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['teacher']->value['status']==2){?>冻结<?php }elseif($_smarty_tpl->tpl_vars['teacher']->value['status']==1){?>删除<?php }elseif($_smarty_tpl->tpl_vars['teacher']->value['status']==0){?>正常<?php }?></td>
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
function info(teacher,name){
	window.top.art.dialog({
		id:'info',
		iframe:'/admin/teacher/info?teacher='+teacher, 
		title:'老师详情《'+name+'》', 
		width:'580', 
		height:'380', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>