<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 17:14:50
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\public\left.html" */ ?>
<?php /*%%SmartyHeaderCode:12840526f2c865cf043-18343731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c3dd7bbacfa7dd5fca525ea7e98a9e5ddcafa9d' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\public\\left.html',
      1 => 1383383680,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12840526f2c865cf043-18343731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f2c865d2ec6_45241856',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f2c865d2ec6_45241856')) {function content_526f2c865d2ec6_45241856($_smarty_tpl) {?><div class="col-left left_menu_ts">
<div id="leftMain">
	<ul>
	    <li id="_MP_1_1" class="menu_ts_info<?php if (strtolower($_SERVER['REQUEST_URI'])=='/teacher/info/index'){?>_on<?php }?> sub_menu">
	    	<a href="/teacher/info/index" style="outline:none;">个人资料</a>
	    </li>
	    <li id="_MP_1_2" class="menu_ts_event<?php if (strtolower($_SERVER['REQUEST_URI'])=='/teacher/event/view'){?>_on<?php }?> sub_menu">
	    	<a href="/teacher/event/view" style="outline:none;">课程表</a>
	    </li>
	    <li id="_MP_1_3" class="menu_ts_comment<?php if (strtolower($_SERVER['REQUEST_URI'])=='/teacher/comment/index'){?>_on<?php }?> sub_menu">
	    	<a href="/teacher/comment/index" style="outline:none;">点评</a>
	    </li>
	    <li id="_MP_1_4" class="menu_ts_attendance<?php if (strtolower($_SERVER['REQUEST_URI'])=='/teacher/attendance/index'){?>_on<?php }?> sub_menu">
	    	<a href="/teacher/attendance/index" style="outline:none;">考勤</a>
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