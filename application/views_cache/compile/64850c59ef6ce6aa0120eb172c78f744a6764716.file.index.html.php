<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 14:18:09
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\user\group\index.html" */ ?>
<?php /*%%SmartyHeaderCode:24899527c8221bfd2a0-30453761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64850c59ef6ce6aa0120eb172c78f744a6764716' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\user\\group\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24899527c8221bfd2a0-30453761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527c8221cc07a0_06835130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527c8221cc07a0_06835130')) {function content_527c8221cc07a0_06835130($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a class="add fb" href="javascript:add();"><em>添加用户组</em></a>
        <a class="on" href="javascript:;"><em>管理用户组</em></a>    
    </div>
</div>
<div class="pad-lr-10">
<div class="table-list">

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">ID</th>
			<th>用户组名</th>
			<th>组类别</th>
			<th>所属机构</th>
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
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['group']->value['type'];?>
</td>
		<td align="center"><?php if (isset($_smarty_tpl->tpl_vars['group']->value['school']['name'])){?><?php echo $_smarty_tpl->tpl_vars['group']->value['school']['name'];?>
<?php }?></td>
		<td align="center">
			<?php if ($_smarty_tpl->tpl_vars['group']->value['gid']!=1){?>
			<a href="javascript:enable(<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
,'<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
')">[权限设置]</a> | 
			<a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
, '<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
')">[修改]</a> | 		
			<a href="javascript:confirmurl('/admin/user_group/delete?gid=<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
', '是否删除?')">[删除]</a>
			<?php }?>
		</td>
    </tr>
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
		iframe:'/admin/user_group/add', 
		title:'添加用户组', 
		width:'700', 
		height:'150', 
		lock:true
	}, function(){
		var d = window.top.art.dialog({
			id:'add'
		}).data.iframe;
		var form = d.document.getElementById('dosubmit');
		form.click();
		return false;
	}, function(){
		window.top.art.dialog({id:'add'}).close();
	});
}
function edit(gid, name) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({
		title:'修改用户组《'+name+'》',
		id:'edit',
		iframe:'/admin/user_group/edit?gid='+gid,
		width:'700',
		height:'150'
	}, function(){
		var d = window.top.art.dialog({id:'edit'}).data.iframe;
		d.document.getElementById('dosubmit').click();
		return false;
	}, function(){
		window.top.art.dialog({id:'edit'}).close();
	});
}
function enable(gid, name) {
	window.top.art.dialog({
		title:'权限设置《'+name+'》',
		id:'enable',
		iframe:'/admin/user_group/enable?gid='+gid,
		width:'700',
		height:'500'
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>