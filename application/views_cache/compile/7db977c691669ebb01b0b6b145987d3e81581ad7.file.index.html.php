<?php /* Smarty version Smarty-3.1.14, created on 2013-11-28 17:20:49
         compiled from "F:\root\hulapai\web\system\application\modules\Student\views\info\index.html" */ ?>
<?php /*%%SmartyHeaderCode:32627526f6b9c80f143-08654737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7db977c691669ebb01b0b6b145987d3e81581ad7' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\Student\\views\\info\\index.html',
      1 => 1385437799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32627526f6b9c80f143-08654737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f6b9c897ce7_08735408',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'uid' => 0,
    'student' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f6b9c897ce7_08735408')) {function content_526f6b9c897ce7_08735408($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请输入姓名",onfocus:"姓名长度为2-10个字符"}).inputValidator({min:2,max:10,onerror:"姓名长度为2-10个字符"});
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
				'type'	  : 'student',
				'uid'  : '<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
',
				'student'  : '<?php echo $_smarty_tpl->tpl_vars['student']->value['id'];?>
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
'+data.result.student_avatar;
	         		$("#avaterArea").attr('src',avatar);
	         	}
	         }
		});
	}
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/student/info/index" method="post" id="myform" enctype="multipart/form-data">
<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=80 align="right">头像：</td> 
	<td>
	<img id="avaterArea" src="<?php echo imageUrl($_smarty_tpl->tpl_vars['student']->value['id'],2,50,false);?>
" width="50" height="50">
	<div class="upfileArea" style="left: 50px;position: relative;top: -50px;"><input id="upfile" name="upfile" type="file"></div>
	<p class="content_tip">注：支持jpg,jpeg,png,gif格式的图片，大小不超过2M</p>
	</td>
	</tr>
	<tr>
	<td width=80 align="right">姓名：</td> 
	<td><input type="text" name="name" class="input-text ufocus" id="name" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
" size=10 def="姓名"></input></td>
	</tr>
	<tr>
	<td width=80 align="right">关系：</td> 
	<td>
	<?php echo Html::selectRelation($_smarty_tpl->tpl_vars['student']->value['relation'],"relation","relation",'');?>

	</td>
	</tr>
	<tr>
	<td width=80 align="right">性别：</td> 
	<td>
	<?php echo Html::selectGender($_smarty_tpl->tpl_vars['student']->value['gender'],"gender","gender","未知");?>

	</td>
	</tr>
	<tr>
	<td width=80 align="right">生日：</td> 
	<td>
	<?php echo Html::date('birthday',smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['birthday'],'%Y-%m-%d'),'',0,0,true,1,true);?>

	</td>
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