
	<div class="card card-accent-success col-md-6">
						
	<div class="card-body">
	<div class="box-body box-profile">
	<div class="h3 profile-username text-center text-success" id="facilityname"><?php echo $info->hhosname;?></div>
	<div class="h6 text-center text-success" id="hfhudcode"><?php echo $info->newfhudcode;?></div>
	<ul class="list-group">
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-list"></i>&nbsp ABBREVATION:</b> 
	<a class="text-center text text-success"><?php echo $info->hhosabbr;?></a>
	</li>	
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-bed"></i>&nbsp BED CAPACITY:</b>
	<a class="text-center text text-success">&nbsp 	<?php echo $info->bedcap;?><small>/Beds</small></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-hospital-o"></i>&nbsp TYPE:</b>
	<a class="text-center text text-success">&nbsp <?php if($info->hservcap=="GL1"){ echo "GENERAL-LEVEL 1";}elseif($info->hservcap=="GL2"){ echo "GENERAL-LEVEL 2";}elseif($info->hservcap=="GL3"){ echo "GENERAL-LEVEL 3";}  ?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-user"></i>&nbsp OWNERSHIP:</b>
	<a class="text-center text text-success">&nbsp <?php echo strtoupper($info->howner_name);?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-user-md"></i>&nbsp SPECIALTY:</b>
	<a class="text-center text text-success">&nbsp <?php echo $info->hspecial_name;?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-map-o"></i>&nbsp STREET:</b>
	<a class="text-center text text-success" >&nbsp <?php echo $info->hhosstr;?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-map-o"></i>&nbsp REGION:</b>
	<a class="text-center text text-success">&nbsp <?php echo $info->regname;?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-map"></i>&nbsp PROVINCE:</b>
	<a class="text-center text text-success">&nbsp <?php echo $info->provname;?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-map-o"></i>&nbsp CITY:</b>
	<a class="text-center text text-success">&nbsp <?php echo $info->ctyname;?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp TELEPHONE/MOBILE:</b>
	<a class="text-center text text-success">&nbsp <?php echo $info->telno;?></a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-envelope"></i>&nbsp EMAIL ADDRESS:</b>
	<a class="text-center text text-success">&nbsp <?php echo $info->hhosemailadd;?></a>
	</li>
	</ul>
	</div>
	</div>
	</div>
			