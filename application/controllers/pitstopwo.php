<?php
class pitstopwo extends Main_Controller {
	public function index($id=false)
	{
		$data = array(
			'nowo' => $this->input->post('nowo') ? $this->input->post('nowo'):$this->input->get('nowo'),
			'tglwo' => $this->input->post('tglwo') ? $this->input->post('tglwo'): $this->input->get('tglwo'),
			'kilometer' => $this->input->post('kilometer') ? $this->input->post('kilometer'):$this->input->get('kilometer'),
			'location' => $this->input->post('location')? $this->input->post('location'):$this->input->get('location'),
			'kilometergps' => $this->input->post('kilometergps')? $this->input->post('kilometergps'):$this->input->get('kilometergps')
		);
		$data['tire_details'] = $_SESSION['tire_details'];
		$tire_details_update = $this->getDetails();
		$data['tire_details_update'] = $tire_details_update;
		$this->load->view('include/header');
		$this->load->view('pit_stop_wo',$data);
		$this->load->view('include/footer');
	}
	public function getDetails($idx=null){
		$items = $_SESSION['tire_details'];
		if(!empty($idx)){
			$items[$idx]['tire_location_id']=$idx;
			echo json_encode($items[$idx]);
		}else{
			return $items;
		}
		exit;
	}
	public function setDetails($idx=null){
		$tire_location_id = $this->input->post('tire_location_id');
		$tireidset = $this->input->post('tireidset');
		$pressureset = $this->input->post('pressureset');
		$tdset = $this->input->post('tdset');
		$td2set = $this->input->post('td2set');
		$td3set = $this->input->post('td3set');
		$td4set = $this->input->post('td4set');
		$tubeset = $this->input->post('tubeset');
		$flapset = $this->input->post('flapset');
		$rimset = $this->input->post('rimset');
		$rimsetstatus = $this->input->post('rimsetstatus');
		
		$data = array(
			'nowo' => $this->input->post('nowo'),
			'tglwo' => $this->input->post('tglwo'),
			'kilometer' => $this->input->post('kilometer'),
			'location' => $this->input->post('location'),
			'kilometergps' => $this->input->post('kilometergps')
		);
		if($this->input->post('submit')=='EXECUTE'){
			//for execute to temp table
		}else if($this->input->post('submit')=='SUBMIT'){
			//submit here
		}
		redirect('pitstopwo/?'.http_build_query($data), 'refresh');
	}
	public function getTires($idx=null){
		if(empty($idx)){
			echo json_encode(array());
			exit;
		}
		$tires = array(
			'tire_1'	=> array(
				'sidewall'	=>	'sidewall_tire_1',
				'brand'		=>  'brand_tire_1',
				'type'      =>  'type_tire_1',
				'size'      =>  'size_tire_1',
				'dot'       =>  'dot_tire_1',
				'category'  =>  'category_tire_1'
			),
			'tire_2'  	=> array(
				'sidewall'	=>	'sidewall_tire_2',
				'brand'		=>  'brand_tire_2',
				'type'      =>  'type_tire_2',
				'size'      =>  'size_tire_2',
				'dot'       =>  'dot_tire_2',
				'category'  =>  'category_tire_2'
			),
			'tire_3'  	=> array(
				'sidewall'	=>	'sidewall_tire_3',
				'brand'		=>  'brand_tire_3',
				'type'      =>  'type_tire_3',
				'size'      =>  'size_tire_3',
				'dot'       =>  'dot_tire_3',
				'category'  =>  'category_tire_3'
			),
			'tire_4'  	=> array(
				'sidewall'	=>	'sidewall_tire_4',
				'brand'		=>  'brand_tire_4',
				'type'      =>  'type_tire_4',
				'size'      =>  'size_tire_4',
				'dot'       =>  'dot_tire_4',
				'category'  =>  'category_tire_4'
			),
			'tire_5'  	=> array(
				'sidewall'	=>	'sidewall_tire_5',
				'brand'		=>  'brand_tire_5',
				'type'      =>  'type_tire_5',
				'size'      =>  'size_tire_5',
				'dot'       =>  'dot_tire_5',
				'category'  =>  'category_tire_5'
			),
			'tire_6'  	=> array(
				'sidewall'	=>	'sidewall_tire_6',
				'brand'		=>  'brand_tire_6',
				'type'      =>  'type_tire_6',
				'size'      =>  'size_tire_6',
				'dot'       =>  'dot_tire_6',
				'category'  =>  'category_tire_6'
			),
			'tire_7'  	=> array(
				'sidewall'	=>	'sidewall_tire_7',
				'brand'		=>  'brand_tire_7',
				'type'      =>  'type_tire_7',
				'size'      =>  'size_tire_7',
				'dot'       =>  'dot_tire_7',
				'category'  =>  'category_tire_7'
			),
			'tire_8'  	=> array(
				'sidewall'	=>	'sidewall_tire_8',
				'brand'		=>  'brand_tire_8',
				'type'      =>  'type_tire_8',
				'size'      =>  'size_tire_8',
				'dot'       =>  'dot_tire_8',
				'category'  =>  'category_tire_8'
			),
			'tire_9'  	=> array(
				'sidewall'	=>	'sidewall_tire_9',
				'brand'		=>  'brand_tire_9',
				'type'      =>  'type_tire_9',
				'size'      =>  'size_tire_9',
				'dot'       =>  'dot_tire_9',
				'category'  =>  'category_tire_9'
			),
			'tire_10' 	=> array(
				'sidewall'	=>	'sidewall_tire_10',
				'brand'		=>  'brand_tire_10',
				'type'      =>  'type_tire_10',
				'size'      =>  'size_tire_10',
				'dot'       =>  'dot_tire_10',
				'category'  =>  'category_tire_10'
			),
			'tire_11'	=> array(
				'sidewall'	=>	'sidewall_tire_11',
				'brand'		=>  'brand_tire_11',
				'type'      =>  'type_tire_11',
				'size'      =>  'size_tire_11',
				'dot'       =>  'dot_tire_11',
				'category'  =>  'category_tire_11'
			)
		);
		$tires[$idx]['tireidset']=$idx;
		echo json_encode($tires[$idx]);
		exit;
	}
}
?>