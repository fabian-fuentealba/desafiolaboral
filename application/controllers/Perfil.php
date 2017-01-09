<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends Logged {

	public function __construct(){

		parent::__construct();
		$this->load->model( array('MEmpresas') );		
		
	} 

	public function index(){

		$id = $this->session->userdata('id_empresa');
		if(!is_numeric( $id )){
			
			$this->load->view( 'avisos/error' );

		}else{

			$this->form_validation->set_rules('name','nombre','strip_tags|trim|strtoupper|required')
			->set_rules('email','correo','trim|valid_email|strtolower|required')
			->set_rules('password','password','strip_tags|trim|min_length[6]')
			->set_rules('nombre_empresa','nombre empresa','strip_tags|trim|required')
			->set_rules('tagline','lema','strip_tags|trim')
			->set_rules('web_site','sitio web','trim|valid_url|strtolower|prep_url|required');
			
			if($this->form_validation->run()){						

				$data_update = array(
					'nombre' => $this->input->post('name') ,
					'correo' => $this->input->post('email') ,					
					'nombre_empresa' => $this->input->post('nombre_empresa') ,
					'lema' => $this->input->post('tagline') ,
					'sitio' => $this->input->post('web_site') 					
				);

				if( $this->input->post('password') != '' ){
					$data_update['password'] = sha1( $this->input->post('password') );
				}

				$update = $this->MEmpresas->update( $id , $data_update );

				if( $update === TRUE ){

					$config['upload_path'] = './assets/uploads/' . $id . '/';
					@mkdir( $config['upload_path'] , 0777 , TRUE );
		            $config['allowed_types'] = 'bmp|jpg|jpeg|png' ;
		            $config['max_size'] = 1500 ;	
		            $config['min_width'] = 130;
	            	//$config['min_height'] = 130;            
		            $config['encrypt_name'] = TRUE ;

		            $this->load->library('upload', $config);

		            if( $this->upload->do_upload('logo') ){

		            	$image = $this->upload->data(); 
		            	$image_file = $config['upload_path'] . $image['raw_name'] . $image['file_ext'];	
		            	$this->MEmpresas->update( $id , array( 'logo' => $image_file ) );

		            	$config2['image_library'] = 'gd2';
						$config2['source_image'] = $image_file ;				
						$config2['maintain_ratio'] = FALSE;
						$config2['width'] = 130;
						$config2['height'] = 130;
		            	$this->load->library('image_lib', $config2 );
		            	$this->image_lib->resize();           			
						
					}

					$this->session->set_flashdata("message",'<div class="alert alert-success-alt">Datos actualizados con exito.</div>');		

				}else{
					$this->session->set_flashdata("message",'<div class="alert alert-danger-alt">' . $update . '</div>');
				}
				redirect(site_url(uri_string()));

			}
			
			$data['meta'] = $this->MEmpresas->select( array('id_empresa' => $this->session->userdata('id_empresa')) , TRUE  );
			$this->load->view('perfil/index' , $data );
		}
	}
}
