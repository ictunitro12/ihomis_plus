
<div class="row">
	<div class="col-md-2">
	<h5 class="text text-success"><i class="fa fa-user-circle-o"></i> Profile</h5>
	<img id="patientPhoto" class="img-fluid rounded mx-auto d-block" src="<?php echo base_url();?>assets/img/avatars/none.png" onclick="enlargeImage()"; style="cursor:pointer; margin:-4px;" height="140" width="140"  src="fa fa-spinner"></img>
	
	</div>
	<div class="col-md-4">
		<br>
	<h6 class="text text-success"><i class="fa fa-info"></i> Personal Information</h6>
		<table class="table table-sm table-striped table-bordered ">
			<tr>
			<td class="text text-success"><i class="fa fa-vcard-o fa-lg"></i>&nbsp Patient name #: <a class="text-success" id="patientname"></a></td>
			</tr>
			<tr>
			<td class="text text-success"><i class="fa fa-vcard-o fa-lg"></i>&nbsp Hospital #: <a class="text-success" id="hpercode"></a></td>
			
			</tr>
			<tr>
			<td class="text text-success"><i class="fa fa-venus-mars fa-lg"></i>&nbsp Sex: <a class="text-success" id="sex"></a> <i class="fa fa-intersex fa-lg"></i>&nbsp Civil status: <a class="text-success" id="civilstatus">N/A</a>   </td>
			</tr>
			
			<tr>
			<td class="text text-success"><i class="fa fa-calendar-check-o fa-lg"></i>&nbsp BirthDate:<a class="  text-success" id="dateofbirth">N/A</a> &nbsp Age: <a class="text-success" id="age">N/A</a></td>	
			<input type="hidden" name="patAge" id ="patAge">
			</tr>
		</table>
</div>
		<div class="col-md-6">
		<br>
		<h6 class="text text-success"><i class="fa fa-info"></i> Case information</h6>
		<table class="table table-sm table-striped table-bordered">
			<tr>
				<td class="text text-success"><i class="fa fa-arrow-right fa-lg"></i>&nbsp Case #: <a class="text-success" id="casenum"></a></td>
				<td class="text text-success"><i class="fa fa-arrow-right fa-lg"></i>&nbsp Encounter #: <a class="text-success" id="enctr"></a> <i class="fa fa-arrow-right  fa-lg"></i>&nbsp Philhealth:<a class="  text-success" id="phic">N/A</a></td>
			</tr>
			<tr>
				<td class="text text-success"><i class="fa fa-arrow-right  fa-lg"></i>&nbsp Date Entered: <a class="text-success" id="date"></a></td>
				<td class="text text-success"><i class="fa fa-arrow-right  fa-lg"></i>&nbsp Time Entered #: <a class="text-success" id="time"></a></td>
			</tr>
			<tr>
				<td class="text text-success"><i class="fa fa-arrow-right fa-lg"></i>&nbsp Account: <a class="text-success" id="account">N/A</a></td>
				<td class="text text-success" rowspan="2"><i class="fa fa-arrow-right  fa-lg"></i>&nbsp Room #: <a class="text-success" id="room"></a></td>
			</tr>
			<tr>
			<td class="text text-success"><i class="fa fa-arrow-right  fa-lg"></i>&nbsp Diagnosis:<a class="  text-success" id="diag">N/A</a></td>	
			
			</tr>
			
		</table>
		
	</div>
	
	</div>
	<a class="text-success" hidden id="rmaccikey">N/A</a>

<script src="<?php echo base_url()?>assets/scripts/patient/patient_information.js"></script>