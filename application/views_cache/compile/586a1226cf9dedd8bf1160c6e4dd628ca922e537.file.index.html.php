<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 12:07:32
         compiled from "F:\root\hulapai\web\system\application\views\weibo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:23094527afdad5631b1-23405479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '586a1226cf9dedd8bf1160c6e4dd628ca922e537' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\weibo\\index.html',
      1 => 1385006843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23094527afdad5631b1-23405479',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527afdad591fc4_28155359',
  'variables' => 
  array (
    'feeds' => 0,
    'logo' => 0,
    'item' => 0,
    'path' => 0,
    'attach' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527afdad591fc4_28155359')) {function content_527afdad591fc4_28155359($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" class="contenter">
	<div class="cms_content">
		<h3 class="qa">呼啦派官方微博</h3>
		<div class="description">
			<ul class="feedList">
				<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['feeds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
				<li>
					<div style="width:100%;overflow:hidden;">
						<div class="feedAvatar"><?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
</div>
						<div class="feedContent"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['attachs']){?>
						<div class="attachs">
						<?php  $_smarty_tpl->tpl_vars['attach'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['attach']->_loop = false;
 $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['attachs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['attach']->key => $_smarty_tpl->tpl_vars['attach']->value){
$_smarty_tpl->tpl_vars['attach']->_loop = true;
 $_smarty_tpl->tpl_vars['a']->value = $_smarty_tpl->tpl_vars['attach']->key;
?>
						<div class="attach"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['image'];?>
<?php echo $_smarty_tpl->tpl_vars['attach']->value['attach_url'];?>
" width="100"/></div>
						<?php } ?>
						</div>
					<?php }?>										
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>