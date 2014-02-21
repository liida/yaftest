<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 14:18:03
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\user\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:2557527c821b127b05-21795807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b6f96d403c9e0e60f51b852d52a918b6c40cf5' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\user\\edit.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2557527c821b127b05-21795807',
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
  'unifunc' => 'content_527c821b19ce03_30071739',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527c821b19ce03_30071739')) {function content_527c821b19ce03_30071739($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a href="/admin/user/index"><em>管理用户</em></a><span>|</span>
        <a href="/admin/user/add"><em>添加用户</em></a>  
    </div>
</div>
<div class="pad_10">
<div class="common-form">
<form name="myform" action="/admin/user/edit" method="post" id="myform">
<table width="100%" class="table_form contentWrap">
<tr>
<td width="80">昵称</td> 
<td><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</td>
</tr>
<tr>
<td>用户组</td>
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
</table>
    <div class="bk15"></div>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"></input>
    <input name="dosubmit" type="submit" value="提交" class="button">
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>