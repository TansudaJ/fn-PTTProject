<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plant extends CI_Controller {

	public function index()
	{
		$this->load->model('PlantModel');
		$tmp = $this->PlantModel->get_all_plant();
		$this->load->view('structure/top');
		$this->load->view('structure/nav');
		$this->load->view('structure/topcontent');
		$page_data['plantList'] = $tmp;
		$this->load->view('plant',$page_data);		
		$this->load->view('structure/footer');
	
	}
}
