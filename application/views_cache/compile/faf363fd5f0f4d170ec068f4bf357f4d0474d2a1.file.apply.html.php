<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 16:49:56
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\teacher\apply.html" */ ?>
<?php /*%%SmartyHeaderCode:17722527077b363d390-12536623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faf363fd5f0f4d170ec068f4bf357f4d0474d2a1' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\teacher\\apply.html',
      1 => 1383641393,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17722527077b363d390-12536623',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527077b3730f94_69558349',
  'variables' => 
  array (
    'applys' => 0,
    'apply' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527077b3730f94_69558349')) {function content_527077b3730f94_69558349($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="table-list">
<form name="myform" action="/school/teacher/doApply?act=1" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="id[]"/></th>
			<th align="left">教师名</th>
			<th align="left">申请时间</th>
			<th align="left">消息</th>
			<th align="left">状态</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['apply'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['apply']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applys']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['apply']->key => $_smarty_tpl->tpl_vars['apply']->value){
$_smarty_tpl->tpl_vars['apply']->_loop = true;
?>
    <tr>
		<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['apply']->value['id'];?>
" name="id[]"/></td>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['apply']->value['from'],1,30);?>
&nbsp;<?php echo teacherName($_smarty_tpl->tpl_vars['apply']->value['from']);?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['apply']->value['create_time'];?>
</td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['apply']->value['message'];?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['apply']->value['status']==2){?>拒绝<?php }elseif($_smarty_tpl->tpl_vars['apply']->value['status']==0){?>未处理<?php }?></td>
		<td align="center">	
			<a href="/school/teacher/doApply?id=<?php echo $_smarty_tpl->tpl_vars['apply']->value['id'];?>
&act=1">[通过]</a>
			<a href="/school/teacher/doApply?id=<?php echo $_smarty_tpl->tpl_vars['apply']->value['id'];?>
&act=2">[拒绝]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['apply']->_loop) {
?>
<tr><td colspan=6>暂无老师申请信息</td></tr>
<?php } ?>
</tbody>
</table>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="通过" class="button">
    <input name="dosubmit" type="submit" value="拒绝" class="button"  onclick="document.myform.action='/school/teacher/doApply?act=2'">
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
		iframe:'/school/teacher/add', 
		title:'添加老师', 
		width:'580', 
		height:'200',
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>