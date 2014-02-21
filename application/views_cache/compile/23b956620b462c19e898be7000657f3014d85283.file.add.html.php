<?php /* Smarty version Smarty-3.1.14, created on 2014-01-08 17:27:21
         compiled from "F:\root\hulapai\web\system\application\modules\School\views\student\resource\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2328052ccf8f1b6b1e6-36191007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23b956620b462c19e898be7000657f3014d85283' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\modules\\School\\views\\student\\resource\\add.html',
      1 => 1389173234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2328052ccf8f1b6b1e6-36191007',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52ccf8f1b99ff1_82709866',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ccf8f1b99ff1_82709866')) {function content_52ccf8f1b99ff1_82709866($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
<!--
#parents_option{float: left;position: relative;width: 220px;left: -18px;}
#parents_option p{display:block;margin:5px 0;}
#parents_option p span{margin-left: 8px;}
#parents_option .delOption{cursor: pointer;}
#addOption{float: left;left: 225px;position: relative;top: 8px;cursor: pointer;}
.parent_option{width:100px;}
-->
</style>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){},onsuccess:function(){
		var phoneReg = /^(1)[0-9]{10}$/;
		var error = 0;
		var parentsArr = new Array();
		var phoneArr = new Array();
		var relationArr = new Array();
		$(".parent_option").each(function(i){
			var phone=$(this).val();
			if(phone){
				if(!phone.match(phoneReg)){
					alert("家长"+(i+1)+"手机格式错误");
					error +=1;
				}else{
					var phoneStr = phoneArr.join(",");
					if(phoneStr.indexOf(phone) >= 0){
						alert("家长"+(i+1)+"手机重复");
						error +=1;
					}else{
						var relation=$(this).next("select").val();
						var relationStr = relationArr.join(",");
						if(relation !=4){
							if(relationStr.indexOf(relation) >= 0){
								alert("家长"+(i+1)+"关系已存在");
								error +=1;
							}else{
								relationArr.push(relation);
								phoneArr.push(phone);
							}
						}else{
							relationArr.push(relation);
							phoneArr.push(phone);
						}
						
					}
				}
			}
		})
		if(phoneArr.length != relationArr.length){
			alert("家长和关系不对应");
			error +=1;
		}else{
			parentsArr = array_combine(phoneArr,relationArr);
			var str = "";
			for(phone in parentsArr){
				str += "<input type='hidden' name='info[parents]["+phone+"]' value='"+parentsArr[phone]+"'>";
			}
			$("#parents").html(str);
		}
		if(error) return false;
		return true;
	}});
	$("#name").formValidator({onshow:"请输入学生名",onfocus:"学生名长度为2-20个字符"}).inputValidator({min:2,max:20,onerror:"学生名长度为2-20个字符"});
	$("#addOption").click(function(){
		if($(".parent_option").length >= 3){
			alert('家长最多3个');
			return false;
		}
		var op = $("#selectRelation").html();
		$("#parents_option").append($('<p>手机&nbsp;<input type="text" name="parents[]"  class="input-text parent_option" id="parents[]"><select class="relations[]" id="relations[]" name="relations[]">'+op+'</select><span><img onclick="del(this)" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>'));
	});
});
function del(t){
	if($(".parent_option").length > 1){
		$(t).parent().parent().remove();
	}
}

function array_combine (keys, values) {
  // From: http://phpjs.org/functions
  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
  // +   improved by: Brett Zamir (http://brett-zamir.me)
  // *     example 1: array_combine([0,1,2], ['kevin','van','zonneveld']);
  // *     returns 1: {0: 'kevin', 1: 'van', 2: 'zonneveld'}
  var new_array = {},
    keycount = keys && keys.length,
    i = 0;

  // input sanitation
  if (typeof keys !== 'object' || typeof values !== 'object' || // Only accept arrays or array-like objects
  typeof keycount !== 'number' || typeof values.length !== 'number' || !keycount) { // Require arrays to have a count
    return false;
  }

  // number of elements does not match
  if (keycount != values.length) {
    return false;
  }

  for (i = 0; i < keycount; i++) {
    new_array[keys[i]] = values[i];
  }

  return new_array;
}
//-->
</script>
<div class="pad_common">
<div class="common-form">
<form name="myform" action="/school/student_resource/add" method="post" id="myform">
<div id="parents">
	
</div>
<table width="100%" class="table_form">
	<tr>
		<td width="120" align="right">学生名：</td> 
		<td><input type="text" name="info[name]"  class="input-text" id="name">
		</td>
	</tr>
	<tr>
		<td width="120" align="right">性别：</td> 
		<td><?php echo Html::selectGender('','info[gender]','gender','未知');?>

		</td>
	</tr>
	<tr>
		<td width=120 align="right">生日：</td> 
		<td>
		<?php echo Html::date('info[birthday]');?>

		</td>
	</tr>
	<tr>
		<td width="120" align="right">来源：</td> 
		<td><?php echo Html::selectStudentResource('','info[source]','source','');?>

		</td>
	</tr>
	<tr>
		<td width="120" align="right">家长：</td> 
		<td valign="top">
			<img id="addOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/add.png"/>
			<div id="parents_option" >
			<p>手机&nbsp;<input type="text" name="parents[]"  class="input-text parent_option" id="parents[]"><?php echo Html::selectRelation(4,'relations[]','relations[]','');?>
<span><img onclick="del(this)" class="delOption" src="<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete.png"/></span></p>
			</div>
		</td>
		</td>
	</tr>
	<tr>
		<td width=80 align="right">描述：</td> 
		<td><textarea name="info[desc]" id="desc" style="width:300px;height:120px;"></textarea></td>
	</tr>
	<tr>
		<td width="120"></td> 
		<td><input name="dosubmit" type="submit" id="dosubmit" value="确定" class="button state_highlight">
		</td>
	</tr>
</table>
</form>
<div style="display:none;">
<?php echo Html::selectRelation(4,'selectRelation','selectRelation','');?>

</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>