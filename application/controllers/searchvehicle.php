<?php if (!defined('BASEPATH')) die();
class searchvehicle extends Main_Controller {

   public function index()
	{
		$this->load->view('include/header');
		$this->load->view('search_vehicle',array());
		$this->load->view('include/footer');
	}
	public function getVehicle($searchParam){
		$items = $_SESSION['tire_details'];
		echo json_encode($items);
		exit;

	}

}