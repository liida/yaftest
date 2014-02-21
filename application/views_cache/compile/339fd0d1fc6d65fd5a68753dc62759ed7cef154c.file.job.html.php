<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 12:06:51
         compiled from "F:\root\hulapai\web\system\application\views\index\job.html" */ ?>
<?php /*%%SmartyHeaderCode:4406528d84b30cdc35-40967227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '339fd0d1fc6d65fd5a68753dc62759ed7cef154c' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\index\\job.html',
      1 => 1385006792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4406528d84b30cdc35-40967227',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528d84b3114140_35082155',
  'variables' => 
  array (
    'source' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528d84b3114140_35082155')) {function content_528d84b3114140_35082155($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['source']->value){?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
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