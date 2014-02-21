<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 11:26:39
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\public\footer_common.html" */ ?>
<?php /*%%SmartyHeaderCode:8630527470efbe5fa4-19703463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd78ee1520b5df1a8e6c42aadf9ebbe2fce714ef3' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\public\\footer_common.html',
      1 => 1383360274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8630527470efbe5fa4-19703463',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527470efbedca9_07761353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527470efbedca9_07761353')) {function content_527470efbedca9_07761353($_smarty_tpl) {?><script language="JavaScript">
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