<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 17:59:35
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\grade\student\index.html" */ ?>
<?php /*%%SmartyHeaderCode:183635278c187540022-86054451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ead50539cad681a4ba78384f09aa880c9d59d5b' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\grade\\student\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183635278c187540022-86054451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'students' => 0,
    'student' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278c1875c0ec3_65614965',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278c1875c0ec3_65614965')) {function content_5278c1875c0ec3_65614965($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><em>添加学生</em></a>   
    </div>
</div>
<div class="table-list">
<form name="myform" action="/school/grade_student/delete" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="student[]"/></th>
			<th align="left">学生名</th>
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
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
" name="student[]"/></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td>
		<td align="center">	
			<a href="javascript:confirmurl('/school/grade_student/delete?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&student=<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>
<tr><td colspan=3>暂无班级学生</td></tr>
<?php } ?>
</tbody>
</table>
<div class="bk15"></div>
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
    <input name="dosubmit" type="submit" value="删除" class="button">
</form>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<script language="JavaScript">
<!--
function add(id){
	window.top.art.dialog({
		id:'add',
		iframe:'/school/grade_student/add?id='+id, 
		title:'添加学生', 
		width:'700', 
		height:'500', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>