<div class="card card-accent-success">
		<div class="card-body">
		<h5 class="text text-success"><i class="fa fa-user-circle-o"></i> Profile</h5>
			<div class="box-body box-profile">
		
				 <img id="patientPhoto" class="img-fluid img-thumbnail rounded mx-auto d-block mb-1"  onclick="enlargeImage()"; style="cursor:pointer;" width="160px"  loading="lazy" src="<?php echo base_url() ;?>assets/img/avatars/none.png"></img>
				
				 <div class="profile-username text-center text-success h6" id="patientname"></div>
				<div class="list-group list-group-flush">
					<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-user fa-sm"></i>&nbsp Hospital No: <a class="pull-right text text-success" id ="hpercode">N/A</a></div> 
					</div>	
					<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-venus-mars fa-sm"></i>&nbsp Sex: <a class="pull-right text text-success" id="sex">N/A</a></div>
					</div>
					<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-intersex fa-sm"></i>&nbsp Civil status: <a class="pull-right text text-success" id="civilstatus">N/A</a></div>
					</div>
					<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-calendar fa-sm"></i>&nbsp BirthDate:<a class="pull-right text text-success" id="dateofbirth">N/A</a></div>
					</div>
					<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-venus-mars fa-sm"></i>&nbsp Age:<a class="pull-right text text-success" id="age">N/A</a></div>
					<input type="hidden" name="patAge" id ="patAge">
					</div>
					<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-map fa-sm"></i>&nbsp Place of Birth: <a class="pull-right text text-success" id="placeofbirth">N/A</a></div>
					</div>
				</div>
			</div>
		</div>
</div>

<div class="card card-accent-success">
		<div class="card-body">
		<h5 class="text text-success"><i class="fa fa-map"></i> Demographic</h5>
			<div class="box-body box-profile">
				<div class="list-group list-group-flush">
				<div class="list-group-item">
					<div class="text text-success"><i class="fa fa-map-signs"></i>&nbsp Street: <div class="pull-right text text-success" id ="str">N/A</div></div> 
				</div>	
				<div class="list-group-item">
					<div class="text text-success"><i class="fa fa-map-pin"></i>&nbsp Region: 	<div class="pull-right text text-success" id="region">N/A</div></div>
				</div>
				<li class="list-group-item">
					<div class="text text-success"><i class="fa fa-map-o"></i>&nbsp Province: <div class="pull-right text text-success" id="province">N/A</div></div>
				</li>
				<div class="list-group-item">
					<div class="text text-success"><i class="fa fa-map-marker"></i>&nbsp City: <div class="pull-right text text-success" id="city">N/A</div></div>
				</div>
				<div class="list-group-item">
					<div class="text text-success"><i class="fa fa-map-marker"></i>&nbsp Barangay: <div class="pull-right text text-success" id="brgy">N/A</div></div>
				</div>
				</div>
			</div>
		</div>
</div>
	
<div class="modal" id="modalEnlarge" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			
			<div   class="modal-body">
			<h4 class="modal-title text-success">
					<i class="fa fa-camera"></i>&nbsp 
					Photo 
				</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div id="ImageEnlarge" class="img-fluid img-thumbnail rounded mx-auto d-block"></div>
			</div>
		
		</div>
	</div>
</div>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>