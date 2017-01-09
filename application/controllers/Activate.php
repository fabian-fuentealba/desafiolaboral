<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activate extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model( array('MEmpresas') );		
		
	} 

	public function business(){
       
        $key = trim($this->uri->segment(3));
        if ( $key == '' ) {

        	$data = array(
        		'title' => NULL ,
        		'subtitle' => 'Lo sentimos la llave no existe ...',
        		'message' => 'Lo sentimos, pero la llave proporcionada ya sea no fue encontrada o no existe. <br/>Prueba acceder al link que te enviamos a tu correo o has click en el boton de abajo para regrsear a la pagina de inicio.',
        		'class' => 'text-danger'
        	);

            $this->load->view('activate/error' , $data );

        } else {

            $data = $this->MEmpresas->select( array( 'hash' => $key ) , TRUE );
            if ( is_numeric($data['id_empresa']) ) {                

                $data = $this->MEmpresas->update( $data['id_empresa'] , array('hash' => NULL , 'estado' => 1)) ;
                if( $data === TRUE ){

                	$this->session->set_flashdata('message', '<div class="alert alert-success">Bienvenido ! ... tu cuenta fua activada exitosamente.         Ingresa tus credenciales y comencemos !!!</div>');
                	redirect(site_url('login'));

                }else{

                	$data = array(
		        		'title' => NULL ,
		        		'subtitle' => 'Lo sentimos algo sucedio ...',
		        		'message' => 'Lo sentimos, algo sucedio y no pudimos validar tu link. <br/>Prueba acceder al link que te enviamos a tu correo o has click en el boton de abajo para regrsear a la pagina de inicio.',
		        		'class' => 'text-danger'
		        	);

		            $this->load->view('activate/error' , $data );
                }
                

            }else{

            	$data = array(
	        		'title' => NULL ,
	        		'subtitle' => 'Los datos enviados no son validos ...',
	        		'message' => 'Lo sentimos, los datos enviados no son validos o su cuenta ya fue activada.<br/>Pruebe <a href="'.site_url('login').'">iniciando sesión</a> o registrese con nosotros en <a href="'.site_url('signup').'"> quiero registrarme</a> .',
	        		'class' => 'text-danger'
	        	);

	        	$this->load->view('activate/error' , $data );
	           
            }

        }	    

	}

}