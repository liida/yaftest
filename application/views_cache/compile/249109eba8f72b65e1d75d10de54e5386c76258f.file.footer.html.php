<?php /* Smarty version Smarty-3.1.14, created on 2013-11-14 14:58:06
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:2729526f6b9c901479-82065334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249109eba8f72b65e1d75d10de54e5386c76258f' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\public\\footer.html',
      1 => 1384326593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2729526f6b9c901479-82065334',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f6b9c901476_75287735',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f6b9c901476_75287735')) {function content_526f6b9c901476_75287735($_smarty_tpl) {?></div>
<div class="footer">
    <div class="link cut_line">
    	<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/about" target="_blank">关于呼啦派</a><span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
weibo" target="_blank">官方微博</a><span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/job" target="_blank">诚征英才</a><span>|</span><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value['domain'];?>
index/connect" target="_blank">联系我们</a>
	</div>
	<div class="copy_right">2012-2013 Hulapai Co.ltd. All Rights Reserved</div>
</div>
<script type="text/javascript"> 
//站点下拉菜单
$(function(){
	$("#nav_ts li").mouseover(function(){
		$(this).children('.subs').show();
	}).mouseout(function(){
		$(this).children('.subs').hide();
	});
})
//机构选择
function school_select(id,name) {
	$(".tab_web").html(name);
	$.get("/student/index/selectSchool?school="+id,function(data){
		if (data==1){
			window.top.location.reload();
		}
	});
	$('.subs').hide();
}

//添加机构
function school_add() {
	window.top.art.dialog({
		id:'school_add',
		iframe:'/student/index/addSchool', 
		title:'添加机构', 
		width:'400', 
		height:'150', 
		lock:true
	});
}


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
		$('#content').css('width',980+'px');
		//$('.footer').css('width','auto');
		$('body').attr('scroll','no');
		$('body').css('overflow','hidden');
		
	}
});

AdjustHeight();
function AdjustHeight()
{
   var heightLeft = $('.left_menu_ts').get(0).offsetHeight;
   var heightRight = $('#content').get(0).offsetHeight-26;
   if(heightRight < WINHEIGHT){
   		heightRight = WINHEIGHT;
   		$('#content').height(heightRight+26);
   }
   if (heightLeft > heightRight){
       $('#content').height(heightLeft);
   }else{
       $('.left_menu_ts').height(heightRight);
   }
}  
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
 <?php }} ?>