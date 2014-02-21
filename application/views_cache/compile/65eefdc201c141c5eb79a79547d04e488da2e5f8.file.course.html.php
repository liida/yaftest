<?php /* Smarty version Smarty-3.1.14, created on 2013-11-02 15:25:04
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\info\course.html" */ ?>
<?php /*%%SmartyHeaderCode:1564526f55361e4ff2-87720480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65eefdc201c141c5eb79a79547d04e488da2e5f8' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\info\\course.html',
      1 => 1383377062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1564526f55361e4ff2-87720480',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f5536217c74_09105934',
  'variables' => 
  array (
    'path' => 0,
    'categorys' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f5536217c74_09105934')) {function content_526f5536217c74_09105934($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
jquery.treeTable.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.treetable.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.jeditable.js"></script>
<style type="text/css">
<!--

-->
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dnd-example").treeTable({
    	indent: 20
    });
  	$('.cnodeName').editable('/teacher/info/course', { 
		 name:'remark',
		 type      : 'text',
		 width     :120,
		 height    :18,
         cancel    : '取消',
         submit    : '确定'
	 });
  });
  function checknode(obj)
  {
      var chk = $("input[type='checkbox']");
      var count = chk.length;
      var num = chk.index(obj);
      var level_top = level_bottom =  chk.eq(num).attr('level')
      for (var i=num; i>=0; i--)
      {
              var le = chk.eq(i).attr('level');
              if(eval(le) < eval(level_top)) 
              {
                  chk.eq(i).attr("checked",true);
                  var level_top = level_top-1;
              }
      }
      for (var j=num+1; j<count; j++)
      {
              var le = chk.eq(j).attr('level');
             
              if(chk.eq(num).attr("checked")) {
                  if(eval(le) > eval(level_bottom)){
                  	chk.eq(j).attr("checked",true);
                  }else if(eval(le) == eval(level_bottom)){
                  	break;
                  }
              }
              else {
                  if(eval(le) > eval(level_bottom)){
                  	chk.eq(j).attr("checked",false);
                  }else if(eval(le) == eval(level_bottom)){
                  	break;
                  }
              }
      }
  }
</script>
<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="fb" href="/teacher/info/index"><em class="black">个人资料</em></a>
        <a class="fb" href="/teacher/info/course"><em>授课内容</em></a>
    </div>
</div>
<div class="common-form">
<div class="table-list" id="load_priv">
<form name="myform" action="/public/selectCourse" method="post">
<table width="100%" cellspacing="0" id="dnd-example">
<tbody>
<?php echo $_smarty_tpl->tpl_vars['categorys']->value;?>

</tbody>
</table>
    <div class="btn"><input type="submit"  class="button" name="dosubmit" id="dosubmit" value="提交" /></div>
</form>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>