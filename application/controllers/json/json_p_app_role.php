<?php
include( "data_tables/TableTools/php/DataTables.php" );

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
	$data = Editor::inst( $db, 'p_app_role app_role','p_app_role_id' )
		->field( 
			Field::inst( 'app_role.p_app_role_id','p_app_role_id'),
			Field::inst( 'app_role.code','code'),
			Field::inst( 'app_role.description','description' ),
			Field::inst( 'app_role.valid_from','valid_from' ),
			Field::inst( 'app_role.valid_to','valid_to' )
		)
		->process($_POST)
		->data();
	echo json_encode( $data );
	exit;