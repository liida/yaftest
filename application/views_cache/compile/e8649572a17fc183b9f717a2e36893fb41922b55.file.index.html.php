<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 18:20:44
         compiled from "F:\root\hulapai\web\system\application\views\user\index.html" */ ?>
<?php /*%%SmartyHeaderCode:27953526f12d35f5682-47068443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8649572a17fc183b9f717a2e36893fb41922b55' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\user\\index.html',
      1 => 1385112894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27953526f12d35f5682-47068443',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12d3608f04_65759660',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12d3608f04_65759660')) {function content_526f12d3608f04_65759660($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" class="contenter" style="width:auto;">
	<div class="col-left left_menu">
    	<div id="leftMain">
    		<?php echo $_smarty_tpl->getSubTemplate ("user/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
                <iframe name="right" id="rightMain" src="" frameborder="false" scrolling="auto" style="overflow-x:hidden;border:none;" width="100%" height="auto" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- <div class="footer">
    <div class="link cut_line">
    	<a href="#">关于呼啦派</a><span>|</span><a href="#">官方微博</a><span>|</span><a href="#">诚征英才</a><span>|</span><a href="#">联系我们</a><span>|</span><a href="#">网站地图</a> 
	</div>
	<div class="copy_right">2012-2013 Hulapai Co.ltd. All Rights Reserved</div>
</div> -->
<script type="text/javascript"> 
//站点下拉菜单
$(function(){
	_MP(1,1,'/user/info');
})

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
function _MP(menuid,id,targetUrl) {
	$("#rightMain").attr('src', targetUrl);
	$('.sub_menu').removeClass("on link");
	$('#_MP_'+menuid+'_'+id).addClass("on link");
}

</script>
</body>
</html><?php }} ?>