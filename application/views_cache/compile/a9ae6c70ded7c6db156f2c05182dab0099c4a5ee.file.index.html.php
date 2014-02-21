<?php /* Smarty version Smarty-3.1.14, created on 2013-12-26 13:23:45
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\info\index.html" */ ?>
<?php /*%%SmartyHeaderCode:42715270b2cdc1f5f0-66691703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9ae6c70ded7c6db156f2c05182dab0099c4a5ee' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\info\\index.html',
      1 => 1388035381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42715270b2cdc1f5f0-66691703',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5270b2cdd57df9_79665201',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'id' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5270b2cdd57df9_79665201')) {function content_5270b2cdd57df9_79665201($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入机构名称",onfocus:"机构名称长度为2-30个字符"}).inputValidator({min:2,max:30,onerror:"机构名称长度为2-30个字符"});
	$("#contact").formValidator({onshow:"请输入联系人",onfocus:"联系人长度为2-10个字符"}).inputValidator({min:2,max:10,onerror:"联系人长度为2-10个字符"});
	$("#description").formValidator({onshow:"请输入机构简介",onfocus:"长度为1-300个字"}).inputValidator({min:0,max:600,onerror:"长度为1-300个字"});
	var fls=flashChecker();
	if(!fls.f){
		$(".upfileArea").html("您的浏览器不支持flash,无法上传图片！")
	}else{
		$('#upfile').uploadify({
			'formData'     : {
				'timestamp' : '<?php echo $_smarty_tpl->tpl_vars['timestamp']->value;?>
',
				'token'     : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
				'app'     : 'upload2',
				'act'     : 'index',
				'type'	  : 'school',
				'school'  : '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'
			},
			
			'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif',
			'fileSizeLimit':2048,
			'buttonText':'上传',
			'multi':false,
			'swf'      : '<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.swf',
			'uploader' : '<?php echo $_smarty_tpl->tpl_vars['path']->value['api'];?>
',
			'onSelectError' : function (file, errorCode, errorMsg) {
			   if (errorCode == SWFUpload.QUEUE_ERROR.FILE_EXCEEDS_SIZE_LIMIT){
			    alert('超过文件上传大小限制（2M）！');
			    return;
			   }
			   alert(errorObj.type + ', Error: ' + errorObj.info);
			},
			'onUploadSuccess' : function(file, data, response) {
	         	var data = jQuery.parseJSON(data);
	         	if(data.state == 1){
	         		var logo = '<?php echo $_smarty_tpl->tpl_vars['path']->value['avatar'];?>
'+data.result.school;
	         		$("#logoArea").attr('src',logo);
	         	}
	         }
		});
	}
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/info/edit" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=80 align="right">机构号：</td> 
	<td><?php echo $_smarty_tpl->tpl_vars['school']->value['code'];?>
</td>
	</tr>
	<tr>
	<td width=80 align="right">机构名称：</td> 
	<td><input type="text" name="info[name]" class="input-text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
"></input></td>
	</tr>
	<tr>
	<td width=80 align="right">机构类型：</td> 
	<td><?php echo Html::selectSchoolType($_smarty_tpl->tpl_vars['school']->value['type'],'info[type]');?>
</td>
	</tr>
	<tr>
	<td width=80 align="right">机构logo：</td> 
	<td>
	<img id="logoArea" src="<?php echo imageUrl($_smarty_tpl->tpl_vars['school']->value['id'],3,50,false);?>
" width=50 height=50>
	<div class="upfileArea" style="left: 50px;position: relative;top: -50px;"><input id="upfile" name="upfile" type="file"></div>
	<p class="content_tip">注：支持jpg,jpeg,png,gif格式的图片，大小不超过2M</p>
	</td>
	</tr>
	<tr>
	<td width=80 align="right">联系人：</td> 
	<td><input type="text" name="info[contact]" class="input-text" id="contact" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['contact'];?>
"></input></td>
	</tr>
	<tr>
	<td width=80 align="right">联系电话1：</td> 
	<td><input type="text" name="info[phone]" class="input-text" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['phone'];?>
"></input></td>
	</tr>
	<tr>
	<td width=80 align="right">联系电话2：</td> 
	<td><input type="text" name="info[phone2]" class="input-text" id="mobile" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['phone2'];?>
"></input></td>
	</tr>
	<tr>
	<td width=80 align="right">地区：</td> 
	<td>
	<?php echo Html::selectArea($_smarty_tpl->tpl_vars['school']->value['province'],$_smarty_tpl->tpl_vars['school']->value['city'],$_smarty_tpl->tpl_vars['school']->value['area'],"info[province]","info[city]","info[area]");?>

	</td>
	</tr>
	<tr>
	<td width=80 align="right">详细地址：</td> 
	<td>
	<input type="text" name="info[address]" class="input-text" id="address" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['address'];?>
"></input>
	</td>
	</tr>
	<tr>
	<td width=80 align="right">机构简介：</td> 
	<td><textarea name="info[description]" id="description" style="width:50%;height:120px;"><?php echo $_smarty_tpl->tpl_vars['school']->value['description'];?>
</textarea></td>
	</tr>
	<tr>
	<td></td> 
	<td><input name="dosubmit" type="submit" value="提交" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>