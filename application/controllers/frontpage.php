<?php if (!defined('BASEPATH')) die();
class Frontpage extends Main_Controller {

   public function index()
	{
		$session = $this->session->all_userdata();
		$this->load->view('include/header');
		$this->load->view('main/frontpage',array());
		$this->load->view('include/footer');
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
