<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 18:46:14
         compiled from "F:\root\hulapai\web\system\application\views\help\index.html" */ ?>
<?php /*%%SmartyHeaderCode:319485278cc764ee561-83587178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83ad510213df0e4c4bdad9c54c1a174c62e5aa45' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\help\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319485278cc764ee561-83587178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278cc7651d379_53216805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278cc7651d379_53216805')) {function content_5278cc7651d379_53216805($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" class="contenter">
	<?php if (file_exists($_smarty_tpl->tpl_vars['html_file']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['html_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>