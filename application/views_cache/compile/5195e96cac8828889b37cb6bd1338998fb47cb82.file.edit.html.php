<?php /* Smarty version Smarty-3.1.14, created on 2013-12-17 15:36:13
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\version\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:826052affeedc133b9-36413005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5195e96cac8828889b37cb6bd1338998fb47cb82' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\version\\edit.html',
      1 => 1387186311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826052affeedc133b9-36413005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'sources' => 0,
    'version' => 0,
    'types' => 0,
    'levels' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52affeedcfd9b9_15517883',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52affeedcfd9b9_15517883')) {function content_52affeedcfd9b9_15517883($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#version").formValidator({onshow:"请输入版本号",onfocus:"版本号长度为1-10个字符"}).inputValidator({min:1,max:10,onerror:"版本号长度为1-10个字符"});
	$("#url").formValidator({onshow:"请输入下载地址",onfocus:"下载地址长度为2-1000个字符"}).inputValidator({min:2,max:1000,onerror:"下载地址长度为2-1000个字符"});
});
//-->
</script>
<div class="pad-lr-10">
<div class="common-form">
<form name="myform" action="/admin/version/edit" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td width="120" align="right">来源：</td> 
			<td><?php echo Html::select($_smarty_tpl->tpl_vars['sources']->value,$_smarty_tpl->tpl_vars['version']->value['source'],'source','source','');?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">类型：</td> 
			<td><?php echo Html::select($_smarty_tpl->tpl_vars['types']->value,$_smarty_tpl->tpl_vars['version']->value['type'],'type','type','');?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">版本号：</td> 
			<td><input type="text" name="version" class="input-text" id="version" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['version'];?>
"></input>
			</td>
		</tr>
		<tr>
			<td width="120" align="right">更新级别：</td> 
			<td><?php echo Html::select($_smarty_tpl->tpl_vars['levels']->value,$_smarty_tpl->tpl_vars['version']->value['level'],'level','level','');?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">大小：</td> 
			<td><input type="text" name="size" class="input-text" id="size" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['size'];?>
"></input>MB
			</td>
		</tr>
		<tr>
			<td width="120" align="right">时间：</td> 
			<td><?php echo Html::date('date',$_smarty_tpl->tpl_vars['version']->value['date']);?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">下载地址：</td> 
			<td><input type="text" name="url" class="input-text" id="url" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['url'];?>
" size=50></input>
			</td>
		</tr>
		<tr>
			<td width="120" align="right">描述：</td> 
			<td><textarea name="desc" id="desc" style="width:70%;height:120px;"><?php echo $_smarty_tpl->tpl_vars['version']->value['desc'];?>
</textarea>
			</td>
		</tr>
		<tr>
			<td width="120" align="right"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['version']->value['id'];?>
"></td> 
			<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>