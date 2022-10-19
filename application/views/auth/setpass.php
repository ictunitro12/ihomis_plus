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
				<script src="<?php echo base_url();?>assets/vendors/jquery-ui-dist/js/jquery-ui.min.js"></script>
  </head>
  <body class="c-app flex-row align-items-center align-items-center">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card-group">
		  <div class="card text-white bg-success py-7 d-md-down-none" style="width:50%">
              <div class="card-body text-center">
                <div>
				<h3>Department of Health</h3>
				<br>
				 <img src ="<?php echo base_url();?>/assets/img/DOHbrand.png" width="180px"; height="180px;"></img>
				 <br>
				 <br>
				<span>UNIVERSAL HEALTH CARE INFORMATION SYSTEM</span>
				<br>
				
				<cite>&copy; version 1.0</cite>
                </div>
              </div>
            </div>
				<div class="card p-4">
				<div class="text text-success h4">Set password!</div>
				<div class="card-body">
				<h3 class="text text-success">
					 <div class="h5 text-success"> <i class="fa fa-user"></i>  Hi ,<?php echo $username;?></div>
				</h3>
				<hr>
				<form id ="frmsetPass">
					<div class="row">
						<div class="alert alert-success"  id="msg-alert"  role="alert">
							<i class="fa fa-check fa-lg"></i> <span id="message"></span>
						</div>
					  <div class="col-md-12">
							 New password:
							<input type="password" name="password" id="password" class="form-control form-control-lg mb-1" placeholder="New password">
					  </div>
						<div class="col-md-12">
							 Confirm password:
							<input type="password" name="password_confirm" id="password_confirm" class="form-control form-control-lg mb-1" placeholder="Confirm password">
							<input type="hidden" name="actCode" id="actCode" value="<?php echo $this->uri->segment(3);?>" >
					  </div>
						<div class="col-md-12">
							  <button type="submit" class="btn btn-success btn-inline btn-block btn-lg btn-ladda" data-style="zoom-in"><i class="fa fa-check"></i> Submit</button>
					   </div>	
					</div>
			   </form>
		
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		</form>

    <script src="<?php echo base_url();?>assets/vendors/coreui/coreui/js/coreui.bundle.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/ladda/js/spin.min.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/ladda/js/ladda.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/loading-buttons.js"></script>
	<script src="<?php echo base_url();?>assets/vendors/coreui/icons/js/svgxuse.min.js"></script>
	 <script src="<?php echo base_url()?>assets/scripts/auth/setPassword.js"></script>
  </body>
</html>