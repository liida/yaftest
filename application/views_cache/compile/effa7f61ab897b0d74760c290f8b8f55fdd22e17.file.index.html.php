<?php /* Smarty version Smarty-3.1.14, created on 2013-11-28 13:38:11
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\user\group\index.html" */ ?>
<?php /*%%SmartyHeaderCode:13300528c51440effe3-73268585%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'effa7f61ab897b0d74760c290f8b8f55fdd22e17' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\user\\group\\index.html',
      1 => 1385101054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13300528c51440effe3-73268585',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528c514418c3e4_98717886',
  'variables' => 
  array (
    'groups' => 0,
    'k' => 0,
    'group' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528c514418c3e4_98717886')) {function content_528c514418c3e4_98717886($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加组</em></a>   
    </div>
</div>
<p class="content_tip">注:管理员分配管理员组后,拥有该管理员组的所有权限</p>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">序号</th>
			<th>用户组名</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
		<td align="center">
			<a href="javascript:enable(<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
')">[权限设置]</a> | 
			<a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
, '<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
')">[修改]</a> | 		
			<a href="javascript:confirmurl('/school/user_group/delete?gid=<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['group']->_loop) {
?>
<tr><td colspan=3>暂无用户组</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--
function add(){
	window.top.art.dialog({
		id:'add',
		iframe:'/school/user_group/add', 
		title:'添加组', 
		width:'500', 
		height:'130', 
		lock:true
	});
}
function edit(gid, name) {
	window.top.art.dialog({
		title:'修改组《'+name+'》',
		id:'edit',
		iframe:'/school/user_group/edit?gid='+gid,
		width:'500',
		height:'130'
	});
}
function enable(gid, name) {
	window.top.art.dialog({
		title:'权限设置《'+name+'》',
		id:'enable',
		iframe:'/school/user_group/enable?gid='+gid,
		width:'700',
		height:'500'
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>