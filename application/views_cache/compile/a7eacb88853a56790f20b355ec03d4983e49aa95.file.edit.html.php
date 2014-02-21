<?php /* Smarty version Smarty-3.1.14, created on 2013-12-12 11:48:07
         compiled from "F:\root\hulapai\web\system\application\modules\Admin\views\school\edit.html" */ ?>
<?php /*%%SmartyHeaderCode:1626652a931f7b8af00-76611331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7eacb88853a56790f20b355ec03d4983e49aa95' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Admin\\views\\school\\edit.html',
      1 => 1385372276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1626652a931f7b8af00-76611331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'id' => 0,
    'school' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a931f7cb7bc7_07591160',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a931f7cb7bc7_07591160')) {function content_52a931f7cb7bc7_07591160($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	$("#phone").formValidator({onshow:"请输入电话号码",onfocus:"区号-电话号码-分机号"}).regexValidator({regexp:"^(([0\\+]\\d{2,3}-)?(0\\d{2,3})-)?(\\d{7,8})(-(\\d{3,}))?$", onerror:"你输入的联系电话不正确(区号-电话号码-分机号)"});
	$("#mobile").formValidator({onshow:"请输入手机号码",onfocus:"请输入手机号码"}).regexValidator({regexp:"^(1)[0-9]{10}$", onerror:"你输入的手机号码不正确"});
	$("#description").formValidator({onshow:"请输入机构简介",onfocus:"长度为1-150个字"}).inputValidator({min:0,max:300,onerror:"长度为1-150个字"});
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
			'width':98,
			'height':39,
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
<div class="subnav">
    <div class="content-menu ib-a blue line-x"> 
        <a href="/admin/school/index"><em>管理机构</em></a><span>|</span>
        <a href="/admin/school/add"><em>添加机构</em></a>  
    </div>
</div>
<div class="pad_10">
<div class="common-form">
<form name="myform" action="/admin/school/edit" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
<tr>
<td>机构号</td> 
<td><?php echo $_smarty_tpl->tpl_vars['school']->value['code'];?>
</td>
</tr>
<tr>
<td>机构名称</td> 
<td><input type="text" name="info[name]" class="input-text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['name'];?>
"></input></td>
</tr>
<tr>
<td>机构类型</td> 
<td><?php echo Html::selectSchoolType($_smarty_tpl->tpl_vars['school']->value['type'],'info[type]');?>
</td>
</tr>
<tr>
<td>机构logo</td> 
<td><input id="upfile" name="upfile" type="file">
		<img id="logoArea" src="<?php echo imageUrl($_smarty_tpl->tpl_vars['school']->value['id'],3,100,false);?>
">
</td>
</tr>
<tr>
<td>联系人</td> 
<td><input type="text" name="info[contact]" class="input-text" id="contact" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['contact'];?>
"></input></td>
</tr>
<tr>
<td>联系电话1：</td> 
<td><input type="text" name="info[phone]" class="input-text" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['phone'];?>
"></input>（区号-电话号码-分机号/手机号码/客服电话）</td>
</tr>
<tr>
<td>联系电话2：</td> 
<td><input type="text" name="info[phone2]" class="input-text" id="phone2" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['phone2'];?>
"></input>（区号-电话号码-分机号/手机号码/客服电话）</td>
</tr>
<tr>
<td>地区</td> 
<td><?php echo Html::selectArea($_smarty_tpl->tpl_vars['school']->value['province'],$_smarty_tpl->tpl_vars['school']->value['city'],$_smarty_tpl->tpl_vars['school']->value['area'],"info[province]","info[city]","info[area]");?>

</td>
</tr>
<tr>
<td>详细地址</td> 
<td>
<input type="text" name="info[address]" class="input-text" id="address" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['address'];?>
"></input>
</td>
</tr>
<tr>
<td>机构简介</td> 
<td><textarea name="info[description]" id="description" style="width:50%;height:120px;"><?php echo $_smarty_tpl->tpl_vars['school']->value['description'];?>
</textarea></td>
</tr>
</table>
    <div class="bk15"></div>
    <input name="id" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['school']->value['id'];?>
">
    <input name="dosubmit" type="submit" value="提交" class="button">
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>