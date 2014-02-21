<?php /* Smarty version Smarty-3.1.14, created on 2013-12-27 16:27:42
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\total\studentfee.html" */ ?>
<?php /*%%SmartyHeaderCode:1208352bd2e6ba76499-25537640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c94e8a68ccea88475a6cd9271cd2c89a36f820' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\total\\studentfee.html',
      1 => 1388132860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208352bd2e6ba76499-25537640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bd2e6baf0295_58008879',
  'variables' => 
  array (
    '_GET' => 0,
    'sorts' => 0,
    'students' => 0,
    'student' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bd2e6baf0295_58008879')) {function content_52bd2e6baf0295_58008879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript">
function dosort(type){
	var sorts = $("#sorts").val();
	if(sorts.indexOf(type) >= 0){
		if(sorts.indexOf('desc') >= 0){
			sorts = type+' asc';
		}else{
			sorts = type+' desc';
		}
	}else{
		sorts = type+' desc';
	}
	$("#sorts").val(sorts);
	$("#searchform").submit();
}
</script>
<div class="pad_common">
<form method="get" action="" name="searchform"  id="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			缴费金额&nbsp;<input type="text" name="money_start" class="input-text" id="money_start" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['money_start'];?>
" size=5>&nbsp;至&nbsp;<input type="text" name="money_end" class="input-text" id="money_end" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['money_end'];?>
" size=5>
			<input type="hidden" name="sorts" class="input-text" id="sorts" value="<?php echo $_smarty_tpl->tpl_vars['sorts']->value;?>
">
			<input type="submit" value="搜索" class="button search" name="search">
			<input type="submit" value="导出" class="button search" name="export">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
</form>
<div class="table-list">
<table width="100%" cellspacing="0" >
	<thead>
		<tr>
			<th>学生</th>
			<th><a class="link" href="javascript:dosort('money')">已缴费金额(元)</a></th>
			<th><a class="link" href="javascript:dosort('used')">已消费金额(元)</a></th>
			<th><a class="link" href="javascript:dosort('balance')">剩余金额(元)</a></th>
			
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <tr>
		<td align="left"><a href="javascript:studentInfo(<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
,'<?php echo studentName($_smarty_tpl->tpl_vars['student']->value['student']);?>
')" class="link"><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['student'],2,30);?>
&nbsp;<?php echo studentName($_smarty_tpl->tpl_vars['student']->value['student']);?>
</a></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['student']->value['money'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['student']->value['used'];?>
</td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['student']->value['balance']<0){?><p class="red"><?php echo $_smarty_tpl->tpl_vars['student']->value['balance'];?>
</p><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['student']->value['balance'];?>
<?php }?></td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>
<tr><td colspan=7>暂无记录</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>