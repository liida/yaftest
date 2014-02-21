<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 10:33:47
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\public\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:11829526f1e8bef5143-96427367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e1d287c43271413a307fdac2fc919056000daca' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\public\\footer.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11829526f1e8bef5143-96427367',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1e8bef5148_74088731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1e8bef5148_74088731')) {function content_526f1e8bef5148_74088731($_smarty_tpl) {?><script language="JavaScript">
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