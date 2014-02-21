<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 14:40:30
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\teacher\invite.html" */ ?>
<?php /*%%SmartyHeaderCode:14901527862c22d96d4-57285500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af76cd84364f446bcbe9760744dd0c78e666bf59' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\teacher\\invite.html',
      1 => 1385013752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14901527862c22d96d4-57285500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527862c2352870_52005569',
  'variables' => 
  array (
    'applys' => 0,
    'apply' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527862c2352870_52005569')) {function content_527862c2352870_52005569($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
<div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加老师</em></a>
    </div>
</div>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">教师名</th>
			<th align="left">邀请时间</th>
			<th align="left">状态</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['apply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['apply']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['apply']->key => $_smarty_tpl->tpl_vars['apply']->value){
$_smarty_tpl->tpl_vars['apply']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['apply']->value['to'],1,30);?>
&nbsp;<?php echo teacherName($_smarty_tpl->tpl_vars['apply']->value['to']);?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['apply']->value['create_time'];?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['apply']->value['status']==2){?>拒绝<?php }elseif($_smarty_tpl->tpl_vars['apply']->value['status']==0){?>等待对方确认<?php }?></td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['apply']->_loop) {
?>
<tr><td colspan=6>暂无邀请信息</td></tr>
<?php } ?>
</tbody>
</table>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<script language="JavaScript">
<!--
function add(){
	window.top.art.dialog({
		id:'add',
		iframe:'/school/teacher/add', 
		title:'添加老师', 
		width:'380', 
		height:'130',
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>