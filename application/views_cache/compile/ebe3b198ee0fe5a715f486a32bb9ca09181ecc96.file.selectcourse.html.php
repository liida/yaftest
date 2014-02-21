<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 14:09:56
         compiled from "F:\root\hulapai\web\system\application\views\public\selectcourse.html" */ ?>
<?php /*%%SmartyHeaderCode:27847526f358e0a7901-73430606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe3b198ee0fe5a715f486a32bb9ca09181ecc96' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\selectcourse.html',
      1 => 1383026993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27847526f358e0a7901-73430606',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f358e0d6703_45655314',
  'variables' => 
  array (
    'path' => 0,
    'categorys' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f358e0d6703_45655314')) {function content_526f358e0d6703_45655314($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	 $('.cnodeName').editable('save.php', { 
		 type      : 'text',
		 width     :120,
		 height    :18,
		 //onblur    : "ignore",
         cancel    : '取消',
         submit    : '确定',
         indicator : '<img src="css/loader.gif">',
		 callback  : function(value, settings) {
			 $("#modifiedtime").html("刚刚");
         }

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
<div class="table-list" id="load_priv">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th class="text-l cu-span" style='padding-left:30px;'>
				<span onClick="javascript:$('input[name=id[]]').attr('checked', true)">全选</span>/<span onClick="javascript:$('input[name=id[]]').attr('checked', false)">取消</span>
			</th>
		</tr>
	</thead>
</table>
<form name="myform" action="/public/selectCourse" method="post">
<table width="100%" cellspacing="0" id="dnd-example">
<tbody>
<?php echo $_smarty_tpl->tpl_vars['categorys']->value;?>

</tbody>
</table>
    <div class="btn"><input type="submit"  class="button" name="dosubmit" id="dosubmit" value="提交" /></div>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>