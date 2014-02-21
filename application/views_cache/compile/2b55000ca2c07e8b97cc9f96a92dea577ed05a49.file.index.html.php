<?php /* Smarty version Smarty-3.1.14, created on 2013-12-02 11:30:10
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25480526f13491e5301-93032185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b55000ca2c07e8b97cc9f96a92dea577ed05a49' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\index\\index.html',
      1 => 1385954986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25480526f13491e5301-93032185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f13492a8804_35125560',
  'variables' => 
  array (
    'path' => 0,
    'USER' => 0,
    'school' => 0,
    'topMenus' => 0,
    'topMenu' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f13492a8804_35125560')) {function content_526f13492a8804_35125560($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />-->
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
common.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
dialog.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
admin_common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
school_common.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
formvalidatorregex.js" charset="UTF-8"></script>
<title>呼啦派-机构</title>
</head>
<body scroll="no">
<div class="header_top">
	<div class="contenter">
		<div class="rt">
	    	<div class="tab_style white cut_line text-r">
		    	<?php if ($_smarty_tpl->tpl_vars['USER']->value){?><?php if ($_smarty_tpl->tpl_vars['USER']->value['nickname']){?><?php echo $_smarty_tpl->tpl_vars['USER']->value['nickname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['USER']->value['account'];?>
<?php }?>，<a href="/Logout">退出</a><span>|</span><a href="/User">用户中心</a><?php }else{ ?><a href="/Register">登录-注册</a><?php }?>
		    	<span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/guide" target="_blank">帮助中心</a>
		    	<!-- <span>|</span><a href="#">提建议</a> -->
	        </div>
	        <div class="style_but"></div>
	    </div>
	</div>
</div>
<div class="header">
	<div class="contenter">
		<div class="logo lf"><a href="/user"></a></div>
		<div class="logo_line lf"></div>
	    <div class="col-auto lf" style="overflow: visible">
	        <ul class="nav black" id="top_menu">
	        	<li class="logo_line" id=""></li>
	        	<li class="avatar"><a href="/school/index/index"><?php echo imageUrl($_smarty_tpl->tpl_vars['school']->value['id'],3,50);?>
</a></li>
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
</div>
<div id="content" class="contenter" style="width:auto;">
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
        <div class="col-1">
            <div class="content" style="position:relative; overflow:hidden">
                <iframe name="right" id="rightMain" src="<?php echo url('school','welcome');?>
" frameborder="false" scrolling="auto" style="overflow-x:hidden;border:none;" width="100%" height="auto" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- <div class="footer">
    <div class="link cut_line">
    	<a href="about">关于呼啦派</a><span>|</span><a href="weibo">官方微博</a><span>|</span><a href="job">诚征英才</a><span>|</span><a href="connect">联系我们</a>
	</div>
	<div class="copy_right">2012-2013 Hulapai Co.ltd. All Rights Reserved</div>
</div> -->
<script type="text/javascript"> 
//clientHeight-0; 空白值 iframe自适应高度
function windowW(){
	if($(window).width()<980){
			$('.header_top').css('width',980+'px');
			$('.header').css('width',980+'px');
			$('#content').css('width',980+'px');
			//$('.footer').css('width',980+'px');
			$('body').attr('scroll','');
			$('body').css('overflow','');
	}
}
windowW();
$(window).resize(function(){
	if($(window).width()<980){
		windowW();
	}else{
		$('.header_top').css('width','auto');
		$('.header').css('width','auto');
		$('#content').css('width','auto');
		//$('.footer').css('width','auto');
		$('body').attr('scroll','no');
		$('body').css('overflow','hidden');
		
	}
});
window.onresize = function(){
	//var heights = document.documentElement.clientHeight-230;
	var heights = document.documentElement.clientHeight-95;
	document.getElementById('rightMain').height = heights;
	var openClose = $("#rightMain").height();
	$('#center_frame').height(openClose);
	$("#openClose").height(openClose);	
}
window.onresize();
//站点下拉菜单
$(function(){
	//默认载入左侧菜单
	var id = $(".top_menu").eq(0).attr('id').split('_M_');
	id = id[1] ? id[1] : 1;
	_M(id,'#');
})

//左侧开关
$("#openClose").click(function(){
	if($(this).data('clicknum')==1) {
		$(".left_menu").removeClass("left_menu_on");
		$(this).removeClass("close");
		$(this).data('clicknum', 0);
	} else {
		$(".left_menu").addClass("left_menu_on");
		$(this).addClass("close");
		$(this).data('clicknum', 1);
	}
	return false;
});
function _M(menuid,targetUrl) {
	$("#leftMain").load("/public/left?menuid="+menuid,function(){
		$('.top_menu').removeClass("on");
		$('#_M_'+menuid).addClass("on");
		//当点击顶部菜单后，隐藏中间的框架
		$('#display_center_id').css('display','none');
		//显示左侧菜单，当点击顶部时，展开左侧
		$(".left_menu").removeClass("left_menu_on");
		$("#openClose").removeClass("close");
		var first = $("#leftMain").find(".sub_menu").eq(0);
		var liid = first.attr("id").split("_");
		var url = first.children("a").attr("link");
		if(liid[2] && liid[3] && url){
			_MP(liid[2],liid[3],url);
		}
	});
}
function _MP(menuid,id,targetUrl) {
	$("#rightMain").attr('src', targetUrl);
	$('.sub_menu').removeClass("on link");
	$('#_MP_'+menuid+'_'+id).addClass("on link");
}

</script>
</body>
</html><?php }} ?>