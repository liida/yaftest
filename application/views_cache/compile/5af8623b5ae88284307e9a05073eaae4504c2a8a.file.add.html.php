<?php /* Smarty version Smarty-3.1.14, created on 2013-12-16 11:52:41
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\vote\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2030852ae7909a6aa50-88038615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af8623b5ae88284307e9a05073eaae4504c2a8a' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\vote\\add.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030852ae7909a6aa50-88038615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'multis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ae7909b0eb77_07909953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ae7909b0eb77_07909953')) {function content_52ae7909b0eb77_07909953($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
<!--
#vote_option{width:600px;}
#vote_option p{display:block;margin:5px 0;}
#vote_option p span{position: relative; right: 4%;}
#addOption{position: absolute;right:218px;top:222px;*top:245px;}
@media screen and (-webkit-min-device-pixel-ratio:0){
#addOption{top:232px;}	
}
.vote_option{width:350px;}
-->
</style>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#title").formValidator({onshow:"请输入问题",onfocus:"问题长度为2-150个字"}).inputValidator({min:2,max:300,onerror:"问题长度为2-150个字"});
	$("#multi").formValidator({onshow:"请选择类型",onfocus:"请选择类型"}).inputValidator({min:1,max:2,onerror:"请选择类型"});
	$("#addOption").click(function(){
		if($(".vote_option").length >= 5){
			alert('投票选项最多5项');
			return false;
		}
		$(this).parent().append($('<p><input type="text" name="option[]"  class="input-text vote_option" id="option[]"><span><img onclick="del(this)" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>'));
	});
});
function del(t){
	if($(".vote_option").length > 2){
		$(t).parent().parent().remove();
	}
}
//-->
</script>
<div class="pad-lr-10">
<div class="common-form">
<form name="myform" action="/admin/vote/add" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td width="120" align="right">问题：</td> 
			<td><textarea name="title" id="title" style="width:60%;height:50px;"></textarea>
			</td>
		</tr>
		<tr>
			<td width="120" align="right">类型：</td> 
			<td><?php echo Html::select($_smarty_tpl->tpl_vars['multis']->value,'','multi','multi');?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">开始时间：</td> 
			<td><?php echo Html::date('start_time','');?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">结束时间：</td> 
			<td><?php echo Html::date('end_time','');?>

			</td>
		</tr>
		<tr valign="top">
			<td width="120" align="right">选项：</td> 
			<td id="vote_option">
				<img id="addOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/add.png"/>
				<p><input type="text" name="option[]"  class="input-text vote_option" id="option[]"><span><img onclick="del(this)" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>
				<p><input type="text" name="option[]"  class="input-text vote_option" id="option[]"><span><img onclick="del(this)" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>
			</td>
		</tr>
		<tr>
			<td width="120" align="right"></td> 
			<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>