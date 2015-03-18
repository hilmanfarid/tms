<?php
class temptireset extends Main_Controller {
	public function index($id=false)
	{
		//$data = $_SESSION['tire_details'];
		$param = $this->input->post('param');
		$this->load->view('modal/temporary_tireset_modal',array('data' => $param));
	}
}
?>