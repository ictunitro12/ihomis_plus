<form id="frmDeleteExam" name="frmDeleteExam" method="post">
	<div class="modal" id="deleteExamModal" name="deleteExamModal" tabindex="-1" role="form">
		<input type="hidden" name="delDoco" id="delDoco">
		<input type="hidden" name="delprocformIden" id="delprocformIden">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmProc" id="frmProc" method="post">
	<div class="modal" id="DocOrdExamModal" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="modal-title text-success"> <i class="fa fa-flask fa-lg"></i>&nbsp Examination</h4>
					<hr class="bg-success">
					<h5 class="text text-success"><i class="fa fa-info"></i> Details</h5>
					<div class="form-row">
						<div class="col-md-1">
							<label>Order:</label>
						</div>
						<div class="col-md-5">
							<input type="datetime-local" id="dateOrd" name="dateOrd" stepup="1" class="form-control form-control-md mb-1">
						</div>
						<div class="col-md-1">
							<label>Posted:</label>
						</div>
						<div class="col-md-5">
							<input type="datetime-local" id="datePost" name="datePost" stepup="1" class="form-control form-control-md mb-1">
						</div>
					</div>
					<div class="form-row mb-1">

						<div class="col-md-1">
							<label>Doctor:</label>
						</div>
						<div class="col-md-5">
							<select name="selExam_doc" id="selExam_doc" class="form-control form-control-md mb-1">
								<option value="">Select</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-1">
							<label>Type:</label>
						</div>
						<div class="col-md-5">
							<select name="selExam" id="selExam" onchange="selExamlist(this.value);" class="form-control form-control-md">
								<option value="">Select</option>
								<option value="01">Radiology</option>
								<option value="02">Radio Therapy</option>
								<option value="03">Nuclear Medicine</option>
								<option value="04">Neurology</option>
								<option value="05">Dental</option>
								<option value="06">Laboratory</option>
								<option value="07">Ultrasound</option>
								<option value="08">Dermatology</option>
								<option value="09">Ophthalmology</option>
								<option value="10">Procedures/Operation</option>
								<option value="11">Therapeutic/Diagnostic Modalities</option>
								<option value="12">Anatomic Pathology</option>
								<option value="13">Physical Therapy</option>
								<option value="14">HIV Test</option>
								<option value="16">Special Examinations</option>
								<option value="17">CT Scan</option>
								<option value="18">Diet</option>
								<option value="19">Appointment</option>
								<option value="20">MRI</option>
								<option value="21">Mammography</option>
								<option value="22">Angiography</option>
								<option value="23">Linear Accelerator</option>
								<option value="24">Dental X-Ray</option>
							</select>
						</div>
						<div class="col-md-1">
							<label>Verified:</label>
						</div>
						<div class="col-md-5">
							<select name="selEmpexam_emp" id="selEmpexam_emp" class="form-control form-control-md mb-1">
								<option value="">Select</option>
							</select>
						</div>
					</div>
					<input type="hidden" id="enteredByexam" name="enteredByexam" value="<?php echo  $this->ion_auth->user()->row()->username; ?>" readonly class="form-control form-control-md mb-1" autocomplete="off" placeholder="Enter by" readonly>

					<hr class="bg-success"></hr>
					<h5 class="modal-title text-success"> <i class="fa fa-flask"></i>&nbsp List</h5>
					<table id="examList" style="cursor:pointer" class="table table-sm table-bordered table-condensed table-hover" "style:cursor:pointer;" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th>Description</th>
								<th>Priority</th>
								<th>Price</th>
								<th>Remarks</th>
								<th>Notes</th>
								<th>Reason</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="modal-footer">
					<input type="hidden" name="procDoco" id="procDoco">
					<input type="hidden" name="procEnccode" id="procEnccode">
					<input type="hidden" name="procHpercode" id="procHpercode">
					<input type="hidden" name="procformIden" id="procformIden">
					<div class="btn-group">
						<button type="submit" class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-send"></i>&nbsp Submit</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


<form name="frmExamUpdate" id="frmExamUpdate">
	<div class="modal" id="modalExamStatus" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="text text-success"><i class="fa fa-flask"></i> Examination</h4>
					<div class="box-body box-profile">
						<div class="h6 text-center text-success" id="hpercode"></div>
						<ul class="list-group">
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-code"></i>&nbsp Code :</b>
								<a class="pull-right text text-success" id="proccode">N/A</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-medkit"></i>&nbsp Description:</b>
								<a class="pull-right text text-success" id="procdesc">N/A</a>
							</li>
							<li class="list-group-item">
								<b class="text text-success"><i class="fa fa-money"></i>&nbsp Rate:</b>
								<a class="pull-right text text-success" id="procrate">N/A</a>
							</li>
						</ul>
					</div>
					<hr class="text-success">
					</hr>
					<div class="text-success h4"><i class="fa fa-list"></i> Priority & Fees</div>
					<div class="form-row">
						<div class="col-md-2 col-form-label  text-default mb-1">
							Priority:
						</div>
						<div class="col-md-10">
							<select name="priority" id="priority" class="form-control form-control-md">
								<option value="">Select</option>
								<option value="STAT">Urgent</option>
								<option value="ROUTIN">Routine</option>
								<option value="UNKNO">Unknown</option>
							</select>
						</div>
						<div class="col-md-2 col-form-label  text-default mb-2">
							Remarks:
						</div>
						<div class="col-md-10 ">
							<textarea id="ordremarks" name="ordremarks" class="form-control form-control-md mb-2" autocomplete="off" placeholder="Remarks"></textarea>
						</div>
						<div class="col-md-2 col-form-label  text-default mb-2">
							Reason:
						</div>
						<div class="col-md-10 ">
							<textarea id="ordReason" name="ordReason" class="form-control form-control-md mb-2" autocomplete="off" placeholder="Reason"></textarea>
						</div>
						<hr class="bg-green">
						<div class="col-md-2 col-form-label  text-default mb-2">
							Notes:
						</div>
						<div class="col-md-10 ">
							<textarea id="ordNotes" name="ordNotes" class="form-control form-control-md mb-2" autocomplete="off" placeholder="Notes"></textarea>
						</div>
						<div class="col-md-3 col-form-label  text-default mb-1">
							Reading fee(1):
						</div>
						<div class="col-md-9">
							<input type="text" name="rfee1" id="rfee1" class="form-control form-control-md" placeholder="Reading Fee">
						</div>
						<div class="col-md-3 col-form-label  text-default mb-1">
							Reading fee(2):
						</div>
						<div class="col-md-9">
							<input type="text" name="rfee2" id="rfee2" class="form-control form-control-md" placeholder="Reading Fee">
						</div>

						<div class="col-md-3 col-form-label  text-default mb-1">
							Reading fee(3):
						</div>
						<div class="col-md-9">
							<input type="text" name="rfee3" id="rfee3" class="form-control form-control-md" placeholder="Reading Fee">
						</div>
					</div>
				</div>
				<input type="hidden" name="docformIden" id="docformIden">
				<input type="hidden" name="docintkey" id="docintkey">
				<input type="hidden" name="docproccode" id="docproccode">
				<input type="hidden" name="type" id="type">
				<div class="modal-footer">
					<div class="btn-group">
						<button type="submit" class="btn btn-outline-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i> Save</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>