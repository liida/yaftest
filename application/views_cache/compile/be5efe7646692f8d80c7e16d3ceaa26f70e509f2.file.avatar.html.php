<?php /* Smarty version Smarty-3.1.14, created on 2013-11-01 17:45:55
         compiled from "F:\root\hulapai\web\system\application\views\user\avatar.html" */ ?>
<?php /*%%SmartyHeaderCode:17834526f14cc7b3ae1-99702019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be5efe7646692f8d80c7e16d3ceaa26f70e509f2' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\user\\avatar.html',
      1 => 1383299150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17834526f14cc7b3ae1-99702019',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f14cc828de8_20483489',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f14cc828de8_20483489')) {function content_526f14cc828de8_20483489($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$('#upfile').uploadify({
		'formData'     : {
			'timestamp' : '<?php echo $_smarty_tpl->tpl_vars['timestamp']->value;?>
',
			'token'     : '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
			'app'     : 'upload2',
			'act'     : 'index',
			'type'	  : 'avatar',
			'uid'  : '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
         		var avatar = '<?php echo $_smarty_tpl->tpl_vars['path']->value['avatar'];?>
'+data.result.avatar;
         		$("#avatarArea").attr('src',avatar);
         	}
         }
	});
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right">用户头像</td> 
	<td>
	<img id="avatarArea" class="uploadFileArea" src="<?php echo imageUrl($_smarty_tpl->tpl_vars['id']->value,1,50,false);?>
" width=50 height=50>
	<div class="upfileArea" style="left: 50px;position: relative;top: -50px;"><input id="upfile" name="upfile" type="file"></div>
	</td>
	</tr>
</table>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>