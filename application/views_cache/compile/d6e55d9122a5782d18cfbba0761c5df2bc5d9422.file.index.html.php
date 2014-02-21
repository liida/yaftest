<?php /* Smarty version Smarty-3.1.14, created on 2013-11-06 13:26:50
         compiled from "F:\root\hulapai\web\system\application\views\connect\index.html" */ ?>
<?php /*%%SmartyHeaderCode:98225279d31a64f115-16438601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6e55d9122a5782d18cfbba0761c5df2bc5d9422' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\connect\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98225279d31a64f115-16438601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5279d31a67df11_98169200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5279d31a67df11_98169200')) {function content_5279d31a67df11_98169200($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" class="contenter">
	<?php if (file_exists($_smarty_tpl->tpl_vars['html_file']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['html_file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>