<?php
/**
 * 老师统计
 */
class Total_TeacherController extends Yaf_Controller_Base_Abstract {
	public function indexAction(){
		$agent = $this->get('agent',-1,'intval');
		$where = array();
		if($agent >=0) $where['agent'] = $agent;
		$_Teacher = new TeacherModel();
    	$total = $_Teacher->getAll($where,'count(1) as nums,agent','','agent');
    	$this->getView()->assign('total',$total);
    	$this->getView()->assign('agent',$agent);
	}
	
	public function dayAction(){
		$agent = $this->get('agent',-1,'intval');
		$start_date = $this->get('start_date','','isDate');
		$end_date = $this->get('end_date','','isDate');
		$start_date || $start_date = date('Y-m-d');
		$end_date || $end_date = date('Y-m-d');
		$start = strtotime($start_date.' 00:00:00');
		$end = strtotime($end_date.' 23:59:59');
		if($start >= $end) show_message('结束日期必须大于开始日期！');
		$where = array(				
			'create_time >='=>$start,
			'create_time <='=>$end,
		);
		if($agent >=0) $where['agent'] = $agent;
		$_Teacher = new TeacherModel();
		$total = $_Teacher->getAll($where,array("COUNT(1) AS nums,agent,FROM_UNIXTIME(create_time,'%Y-%m-%d') AS create_date"),'create_date desc','create_date,agent');
    	$this->getView()->assign('start_date',$start_date);
    	$this->getView()->assign('end_date',$end_date);
    	$this->getView()->assign('agent',$agent);
    	$this->getView()->assign('total',$total);
	}
	
	public function detailAction(){
		$page = $this->get('page',1,'intval');
		$agent = $this->get('agent',-1,'intval');
		$start_date = $this->get('start_date','','isDate');
		$end_date = $this->get('end_date','','isDate');
		$start_date || $start_date = date('Y-m-d');
		$end_date || $end_date = date('Y-m-d');
		$start = strtotime($start_date.' 00:00:00');
		$end = strtotime($end_date.' 23:59:59');
		if($start >= $end) show_message('结束日期必须大于开始日期！');
		$where = array(
			'create_time >='=>$start,
			'create_time <='=>$end,
		);
		if($agent >=0) $where['agent'] = $agent;
		$_Teacher = new TeacherModel();
		$teachers = $_Teacher->getList($page,20,$where,'*','','create_time desc');
		$this->getView()->assign('pages', $teachers['pages']);
		$this->getView()->assign('datas', $teachers['data']);
    	$this->getView()->assign('start_date',$start_date);
    	$this->getView()->assign('end_date',$end_date);
    	$this->getView()->assign('agent',$agent);
	}
}