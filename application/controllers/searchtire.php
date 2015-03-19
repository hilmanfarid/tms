<?php if (!defined('BASEPATH')) die();
class searchtire extends Main_Controller {

   public function index()
	{
		$session = $this->session->all_userdata();
		$this->load->view('include/header');
		$this->load->view('search_tire',array());
		$this->load->view('include/footer');
	}
}