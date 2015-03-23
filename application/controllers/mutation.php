<?php
class Mutation extends Main_Controller {
	public function index($id=false)
	{
		$this->load->view('include/header');
		$this->load->view('mutation',array());
		$this->load->view('include/footer');
	}
	public function getGroup(){
		echo '[
				{"value": "", "text": "Select Location"},
				{"value": 1, "text": "warehouse 1"},
				{"value": 2, "text": "warehouse 2"},
				{"value": 3, "text": "warehouse 3"}
			]';
		exit;
	}
	public function getToLocation(){
		$param = $this->input->get('location');
		$location = array(
			'location' 	=> array(
				'1' => 'location_1',
				'2' => 'location_2',
				'3' => 'location_3',
				'4' => 'location_4',
				'5' => 'location_5'
			),
			'vendor'	=> array(
				'6' => 'vendor_1',
				'7' => 'vendor_2',
				'8' => 'vendor_3',
				'9' => 'vendor_4',
				'10' => 'vendor_5',
				'11' => 'vendor_6'
			)
		);
		if(array_key_exists($param,$location)){
			echo json_encode($location[$param]);
			exit;
		}else{
			echo "";
			exit;
		}
	}
}
?>