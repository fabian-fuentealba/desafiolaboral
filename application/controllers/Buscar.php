<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscar extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model( array('MAvisos','MCategorias') );		
		
	} 

	public function index(){

		$this->form_validation->set_rules('filtro','filtro','strip_tags|trim|min_length[3]')
		->set_rules('categoria','categoria','numeric|trim')
		->set_rules('ciudad','ciudad','strip_tags|trim|min_length[3]');	
		$buscar = array();
		if($this->form_validation->run()){
			
			$buscar['descripcion'] = $this->input->post('filtro');
			$buscar['ciudad'] = $this->input->post('ciudad');
		}
		
		$data['categorias'] = $this->MCategorias->select( array( 'estado' => 1 ));
		$data['jobs'] = $this->MAvisos->select_list( $buscar , FALSE , $this->input->post('categoria') );
		$this->load->view('welcome' , $data );
	}
}
