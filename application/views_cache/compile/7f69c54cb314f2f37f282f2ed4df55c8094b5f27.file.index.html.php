<?php /* Smarty version Smarty-3.1.14, created on 2013-11-14 15:05:30
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:7455526f1e8be0ab45-47925522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f69c54cb314f2f37f282f2ed4df55c8094b5f27' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\user\\index.html',
      1 => 1384409185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7455526f1e8be0ab45-47925522',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1e8be7fe48_12093416',
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1e8be7fe48_12093416')) {function content_526f1e8be7fe48_12093416($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a class="on" href="javascript:;"><em>管理用户</em></a><span>|</span>
        <a href="<?php echo url('admin','user','add');?>
"><em>添加用户</em></a>  
    </div>
</div>
<div class="pad-lr-10">
<div class="table-list">

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">UID</th>
			<th>用户名</th>
			<th>用户类别</th>
			<th>管理机构</th>
			<th>管理操作</th>
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
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['user']->value['type'];?>
</td>
		<td align="center"><?php if (isset($_smarty_tpl->tpl_vars['user']->value['school']['name'])){?><?php echo $_smarty_tpl->tpl_vars['user']->value['school']['name'];?>
<?php }?></td>
		<td align="center">
			<a href="javascript:enable(<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
')">[权限设置]</a> | 
			<a href="/admin/user/edit?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">[修改]</a> | 		
			<a href="javascript:confirmurl('/admin/user/delete?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php } ?>
</tbody>
</table>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<script language="JavaScript">
<!--
function enable(id, name) {
	window.top.art.dialog({
		title:'权限设置《'+name+'》',
		id:'enable',
		iframe:'/admin/user/enable?id='+id,
		width:'700',
		height:'500'
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>