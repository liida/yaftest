<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 09:44:44
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\public\left.html" */ ?>
<?php /*%%SmartyHeaderCode:25812526f130c1eb353-26896433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c937d80d71f9744700fd24b34bdefbfd2b6a0388' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\public\\left.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25812526f130c1eb353-26896433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menus' => 0,
    'menu' => 0,
    '_menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f130c287771_92528767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f130c287771_92528767')) {function content_526f130c287771_92528767($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value){
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>
<h3 class="f14"><span class="switchs cu on" title="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
"></span><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</h3>
<ul>
    <?php  $_smarty_tpl->tpl_vars['_menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_menu']->_loop = false;
 $_smarty_tpl->tpl_vars['_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['childrens']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_menu']->key => $_smarty_tpl->tpl_vars['_menu']->value){
$_smarty_tpl->tpl_vars['_menu']->_loop = true;
 $_smarty_tpl->tpl_vars['_key']->value = $_smarty_tpl->tpl_vars['_menu']->key;
?>
    <li id="_MP_<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['_menu']->value['id'];?>
" class="sub_menu">
    	<a href="javascript:_MP('<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['_menu']->value['id'];?>
','<?php if ($_smarty_tpl->tpl_vars['_menu']->value['module']&&$_smarty_tpl->tpl_vars['_menu']->value['module']!='Index'){?>/<?php echo $_smarty_tpl->tpl_vars['_menu']->value['module'];?>
<?php }?>/<?php echo $_smarty_tpl->tpl_vars['_menu']->value['controller'];?>
/<?php echo $_smarty_tpl->tpl_vars['_menu']->value['action'];?>
');" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['_menu']->value['name'];?>
</a>
    </li>
    <?php }
if (!$_smarty_tpl->tpl_vars['_menu']->_loop) {
?>
    <?php } ?> 
</ul>
<?php }
if (!$_smarty_tpl->tpl_vars['menu']->_loop) {
?>
<?php } ?>
<script type="text/javascript">
$(".switchs").each(function(i){
    var ul = $(this).parent().next();
    $(this).click(
    function(){
        if(ul.is(':visible')){
            ul.hide();
            $(this).removeClass('on');
        }else{
            ul.show();
            $(this).addClass('on');
        }
    })
});
</script>
<?php }} ?>