<?php /* Smarty version Smarty-3.1.14, created on 2013-12-16 11:34:47
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\group\teacher\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1688452ae74d76afca2-59727617%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1e18cd0a30f991b8bb9caa98c0acd67eb7533a' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\group\\teacher\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1688452ae74d76afca2-59727617',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'teachers' => 0,
    'teacher' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ae74d771d2b9_03562719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ae74d771d2b9_03562719')) {function content_52ae74d771d2b9_03562719($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add(<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
);"><em>添加老师</em></a>   
    </div>
</div>
<div class="table-list">
<form name="myform" action="/school/group_teacher/delete" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="teacher[]"/></th>
			<th align="left">教师名</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['teacher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['teacher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['teachers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->key => $_smarty_tpl->tpl_vars['teacher']->value){
$_smarty_tpl->tpl_vars['teacher']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
" name="teacher[]"/></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['lastname'];?>
</td>
		<td align="center">	
			<a href="javascript:confirmurl('/school/group_teacher/delete?id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&teacher=<?php echo $_smarty_tpl->tpl_vars['teacher']->value['teacher'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['teacher']->_loop) {
?>
<tr><td colspan=3>暂无分组老师</td></tr>
<?php } ?>
</tbody>
</table>
<div class="bk15"></div>
	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
    <input name="dosubmit" type="submit" value="删除" class="button">
</form>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--
function add(id){
	window.top.art.dialog({
		id:'add',
		iframe:'/school/group_teacher/add?id='+id, 
		title:'添加教师', 
		width:'700', 
		height:'500', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>