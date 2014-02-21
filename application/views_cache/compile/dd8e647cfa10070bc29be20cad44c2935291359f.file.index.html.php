<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 17:04:51
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\feed\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2271152bbf1331484f2-62091809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd8e647cfa10070bc29be20cad44c2935291359f' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\feed\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2271152bbf1331484f2-62091809',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feeds' => 0,
    'feed' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52bbf13323e6b9_17366434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bbf13323e6b9_17366434')) {function content_52bbf13323e6b9_17366434($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a class="on" href="javascript:;"><em>动态列表</em></a><span>|</span>
        <a href="<?php echo url('admin','feed','add');?>
"><em>发布官方动态</em></a>  
    </div>
</div>
<div class="pad-lr-10">
<div class="table-list">
<form name="myform" action="/admin/feed/delete" method="post" id="myform">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left"><input type="checkbox" value="" name="checkAll" class="checkAll" rel="id[]"/></th>
			<th align="left">内容</th>
			<th width="10%">发布时间</th>
			<th width="10%"></th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['feed'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feed']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feeds']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feed']->key => $_smarty_tpl->tpl_vars['feed']->value){
$_smarty_tpl->tpl_vars['feed']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['feed']->key;
?>
    <tr>	
    	<td align="left"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['feed']->value['feed_id'];?>
" name="id[]"/></td>	
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['feed']->value['content'];?>
</td>	
		<td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['feed']->value['publish_time'],"%Y-%m-%d %H:%M");?>
</td>
		<td align="center">			
			<a href="javascript:confirmurl('/admin/feed/delete?id=<?php echo $_smarty_tpl->tpl_vars['feed']->value['feed_id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['feed']->_loop) {
?>
	<tr><td>暂无数据！</td></tr>
<?php } ?>
</tbody>
</table>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="删除" class="button">
</form>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>