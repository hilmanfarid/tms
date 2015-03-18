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
							<form role="form" action="pitstopwo" method="POST">
								<div class="box box-warning">
									
									<div class="box-body">

										<div class="form-group">
											<label for="nowo">NO WO</label>
											<input type="text" class="form-control" id="nowo" name="nowo" required>
										</div>
										<div class="form-group">
											<label for="tglwo">Date</label>
											<div class="bfh-datepicker" data-format="d-m-y" id="tglwo" data-name="tglwo" required></div>
										</div>
										<div class="form-group">
											<label for="vehicle">VEHICLE</label>
											<input type="text" class="form-control" id="vehicle" name="vehicle" required>
										</div>
										<div class="form-group">
											<label for="kilometer">KILOMETER</label>
											<input type="number" pattern="[0-9]*" class="form-control bfh-number" data-max="9999999999" id="kilometer" name="kilometer" required>
										</div>
										<div class="form-group">
											<label for="kilometergps">KILOMETER GPS</label>
											<input type="number" pattern="[0-9]*" class="form-control bfh-number" data-max="9999999999" id="kilometergps" name="kilometergps" required>
										</div>
										<div class="form-group">
											<label>LOCATION </label>
											<select class="form-control" name="location">
												<option value="Location_1">Location 1</option>
												<option value="Location_2">Location 2</option>
												<option value="Location_3">Location 3</option>
												<option value="Location_4">Location 4</option>
												<option value="Location_5">Location 5</option>
											</select>
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
		<!-- this is script for auto typeahead -->
		<script>
			var dataStore = new Bloodhound({
				datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
				queryTokenizer: Bloodhound.tokenizers.whitespace,
				remote: 'pitstop/data/%QUERY'
			});
				 
			dataStore.initialize();
				 
			$('#vehicle').typeahead(null, {
				name: 'data-store',
				displayKey: 'value',
				source: dataStore.ttAdapter()
			}); 
		</script>