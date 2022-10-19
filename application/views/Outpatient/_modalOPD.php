	<div class="modal fade" id="ModalPatientInformation" 	role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
	<h3 class="text text-success"><i class="fa fa-user-circle"></i> Patient Information</h3>
	<div class="box-body box-profile">
	<img id="patientPhoto"class="img-fluid bg-success img-thumbnail rounded mx-auto d-block mb-1" width="200px"  src="" alt="User profile picture">
	<div class="h5 profile-username text-center text-success" id="patname"></div>
	<div class="h6 text-center text-success" id="hpercode"></div>
	<ul class="list-group">
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-address-book"></i>&nbsp CASE NUMBER:</b> 
	<a class="pull-right text text-success" id ="casenum">N/A</a>
	</li>	
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-calculator"></i>&nbsp ACCOUNT:</b>
	<a class="pull-right text text-success" id="accountno">N/A</a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-calendar"></i>&nbsp AGE:</b>
	<a class="pull-right text text-success" id="patage">N/A</a>
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-bed"></i>&nbsp ROOM:</b>
	<a class="pull-right text text-success" id="patwrb">N/A</a>
	<input type="hidden" name="patAge" id ="patAge">
	</li>
	<li class="list-group-item">
	<b class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp DIAGNOSIS:</b>
	<a class="pull-right text text-success" id="patdiag">N/A</a>
	</li>
	</ul>
	<br>
	<button id="btnCSS" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-file-pdf-o"></i> OPD Profile</button>
	<button id="btnConsent" class="btn btn-outline-success  btn-ladda" data-style="zoom-in"><i class="fa fa-file"></i> Consent</button>
	</div>
	</div>
	</div>
	</div>
	</div>
	<script src="<?php echo base_url()?>assets/scripts/outpatient/index.js"></script>