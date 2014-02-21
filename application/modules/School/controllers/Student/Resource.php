<?php
/**
 * 学生资源
 */
class Student_ResourceController extends Yaf_Controller_Base_Abstract {
	/**
	 * 列表
	 */
	public function indexAction(){
		$page = $this->get('page',1,'intval');
		$studentName = $this->get('studentName','','trim');
		$studentName = $studentName != "学生名" ? $studentName:'';
		$gender = $this->get('gender',0,'intval');
		$source = $this->get('source',-1,'intval');
		$_Student_Resource = new Student_ResourceModel();
		$students = $_Student_Resource->getStudentResourceList($page,20,$this->school,$studentName,$gender,$source);
		$this->getView()->assign('pages', $students['pages']);
		$this->getView()->assign('students', $students['data']);
	}
	
	public function addAction(){
		if($this->_POST){
			$info = $this->post('info',array());
			if(!$info['name']) show_message('学生名不能为空！');
			$info['school'] = $this->school;
			$info['parents'] = $info['parents'] ? $info['parents'] : array();
			$info['parents'] = json_encode($info['parents']);
			$info['create_time'] = time();
			$info['creator'] = $this->uid;
			$_Student_Resource = new Student_ResourceModel();
			if(!$_Student_Resource->insertData($info))    show_message('学生资源添加失败！');
			show_message('学生资源添加成功！','','add');
		}
	}
	
	public function editAction(){
		$id = $this->get('id',0,'intval');
		if(!$id) show_message('参数错误！');
		if($this->_POST){
			$info = $this->post('info',array());
			if(!$info['name']) show_message('学生名不能为空！');
			$_Student_Resource = new Student_ResourceModel();
			if(!$_Student_Resource->getRow(array('id'=>$id,'school'=>$this->school)))   show_message('学生资源不存在！');
			$info['parents'] = $info['parents'] ? $info['parents'] : array();
			$info['parents'] = json_encode($info['parents']);
			if(!$_Student_Resource->updateData($info,array('id'=>$id,'school'=>$this->school)))    show_message('学生资源修改失败！');
			show_message('学生资源修改成功！','','edit');
		}else{
			$_Student_Resource = new Student_ResourceModel();
			$info = $_Student_Resource->getRow(array('id'=>$id,'school'=>$this->school));
			if(!$info)   show_message('学生资源不存在！');
			$info['parents'] = $info['parents'] ? json_decode($info['parents'],true):array();
			$this->getView()->assign('info', $info);
		}	
	}
	
	public function deleteAction(){
		$id = $this->get('id',0,'intval');
		if(!$id) show_message('参数错误！');
		$_Student_Resource = new Student_ResourceModel();
		if(!$_Student_Resource->getRow(array('id'=>$id,'school'=>$this->school)))   show_message('学生资源不存在！');
		if(!$_Student_Resource->deleteData(array('id'=>$id,'school'=>$this->school))) show_message('删除失败！');
		show_message('删除成功！',url('school','student_resource'));
	}
}