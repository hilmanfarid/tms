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
	$data = Editor::inst( $db, 'p_application application','p_application_id' )
		->field( 
			Field::inst( 'application.p_application_id','p_application_id'),
			Field::inst( 'application.code','code' ),
			Field::inst( 'application.listing_no','listing_no' ),
			Field::inst( 'application.description','description' )
		)
		->process($_POST)
		->data();
	echo json_encode( $data );
	exit;