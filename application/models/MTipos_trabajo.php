<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MTipos_trabajo extends MY_Model {	

	public function select( $where = array() ){

		$this->db->select()				
		->from('tipos_trabajo')
		->where($where)
		->order_by('tipo_trabajo');	
		$query = $this->db->get();
		return $query->result_array();

	}

}