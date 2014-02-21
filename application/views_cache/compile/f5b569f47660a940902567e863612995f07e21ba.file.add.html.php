<?php /* Smarty version Smarty-3.1.14, created on 2013-12-16 11:23:16
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\grade\student\add.html" */ ?>
<?php /*%%SmartyHeaderCode:5325527b4463be6fa9-37205704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5b569f47660a940902567e863612995f07e21ba' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\grade\\student\\add.html',
      1 => 1384508256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5325527b4463be6fa9-37205704',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527b4463c31330_29757713',
  'variables' => 
  array (
    'students' => 0,
    'student' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527b4463c31330_29757713')) {function content_527b4463c31330_29757713($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="table-list">
<form name="myform" action="/school/grade_student/add" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-l cu-span" style='padding-left:30px;'>
				<span onClick="javascript:$('input[name=student[]]').attr('checked', true)">全选</span>/<span onClick="javascript:$('input[name=student[]]').attr('checked', false)">取消</span>
			</th>
		</tr>
	</thead>
</table>
<table width="100%" cellspacing="0">
<tbody>
<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" <?php if ($_smarty_tpl->tpl_vars['student']->value['in']){?>checked=checked<?php }?> name="student[]"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>
<tr><td colspan=1>暂无学生</td></tr>
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