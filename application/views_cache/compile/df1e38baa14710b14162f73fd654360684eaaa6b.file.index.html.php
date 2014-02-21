<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:38:46
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\group\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2570252785feb725249-89957375%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df1e38baa14710b14162f73fd654360684eaaa6b' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\group\\index.html',
      1 => 1389004721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2570252785feb725249-89957375',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52785feb762148_30942028',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'pages' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52785feb762148_30942028')) {function content_52785feb762148_30942028($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加教师组</em></a>
    </div>
</div>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">分组名称</th>
			<th>老师数</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['group']->value['num'];?>
</td>
		<td align="center">	
			<!--<a href="javascript:manage('<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
')">[添加老师]</a>--> <A href="javascript:;" onclick="teacher('<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
')" name="selectTeacher" num="0" type="button" id="selectTeacher">[添加老师]</A>
			<a href="javascript:edit('<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
')">[修改名称]</a>	
			<a href="javascript:confirmurl('/school/group/delete?id=<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['group']->_loop) {
?>
<tr><td colspan=3>暂无分组</td></tr>
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
		iframe:'/school/group/add', 
		title:'添加教师组', 
		width:'500', 
		height:'130', 
		lock:true
	});
}
function edit(id){
	window.top.art.dialog({
		id:'edit',
		iframe:'/school/group/edit?id='+id, 
		title:'修改教师组', 
		width:'500', 
		height:'130', 
		lock:true
	});
}
function manage(id){
	window.top.art.dialog({
		id:'manage',
		iframe:'/school/group_teacher/index?id='+id, 
		title:'管理教师组', 
		width:'700', 
		height:'500', 
		lock:true
	});
}

function teacher(group){	
	window.top.art.dialog({
		id:"teacher",
		iframe:"/public/selectTeacher?school=<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
&event=0&groupEdit=" + group, 
		title:"选择老师", 
		width:window.top.document.body.offsetWidth-100, 
		height:window.top.document.body.offsetHeight-150,
		lock:true
	}, function(){
		var d = window.top.art.dialog({
			id:"teacher"
		}).data.iframe;		
		var form = d.document.getElementById("dosubmit");
		form.click();
		window.location.reload();
		return false;		
	}, function(){
		window.top.art.dialog({id:"teacher"}).close();
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>