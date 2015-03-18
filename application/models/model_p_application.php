<?php
class model_p_application extends CI_Model {
	var $pkey = 'p_application_id';
	var $table_name = 'p_application';
    var $fields = array(
		'p_application_id' => '',
		'code' => '',
		'listing_no' => '',
		'description' => '',
		'creation_date' => '',
		'created_by' => '',
		'updated_date' => '',
		'updated_by' => '',
		'md_on' => '',
		'md_off' => ''
	);
	var $defaultFields = " 
							p_application_id, 
							code, 
							listing_no, 
							description, 
							to_char(creation_date,'DD-MON-YYYY') AS creation_date, 
							created_by, 
							to_char(updated_date,'DD-MON-YYYY') AS updated_date,
							updated_by, 
							md_on,
							md_off";
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->raw_data = FALSE;  
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('p_application', 10);
        return $query->result();
    }
	function get ( $id, $get_one = false )
	{
        
	    $selectFields = array_keys($this->fields);
		$selectFields = implode($selectFields,',');
		$select_statement = ($this->raw_data) ? $selectFields  : $this->defaultFields;
		$this->db->select( $select_statement , FALSE);
		$this->db->from('p_application');
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'p_application_id', $id );
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
		$items = $this->model_p_application->fields;
		$sql = "INSERT INTO p_application (
					p_application_id, 
					code, 
					listing_no, 
					description, 
					creation_date, 
					created_by, 
					updated_date,
					updated_by, 
					md_on,
					md_off
				)
				VALUES
				(
					generate_id (
						'oss',
						'p_application',
						'p_application_id'
					),
					?,
					?,
					?,
					sysdate,
					?,
					sysdate,
					?,
					?, 
					?
				)";
		$result = $this->db->query($sql,array(
									$items['code'],
									$items['listing_no'],
									$items['description'],
									$items['created_by'],
									$items['updated_by'],
									$items['md_on'],
									$items['md_off']
									)
						);
		echo json_encode($result);
		exit;		
	}
	function destroy ( $id )
	{
        if( is_array( $id ) )
        {
            $this->db->where_in( 'p_application_id', $id );            
        }
        else
        {
            $this->db->where( 'p_application_id', $id );
        }
        $result = $this->db->delete( 'p_application' );
        echo json_encode($result);
	}
}