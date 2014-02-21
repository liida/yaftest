<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 15:35:58
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\course\index.html" */ ?>
<?php /*%%SmartyHeaderCode:79075274a9e588ea18-23280506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e84cc65a79c8b6bb234a04f283244f71a74189ef' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\course\\index.html',
      1 => 1383377742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79075274a9e588ea18-23280506',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5274a9e58e87a7_97269989',
  'variables' => 
  array (
    'courseList' => 0,
    'k' => 0,
    'course' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5274a9e58e87a7_97269989')) {function content_5274a9e58e87a7_97269989($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加授课内容</em></a>
    </div>
</div>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">序号</th>
			<th align="left">课程名称</th>
			<th>课程分类</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['course'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['course']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['courseList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['course']->key => $_smarty_tpl->tpl_vars['course']->value){
$_smarty_tpl->tpl_vars['course']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['course']->key;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['course']->value['title'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['course']->value['typeName'];?>
</td>
		<td align="center">	
			<a href="javascript:edit('<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
')">[修改]</a>	
			<a href="javascript:confirmurl('/teacher/course/delete?id=<?php echo $_smarty_tpl->tpl_vars['course']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['course']->_loop) {
?>
<tr><td colspan=3>暂无授课内容</td></tr>
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
		iframe:'/teacher/course/add', 
		title:'添加授课内容', 
		width:'500', 
		height:'150', 
		lock:true
	});
}
function edit(id){
	window.top.art.dialog({
		id:'edit',
		iframe:'/teacher/course/edit?id='+id, 
		title:'修改授课内容', 
		width:'500', 
		height:'150', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>