<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model(array('MEmpresas'));	

	}

	public function index(){

		$this->form_validation->set_rules('correo','correo','trim|valid_email|required');
		$this->form_validation->set_rules('password','password','trim|required');	
		
		if($this->form_validation->run()){

			$data_select = array(
				'correo' => $this->input->post("correo") ,
				'password' => sha1($this->input->post("password")),
				'estado' => 1
			);

			$data = $this->MEmpresas->select( $data_select , TRUE );
			
			if(is_numeric($data['id_empresa'])){

				$data['logged_in'] = TRUE ;				
				$this->session->set_userdata($data);
				redirect(site_url('avisos'));

			}else{

				$this->session->set_flashdata("message",'<div class="alert alert-danger-alt animated shake">Los datos ingresados no son validos</div>');
				redirect(site_url('login'));
			}

		}

		$this->output->append_title( 'Login' );
		$this->load->view( 'login' );

	}

}