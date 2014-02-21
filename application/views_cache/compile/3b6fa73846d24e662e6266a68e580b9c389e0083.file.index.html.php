<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 11:48:49
         compiled from "F:\root\hulapai\web\system\application\views\login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:28408526f12c991bd01-06144958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b6fa73846d24e662e6266a68e580b9c389e0083' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\login\\index.html',
      1 => 1385005712,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28408526f12c991bd01-06144958',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12c996dd90_09684120',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12c996dd90_09684120')) {function content_526f12c996dd90_09684120($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.carouFredSel.js"></script>
<div id="content" class="contenter">
	<div class="content_center product_show lf">
		<div id="product_content" style="width:230px;height:350px;">
			<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/product_1.png"/>
			<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/product_2.png"/>
			<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/product_3.png"/>
		</div>
		<div id="product_radio" style="margin-top:20px;"></div>
	</div>
    <div class="content_center product_desc lf">
		<p class="top">呼啦派，全新的学习方式</p>
		<p>多种教务管理功能</p>
		<p>课时、学费自动统计</p>
		<p>朋友分享、咨信传播</p>
		<a href="/download"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/download.png"/></a>
		<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/download_2.png"/ id="2wm_down">
	</div>
	<div id="2wm" style="display:none;"><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/2wm.png"/></div>
	<div class="content_center login">
		<form action="/login" method="post" name="myform" id="myform">
		<div id="login_form">
	 	 <p class="top"><label>登录呼啦派</label><label style="float:right"><a href="/register">免费注册</a></label></p>
	 	 <p><label>用户名</label></p>
	 	 <p><input name="username" type="text" class="input-text" value=""/></p>
	 	 <p><label>登录密码</label><label style="float:right;margin-right:15px;"><a href="/findpwd"  style="color:#999;">忘记密码?</a></label></p>
	 	 <p><input name="password" type="password" class="input-text" value=""/></p>
	 	 <p></p>
	 	 <p><input name="dosubmit" value="" type="submit" class="login_tj_btn" /></p>
	 	 </div>
     </form>
	</div>
</div>
<script type="text/javascript"> 
$(function(){
	$("#product_content").carouFredSel({
		circular: true,
		infinite: true,
		auto 	: true,
		pagination	: "#product_radio"
	});
	$("#2wm_down").click(function(){
		window.top.art.dialog({
			id:'2wm',
			content:$("#2wm")[0], 
			title:'二维码下载', 	
			lock:true
		});
	});
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>