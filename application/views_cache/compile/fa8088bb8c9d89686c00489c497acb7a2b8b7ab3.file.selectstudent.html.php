<?php /* Smarty version Smarty-3.1.14, created on 2014-01-07 13:33:35
         compiled from "F:\root\hulapai\web\system\application\views\public\selectstudent.html" */ ?>
<?php /*%%SmartyHeaderCode:2845527099ab33c301-43142376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8088bb8c9d89686c00489c497acb7a2b8b7ab3' => 
    array (
      0 => 'F:\\root\\hulapai\\web\\system\\application\\views\\public\\selectstudent.html',
      1 => 1389072811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2845527099ab33c301-43142376',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_527099ab436342_61073399',
  'variables' => 
  array (
    'priv' => 0,
    'path' => 0,
    'school' => 0,
    'event' => 0,
    'gradeEdit' => 0,
    'studentsArr' => 0,
    'selectedStudentsArr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527099ab436342_61073399')) {function content_527099ab436342_61073399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/header_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
<!--
.search-form {float: left;margin-bottom: 10px;width: 300px;}
.studentbg,.checkbg{ background:#ccc;}
.check_true,.check_false{cursor: pointer;color: #333333;}
#select_all{float: left;height: 30px;line-height: 30px;}
#studentname,#gradename{width:200px;height: 30px;line-height: 30px;}
#select_grade_area,#select_student_area,#selected_student_area{float: left;width: 100%;}
#select_grade_area #select_grade{clear: both;width: 100%;border-bottom: 1px solid #CCCCCC; height：45px;float: left;}
#select_grade_area #select_grade li{float:left; width: 100px;height:30px;line-height:30px;cursor: pointer;margin:0 2px;overflow:hidden;color: #333333;}
#select_student_area .student_ul{clear: both;width: 100%;height：45px;padding: 0 10px;}
#select_student_area .select_student{float: left;height: 25px;width: 100%; line-height: 25px;border-bottom: 1px solid #CCCCCC; }
#select_student_area .student_ul li{float:left; width: 100px;cursor: pointer; margin: 5px;height: 30px;position: relative;}
#select_student_area .student_ul li p{float: left;height: 30px;line-height: 30px;width: 100px;position: absolute;top: 0;left:0;}
<?php if ($_smarty_tpl->tpl_vars['priv']->value){?>
#select_student_area .student_ul li p{text-align:center;}
<?php }else{ ?>
#select_student_area .student_ul li p{left:20px;width: 80px;}
<?php }?>
#select_student_area .student_ul li input{float: left;height: 30px;line-height: 30px;width:15px;position: absolute;top: 0;left:0;}
#selected_student_area .selected_student,#selected_student_area .selected_student_desc{float: left;height: 25px;width: 100%; line-height: 25px;}
#selected_student_area #selected_student{float:left;width:100%;padding: 0 10px;border-bottom: 1px solid #CCCCCC;}
#selected_student_area #selected_student li{float:left; width: 100px;height:30px;line-height:30px;border:1px solid #CCCCCC;cursor: pointer;margin:5px;}
#selected_student_area #selected_student li p{ width:80px;float:left;text-align: center; color: #999999;}
#selected_student_area #selected_student li input{float:left;height:30px;line-height:30px;}
#selected_student_area #selected_student li .selected_del{ width: 10px;height:10px;margin: 10px 0;background: url("<?php echo $_smarty_tpl->tpl_vars['path']->value['images'];?>
hulapai/delete_icon.png") no-repeat;} 
-->
</style>
<div class="pad_common">
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
			<td>
				<div class="">
					<input type="text" name="studentname"  class="input-text ufocus" id="studentname" value="" def="学生名">
					<input type="submit" value="搜索" class="button search" name="search" id="searchStudent">
				</div>
			</td>
		</tr>
    </tbody>
</table>
<table width="100%" cellspacing="0" class="search-form">
    <tbody>
		<tr>
			<td>
				<div class="">
					<input type="text" name="gradename"  class="input-text ufocus" id="gradename" value="" def="班级名">
					<input type="submit" value="搜索" class="button search" name="search" id="searchGrade">
				</div>
			</td>
		</tr>
    </tbody>
</table>
<div id="select_grade_area">
<ul id="select_grade">
</ul>
</div>
<div id="select_student_area">
	<p id="select_all">选择学生：<span class="check_true">[全选]</span>/<span class="check_false">[取消]</span></p>
</div>


<div id="selected_student_area">
<p class="selected_student">已选择学生：</p>
<form name="myform" action="/public/selectStudent?school=<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
&event=<?php echo $_smarty_tpl->tpl_vars['event']->value;?>
&gradeEdit=<?php echo $_smarty_tpl->tpl_vars['gradeEdit']->value;?>
" method="post" id="myform">
<ul id="selected_student">
</ul>
<p class="selected_student_desc">共选择了<cite id="selectNum">0</cite>位学生</p>
<input name="grade" type="hidden" id="grade">
<input name="dosubmit" type="submit" id="dosubmit" value="确定" class="dialog">
</form>
</div>
</div>
<script type="text/javascript"> 
//type 0 全部 1 name 4 grade

var students = <?php echo $_smarty_tpl->tpl_vars['studentsArr']->value;?>
;
var selectedStudents = <?php echo $_smarty_tpl->tpl_vars['selectedStudentsArr']->value;?>
;
function studentaction(){
}
function selectedstudentaction(){
	$("#selected_student li").bind('click',function(){
		var student = $(this).attr("student");
		$(".student_ul li[student="+student+"]").click();
	});
}

function checkEvent(){
	if ($.browser.msie) {
		$('input[name=check_student[]]').click(function(){
			this.blur();
			this.focus();
		})
	}
	$('input[name=check_student[]]').change(function() {
		checkedAction(this);
	}); 
}
function checkedAction(event){
	var student = $(event).parent("li").attr("student");
	var name = $(event).parent("li").children('p').html();
	var s = $("#selected_student").children('.student_'+student);
	if($(event).attr("checked")){
		if(s.length == 0){
			$("#selected_student").append($('<li class="student_'+student+'" student='+student+'><p>'+name+'</p><input type="hidden" value="'+student+'" class="student_op_'+student+'" name="student_op['+student+']"><p class="selected_del"></p></li>'));
		}
	}else{
		if(s.length > 0){
			s.remove();
		}
	}
	deleteStudentaction();
}

function deleteStudentaction(){
	$(".selected_del").bind('click',function(){
		var p = $(this).parent();
		var c = p.attr("class").split('student_');
		var student = c[1];
		$(".student_ul li[student="+student+"]").children('input').attr("checked",false);
		p.remove();
		$("#selectNum").text($(".selected_del").length);
	});
	$("#selectNum").text($(".selected_del").length);
}

var found = '';
if(typeof(students) === 'object'){ 
	for(var i in students){ 
		found += '<div class="select_student">'+i+'：';
		<?php if (!$_smarty_tpl->tpl_vars['priv']->value){?>
		found += '<span class="check_true">[全选]</span>/<span class="check_false">[取消]</span>';
		<?php }?>
		found += '</div><ul class="student_ul">';
		for(var j in students[i]){ 
			if(selectedStudents[students[i][j]['student']]){
				$("#selected_student").append($('<li class="student_'+students[i][j]['student']+'" student='+students[i][j]['student']+'><p>'+students[i][j]['name']+'</p><input type="hidden" value="'+students[i][j]['student']+'" class="student_op_'+students[i][j]['student']+'" name="student_op['+students[i][j]['student']+']"><p class="selected_del"></p></li>'));
			}
			found +=  '<li class="student" student='+students[i][j]['student']+'>';
			<?php if (!$_smarty_tpl->tpl_vars['priv']->value){?>
			found +=  '<input class="check_student" type="checkbox" value="'+students[i][j]['student']+'" name="check_student[]"';
			if(selectedStudents[students[i][j]['student']]) found += ' checked=checked';
			found += ' >';
			<?php }?>
			if(students[i][j]['name']){
				found +=  '&nbsp;<p>'+students[i][j]['name']+'</p>'; 
			}else{
				found +=  '&nbsp;<p>无名学生</p>'; 
			}
			found +=  '</li>';
		}
		found +=  '</ul>';
	}
}
$("#select_student_area .select_student").remove();
$("#select_student_area .student_ul").remove();
$("#select_student_area").append(found);
studentaction();
selectedstudentaction();
checkEvent();
deleteStudentaction();


function search_student(find,type,isreturn){ 
	$("#grade").val(0);
	var num = 0;
	if(((!find || find=="学生名") && type!=4) || (!find && type==4)){
		$('.student_ul li.student').show();
	}else if(find && typeof(students) ==='object'){
		$('.student_ul li.student').hide();
		for(var i in students){ 
			for(j in students[i]){
				if(type == 4){
					for(var jj in students[i][j]['grade']){ 
						if(students[i][j]['grade'][jj] == find){
							if(isreturn){
								num++;
							}else{
								$('.student[student='+students[i][j]['student']+']').show();
							}
						}
					}
					$("#grade").val(find);
				}else if(type == 1){ 
					var name = students[i][j]['name'];
					if(name.indexOf(find) >= 0){
						if(isreturn){
							num++;
						}else{
							$('.student[student='+students[i][j]['student']+']').show();
						}
					}
				}
			}
		} 
	} 
	if(isreturn){
		return num;
	}
} 

$("#select_all .check_true").click(function(){
	var studentNum = 0;
	$('input[name=check_student[]]').each(function(){
		var hidden = $(this).is(":hidden");
		if(!hidden) studentNum += 1;
	})
	if(studentNum > 100){
		alert('选择学生超过100，请分次选择!');
		return false;
	}
	$('input[name=check_student[]]').each(function(){
		var hidden = $(this).is(":hidden");
		if(!hidden)  $(this).attr("checked",true);
		checkedAction(this);
	})
	$("#select_all .check_true").addClass('checkbg');
	$("#select_all .check_false").removeClass('checkbg');
});
$("#select_all .check_false").click(function(){
	$('input[name=check_student[]]').each(function(){
		var hidden = $(this).is(":hidden");
		if(!hidden)  $(this).attr("checked",false);
		checkedAction(this);
	})
	$("#select_all .check_false").addClass('checkbg');
	$("#select_all .check_true").removeClass('checkbg');
});

$(".select_student .check_true").click(function(){
	var student_ul = $(this).parent(".select_student").next(".student_ul");
	var studentNum = 0;
	student_ul.find('input').each(function(){
		var hidden = $(this).is(":hidden");
		if(!hidden) studentNum += 1;
	})
	if(studentNum > 100){
		alert('选择学生超过100，请分次选择!');
		return false;
	}
	student_ul.find('input').each(function(){
		var hidden = $(this).is(":hidden");
		if(!hidden)  $(this).attr("checked",true);
		checkedAction(this);
	})
	$(this).parent('.select_student').children('.check_true').addClass('checkbg');
	$(this).parent('.select_student').children('.check_false').removeClass('checkbg');
});
$(".select_student .check_false").click(function(){
	var student_ul = $(this).parent(".select_student").next(".student_ul");
	student_ul.find('input').each(function(){
		var hidden = $(this).is(":hidden");
		if(!hidden)  $(this).attr("checked",false);
		checkedAction(this);
	})
	$(this).parent('.select_student').children('.check_false').addClass('checkbg');
	$(this).parent('.select_student').children('.check_true').removeClass('checkbg');
});

$("#searchStudent").click(function(){
	var find = $("#studentname").val();
	search_student(find,1);
});

$("#searchGrade").click(function(){
	var gradename = $("#gradename").val();
	if(!gradename || gradename=="班级名"){
		$("#select_grade").html("");
		search_student(0,4);
		return false;
	}else{
		$.get("/public/getGrade?school="+<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
+"&name="+gradename,function(data){
			if(data == 0){
				alert("没有相关班级");
			}else{
				data = jQuery.parseJSON(data);
				var found = "<li grade=''>所有学生</li>";
				$.each(data,function(i,n){
					found +="<li grade='"+n.id+"' title='"+n.name+"'>"+n.name+"</li>";
				});
				$("#select_grade").html(found);
				$("#select_grade li").bind('click',function(){
					var find = $(this).attr('grade');
					search_student(find,4);
				});
			}
		});
	}
});

</script>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/footer_right.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>