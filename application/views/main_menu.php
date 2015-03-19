<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Aplication Menu</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link rel="icon" href="/logo-small.gif" type="image/gif">
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('assets/css/ionicons.min.css')?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.css')?>" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php 
			$CI = &get_instance(); 
			$CI->load->view('main/main_header');
		?>
		<div class="container">
        
        <div class="page-header">
			<div>
				<a id="clock-container">
					<i class="fa fa-calendar"></i>
					<span id="server_time"></span>
				</a>
			</div>
            <h1 style="margin-top:0px;">Main Menu <small>a little description here</small></h1>
        </div>
        
        <!-- Hover User Details - START -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form_hover bg-aqua" onClick="location.href='pitstop'">
                        <p style="text-align: center; margin-top: 20px;">
                            <i class="fa fa-wrench" style="font-size: 147px;"></i>
                        </p>
                        <div class="header">
                            <div class="blur"></div>
                            <div class="header-text">
                                <div class="panel panel-success bg-aqua" style="height: 247px;">
                                    <div class="panel-heading">
                                        <h3 style="color: #428BCA;">Pit Stop</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            Description Here
                                        </div>
                                        <div class="form-group">
                                            &nbsp
                                        </div>
                                        <div class="form-group">
                                            User Rating:<br />
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_hover bg-green" onClick="location.href='mutation'">
                        <p style="text-align: center; margin-top: 20px;">
                            <i class="fa fa-share" style="font-size: 147px;"></i>
                        </p>
                        <div class="header">
                            <div class="blur"></div>
                            <div class="header-text">
                                <div class="panel panel-success bg-green" style="height: 247px;">
                                    <div class="panel-heading">
                                        <h3 style="color: #428BCA;">Mutation</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            Description Here
                                        </div>
                                        <div class="form-group">
                                            &nbsp
                                        </div>
                                        <div class="form-group">
                                            User Rating:<br />
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="col-lg-6">
                    <div class="form_hover bg-purple" onClick="location.href='searchtire'">
                        <p style="text-align: center; margin-top: 20px;">
                            <i class="fa fa-search" style="font-size: 147px;"></i>
                        </p>
                        <div class="header">
                            <div class="blur"></div>
                            <div class="header-text">
                                <div class="panel panel-success bg-purple" style="height: 247px;">
                                    <div class="panel-heading">
                                        <h3 style="color: #428BCA;">Search Tire</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            Description Here
                                        </div>
                                        <div class="form-group">
                                            &nbsp
                                        </div>
                                        <div class="form-group">
                                            User Rating:<br />
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_hover bg-red" onClick="location.href='searchvehicle'">
                        <p style="text-align: center; margin-top: 20px;">
                            <i class="fa fa-car" style="font-size: 147px;"></i>
                        </p>
                        <div class="header">
                            <div class="blur"></div>
                            <div class="header-text">
                                <div class="panel panel-success bg-red" style="height: 247px;">
                                    <div class="panel-heading">
                                        <h3 style="color: #428BCA;">Search Vechile</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            Description Here
                                        </div>
                                        <div class="form-group">
                                            &nbsp
                                        </div>
                                        <div class="form-group">
                                            User Rating:<br />
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <style>
            .form_hover {
                padding: 0px;
                position: relative;
                overflow: hidden;
                height: 240px;
				margin-bottom: 12px;
				cursor:pointer;
            }
        
                .form_hover:hover .header {
                    opacity: 1;
                    transform: translateY(-172px);
                    -webkit-transform: translateY(-172px);
                    -moz-transform: translateY(-172px);
                    -ms-transform: translateY(-172px);
                    -o-transform: translateY(-172px);
                }
        
                .form_hover img {
                    z-index: 4;
                }
        
                .form_hover .header {
                    position: absolute;
                    top: 170px;
                    -webkit-transition: all 0.3s ease;
                    -moz-transition: all 0.3s ease;
                    -o-transition: all 0.3s ease;
                    -ms-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                    width: 100%;
                }
        
                .form_hover .blur {
                    height: 240px;
                    z-index: 5;
                    position: absolute;
                    width: 100%;
                }
        
                .form_hover .caption-text {
                    z-index: 10;
                    color: #fff;
                    position: absolute;
                    height: 240px;
                    text-align: center;
                    top: -20px;
                    width: 100%;
                }
        </style>
        
        
        <!-- Hover User Details - END -->
        
        </div>

        <!-- jQuery 2.0.2 -->
		<script src="<?php echo base_url('assets/js/jquery/2.0.2/jquery.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
		<!--<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>-->
		<script src="<?php echo base_url('assets/js/AdminLTE/app.js') ?>"></script>
		<script>
			var currenttime = '<? print date("F d, Y H:i:s", time())?>' //PHP method of getting server date

			var serverdate=new Date(currenttime)

			function padlength(what){
				var output=(what.toString().length==1)? "0"+what : what
				return output
			}

			function displaytime(){
				serverdate.setSeconds(serverdate.getSeconds()+1)
				var timestring=padlength(serverdate.getDay())+"/"+padlength(serverdate.getMonth())+"/"+padlength(serverdate.getFullYear())+" <i class='fa fa-clock-o'></i> "+padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds());
				document.getElementById("server_time").innerHTML=timestring
			}

			setInterval("displaytime()", 1000)
		</script>
		</body>
</html>
