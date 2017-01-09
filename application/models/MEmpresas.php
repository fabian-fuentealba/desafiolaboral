<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MEmpresas extends MY_Model {	

	public function select( $where = array() , $is_row = FALSE){

		$this->db->select()				
		->from('empresas')
		->where($where);		
		$query = $this->db->get();
		if( $is_row === TRUE ){
			return $query->row_array();
		}else{
			return $query->result_array();
		}	

	}

	public function insert( $data ){

		$this->db->set( 'creado' , 'NOW()' , FALSE )		
		->insert('empresas',$data);
		$error = $this->db->error();
		if($error['code'] == 0){
			return $this->db->insert_id();
		}else{
			return $error['message'];
		}

	}

	public function update( $id , $data ){

		$this->db->set( 'actualizado' , 'NOW()' , FALSE )	
		->where( 'id_empresa' , $id )	
		->update( 'empresas' , $data );
		$error = $this->db->error();
		if($error['code'] == 0){
			return TRUE;
		}else{
			return $error['message'];
		}

	}

}
