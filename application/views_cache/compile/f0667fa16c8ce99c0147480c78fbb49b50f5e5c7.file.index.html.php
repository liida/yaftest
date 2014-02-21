<?php /* Smarty version Smarty-3.1.14, created on 2013-11-14 15:58:49
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2599526f130bd705f3-60937443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0667fa16c8ce99c0147480c78fbb49b50f5e5c7' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\index\\index.html',
      1 => 1384415774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2599526f130bd705f3-60937443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f130be0ca19_73756981',
  'variables' => 
  array (
    'path' => 0,
    'user' => 0,
    'topMenus' => 0,
    'topMenu' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f130be0ca19_73756981')) {function content_526f130be0ca19_73756981($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="off">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->
<title>phpcmsV9 - 后台管理中心</title>
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
system.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
dialog.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
dialog.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
admin_common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
formvalidatorregex.js" charset="UTF-8"></script>
</head>
<body scroll="no">
<div class="header">
	<div class="logo lf"><a href="" target="_blank"><span class="invisible">PHPCMS V9内容管理系统</span></a></div>
    <div class="rt">
    	<div class="tab_style white cut_line text-r">
	    	<a href="http://www.phpcms.cn/license/license.php" target="_blank">授权</a><span>|</span>
	    	<a href="http://bbs.phpcms.cn" target="_blank">支持论坛</a><span>|</span>
	    	<a href="http://v9.help.phpcms.cn" target="_blank">帮助？</a>
        </div>
        <div class="style_but"></div>
    </div>
    <div class="col-auto" style="overflow: visible">
    	<div class="log white cut_line">
    		您好！<?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
<span>|</span><a href="/User">用户中心</a><span>|</span>
    		<a href="/logout">[退出]</a>
    	</div>
        <ul class="nav white" id="top_menu">
        <?php  $_smarty_tpl->tpl_vars['topMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['topMenu']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['topMenus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['topMenu']->key => $_smarty_tpl->tpl_vars['topMenu']->value){
$_smarty_tpl->tpl_vars['topMenu']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['topMenu']->key;
?>
        	<li id="_M_<?php echo $_smarty_tpl->tpl_vars['topMenu']->value['id'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['key']->value==0){?>on<?php }?> top_menu"><a href="javascript:_M(<?php echo $_smarty_tpl->tpl_vars['topMenu']->value['id'];?>
,'#');" hidefocus="true" style="outline:none;"><?php echo $_smarty_tpl->tpl_vars['topMenu']->value['name'];?>
</a></li>
        <?php } ?>
        </ul>
    </div>
</div>
<div id="content">
	<div class="col-left left_menu">
    	<div id="leftMain">
        </div>
        <a href="javascript:;" id="openClose" style="outline-style: none; outline-color: invert; outline-width: medium;" hideFocus="hidefocus" class="open" title="展开与关闭"><span class="hidden">展开</span></a>
    </div>
	<div class="col-1 lf cat-menu" id="display_center_id" style="display:none" height="100%">
		<div class="content">
        	<iframe name="center_frame" id="center_frame" src="" frameborder="false" scrolling="auto" style="border:none" width="100%" height="auto" allowtransparency="true"></iframe>
        </div>
    </div>
    <div class="col-auto mr8">
        <div class="crumbs">当前位置：<span id="current_pos"></span></div>
        <div class="col-1">
            <div class="content" style="position:relative; overflow:hidden">
                <iframe name="right" id="rightMain" src="<?php echo url('admin','welcome');?>
" frameborder="false" scrolling="auto" style="overflow-x:hidden;border:none; margin-bottom:30px" width="100%" height="auto" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"> 
//clientHeight-0; 空白值 iframe自适应高度
function windowW(){
	if($(window).width()<980){
			$('.header').css('width',980+'px');
			$('#content').css('width',980+'px');
			$('body').attr('scroll','');
			$('body').css('overflow','');
	}
}
windowW();
$(window).resize(function(){
	if($(window).width()<980){
		windowW();
	}else{
		$('.header').css('width','auto');
		$('#content').css('width','auto');
		$('body').attr('scroll','no');
		$('body').css('overflow','hidden');
		
	}
});
window.onresize = function(){
	var heights = document.documentElement.clientHeight-150;document.getElementById('rightMain').height = heights;
	var openClose = $("#rightMain").height()+39;
	$('#center_frame').height(openClose+9);
	$("#openClose").height(openClose+30);	
}
window.onresize();
//站点下拉菜单
$(function(){
	//默认载入左侧菜单
	var id = $(".top_menu").eq(0).attr('id').split('_M_');
	id = id[1] ? id[1] : 1;
	$("#leftMain").load("/public/left?menuid="+id);
})

//左侧开关
$("#openClose").click(function(){
	if($(this).data('clicknum')==1) {
		$("html").removeClass("on");
		$(".left_menu").removeClass("left_menu_on");
		$(this).removeClass("close");
		$(this).data('clicknum', 0);
	} else {
		$(".left_menu").addClass("left_menu_on");
		$(this).addClass("close");
		$("html").addClass("on");
		$(this).data('clicknum', 1);
	}
	return false;
});
function _M(menuid,targetUrl) {
	$("#leftMain").load("/public/left?menuid="+menuid);
	$('.top_menu').removeClass("on");
	$('#_M_'+menuid).addClass("on");
	//当点击顶部菜单后，隐藏中间的框架
	$('#display_center_id').css('display','none');
	//显示左侧菜单，当点击顶部时，展开左侧
	$(".left_menu").removeClass("left_menu_on");
	$("#openClose").removeClass("close");
	$("html").removeClass("on");
}
function _MP(menuid,id,targetUrl) {
	$("#rightMain").attr('src', targetUrl);
	$('.sub_menu').removeClass("on fb blue");
	$('#_MP_'+menuid+'_'+id).addClass("on fb blue");
	$.get("/public/pos?menuid="+menuid+"&id="+id, function(data){
		$("#current_pos").html(data+'<span id="current_pos_attr"></span>');
	});
	$("#current_pos").data('clicknum', 1);
}

</script>
</body>
</html><?php }} ?>