<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {
	//http://localhost/fn-PTTProject/index.php/detail

	public function index($id)
	{
		$this->load->model('DetailModel');
		$tmp = $this->DetailModel->get_vegetation($id);
		$page_data['vegetation'] = $tmp;
		$tmp1 = $this->DetailModel->get_imagevegetation($id);
		$page_data['imagevegetation'] = $tmp1;
		$tmp2 = $this->DetailModel->get_medicinalProperties($id);
		$page_data['medicinalProperties'] = $tmp2;
		$tmp3 = $this->DetailModel->get_plantpathname($id);
		$page_data['plantpathname'] = $tmp3;
		
		$data_nav = array('activebar'=>'vegetation');	
		$this->load->view('structure/footer');
        $this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('detail',$page_data);
		$this->load->view('structure/footer');
	
	}
}
