<?php /* Smarty version Smarty-3.1.14, created on 2013-12-19 13:37:46
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\student\info.html" */ ?>
<?php /*%%SmartyHeaderCode:1253152b2862a0e5709-88171269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b03ca28c13cb884dc5b34dd7423abf269b04309' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\student\\info.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253152b2862a0e5709-88171269',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'student' => 0,
    'parents' => 0,
    'parent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52b2862a216201_24686716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b2862a216201_24686716')) {function content_52b2862a216201_24686716($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad-lr-10">
<div class="common-form">
	<table width="100%" class="table_form">
		<tr>
			<td width="150" valign="top">			
				<table width="100%" class="table_form">
				<tr>
					<td><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['id'],2,200);?>
</td>
				</tr>
				
				</table>
			</td> 
			<td width="*" valign="top">
				<table width="100%" class="table_form list">
					<tr>
						<td width="80" align="right">姓名：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</td> 								
					</tr>
					<tr>
						<td width="80" align="right">加入时间：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td> 								
					</tr>
					<tr>
						<td width="80" align="right">性别：</td> 
						<td>&nbsp;&nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['student']->value['gender']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['student']->value['gender']==2){?>女<?php }else{ ?>未知<?php }?></td> 								
					</tr>				
								
					<tr>
						<td width="80" align="right">联系方式：</td>
						<td>
							<ul class="parentList">
								<?php  $_smarty_tpl->tpl_vars['parent'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['parent']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['parent']->key => $_smarty_tpl->tpl_vars['parent']->value){
$_smarty_tpl->tpl_vars['parent']->_loop = true;
?>
								<li>
									<?php echo imageUrl($_smarty_tpl->tpl_vars['parent']->value['id'],1,30);?>
 
									<span>
									<?php echo $_smarty_tpl->tpl_vars['parent']->value['nickname'];?>
(<?php if ($_smarty_tpl->tpl_vars['parent']->value['relation']==1){?>本人<?php }elseif($_smarty_tpl->tpl_vars['parent']->value['relation']==2){?>爸爸<?php }elseif($_smarty_tpl->tpl_vars['parent']->value['relation']==3){?>妈妈<?php }elseif($_smarty_tpl->tpl_vars['parent']->value['relation']==4){?>其他<?php }?>):<?php echo $_smarty_tpl->tpl_vars['parent']->value['account'];?>

									</span>
								</li>
								<?php } ?>
							</ul>							
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