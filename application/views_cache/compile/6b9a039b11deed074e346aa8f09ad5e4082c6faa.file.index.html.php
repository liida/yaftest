<?php /* Smarty version Smarty-3.1.14, created on 2013-11-26 10:48:41
         compiled from "F:\root\hulapai\web\system\application\views\student\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21225526f1e68d20238-62544774%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b9a039b11deed074e346aa8f09ad5e4082c6faa' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\student\\index.html',
      1 => 1385114194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21225526f1e68d20238-62544774',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1e68d20239_50965224',
  'variables' => 
  array (
    'datas' => 0,
    'data' => 0,
    'path' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1e68d20239_50965224')) {function content_526f1e68d20239_50965224($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="content" class="contenter">
		<div id="studentList" class="content_center lf"  style="height:360px;">
			<h5>学生档案</h5>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
				<li>
					<div class="mystudent">
						<p class="avatar"><?php echo imageUrl($_smarty_tpl->tpl_vars['data']->value['id'],2,100);?>
</p>
						<p class="info">
							<span class="name"><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</span>
							<span>性别：<?php if ($_smarty_tpl->tpl_vars['data']->value['gender']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['data']->value['gender']==2){?>女<?php }?></span>
							<span>生日：<?php echo $_smarty_tpl->tpl_vars['data']->value['brithday'];?>
</span>
							<span>关系：<?php if ($_smarty_tpl->tpl_vars['data']->value['relation']==1){?>本人<?php }elseif($_smarty_tpl->tpl_vars['data']->value['relation']==2){?>爸爸<?php }elseif($_smarty_tpl->tpl_vars['data']->value['relation']==3){?>妈妈<?php }elseif($_smarty_tpl->tpl_vars['data']->value['relation']==4){?>家长<?php }?></span>
						</p>
						<p class="student_manage" id="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"><a class="event" href="/student?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&act=/Student/Event/View"><span>课程表</span></a><a class="attendance" href="/student?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&act=/Student/Attendance/Index"><span>考勤</span></a><a class="comment" href="/student?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
&act=/Student/Comment/Index"><span>点评</span></a></p>
					</div>
				</li>
				<?php } ?>
				<?php if (count($_smarty_tpl->tpl_vars['datas']->value)<3){?>
				<li>
					<div class="mystudent" style="border-color:#17b2fb;">
						<p class="student_add"><img src='<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/add_school.png' width="26" height="26"/></p>
						<p class="student_add_link"><a href="/student/add">创建学生档案</a></p>
					</div>
				</li>
				<?php }?>
			</ul>
			<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
		</div>
		
	</div>	
<script type="text/javascript"> 
$(".mystudent").click(function(){
	if($(this).children(".student_manage").length > 0){
		var id = $(this).children(".student_manage").attr('id');
		var url = '/student?id='+id+'&act=/Student/Info/Index';
	}else{
		var url = $(this).children(".student_add_link").children("a").attr('href'); 
	}
	window.location.href = url;
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>