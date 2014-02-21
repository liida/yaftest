<?php /* Smarty version Smarty-3.1.14, created on 2013-12-24 18:35:59
         compiled from "F:\root\hulapai\web\system\application\views\download\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2688752734d03bd8ad8-37883032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d7410652dbc8bb53d3411c898b4597adde0e19f' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\download\\index.html',
      1 => 1387879265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2688752734d03bd8ad8-37883032',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52734d03c078e9_60323760',
  'variables' => 
  array (
    'wap' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52734d03c078e9_60323760')) {function content_52734d03c078e9_60323760($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['wap']->value){?>
<?php echo $_smarty_tpl->getSubTemplate ("public/header_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="content" class="contenter">
	<center>
	<div class="site_common_other_div">
    	<p class="qa"><span>官方下载</span></a></p>
		<ul class="list lh24 f14 download" style="border-bottom:1px solid #ccc;">
			<li class="download_icon"></li>
			<li class="download_desc"><ul>
				<li class="name">呼啦派</li>
				<li>大小：<?php echo $_smarty_tpl->tpl_vars['info']->value['size'];?>
MB</li>
				<li>版本：<?php echo $_smarty_tpl->tpl_vars['info']->value['version'];?>
</li>
				<li>系统要求：Android2.1及以上</li>
				<li>更新时间：<?php echo $_smarty_tpl->tpl_vars['info']->value['date'];?>
</li>
			</ul></li>
			<li class="download_link" onclick="javascript:location.href='/download?version=<?php echo $_smarty_tpl->tpl_vars['info']->value['version'];?>
&source=<?php echo $_smarty_tpl->tpl_vars['info']->value['source'];?>
'"></li>
        </ul>
        <ul class="list lh24 f14 p_desc">
			<li class="name">产品介绍：</li>
			<li class="desc"><ul>
				<li>呼啦派是国内首款老师和学生家长（也可以是成年学生）之间双向交流的教学辅助工具软件。
	师生双方通过建立“关联”，老师可以在这个平台上轻松实现教学管理的大部分功能并自动推送给学生家长。如：建课，考勤，教学点评，事件通知等等；而家长也可以及时反馈意见，与老师就学生的学习情况及时交互。</li>
				<li>微博广场和个人空间是与他人分享学习与成长的社交平台。无论您是想做公益活动的老师，还是热心分享资源的爱心妈妈，或是视学习为生命的上进青年，这里都是一个专门为您打造的绿色生态圈。</li>
        	</ul></li>
        </ul>
	</div>
</center>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>呼啦派</title>
</head>
<body>
<center>
<div id="content" style="font-size:100px;line-height:100px;">
<a href="/download?version=<?php echo $_smarty_tpl->tpl_vars['info']->value['version'];?>
&source=<?php echo $_smarty_tpl->tpl_vars['info']->value['source'];?>
">apk下载</a>&nbsp;&nbsp;&nbsp;
<a href="https://itunes.apple.com/cn/app/hu-la-pai/id664444914?mt=8">ios下载</a>
</div>
</center>
</body>
<script type="text/javascript"> 

window.onresize = function(){
	var height = window.screen.availHeight;
	document.getElementById("content").style.marginTop = parseInt(height/2) -200 + "px";
}
window.onresize();

</script>
</html>
<?php }?>
<?php }} ?>