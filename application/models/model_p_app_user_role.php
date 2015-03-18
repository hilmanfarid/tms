<?php
class model_p_app_user_role extends CI_Model {
	var $pkey = 'p_app_user_role_id';
	var $table_name = 'p_app_user_role';
    var $fields = array(
		'p_app_user_role_id' => '',
		'p_app_user_id' => '',
		'p_app_role_id' => '',
		'valid_from' => '',
		'valid_to' => '',
		'description' => '',
		'creation_date' => '',
		'created_by' => '',
		'updated_date' => '',
		'updated_by' => ''
	);
	var $defaultFields = "p_app_user_role_id,p_app_user_id,p_app_role_id,valid_from,
						  valid_to,description,creation_date,created_by,updated_date,updated_by";
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->raw_data = FALSE;  
    }
	function get ( $id, $get_one = false )
	{
        
	    $selectFields = array_keys($this->fields);
		$selectFields = implode($selectFields,',');
		$select_statement = ($this->raw_data) ? $selectFields  : $this->defaultFields;
		$this->db->select( $select_statement , FALSE);
		$this->db->from($this->table_name);
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( $this->pkey, $id );
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
		$sql = "INSERT INTO p_app_user_role(p_app_user_role_id, 
				p_app_user_id, 
				valid_from, 
				description, 
				created_by, 
				updated_by, 
				creation_date, 
				updated_date, 
				valid_to, 
				p_app_role_id) 
				VALUES(generate_id('sikp','p_app_user_role','p_app_user_role_id'), 
				?, 
				to_date(?,'DD-MON-YYYY'), 
				'?', 
				'?', 
				'?', 
				sysdate, sysdate, 
				case when '?' = '' then null else to_date('?','DD-MON-YYYY') end, 
				?)";
		$result = $this->db->query($sql,array(
									$items['p_app_user_id'],
									"'".$items['valid_from']."'",
									$items['description'],
									$items['created_by'],
									$items['updated_by'],
									$items['valid_to'],
									$items['valid_to'],
									$items['p_app_role_id']
									)
						);
		echo json_encode($result);
		exit;		
	}
	function destroy ( $id )
	{
        if( is_array( $id ) )
        {
            $this->db->where_in( $this->pkey, $id );            
        }
        else
        {
            $this->db->where($this->pkey, $id );
        }
        $result = $this->db->delete($this->table_name);
        echo json_encode($result);
	}
}