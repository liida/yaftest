<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 12:04:02
         compiled from "F:\root\hulapai\web\system\application\views\index\guide.html" */ ?>
<?php /*%%SmartyHeaderCode:8539528d83e0663432-28543057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34cbf4a2d613a93dee42feaf0078f931c8cb97d3' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\index\\guide.html',
      1 => 1385006640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8539528d83e0663432-28543057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528d83e07324e0_44930443',
  'variables' => 
  array (
    'source' => 0,
    'result' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528d83e07324e0_44930443')) {function content_528d83e07324e0_44930443($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['source']->value){?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?>
<style>
	.cms_content {height:auto; overflow:hidden;}
	.cmsLeft{width:180px; float:left; padding:8px 0px;}
	.cmsLeft li{height:30px; line-height:30px; padding:0px 12px;}
	.cmsRight{width:570px; float:left; padding:0px 20px; border-left:1px solid #ccc}
	.cmsRight{line-height:24px;}
	.cmsRight .qu h3{line-height:40px; height:40px; margin-top:20px;}
	.cmsRight .qu h3 a{float:right;font-size:12px;font-weight:normal}
	.cmsRight .qu h4{line-height:30px; margin-top:12px; font-size:12px; color:#000; overflow:hidden}

</style>
<div id="content" class="contenter">
	<a name="top"></a>
	<div class="cms_content">
	<h3 class="qa">新手指南</h3>
		<div class="cmsLeft">
			<ul>
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				<li><a href="#<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="cmsRight">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<a name="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"></a>
			<div class="qu">
				<h3><a href="#top">top</a><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
				<div class=""><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php if (!$_smarty_tpl->tpl_vars['source']->value){?><?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }} ?>