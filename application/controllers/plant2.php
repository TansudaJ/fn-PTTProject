<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class plant2 extends CI_Controller {
	//http://localhost/fn-PTTProject/index.php/detail

	public function index($id)
	{
		$this->load->model('plant2Model');
		$tmp = $this->plant2Model->get_plant($id);
		$page_data['plant'] = $tmp;
		$tmp1 = $this->plant2Model->get_imageplant($id);
		$page_data['imageplant'] = $tmp1;
		$tmp2 = $this->plant2Model->get_vegetation($id);
		$page_data['vegetation'] = $tmp2;
		$tmp3 = $this->plant2Model->get_plantpathname($id);
		$page_data['plantpathname'] = $tmp3;
		
		$data_nav = array('activebar'=>'plant');	
		$this->load->view('structure/footer');
        $this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('plant2',$page_data);
		$this->load->view('structure/footer');
		//var_dump($page_data);
	}
}
