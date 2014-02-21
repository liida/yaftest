<?php /* Smarty version Smarty-3.1.14, created on 2013-11-08 14:18:08
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\user\add.html" */ ?>
<?php /*%%SmartyHeaderCode:714526f1e8cb99b59-10048326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd04539859e9efdcb2d64f7ddb2daa01ca370c758' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\user\\add.html',
      1 => 1383641524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '714526f1e8cb99b59-10048326',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1e8cbe7d56_04857375',
  'variables' => 
  array (
    'groups' => 0,
    'group' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1e8cbe7d56_04857375')) {function content_526f1e8cbe7d56_04857375($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({
		onshow:"请输入用户手机号/呼啦号",
		onfocus:"请输入用户手机号/呼啦号"
	}).inputValidator({
		min:2,
		max:15,
		onerror:"请输入用户手机号/呼啦号"
	}).ajaxValidator({
	    type : "get",
		url : "/public/userExist",
		data :"",
		datatype : "html",
		async:'false',
		success : function(data){	
            if( data == "1" ) {
                return true;
			} else {
                return false;
			}
		},
		buttons: $("#dosubmit"),
		onerror : "用户账号/呼啦号不存在",
		onwait : "检测中"
	});
});
//-->
</script>
<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a href="/admin/user/index"><em>管理用户</em></a><span>|</span>
        <a class="on" href="javascript:;"><em>添加用户</em></a>  
    </div>
</div>
<div class="pad_10">
<div class="common-form">
<form name="myform" action="/admin/user/add" method="post" id="myform">
<table width="100%" class="table_form contentWrap">
<tr>
<td>用户账号/呼啦号</td> 
<td><input type="text" name="info[username]" class="input-text" id="username" value=""></input></td>
</tr>
<tr>
<td>用户组</td>
<td>
<select name="info[gid]">
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value['gid']==$_smarty_tpl->tpl_vars['user']->value['gid']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
<?php } ?>
</select>
</td>
</tr>
</table>
    <div class="bk15"></div>
    <input id="dosubmit" name="dosubmit" type="submit" value="提交" class="button">
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>