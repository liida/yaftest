<?php /* Smarty version Smarty-3.1.14, created on 2013-11-07 17:36:43
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\vote\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1261552747fa9e65333-12749709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c78b0d7badc64866b29e0c083bd01ef1280213e' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\vote\\edit.html',
      1 => 1383817000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1261552747fa9e65333-12749709',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52747fa9f11162_47462267',
  'variables' => 
  array (
    'path' => 0,
    'vote' => 0,
    'multis' => 0,
    'options' => 0,
    'option' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52747fa9f11162_47462267')) {function content_52747fa9f11162_47462267($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
<!--
#vote_option{width:600px;}
#vote_option p{display:block;margin:5px 0;}
#vote_option p span{position: relative; right: 4%;}
#addOption{position: absolute;right:218px;top:240px;*top:245px;}
@media screen and (-webkit-min-device-pixel-ratio:0){
#addOption{top:250px;}	
}
.vote_option{width:350px;}
-->
</style>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){},onsuccess:function(){
		var start_time = $("#start_time").val();
        var end_time = $("#end_time").val();
        if(!start_time || !end_time) return '问卷开始和结束时间必须设置';
        if(end_time <= start_time){
        	alert('问卷结束时间必须大于开始时间');
        	return false;
        }
	}});
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
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/vote/edit" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="120" align="right">问题：</td> 
		<td><textarea name="title" id="title" style="width:60%;height:50px;"><?php echo $_smarty_tpl->tpl_vars['vote']->value['title'];?>
</textarea>
		</td>
	</tr>
	<tr>
		<td width="120" align="right">类型：</td> 
		<td><?php echo Html::select($_smarty_tpl->tpl_vars['multis']->value,$_smarty_tpl->tpl_vars['vote']->value['multi'],'multi','multi');?>

		</td>
	</tr>
	<tr>
		<td width="120" align="right">开始时间：</td> 
		<td><?php echo Html::date('start_time',smarty_modifier_date_format($_smarty_tpl->tpl_vars['vote']->value['start_time'],'%Y-%m-%d %H:%M:%S'),'',1);?>

		</td>
	</tr>
	<tr>
		<td width="120" align="right">结束时间：</td> 
		<td><?php echo Html::date('end_time',smarty_modifier_date_format($_smarty_tpl->tpl_vars['vote']->value['end_time'],'%Y-%m-%d %H:%M:%S'),'',1);?>

		</td>
	</tr>
	<tr valign="top">
		<td width="120" align="right">选项：</td> 
		<td id="vote_option">
			<img id="addOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/add.png"/>
			<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
			<p><input type="text" name="option[<?php echo $_smarty_tpl->tpl_vars['option']->value['id'];?>
]"  class="input-text vote_option" id="option[]" value="<?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
"><span><img onclick="del(this)" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>
			<?php } ?>
		</td>
	</tr>
	<tr>
		<td width="120" align="right"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
"/></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>