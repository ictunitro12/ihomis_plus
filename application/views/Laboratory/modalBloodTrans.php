<form id="frmBloodTrans" method="post">
	<div class="modal" id="modalBloodTrans" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h3 modal-title text-success"><i class="fa fa-tint"></i>&nbsp; Blood Transfusion Result Form</div>
					<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col-md-8">
						</div>
						<div class="col-md-4 btn-group float-right" role="group" aria-label="">
							<button id="previewBloodTrans" name="previewBloodTrans" data-toggle="tooltip" class="btn btn-outline-success btn-sm  btn-ladda" data-style="zoom-in"><i class="fa fa-eye"></i> Preview</button>
							<button id="printBloodTrans" name="printBloodTrans" data-toggle="tooltip" class="btn btn-outline-warning btn-sm  btn-ladda" data-style="zoom-in"><i class="fa fa-print"></i> Print</button>
							<button id="editBloodTrans" name="editBloodTrans" data-toggle="tooltip" class="btn btn-outline-info btn-sm  btn-ladda" data-style="zoom-in"><i class="fa fa-pencil"></i> Edit</button>
						</div>
					</div>
					<div class="form-row">
						<div class="h5 text-success"><i class="fa fa-file-text-o"></i>&nbsp; Form</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Date Report:</label><br>
						</div>
						<div class="col-md-4" id="csnoId">
							<input type="datetime-local" class="form-control form-control-md mb-1" value="<?php echo date('Y-m-d\TH:i:s'); ?>" id="frmdatereport" name="frmdatereport">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Hospital No.:</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Hospital No." id="cshospitalIdd" name="cshospitalIdd">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Name of Recipient:</label>
						</div>
						<div class="col-md-6">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Recipient" id="cspatientnameidd" name="cspatientnameidd">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Age:</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Age" id="patage" name="patage">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Sex:</label>
						</div>
						<div class="col-md-1">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Sex" id="patsex" name="patsex">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Ward:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" placeholder="Ward" id="frmward" name="frmward">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Bed:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md" placeholder="Bed" id="frmbed" name="frmbed">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Lab No:</label>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Laboratory No" id="frmlabno5" name="frmlabno5">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label class="col-form-label">Diagnosis:</label>
						</div>
						<div class="col-md-11">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Diagnosis" id="frmdiagnosis" name="frmdiagnosis">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Blood Bag No.:</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" placeholder="Blood Bag Number" id="frmbloodbag" name="frmbloodbag">
						</div>
						<div class="col-md-2">
							<label class="form-label">Expiration Date :</label>
						</div>
						<div class="col-md-4">
							<input type="date" class="form-control form-control-md mb-1" id="frmexpirationdate" name="frmexpirationdate">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Unit :</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md" placeholder="Unit" id="frmunit" name="frmunit">
						</div>
						<div class="col-md-2">
							<label class="col-form-label">Blood Type:</label>
						</div>
						<div class="col-md-4">
							<select class="form-control form-control-md mb-1" id="frmbloodtype" name="frmbloodtype">
								<option value="">Select</option>
								<option value="A+">A+</option>
								<option value="A">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmwholebld" name="frmwholebld">&nbsp;
							<label class="col-form-label">Whole Blood</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmplateletconc" name="frmplateletconc">&nbsp;
							<label class="col-form-label">Platelet Concentrate</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmrbc" name="frmrbc">&nbsp;
							<label class="col-form-label">Red Blood Cells</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-2">
							<input type="checkbox" id="frmplasma" name="frmplasma">&nbsp;
							<label class="col-form-label">Plasma</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-1">
						<input type="checkbox" id="checkother" name="checkother">&nbsp;
							<label class="col-form-label">Others</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Others" id="frmothers" name="frmothers">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							<label class="col-form-label">Result of Compatibility Testing :</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Result" id="frmresultcom" name="frmresultcom">
						</div>
						<div class="col-md-3">
							<label class="col-form-label">Crossmatching Done By :</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Done by" id="frmcrossmatching" name="frmcrossmatching">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Date :</label>
						</div>
						<div class="col-md-3">
							<input type="date" class="form-control form-control-md mb-1" placeholder="Done by" id="frmcrossmatchingdte" name="frmcrossmatchingdte">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmemergencytesting" name="frmemergencytesting">&nbsp;
							<label class="col-form-label">Emergency Testing</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmsalinephaseonly" name="frmsalinephaseonly">&nbsp;
							<label class="col-form-label">Saline Phase Only</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmuncrossmatched" name="frmuncrossmatched">&nbsp;
							<label class="col-form-label">Uncrossmatched</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmin3phases" name="frmin3phases">&nbsp;
							<label class="col-form-label">In 3 Phases</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="Crossmatched" name="Crossmatched">&nbsp;
							<label class="col-form-label">Crossmatched</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-4">
							<input type="checkbox" id="frmaborhcompatible" name="frmaborhcompatible">&nbsp;
							<label class="col-form-label">ABO/Rh Compatible</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							<label class="form-label">Blood Unit Received By</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" placeholder="Received by" id="frmbloodreceivedby" name="frmbloodreceivedby">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Date/Time</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmdtetimebloodunit" name="frmdtetimebloodunit" disable>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							<label class="col-form-label">Tranfusion Started By</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" placeholder="Started by" id="frmtranfusionstartby" name="frmtranfusionstartby">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Date/Time</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmtransfusstartedby" name="frmtransfusstartedby" disable>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							<label class="col-form-label">Tranfusion Completed By</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-md" placeholder="Conpleted by" id="frmtransfuscompleted" name="frmtransfuscompleted">
						</div>
						<div class="col-md-1">
							<label class="col-form-label">Date/Time</label>
						</div>
						<div class="col-md-3">
							<input type="datetime-local" class="form-control form-control-md mb-1" id="frmtransfuscompledatetime" name="frmtransfuscompledatetime">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-3">
							<label class="col-form-label">Tranfusion Set Removed By</label>
						</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-md" placeholder="Set removed by" id="frmtranfusionby" name="frmtranfusionby">
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<label class="col-form-label text-success h5"><i class="fa fa-heartbeat"></i>&nbsp; Vital Sign</label>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Before BT: BP :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="---/---" id="frmbtbp" name="frmbtbp">
						</div>
						<div class="col-md">
							<label class="col-form-label">CR :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="----" id="frmcr" name="frmcr">
						</div>
						<div class="col-md">
							<label class="col-form-label">RR :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="----" id="frmrr" name="frmrr">
						</div>
						<div class="col-md">
							<label class="col-form-label">Temp :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md mb-1" placeholder="--.--" id="frmt" name="frmt">
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">After BT: BP :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="---/---" id="frmabtbp" name="frmabtbp">
						</div>
						<div class="col-md">
							<label class="col-form-label">CR :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="----" id="frmcr1" name="frmcr1">
						</div>
						<div class="col-md">
							<label class="col-form-label ">RR :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-mb" placeholder="----" id="frmrr1" name="frmrr1">
						</div>
						<div class="col-md">
							<label class="col-form-label">Temp :</label>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control form-control-md" placeholder="--.--" id="frmt1" name="frmt1">
						</div>
					</div>
					<hr class="bg-success">
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label text-success h5"><i class="fa fa-pencil-square-o"></i>&nbsp; Remarks</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-6">
							<input type="checkbox" id="checktranscompleted" name="checktranscompleted">&nbsp;
							<label class="col-form-label">Tranfusion Completed w/o immediate Tranfusion Reaction</label>
						</div>
						<div class="col-md-1">
							<input type="checkbox" id="checkfever" name="checkfever">&nbsp;
							<label class="col-form-label ">Fever</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" id="checknausea" name="checknausea">&nbsp;
							<label class="col-form-label">Nausea</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" id="checkfushes" name="checkfushes">&nbsp;
							<label class="col-form-label">Fushes</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-6">
							<input type="checkbox" id="checktransstop" name="checktransstop">&nbsp;
							<label class="col-form-label">Tranfusion Stoped with Reactions noted</label>
						</div>
						<div class="col-md-1">
							<input type="checkbox" id="checkchills" name="checkchills">&nbsp;
							<label class="col-form-label">Chills</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" id="checkvomiting" name="checkvomiting">&nbsp;
							<label class="col-form-label">Vomiting</label>
						</div>
						<div class="col-md-2">
							<input type="checkbox" id="checkrashes" name="checkrashes">&nbsp;
							<label class="col-form-label">Rashes</label>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
						</div>
						<div class="col-md-6">
							<input type="checkbox" id="checkfortransreacts" name="checkfortransreacts">&nbsp;
							<label class="col-form-label">For Transfusion Reaction Studies</label>
						</div>
						<div class="col-md-1">
							<input type="checkbox" id="checkothers" name="checkothers">&nbsp;
							<label class="col-form-label">Others</label>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control form-control-md mb-1" placeholder="Others" id="frmothers1" name="frmothers1" disabled>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-2">
							<label class="col-form-label">Prepared By:</label>
						</div>
						<div class="col-md-5">
							<input type="text" class="form-control form-control-mb" id="frmprepby" placeholder="Prepared by" name="frmprepby">
						</div>
						<div class="col-md-1">
							<label class="col-form-label"> Date :</label>
						</div>
						<div class="col-md-4">
							<input type="datetime-local" class="form-control form-control-md" value="<?php echo date('Y-m-d\TH:i:s'); ?>" id="frmprepby" name="frmprepby">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" name="btnSave" id="btnSave" class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>