<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="iHOMIS Plus">
    <meta name="author" content="Department of Health">
    <meta name="keyword" content="iHOMIS Plus">
    <title>UHICS</title>
    <!-- Main styles for this application-->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/font-awesome/css/font-awesome.min.css">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/vendors/fullcalendar/main.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/vendors/fullcalendar/main.js"></script>

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
 
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
		
          <div class="card p-4">
		  <div class="card-header">
			<div class=" h3 card-title text text-success">
				<i class="fa fa-phone"></i> TeleMed
			</div>
			</div>
			<div class="card-body">
				<div id="calendar">
				<!-- Placeholder for callendar -->
				</div>
		
				<div>
					 <div class="clearfix">
						 <a href="<?php echo base_url();?>Auth/Register" class="pull-right text-success"><i class="fa fa-user-circle"></i> Create Account</a>
						 <a href="#" class="pull-left text-success"><i class="fa fa-info-circle"></i> Terms and Conditions</a>
					</div>
				</div>
              </div>
			  <div class="card-footer"></div>
            </div
        </div>
      </div>
    </div>
    <script src="<?php echo base_url();?>assets/vendors/coreui/coreui/js/coreui.bundle.min.js"></script>
    <!--[if IE]><!-->
	<script>
	document.addEventListener('DOMContentLoaded', function () {
   var calendarEl = document.getElementById('calendar');
   var calendar = new FullCalendar.Calendar(calendarEl, {
     initialView: 'dayGridMonth'
   });
   calendar.render();
	});</script>
    <!--<![endif]-->
  </body>
</html>