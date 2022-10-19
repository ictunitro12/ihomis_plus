<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>IHOMIS</title>
    <!-- Main styles for this application-->
		<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/font-awesome/css/font-awesome.min.css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugin/particles/css/particle.css">
		<link href="<?php echo base_url();?>assets/vendors/ladda/css/ladda-themeless.min.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/vendors/jquery/js/jquery.min.js"></script>
			<script src="<?php echo base_url();?>assets/vendors/jquery-validation/js/jquery.validate.js"></script>
  </head>
   <script type="text/javascript">
    window.onload = maxWindow;
    function maxWindow() {
        window.moveTo(0, 0);

        if (document.all) {
		
            top.window.resizeTo(screen.availWidth, screen.availHeight);
        }

        else if (document.layers || document.getElementById) {

            if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
                top.window.outerHeight = screen.availHeight;
                top.window.outerWidth = screen.availWidth;
            }
        }
    }
</script> 
  <body class="c-app flex-row align-items-center">
  <div id="particles-js"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card-group">
		  <div class="card text-white bg-success py-6 d-md-down-none" style="width:50%">
              <div class="card-body text-center">
                <div>
				<h3>Department of Health</h3>
				<br>
				 <img src ="<?php echo base_url();?>/assets/img/DOHbrand.png" width="190px"; height="190px	";></img>
				 <br>
				 <br>
				<span>UNIVERSAL HEALTH CARE INFORMATION SYSTEM</span>
				<br>
				
				<cite>&copy; version 1.0</cite>
                </div>
              </div>
            </div>
            <div class="card p-4">
			<div class="card-body">
            <h1 class="text text-success">
				<i class="fa fa-lock"></i> Login
			</h1>
                <p class="text-success">Sign In to your account</p>
				<span id ="message"></span>
				<form id="formLogin" name="formLogin" method="POST"> 
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
						<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span></div>
                  <input class="form-control form-control-lg" type="text" id ="username" name="username" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
						<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span></div>
                  <input class="form-control form-control-lg" type="password"   id ="password" name="password" placeholder="Password">
                </div>
                  <input  type="checkbox"name="remember" id="remember"  value="1">
				&nbsp Remember?
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-ladda btn-block btn-lg"  data-style="zoom-in" type="button"><i class="fa fa-key"></i> Login</button>
                  </div>	
                </div>
				</form>
				<div>
				 <a href="<?php echo base_url();?>Auth/Register">Register Here</a>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url();?>assets/vendors/coreui/coreui/js/coreui.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/ladda/js/spin.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/ladda/js/ladda.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/loading-buttons.js"></script>
    <!--[if IE]><!-->
	<script src="<?php echo base_url();?>assets/vendors/coreui/icons/js/svgxuse.min.js"></script>
 	<script src="<?php echo base_url()?>assets/plugin/particles/js/particles.js"></script>
	<script src="<?php echo base_url()?>assets/plugin/particles/js/app.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/auth/login.js"></script>
    <!--<![endif]-->
  </body>
</html>