<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oferta extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model( array('MAvisos') );
		$this->output->set_meta('robots','nofollow');		
		
	} 

	public function detalle(){		

		$id = $this->uri->segment(3);
		if(!is_numeric( $id )){
			
			$this->load->view( 'avisos/error' );

		}else{	

			$this->MAvisos->visitas( $id );		
			$data['meta'] = $this->MAvisos->select( array( 'id_aviso' => $id , 'avisos.id_estado' => 2 ) , TRUE );
			$this->output->append_title( $data['meta']['titulo'] );
			$this->load->view( 'oferta/detalle' , $data );
		}
	
	}	

}