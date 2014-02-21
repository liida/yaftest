<?php /* Smarty version Smarty-3.1.14, created on 2013-11-05 16:48:05
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\menu\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:227615278b0c5458116-50399757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6402979643e159ebf529c564ee14aa3ebdf969c' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\menu\\edit.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '227615278b0c5458116-50399757',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menuTypes' => 0,
    'key' => 0,
    'type' => 0,
    'menuType' => 0,
    'select_categorys' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5278b0c555dcc3_73715079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5278b0c555dcc3_73715079')) {function content_5278b0c555dcc3_73715079($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x">
        <a href="<?php echo url('admin','menu');?>
"><em>菜单管理</em></a><span>|</span>
        <a class="on" href="<?php echo url('admin','menu','add');?>
"><em>添加菜单</em></a>    
    </div>
</div>
<script type="text/javascript">
<!--
	$(function(){
		$.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'}, function(){this.close();$(obj).focus();})}});
		$("#name").formValidator({onshow:"请输入菜单名称",onfocus:"请输入菜单名称"}).inputValidator({min:1,onerror:"请输入菜单名称"});
		$("#module").formValidator({onshow:"请输入模块名",onfocus:"请输入模块名"});
		$("#controller").formValidator({onshow:"请输入文件名",onfocus:"请输入文件名"});
		$("#action").formValidator({onshow:"请输入方法名",onfocus:"请输入方法名"});
	})
//-->
</script>
<div class="common-form">
<form name="myform" id="myform" action="<?php echo url('admin','menu','edit');?>
" method="post">
<table width="100%" class="table_form contentWrap">
    <tr>
      <th width="200">菜单类别：</th>
      <td>
		       <select name="info[type]" >
		        <?php  $_smarty_tpl->tpl_vars['menuType'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuType']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuTypes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuType']->key => $_smarty_tpl->tpl_vars['menuType']->value){
$_smarty_tpl->tpl_vars['menuType']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['menuType']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['key']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['menuType']->value;?>
</option>
				<?php } ?>
			</select>
		</td>
    </tr>
    <tr>
      <th width="200">上级菜单：</th>
      <td>
		    <select name="info[pid]" style="width:200px;">
		        <option value="0">作为一级菜单</option>
				<?php echo $_smarty_tpl->tpl_vars['select_categorys']->value;?>

			</select>
		</td>
    </tr>
   
    <tr>
      <th>菜单名称：</th>
      <td><input type="text" name="info[name]" id="name" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
"></td>
    </tr>
		<tr>
		       <th>模块名：</th>
		       <td><input type="text" name="info[module]" id="module" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['module'];?>
"></td>
		</tr>
		<tr>
		       <th>文件名：</th>
		       <td><input type="text" name="info[controller]" id="controller" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['controller'];?>
"></td>
		</tr>
		<tr>
		       <th>方法名：</th>
		       <td><input type="text" name="info[action]" id="action" class="input-text" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['action'];?>
"></td>
		</tr>
		
		<tr>
		       <th>是否显示菜单：</th>
		       <td><input type="radio" name="info[display]" value="1" <?php if ($_smarty_tpl->tpl_vars['menu']->value['display']==1){?>checked<?php }?>>是<input type="radio" name="info[display]" value="0"  <?php if ($_smarty_tpl->tpl_vars['menu']->value['display']==0){?>checked<?php }?>>否</td>
		</tr>
		
</table>
<!--table_form_off-->
</div>
    <div class="bk15"></div>
    <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
">
	<div class="btn"><input type="submit" id="dosubmit" class="button" name="dosubmit" value="提交"/></div>
</div>

</form>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>