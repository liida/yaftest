<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 14:16:44
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\money\index.html" */ ?>
<?php /*%%SmartyHeaderCode:132895298314cb46675-29050864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1a77cf2189fcaf5b7c457437fdfa34a2314033a' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\money\\index.html',
      1 => 1385705562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132895298314cb46675-29050864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    '_GET' => 0,
    'fees' => 0,
    'fee' => 0,
    'hadMoney' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5298314cbdad91_52359750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298314cbdad91_52359750')) {function content_5298314cbdad91_52359750($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.student_total{background: url("<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
/hulapai/header_bg.png") repeat;margin-top:10px;height:30px;}
.student_total p{float:left;line-height:30px;padding:0 8px;}
</style>
<div class="pad_common">
<div class="subnav">
    
</div>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="center">缴费金额（元）</th>
			<th align="center">时间</th>
			<th><button class="button" style="height: 30px;margin: 5px 0;width: 65px;" onclick="add(<?php echo $_smarty_tpl->tpl_vars['_GET']->value['student'];?>
)">增加</button></th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['fee'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fee']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fee']->key => $_smarty_tpl->tpl_vars['fee']->value){
$_smarty_tpl->tpl_vars['fee']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['fee']->key;
?>
    <tr>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['fee']->value['money'];?>
</td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['fee']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="center">	
			<a class="link" href="javascript:edit(<?php echo $_smarty_tpl->tpl_vars['fee']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['fee']->value['student'];?>
)">[编辑]</a>
			<a class="link" href="javascript:confirmurl('/school/student_money/delete?id=<?php echo $_smarty_tpl->tpl_vars['fee']->value['id'];?>
&student=<?php echo $_smarty_tpl->tpl_vars['fee']->value['student'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['fee']->_loop) {
?>
<tr><td colspan=4>暂无缴费记录</td></tr>
<?php } ?>
</tbody>
</table>
<div class="student_total">
	<p>总计金额：<span class="yellow"><?php echo $_smarty_tpl->tpl_vars['hadMoney']->value;?>
</span>元</p>
</div>	
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--
function add(student){
	window.top.art.dialog({
		id:'add',
		iframe:'/school/student_money/add?student='+student, 
		title:'缴费', 
		width:'420', 
		height:'350',
		lock:true
	});
}

function edit(id,student){
	window.top.art.dialog({
		id:'edit',
		iframe:'/school/student_money/edit?id='+id+'&student='+student, 
		title:'缴费修改', 
		width:'420', 
		height:'350',
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>