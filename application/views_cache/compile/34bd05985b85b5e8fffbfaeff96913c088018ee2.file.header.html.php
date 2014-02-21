<?php /* Smarty version Smarty-3.1.14, created on 2013-12-04 16:13:48
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:14566526f2ca073c393-22992393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34bd05985b85b5e8fffbfaeff96913c088018ee2' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\public\\header.html',
      1 => 1386144826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14566526f2ca073c393-22992393',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f2ca07828a7_17175340',
  'variables' => 
  array (
    'USER' => 0,
    'currentSchoolName' => 0,
    'schools' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f2ca07828a7_17175340')) {function content_526f2ca07828a7_17175340($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    
<div class="header_ts">
	<div class="contenter">
		<div class="logo lf"><a href="/user"></a></div>
		<div class="welcome lf"><?php if ($_smarty_tpl->tpl_vars['USER']->value){?>欢迎您，<?php echo $_smarty_tpl->tpl_vars['USER']->value['firstname'];?>
<?php echo $_smarty_tpl->tpl_vars['USER']->value['lastname'];?>
老师，<a href="/Logout" class="yellow">退出</a><?php }?></div>
		<ul class="rt" id="nav_ts">
			<li><a href="/teacher/index/index" class="hsubs">首页</a></li>
			<li><a href="/user" class="hsubs">用户中心</a></li>
			<li><a href="#" class="hsubs school_ts"><?php if ($_smarty_tpl->tpl_vars['currentSchoolName']->value){?><?php echo $_smarty_tpl->tpl_vars['currentSchoolName']->value;?>
<?php }else{ ?>无机构<?php }?></a>
				<ul class="subs">
					<?php  $_smarty_tpl->tpl_vars['school'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['school']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['schools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['school']->key => $_smarty_tpl->tpl_vars['school']->value){
$_smarty_tpl->tpl_vars['school']->_loop = true;
?>
					<li style="margin:0"><a href="javascript:school_select(<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
')"><?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
</a></li>
					<?php } ?>
					<li style="margin:0"><a href="javascript:school_add()" class="school_add">添加机构</a></li>
				</ul>
			</li>
			<li><a href="#" class="hsubs message_ts">消息中心</a>
				<ul class="subs">
					<li style="margin:0"><a href="/teacher/message/index?type=1">通知</a></li>
					<li style="margin:0"><a href="/teacher/message/index?type=2">问卷调查</a></li>
					<li style="margin:0"><a href="/teacher/apply/index">申请</a></li>
				</ul>
			</li>
	    </ul>
	</div>
</div>
<div id="content" class="contenter_ts">
<?php echo $_smarty_tpl->getSubTemplate ("public/left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
    <?php }} ?>