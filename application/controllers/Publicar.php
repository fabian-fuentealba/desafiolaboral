<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends Logged {

	public function __construct(){

		parent::__construct();
		$this->load->model( array('MTipos_trabajo','MCategorias','MSalarios','MEstados','MAvisos') );		
		
	} 

	public function index(){

		$this->form_validation->set_rules('titulo','titulo','strip_tags|trim|required')
		->set_rules('descripcion','descripción','trim|callback_strip_tags2|required')
		->set_rules('tipo_trabajo','tipo trabajo','trim|numeric|required')
		->set_rules('categoria','categoria','trim|numeric|required')
		->set_rules('salario','salario','trim|numeric|required')
		->set_rules('pais','pais','trim|strip_tags|trim|strtoupper|required')
		->set_rules('ciudad','ciudad','trim|strip_tags|trim|strtoupper|required')
		->set_rules('como_postular','como postular ?','trim|callback_strip_tags2')
		->set_rules('correo','correo postulación','trim|strtolower|valid_email|required')
		->set_rules('estado','estado aviso','trim|numeric|required');

		if( $this->form_validation->run()){

			$data_insert = array(
				'titulo' => $this->input->post('titulo') , 
				'descripcion' => $this->input->post('descripcion') ,
				'id_tipo_trabajo' => $this->input->post('tipo_trabajo') ,
				'id_categoria' => $this->input->post('categoria') ,
				'id_salario' => $this->input->post('salario') ,
				'pais' => $this->input->post('pais') ,
				'ciudad' => $this->input->post('ciudad') ,
				'como_postular' => $this->input->post('como_postular') ,
				'correo_postulacion' => $this->input->post('correo') ,
				'id_empresa' => $this->session->userdata('id_empresa') ,
				'id_estado' => $this->input->post('estado')

			);

			if( $this->input->post('estado') == 2 ){
				$insert = $this->MAvisos->insert_publicado( $data_insert );
			}else{
				$insert = $this->MAvisos->insert( $data_insert );
			}
			
			if( is_numeric($insert)){

				if( $this->input->post('estado') == 2 ){
					$this->session->set_flashdata('message','<div class="alert alert-success-alt"><b>GUARDADO & PUBLICADO</b> con exito.</div>');	
				}else{
					$this->session->set_flashdata('message','<div class="alert alert-success-alt"><b>GUARDADO</b> con exito.</div>');	
				}			
			}else{
				$this->session->set_flashdata('message','<div class="alert alert-danger-alt">' . $insert . '</div>');
			}
			redirect(site_url(uri_string()));

		}

		$data['tipos_trabajo'] = $this->MTipos_trabajo->select( array( 'estado' => 1 ));
		$data['salarios'] = $this->MSalarios->select( array( 'estado' => 1 ));
		$data['estados'] = $this->MEstados->select( );
		$data['categorias'] = $this->MCategorias->select( array( 'estado' => 1 ));
		$this->load->view( 'publicar/index' , $data );
	}

	public function strip_tags2($str){

	    return strip_tags( $str , '<li><ul>'); 
	}

}