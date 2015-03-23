<body class="skin-blue fixed">
	<!-- header logo: style can be found in header.less -->
	<?php 
		$CI = &get_instance(); 
		$CI->load->view('main/main_header');
	?>
	<div class="wrapper row-offcanvas row-offcanvas-left">
		<!-- Right side column. Contains the navbar and content of the page -->
		<aside class="right-side strech">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div>
					<a id="clock-container">
						<i class="fa fa-calendar"></i>
						<span id="server_time"></span>
					</a>
				</div>
				<h1>
					PIT STOP
					<small>Control panel</small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-wrench"></i> Main Menu</a></li>
					<li class="active">Pit Stop</li>
				</ol>
			</section>

			<!-- Main content -->
			<section class="content">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-lg-offset-3 col-md-offset-3">
						<form role="form" action="<?php echo base_url();?>act_asal_pisan" method="POST" onSubmit="return submitMutation();">
							<div class="box box-warning">
								
								<div class="box-body">

									<div class="form-group">
										<label>
												SEND TO
										</label>
										<div class="radio">
											<label>
												<input type="radio" name="sendto" id="sendtolocation" value="location" checked>
												LOCATION
											</label>
											<label>
												<input type="radio" name="sendto" id="sendtovendor" value="vendor">
												VENDOR
											</label>
										</div>
									</div>
									<div class="form-group">
										<label for="nowo">NO WO</label>
										<input type="text" class="form-control" id="nowo" name="nowo" required>
									</div>
									<div class="form-group">
										<label for="tglwo">Date</label>
										<div class="bfh-datepicker" data-format="d-m-y" id="tglwo" data-name="tglwo"></div>
									</div>
									<div class="form-group">
										<label>FROM LOCATION </label>
										<select id="from_location" class="form-control" name="from_location">
											<option value="Location_1">From Location 1</option>
											<option value="Location_2">From Location 2</option>
											<option value="Location_3">From Location 3</option>
											<option value="Location_4">From Location 4</option>
											<option value="Location_5">From Location 5</option>
										</select>
									</div>
									<div class="form-group">
										<label>TO LOCATION </label>
										<select id="to_location" class="form-control" name="from_location">
											<option value="Location_1">To Location 1</option>
											<option value="Location_2">To Location 2</option>
											<option value="Location_3">To Location 3</option>
											<option value="Location_4">To Location 4</option>
											<option value="Location_5">To Location 5</option>
										</select>
									</div>
									
									
									<div class="table-responsive">
										<button id="append" type="button" class="btn btn-default" style="margin-bottom:5px;">Append</button>
										<table id="grid-mutation" class="table table-condensed table-hover table-striped table-bordered" data-selection="true" data-multi-select="true" data-row-select="true" data-keep-selection="true">
											<thead>
												<tr>
													<th data-filterable="true" data-column-id="tireidset" data-formatter="tireidset" data-type="numeric" data-align="right">TIRE ID</th>
													<th class ='warehouse-select-header' data-column-id="location" data-formatter="location" data-sortable="false">WAREHOUSE</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="status" data-column="tire_id">me@rafaelstaib.com</td>
													<td class="warehouse-select" data-column="warehouse_id">11.12.2014</td>
												</tr>

											</tbody>
										</table>
									</div>
								</div><!-- /.box-body -->
								<div class="box-footer" style="text-align:center;">
									<input type="submit" name="submit" value="SUBMIT" class="btn btn-warning"/>
								</div>
							</div>
						</form>
					</div>
				</div><!-- /.row -->
			</section><!-- /.content -->
		</aside><!-- /.right-side -->
	</div><!-- ./wrapper -->
	<script src="<?php echo base_url('assets/js/bootstrap-formhelpers.js') ?>"></script>
	<script>
	$(function(){
		$('.edit-table').editable(); 
		$('#append').click(function(){
			$('#grid-mutation tbody').append('<tr><td class="status" data-column="tire_id">&nbsp</td>'+
											 '<td class="warehouse-select" data-column="warehouse_id">&nbsp</td></tr>'
										);
			makeEditable();
		});
		function makeEditable(){
			$('.status').editable({
				type: 'select',
				title: 'Select tire id',
				placement: 'right',
				value: 2,
				source: [
					{value: 1, text: 'tire 1'},
					{value: 2, text: 'tire 2'},
					{value: 3, text: 'tire 3'}
				],
				success: function(response, newValue) {
					///////////////////////here to do event on tire id selected
				},
				validate: function(value) {
					if($.trim(value) == '') {
						return 'This field is required';
					}
				}
				/*
				//uncomment these lines to send data on server
				,pk: 1
				,url: '/post'
				*/
			});
			$('.warehouse-select').editable({
				type: 'select',
				title: 'Select warehouse',
				placement: 'right',
				sourceCache :false,
				value: 2,
				params:{},
				source: '<?php echo base_url();?>mutation/getGroup',
				success: function(response, newValue) {
					if(newValue==''){
						return 'No Warehouse Selected';
					}
					//this is example using ajax request 
					//you can add the parameters on params attribute e.g param : {tire_id : 1}
				}
			});
		}
		makeEditable();
	});
	////////////////////////////////////even on radio box send to location /////////////////////////////////
	
	$('input').on('ifChecked', function(event){
		if($(this).val()=='vendor'){
			$('#grid-mutation').find('.warehouse-select').each(function() {
				$(this).html('');
			});
			$('.warehouse-select-header').hide();
			$('.warehouse-select').hide();
			return;
		}else{
			$('.warehouse-select-header').show();
			$('.warehouse-select').show();
		}
		$.ajax({
			url: '<?php echo base_url();?>mutation/getToLocation',
			data: {"location" : $(this).val()},
			success: function(data){
				$('#to_location').empty();
				$.each(data, function( index, value ) {
					$('#to_location').append($("<option></option>").attr("value",index).text(value)); 
				});
			},
			dataType: 'json'
		});
	});
	
	///////////////////////////////////send tire id set to server in the form of json object//////////////////////////////////////////
	function submitMutation(){
		var tireidset_items=new Array();
		$('#grid-mutation tbody tr').each(function() {
			var tireidset_item={};
			$(this).find("td").each(function(){
				tireidset_item[$(this).attr('data-column')] = $(this).html();
			});
			tireidset_items.push(tireidset_item);
		});
		$('<input />').attr('type', 'hidden')
		  .attr('name', "tireidset")
		  .attr('value', JSON.stringify(tireidset_items))
		  .appendTo('#grid-mutation');
		return true;
		//////////////////////////////after submitted the data in tire id set table will become json object instead of array
	}
	</script>