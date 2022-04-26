<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){


		$data_nav = array('activebar'=>'welcome');
			
		$this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('home');
		$this->load->view('structure/footer');
        
	}
}
