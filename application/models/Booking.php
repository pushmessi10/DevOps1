<?php 
class Student extends CI_Model {
	function save($data){
		$this->db->insert('students',$data);
	}
}
