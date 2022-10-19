<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br/><small>User Profile</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-bed fa-2x"></i><br><small>Room/Bed</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-user-md fa-2x"></i><br /><small>Physician</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-stethoscope fa-2x"></i><br /><small>Diagnosis</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-users fa-2x"></i><br /><small>Account</small></a>
		</li>
		<li>
			<a href="#step-6"><i class="fa fa-money fa-2x"></i><br /><small>Payment</small></a>
		</li>
	</ul>
<div>
	<div id="step-1">
	<form name="frmPatientProfile" enctype="multipart/form-data" id="frmPatientProfile">
		<input id="formIden" type="hidden" name="formIden">
		<input name="hpercode" type="hidden" id ="hpercode" >			
		<?php echo ViewPatientProfile();?>
	</form>
	</div>
	<!--step2-->
	<div id="step-2" class="">
	<div class="h3 text text-success"><i class="fa fa-bed"></i>&nbsp ACCOMMODATION</div>
		<form id="form-step-2" role="form">
		<p>
		<div  class="row">
		<div  class="col-4">
			<div  class="c-callout c-callout-success"><small class="text-muted">WARD/S </small>
				<div class="text-value-lg text-success" id="countWard">0<div  class="small text-value-md"></div></div>
			</div>
		</div>
		<div class="col-4">
			<div class="c-callout c-callout-success"><small class="text-muted">ROOM/S </small>
				<div class="text-value-lg text-success" id="countRoom">0<div class="small text-value-md"></div></div>
			</div>
		</div>
		<div class="col-4">
			<div class="c-callout c-callout-success"><small class="text-muted">BED/S </small>
				<div class="text-value-lg text-success" id="countBed">0<div  class="small text-value-md"></div></div>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">				
					<label class="col-form-label  text-default mb-1">PAY/SERVICE:</label>
						<select class="form-control form-control-mb" name="typaccom" id="typaccom">
							<option value="">TYPE</option>
							<option value="ADPAY">PAY</option>
							<option value="SERVI">SERVICE</option>
						</select>
					</div>
					<div class="col-md-6">
					<label class="col-form-label  text-default mb-1">TYPE OF SERVICE:</label>
						<select class="form-control form-control-mb" name="selTos"  id="selTos">
							<option value="">SERVICE</option>
						</select>
					</div>					
				</div>
			</div>
			<div class="col-md-6">
				<label class="col-form-label  text-default mb-1">WARD:</label>
				<select class="form-control form-control-mb" data-width="100%" name="selWar" id="selWar">
				<option value="">WARD</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
					<label class="col-form-label  text-default mb-1">MODE:</label>
					<select class="form-control form-control-mb" name="modaccom" id="modaccom">
						<option value="">Mode</option>
						<option value="AMBUL">Ambulance</option>
						<option value="FWAMB">Fixed Wiring Ambulance</option>
						<option value="GRAMB">Ground Ambulance</option>
						<option value="HLAMB">Helicopter Ambulance</option>
						<option value="OTHER">Other Mode of Transportation</option>
						<option value="UNKNO">Unknown Mode of Transportation</option>
						<option value="WILET">Walkin following non Ambulance Law enforcement</option>
						<option value="WIPUB">Walkin following transport to public transportation</option>
						<option value="WIPRI">Walkin following transport to private transportation</option>
						<option value="WINSP">Walkin following not otherwise specified</option>
					</select>
			</div>
			<div class="col-md-6">
					<label class="col-form-label  text-default mb-1">ROOM:</label>
					<select class="form-control form-control-mb" data-width="100%" name="selRoom" id="selRoom" disabled>
						<option value=""> Search</option>
					</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label class="col-form-label  text-default mb-1">INSURANCE:</label>
			<select class="form-control" name="insurance" id="insurance">
				<option value="">INSURANCE</option>
				<option value="01">SSS Member</option>
				<option value="02">GSIS Member</option>
				<option value="03">Indigent Member</option>
				<option value="04">Self Employed Member</option>
				<option value="05">OFW Member</option>
				<option value="06">Others Member</option>
				<option value="07">Owwa Member</option>
				<option value="08">Retiree/Pensioner - SSS Member</option>
				<option value="09">Retiree/Pensioner - GSIS Member</option>
				<option value="10">Retiree/Pensioner - Military Member</option>
				<option value="11">Retiree/Pensioner - Judiciary Member</option>
				<option value="12">PVAO Member</option>
				<option value="13">SSS Dependent</option>
				<option value="14">GSIS Dependent</option>
				<option value="15">Indigent Dependent</option>
				<option value="16">Self Employed Dependent</option>
				<option value="17">OFW Dependent</option>
				<option value="18">Others Dependent</option>
				<option value="19">Owwa Dependent</option>
				<option value="20">Retiree/Pensioner - SSS Dependent</option>
				<option value="21">Retiree/Pensioner - GSIS Dependent</option>
				<option value="22">Retiree/Pensioner - Military Dependent</option>
				<option value="23">Retiree/Pensioner - Judiciary Dependent</option>
				<option value="24">PVAO Dependent</option>
			</select>
			</div>
			<div class="col-md-6">
				<label class="col-form-label  text-default mb-1">BED:</label>
			<select class="form-control form-control-mb" data-width="100%" name="selBed" id="selBed" disabled>
				<option value="">Search</option>
			</select>
			</div>
		</div>
		</form>
	
	</div>
	
	
	<!--step-2-->
	<!--step-3-->
	<div id="step-3" class="">
	<form id="form-step-3" role="form">
	<div class="box box-primary">
	<div class="h3 text text-success"><i class="fa fa-user-md"></i>&nbsp PHYSICIAN</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-form-label  text-default mb-1">ADMITTING PHYSICIAN:</div>
			<select class="form-control col-md-12" data-width="100%" name="selDoc_doc" id="ADMIT">
				<option value=""> </option>
			</select>
		</div>	
		<div class="col-md-12">
			<label class="form-label">CONSULTING PHYSICIAN:</label>
			<select class="form-control col-sm-12" data-width="100%" name="selDoc1_doc" id="CONSU">
			<option value=""></option>
			</select>
		</div>
		<div class="col-md-12">
			<label class="form-label">ATTENDING PHYSICIAN:</label>
			<select class="form-control col-sm-12" data-width="100%" name="selDoc2_doc" id="ATTEN">
			<option value=""></option>
			</select>
		</div>
	</div>
	</div>
	</form>
	
	</div>
	<!--step-3-->
	<!-- /Step 4-->
	<div id="step-4" class="">
		<form id="form-step-4" role="form" data-toggle="validator">
		<legend class="text text-success with-border"><i class="fa fa-stethoscope"></i>&nbsp DIAGNOSIS</legend>
		<div class="row">
			<div class="col-md-12">
			<label class="form-label">ADMISSION DIAGNOSIS:</label>
			<textarea name ="AdmissionDiag" id="AdmissionDiag" type="text"  Placeholder= "Admission Diagnosis"class="form-control"></textarea>
			</div>
			<div class="col-md-12">
			<label class="form-label">REASON FOR ADMISSION:</label>
			<textarea name ="ReasonDiag" id="ReasonDiag" type="text" Placeholder= "Reason Diagnosis" class="form-control"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
		<label class="form-label">&nbsp HAS TB?:</label>
			<select class="form-control col-sm-12" data-width="100%" name="tbind" id="tbind">
				<option value="">Select</option>
				<option value="Y">YES</option>
				<option value="N">NO</option>
			</select>
		</div>
	
		<div class="col-md-6">
			<label class="form-label">&nbsp IS PREGNANT?:</label>
			<select class="form-control col-sm-12" data-width="100%" name="pind" id="pind">
				<option value=""> Select</option>
				<option value="Y">YES</option>
				<option value="N">NO</option>
			</select>
		</div>
		</div>
		</form>
	</div>
	<!-- /Step 4-->

	<!-- /Step 5-->
	<div id="step-5" class="">
	<div id="form-step-6" role="form">
	<div class="row">
	<legend class="text text-success with-border"><i class="fa fa-check"></i>&nbsp RESPONSIBLE FOR THE ACCOUNT</legend>

		<div class="col-md-12">
			<label class="form-label">FULLNAME:</label>
			<input type ="text" class="form-control form-control-xs" placeholder="FULLNAME" name="rfname" id="rfname">
		</div>
		<div class="col-md-12">
		<label class="form-label">CONTACT NO:</label>
			<input type ="text" class="form-control" placeholder="CONTACTNO"  name="rcontact" id="rcontact">
		</div>
		<div class="col-md-12">
		<label class="form-label">COMPLETE ADDRESS:</label>
			<textarea class="form-control" name="raddress" Placeholder="COMPLETE ADDRESS" id="raddress"></textarea>
		</div>
		<div class="col-md-12">
		<label class="form-label">RELATION:</label>
			<select name="rrelation" id="rrelation" class="form-control">
			<option value="">Select</option>
			<option value="MOTHE">Mother</option>
			<option value="FATHE">Father</option>
			<option value="SISTE">Sister</option>
			<option value="BROTH">Brother</option>
			<option value="AUNT">Aunt</option>
			<option value="UNCLE">Uncle</option>
			<option value="NEPHE">Nephew</option>
			<option value="NIECE">Niece</option>
			<option value="COUSI">Cousin</option>
			<option value="SPOUS">Spouse</option>
			<option value="FHEAD"></option>
			</select>
	</div>
	</div>
		<div class="row">
	<legend class="text text-success with-border"><i class="fa fa-user"></i>&nbsp INFORMANT</legend>
	<div class="col-md-12">
	<label class="form-label">FULLNAME:</label>
	<input type ="text" class="form-control form-control-xs" placeholder="FULLNAME" name="inffname" id="inffname">
	</div>
	<div class="col-md-12">
		<label class="form-label">CONTACT NO:</label>
			<input type ="text" class="form-control" placeholder="CONTACT NO"  name="infcontact" id="infcontact">
		</div>
	<div class="col-md-12">
	<label class="form-label">COMPLETE ADDRESS:</label>
	<textarea class="form-control" name="infaddress" Placeholder="COMPLETE ADDRESS" id="infaddress"></textarea>
	</div>
	<div class="col-md-12">
		<label class="form-label">RELATION:</label>
			<select name="infrelation" id="infrelation" class="form-control">
				<option value="">Select</option>
				<option value="MOTHE">Mother</option>
				<option value="FATHE">Father</option>
				<option value="SISTE">Sister</option>
				<option value="BROTH">Brother</option>
				<option value="AUNT">Aunt</option>
				<option value="UNCLE">Uncle</option>
				<option value="NEPHE">Nephew</option>
				<option value="NIECE">Niece</option>
				<option value="COUSI">Cousin</option>
				<option value="SPOUS">Spouse</option>
				<option value="FHEAD"></option>
			</select>
	</div>
	</div>
	</div>
	</div>
	<!-- /Step 5-->
	<!-- /Step 6-->
	<div id="step-6" class="">
	<div id="form-step-7" role="form" data-toggle="validator">
		<legend class="text text-success with-border"><i class="fa fa-check"></i>&nbsp SOURCE OF PAYMENT</legend>
		<div class="form-group">
		<label class="form-label">SOURCE OF PAYMENT(1):</label>
			<select name="sop1" id="sop1"class="form-control select2">
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
		<div class="form-group">
		<label class="form-label">SOURCE OF PAYMENT(2):</label>
			<select name="sop2" id="sop2"class="form-control">
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
			<div class="form-group">
			<label class="form-label">SOURCE OF PAYMENT(3):</label>
				<select name="sop3" id="sop3" class="form-control">
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
		<div class="form-group">
		<label class="form-label">CASE:</label>
			<select name="case" id="case" class="form-control">
				<option value="">Select</option>
				<option value="HC">House Case</option>
				<option value="PC">Private Case</option>
			</select>
		</div>
	</div>
	</div>
	<!-- /Step 6-->
</div>
</div>
