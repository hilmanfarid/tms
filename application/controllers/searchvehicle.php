<?php if (!defined('BASEPATH')) die();
class searchvehicle extends Main_Controller {

   public function index()
	{
		$this->load->view('include/header');
		$this->load->view('search_vehicle',array());
		$this->load->view('include/footer');
	}

}