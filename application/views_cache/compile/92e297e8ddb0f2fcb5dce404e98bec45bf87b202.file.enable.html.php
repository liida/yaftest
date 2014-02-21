<?php /* Smarty version Smarty-3.1.14, created on 2013-11-14 17:00:28
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\user\group\enable.html" */ ?>
<?php /*%%SmartyHeaderCode:291155284912c6142d3-48553497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92e297e8ddb0f2fcb5dce404e98bec45bf87b202' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\user\\group\\enable.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291155284912c6142d3-48553497',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'group' => 0,
    'categorys' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5284912c6624d9_30249447',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5284912c6624d9_30249447')) {function content_5284912c6624d9_30249447($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['css'];?>
jquery.treeTable.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
jquery.treetable.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#dnd-example").treeTable({
    	indent: 20
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
				<span onClick="javascript:$('input[name=menuid[]]').attr('checked', true)">全选</span>/<span onClick="javascript:$('input[name=menuid[]]').attr('checked', false)">取消</span>
			</th>
		</tr>
	</thead>
</table>
<form name="myform" action="/admin/user_group/enable" method="post">
<input type="hidden" name="gid" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
"></input>
<table width="100%" cellspacing="0" id="dnd-example">
<tbody>
<?php echo $_smarty_tpl->tpl_vars['categorys']->value;?>

</tbody>
</table>
    <div class="btn"><input type="submit"  class="button" name="dosubmit" id="dosubmit" value="提交" /></div>
</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>