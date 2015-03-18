<?php
class model_p_user_status extends CI_Model {
	var $pkey = 'p_user_status_id';
	var $table_name = 'p_user_status';
    var $fields = array(
		'p_app_user_id' => '',
		'app_user_name' => '',
		'user_pwd' => '',
		'full_name' => '',
		'email_address' => '',
		'p_user_status_id' => '',
		'is_employee' => '',
		'description' => '',
		'ip_address_v4' => '',
		'ip_address_v6' => '',
		'expired_user' => '',
		'expired_pwd' => '',
		'last_login_time' => '',
		'fail_login_trial' => '',
		'creation_date' => '',
		'created_by' => '',
		'updated_date' => '',
		'updated_by' => ''
	);
	var $defaultFields = 'p_app_user_id,app_user_name,
						 user_pwd,full_name,
						 email_address,
						 p_user_status_id,
						 is_employee,
						 description,
						 ip_address_v4,
						 ip_address_v6,
						 expired_user,
						 expired_pwd,
						 last_login_time,
						 fail_login_trial,
						 creation_date,
						 created_by,
						 updated_date,
						 updated_by';
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->raw_data = FALSE;  
    }
    function getCombo()
    {
		$this->db->select('p_user_status_id as id,code as value');
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
}