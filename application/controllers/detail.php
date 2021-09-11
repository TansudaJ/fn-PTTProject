<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {

	public function index()
	{
		$this->load->model('DetailModel');
		$tmp = $this->DetailModel->get_all_detail();
		$page_data['results'] = $tmp;
		$data_nav = array('activebar'=>'vegetation');	
		$this->load->view('structure/footer');
        $this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('detail',$page_data);
		$this->load->view('structure/footer');
	
	}
}
