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
                        <div class="col-lg-4 col-md-6 col-lg-offset-4 col-md-offset-3 col-sm-6 col-sm-offset-3 col-ss-10 col-ss-offset-1">
							<div class="box box-warning">
								<div class="box-body">
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label class="control-label" for="tireid">TIRE ID</label>
										</div>
										<form role="form" action="searchtire" onSubmit="return searchTire();" method="POST">
											<div class="col-xs-9">
												<input type="text" class="form-control" id="tireid" name="tireid" style="width:calc(100% - 58px);display:inline;">
												<input type="submit" class="btn btn-warning" value="FIND">
											</div>
											<!--<div class="col-xs-3" style="text-align:right;">
												<input type="submit" class="btn btn-warning" value="FIND">
											</div>-->
										</form>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label class="control-label" for="sidewall">SIDEWALL</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="sidewall" name="sidewall" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label class="control-label" for="brand">BRAND</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="brand" name="brand" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="type">TYPE</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="type" name="type" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="type">PATTERN</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="pattern" name="pattern" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="size">SIZE</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="size" name="size" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="dot">DOT</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="dot" name="dot" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="category">CATEGORY</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="category" name="category" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="status">STATUS</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="status" name="status" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="pressure">PRESSURE</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="pressure" name="pressure" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="thread_depth">THREAD DEPTH</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="thread_depth" name="thread_depth" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="location">LOCATION</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="location" name="location" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="last_trans">LAST DATE TRANSACTION</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="last_trans" name="last_trans" readonly>
										</div>
									</div>
									<div class="form-group form-horizontal">
										<div class="col-xs-3">
											<label for="mileage">MILEAGE</label>
										</div>
										<div class="col-xs-9">
											<input type="text" class="form-control" id="mileage" name="mileage" readonly>
										</div>
									</div>
								</div><!-- /.box-body -->
							</div>
						</div>
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		<script src="<?php echo base_url('assets/js/bootstrap-formhelpers.js') ?>"></script>
		<script>
			function searchTire(){
				alert('This is function to search tire');
				return false;
			}
		</script>
		<!-- this is script for auto typeahead -->