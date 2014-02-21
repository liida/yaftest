<?php /* Smarty version Smarty-3.1.14, created on 2013-11-06 16:35:09
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\comment\info.html" */ ?>
<?php /*%%SmartyHeaderCode:119195270f589463e37-58139678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61e29e84801f8770a1de78a3266fd270f8da1987' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\comment\\info.html',
      1 => 1383726906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119195270f589463e37-58139678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270f589575531_33731973',
  'variables' => 
  array (
    'data' => 0,
    '_data' => 0,
    'path' => 0,
    'attachInfo' => 0,
    'teacherComment' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270f589575531_33731973')) {function content_5270f589575531_33731973($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common" style="padding:0">
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">用户</th>
			<th>内容</th>
			<th>附件</th>
			<th>点评时间</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_data']->key => $_smarty_tpl->tpl_vars['_data']->value){
$_smarty_tpl->tpl_vars['_data']->_loop = true;
?>
    <tr>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['_data']->value['anonymous']){?>【匿名】<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['_data']->value['character']=="teacher"||$_smarty_tpl->tpl_vars['_data']->value['character']=="school"){?><?php echo teacherName($_smarty_tpl->tpl_vars['_data']->value['creator']);?>
(老师)<?php }elseif($_smarty_tpl->tpl_vars['_data']->value['character']=="student"){?><?php echo studentName($_smarty_tpl->tpl_vars['_data']->value['student']);?>
<?php echo relation($_smarty_tpl->tpl_vars['_data']->value['creator'],$_smarty_tpl->tpl_vars['_data']->value['student']);?>
<?php }?><?php }?></td>
		<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['_data']->value['content'];?>
"><?php if ($_smarty_tpl->tpl_vars['_data']->value['pid']){?>[回复]<?php }?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_data']->value['content'],30,"...",true);?>
</td>
		<td align="center">
		<?php  $_smarty_tpl->tpl_vars['attachInfo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attachInfo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_data']->value['attachInfos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attachInfo']->key => $_smarty_tpl->tpl_vars['attachInfo']->value){
$_smarty_tpl->tpl_vars['attachInfo']->_loop = true;
?>
		<span class="attach link" link="<?php echo $_smarty_tpl->tpl_vars['path']->value['image'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_path'];?>
<?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['save_name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['attachInfo']->value['attach_name'],15,"...",true);?>
</span>
		<?php } ?>
		</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['_data']->value['create_time'];?>
</td>
		<td align="center"><a href="javascript:reply(<?php echo $_smarty_tpl->tpl_vars['teacherComment']->value['id'];?>
)">[回复]</a></td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['_data']->_loop) {
?>
<tr><td colspan=6>暂无点评数据</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--
function reply(id){
	window.top.art.dialog({
		id:'reply',
		iframe:'/school/comment/reply?id='+id, 
		title:'点评回复', 
		width:'500', 
		height:'300', 
		lock:true
	});
}
$(".attach").click(function(){
	var link = $(this).attr('link');
	window.top.art.dialog({
		id:'attach',
		content:"<img src='"+link+"'/>", 
		title:'查看附件', 	
		lock:true
	});
});
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>