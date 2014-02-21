<?php /* Smarty version Smarty-3.1.14, created on 2013-11-22 18:20:48
         compiled from "F:\root\hulapai\web\system\application\views\user\info.html" */ ?>
<?php /*%%SmartyHeaderCode:22404526f12d383f616-92350084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b165c50d91b7552848152f4d8735e2e1f13decc' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\user\\info.html',
      1 => 1385113039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22404526f12d383f616-92350084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f12d38a8da6_02730890',
  'variables' => 
  array (
    'path' => 0,
    'timestamp' => 0,
    'token' => 0,
    'id' => 0,
    'userInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f12d38a8da6_02730890')) {function content_526f12d38a8da6_02730890($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/uploadify.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['path']->value['js'];?>
uploadify/jquery.uploadify.min.js" language="javascript" type="text/javascript" ></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#nickname").formValidator({onshow:"请输入昵称",onfocus:"长度为2-20个字符"}).inputValidator({min:0,max:10,onerror:"长度为2-20个字符"});
	$("#sign").formValidator({onshow:"请输入个性签名",onfocus:"长度为1-30个字"}).inputValidator({min:0,max:60,onerror:"长度为1-30个字"});
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
	}
	
});
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/user/info" method="post" id="myform">

<table width="100%" class="table_form contentWrap">
	<tr>
	<td width=120 align="right"></td> 
	<td>
	<p class="content_tip">注:基本资料是注册用户个人的相关信息</p>
	</td>
	</tr>
	<tr>
	<td width=120 align="right">用户头像</td> 
	<td>
	<img id="avatarArea" class="uploadFileArea" src="<?php echo imageUrl($_smarty_tpl->tpl_vars['id']->value,1,50,false);?>
" width=50 height=50>
	<div class="upfileArea" style="left: 55px;position: relative;top: -50px;"><input id="upfile" name="upfile" type="file"></div>
	<p class="content_tip">注：支持jpg,jpeg,png,gif格式的图片，大小不超过2M</p>
	</td>
	</tr>
	<tr>
	<td width=120 align="right">呼啦号：</td> 
	<td><?php if ($_smarty_tpl->tpl_vars['userInfo']->value['setting']['hulaid']){?><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['hulaid'];?>
&nbsp;&nbsp;<cite class="yellow">注：只能修改一次，已修改</cite><?php }else{ ?><input type="text" name="hulaid" class="input-text" id="hulaid" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['hulaid'];?>
"></input>&nbsp;&nbsp;<cite class="red">注：只能修改一次</cite><?php }?></td>
	</tr>
	<tr>
	<td width=120 align="right">用户名：</td> 
	<td><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['account'];?>
&nbsp;<a href="/user/editPwd" class="link">修改密码</a></td>
	</tr>
	<tr>
	<td align="right">昵称：</td> 
	<td><input type="text" name="nickname" class="input-text" id="nickname" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['nickname'];?>
"></input></td>
	</tr>
	<tr>
	<td align="right">地区：</td> 
	<td><?php echo Html::selectArea($_smarty_tpl->tpl_vars['userInfo']->value['province'],$_smarty_tpl->tpl_vars['userInfo']->value['city'],$_smarty_tpl->tpl_vars['userInfo']->value['area'],"province","city","area");?>

	</td>
	</tr>
	<tr>
	<td align="right">详细地址：</td> 
	<td><input type="text" name="address" class="input-text" id="address" value="<?php echo $_smarty_tpl->tpl_vars['userInfo']->value['address'];?>
"></input>
	</td>
	</tr>
	<tr>
	<td align="right">生日：</td> 
	<td><?php echo Html::date('birthday',$_smarty_tpl->tpl_vars['userInfo']->value['birthday']);?>
</td>
	</tr>
	<tr>
	<td align="right">个性签名：</td> 
	<td><textarea name="sign" id="sign" style="width:50%;height:120px;"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['sign'];?>
</textarea></td>
	</tr>
	<tr>
	<td align="right"></td> 
	<td><input name="dosubmit" type="submit" value="保存" class="button state_highlight"></td>
	</tr>
</table>
</form>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>