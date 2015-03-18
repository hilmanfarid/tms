<?php if (!defined('BASEPATH')) die();
class pitstop extends Main_Controller {

   public function index()
	{
		$session = $this->session->all_userdata();
		$this->load->view('include/header');
		$this->load->view('pit_stop',array());
		$this->load->view('include/footer');
	}
   public function data($query)
   {
		//use $query as param for SQL
		echo json_encode(array(
			array('value' => 'vehicle 1'),
			array('value' => 'vehicle 2'),
			array('value' => 'vehicle 3'),
			array('value' => 'vehicle 4'),
			array('value' => 'vehicle 5'),
			array('value' => 'vehicle 6'),
			array('value' => 'vehicle 7'),
			array('value' => 'vehicle 8')
		));
		exit;
   }
}