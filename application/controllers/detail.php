<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class detail extends CI_Controller {
	//http://localhost/fn-PTTProject/index.php/detail

	public function index($id)
	{
		
		$arrregion = array();
		$arrregion[0]= "";
		$arrregion[1]= "ภาคเหนือ";
		$arrregion[2]= "ภาคอีสาน";
		$arrregion[3]= "ภาคตะวันตก";
		$arrregion[4]= "ภาคกลาง";
		$arrregion[5]= "ภาคตะวันออก";
		$arrregion[6]= "ภาคใต้";

		$this->load->model('DetailModel');
		$tmp = $this->DetailModel->get_vegetation($id);
		$page_data['vegetation'] = $tmp;
		$tmp1 = $this->DetailModel->get_imagevegetation($id);
		$page_data['imagevegetation'] = $tmp1;
		$tmp2 = $this->DetailModel->get_medicinalProperties($id);
		$page_data['medicinalProperties'] = $tmp2;
		$tmp3 = $this->DetailModel->get_plantpathname($id);
		$page_data['plantpathname'] = $tmp3;
		$tmp4 = $this->DetailModel->get_typename($id);
		$page_data['typename'] = $tmp4;
		$tmp5 = $this->DetailModel->get_localname($id);
		$page_data['localname'] = $tmp5;
		$page_data['arrregion'] = $arrregion;
		
		$data_nav = array('activebar'=>'vegetation');	
		$this->load->view('structure/footer');
        $this->load->view('structure/top');
		$this->load->view('structure/nav',$data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('detail',$page_data);
		$this->load->view('structure/footer');
	
	}
}
