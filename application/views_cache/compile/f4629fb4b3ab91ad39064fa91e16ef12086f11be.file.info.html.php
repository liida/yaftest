<?php /* Smarty version Smarty-3.1.14, created on 2013-11-28 11:38:24
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\teacher\info.html" */ ?>
<?php /*%%SmartyHeaderCode:755296bab0791c80-05144051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4629fb4b3ab91ad39064fa91e16ef12086f11be' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\teacher\\info.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755296bab0791c80-05144051',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'teacher' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5296bab088bcb9_23623842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5296bab088bcb9_23623842')) {function content_5296bab088bcb9_23623842($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-lr-10">
<div class="common-form">
	<table width="100%" height="120" class="table_form">
		<tr>
			<td width="150"><?php echo imageUrl($_smarty_tpl->tpl_vars['teacher']->value['userInfo']['id'],1,200);?>
</td>			
			<td width="*">
				<table width="100%" height="100%" class="table_form list">
					<tr>
						<td width="80" align="right">姓名：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['lastname'];?>
（<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['hulaid'];?>
）</td> 								
					</tr>
					<tr>
						<td width="80" align="right">生日：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['teacher']->value['userInfo']['birthday']){?><?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['birthday'];?>
<?php }else{ ?>未知<?php }?></td> 								
					</tr>
					<tr>
						<td width="80" align="right">性别：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['teacher']->value['userInfo']['gender']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['teacher']->value['userInfo']['gender']==2){?>女<?php }else{ ?>未知<?php }?></td> 								
					</tr>
					<tr>
						<td width="80" align="right">地址：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Html::getArea($_smarty_tpl->tpl_vars['teacher']->value['province'],$_smarty_tpl->tpl_vars['teacher']->value['city'],$_smarty_tpl->tpl_vars['teacher']->value['area']);?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['teacher']->value['address'];?>
</td> 								
					</tr>
					<tr>
						<td width="80" align="right">联系方式：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['teacher']->value['userInfo']['account'];?>
</td> 								
					</tr>	
				</table>
			</td> 
		</tr>
	</table>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>