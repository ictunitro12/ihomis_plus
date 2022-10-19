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
		<link rel="stylesheet" type="text/css"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css" rel="stylesheet">
  </head>
  <body class=" align-items-center">



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
            <h2 class="text text-success">
				<i class="fa fa-user"></i> Hi , <div class="h4 text-success"><?php echo $username;?></div>
			</h2>
			<hr>
                <p class="text-success">Click the button below</p>
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-info btn-ladda btn-block btn-lg"  data-style="zoom-in" type="button"><i class="fa fa-key"></i> Set your password now.</button>
                  </div>	
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
	
    <!--<![endif]-->
  </body>
</html>