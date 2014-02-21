<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 18:20:44
         compiled from "F:\root\hulapai\web\system\application\views\public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:15671526f12c9a38fc3-80668103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f0e0c9b04282b6a79cd1eb1b52f00bc26ca2f3' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\footer.html',
      1 => 1385112870,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15671526f12c9a38fc3-80668103',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12c9a3ce47_20941016',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12c9a3ce47_20941016')) {function content_526f12c9a3ce47_20941016($_smarty_tpl) {?><div class="footer">
    <div class="link cut_line">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/about" >关于呼啦派</a><span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
weibo">官方微博</a><span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/job">诚征英才</a><span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/connect">联系我们</a>
	</div>
	<div class="copy_right">2012-2013 Hulapai Co.ltd. All Rights Reserved</div>
</div>
<script type="text/javascript"> 
function windowW(){
	if($(window).width()<980){
			$('.header_top').css('width',980+'px');
			$('.header').css('width',980+'px');
			$('#content').css('width',980+'px');
			$('.footer').css('width',980+'px');
	}
}
windowW();
$(window).resize(function(){
	if($(window).width()<980){
		windowW();
	}else{
		$('.header_top').css('width','auto');
		$('.header').css('width','auto');
		$('#content').css('width',980+'px');
		$('.footer').css('width','auto');
	}
});
window.onresize = function(){
	var heights = document.documentElement.clientHeight-155;
	if(heights > 350){
		$(".content_center").css('margin-top',(heights-350)/2+'px');
		$(".content_center").css('margin-bottom',(heights-350)/2+'px');
	}
}
window.onresize();

</script>
</body>
</html><?php }} ?>