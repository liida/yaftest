<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 12:29:27
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\vote\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1754252747fa74e6ed2-57846343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7b1827d9ce26760451ba68e75c10506097d59a9' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\vote\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754252747fa74e6ed2-57846343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_GET' => 0,
    'votes' => 0,
    'vote' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52747fa7587183_97537097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52747fa7587183_97537097')) {function content_52747fa7587183_97537097($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:add();"><em>创建新问卷</em></a>   
    </div>
</div>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="title" class="input-text ufocus" id="title" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['title'];?>
" def="问题">
			<input type="submit" value="搜索" class="button search" name="search">
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
</form>
<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">问题</th>
			<th>开始时间</th>
			<th>结束时间</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['vote'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vote']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['votes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vote']->key => $_smarty_tpl->tpl_vars['vote']->value){
$_smarty_tpl->tpl_vars['vote']->_loop = true;
?>
    <tr>
		<td align="left" title="<?php echo $_smarty_tpl->tpl_vars['vote']->value['title'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['vote']->value['title'],30,"...",true);?>
</td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vote']->value['start_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['vote']->value['end_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="center">	
			<a href="javascript:info('<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
',2)">[投票详情]</a>	
			<a href="javascript:info('<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
',1)">[投票统计]</a>
			<a href="/school/notify/send?type=2&vote=<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
">[发问卷]</a>		
			<a href="javascript:edit('<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
')">[修改]</a>	
			<a href="javascript:confirmurl('/school/vote/delete?id=<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['vote']->_loop) {
?>
<tr><td colspan=4>暂无投票</td></tr>
<?php } ?>
</tbody>
</table>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<script language="JavaScript">
<!--
function add(){
	window.top.art.dialog({
		id:'add',
		iframe:'/school/vote/add', 
		title:'新问卷', 
		width:'750', 
		height:'460', 
		lock:true
	});
}
function edit(id){
	window.top.art.dialog({
		id:'edit',
		iframe:'/school/vote/edit?id='+id, 
		title:'修改问卷', 
		width:'750', 
		height:'460', 
		lock:true
	});
}
function info(id,type){
	window.top.art.dialog({
		id:'info',
		iframe:'/school/vote/info?id='+id+'&type='+type, 
		title:'查看问卷', 
		width:'500', 
		height:type == 1 ? '200' : '500', 
		lock:true
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>