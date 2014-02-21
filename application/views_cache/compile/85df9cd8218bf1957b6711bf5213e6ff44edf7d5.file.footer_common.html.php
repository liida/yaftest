<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 10:41:53
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\public\footer_common.html" */ ?>
<?php /*%%SmartyHeaderCode:15416527466719d80c2-10320880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85df9cd8218bf1957b6711bf5213e6ff44edf7d5' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\public\\footer_common.html',
      1 => 1383360043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15416527466719d80c2-10320880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527466719dbf44_23791652',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527466719dbf44_23791652')) {function content_527466719dbf44_23791652($_smarty_tpl) {?><script language="JavaScript">
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