<?php /* Smarty version Smarty-3.1.14, created on 2013-10-29 09:51:15
         compiled from "F:\root\hulapai\web\system\application\views\register\index.html" */ ?>
<?php /*%%SmartyHeaderCode:17662526f14932aa4e2-45091879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7df556ed616a02d7d6f47f216c6877ed5948a217' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\register\\index.html',
      1 => 1383010989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17662526f14932aa4e2-45091879',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526f14932aa4e0_25935459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526f14932aa4e0_25935459')) {function content_526f14932aa4e0_25935459($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#account").formValidator({onshow:"请输入手机号码",onfocus:"手机号码必须是11位的"}).inputValidator({min:11,max:11,onerror:"手机号码必须是11位的"}).regexValidator({regexp:"^(1)[0-9]{10}$",onerror:"你输入的手机格式不正确"});
	$("#verify").formValidator({onshow:"请输入验证码",onfocus:"验证码必须是6位的"}).inputValidator({min:6,max:6,onerror:"验证码必须是6位的"});
	$("#password").formValidator({onshow:"请输入密码",onfocus:"密码必须是6-12位的"}).inputValidator({min:6,max:12,onerror:"密码必须是6-12位的"});
	$("#repassword").formValidator({onshow:"请输入确认密码",onfocus:"确认密码必须是6-12位的"}).inputValidator({min:6,max:12,onerror:"确认密码必须是6-12位的"}).compareValidator({desid:"password",operateor:"=",datatype:"string",onerror:"两次密码必须一致"});
	$("#getCode").attr('disabled',false);
	$("#getCode").click(function(){
		var mobile = $("#account").val();
		if(!mobile){
			alert('手机号不存在或格式错误');
			return false;
		}
		$.ajax({
		    type : "post",
			url : "/public/code",
			data : "type=0&mobile="+mobile,
			success : function(data){	
	            if(data=="发送成功"){
	            	$("#secondArea").show();
	            	$("#getCode").attr('disabled',true);
	            	var s = setInterval(function(){
						var second = parseInt($("#second").text());
						second = second-1;
						if(second > 0){
							$("#second").text(second);
							$("#getCode").attr('disabled',true);
						}else{
							$("#second").text(60);
							$("#secondArea").hide();
							$("#getCode").attr('disabled',false);
							clearInterval(s);
						}
					},1000); 
	            }
	            alert(data)
			}
		});
	})
});

//-->
</script>
<div id="content" class="contenter">
	<center>
	<div class="content_center register">
		<div class="top">注册呼啦号</div>
		<form action="/register" method="post" name="myform" id="myform">
		<div id="register_form">
		 	 <p><label>手机号码：</label><input name="account" id="account" type="text" class="input-text" value=""/></p>
		 	 <p><label>&nbsp;</label><input name="getCode" type="button" id="getCode" value="获取验证码" class="button getCode"><span id="secondArea" style="float:left;margin-left:5px;display:none;"><cite id='second'>60</cite>秒后可重发</span></p>
		 	 <p><label>验证码：</label><input name="verify" id="verify" type="text" class="input-text" value=""/></p>
		 	 <p><label>密码：</label><input name="password" id="password" type="password" class="input-text" value=""/></p>
		 	 <p><label>确认密码：</label><input name="repassword" id="repassword" type="password" class="input-text" value=""/></p>
		 	 <p style="margin-top:20px;"><label>&nbsp;</label><input name="dosubmit" value="" type="submit" class="register_tj_btn" /></p>
	 	 </div>
     	</form>
	</div>
	</center>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>