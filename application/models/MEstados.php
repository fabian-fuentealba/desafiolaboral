<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MEstados extends MY_Model {	

	public function select( $where = array() ){

		$this->db->select()				
		->from('estados')
		->where($where)
		->order_by('lugar');	
		$query = $this->db->get();
		return $query->result_array();

	}

}