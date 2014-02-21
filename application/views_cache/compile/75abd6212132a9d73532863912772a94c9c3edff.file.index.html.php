<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 18:43:32
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\version\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2827527c5fd004b220-48065320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75abd6212132a9d73532863912772a94c9c3edff' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\version\\index.html',
      1 => 1384746563,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2827527c5fd004b220-48065320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527c5fd014cf67_16275518',
  'variables' => 
  array (
    'sources' => 0,
    '_GET' => 0,
    'types' => 0,
    'levels' => 0,
    'versions' => 0,
    'version' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527c5fd014cf67_16275518')) {function content_527c5fd014cf67_16275518($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加版本</em></a>   
    </div>
</div>
<div class="pad-lr-10">
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<?php echo Html::select($_smarty_tpl->tpl_vars['sources']->value,$_smarty_tpl->tpl_vars['_GET']->value['source'],'source','source','来源');?>

			<?php echo Html::select($_smarty_tpl->tpl_vars['types']->value,$_smarty_tpl->tpl_vars['_GET']->value['type'],'type','type','类型');?>

			<?php echo Html::select($_smarty_tpl->tpl_vars['levels']->value,$_smarty_tpl->tpl_vars['_GET']->value['level'],'level','level');?>

			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
</form>
<div class="table-list">
<form name="myform" action="/admin/version/delete" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="id[]"/></th>
			<th>ID</th>
			<th>来源</th>
			<th>类型</th>
			<th>版本号</th>
			<th>更新级别</th>
			<th>大小</th>
			<th>时间</th>
			<th>下载地址</th>
			<th>描述</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['version'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['version']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['versions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['version']->key => $_smarty_tpl->tpl_vars['version']->value){
$_smarty_tpl->tpl_vars['version']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
" name="id[]"/></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['sources']->value[$_smarty_tpl->tpl_vars['version']->value['source']];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['version']->value['type']];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['version']->value['version'];?>
</td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['version']->value['level']==1){?>强制<?php }else{ ?>可选<?php }?></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['version']->value['size'];?>
MB</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['version']->value['date'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['version']->value['url'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['version']->value['desc'];?>
</td>
		<td align="center">	
			<a href="javascript:edit('<?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
')">[修改]</a>	
			<a href="javascript:confirmurl('/admin/version/delete?id=<?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
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
<script language="JavaScript">
<!--
function add(){
	window.top.art.dialog({
		id:'add',
		iframe:'/admin/version/add', 
		title:'新版本', 
		width:'700', 
		height:'400', 
		lock:true
	});
}
function edit(id){
	window.top.art.dialog({
		id:'edit',
		iframe:'/admin/version/edit?id='+id, 
		title:'修改版本', 
		width:'700', 
		height:'400', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>