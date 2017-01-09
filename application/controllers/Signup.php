<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model( array('MEmpresas') );		
		
	} 

	public function index(){

		$this->form_validation->set_rules('name','nombre','strip_tags|trim|strtoupper|required')
		->set_rules('email','correo','trim|valid_email|strtolower|is_unique[empresas.correo]|required',array('is_unique'=>'El campo %s contiene un valor que ya fue registrado.'))
		->set_rules('password','password','strip_tags|min_length[6]|required')
		->set_rules('confirm_password','confirmar password','required|matches[password]')
		->set_rules('nombre_empresa','nombre empresa','strip_tags|trim|required')
		->set_rules('tagline','lema','strip_tags|trim')
		->set_rules('web_site','sitio web','trim|valid_url|strtolower|prep_url|required');
		
		if($this->form_validation->run()){

			$hash = sha1( $this->input->post('email') . rand( 10000 , 99999 ) );			

			$data_insert = array(
				'nombre' => $this->input->post('name') ,
				'correo' => $this->input->post('email') ,
				'password' => sha1( $this->input->post('password') ) ,
				'nombre_empresa' => $this->input->post('nombre_empresa') ,
				'lema' => $this->input->post('tagline') ,
				'sitio' => $this->input->post('web_site') ,
				'hash' => $hash
				
			);

			$insert = $this->MEmpresas->insert( $data_insert );

			if(is_numeric($insert)){

				$config['upload_path'] = './assets/uploads/' . $insert . '/';
				@mkdir( $config['upload_path'] , 0777 , TRUE );
	            $config['allowed_types'] = 'bmp|jpg|jpeg|png' ;
	            $config['max_size'] = 1500 ;
	            $config['min_width'] = 130;
	            $config['min_height'] = 130;          
	            $config['encrypt_name'] = TRUE ;

	            $this->load->library('upload', $config);

	            if( $this->upload->do_upload('logo') ){

	            	$image = $this->upload->data(); 
	            	$image_file = $config['upload_path'] . $image['raw_name'] . $image['file_ext'];	
	            	$this->MEmpresas->update( $insert , array( 'logo' => $image_file ) );

	            	$config2['image_library'] = 'gd2';
					$config2['source_image'] = $image_file ;				
					$config2['maintain_ratio'] = FALSE;
					$config2['width'] = 130;
					$config2['height'] = 130;
	            	$this->load->library('image_lib', $config2 );
	            	$this->image_lib->resize();           			
					
				}

				$data['site_name'] = $this->site;
				$data['page'] = $this->page;
		        $data['new_email_key'] = $hash ;
		        $data['activation_period'] = 48;
		        $data['username'] = $this->input->post('name') ;
		        $data['user_id'] = 1 ;
		        $data['to'] = $this->input->post('email');
		        $this->_send_email( $data );

				$this->session->set_flashdata("message",'<div class="alert alert-success"><b>FELICITACIONES !</b><br> Tus datos fueron ingresados con exito, en unos minutos llegara un correo a la dirección que nos indicaste para poder activar tu cuenta.<br>Gracias por preferirnos !</div>');		

			}else{
				$this->session->set_flashdata("message",'<div class="alert alert-warning">' . $insert . '</div>');
			}
			redirect(site_url(uri_string()));

		}
		
		$this->output->append_title( 'Registro empresa' );
		$this->load->view('signup/index');
	}	

	function _send_email( $data ){

        $this->load->library('email');
        $this->email->from( $this->email_nocontestar , $this->site );       
        $this->email->to( $data['to'] );      
        $this->email->subject( 'Bienvenido ! registro completo.' );
        $this->email->message( $this->load->view('email/activate_enterprise-html', $data , TRUE));       
        return $this->email->send();

    }
}
