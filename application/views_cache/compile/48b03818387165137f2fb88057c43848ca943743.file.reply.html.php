<?php /* Smarty version Smarty-3.1.14, created on 2013-11-29 13:13:29
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\comment\reply.html" */ ?>
<?php /*%%SmartyHeaderCode:222165279fcc4c79844-46824365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48b03818387165137f2fb88057c43848ca943743' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\comment\\reply.html',
      1 => 1384914800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222165279fcc4c79844-46824365',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5279fcc4ce2fe7_80233828',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'commentInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5279fcc4ce2fe7_80233828')) {function content_5279fcc4ce2fe7_80233828($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<style>
<!--
.attachArea{width:110px;height:100px;display:block;margin:5px;float:left;}
.attachArea span{position: relative; right: -98px;top: -105px;}
-->
</style>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#content").formValidator({onshow:"请输入内容",onfocus:"回复内容应该为1-150个字"}).inputValidator({min:1,max:300,onerror:"回复内容应该为1-150个字"});
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
				'type'	  : 'comment'
			},
			'fileTypeExts':'*.jpg;*.jpeg;*.png;*.gif',
			'fileSizeLimit':2048,
			'buttonText':'上传',
			'multi':true,
			'uploadLimit' : 5,      
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
	         		var attach = '<?php echo $_smarty_tpl->tpl_vars['path']->value['image'];?>
'+data.result.path;
	         		$("#attachArea").append('<p class="attachArea"><input type="hidden" name="attach[]" id="attach" value="'+data.result._id+'"><img width=100 height=100 src="'+attach+'"><span><img onclick="$(this).parent().parent().remove();" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>');
	         	}
	         }
		});
	}
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/comment/reply" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td width="120">回复内容</td> 
			<td><?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['content'];?>

			</td>
		</tr>
		<tr>
			<td width="120">内容</td> 
			<td><textarea name="content" id="content" style="width:50%;height:120px;"></textarea>
			</td>
		</tr>
		<tr>
			<td width="120">图片</td> 
			<td>
		<div class="upfileArea" style="position: relative;height: 50px;"><input id="upfile" name="upfile" type="file"></div>
		<div id="attachArea"></div>
		<p class="content_tip">注：支持jpg,jpeg,png,gif格式的图片，大小不超过2M</p>
			</td>
		</tr>
		<tr>
			<td width="120"><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['commentInfo']->value['id'];?>
"/></td> 
			<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>