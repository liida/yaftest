<?php /* Smarty version Smarty-3.1.14, created on 2013-11-20 14:00:09
         compiled from "F:\root\hulapai\web\system\application\modules\Teacher\views\info\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25882526f2c32429e14-85896666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd500d33713f9f5acef2ad1911a5114b777e2f1e9' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Teacher\\views\\info\\index.html',
      1 => 1384914865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25882526f2c32429e14-85896666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f2c3242dc95_64928899',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'teacher' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f2c3242dc95_64928899')) {function content_526f2c3242dc95_64928899($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#firstname").formValidator({onshow:"请输入姓",onfocus:"姓长度为2-10个字符"}).inputValidator({min:2,max:10,onerror:"姓长度为2-10个字符"});
	$("#lastname").formValidator({onshow:"请输入名",onfocus:"名长度为2-10个字符"}).inputValidator({min:2,max:10,onerror:"名长度为2-10个字符"});
	$("#background").formValidator({onshow:"请输入教育背景",onfocus:"教育背景长度为1-150个字"}).inputValidator({min:0,max:300,onerror:"教育背景长度为1-150个字"});
	$("#mind").formValidator({onshow:"请输入教学理念",onfocus:"教学理念长度为1-150个字"}).inputValidator({min:0,max:300,onerror:"教学理念长度为1-150个字"});
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
				'type'	  : 'avatar',
				'uid'  : '<?php echo $_smarty_tpl->tpl_vars['teacher']->value['user'];?>
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
	}
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/teacher/info/index" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=80 align="right">姓名：</td> 
	<td><input type="text" name="info[firstname]" class="input-text ufocus" id="firstname" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['firstname'];?>
" size=2 def="姓"></input><input type="text" name="info[lastname]" class="input-text ufocus" id="lastname" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['lastname'];?>
" size=3 def="名"></input></td>
	</tr>
	<tr>
	<td width=80 align="right">头像</td> 
	<td>
	<img id="avatarArea" class="uploadFileArea" src="<?php echo imageUrl($_smarty_tpl->tpl_vars['teacher']->value['user'],1,50,false);?>
" width=50 height=50>
	<div class="upfileArea" style="left: 50px;position: relative;top: -50px;"><input id="upfile" name="upfile" type="file"></div>
	<p class="content_tip">注：支持jpg,jpeg,png,gif格式的图片，大小不超过2M</p>
	</td>
	</tr>
	<tr>
	<td width=80 align="right">地域：</td> 
	<td>
	<?php echo Html::selectArea($_smarty_tpl->tpl_vars['teacher']->value['province'],$_smarty_tpl->tpl_vars['teacher']->value['city'],$_smarty_tpl->tpl_vars['teacher']->value['area'],"info[province]","info[city]","info[area]");?>

	</td>
	</tr>
	<tr>
	<td width=80 align="right">教学地点：</td> 
	<td>
	<input type="text" name="info[address]" class="input-text" id="address" value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value['address'];?>
"></input>
	</td>
	</tr>
	<tr>
	<td width=80 align="right">授课内容：</td> 
	<td>
		<a class="link" href="/teacher/course/index">修改授课内容</a>
	</td>
	</tr>
	<tr>
	<td width=80 align="right">授课对象：</td> 
	<td>
	<?php echo Html::selectTarget($_smarty_tpl->tpl_vars['teacher']->value['target'],"info[target]","info[target]");?>

	</td>
	</tr>
	<tr>
	<td width=80 align="right">教育背景：</td> 
	<td><textarea name="info[background]" id="background" style="width:50%;height:120px;"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['background'];?>
</textarea></td>
	</tr>
	<tr>
	<td width=80 align="right">教学理念：</td> 
	<td><textarea name="info[mind]" id="mind" style="width:50%;height:120px;"><?php echo $_smarty_tpl->tpl_vars['teacher']->value['mind'];?>
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