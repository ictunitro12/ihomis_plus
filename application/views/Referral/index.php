<div class="row">
	<div class="col-md-9">
		<div id="loadView"></div>
	</div>
	<div class="col-md-3">
		<div class="card card-accent-success">
			<div class="card-body">
				<h4 class="text-center text-success"><i class="fa fa-link"></i> <?php echo $header;?></h4>
				<hr></hr>
					<button  href ="javascript:void(0);" id="btnRefInbox"  class="btn btn-pill btn-block btn-outline-success position-relative "><i class="fa fa-inbox fa-2x"></i></br> Inbox
								<span id="referNotif" class="badge position-absolute bg-danger text-white"></span> <small>(Incoming patient/s)</small>
					</button>
					<a  href ="javascript:void(0);" id="btnRefOutbox"  class="btn  btn-block btn-pill btn-outline-success"><i class="fa fa-download fa-2x"></i></br> Outbox <small>(Outgoing patient/s)</small></a>
					<a  href ="javascript:void(0);" id="btnReceived"  class="btn  btn-block btn-pill btn-outline-success"><i class="fa fa-check" aria-hidden="true"></i></br>Accept <small>(Received patient/s)</small></a>
					<a  href ="javascript:void(0);" id="btnStatus"  class="btn  btn-block btn-pill btn-outline-success"><i class="fa fa-bar-chart fa-2x"></i></br>Status <small>(Status of patient/s)</small></a>
					<a  href ="javascript:void(0);" id="btnReports"  class="btn  btn-block  btn-pill btn-outline-success"><i class="fa fa-sync fa-2x"></i></br>Report<small>(Referral report/s)</small></a>
					<button  href ="javascript:void(0);" id="btnHospital"  class="btn  btn-block btn-pill btn-outline-success"><i class="fa fa-hospital fa-2x"></i></br>Available <small>(Online Hospital/s)</small></button>
			</div>
		</div>
	</div>
</div>
<input name="fhudcode" id="fhudcode" type="hidden" value="<?php echo  FacilityInfo()->newfhudcode;?>">
<script src="<?php echo base_url()?>assets/scripts/referral/referral.js"></script>
<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>
<script src="<?php echo base_url()?>assets/scripts/referral/receivedreferral.js"></script>