<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>TMS | Login</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no' name='viewport'>
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
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class .icon to your logo image or logo icon to add some margining -->
                TMS
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
            </nav>
        </header>
        <div class="container">

        <div class="page-header">
            <h1>Login Page <small>a little description here</small></h1>
        </div>
        
        <!-- Hover Login - START -->
        <div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <div class="form_hover " style="background-color: #cccccc;">
                        <p style="text-align: center; margin-top: 20px;">
                            <i class="fa fa-gears" style="font-size:187px;"></i>
                        </p>
                        <div class="header">
                            <div class="blur"></div>
                            <div class="header-text">
                                <div class="panel panel-primary" style="height:320px;">
                                    <div class="panel-heading">
                                        <h3 class="skin-blue login-hover-header">
                                            <i class="fa fa-arrows-v"></i>    Login Form    <i class="fa fa-arrows-v"></i></h3>
                                    </div>
                                    <form action="login/doLogin" method="POST">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control input-lg" name="user">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control input-lg" name="password">
                                            </div>                                
                                            <div class="form-group">
                                                <input type="hidden" name="SUBMIT" value="login">
                                                <button class="btn btn-warning btn-lg btn-block">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
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
        height: 300px;
    }

        .form_hover:hover .header {
            opacity: 1;
			-webkit-transform:translate3d(0,-250px,0);
            transform: translateY(-250px);
            -webkit-transform: translateY(-250px);
            -moz-transform: translateY(-250px);
            -ms-transform: translateY(-250px);
            -o-transform: translateY(-250px);
        }

        .form_hover img {
            z-index: 4;
        }

        .form_hover .header {
            position: absolute;
            top: 250px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form_hover .blur {            
            height: 300px;
            z-index: 5;
            position: absolute;
            width: 100%;
        }

        .form_hover .header-text {
            z-index: 10;
            color: #fff;
            position: absolute;
            height: 300px;
            text-align: center;
            top: -20px;
            width: 100%;
        }
</style>


<!-- Hover Login - END -->

</div>
	<script src="<?php echo base_url('assets/js/jquery/2.0.2/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
   <!--<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>-->
   <script src="<?php echo base_url('assets/js/AdminLTE/app.js') ?>"></script>
    </body>
</html>
