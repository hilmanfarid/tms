<?php if (!defined('BASEPATH')) die();
class user_form extends Main_Controller {

	public function index($id=false)
	{
		$this->load->model('model_p_app_user');
		$this->load->model('model_p_user_status');
		if($id){
			$data['items'] = $this->model_p_app_user->get($id);
		}else{
			$data['items']=array();
		}
		$data['form_height']=400;//default 250
		$data['id'] = $id;
		$data['combo']['p_user_status_id'] = $this->model_p_user_status->getCombo();
		$data['controller'] = $this->router->fetch_directory().'/'.$this->router->fetch_class();
		$this->load->view('user_form',$data);
	}
	public function create(){
		$this->load->model('model_p_app_user');
		$items = $this->model_p_app_user->fields;
		foreach($items as $key => $val){
			$postVal = $this->input->post($key);
			if(!empty($postVal)){
				$this->model_p_app_user->fields[$key] = $postVal;
			}else{
				$this->model_p_app_user->fields[$key]=null;
			}
		}
		$this->model_p_app_user->insert();
		exit;
		
	}
	public function update(){
		$this->load->model('model_p_app_user');
		$items = $this->model_p_app_user->fields;
		$prepapared_items=array();
		foreach($items as $key => $val){
			$postVal = $this->input->post($key);
			if(!empty($postVal)){
				$prepapared_items[$key] = $postVal;
			}
		}
		$this->model_p_app_user->update($prepapared_items);
		exit;
	}
	public function destroy(){
		$this->load->model('model_p_app_user');
		$postVal = $this->input->post('id');
		$postVal = json_decode($postVal);
		$this->model_p_app_user->destroy($postVal);
		json_decode($postVal);
		exit;
	}
}