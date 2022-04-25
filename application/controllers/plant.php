<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plant extends CI_Controller {

	public function index()
	{
		$this->load->model('PlantModel');
		$tmp = $this->PlantModel->get_all_plant();
		$data['results'] = $tmp;
		

		$data_nav = array('activebar'=>'plant');
			
		$this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('plant',$data);
		$this->load->view('structure/footer');
	
	}
	public function plantbyID($id)
	{
		$this->load->model('PlantModel');
		$tmp = $this->PlantModel->get_plant_byID($id);
		$data['ststus'] = '200';
		$data['data'] = $tmp;
		echo header('Content-Type: text/html; charset=UTF-8');
		echo json_encode($data);
		//var_dump($tmp);
	}
}
