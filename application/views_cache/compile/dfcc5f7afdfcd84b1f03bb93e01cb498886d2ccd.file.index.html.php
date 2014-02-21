<?php /* Smarty version Smarty-3.1.14, created on 2013-11-28 18:29:19
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\authcode\index.html" */ ?>
<?php /*%%SmartyHeaderCode:977352971aff97cc32-38683824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dfcc5f7afdfcd84b1f03bb93e01cb498886d2ccd' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\authcode\\index.html',
      1 => 1385359210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '977352971aff97cc32-38683824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'authcodes' => 0,
    'authcode' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52971affa30756_16179797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52971affa30756_16179797')) {function content_52971affa30756_16179797($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a class="on" href="javascript:;"><em>管理授权码</em></a><span>|</span>
        <a href="<?php echo url('admin','authcode','add');?>
"><em>添加授权码</em></a>  
    </div>
</div>
<div class="pad-lr-10">
<div class="table-list">

<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">ID</th>
			<th>授权码</th>
			<th>日期</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['authcode'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['authcode']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['authcodes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['authcode']->key => $_smarty_tpl->tpl_vars['authcode']->value){
$_smarty_tpl->tpl_vars['authcode']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['authcode']->key;
?>
    <tr>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['authcode']->value['id'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['authcode']->value['authCode'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['authcode']->value['date'];?>
</td>
		<td align="center">
			<a href="/admin/authcode/edit?id=<?php echo $_smarty_tpl->tpl_vars['authcode']->value['id'];?>
">[修改]</a> | 		
			<a href="javascript:confirmurl('/admin/authcode/delete?id=<?php echo $_smarty_tpl->tpl_vars['authcode']->value['id'];?>
', '是否删除?')">[删除]</a>
		</td>
    </tr>
<?php } ?>
</tbody>
</table>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>