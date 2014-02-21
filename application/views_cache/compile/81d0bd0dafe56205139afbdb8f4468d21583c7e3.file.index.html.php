<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 17:04:58
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\school\index.html" */ ?>
<?php /*%%SmartyHeaderCode:16216526f1ed8a137f4-47532129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d0bd0dafe56205139afbdb8f4468d21583c7e3' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\school\\index.html',
      1 => 1386925032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16216526f1ed8a137f4-47532129',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1ed8a88af6_91799942',
  'variables' => 
  array (
    'schools' => 0,
    'school' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1ed8a88af6_91799942')) {function content_526f1ed8a88af6_91799942($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
       	<a class="on" href="javascript:;"><em>管理机构</em></a><span>|</span>
        <a href="/admin/school/add"><em>添加机构</em></a>  
    </div>
</div>
<div class="pad-lr-10">
<div class="table-list">

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">ID</th>
			<th>机构号</th>
			<th>机构名称</th>
			<th>机构老师</th>
			<th>机构学生</th>
			<th>所属机构</th>
			<th>类型</th>
			<th>管理操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['school'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['school']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['schools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['school']->key => $_smarty_tpl->tpl_vars['school']->value){
$_smarty_tpl->tpl_vars['school']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['school']->key;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['school']->value['code'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['school']->value['teacherNums'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['school']->value['studentNums'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['school']->value['pname'];?>
</td>
		<td align="center"><?php if ($_smarty_tpl->tpl_vars['school']->value['type']==1){?>私人机构<?php }elseif($_smarty_tpl->tpl_vars['school']->value['type']==2){?>品牌直营<?php }elseif($_smarty_tpl->tpl_vars['school']->value['type']==3){?>品牌加盟<?php }?></td>
		<td align="center">
			<a href="javascript:school_login(<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
)">[机构登录]</a> | 
			<a href="/admin/school/edit?id=<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
">[修改]</a> | 		
			<a href="javascript:confirmurl('/admin/school/delete?id=<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
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
<script type="text/javascript"> 
//clientHeight-0; 空白值 iframe自适应高度
function school_login(school){
	$.get('/admin/school/login?id='+school,function(data){
		if(data == 1){
			openwinx('http://school.hulapai.com/school/index/index','school_'+school);
		}
	});
}
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>