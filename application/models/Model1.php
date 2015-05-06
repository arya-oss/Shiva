<?php

class Model1 extends CI_Model {
	
	function __construct() {
		parent::__construct();
	}
	public function getValue() {
		$query = $this->db->query("SELECT * from nitwbill.bill");
		if($query->num_rows() > 0){
			return $query->result_array();
		} else
			return NULL;
	}
}
?>