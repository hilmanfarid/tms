<?php
class Main_Controller extends MY_Controller 
{
	var $use_auth =true;
	function __construct()
	{
		parent::__construct();
		if ($this->use_auth)$this->doAuth();
	}
	function doAuth(){
		$this->load->library('form_validation');
		if (!$this->authentication->is_loggedin())
		{
			//redirect them to the login page
			redirect('login', 'refresh');
			exit;
		}else{
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
		}
	}
}
