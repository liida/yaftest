<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 17:56:58
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\grade.html" */ ?>
<?php /*%%SmartyHeaderCode:168952ca7dea5ba891-61400561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca8b66294bd3ec84d20fcbc867a8d7c45c7830fc' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\grade.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168952ca7dea5ba891-61400561',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'student' => 0,
    'grades' => 0,
    'grade' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ca7dea624036_19981148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ca7dea624036_19981148')) {function content_52ca7dea624036_19981148($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-lr-10">
<div class="table-list">
<form name="myform" action="/school/student/grade?student=<?php echo $_smarty_tpl->tpl_vars['student']->value;?>
" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-l cu-span" style='padding-left:30px;'>
				<span onClick="javascript:$('input[name=grade[]]').attr('checked', true)">全选</span>/<span onClick="javascript:$('input[name=grade[]]').attr('checked', false)">取消</span>
			</th>
		</tr>
	</thead>
</table>
<table width="100%" cellspacing="0">
<tbody>
<?php  $_smarty_tpl->tpl_vars['grade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->key => $_smarty_tpl->tpl_vars['grade']->value){
$_smarty_tpl->tpl_vars['grade']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" <?php echo $_smarty_tpl->tpl_vars['grade']->value['checked'];?>
 value="<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
" name="grade[]"/>&nbsp;<?php echo $_smarty_tpl->tpl_vars['grade']->value['name'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['grade']->_loop) {
?>
<tr><td colspan=1>暂无班级</td></tr>
<?php } ?>
</tbody>
</table>
<div class="bk15"></div>
    <input name="dosubmit" type="submit" id="dosubmit" value="确定" class="dialog">
</form>
</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>