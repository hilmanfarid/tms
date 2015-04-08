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
                        SEARCH VEHICLE 
                        <small>Display tires</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-wrench"></i> Main Menu</a></li>
                        <li class="active">Search Vehicle</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <!--<div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">-->
						<div>
							<div class="box box-warning" style="overflow:auto;">
								<div class="box-body">
									
									<!------------------------------------------------------------------------------------
																	START TIRE POSITIONING
									
									-------------------------------------------------------------------------------------->
									
									<form action="search_vehicle" class="form-inline" onSubmit="searchVehicle();return false;">
										<fieldset style="text-align:center;">
										  <label style="display:inline;"class="control-label"><strong>VEHICLE :&nbsp&nbsp</strong></label>
										  <input id="input-vehicle-search" style="display:inline;width:109px;"type="text" class="input-mini form-control" name="vehicle_search">
										  <input style="display:inline;"type="submit" class="btn btn-warning" value="FIND">
										</fieldset>
									</form>
									</br>
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-md-offset-1 col-xs-2 col-xs-offset-1 no-padding tire-pos tire-box-top" >
										<div class="small-box2">
											<label for="nowo">L1</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L1" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
											
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 col-md-offset-0 no-padding tire-pos">

									</div>
									<div class="col-lg-2 col-md-2 col-lg-offset-2 col-xs-2 col-xs-offset-2 no-padding tire-pos tire-box-top" >
										<div class="small-box2">
											<label for="nowo">R1</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R1" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>

									<!-- NEXT FIVE TIRE L2O L2I ? R2O R2I-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">L2O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L2O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">L2I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L2I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">

									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">R2I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R2I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">R2O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R2O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									
									<div style="clear:both;"></div>
									
									<!-- NEXT FIVE TIRE L3O L3I ? R3O R3I-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">L3O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L3O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">L3I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L3I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding tire-box-center">
										<!--<div class="small-box2 col-xs-8 col-xs-offset-2 tire-box-center">-->
										<div class="small-box2">
											<label for="nowo">S1</label>
											<div class="col-xs-12 col-lg-3 col-sm-3 img-con tire-not-exist no-padding" style="margin-top:10%;">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-sm-9 no-padding" style="padding-left:4px;">
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">R3I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R3I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">R3O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R3O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									
									
									<!-- NEXT FIVE TIRE L4O L4I ? R4O R4I-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">L4O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L4O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">L4I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L4I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding tire-box-center">
										<!--<div class="small-box2 col-xs-8 col-xs-offset-2 tire-box-center">-->
										<div class="small-box2">
											<label for="nowo">S2</label>
											<div class="col-xs-12 col-lg-3 col-sm-3 img-con tire-not-exist no-padding" style="margin-top:10%;">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-sm-9 no-padding" style="padding-left:4px;">
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">R4I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R4I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">R4O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R4O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									
									<!-- NEXT FIVE TIRE L5O L5I ? R5O R5I-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">L5O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L5O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-right">
										<div class="small-box2">
											<label for="nowo">L5I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L5I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding tire-box-center">
										<!--<div class="small-box2 col-xs-8 col-xs-offset-2 tire-box-center">-->
										<div class="small-box2">
											<label for="nowo">S3</label>
											<div class="col-xs-12 col-lg-3 col-sm-3 img-con tire-not-exist no-padding" style="margin-top:10%;">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-sm-9 no-padding" style="padding-left:4px;">
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-ss-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-ss-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">R5I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R5I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos tire-box-middle-left">
										<div class="small-box2">
											<label for="nowo">R5O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R5O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									
									<!-- NEXT FIVE TIRE L6O L6I ? R6O R6I-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L6O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L6O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L6I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L6I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
		
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R6I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R6I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R6O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R6O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<!-- NEXT FIVE TIRE L7O L7I ? R7O R7I-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L7O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L7O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L7I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_L7I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">

									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R7I</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R7I" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R7O</label>
											<div class="col-xs-12 col-lg-3 col-md-3 img-con tire-not-exist no-padding">
												<img id="idx_R7O" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
											<div class="col-xs-12 col-lg-9 col-md-9 no-padding">
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Tire ID:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Status:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Pressure:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
												<div class="col-md-5 col-xs-12 no-padding">
													<label style="text-align:left">Thread Depth:</label>
												</div>
												<div class="col-md-7 col-xs-12 no-padding">
													<input style="padding:1px;" class="form-control" type="text" value="" readonly>
												</div>
											</div>
										</div>
									</div>
									
									<div style="clear:both;"></div>
									<div class="table-responsive">
										<table id="grid-tire-detail" class="table table-condensed table-hover table-striped table-bordered" data-selection="true" data-multi-select="true" data-row-select="true" data-keep-selection="true">
											<thead>
												<tr>
													<th>No.</th>
													<th>Tire ID</th>
													<th>Position</th>
													<th>Status</th>
													<th>Pressure</th>
													<th>TreadDepth</th>
													<th>Sidewall</th>
													<th>Brand</th>
													<th>Pattern</th>
													<th>Size</th>
													<th>DOT</th>
													<th>Type</th>
													<th>Pemilik</th>
												</tr>
											</thead>
											<tbody>
												<tr>

												</tr>
											</tbody>
										</table>
									</div>
								</div>	
							</div>
						</div>
                    </div><!-- /.row -->
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
		<script>
			function searchVehicle(){
				var param = $('#input-vehicle-search').val();
				$('#grid-tire-detail tbody').html('');
				$.ajax({
					dataType: "json",
					type: "POST",
					url: '<?php echo base_url() ?>searchvehicle/getVehicle/'+param,
					data: {},
					success: function(data){
						var i=1;
						$.each(data, function( index, value ) {
							$('#grid-tire-detail tbody').append('<tr>'+
												'<td>'+i+'</td>'+
												'<td>'+value.tireidset+'</td>'+
												'<td>'+""+'</td>'+
												'<td>'+index+'</td>'+
												'<td>'+value['pressureset[]']+'</td>'+
												'<td>'+value['tdset[]']+'|'+value['td2set[]']+'|'+value['td3set[]']+'|'+value['td4set[]']+'</td>'+
												'<td>'+value['sidewall']+'</td>'+
												'<td>'+value['brand']+'</td>'+
												'<td>'+""+'</td>'+
												'<td>'+value['size']+'</td>'+
												'<td>'+value['dot']+'</td>'+
												'<td>'+value['type']+'</td>'+
												'<td>'+""+'</td>'+
											'</tr>'
							);		
							i++;
						});				
					},
					error: function(data,statusMsg,errString ){
						$(':input:not(:button)', $('#tire-master')).val([]);
						$('.overlay').hide();
						$('.loading-img').hide();
					}
				});
				return false;
			}
		</script>
		<!-- this is script for auto typeahead -->