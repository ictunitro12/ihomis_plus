<form id="frmPatientSaveOutpatient" name ="frmPatientSaveOutpatient" method="POST">

<input type="hidden" id="appointment_id" name="appointment_id" readonly>
<input name="triage_id" type="hidden" id ="triage_id">

<input id="casenum" type="hidden" name="casenum">
<input id="enccode" type="hidden" name="enccode">
<input id="pataccount" type="hidden" name="pataccount">

<input id="chpercode" type="hidden" name="chpercode">
<input id="ctscode" type="hidden" name="ctscode">


<input id="cpatage" type="hidden" name="cpatage">
<input id="cpatmont" type="hidden" name="cpatmont">
<input id="cpatday" type="hidden" name="cpatday">
<input id="cpathr" type="hidden" name="cpathr">

<input id="copddatevisit" type="hidden" name="copddatevisit">
<input id="copdtimevisit" type="hidden" name="copdtimevisit">
<input id="ctypecon" type="hidden" name="ctypecon">

<input id="copddatedisch" type="hidden" name="copddatedisch">
<input id="copdtimedisch" type="hidden" name="copdtimedisch">
<input id="copdTos" type="hidden" name="copdTos">
<input id="ctypaccom" type="hidden" name="ctypaccom">
<input id="cdisp" type="hidden" name="cdisp">

<input id="ctbind" type="hidden" name="ctbind">
<input id="creasAdmit" type="hidden" name="creasAdmit">


<input id="cdocopd" type="hidden" name="cdocopd">

<input id="copddateinc" type="hidden" name="copddateinc">
<input id="copdtimeinc" type="hidden" name="copdtimeinc">
<input id="copdplaceinc" type="hidden" name="copdplaceinc">

<input id="cvsDateTime" type="hidden" name="cvsDateTime">
<input id="cvsBp" type="hidden" name="cvsBp">
<input id="cvsTemp" type="hidden" name="cvsTemp">
<input id="cvsPulse" type="hidden" name="cvsPulse">
<input id="cvsRr" type="hidden" name="cvsRr">
<input id="cvsO2sats" type="hidden" name="cvsO2sats">

<input id="cvsOral" type="hidden" name="cvsOral">
<input id="cvsNC" type="hidden" name="cvsNC">
<input id="cvsBlood" type="hidden" name="cvsBlood">
<input id="cvsIntake" type="hidden" name="cvsIntake">
<input id="cvsMiscel" type="hidden" name="cvsMiscel">

<input id="chwDateLog" type="hidden" name="chwDateLog">
<input id="chwHeight" type="hidden" name="chwHeight">
<input id="chwWeight" type="hidden" name="chwWeight">
<input id="chwBMI" type="hidden" name="chwBMI">
<input id="cbmicat" type="hidden" name="cbmicat">

<input id="csop1" type="hidden" name="csop1">
<input id="csop2" type="hidden" name="csop2">
<input id="csop3" type="hidden" name="csop3">

<input id="referralLogId" type="hidden" name="referralLogId">
<input id="refromFhudCode" type="hidden" name="refromFhudCode">

<input id="saveIdenOPD" type="hidden" name="saveIdenOPD">

	<div class="modal fade" id="PatientOutpatientSummary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog modal-lg" role="dialog">
			<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-success"><i class="fa fa-user-circle fa-2x"></i> Outpatient Summary</h4>
				<p>
				 <div class="row">
						   <div class="col-md-3">
							<img id="patientPhoto" src="" class="img-fluid img-thumbnail bg-success shadow-lg p-1 mb-2 bg-body rounded" height="200" width="200"></img>
						  </div>
						  <div class="col-md-9 shadow-lg p-1 mb-2 bg-body rounded">
						  <h5 class="text-success"><i class="fa fa-user"></i>&nbsp Basic Information</h5>
						  <table class="table table-sm table-striped">
						  <tr>
						  <td class="bg-success" >Hospital Record no:</td>
						  <td id="OPDHpercode"></td>
						  </tr>
						  <tr>
						  <td class="bg-success">Patient Name:</td>
						  <td id="OPDPatName"></td>
						  </tr>
						  <tr>
						  <td class="bg-success" >Age:</td>
						  <td id="OPDAge"></td>
						  </tr>
						  <tr>
						  <td class="bg-success">Sex:</td>
						  <td id="OPDSex"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Birthdate:</td>
						  <td id="OPDDob"></td>
						  </tr>
						  <tr>
						  <td class="bg-success" >Civil status:</td>
						  <td id="OPDCivilStat"></td>
						  </tr>
						  </table>
						  </div>
						   </div>
							<h5 class="text-success"><i class="fa fa-user-md"></i>&nbsp Consultation</h5>
						   <div class="row">
						   	  
						      <div class="col-md-6">
						
							  <table class="table table-sm table-striped">
						 <tr>
						  <td class="bg-success" >Type of Consultation:</td>
						  <td id="OPDTypeCon"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Date of Visit:</td>
						  <td id="OPDdatevisit"></td>
						  </tr>
						  
						  
						  </table>
							</div>
						   <div class="col-md-6">
						   <table class="table table-sm table-striped">
						  <tr>
						  <td class="bg-success" >Type of Service:</td>
						  <td id="OPDTos"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Date of Discharge</td>
						  <td id="OPDdatedisch"></td>
						  </tr>
	
						  </table>
							</div>
							
							</div>
							<div class="row">
						   <div class="col-md-12">
							   <h5 class="text-success"><i class="fa fa-user-md"></i>&nbsp Doctor/Physician </h5>
							  <table class="table table-sm table-striped">
						   <tr>
						  <td class="bg-success">Physician:</td>
						  <td id="OPDPhy"></td>
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
							   <h5 class="text-success"><i class="fa fa-wheelchair "></i>&nbsp Injury/Accident </h5>
							  <table class="table table-sm table-striped">
						   <tr>
						  <td class="bg-success">Date of Incident:</td>
						  <td id="OPDincdate">N/A</td>
						  </tr>
							<tr>
						  <td class="bg-success">Place of Incident:</td>
						  <td id="OPDincplace">N/A</td>
						  </tr>
	
						  </table>
							</div>
							
							</div>
							<div class="row">
							 <div class="col-md-12">
							 	<h5 class="text-success"><i class="fa fa-money"></i>&nbsp Payment</h5>
							<table class="table table-sm table-striped">
							 <tr>
							  <td class="bg-success" >Source of Payment:</td>
							  <td  id="OPDPaySource"></td>
							</tr>
							</table>
							 </div>
							</div>
			</div>
			<div class="modal-footer">
				<div class="">
				<button type="submit" name="btnSave" id="btnSave"  class="btn btn-info btn-inline  btn-ladda" data-style="slide-right"><i id="btnSaveIcon" class="fa fa-save"></i>&nbsp SAVE</button>
				 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp CLOSE </button>
			</div>
			</div>
		</div>
	</div>
</form>