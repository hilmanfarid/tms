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
                        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
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
									<div class="col-lg-4 col-md-4 col-md-offset-0 col-xs-2 col-xs-offset-1 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L1</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L1" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 col-md-offset-0 no-padding col-xs-offset-1 tire-pos">
										<div class="small-box2">
											<label for="nowo">S1</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<img id="idx_S1" src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-md-offset-0 col-xs-2 col-xs-offset-1 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R1</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R1" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>

									<!-- NEXT FIVE TIRE L20 L21 ? R20 R21-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L20</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L20" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L21</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L21" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
										<div class="small-box2">
											<label for="nowo">S2</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R20</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R20" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R21</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R21" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div style="clear:both;"></div>
									
									<!-- NEXT FIVE TIRE L30 L31 ? R30 R31-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L30</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L30" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L31</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L31" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
										<div class="small-box2">
											<label for="nowo">S3</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R30</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R30" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R31</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R31" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									
									<!-- NEXT FIVE TIRE L40 L41 ? R40 R41-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L40</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L40" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L41</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L41" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
										<div class="small-box2">
											<label for="nowo">S4</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R40</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R40" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R41</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R41" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<!-- NEXT FIVE TIRE L50 L51 ? R50 R51-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L50</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L50" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L51</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L51" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
										<div class="small-box2">
											<label for="nowo">S5</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R50</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R50" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R51</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R51" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<!-- NEXT FIVE TIRE L60 L61 ? R60 R61-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L60</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L60" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L61</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L61" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
										<div class="small-box2">
											<label for="nowo">S6</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R60</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R60" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R61</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R61" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<!-- NEXT FIVE TIRE L30 L31 ? R30 R31-->
									<div style="clear:both;"></div>
									<!----------------------------this is row for tire image-------------------------------------------------------->
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L70</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L70" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">L71</label>
											<div class="img-con tire-not-exist">
												<img id="idx_L71" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-4 col-xs-4 no-padding">
										<div class="small-box2">
											<label for="nowo">S7</label>
											<div class="img-con tire-not-exist col-lg-8 col-lg-offset-2 col-md-8 col-xs-11 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-ss-10 no-padding">
												<div>&nbsp </div>
												<img src="<?php echo base_url('assets/img/tires.png') ?>" style="max-height:40px;margin-bottom:2%;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R70</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R70" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-2 col-xs-2 no-padding tire-pos">
										<div class="small-box2">
											<label for="nowo">R71</label>
											<div class="img-con tire-not-exist">
												<img id="idx_R71" src="<?php echo base_url('assets/img/tire.png') ?>" style="max-height: 90px;"/>
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