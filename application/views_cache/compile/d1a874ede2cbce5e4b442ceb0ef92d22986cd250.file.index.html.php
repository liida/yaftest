<?php /* Smarty version Smarty-3.1.14, created on 2013-12-30 17:48:30
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:508552c1416e2691e6-41695990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1a874ede2cbce5e4b442ceb0ef92d22986cd250' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\user\\index.html',
      1 => 1383647218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '508552c1416e2691e6-41695990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52c1416e3ad5b8_20598017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c1416e3ad5b8_20598017')) {function content_52c1416e3ad5b8_20598017($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加管理员</em></a>   
    </div>
</div>
<p class="content_tip">注:管理员分配管理员组后,拥有该管理员组的所有权限</p>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">UID</th>
			<th>用户名</th>
			<th>用户组</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['user']->key;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
</td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname']||$_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['nickname'];?>
<?php }?></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['group'];?>
</td>
		<td align="center">
			<a href="javascript:enable(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
,'<?php if ($_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname']||$_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['nickname'];?>
<?php }?>')">[权限设置]</a> | 
			<a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
,'<?php if ($_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname']||$_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['lastname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['userInfo']['nickname'];?>
<?php }?>')">[修改]</a> | 		
			<a href="javascript:confirmurl('/school/user/delete?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['user']->_loop) {
?>
<tr><td colspan=4>暂无管理员</td></tr>
<?php } ?>
</tbody>
</table>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<script language="JavaScript">
<!--
function add() {
	window.top.art.dialog({
		title:'添加管理员',
		id:'add',
		iframe:'/school/user/add',
		width:'500',
		height:'150'
	});
}
function edit(id, name) {
	window.top.art.dialog({
		title:'修改管理员《'+name+'》',
		id:'edit',
		iframe:'/school/user/edit?id='+id,
		width:'500',
		height:'150'
	});
}
function enable(id, name) {
	window.top.art.dialog({
		title:'权限设置《'+name+'》',
		id:'enable',
		iframe:'/school/user/enable?id='+id,
		width:'700',
		height:'500'
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>