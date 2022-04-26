<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vegetation extends CI_Controller {
	public function index(){
		$this->load->model('VegetationModel');

		$search = "";

		if (isset($_GET["save"])){
			$search = $_GET["search"];
		}

		$tmp = $this->VegetationModel->get_all_vegetation($search);
		$data['results'] = $tmp;

		$data_nav = array('activebar'=>'vegetation');
			
		$this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('vegetation',$data);
		$this->load->view('structure/footer');
        
	}
	public function vegetationbyID($id)
	{
		$this->load->model('VegetationModel');
		$tmp = $this->VegetationModel->get_vegetation_byID($id);
		$data['ststus'] = '200';
		$data['data'] = $tmp;
		echo header('Content-Type: text/html; charset=UTF-8');
		echo json_encode($data);
		//var_dump($tmp);
	}
	
	
}