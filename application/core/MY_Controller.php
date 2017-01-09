<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	var $site = 'desafioLABORAL';	
	var $logo ;	
	var $page = 'desafiolaboral.cl';
	var $email_contacto ;
	var $email_nocontestar = 'noreply@desafiolaboral.cl';

	public function __construct(){

		parent::__construct();

        $this->email_contacto = 'contacto@'.strtolower($this->page);
        $label = array('primary','success','info');
        $this->logo = '<b>desafio </b><span class="label label-' . $label[rand(0,2)] .'">LABORAL</span>';
        $this->output->set_title($this->site);
		$this->output->set_template('layout_require');
		$this->load->section('menu','sections/menu');
		$this->load->section('modal','sections/modal');
		$this->load->section('footer','sections/footer');
		$this->load->css('assets/css/one.css');	
		$this->load->css('assets/css/theme.css');
		$this->output->set_meta('theme-color','#694D9F');
		$this->output->set_meta('keywords','desafiolaboral, trabajo, empleo, portal de empleo, bolsa de trabajo, desafio laboral, desafiolaboral.cl');	
		$this->output->set_meta('description','El punto de encuentro donde empleadores y candidatos se reúnen en un mismo idioma, simple, rápido ... ven a conocernos somos desafiolaboral.cl');
		//$this->load->js('assets/js/app.js');
	}

}

class Logged extends MY_Controller{

	public function __construct(){

		parent::__construct();
		if($this->session->userdata("logged_in") != TRUE){
			redirect(site_url('login'));
		}

	}
}