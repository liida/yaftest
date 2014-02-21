<?php /* Smarty version Smarty-3.1.14, created on 2014-01-06 18:36:01
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\grade\index.html" */ ?>
<?php /*%%SmartyHeaderCode:143515278b121042275-29232496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '899441a94f8ae5b864baedae8719ea6cddcc9cbc' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\grade\\index.html',
      1 => 1389004559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143515278b121042275-29232496',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278b121109624_01133549',
  'variables' => 
  array (
    'grades' => 0,
    'grade' => 0,
    'pages' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b121109624_01133549')) {function content_5278b121109624_01133549($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加班级</em></a>
    </div>
</div>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">班级名称</th>
			<th>学生数</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['grade'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['grade']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['grade']->key => $_smarty_tpl->tpl_vars['grade']->value){
$_smarty_tpl->tpl_vars['grade']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['grade']->value['name'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['grade']->value['num'];?>
</td>
		<td align="center">	
			<!--<a href="javascript:manage('<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
')">[添加学生]</a>--> <A href="javascript:;" onclick="student('<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
')" name="selectStudent" num="0" type="button" id="selectStudent">[添加学生]</A>
			<a href="javascript:edit('<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
')">[修改名称]</a>	
			<a href="javascript:confirmurl('/school/grade/delete?id=<?php echo $_smarty_tpl->tpl_vars['grade']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['grade']->_loop) {
?>
<tr><td colspan=3>暂无班级</td></tr>
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
		iframe:'/school/grade/add', 
		title:'添加班级', 
		width:'500', 
		height:'150', 
		lock:true
	});
}
function edit(id){
	window.top.art.dialog({
		id:'edit',
		iframe:'/school/grade/edit?id='+id, 
		title:'修改班级', 
		width:'500', 
		height:'150', 
		lock:true
	});
}
function manage(id){
	window.top.art.dialog({
		id:'manage',
		iframe:'/school/grade_student/index?id='+id, 
		title:'班级管理', 
		width:'700', 
		height:'500', 
		lock:true
	});
}

function student(grade){	
	window.top.art.dialog({
		id:"student",
		iframe:"/public/selectStudent?school=<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
&event=0&gradeEdit=" + grade, 
		title:"选择学生", 
		width:window.top.document.body.offsetWidth-100, 
		height:window.top.document.body.offsetHeight-150,
		lock:true
	}, function(){
		var d = window.top.art.dialog({
			id:"student"
		}).data.iframe;		
		var form = d.document.getElementById("dosubmit");
		form.click();
		window.location.reload();
		return false;		
	}, function(){
		window.top.art.dialog({id:"student"}).close();
	});
}

//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>