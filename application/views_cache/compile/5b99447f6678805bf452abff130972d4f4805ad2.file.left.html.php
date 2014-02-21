<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 11:26:02
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\index\left.html" */ ?>
<?php /*%%SmartyHeaderCode:11547526f29962c97d7-67814508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b99447f6678805bf452abff130972d4f4805ad2' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\index\\left.html',
      1 => 1383017160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11547526f29962c97d7-67814508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f29962d91d3_74414926',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f29962d91d3_74414926')) {function content_526f29962d91d3_74414926($_smarty_tpl) {?><ul>
    <li id="_MP_1_1" class="sub_menu">
    	<a href="javascript:_MP(1,1,'/teacher/info/index');" hidefocus="true" style="outline:none;">个人资料</a>
    </li>
    <li id="_MP_1_2" class="sub_menu">
    	<a href="javascript:_MP(1,2,'/teacher/event/index');" hidefocus="true" style="outline:none;">课程表</a>
    </li>
    <li id="_MP_1_3" class="sub_menu">
    	<a href="javascript:_MP(1,3,'/teacher/attendance/index');" hidefocus="true" style="outline:none;">考勤</a>
    </li>
    <li id="_MP_1_4" class="sub_menu">
    	<a href="javascript:_MP(1,4,'/teacher/comment/index');" hidefocus="true" style="outline:none;">点评</a>
    </li>
</ul>
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