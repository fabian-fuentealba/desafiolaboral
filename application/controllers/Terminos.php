<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terminos extends MY_Controller {	

	public function index(){

		$this->output->unset_template();
		if(!$this->input->is_ajax_request()){
			show_error('La forma de acceso no esta permitida', 500 , $heading = '500 ERROR');
		}

		$this->load->view('terminos/index');
	}

}