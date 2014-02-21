<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 18:24:47
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\resource\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2956052ccf43d4dfb74-35543800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078ab921f1b9f7da6f8e3ee81167092ff044f85d' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\resource\\index.html',
      1 => 1389176635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2956052ccf43d4dfb74-35543800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccf43d6db874_49887102',
  'variables' => 
  array (
    '_GET' => 0,
    'students' => 0,
    'student' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccf43d6db874_49887102')) {function content_52ccf43d6db874_49887102($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>添加学生资源</em></a>    
    </div>
</div>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			<?php echo Html::selectGender($_smarty_tpl->tpl_vars['_GET']->value['gender'],'gender','gender','性别');?>

			<?php echo Html::selectStudentResource($_smarty_tpl->tpl_vars['_GET']->value['source'],'source','source','来源');?>

			<input type="submit" value="搜索" class="button search" name="search">
			</td>
			</tr>
	    </tbody>
	</table>
</form>

<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">学生名</th>
			<th align="left">性别</th>
			<th align="left">来源</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</a></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['student']->value['gender']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['student']->value['gender']==2){?>女<?php }else{ ?>未知<?php }?></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['student']->value['source']==0){?>招生<?php }elseif($_smarty_tpl->tpl_vars['student']->value['source']==1){?>活动<?php }elseif($_smarty_tpl->tpl_vars['student']->value['source']==2){?>其他<?php }else{ ?>未知<?php }?></td>
		<td align="center">	
			<a href="javascript:doit(<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
')">[转正]</a>
			<a href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
,'<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
')">[修改]</a>
			<a href="javascript:confirmurl('/school/student_resource/delete?id=<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>
<tr><td colspan=4>暂无学生资源</td></tr>
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
		iframe:'/school/student_resource/add', 
		title:'添加学生资源', 
		width:'580', 
		height:'500',
		lock:true
	});
}

function edit(id,name){
	window.top.art.dialog({
		id:'edit',
		iframe:'/school/student_resource/edit?id='+id, 
		title:'修改学生资源《'+name+'》', 
		width:'700', 
		height:'500', 
		lock:true
	});
}

function doit(id,name){
	alert('转正学生《'+name+'》')
	
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>