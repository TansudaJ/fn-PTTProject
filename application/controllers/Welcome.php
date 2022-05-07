<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index($zoneid = null){


		$data_nav = array('activebar'=>'welcome');

		$this->load->model('MapModel');
		$img_map = $this->MapModel->get_map_byid($zoneid);
		$data = array('img_map'=>$img_map);
		$this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('map',$data);
		$this->load->view('structure/footer');
        
	}
}
