<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 12:06:47
         compiled from "F:\root\hulapai\web\system\application\views\index\connect.html" */ ?>
<?php /*%%SmartyHeaderCode:721528d84b1536493-52667292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1aa12b62f116b751d2f9b07d177c0fc00e31a6b' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\index\\connect.html',
      1 => 1385006800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721528d84b1536493-52667292',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528d84b1574ca7_30992200',
  'variables' => 
  array (
    'source' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528d84b1574ca7_30992200')) {function content_528d84b1574ca7_30992200($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['source']->value){?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<div id="content" class="contenter">
	<div class="cms_content">
		<h3 class="qa"><?php echo $_smarty_tpl->tpl_vars['result']->value['title'];?>
</h3>
		<div class="description"><?php echo $_smarty_tpl->tpl_vars['result']->value['content'];?>
</div>
	</div>
</div>
<?php if (!$_smarty_tpl->tpl_vars['source']->value){?><?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }} ?>