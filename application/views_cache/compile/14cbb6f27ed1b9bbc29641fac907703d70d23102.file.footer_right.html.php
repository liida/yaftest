<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 09:43:47
         compiled from "F:\root\hulapai\web\system\application\views\public\footer_right.html" */ ?>
<?php /*%%SmartyHeaderCode:25506526f12d39163c9-39146873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14cbb6f27ed1b9bbc29641fac907703d70d23102' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\footer_right.html',
      1 => 1383010990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25506526f12d39163c9-39146873',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12d391a249_92232823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12d391a249_92232823')) {function content_526f12d391a249_92232823($_smarty_tpl) {?><script language="JavaScript">
<!--
$(".ufocus").focus(function(){
	$(this).removeClass("ccc");
	var def = $(this).attr("def");
	var val = $(this).val();
	if(val == def){
		$(this).val("");
	}
}).focusout(function(){
	$(this).removeClass("ccc");
	var def = $(this).attr("def");
	var val = $(this).val();
	if(val == ""){
		$(this).val(def).addClass("ccc");
	}
});
$(".ufocus").each(function(){
	if(!$(this).val()){
		$(this).val($(this).attr("def")).addClass("ccc");
	}else{
		if($(this).val() == $(this).attr("def")){
			$(this).addClass("ccc");
		}else{
			$(this).removeClass("ccc");
		}
	}
});
$(".checkAll").click(function(){
	var v = $(this).attr("rel");
	if($(this).attr("checked")){
		$('input[name='+v+']').attr('checked', true);
	}else{
		$('input[name='+v+']').attr('checked', false);
	}
});
//-->
</script>
</body>
</html><?php }} ?>