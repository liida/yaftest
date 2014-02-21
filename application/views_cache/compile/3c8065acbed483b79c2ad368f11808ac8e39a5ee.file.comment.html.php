<?php /* Smarty version Smarty-3.1.14, created on 2014-01-09 16:47:28
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\suggest\comment.html" */ ?>
<?php /*%%SmartyHeaderCode:225985278b2d8cc9cc2-77833586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c8065acbed483b79c2ad368f11808ac8e39a5ee' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\suggest\\comment.html',
      1 => 1389257246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225985278b2d8cc9cc2-77833586',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278b2d8d8d1f4_73305089',
  'variables' => 
  array (
    'data' => 0,
    '_data' => 0,
    'path' => 0,
    'attachInfo' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b2d8d8d1f4_73305089')) {function content_5278b2d8d8d1f4_73305089($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">

</div>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">用户</th>
			<th>内容</th>
			<th>附件</th>
			<th>点评时间</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_data']->key => $_smarty_tpl->tpl_vars['_data']->value){
$_smarty_tpl->tpl_vars['_data']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo substr_replace(userName($_smarty_tpl->tpl_vars['_data']->value['creator'],'account'),'****',3,4);?>
</td>
		<td align="center" title="<?php echo $_smarty_tpl->tpl_vars['_data']->value['content'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['_data']->value['content'],30,"...",true);?>
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
"><?php echo $_smarty_tpl->tpl_vars['attachInfo']->value['attach_name'];?>
</span>
		<?php } ?>
		</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['_data']->value['create_time'];?>
</td>
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