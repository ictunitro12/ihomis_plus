<form id="frmPatientSaveAdmission" name ="frmPatientSaveAdmission" method="POST">
<input name="triage_id" type="hidden" id ="triage_id">
<input id="casenum" type="hidden" name="casenum">
<input id="enccode" type="hidden" name="enccode">
<input id="pataccount" type="hidden" name="pataccount">

<input id="chpercode" type="hidden" name="chpercode">
<input id="ctacode" type="hidden" name="ctacode">
<input id="ctscode" type="hidden" name="ctscode">
<input id="cmodaccom" type="hidden" name="cmodaccom">
<input id="cinsurance" type="hidden" name="cinsurance">

<input id="cpatage" type="hidden" name="cpatage">
<input id="cpatmont" type="hidden" name="cpatmont">
<input id="cpatday" type="hidden" name="cpatday">
<input id="cpathr" type="hidden" name="cpathr">

<input id="cward" type="hidden" name="cward">
<input id="croom" type="hidden" name="croom">
<input id="cbed" type="hidden" name="cbed">

<input id="cdocadmit" type="hidden" name="cdocadmit">
<input id="cdocconsult" type="hidden" name="cdocconsult">
<input id="cdocattend" type="hidden" name="cdocattend">

<input id="cadmdiag" type="hidden" name="cadmdiag">
<input id="creasdiag" type="hidden" name="creasdiag">

<input id="ctbind" type="hidden" name="ctbind">
<input id="cpind" type="hidden" name="cpind">
<input id="cnbind" type="hidden" name="cnbind">

<input id="cvsDateTime" type="hidden" name="cvsDateTime">
<input id="cvsBp" type="hidden" name="cvsBp">
<input id="cvsTemp" type="hidden" name="cvsTemp">
<input id="cvsPulse" type="hidden" name="cvsPulse">
<input id="cvsRr" type="hidden" name="cvsRr">

<input id="cvsOral" type="hidden" name="cvsOral">
<input id="cvsNC" type="hidden" name="cvsNC">
<input id="cvsBlood" type="hidden" name="cvsBlood">
<input id="cvsIntake" type="hidden" name="cvsIntake">
<input id="cvsMiscel" type="hidden" name="cvsMiscel">
<input id="cvso2sats" type="hidden" name="cvso2sats">

<input id="chwDateLog" type="hidden" name="chwDateLog">
<input id="chwHeight" type="hidden" name="chwHeight">
<input id="chwWeight" type="hidden" name="chwWeight">
<input id="chwBMI" type="hidden" name="chwBMI">
<input id="cbmicat" type="hidden" name="cbmicat">

<input id="crfname" type="hidden" name="crfname">
<input id="crcontact" type="hidden" name="crcontact">
<input id="craddress" type="hidden" name="craddress">
<input id="crrelation" type="hidden" name="crrelation">

<input id="cinffname" type="hidden" name="cinffname">
<input id="cinfcontact" type="hidden" name="cinfcontact">
<input id="cinfaddress" type="hidden" name="cinfaddress">
<input id="cinfrelation" type="hidden" name="cinfrelation">

<input id="csop1" type="hidden" name="csop1">
<input id="csop2" type="hidden" name="csop2">
<input id="csop3" type="hidden" name="csop3">
<input id="ctoecode" type="hidden" name="ctoecode">
<input id="cdateaccom" type="hidden" name="cdateaccom">

<input name="foradmcode" type="hidden" id ="foradmcode">
<input name="foradmtoecode" type="hidden" id ="foradmtoecode">

<input id="referralLogId" type="hidden" name="referralLogId">
<input id="refromFhudCode" type="hidden" name="refromFhudCode">

<input id="saveIdenAdm" type="hidden" name="saveIdenAdm">

	<div class="modal" id="PatientAdmisionSummary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				
			<div class="modal-body">
			<h4 class="modal-title text-success "><i class="fa fa-user-circle-o fa-2x"></i> Admission Summary</h4>
					<p>
				 <div class="row">
						   <div class="col-md-3">
							<img id="patientPhoto" src="" class="img-fluid img-thumbnail  shadow-lg p-1 mb-2 bg-body rounded" height="200" width="200"></img>
						  </div>
						  <div class="col-md-9">
						  <h5 class="text text-success" ><i class="fa fa-user-circle-o "></i>&nbsp Patient Information</h5>
						  <table class="table table-sm shadow-lg p-1 mb-2 bg-body rounded">
							<tr>
								  <td class="bg-success" >Hospital Record no:</td>
								  <td id="admitHpercode"></td>
							  </tr>
							  <tr>
								  <td class="bg-success">Patient Name:</td>
								  <td id="admitPatName"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >BirthDate:</td>
								  <td id="admitDob"></td>
							  </tr>
							  <tr>
								  <td class="bg-success">Sex:</td>
								  <td id="admitSex"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >Age:</td>
								  <td id="admitAge"></td>
							  </tr>
							  <tr>
								  <td class="bg-success" >Civil status:</td>
								  <td id="admitCivilStat"></td>
							  </tr>
						  </table>
						  </div>
					</div>
						   <div class="row">
						   
						      <div class="col-md-6">
							   <h5 class="text text-success"><i class="fa fa-bed text-success"></i>&nbsp  Ward </h5>
							  <table class="table table-sm table-striped">
						   <tr>
						  <td class="bg-success" >Ward:</td>
						  <td id="admitWard"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Room:</td>
						  <td id="admitRoom"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Bed:</td>
						  <td id="admitBed"></td>
						  </tr>
						  </table>
							</div>
							<div class="col-md-6">
							   <h5 class="text text-success" ><i class="fa fa-bed"></i>&nbsp  Accomodation </h5>
							<table class="table table-sm table-striped">
							<tr>
						  <td class="bg-success" >Date of accomodation:</td>
						  <td id="dateAccomv"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Type:</td>
						  <td id="admitType"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Service:</td>
						  <td id="admitTos"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Insurance:</td>
						  <td id="admitInsure"></td>
						  </tr>
						  </table>
							</div>
							</div>
							<div class="row">
						   <div class="col-md-6">
							   <h5 class="text text-success"><i class="fa fa-user-md"></i>&nbsp Doctor/Physician </h5>
							  <table class="table table-sm table-striped">
						   <tr>
						  <td class="bg-success">Admit:</td>
						  <td id="admitPhy"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Consult:</td>
						  <td id="admitConsul"></td>
						  </tr>
						   <tr>
						  <td class="bg-success">Attend:</td>
						  <td id="admitAttend"></td>
						  </tr>
						  </table>
							</div>
							<div class="col-md-6">
							   <h5 class="text text-success"><i class="fa fa-stethoscope"></i>&nbsp  Diagnosis </h5>
						<table class="table table-sm table-striped">
						  <tr>
							  <td class="bg-success" >Diagnosis:</td>
							  <td  colspan="4"id="admitDiag"></td>
						  </tr>
						  <tr>
							  <td class="bg-success" >Reason:</td>
							  <td colspan="4" id="admitReason"></td>
						  </tr>
						  <tr>
							  <td class="bg-success" >Has TB:</td>
							  <td id="admitTb"></td>
							  <td class="bg-success" >Pregnant:</td>
							  <td id="admitPreg"></td>
						  </tr>
						  <tr>
							  <td class="bg-success" >Newborn Pathologic:</td>
							  <td id="admitNewborn"></td>
						  </tr>
						 </table>
							</div>
							</div>
							<div class="row">
								<div class="col">
									<h5 class="text-success"><i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp Referral</h5>
								</div>
							</div>
							<div class="row">
							<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td class="bg-success">Referring Facility:</td>
											<td id="referringFacility"></td>
											<tr>
											<td class="bg-success">Date and Time:</td>
											<td id="referralDateTime"></td>
										</tr>
										</tr>
		
									</table>
									
								</div>
								<div class="col-md-6">
									<table class="table table-sm table-striped">
										<tr>
											<td class="bg-success">Reason:</td>
											<td id="referralReason"></td>
										</tr>
										<tr>
											<td class="bg-success">Other Reasons:</td>
											<td id="referralOtherReason"></td>
										</tr>
									</table>
								</div>
							</div>
							<div class="row">
							 <div class="col-md-12">
							    <h5 class="text text-success"><i class="fa fa-info"></i>&nbsp Other Details </h5>
							<table class="table table-sm table-striped">
							 <tr>
							  <td class="bg-success" >Responsible for the account:</td>
							  <td  id="admitAccount"></td>
							</tr>
							 <tr>
							  <td class="bg-success" >Source of Payment:</td>
							  <td  id="admitPaySource"></td>
							</tr>
						   </table>
							 </div>
							</div>
			</div>
			<div class="modal-footer">
				<div class="btn-group">
					<button type="submit" name="btnSave" id="btnSave"  class="btn btn-outline-info btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
					<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp CLOSE </button>
				</div>
			</div>
			</div>
		</div>
	</div>
</form>