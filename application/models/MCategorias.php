<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MCategorias extends MY_Model {	

	public function select( $where = array() ){

		$this->db->select()				
		->from('categorias')		
		->where($where)		
		->order_by('categoria');	
		$query = $this->db->get(); //echo $this->db->last_query();
		return $query->result_array();

	}

}