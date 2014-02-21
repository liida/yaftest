<?php /* Smarty version Smarty-3.1.14, created on 2013-11-26 18:36:56
         compiled from "F:\root\hulapai\web\system\application\views\school\index.html" */ ?>
<?php /*%%SmartyHeaderCode:13949526f1345c1e5b2-09078884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dffd3615cd14cd3df57900fd56574fc893558213' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\school\\index.html',
      1 => 1385437226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13949526f1345c1e5b2-09078884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1345c938b0_49847139',
  'variables' => 
  array (
    'datas' => 0,
    'data' => 0,
    'path' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1345c938b0_49847139')) {function content_526f1345c938b0_49847139($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<div id="content" class="contenter">
		<div id="schoolList" class="content_center lf"  style="height:360px;">
			<h5>我的机构</h5>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
				<li>
					<div class="myschool">
						<div class="school_logo"><?php echo imageUrl($_smarty_tpl->tpl_vars['data']->value['school']['id'],3,100);?>
<table><tbody><tr><td width="110"><?php echo $_smarty_tpl->tpl_vars['data']->value['school']['name'];?>
</td></tr></tbody></table></div>
						<p class="school_code">机构号：<?php echo $_smarty_tpl->tpl_vars['data']->value['school']['code'];?>
</p>
						<p class="school_manage"><a href="/school?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">管理</a></p>
					</div>
				</li>
				<?php } ?>
				<li>
					<div class="myschool" style="border-color:#17b2fb;">
						<p class="school_add"><img src='<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/add_school.png' width="26" height="26"/></p>
						<p class="school_add_link"><a href="/school/add">添加机构</a></p>
					</div>
				</li>
			</ul>
			<div id="pages"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
		</div>
	</div>	
<script type="text/javascript"> 
$(".myschool").click(function(){
	var url = $(this).children(".school_manage").children("a").attr('href');
	url = url?url:$(this).children(".school_add_link").children("a").attr('href'); 
	window.location.href = url;
});
</script>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>