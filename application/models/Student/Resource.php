<?php
class Student_ResourceModel extends BaseModel{
	public $table = 't_student_resource';
	public function __construct() {
    	parent::__construct();
    } 
    
    public function getStudentResourceList($page=1,$pagesize=20,$school=0,$studentName="",$gender=0,$source=-1){
		$sql =  " FROM (`t_student_resource`)" .
    			" where school = $school";
    	if($gender > 0){
    		$sql .= " and gender = $gender";
    	}
    	if($source >= 0){
    		$sql .= " and source = $source";
    	}
    	if($studentName) $sql .= " and name like '%$studentName%'";
    	$sqlCount = "SELECT count(1) as nums".$sql;
    	$total = $this->db->query($sqlCount)->row_array(1);
    	$total = $total['nums'];
    	$offset = $pagesize*($page-1);
		$pages = pages($total, $page, $pagesize);
		$sqlQuery =  "SELECT *".$sql." limit $offset,$pagesize";
    	$data = $this->db->query($sqlQuery)->result_array();
    	return array(
			'pages'=>$pages,
			'data'=>$data
		);	
    }
}