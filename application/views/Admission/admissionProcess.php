<div id="smartwizard">
	<ul>
		<li>
			<a href="#step-1"><i class="fa fa-user-circle fa-2x"></i><br><small>Information</small></a>
		</li>
		<li>
			<a href="#step-2"><i class="fa fa-bed fa-2x"></i><br><small>Room/Bed</small></a>
		</li>
		<li>
			<a href="#step-3"><i class="fa fa-user-md fa-2x"></i><br><small>Physician</small></a>
		</li>
		<li>
			<a href="#step-4"><i class="fa fa-stethoscope fa-2x"></i><br><small>Diagnosis</small></a>
		</li>
		<li>
			<a href="#step-5"><i class="fa fa-users fa-2x"></i><br><small>Account</small></a>
		</li>
	</ul>
<div>
	<div id="step-1">
		<form name="frmPatientProfile" enctype="multipart/form-data" id="frmPatientProfile">
			<input id="formIden" type="hidden" name="formIden">
			<input name="hpercode" type="hidden" id ="hpercode">			
			<input name="toecode" type="hidden" id ="toecode" value ="ADM">		
			<?php echo ViewPatientProfile();?>
		</form>
	</div>
	<!--step2-->
	<div id="step-2">		
	<div class="row">
	<div class="col-md-7">
	<div class="h4 text text-success"><i class="fa fa-bed"></i>&nbsp Accomodation</div>
		<form id="form-step-2" role="form">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">				
					<label class="col-form-label  text-default mb-1">Date of Accomodation:</label>
						<input class="form-control form-control-lg" name="dateaccom" id="dateaccom" type="datetime-local">
					</div>
					<div class="col-md-6">				
					<label class="col-form-label  text-default mb-1">Basic/Non Basic:</label>
						<select class="form-control form-control-lg" name="typaccom" id="typaccom">
							<option value="">TYPE</option>
							<option value="ADPAY">NON-BASIC</option>
							<option value="SERVI">BASIC</option>
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
								<input class="form-control form-control-md" name="patagehr" id="patagehr" type="number" placeholder="hour(s)" readonly>
							</div>
						</div>
					</div>
					<div class="col-md-12">
					<label class="col-form-label  text-default mb-1">Type of service:</label>
						<select  name="selTos" class="form-control  form-control-lg "  id="selTos">
							<option value="">SERVICE</option>
						</select>
					</div>					
				</div>
			</div>
			<div class="col-md-6">
					<label class="col-form-label  text-default mb-1">Mode :</label>
					<select class="form-control form-control-md  form-control-lg" name="modaccom" id="modaccom">
						<option value="">Mode</option>
						<option value="AMBUL">Ambulance</option>
						<option value="FWAMB">Fixed Wiring Ambulance</option>
						<option value="GRAMB">Ground Ambulance</option>
						<option value="AIRAMB">Air Ambulance</option>
						<option value="OTHER">Other Mode of Transportation</option>
						<option value="UNKNO">Unknown Mode of Transportation</option>
						<option value="WILET">Walkin following non Ambulance Law enforcement</option>
						<option value="WIPUB">Walkin following transport to public transportation</option>
						<option value="WIPRI">Walkin following transport to private transportation</option>
						<option value="WINSP">Walkin following not otherwise specified</option>
					</select>
			</div>
			<div class="col-md-6">
				<label class="col-form-label  text-default mb-1">Insurance:</label>
			<select class="form-control form-control-md  form-control-lg" name="insurance" id="insurance">
				<option value="">Insurance</option>
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
			
		</div>
		<div class="row">
			<div class="col-md-6">
				<label class="col-form-label  text-default mb-1">Bed:</label>
				<input type="text" id ="Bed" name="adm_Bed"  class="form-control  form-control-lg" placeholder="Bed" >
				<input type="hidden" id ="selBed" name="adm_bdintkey"  class="form-control  form-control-lg" placeholder="Bed" readonly>
			</div>
			<div class="col-md-6">
				<label class="col-form-label  text-default mb-1">Room:</label>
				<input type="text" class="form-control form-control-md  form-control-lg" name="adm_Room" id="Room" placeholder="Ward name">
				<input type="hidden" id ="selRoom" name="adm_rmintkey"  class="form-control  form-control-lg" placeholder="Bed" readonly>
			</div>
			<div class="col-md-12">
				<label class="col-form-label  text-default mb-1">Ward:</label>
				<input type="text" class="form-control form-control-md  form-control-lg" name="adm_Ward" id="Ward" placeholder="Ward name">
				<input type="hidden" class="form-control form-control-md  form-control-lg" name="adm_wardcode" id="selWar" readonly placeholder="Ward name">
			</div>
			
		</div>
		</form>
	</div>
		<div  class="col-md-5">
		<div id="bedlist" ></div>	
		</div>
	</div>
	</div>
	<!--step-2-->
	<!--step-3-->
	<div id="step-3" class="">
	<form id="form-step-3" role="form">
	<div class="box box-primary">
	<div class="h4 text text-success"><i class="fa fa-user-md"></i>&nbsp Physician</div>
	<div class="row">
		<div class="col-md-4">
		<div class="col-form-label  text-default mb-1">Admitting Doctor:</div>
			<select class="form-multi-select" data-coreui-multiple="false"  data-width="100%" name="selDoc_doc" id="ADMIT">
				<option value=""> </option>
			</select>
			<div class="clearfix">
			<hr>
			</div>
			<h5 class="text text-success mb-3"><i class="fa fa-user-circle-o"></i> Admitting Details</h5>
				<div class="box-body box-profile">
				<img id="admitDocPic" class="img-fluid bg-body shadow-3 img-thumbnail rounded mx-auto d-block mb-1" width="200px" src="<?php base_url();?>/assets/img/avatars/none.png" alt="User profile picture">
					<div class="list-group list-group-flush">
						<div class="list-group-item">
						<div class="text text-success"><i class="fa fa-user fa-sm"></i>&nbsp Doctor's Name <a class="pull-right text text-success" id ="docName_admit">N/A</a></div> 
						</div>	
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-venus-mars fa-sm"></i>&nbsp Category: <a class="pull-right text text-success" id="docCat_admit">N/A</a></div>
						</div>
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-intersex fa-sm"></i>&nbsp Department: <a class="pull-right text text-success" id="docDept_admit">N/A</a></div>
						</div>	
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-calendar fa-sm"></i>&nbsp Contact #:<a class="pull-right text text-success" id="docTel_admit">N/A</a></div>
						</div>
						
					</div>
				</div>
		</div>	
		<div class="col-md-4">
			<label class="col-form-label text-default mb-1">Consulting Doctor:</label>
				<select class="form-control col-sm-12" data-width="100%" name="selDoc1_doc" id="CONSU">
					<option value=""></option>
				</select>
			<div class="clearfix">
			<hr>
			</div>
			<h5 class="text text-success"><i class="fa fa-user-circle-o"></i> Consulting Details</h5>
				<div class="box-body box-profile">
				<img id="ConsultDocPic" class="img-fluid bg-body shadow-3 img-thumbnail rounded mx-auto d-block mb-1" width="200px" src="<?php base_url();?>/assets/img/avatars/none.png" alt="User profile picture">
					<div class="list-group list-group-flush">
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-user fa-sm"></i>&nbsp Doctor's Name <a class="pull-right text text-success" id ="docName_consu">N/A</a></div> 
						</div>	
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-venus-mars fa-sm"></i>&nbsp Category: <a class="pull-right text text-success" id="docCat_consu">N/A</a></div>
						</div>
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-intersex fa-sm"></i>&nbsp Department: <a class="pull-right text text-success" id="docDept_consu">N/A</a></div>
						</div>
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-calendar fa-sm"></i>&nbsp Contact #:<a class="pull-right text text-success" id="docTel_consu">N/A</a></div>
						</div>
					</div>
				</div>
		</div>
		<div class="col-md-4">
		<label class="col-form-label text-default mb-1">Attending Doctor:</label>
			<select class="form-control col-sm-12" data-width="100%" name="selDoc2_doc" id="ATTEN">
			<option value=""></option>
			</select>
			<div class="clearfix">
			<hr>
			</div>
			<h5 class="text text-success"><i class="fa fa-user-circle-o"></i> Attending Details</h5>
				<div class="box-body box-profile">
				<img id="ConsultDocPic" class="img-fluid bg-body shadow-3 img-thumbnail rounded mx-auto d-block mb-1" width="200px" src="<?php base_url();?>/assets/img/avatars/none.png" alt="User profile picture">
					<div class="list-group list-group-flush">
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-user fa-sm"></i>&nbsp Doctor's Name <a class="pull-right text text-success" id ="docName_atten">N/A</a></div> 
						</div>	
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-venus-mars fa-sm"></i>&nbsp Category: <a class="pull-right text text-success" id="docCat_atten">N/A</a></div>
						</div>
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-intersex fa-sm"></i>&nbsp Department: <a class="pull-right text text-success" id="docDept_atten">N/A</a></div>
						</div>
						<div class="list-group-item">
							<div class="text text-success"><i class="fa fa-calendar fa-sm"></i>&nbsp Contact #:<a class="pull-right text text-success" id="docTel_atten">N/A</a></div>
						</div>
					</div>
				</div>
		</div>
	</div>
	</div>
	</form>
	</div>
	<!--step-3-->
	<!-- /Step 4-->
	<div id="step-4" class="">
		<form id="form-step-4" role="form" data-toggle="validator">
				<div class="h4 text text-success with-border"><i class="fa fa-stethoscope"></i>&nbsp Diagnosis</div>
				<div class="row">
					<div class="col-6">
						<label class="form-label">Admission Diagnosis:</label>
						<textarea name ="AdmissionDiag" id="AdmissionDiag" type="text"  Placeholder= "Admission Diagnosis"class="form-control"></textarea>
					</div>
					<div class="col-6">
						<label class="form-label">Reason for Admission:</label>
						<textarea name ="ReasonDiag" id="ReasonDiag" type="text" Placeholder= "Reason for Admission" class="form-control"></textarea>
					</div>
				</div>
				<div class="row">
				<div class="col-3">
					<label class="form-label">&nbsp has tb?:</label>
					<select class="form-control col-sm-12" data-width="100%" name="tbind" id="tbind">
						<option value="">Select</option>
						<option value="Y">YES</option>
						<option value="N">NO</option>
					</select>
				</div>
				<div class="col-3">
					<label class="form-label">&nbsp is newborn pathologic?:</label>
					<select class="form-control col-sm-12" data-width="100%" name="newb" id="nbind">
						<option value="">Select</option>
						<option value="Y">YES</option>
						<option value="N">NO</option>
					</select>
				</div>
					<div class="col-6">
						<label class="form-label">&nbsp is pregnant?:</label>
						<select class="form-control col-sm-12 mb-1" data-width="100%" name="pind" id="pind">
							<option value=""> Select</option>
							<option value="Y">YES</option>
							<option value="N">NO</option>
						</select>
					</div>
				</div>
			<hr class="text text-success"></hr>
			<div class="h4 text-success" ><i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp; For Referral From</div>
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col">
							<label class="form-label" for="refrom_hfhudcode">Referring Faclity:</label>
							<select class="form-control form-control-mb" id="refrom_hfhudcode" name="refrom_hfhudcode"></select>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col">
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
			<hr class="text text-success"></hr>
			<span id="vsBMIMessage"></span>
			<div id="vsBMI"></div>
		</form>
	</div>
	<!-- /Step 4-->
	<!-- /Step 5-->
	<div id="step-5" class="">
		<div id="form-step-6" role="form">
			<div class="row">
				<div  class="col-md-6">
						<h4 class="text text-success with-border"><i class="fa fa-user"></i>&nbsp Responsible for the account.</h4>
							<div class="col-md-12">
								<label class="form-label">Fullname:</label>
								<input type ="text" class="form-control form-control-xs" placeholder="Fullname" name="rfname" id="rfname">
							</div>
							<div class="col-md-12">
							<label class="form-label">Contact:</label>
								<input type ="text" class="form-control" placeholder="Mobile/Telephone"  name="rcontact" id="rcontact">
							</div>
							<div class="col-md-12">
							<label class="form-label">Current Address:</label>
								<textarea class="form-control" name="raddress" Placeholder="Complete Address" id="raddress"></textarea>
							</div>
							<div class="col-md-12">
							<label class="form-label">Relation:</label>
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
								<option value="SON">Son</option>
								<option value="DAUGT">Daughter</option>
								<option value="FHEAD"></option>
								</select>
							</div>
						
					
				</div>
     <div class="col-md-6">
		<h4 class="text text-success with-border"><i class="fa fa-check"></i>&nbsp Source of Payment</h4>
		<div class="row">
			<div class="col-12">
				<label class="form-label">Source of payment:</label>
				<select name="sop1" id="sop1"class="form-control form-control-md mb-1">
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
		<div class="row">
			<div class="col-12">
				<label class="form-label">Source of payment:</label>
				<select name="sop2" id="sop2"class="form-control form-control-md mb-1">
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
			<div class="row">
			<div class="col-12">
			<label class="form-label">Source of payment:</label>
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
				
				
			</div>
		</div>
	</div>
	<!-- /Step 5-->
</div>
</div>