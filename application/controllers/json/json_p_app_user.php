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
	$data = Editor::inst( $db, 'p_app_user app_user','p_app_user_id' )
		->field( 
			Field::inst( 'app_user.p_app_user_id','p_app_user_id'),
			Field::inst( 'app_user.app_user_name','app_user_name'),
			Field::inst( 'app_user.full_name','full_name' ),
			Field::inst( 'app_user.description','description' ),
			Field::inst( 'app_user.email_address','email_address' )
		)
		->process($_POST)
		->data();
	echo json_encode( $data );
	exit;