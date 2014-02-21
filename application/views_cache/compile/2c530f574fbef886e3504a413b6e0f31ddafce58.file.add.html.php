<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 17:04:58
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\school\add.html" */ ?>
<?php /*%%SmartyHeaderCode:27707526f1ed7ece6e4-10792389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c530f574fbef886e3504a413b6e0f31ddafce58' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\school\\add.html',
      1 => 1388035405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27707526f1ed7ece6e4-10792389',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f1ed7f1c8e7_88418237',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f1ed7f1c8e7_88418237')) {function content_526f1ed7f1c8e7_88418237($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#code").formValidator({onshow:"请输入机构号",onfocus:"机构号长度为6-16个字符"}).inputValidator({min:6,max:16,onerror:"机构号长度为6-16个字符"}).regexValidator({regexp:"^\\w+$", onerror:"你输入的机构号格式不正确"});
	$("#name").formValidator({onshow:"请输入机构名称",onfocus:"机构名称长度为2-30个字符"}).inputValidator({min:2,max:30,onerror:"机构名称长度为2-30个字符"});
	$("#contact").formValidator({onshow:"请输入联系人",onfocus:"联系人长度为2-10个字符"}).inputValidator({min:2,max:10,onerror:"联系人长度为2-10个字符"});
	$("#description").formValidator({onshow:"请输入机构简介",onfocus:"长度为1-300个字"}).inputValidator({min:0,max:600,onerror:"长度为1-300个字"});
});
//-->
</script>
<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a href="/admin/school/index"><em>管理机构</em></a><span>|</span>
        <a class="on" href="javascript:;"><em>添加机构</em></a>  
    </div>
</div>
<div class="pad_10">
<div class="common-form">
<form name="myform" action="/admin/school/add" method="post" id="myform" enctype="multipart/form-data">
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
<td>详细地址</td> 
<td>
<input type="text" name="info[address]" class="input-text" id="address" value=""></input>
</td>
</tr>
<tr>
<td>机构简介</td> 
<td><textarea name="info[description]" id="description" style="width:50%;height:120px;"></textarea></td>
</tr>
</table>
    <div class="bk15"></div>
    <input name="dosubmit" type="submit" value="提交" class="button">
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>