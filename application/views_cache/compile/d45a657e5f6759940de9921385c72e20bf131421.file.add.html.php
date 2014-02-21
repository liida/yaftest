<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 16:01:20
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\vote\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1264152747fa4b6e3a7-54740013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd45a657e5f6759940de9921385c72e20bf131421' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\vote\\add.html',
      1 => 1389168060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1264152747fa4b6e3a7-54740013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52747fa4bc8141_93558609',
  'variables' => 
  array (
    'path' => 0,
    'multis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52747fa4bc8141_93558609')) {function content_52747fa4bc8141_93558609($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
<!--
#vote_option{width:600px;}
#vote_option p{display:block;margin:5px 0;}
#vote_option p span{position: relative; right: 4%;}
#vote_option .delOption{cursor: pointer;}
#addOption{position: absolute;right:218px;top:240px;*top:245px;cursor: pointer;}
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
<form name="myform" action="/school/vote/add" method="post" id="myform">
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
			<td><?php echo Html::date('start_time','','',1);?>

			</td>
		</tr>
		<tr>
			<td width="120" align="right">结束时间：</td> 
			<td><?php echo Html::date('end_time','','',1);?>

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