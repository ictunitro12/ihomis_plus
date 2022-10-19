<div id="emergencyWizard">
<ul>
<li>
<a href="#step-1"><i class="fa fa-user fa-2x"></i><br/><small>Patient Information</small></a>
</li>
<li>
<a href="#step-2"><i class="fa fa-stethoscope fa-2x"></i><br /><small>Consultation</small></a>
</li>
<li>
<a href="#step-3"><i class="fa fa-money fa-2x"></i><br /><small>Payment</small></a>
</li>

</ul>
<div>
<div id="step-1">
	<form name="frmPatientProfile" enctype="multipart/form-data" id="frmPatientProfile">
		<input id="formIden" type="hidden" name="formIden">
		<input name="hpercode" id ="hpercode" type="hidden"> 
		<?php echo ViewPatientProfile();?>
	</form>
</div>
<!--step2-->
<div id="step-2" class="">
	<form id="form-step-2" role="form" data-toggle="validator">
		<div class="h4 text-success" ><i class="fa fa-stethoscope"></i>&nbsp Triage/Consultation</div>
		<div class="row">
			<div class="col-md-6 border-right">
				<div class="row">
					<div class="col-md-6">
						<label class="form-label">Registration Date:</label>
						<input type="datetime-local" name="dateRegistration" id="dateRegistration" class="form-control" required>
					</div>
					<div class="col-md-6">
						<label class="form-label">Brought by:</label>
						<select class="form-control" name="selBro"  id="selBro" required>
							<option value="">Select</option>
							<option value="SELF">Self</option>
							<option value="POLIC">Police</option>
							<option value="RELAT">Relative</option>
							<option value="FAMEM">Family Member</option>
							<option value="AMBUL">Ambulance</option>
							<option value="NEIGH">Neighbor</option>
							<option value="UNKNO">Unknown</option>
							<option value="FREND">Friend</option>
							<option value="OTHRS">Others</option>
						</select>
					</div>
					<div class="col-md-12 mb-1">
						<label class="col-form-label text-default mb-1">Patient Age:</label>
						<div class="row">
							<div class="col-md-3">
								<input class="form-control form-control-md" name="patage" id="patage" type="number" placeholder="year(s)" readonly>
							</div>
							<div class="col-md-3">
								<input class="form-control form-control-md" name="patagemo" id="patagemo" type="number" placeholder="month(s)" readonly>
							</div>
							<div class="col-md-3">
								<input class="form-control form-control-md" name="patagedy" id="patagedy" type="number" placeholder="day(s)" readonly>
							</div>
							<div class="col-md-3">
							<input class="form-control form-control-md" name="patagehr" id="patagehr" pattern="[0-9]" type="number" step="1" min="1" placeholder="hour(s)" readonly>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="form-label">Notified:</label>
						<select class="form-control " name="selNotif"  id="selNotif" required>
							<option value="">Select</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
							<option value="X">N/A</option>
						</select>
					</div>
					<div class="col-md-6">
						<label class="form-label">Condition on Arrival:</label>
						<select class="form-control form-control-mb" name="selCondArrival"  id="selCondArrival" required>
							<option value="">Select</option>
							<option value="GOOD">Good</option>
							<option value="FAIR">Fair</option>
							<option value="POOR">Poor</option>
							<option value="SHOCK">Shock</option>
							<option value="HEMOR">Hemorrhagic</option>
							<option value="DOA">Dead On Arrival</option>
							<option value="COMATOSE">Comatose</option>
						</select>
					  
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<label class="form-label"> Type of Service:</label>
						<select class="form-control" name="selTos"  required id="selTos"></select>
					</div>
					<div class="col-md-6">
						<label class="form-label">Resident Doctor:</label>
						<select class="form-control form-control-mb-1" name="selDoc_doc"  id="selDoc_doc"></select>
					</div>
					<div class="col-md-6">
						<label class="form-label">Case:</label>
						<select class="form-control form-control-mb-1" name="selCase"  id="selCase" required>
						<option value="">Select</option>
							<option value="Y">ER</option>
							<option value="N">Non ER</option>
						</select>
					</div>
				     <div class="col-md-12">
						<label class="form-label">Remarks:</label>
						<textarea  placeholder="Remarks" class="form-control form-control-mb-1" name="remarks"   id="remarks"></textarea>
					</div>
				</div>	
			</div>	
		<div class="col-md-6 border-right">
			<hr>
			<div class="row">
				<div class="col">
					<div class="h4 text-success" ><i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp; For Referral</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label class="form-label" for="refrom_hfhudcode">Referring Faclity:</label>
					<select class="form-control form-control-mb" id="refrom_hfhudcode" name="refrom_hfhudcode"></select>
				</div>
				<div class="col-md-6">
					<label class="form-label" for="reFromReas">Referral Reason:</label>
					<select class="form-control form-control-md" autocomplete="off"  id="reFromReas" name="reFromReas" disabled>
						<option value="">Reason For Referral</option>
						<option value="NOEQP">No equipment available</option>
						<option value="NODOC">No doctor available</option>
						<option value="NOPRO">No procedure available</option>
						<option value="NOLAB">No laboratory available</option>
						<option value="NOROM">No room available</option>
						<option value="SEASO">Seek advise/second opiniion</option>
						<option value="SESPE">Seek specialized evaluation</option>
						<option value="SEFTA">Seek futher treatment appropriate to the case</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<label class="form-label" for="reFromDateTime">Date and Time:</label>
					<input class="form-control form-control-md" name="reFromDateTime" id="reFromDateTime" type="datetime-local" readonly>
				</div>
				<div class="col-md-6">
					<label class="form-label" for="reFromOtherReas">Other Reasons:</label>
					<textarea name="reFromOtherReas" id="reFromOtherReas" type="text" placeholder="Other Referral Reasons" class="form-control" readonly></textarea>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col">
					<div class="h4 text-success" ><i class="fa fa-user-injured"></i>&nbsp; For Accident/Injury</div>
				</div>
			</div>
			<div class="row">			
					<div class="col-md-12">
						<label class="form-label"> Incident date:</label>
						<input type="datetime-local"  name="dateIncident" id="dateIncident" class="form-control">
					</div>
					<div class="col-md-12">
						<label class="form-label"> Place of Incident:</label>
						<textarea class="form-control" data-width="100%" placeholder ="Place of Incident(Address)" name="placeIncident" id="placeIncident"></textarea>
					</div>
			</div>
		</div>
</div>
	</form>
</div>

<!--step-2-->
<!-- /Step 4-->

<div id="step-3" class="">
	<form id="form-step-4" role="form" data-toggle="validator">
	<div class=" h4 text-success"><i class="fa fa-money"></i>&nbsp Payment</div>
	<div class="row">
		<div class="col-md-6">
			<label class="form-label"> Source of Payment(1): </label>
			<select name="sop1" id="sop1" class="form-control">
			<option value="">Select</option>
			<option value="WORCO">Worker's Compensation</option>
			<option value="OTHGO">Other Government Payers</option>
			<option value="SELPA">Self-pay or Personal</option>
			<option value="NOCHA">No charge (free, charity, special research or teaching)</option>
			<option value="MEDIC">PHIC</option>
			<option value="INSUR">Insurance Companies</option>
			<option value="SPONS">Sponsorship</option>
			<option value="HMOIN">Health Maintenance Organization</option>
			<option value="COMPA">Company</option>
			<option value="EMPLO">c/o Employee</option>
			<option value="DOCTR">c/o Doctor</option>
			<option value="CRECA">c/o Credit Card</option>
			</select>
		
	
			<label class="form-label">Source of Payment(2):</label>
		
			<select name="sop2" id="sop2" class="form-control">
				<option value="">Select</option>
				<option value="WORCO">Worker's Compensation</option>
				<option value="OTHGO">Other Government Payers</option>
				<option value="SELPA">Self-pay or Personal</option>
				<option value="NOCHA">No charge (free, charity, special research or teaching)</option>
				<option value="MEDIC">PHIC</option>
				<option value="INSUR">Insurance Companies</option>
				<option value="SPONS">Sponsorship</option>
				<option value="HMOIN">Health Maintenance Organization</option>
				<option value="COMPA">Company</option>
				<option value="EMPLO">c/o Employee</option>
				<option value="DOCTR">c/o Doctor</option>
				<option value="CRECA">c/o Credit Card</option>
			</select>
	
	
			<label class="form-label">Source of Payment(3):</label>
			<select name="sop3" id="sop3"  class="form-control">
				<option value="">Select</option>
				<option value="WORCO">Worker's Compensation</option>
				<option value="OTHGO">Other Government Payers</option>
				<option value="SELPA">Self-pay or Personal</option>
				<option value="NOCHA">No charge (free, charity, special research or teaching)</option>
				<option value="MEDIC">PHIC</option>	
				<option value="INSUR">Insurance Companies</option>
				<option value="SPONS">Sponsorship</option>
				<option value="HMOIN">Health Maintenance Organization</option>
				<option value="COMPA">Company</option>
				<option value="EMPLO">c/o Employee</option>
				<option value="DOCTR">c/o Doctor</option>
				<option value="CRECA">c/o Credit Card</option>
			</select>
		</div>
		</div>
</form>

<!-- /Step 4-->
</div>
</div>
</div>
