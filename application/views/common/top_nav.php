 <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-green layout-top-nav">
<div class="wrapper">
 <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header ">
          <a href="" class="navbar-brand"><span class="logo-mini"><img src="<?php echo base_url()?>assets/dist/img/DOHlogo.bmp" alt="" class="img-circle" height="25" width="25"></span> <small>e</small>Claims</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
		  <li><a href="<?php echo site_url('Eclaims_offline');?>"><i class="fa fa-stethoscope"></i> Claims</a></li>			
		  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search"></i> Search <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo site_url('Eclaims_offline/searchcaserate');?>"><i class="fa fa-th-list"></i> Case Rate</a></li>
				    <li class="divider"></li>
                <li><a href="<?php echo site_url('Eclaims_offline/searchemployer');?>"><i class="fa fa-user"></i> Employer</a></li>
				    <li class="divider"></li>
                <li><a href="<?php echo site_url('Eclaims_offline/searchhospital');?>"><i class="fa fa-user-md"></i> Hospital</a></li>
				    <li class="divider"></li>
              </ul>
          </li>
		   <li><a data-toggle="modal" data-target="#MemberPin"><i class="fa fa-check"></i> Check Member</a></li>	
		   <li><a  data-toggle="modal" data-target="#DoctorPan"><i class="fa fa-user-md"></i> Check Doctor</a></li>
		   <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-o"></i> Reports<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><button  ><i class="fa fa-users"></i> Member</button></li>
				    <li class="divider"></li>
                <li><a href="#"><i class="fa fa-user-md"></i> Doctor</a></li>
				    <li class="divider"></li>
              </ul>
          </li>
		   <li><a href="<?php echo site_url('Auth/logout');?>"><i class="fa fa-sign-out"></i> Logout</a></li>
          </ul>
        </div>
       </div>
      </div>
    </nav>
  </header>
  

