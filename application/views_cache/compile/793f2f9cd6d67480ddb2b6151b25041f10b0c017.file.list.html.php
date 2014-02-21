<?php /* Smarty version Smarty-3.1.14, created on 2014-01-16 14:55:52
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\comment\list.html" */ ?>
<?php /*%%SmartyHeaderCode:2983352ce3d2fa86538-37356030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '793f2f9cd6d67480ddb2b6151b25041f10b0c017' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\comment\\list.html',
      1 => 1389348843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2983352ce3d2fa86538-37356030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ce3d2fc5b134_48719419',
  'variables' => 
  array (
    '_GET' => 0,
    'teachers' => 0,
    'sorts' => 0,
    'comments' => 0,
    'comment' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce3d2fc5b134_48719419')) {function content_52ce3d2fc5b134_48719419($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script language="javascript">
function dosort(type){
	var sorts = $("#sorts").val();
	if(sorts.indexOf(type) >= 0){
		if(sorts.indexOf('desc') >= 0){
			sorts = type+' asc';
		}else{
			sorts = type+' desc';
		}
	}else{
		sorts = type+' desc';
	}
	$("#sorts").val(sorts);
	$("#searchform").submit();
}

function selectC(c,type){
	if(type == 'student'){
		$("#studentName").val(c);
		$("#searchform").submit();
	}else if(type == 'teacher'){
		$("#teacher").val(c);
		$("#searchform").submit();
	}
}

function reset(){
	alert(123)
	
	
}
</script>
<div class="pad_common">
<form method="get" action="" name="searchform" id="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="content" class="input-text ufocus" id="content" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['content'];?>
" def="关键字">
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			<?php echo Html::select($_smarty_tpl->tpl_vars['teachers']->value,$_smarty_tpl->tpl_vars['_GET']->value['teacher'],'teacher','teacher','全部老师');?>

			<?php echo Html::date('start_date',$_smarty_tpl->tpl_vars['_GET']->value['start_date'],'点评起始日期');?>

			<?php echo Html::date('end_date',$_smarty_tpl->tpl_vars['_GET']->value['end_date'],'点评终止日期');?>

			<input type="hidden" name="sorts" class="input-text" id="sorts" value="<?php echo $_smarty_tpl->tpl_vars['sorts']->value;?>
">
			<input type="submit" value="搜索" class="button search" name="search">
			<p class="link" onclick="location.href='/school/comment/list'">清除搜素条件</p>
		</div>
			</td>
			</tr>
	    </tbody>
	</table>
	<input type="hidden" name="pc_hash" value="bLHaEA">
</form>
<div class="table-list">
<table width="100%" cellspacing="0" >
	<thead>
		<tr>
			<th width="400">内容</th>
			<th><a class="link" href="javascript:dosort('a.student')">学生</a></th>
			<th><a class="link" href="javascript:dosort('a.teacher')">点评老师</a></th>
			<th><a class="link" href="javascript:dosort('a.event')">课程</a></th>
			<th><a class="link" href="javascript:dosort('a.create_time')">点评时间</a></th>
			<th>回复数</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
    <tr>
		<td width="400" class="link" onclick="show(<?php echo $_smarty_tpl->tpl_vars['comment']->value['id'];?>
)"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['comment']->value['content'],100,"...",true);?>
</td>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['comment']->value['student'],2,30);?>
&nbsp;<span class="link" onclick="selectC('<?php echo studentName($_smarty_tpl->tpl_vars['comment']->value['student']);?>
','student')"><?php echo studentName($_smarty_tpl->tpl_vars['comment']->value['student']);?>
</span></td>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['comment']->value['teacher'],1,30);?>
&nbsp;<span class="link" onclick="selectC('<?php echo $_smarty_tpl->tpl_vars['comment']->value['teacher'];?>
','teacher')"><?php echo teacherName($_smarty_tpl->tpl_vars['comment']->value['teacher']);?>
</span></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['comment']->value['text'];?>
<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['start_date'],'%Y-%m-%d %H:%M');?>
至<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['comment']->value['end_date'],'%H:%M');?>
</p></td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['comment']->value['create_time'];?>
</td>
		<td align="center"><?php echo $_smarty_tpl->tpl_vars['comment']->value['replies'];?>
</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['comment']->_loop) {
?>
<tr><td colspan=6>暂无点评数据</td></tr>
<?php } ?>
</tbody>
</table>
<script language="JavaScript">
<!--
function show(id){
	window.top.art.dialog({
		id:'show',
		iframe:'/school/comment/show?id='+id, 
		title:"点评详情", 
		width:'836', 
		height:'460', 
		lock:true
	});
}
//-->
</script>
</div>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>