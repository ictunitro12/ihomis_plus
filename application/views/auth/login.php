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
		<link rel="stylesheet" href="<?php echo base_url()?>assets/plugin/pace/pace.css">
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

<style>
.wrap {
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

button::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}
</style> 
  <body class="c-app flex-row align-items-center">
  <div id="particles-js"></div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card-group ">
		  <div class="card text-success bg-white py-6 d-md-down-none" style="width:50%">
              <div class="card-body text-center">
                <div>
				<h5>  <img src ="<?php echo base_url();?>assets/img/DOHbrand.png" width="40px"; height="40px";></img> Department of Health</h5>
				<br>
				 <img src ="<?php echo base_url();?>assets/img/iHOMIS.png" width="250px"; height="250px";></img>
				 <br>
				 <br>
				 <img src ="<?php echo base_url();?>assets/img/phiclogo.png" width="30px"; height="30px";></img>
				 <img src ="<?php echo base_url();?>assets/img/phic.png" width="30px"; height="30px";></img>
				 <img src ="<?php echo base_url();?>assets/img/coa.png" width="30px"; height="30px";></img><span></span>
				<br>
				
				<cite>&copy; version 1.0</cite>
                </div>
              </div>
            </div>
            
            <div class="card p-4 ">
            
			<div class="card-body ">
            <h1 class="text text-success">
				<i class="fa fa-lock"></i> Login
			</h1>
                <p class="text-success">Sign In to your account</p>
                <div hidden id="message" class="align-middle" role="alert"></div>
				<form id="formLogin" name="formLogin" method="POST"> 
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
						<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user"></use>
                      </svg></span></div>
                  <input class="form-control form-control-lg" type="text" id ="identity" name="identity" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <svg class="c-icon">
						<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-lock-locked"></use>
                      </svg></span></div>
                  <input class="form-control form-control-lg" type="password"   id ="password" name="password" placeholder="Password">
                </div>
                  <input  type="hidden" name="remember" id="remember"  value="1">
			
                <div class="row ">
                  <div class="col-md-12 ">
                    <button type="submit" class="btn btn-outline-success btn-ladda btn-block btn-lg rounded-pill"  data-style="zoom-in" type="button"><i class="fa fa-key"></i> Login</button>
                  </div>	
                </div>
				</form>
				<div>
					 <div class="clearfix">
						 <a href="<?php echo base_url();?>Auth/Register" class="pull-right text-success"><i class="fa fa-user-circle"></i> Create Account</a>
						 <a href="#" class="pull-left text-success"><i class="fa fa-info-circle"></i> Terms and Conditions</a>
					</div>
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
	<script src="<?php echo base_url()?>assets/plugin/pace/pace.js"></script>
    <!--<![endif]-->
  </body>
</html>