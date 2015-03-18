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
	$data = Editor::inst( $db, 'p_global_param global_param','p_global_param_id' )
		->field( 
			Field::inst( 'global_param.p_global_param_id','p_global_param_id'),
			Field::inst( 'global_param.code','code' ),
			Field::inst( 'global_param.value','value' ),
			Field::inst( 'global_param.description','description' )
		)
		->process($_POST)
		->data();
	echo json_encode( $data );
	exit;