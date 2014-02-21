<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 17:21:54
         compiled from "F:\root\hulapai\web\system\application\views\school\add.html" */ ?>
<?php /*%%SmartyHeaderCode:7692527077362257d2-94027486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0b275e5fc700b4c33edcba09ff2d59ef6938b8d' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\school\\add.html',
      1 => 1385372302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7692527077362257d2-94027486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527077362626d4_74759455',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527077362626d4_74759455')) {function content_527077362626d4_74759455($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#code").formValidator({onshow:"请输入机构号(唯一，不能修改，用于搜索)",onfocus:"机构号长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"机构号长度为6-16个字符"}).regexValidator({regexp:"^\\w+$", onerror:"你输入的机构号格式不正确"});
	$("#name").formValidator({onshow:"请输入机构名称",onfocus:"机构名称长度为2-30个字符"}).inputValidator({min:2,max:30,onerror:"机构名称长度为2-30个字符"});
	$("#contact").formValidator({onshow:"请输入联系人",onfocus:"联系人长度为2-10个字符"}).inputValidator({min:2,max:10,onerror:"联系人长度为2-10个字符"});
	$("#description").formValidator({onshow:"请输入机构简介",onfocus:"长度为1-150个字"}).inputValidator({min:0,max:300,onerror:"长度为1-150个字"});
});
//-->
</script>

<div id="content" class="contenter">
	<div class="content_center pad_10" style="height:550px;">
		<div class="common-form">
			<h5>创建机构</h5>
			<form name="myform" action="/school/add" method="post" id="myform" enctype="multipart/form-data">
				<table width="100%" class="table_form contentWrap">
				<tr>
				<td>机构号</td> 
				<td><input type="text" name="info[code]" class="input-text" id="code" value=""></input></td>
				</tr>
				<tr>
				<td>机构名称</td> 
				<td><input type="text" name="info[name]" class="input-text" id="name" value=""></input></td>
				</tr>
				<tr>
				<td>机构类型</td> 
				<td><?php echo Html::selectSchoolType('','info[type]');?>
</td>
				</tr>
				<tr>
				<td>联系人</td> 
				<td><input type="text" name="info[contact]" class="input-text" id="contact" value=""></input></td>
				</tr>
				<tr>
				<td>联系电话1：</td> 
				<td><input type="text" name="info[phone]" class="input-text" id="phone" value=""></input>（区号-电话号码-分机号/手机号码/客服电话）</td>
				</tr>
				<tr>
				<td>联系电话2：</td> 
				<td><input type="text" name="info[phone2]" class="input-text" id="phone2" value=""></input>（区号-电话号码-分机号/手机号码/客服电话）</td>
				</tr>
				<tr>
				<td>地区</td> 
				<td><?php echo Html::selectArea('','','',"info[province]","info[city]","info[area]");?>

				</td>
				</tr>
				<tr>
				<td>详细地址：</td> 
				<td>
				<input type="text" name="info[address]" class="input-text" id="address" value=""></input>
				</td>
				</tr>
				<tr>
				<td>机构简介</td> 
				<td><textarea name="info[description]" id="description" style="width:50%;height:120px;"></textarea></td>
				</tr>
				<tr>
				<td></td> 
				<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight"></td>
				</tr>
				</table>
			</form>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>