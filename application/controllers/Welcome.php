<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index($zoneid = null)
	{


		$data_nav = array('activebar' => 'welcome');

		$data = array();
		$this->load->model('MapModel');
		$img_map = $this->MapModel->get_map_byid($zoneid);
		$data['img_map'] = $img_map;
		$showplant = false;
		if ($zoneid != null) {
			$showplantlist = $this->MapModel->get_showplant($zoneid);
			$data['showplantlist'] = $showplantlist;
			if(count ($showplantlist) > 0 ){
				$showplant = true;
			}			
		}
		$data['showplant'] = $showplant;
		$this->load->view('structure/top');
		$this->load->view('structure/nav', $data_nav);
		$this->load->view('structure/topcontent');
		$this->load->view('map', $data);
		$this->load->view('structure/footer');
	}
}
