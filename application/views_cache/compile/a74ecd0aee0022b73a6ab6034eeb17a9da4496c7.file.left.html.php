<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 17:17:09
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\public\left.html" */ ?>
<?php /*%%SmartyHeaderCode:16447526f69144ab980-14563857%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a74ecd0aee0022b73a6ab6034eeb17a9da4496c7' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\public\\left.html',
      1 => 1383383688,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16447526f69144ab980-14563857',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f69144af805_76165864',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f69144af805_76165864')) {function content_526f69144af805_76165864($_smarty_tpl) {?><div class="col-left left_menu_ts">
<div id="leftMain">
	<ul>
	    <li id="_MP_1_1" class="menu_ts_info<?php if (strtolower($_SERVER['REQUEST_URI'])=='/student/info/index'){?>_on<?php }?> sub_menu">
	    	<a href="/student/info/index" style="outline:none;">个人资料</a>
	    </li>
	    <li id="_MP_1_2" class="menu_ts_event<?php if (strtolower($_SERVER['REQUEST_URI'])=='/student/event/view'){?>_on<?php }?> sub_menu">
	    	<a href="/student/event/view" style="outline:none;">课程表</a>
	    </li>
	    <li id="_MP_1_3" class="menu_ts_comment<?php if (strtolower($_SERVER['REQUEST_URI'])=='/student/comment/index'){?>_on<?php }?> sub_menu">
	    	<a href="/student/comment/index" style="outline:none;">点评</a>
	    </li>
	    <li id="_MP_1_4" class="menu_ts_attendance<?php if (strtolower($_SERVER['REQUEST_URI'])=='/student/attendance/index'){?>_on<?php }?> sub_menu">
	    	<a href="/student/attendance/index" style="outline:none;">考勤</a>
	    </li>
	</ul>
</div>
</div>
<script type="text/javascript">
$(".switchs").each(function(i){
    var ul = $(this).parent().next();
    $(this).click(
    function(){
        if(ul.is(':visible')){
            ul.hide();
            $(this).removeClass('on');
        }else{
            ul.show();
            $(this).addClass('on');
        }
    })
});
</script>
<?php }} ?>