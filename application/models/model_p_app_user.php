<?php
class model_p_app_user extends CI_Model {
	var $pkey = 'p_app_user_id';
	var $table_name = 'p_app_user';
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
	var $defaultFields = " 
							p_app_user_id, app_user_name, user_pwd, full_name, email_address, p_user_status_id, description, ip_address_v4, ip_address_v6,
							to_char(expired_user,'DD-MON-YYYY') AS expired_user, to_char(expired_pwd,'DD-MON-YYYY') AS expired_pwd, last_login_time,
							fail_login_trial, to_char(creation_date,'DD-MON-YYYY') AS creation_date, created_by, to_char(updated_date,'DD-MON-YYYY') AS updated_date,
							updated_by, is_employee";
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->raw_data = FALSE;  
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('p_app_user', 10);
        return $query->result();
    }
	function get ( $id, $get_one = false )
	{
        
	    $selectFields = array_keys($this->fields);
		$selectFields = implode($selectFields,',');
		$select_statement = ($this->raw_data) ? $selectFields  : $this->defaultFields;
		$this->db->select( $select_statement , FALSE);
		$this->db->from('p_app_user');
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'p_app_user_id', $id );
        }

		$query = $this->db->get();

		if ( $query->num_rows() > 0 )
		{
			$row = $query->row_array();
			return $row;
		}
        else
        {
            return array();
        }
	}
    function update($items)
    {
		$tableId = $items[$this->pkey];
		unset($items[$this->pkey]);
        $this->db->update($this->table_name, $items, array($this->pkey => $tableId));
    }
	function insert()
	{
		$items = $this->model_p_app_user->fields;
		$sql = "INSERT INTO p_app_user (
					p_app_user_id,
					app_user_name,
					user_pwd,
					full_name,
					email_address,
					p_user_status_id,
					description,
					ip_address_v4,
					expired_user,
					expired_pwd,
					last_login_time,
					created_by,
					updated_by,
					creation_date,
					updated_date,
					ip_address_v6,
					fail_login_trial,
					is_employee
				)
				VALUES
					(
						generate_id (
							'sikp',
							'p_app_user',
							'p_app_user_id'
						),
						?,
						md5(?),
						?,
						?,
						?,
						?,
						?,
						CASE
					WHEN ? = '' THEN
						NULL
					ELSE
						to_date(
							?,
							'DD-MON-YYYY'
						)
					END,
					CASE
				WHEN ? = '' THEN
					NULL
				ELSE
					to_date(
						?,
						'DD-MON-YYYY'
					)
				END,
				 NULL,
				 ?,
				 ?,
				 sysdate,
				 sysdate,
				 ?,
				 ?, ?
			)";
		$result = $this->db->query($sql,array(
									$items['app_user_name'],
									$items['app_user_name'],
									$items['full_name'],
									$items['email_address'],
									$items['p_user_status_id'],
									$items['description'],
									$items['ip_address_v4'],
									$items['expired_user'],
									$items['expired_user'],
									$items['expired_pwd'],
									$items['expired_pwd'],
									$items['created_by'],
									$items['updated_by'],
									$items['ip_address_v6'],
									$items['fail_login_trial'],
									$items['is_employee']
									)
						);
		echo json_encode($result);
		exit;		
	}
	function destroy ( $id )
	{
        if( is_array( $id ) )
        {
            $this->db->where_in( 'p_app_user_id', $id );            
        }
        else
        {
            $this->db->where( 'p_app_user_id', $id );
        }
        $result = $this->db->delete( 'p_app_user' );
        echo json_encode($result);
	}
}