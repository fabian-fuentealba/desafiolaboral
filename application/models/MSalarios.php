<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MSalarios extends MY_Model {	

	public function select( $where = array() ){

		$this->db->select()				
		->from('salarios')
		->where($where)
		->order_by('lugar');	
		$query = $this->db->get();
		return $query->result_array();

	}

}