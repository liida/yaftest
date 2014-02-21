<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 17:56:03
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\user\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2657452ca7db3bf3cf2-45190698%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a15d4d314573dd54f570762298a6b916f178f1f3' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\user\\edit.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2657452ca7db3bf3cf2-45190698',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ca7db3d092b0_41536284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ca7db3d092b0_41536284')) {function content_52ca7db3d092b0_41536284($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/user/edit" method="post" id="myform">
<table width="100%" class="table_form contentWrap">
	<tr>
		<td width="120" align="right">昵称：</td> 
		<td><?php if ($_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname']||$_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['nickname'];?>
<?php }?></td>
	</tr>
	<tr>
		<td width="120" align="right">用户组：</td>
		<td>
			<select name="info[gid]">
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value['gid']==$_smarty_tpl->tpl_vars['user']->value['gid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
			<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></input></td> 
		<td><input name="dosubmit" type="submit" value="提交" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>