<?php

// DataTables PHP library
include( "data_tables/TableTools/php/DataTables.php" );
header("HTTP/1.1 200 OK");
// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Validate;


/*
 * Example PHP implementation used for the join.html example
 */
/*if(empty($_POST['action'])&&empty($_POST['p_app_user_id'])){
    echo json_encode(array("data" => array(),"draw" => 1,"recordsTotal" => "0","recordsFiltered" => "0"));
    exit;
}*/
$data = Editor::inst( $db, 'p_app_user_role','p_app_user_role_id' )
	->field( 
	    Field::inst( 'p_app_user_role.p_app_role_id','role_name'),
	    Field::inst( 'p_app_user_role.p_app_user_id','p_app_user_id'),
		Field::inst( 'p_app_user_role.description','description' ),
		Field::inst( 'p_app_user_role.valid_from','valid_from' )
		    ->validator( 'Validate::dateFormat', array(
                    "empty" => false,
                    "format" => Format::DATE_ISO_8601,
                    "message" => "Please enter a date in the format yyyy-mm-dd"
            ) )
            ->getFormatter( 'Format::date_sql_to_format', Format::DATE_ISO_8601 )
            ->setFormatter( 'Format::date_format_to_sql', Format::DATE_ISO_8601 ),
		Field::inst( 'p_app_user_role.valid_to','valid_to' )
		    ->validator( 'Validate::dateFormat', array(
                    "empty" => true,
                    "format" => Format::DATE_ISO_8601,
                    "message" => "Please enter a date in the format yyyy-mm-dd"
            ) )
            ->getFormatter( 'Format::date_sql_to_format', Format::DATE_ISO_8601 )
            ->setFormatter( 'Format::date_format_to_sql', Format::DATE_ISO_8601 )
	)
	->leftJoin( 'p_app_role', 'p_app_role.p_app_role_id', '=', 'p_app_user_role.p_app_role_id' );

if ( ! isset($_POST['action']) && !empty($_POST['parameters'])) {
    $parameters = $_POST['parameters'];
    $data->where('p_app_user_id',$parameters['p_app_user_id']);
}else if(empty($_POST['parameters']['p_app_user_id'])){
    echo json_encode(array("data" => "","draw" => 13,"recordsTotal" => 0,"recordsFiltered" => 0));
    exit;
}
	
$data = $data->process($_POST)
     ->data();
	
if ( ! isset($_POST['action']) ) {
    // Get a list of sites for the `select` list
    $data['p_app_role'] = $db
        ->selectDistinct( 'p_app_role', 'p_app_role_id as value, code as label' )
        ->fetchAll();
}

echo json_encode( $data );
exit;