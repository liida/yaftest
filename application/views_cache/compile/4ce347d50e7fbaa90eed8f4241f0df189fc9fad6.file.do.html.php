<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 16:42:09
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\attendance\do.html" */ ?>
<?php /*%%SmartyHeaderCode:454252775a243d24b4-57713943%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce347d50e7fbaa90eed8f4241f0df189fc9fad6' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\attendance\\do.html',
      1 => 1383554526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '454252775a243d24b4-57713943',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52775a2445eed0_92472534',
  'variables' => 
  array (
    'event' => 0,
    'act' => 0,
    'datas' => 0,
    'students' => 0,
    'id' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52775a2445eed0_92472534')) {function content_52775a2445eed0_92472534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.attendanceArea span{clear:both;float: left;padding: 8px 15px;}
</style>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/teacher/attendance/do?act=3" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td></td> 
			<td><span class="attendanceArea">
				<span><input type="radio" name="attendance" class="doattendance" value="1">&nbsp;&nbsp;出勤</span>
				<span><input type="radio" name="attendance" class="doattendance" value="2">&nbsp;&nbsp;缺勤</span>
				<span><input type="radio" name="attendance" class="doattendance" value="3">&nbsp;&nbsp;请假</span>
			</span>
			</td>
		</tr>
		<tr>
			<td width="50">
				<input type="hidden" name="event" value="<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
"/>
				<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
"/>
				<?php  $_smarty_tpl->tpl_vars['students'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['students']->_loop = false;
 $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['students']->key => $_smarty_tpl->tpl_vars['students']->value){
$_smarty_tpl->tpl_vars['students']->_loop = true;
 $_smarty_tpl->tpl_vars['event']->value = $_smarty_tpl->tpl_vars['students']->key;
?>
	    			<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
	    			<input type="hidden" name="datas[<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['student']->value;?>
"/>
	    			<?php } ?>
	    		<?php } ?>
    		</td> 
			<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>