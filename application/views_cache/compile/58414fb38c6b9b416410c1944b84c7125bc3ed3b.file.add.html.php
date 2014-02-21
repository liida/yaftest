<?php /* Smarty version Smarty-3.1.14, created on 2013-11-21 18:25:44
         compiled from "F:\root\hulapai\web\system\application\views\student\add.html" */ ?>
<?php /*%%SmartyHeaderCode:816452847476ef3221-29257583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58414fb38c6b9b416410c1944b84c7125bc3ed3b' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\student\\add.html',
      1 => 1385003171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '816452847476ef3221-29257583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_528474770e9626_88393150',
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
<?php if ($_valid && !is_callable('content_528474770e9626_88393150')) {function content_528474770e9626_88393150($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\root\\hulapai\\web\\system\\application\\library\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ("public/header_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#name").formValidator({onshow:"请填写真实姓名，方便家校互动",onfocus:"请填写真实姓名，方便家校互动"}).inputValidator({min:2,max:10,onerror:"学生姓名长度为2-10个字符"});
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
<div id="content" class="contenter">
	<div class="content_center pad_10" style="height:550px;">
		<form name="myform" action="/student/add" method="post" id="myform" enctype="multipart/form-data">
		<table width="100%" class="table_form contentWrap">
			<tr>
			<td width=100 align="right">学生姓名：</td> 
			<td><input type="text" name="name" class="input-text ufocus" id="name" value="<?php echo $_smarty_tpl->tpl_vars['student']->value['name'];?>
" size=10 def="姓名"></input></td>
			</tr>
			<tr>
			<td width=100 align="right">性别：</td> 
			<td>
			<?php echo Html::selectGender($_smarty_tpl->tpl_vars['student']->value['gender'],"gender","gender","未知");?>

			</td>
			</tr>
			<tr>
			<td width=100 align="right">生日：</td> 
			<td>
			<?php echo Html::date('birthday',smarty_modifier_date_format($_smarty_tpl->tpl_vars['student']->value['birthday'],'%Y-%m-%d'),'',0,0,true,1,true);?>

			</td>
			</tr>
			<tr>
			<td width=100 align="right">本人是学生的：</td> 
			<td>
			<?php echo Html::selectRelation($_smarty_tpl->tpl_vars['student']->value['relation'],"relation","relation",'');?>

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