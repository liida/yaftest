<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 11:00:01
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\total\add.html" */ ?>
<?php /*%%SmartyHeaderCode:20318529800b46841f9-06525102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cac9c15a140a904ba3d0cba92c874de38aea20de' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\total\\add.html',
      1 => 1385693830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20318529800b46841f9-06525102',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_529800b46c10f1_11255331',
  'variables' => 
  array (
    '_GET' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529800b46c10f1_11255331')) {function content_529800b46c10f1_11255331($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#text").formValidator({onshow:"请输入课程名称",onfocus:"课程名称长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"课程名称长度为2-20个字符"});
	$("#total").formValidator({onshow:"请输入总课次",onfocus:"总课次必须在1-100之间"}).inputValidator({type:"number",min:1,max:100,onerror:"总课次必须在1-100之间"});
	$("#fee").formValidator({onshow:"请输入单价",onfocus:"单价必须在1-5000之间"}).inputValidator({type:"number",min:1,max:5000,onerror:"单价必须在1-5000之间"});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/student_total/add?student=<?php echo $_smarty_tpl->tpl_vars['_GET']->value['student'];?>
" method="post" id="myform">
<table width="100%" class="table_form">
	<tr>
		<td width="80" align="right">课程名称：</td> 
		<td><input type="text" name="text"  class="input-text" id="text" value=""  size=10>
		</td>
	</tr>
	<tr>
		<td width="80" align="right">总课次：</td> 
		<td><input type="text" name="total"  class="input-text" id="total" value="" size=5>
		</td>
	</tr>
	<tr>
		<td width="80" align="right">单价：</td> 
		<td><input type="text" name="fee"  class="input-text" id="fee" value=""  size=5>元/课次
		</td>
	</tr>
	<tr>
		<td></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>