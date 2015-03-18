<?php
class selectcustomer extends Main_Controller {
	public function index($id=false)
	{
		$this->load->view('SelectCustomer');
	}
	public function setCustomer()
	{
		$this->session->set_userdata(array(
				'sescustomertms' => $this->input->post('sescustomertms')
			));
		redirect('mainmenu', 'refresh');
	}
}
?>