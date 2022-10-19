<div class="card card-accent-success">

		<div class="card-body">
		<div class="h4 text text-success"><i class="fa fa-medkit"></i> Nurse Information</div>
			<div class="box-body box-profile">
				 <img id="NurseImage"class="img-fluid img-thumbnail rounded mx-auto d-block mb-1" width="200px"  src="" alt="User profile picture">
				 <h5 class="profile-username text-center text-success" id="nursename"></h5>
				<ul class="list-group">
				<li class="list-group-item">
				<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp Employee ID:</b> 
				<a class="pull-right text text-success" id ="empid">N/A</a>
				</li>						
				<li class="list-group-item">
				<b class="text text-success"><i class="fa fa-venus-mars"></i>&nbsp Sex:</b>
				<a class="pull-right text text-success" id="sex">N/A</a>
				</li>
	
				<li class="list-group-item">
				<b class="text text-success"><i class="fa fa-users"></i>&nbsp Department:</b> 
				<a class="pull-right text text-success" id ="deptname">N/A</a>
				</li>
				<li class="list-group-item">
				<b class="text text-success"><i class="fa fa-chevron-up"></i>&nbsp Position:</b> 
				<a class="pull-right text text-success" id ="postitle">N/A</a>
				</li>
				</ul>
			</div>
		</div>
	<div class="card-footer"></div>
	<input id ="nurseID" type="hidden" value="<?php echo $this->ion_auth->user()->row()->id;?>">
</div>
<script src="<?php echo base_url()?>assets/scripts/nurse/nurse.js"></script>
	<script type="text/javascript">
	$(document).ready(function()
	{	var nurseID= $("#nurseID").val();

		NurseInformation(nurseID);	
	});
	</script>