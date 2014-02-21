<?php /* Smarty version Smarty-3.1.14, created on 2013-11-06 16:46:41
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\suggest\index.html" */ ?>
<?php /*%%SmartyHeaderCode:153935278b2d82175c9-50756313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e16e70bf7ad66a4b12c443f64892479e2dcfd386' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\suggest\\index.html',
      1 => 1383727584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153935278b2d82175c9-50756313',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278b2d828c8d0_43944918',
  'variables' => 
  array (
    'suggests' => 0,
    'suggest' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b2d828c8d0_43944918')) {function content_5278b2d828c8d0_43944918($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">

</div>
<div class="table-list">
<form name="myform" action="/school/suggest/delete" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="id[]"/></th>
			<th align="left">发送人</th>
			<th align="left">发送时间</th>
			<th align="left">内容</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['suggest'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['suggest']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suggests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['suggest']->key => $_smarty_tpl->tpl_vars['suggest']->value){
$_smarty_tpl->tpl_vars['suggest']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['suggest']->value['id'];?>
" name="id[]"/></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['suggest']->value['anonymous']){?>【匿名】<?php }else{ ?><?php if (!$_smarty_tpl->tpl_vars['suggest']->value['student']){?><?php echo teacherName($_smarty_tpl->tpl_vars['suggest']->value['from']);?>
(老师)<?php }else{ ?><?php echo studentName($_smarty_tpl->tpl_vars['suggest']->value['student']);?>
<?php echo relation($_smarty_tpl->tpl_vars['suggest']->value['from'],$_smarty_tpl->tpl_vars['suggest']->value['student']);?>
<?php }?><?php }?></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['suggest']->value['create_time'];?>
</td>
		<td align="left" title="<?php echo $_smarty_tpl->tpl_vars['suggest']->value['content'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['suggest']->value['content'],30,"...",true);?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['suggest']->_loop) {
?>
<tr><td colspan=4>暂无反馈信息</td></tr>
<?php } ?>
</tbody>
</table>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="删除" class="button">
</form>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>