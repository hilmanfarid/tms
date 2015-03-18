<?php if (!defined('BASEPATH')) die();
class login extends Main_Controller {
	function __construct()
	{
		$this->use_auth = false;
		parent::__construct();
	}
	public function index($id=false)
	{
		$this->load->view('login_hover');
	}
	public function logout(){
		$this->data['title'] = "Logout";

		//log the user out
		$logout = $this->authentication->logout();
        $this->session->set_userdata('sescustomertms', '');
		//redirect them to the login page
		$this->session->set_flashdata('message','logout berhasil');
		redirect('index.php', 'refresh');
	}
	function doLogin()
	{
		$this->load->library('form_validation');
		$this->data['title'] = "Login";

		//validate form input
		$this->form_validation->set_rules('user', 'user', 'user');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true)
		{
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $this->input->post('remember');
			
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			///////////////////////////this is for temporary login//////////////////////////////////////
			if ($this->input->post('user')=='ADMIN' && $this->input->post('password')=='ADMIN'){
				$this->session->set_userdata(array(
					'identifier' => '1',
					'username' => 'ADMIN',
					'logged_in' => $_SERVER['REQUEST_TIME']
				));
				$this->session->set_flashdata('message', 'login berhasil');
				redirect('selectcustomer', 'refresh');
			}else{
				$this->session->set_flashdata('message', 'User atau Password Salah');
				redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			
			if ($this->authentication->login($this->input->post('user'), MD5($this->input->post('password')), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$this->session->set_flashdata('message', 'login berhasil');
				redirect('selectcustomer', 'refresh');
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$this->session->set_flashdata('message', 'User atau Password Salah');
				redirect('login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			//the user is not logging in so display the login page
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			$this->data['app_user_name'] = array('name' => 'app_user_name',
				'id' => 'app_user_name',
				'type' => 'text',
				'value' => $this->form_validation->set_value('user'),
			);
			$this->data['password'] = array('name' => 'password',
				'id' => 'user_pwd',
				'type' => 'password',
			);

			$this->_render_page('login', $this->data);
		}
	}
	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}
}