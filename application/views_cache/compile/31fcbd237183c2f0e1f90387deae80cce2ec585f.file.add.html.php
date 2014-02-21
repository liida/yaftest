<?php /* Smarty version Smarty-3.1.14, created on 2013-12-16 11:34:49
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\group\teacher\add.html" */ ?>
<?php /*%%SmartyHeaderCode:745352ae74d9525ae8-96610965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31fcbd237183c2f0e1f90387deae80cce2ec585f' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\group\\teacher\\add.html',
      1 => 1384508279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '745352ae74d9525ae8-96610965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teachers' => 0,
    'teacher' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ae74d95d9613_22288141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ae74d95d9613_22288141')) {function content_52ae74d95d9613_22288141($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="table-list">
<form name="myform" action="/school/group_teacher/add" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-l cu-span" style='padding-left:30px;'>
				<span onClick="javascript:$('input[name=teacher[]]').attr('checked', true)">全选</span>/<span onClick="javascript:$('input[name=teacher[]]').attr('checked', false)">取消</span>
			</th>
		</tr>
	</thead>
</table>
<table width="100%" cellspacing="0">
<tbody>
<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teachers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
" <?php if ($_smarty_tpl->tpl_vars['teacher']->value['in']){?>checked=checked<?php }?> name="teacher[]"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['lastname'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['teacher']->_loop) {
?>
<tr><td colspan=1>暂无老师</td></tr>
<?php } ?>
</tbody>
</table>
<div class="bk15"></div>
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
    <input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button" onclick="window.top.art.dialog({id:'manage'}).close();">
</form>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>