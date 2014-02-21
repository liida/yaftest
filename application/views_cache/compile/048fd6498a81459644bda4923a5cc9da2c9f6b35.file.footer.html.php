<?php /* Smarty version Smarty-3.1.14, created on 2013-10-30 11:06:23
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:13413527077af96e622-47740165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '048fd6498a81459644bda4923a5cc9da2c9f6b35' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\public\\footer.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13413527077af96e622-47740165',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527077af9ab520_29386446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527077af9ab520_29386446')) {function content_527077af9ab520_29386446($_smarty_tpl) {?><script language="JavaScript">
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