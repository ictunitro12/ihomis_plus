<form id="frmPatientSaveEmergency" name ="frmPatientSaveEmergency" method="POST">
<input name="triage_id" type="hidden" id ="triage_id">
<!-- patient profile -->
<input id="casenum" type="hidden" name="casenum">
<input id="enccode" type="hidden" name="enccode">
<input id="pataccount" type="hidden" name="pataccount">
<input id="chpercode" type="hidden" name="chpercode">
<input id="cpatage" type="hidden" name="cpatage">
<input id="cpatmont" type="hidden" name="cpatmont">
<input id="cpatday" type="hidden" name="cpatday">
<input id="cpathr" type="hidden" name="cpathr">

<!-- consultation -->
<input id="emtos" type="hidden" name="emtos">
<input id="emelbro" type="hidden" name="emelbro">
<input id="emelnotif" type="hidden" name="emelnotif">
<input id="emdatereg" type="hidden" name="emdatereg">
<input id="emDoc" type="hidden" name="emDoc">
<input id="emcondarr" type="hidden" name="emcondarr">
<input id="emremarks" type="hidden" name="emremarks">
<input id="emCasetype" type="hidden" name="emCasetype">
<!-- consultation -->

<!-- injury -->
<input id="erinjDate" type="hidden" name="erinjDate">
<input id="erinjPlace" type="hidden" name="erinjPlace">
<!-- injury -->

<!-- sop -->
<input id="csop1" type="hidden" name="csop1">
<input id="csop2" type="hidden" name="csop2">
<input id="csop3" type="hidden" name="csop3">
<!-- sop -->

<!-- referral from -->
<input id="referralLogId" type="hidden" name="referralLogId">
<input id="refromFhudCode" type="hidden" name="refromFhudCode">

<input id="saveIdenEmer" type="hidden" name="saveIdenEmer">

	<div class="modal fade" id="PatientEmergencySummary" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog modal-lg" role="dialog">
			<div class="modal-content">
			<div class="modal-body">
				<h4 class="modal-title text-success"><i class="fa fa-user-circle fa-2x"></i> Emergency Summary</h4>
				<p>
				 <div class="row">
						   <div class="col-md-3">
							<img id="patientPhoto" src="" class="img-fluid img-thumbnail bg-success" height="200" width="200"></img>
						  </div>
						  <div class="col-md-9">
						  <h5 class="text-success"><i class="fa fa-user"></i>&nbsp Basic Information</h5>
						  <table class="table table-sm table-striped">
						  <tr>
						  <td class="bg-success" >Hospital Record no:</td>
						  <td id="emHpercode"></td>
						  </tr>
						  <tr>
						  <td class="bg-success">Patient Name:</td>
						  <td id="emPatName"></td>
						  </tr>
						  <tr>
						  <td class="bg-success" >BirthDate:</td>
						  <td id="emDob"></td>
						  </tr>
						  <tr>
						  <td class="bg-success">Sex:</td>
						  <td id="emSex"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Age:</td>
						  <td id="emAge"></td>
						  </tr>
						  <tr>
						  <td class="bg-success" >Civil status:</td>
						  <td id="emCivilStat"></td>
						  </tr>
						  </table>
						  </div>
						   </div>
							<h5 class="text-success"><i class="fa fa-user-md"></i>&nbsp Consultation</h5>
						   <div class="row">
						   	  
						      <div class="col-md-12">
						
						<table class="table table-sm table-striped">
						 <tr>
						  <td class="bg-success" >Type of Service:</td>
						  <td id="erTos"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Date of Registration:</td>
						  <td id="erregDate"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Brought By:</td>
						  <td id="erBro"></td>
						  </tr>
						   <tr>
						  <td class="bg-success" >Condition:</td>
						  <td id="erCondarr"></td>
						  </tr>
						  <td class="bg-success" >Case:</td>
						  <td id="ersumCased"></td>
						  </tr>
						   <tr>
						  </table>
							</div>
						
							
							</div>
							<div class="row">
						   <div class="col-md-12">
							   <h5 class="text-success"><i class="fa fa-user-md"></i>&nbsp Doctor/Physician </h5>
							  <table class="table table-sm table-striped">
						   <tr>
						  <td class="bg-success">Physician:</td>
						  <td id="ErPhy"></td>
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
						  <td id="erincdate">N/A</td>
						  </tr>
							<tr>
						  <td class="bg-success">Place of Incident:</td>
						  <td id="erincplace">N/A</td>
						  </tr>
	
						  </table>
							</div>
							
							</div>
							<div class="row">
						   		<div class="col-md-12">
							   	<h5 class="text-success"><i class="fa fa-ambulance" aria-hidden="true"></i>&nbsp Referral</h5>
									<table class="table table-sm table-striped">
										<tr>
											<td class="bg-success">Referring Facility:</td>
											<td id="referringFacility"></td>
										</tr>
		
									</table>
								</div>
							</div>
							<div class="row">
							 <div class="col-md-12">
							 	<h5 class="text-success"><i class="fa f-money"></i>&nbsp Payment</h5>
							<table class="table table-sm table-striped">
							 <tr>
							  <td class="bg-success" >Source of Payment:</td>
							  <td  id="ERPaySource"></td>
							</tr>
							</table>
							 </div>
							</div>
			</div>
			<div class="modal-footer">
			<button type="submit" name="btnSave" id="btnSave"  class="btn btn-info btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
			 <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp CLOSE </button>
			</div>
			</div>
		</div>
	</div>
</form>