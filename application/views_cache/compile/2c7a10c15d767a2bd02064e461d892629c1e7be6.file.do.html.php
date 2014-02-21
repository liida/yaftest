<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 11:34:40
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\comment\do.html" */ ?>
<?php /*%%SmartyHeaderCode:2466652772e73aa9634-61805966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7a10c15d767a2bd02064e461d892629c1e7be6' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\comment\\do.html',
      1 => 1384914847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2466652772e73aa9634-61805966',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52772e73b45a53_98401236',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'event' => 0,
    'act' => 0,
    'datas' => 0,
    'students' => 0,
    'id' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52772e73b45a53_98401236')) {function content_52772e73b45a53_98401236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	$("#content").formValidator({onshow:"请输入内容",onfocus:"点评内容应该为1-150个字"}).inputValidator({min:1,max:300,onerror:"点评内容应该为1-150个字"});
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
<form name="myform" action="/teacher/comment/do?act=3" method="post" id="myform">
	<table width="100%" class="table_form">
		<tr>
			<td width="50" align="right">内容：</td> 
			<td><textarea name="content" id="content" style="width:50%;height:120px;"></textarea>
			</td>
		</tr>
		<tr>
			<td width="50" align="right">图片：</td> 
			<td>
			<div class="upfileArea" style="position: relative;height: 50px;"><input id="upfile" name="upfile" type="file"></div>
			<div id="attachArea"></div>
			<p class="content_tip">注：支持jpg,jpeg,png,gif格式的图片，大小不超过2M</p>
			</td>
		</tr>
		<tr>
			<td width="50">
				<input type="hidden" name="event" value="<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
"/>
				<input type="hidden" name="act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value;?>
"/>
				<?php  $_smarty_tpl->tpl_vars['students'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['students']->_loop = false;
 $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['students']->key => $_smarty_tpl->tpl_vars['students']->value){
$_smarty_tpl->tpl_vars['students']->_loop = true;
 $_smarty_tpl->tpl_vars['event']->value = $_smarty_tpl->tpl_vars['students']->key;
?>
	    			<?php  $_smarty_tpl->tpl_vars['student'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['student']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['students']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['student']->key => $_smarty_tpl->tpl_vars['student']->value){
$_smarty_tpl->tpl_vars['student']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['student']->key;
?>
	    			<input type="hidden" name="datas[<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['student']->value;?>
"/>
	    			<?php } ?>
	    		<?php } ?>
    		</td> 
			<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
			</td>
		</tr>
	</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_common.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>