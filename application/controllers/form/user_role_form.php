<?php if (!defined('BASEPATH')) die();
class user_role_form extends Main_Controller {

	public function index($id=false)
	{
		$this->load->model('model_p_app_user_role');
		$data['combo']=array();
		if($id){
			$data['items'] = $this->model_p_app_user_role->get($id);
		}else{
			$data['items']=array();
		}
		$data['form_height']=400;//default 250
		$data['id'] = $id;
		$data['controller'] = $this->router->fetch_directory().'/'.$this->router->fetch_class();
		$this->load->view('user_role_form',$data);
	}
	public function create(){
		$this->load->model('model_p_app_user_role');
		$items = $this->model_p_app_user->fields;
		foreach($items as $key => $val){
			$postVal = $this->input->post($key);
			if(!empty($postVal)){
				$this->model_p_app_user_role->fields[$key] = $postVal;
			}else{
				$this->model_p_app_user_role->fields[$key]=null;
			}
		}
		$this->model_p_app_user_role->insert();
		exit;
		
	}
	public function update(){
		$this->load->model('model_p_app_user_role');
		$items = $this->model_p_app_user_role->fields;
		$prepapared_items=array();
		foreach($items as $key => $val){
			$postVal = $this->input->post($key);
			if(!empty($postVal)){
				$prepapared_items[$key] = $postVal;
			}
		}
		$prepapared_items['updated_date']='sysdate'
		$prepapared_items['updated_by']='sysdate'
		$this->model_p_app_user_role->update($prepapared_items);
		exit;
	}
	public function destroy(){
		$this->load->model('model_p_app_user_role');
		$postVal = $this->input->post('id');
		$postVal = json_decode($postVal);
		$this->model_p_app_user_role->destroy($postVal);
		json_decode($postVal);
		exit;
	}
}