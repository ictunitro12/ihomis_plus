<body class="c-app header-fixed c-light-theme">
<div class=" c-sidebar c-sidebar-dark  c-sidebar-fixed c-sidebar-lg-show"   role="navigation" id="sidebar">
      <div class="c-sidebar-brand  d-xs-down-none">
        <div class="c-sidebar-brand-full" width="40" height="40" alt="">
		  <div class="text text-success">
		 <small class="row justify-content"><img src = "<?php echo base_url();?>assets/img/iHOMIS.png"  class="img-fluid rounded mx-auto d-block" width="35px"; height="35px";></img>   &nbsp Integrated Hospital Operations & </br>  &nbsp Management Information System</small>
		  </div>	
        </div>
        <div class="c-sidebar-brand-minimized" width="46" height="40" alt="">
         DOH
        </div>
      </div> 

      <ul id="myMenu"  class="c-sidebar-nav">
	    <li class="c-sidebar-nav-title">
			<div class="text text-center  h6"><small><i class="fa fa-hospital"></i> <?php echo FacilityInfo()->hhosname; ?></small></div>
		</li>
		<?php 
		if(isset($this->ion_auth->user()->row()->id))
		{
			$user = $this->ion_auth->user()->row()->id;
			ViewMenu($user,'dash');
			ViewMenu($user,'trans');
			ViewMenu($user,'lib');
			ViewMenu($user,'rep');
			ViewMenu($user,'admin');
		}?>
      </ul>
	  <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>
 <div class="c-wrapper">
         <header class="c-header c-header-light c-header-fixed  bg-gradient-success">
<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
<svg class="c-icon c-icon-lg">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-menu"></use>
</svg>
</button><a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
<svg width="118" height="46" alt="CoreUI Logo">
<use xlink:href=<?php echo base_url();?>/assets/img/DOHbrand.png></use>
</svg></a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
<svg class="c-icon c-icon-lg">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-menu"></use>
</svg>
</button>

<ul class="c-header-nav mfs-auto">
	<li class="c-header-nav-item px-3 c-d-legacy-none">
	<button class="c-class-toggler c-header-nav-btn"  type="button" id="header-tooltip" data-target="body"  data-toggle="c-tooltip" data-placement="bottom" title="Toggle Light/Dark Mode" onclick="toggleLayoutTheme()";> 
		<svg class="c-icon c-d-dark-none">
		<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-moon"></use>
		</svg>
		<svg class="c-icon c-d-default-none">
		<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-sun"></use>
		</svg>
	</button>
	</li>
</ul>

<ul class="c-header-nav">
<li class="c-header-nav-item dropdown d-md-down-none mx-2"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<svg class="c-icon">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-bell"></use>
</svg><span class="badge badge-pill badge-danger">5</span></a>
<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
<div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div><a class="dropdown-item" href="#">
<svg class="c-icon mfe-2 text-success">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user-follow"></use>
</svg>Alerts</a><a class="dropdown-item" href="#">
</div>
</li>

<li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
<div class="c-avatar"><img class="c-avatar-img" src="<?php echo base_url();?>assets/img/avatars/none.png" alt="user@email.com"></div>
</a>
<div class="dropdown-menu dropdown-menu-right pt-0">

<div class="dropdown-header bg-light py-2" id="loginName"><strong>Account</strong></div>
<a class="dropdown-item" href="<?php echo site_url('Auth/Profile');?>">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-user"></use>
</svg> Profile</a>
<a class="dropdown-item" href="#">
<svg class="c-icon mfe-2">
<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-settings"></use>
</svg> Settings</a>

<div class="dropdown-divider"></div>
<a class="dropdown-item" href="<?php echo site_url('Auth/logout'); ?>">
	<svg class="c-icon mfe-2">
	<use xlink:href="<?php echo base_url();?>assets/vendors/coreui/icons/svg/free.svg#cil-account-logout"></use>
	</svg> 
Logout </a>
</div>
</li>

</ul>
<div class="c-subheader justify-content-between px-3">
<?php echo $breadcrumbs;?>
</div>
</header>
<div class="c-body">
	<main  class="c-main">
		<div class="container-fluid">