<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MAvisos extends MY_Model {	

	public function select( $where = array() , $is_row = FALSE ){

		$this->db->select()	
		->select("UCASE(DATE_FORMAT(avisos.publicado , '%b %d, %Y')) AS publicado")				
		->from('avisos')
		->join('estados','avisos.id_estado = estados.id_estado')
		->join('empresas','avisos.id_empresa = empresas.id_empresa')
		->join('tipos_trabajo','avisos.id_tipo_trabajo = tipos_trabajo.id_tipo_trabajo')
		->join('salarios','avisos.id_salario = salarios.id_salario')
		->join('categorias','avisos.id_categoria = categorias.id_categoria')
		->where( $where )		
		//->where('DATEDIFF( NOW() , avisos.publicado ) <= 60 ')
		//->or_where( 'avisos.publicado' , NULL )
		->order_by('id_aviso','DESC');		
		$query = $this->db->get(); //echo "<br><br>" . $this->db->last_query();
		if($is_row == FALSE){
			return $query->result_array();
		}else{
			return $query->row_array();
		}		

	}

	public function select_list( $where = array() , $is_row = FALSE , $where_in = array() ){

		$this->db->select()	
		->select("UCASE(DATE_FORMAT(avisos.publicado , '%b %d, %Y')) AS publicado")	
		->select('DATEDIFF( NOW() , avisos.publicado ) AS diff',FALSE)		
		->from('avisos')
		->join('estados','avisos.id_estado = estados.id_estado')
		->join('empresas','avisos.id_empresa = empresas.id_empresa')
		->join('tipos_trabajo','avisos.id_tipo_trabajo = tipos_trabajo.id_tipo_trabajo')
		->join('salarios','avisos.id_salario = salarios.id_salario')
		->join('categorias','avisos.id_categoria = categorias.id_categoria')
		->like($where)		
		->where( 'avisos.id_estado' , 2 )
		->where('DATEDIFF( NOW() , avisos.publicado ) <= 60 ')
		->order_by('id_aviso','DESC');	

		if( count($where_in) > 0 ){
			$this->db->where_in( 'avisos.id_categoria' , $where_in );
		}

		$query = $this->db->get();
		if($is_row == FALSE){
			return $query->result_array();
		}else{
			return $query->row_array();
		}		

	}

	public function delete( $id ){

		$this->db->where( 'id_aviso' , $id )		
		->delete('avisos');
		$error = $this->db->error();
		if($error['code'] == 0){
			return TRUE;
		}else{
			return $error['message'];
		}

	}

	public function insert( $data ){

		$this->db->set( 'creado' , 'NOW()' , FALSE )		
		->insert('avisos',$data);
		$error = $this->db->error();
		if($error['code'] == 0){
			return $this->db->insert_id();
		}else{
			return $error['message'];
		}

	}

	public function insert_publicado( $data ){

		$this->db->set( 'creado' , 'NOW()' , FALSE )	
		->set( 'publicado' , 'NOW()' , FALSE )	
		->insert('avisos',$data);
		$error = $this->db->error();
		if($error['code'] == 0){
			return $this->db->insert_id();
		}else{
			return $error['message'];
		}

	}

	public function visitas( $id ){

		$this->db->set( 'visitas' , 'visitas + 1' , FALSE )	
		->where( 'id_aviso' , $id )	
		->update( 'avisos' );
		$error = $this->db->error();
		if($error['code'] == 0){
			return TRUE;
		}else{
			return $error['message'];
		}

	}

	public function update( $id , $data ){

		$this->db->set( 'actualizado' , 'NOW()' , FALSE )	
		->where( 'id_aviso' , $id )	
		->update( 'avisos' , $data );
		$error = $this->db->error();
		if($error['code'] == 0){
			return TRUE;
		}else{
			return $error['message'];
		}

	}

	public function update_publicado( $id , $data ){

		$this->db->set( 'actualizado' , 'NOW()' , FALSE )	
		->set( 'publicado' , 'NOW()' , FALSE )			
		->where( 'id_aviso' , $id )
		->update('avisos',$data);
		$error = $this->db->error();
		if($error['code'] == 0){
			return TRUE;
		}else{
			return $error['message'];
		}

	}

}
