<?php /* Smarty version Smarty-3.1.14, created on 2014-01-13 18:17:03
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\index.html" */ ?>
<?php /*%%SmartyHeaderCode:314945270999e08da60-57036897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7116895ef1e2296163a8d1385b94fa1e5f8009b2' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\index.html',
      1 => 1389608221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '314945270999e08da60-57036897',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270999e1c62b2_94753315',
  'variables' => 
  array (
    '_GET' => 0,
    'students' => 0,
    'student' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270999e1c62b2_94753315')) {function content_5270999e1c62b2_94753315($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="pad_common">
<div class="subnav">
    <div class="content-menu ib-a link line-x">
        <a class="add fb" href="javascript:create();"><em>创建学生</em></a>    
    </div>
</div>
<p class="content_tip">注:冻结的学生无法开课，发送通知,问卷</p>
<form method="get" action="" name="searchform">
	<table width="100%" cellspacing="0" class="search-form">
	    <tbody>
			<tr>
			<td>
			<div class="explain-col">
			<input type="text" name="studentName" class="input-text ufocus" id="studentName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['studentName'];?>
" def="学生名">
			<input type="text" name="gradeName" class="input-text ufocus" id="gradeName" value="<?php echo $_smarty_tpl->tpl_vars['_GET']->value['gradeName'];?>
" def="班级名">
			<?php echo Html::selectStatus($_smarty_tpl->tpl_vars['_GET']->value['status'],'status','status','状态');?>

			<input type="submit" value="搜索" class="button search" name="search">
			</td>
			</tr>
	    </tbody>
	</table>
</form>

<div class="table-list">
<table width="100%" cellspacing="0">
	<thead>
		<tr>
			<th align="left">学生名</th>
			<th align="left">类型</th>
			<th align="left">所在班级</th>
			<th align="left">加入时间</th>
			<th align="left">状态</th>
			<th>操作</th>
		</tr>
	</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
?>
    <tr>
		<td align="left"><?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['student'],2,30);?>
&nbsp;<a href="javascript:studentInfo(<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
,'<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
')" class="link"><?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
</a></td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['student']->value['source']==0){?>机构添加<?php }elseif($_smarty_tpl->tpl_vars['student']->value['source']==1){?>学生申请<?php }elseif($_smarty_tpl->tpl_vars['student']->value['source']==2){?>机构创建<?php }?></td>
		<td align="left"><?php echo $_smarty_tpl->tpl_vars['student']->value['gradeNames'];?>
</td>
		<td align="left"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		<td align="left"><?php if ($_smarty_tpl->tpl_vars['student']->value['status']==2){?><a class="red" href="/school/student/freeze?student=<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
">冻结</a><?php }elseif($_smarty_tpl->tpl_vars['student']->value['status']==1){?>删除<?php }elseif($_smarty_tpl->tpl_vars['student']->value['status']==0){?><a class="link" href="/school/student/freeze?student=<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
">正常</a><?php }?></td>
		<td align="center">	
			<?php if ($_smarty_tpl->tpl_vars['student']->value['status']!=1){?>
			<a href="javascript:grade(<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
,'<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
')">[分班]</a>
			<a href="javascript:confirmurl('/school/student/delete?student=<?php echo $_smarty_tpl->tpl_vars['student']->value['student'];?>
', '是否删除?')">[删除]</a>
			<?php }?>
		</td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['student']->_loop) {
?>
<tr><td colspan=6>暂无学生</td></tr>
<?php } ?>
</tbody>
</table>
</div>
<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</div>
<script language="JavaScript">
<!--
function create(){
	window.top.art.dialog({
		id:'create',
		iframe:'/school/student/create', 
		title:'创建学生', 
		width:'580', 
		height:'220',
		lock:true
	});
}
function showStudent(gradeName){
	location.href="/school/student/index?gradeName="+gradeName;
}
function grade(student,name){
	window.top.art.dialog({
		id:'grade',
		iframe:'/school/student/grade?student='+student, 
		title:'学生分班《'+name+'》', 
		width:'700', 
		height:'500', 
		lock:true
	}, function(){
		var d = window.top.art.dialog({
			id:'grade'
		}).data.iframe;
		var form = d.document.getElementById('dosubmit');
		form.click();
		return false;
	}, function(){
		window.top.art.dialog({id:'grade'}).close();
	});
}
//-->
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>