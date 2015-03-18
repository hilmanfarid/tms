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
	$data = Editor::inst( $db, 'p_user_status user_status','p_user_status_id' )
		->field( 
			Field::inst( 'user_status.p_user_status_id','p_user_status_id'),
			Field::inst( 'user_status.code','code'),
			Field::inst( 'user_status.is_access_allowed','is_access_allowed' ),
			Field::inst( 'user_status.is_new_user','is_new_user' ),
			Field::inst( 'user_status.description','description' )
		)
		->process($_POST)
		->data();
	echo json_encode( $data );
	exit;