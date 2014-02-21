<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 11:04:49
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\menu\index.html" */ ?>
<?php /*%%SmartyHeaderCode:299205278605169f773-57663666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5a0f6aec52eb55d969c96fa48a9248ea201a5ff' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\menu\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299205278605169f773-57663666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
    'menuTypes' => 0,
    'key' => 0,
    'menuType' => 0,
    'categorys' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527860516dc673_91106559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527860516dc673_91106559')) {function content_527860516dc673_91106559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$("#menuType").change(function(){
		var type = $(this).val();
		location.href = "/admin/menu/index?type="+type;
	});
});
//-->
</script>
<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a class="on" href="javascript:;"><em>菜单管理</em></a><span>|</span>
        <a href="/admin/menu/add?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
"><em>添加菜单</em></a><span>|</span>    
        <a href="javascript:;"><em>菜单类别</em></a><span></span><select name="type" id="menuType">
		<?php  $_smarty_tpl->tpl_vars['menuType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuType']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuType']->key => $_smarty_tpl->tpl_vars['menuType']->value){
$_smarty_tpl->tpl_vars['menuType']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['menuType']->key;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['menuType']->value;?>
</option>
		<?php } ?>
		</select>
    </div>
</div>
<style type="text/css">
	html{_overflow-y:scroll}
</style>
<form name="myform" action="<?php echo url('admin','menu','sort');?>
" method="post">
<div class="pad-lr-10">
<div class="table-list">
    <table width="100%" cellspacing="0">
        <thead>
            <tr>
            <th width="80">排序</th>
            <th width="100">id</th>
            <th>菜单名</th>
			<th>管理操作</th>
            </tr>
        </thead>
	<tbody>
    <?php echo $_smarty_tpl->tpl_vars['categorys']->value;?>

	</tbody>
    </table>
  
    <div class="btn"><input type="submit" class="button" name="dosubmit" value="排序" /></div>  </div>
</div>
</div>
</form>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>