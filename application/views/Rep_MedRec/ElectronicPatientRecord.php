<div class="row">
	<div class="col-md-3">
		<?php echo ViewSocioDemoData();?>
		<?php echo ViewSearchPatient();?>
	</div>

	<div class="col-md-9">
	<div class="card card-accent-success">
	<div class="card-body table-responsive">
	<div class="h3 text text-success"><i class="fa fa-user"></i>&nbsp<?php echo $header;?> </div>
	<ul class="nav nav-tabs nav-justified" id="tabCharges" role="tablist">
	  <li class="nav-item">
		<a class="nav-link text text-success active" id="charges-tab" data-toggle="tab" href="#diagnosis" role="tab" aria-controls="diagnosis" aria-expanded="true"><i class="fa fa-money fa-2x"></i>&nbsp DIAGNOSIS</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-success" id="complaint-tab" data-toggle="tab" href="#complaint" role="tab" aria-controls="complaint"><i class="fa fa-hand-o-down  fa-2x"></i>&nbsp COMPLAINT</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-success" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history"><i class="fa fa-stethoscope  fa-2x"></i> HISTORY</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-success" id="intake-tab" data-toggle="tab" href="#intake" role="tab" aria-controls="intake"><i class="fa fa-heartbeat  fa-2x"></i> INTAKE</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-success" id="output-tab" data-toggle="tab" href="#output" role="tab" aria-controls="output"><i class="fa fa-heartbeat  fa-2x"></i> OUTPUT</a><!--alert, Procedure Operation, Physical Examination, Specime, Encounter, Systems Review, Others, All EPRs, Respiratory Rate, Blood Pressure, Heart Rate, Temperature-->
		<li class="nav-item">
		<a class="nav-link text text-success" id="alert-tab" data-toggle="tab" href="#alert" role="tab" aria-controls="alert"><i class="fa fa-heartbeat  fa-2x"></i> ALERT</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-success" id="procopera-tab" data-toggle="tab" href="#procopera" role="tab" aria-controls="procopera"><i class="fa fa-heartbeat  fa-2x"></i> PROCEDURE OPERATION</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link text text-success" id="phyexam-tab" data-toggle="tab" href="#phyexam" role="tab" aria-controls="phyexam"><i class="fa fa-heartbeat  fa-2x"></i> PHYSICAL EXAMINATION</a>
	  </li>
	   <li class="nav-item">
		<a class="nav-link text text-success" id="specimen-tab" data-toggle="tab" href="#specimen" role="tab" aria-controls="specimen"><i class="fa fa-heartbeat  fa-2x"></i> SPECIMEN</a>
	  </li>
	<!--    <li class="nav-item">
		<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss"><i class="fa fa-heartbeat  fa-2x"></i> ENCOUNTER</a>
	  </li>
	   <li class="nav-item">
		<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss"><i class="fa fa-heartbeat  fa-2x"></i> SYSTEMS REVIEW</a>
	  </li>
	   <li class="nav-item">
		<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss"><i class="fa fa-heartbeat  fa-2x"></i>OTHERS</a>
	  </li>
	   <li class="nav-item">
		<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss"><i class="fa fa-heartbeat  fa-2x"></i>ALL EPRs</a>
	  </li>
	   <li class="nav-item">
		<a class="nav-link text text-success" id="mss-tab" data-toggle="tab" href="#mss" role="tab" aria-controls="mss"><i class="fa fa-heartbeat  fa-2x"></i>RESPIRATORY</a>
	  </li> -->
	</ul>
	<div class="tab-content" id="tabChargescontent">
	<br>
		<div class="tab-pane fade show active" id="diagnosis" role="tabpanel" aria-labelledby="diagnosis-tab">
			<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success"> 
				<i class="fa fa-th-list"></i>
					&nbsp DIAGNOSIS/s
				</div>
			</div>	
			</div>	
			<table id="diagnosisTbl" class="table table-sm table-condensed table-striped table-bordered scroll"width="100%">
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th>TYPE OF DIAGNOSIS</th>
						<th>DIAGNOSIS</th>
						<th>ENCOUNTER DATE/TIME</th>
						<th>TYPE OF ENCOUNTER</th>
						<th>DOCTOR</th>
						<th></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</tfoot>
			</table>
		</div>
		
		<div class="tab-pane fade" id="complaint" role="tabpanel" aria-labelledby="complaint-tab">
			<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success"> 
				<i class="fa fa-th-list"></i>
					&nbsp COMPLAINTS
				</div>
			</div>
			
			<table id="complainTbl" class="table table-sm table-condensed table-bordered "width="100%">
						<thead>
							<tr>
								<th>DATE LOG</th>
								<th>TIME LOG</th>
								<th>COMPLAINT</th>
								<th>ENTERED BY/UPDATED BY</th>
							
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
							</tr>
						</tfoot>
			</table>
			</div>
		</div>
		
		<div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
			<div class="row">
			<div class="col-md-6">
				<div class="h3 text text-success"> 
				<i class="fa fa-user-md"></i>
					&nbsp HISTORY
				</div>
			</div>
		<table id="historyTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE LOG</th>
							<th>HISTORY TYPE</th>
							<th>DESCRIPTION</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</tfoot>
		</table>
		</div>
		</div>
		<div class="tab-pane fade" id="intake" role="tabpanel" aria-labelledby="intake-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
					<i class="fa fa-user-md"></i>
						&nbsp INTAKE
					</div>
				</div>
				<table id="intakeTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE TAKEN</th>
							<th>TIME TAKEN</th>
							<th>ORAL</th>
							<th>N/C</th>
							<th>I.V.</th>
							<th>BLOOD</th>
							<th>MISCELLANEOUS</th>
							<th>ENTERED/UPDATED BY</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>								
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<div class="tab-pane fade" id="output" role="tabpanel" aria-labelledby="output-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
					<i class="fa fa-user-md"></i>
						&nbsp OUTPUT
					</div>
				</div>
				<table id="outputTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE TAKEN</th>
							<th>TIME TAKEN</th>
							<th>URINE</th>
							<th>N/G</th>
							<th>STOOL</th>
							<th>MESIS</th>
							<th>MISCELLANEOUS</th>
							<th>ENTERED/UPDATED BY</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>								
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<div class="tab-pane fade" id="alert" role="tabpanel" aria-labelledby="alert-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
					<i class="fa fa-user-md"></i>
						&nbsp ALERT
					</div>
				</div>
				<table id="alertTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE ALERT WAS RECOGNIZED</th>
							<th>TIME ALERT WAS RECOGNIZED</th>
							<th>TYPE OF ALERT</th>
							<th>DETAILS</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>					
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<div class="tab-pane fade" id="procopera" role="tabpanel" aria-labelledby="procopera-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
					<i class="fa fa-user-md"></i>
						&nbsp PROCEDURE/OPERATION
					</div>
				</div>
				<table id="alertTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE OF PROCEDURE</th>
							<th>SURGEON</th>
							<th>ASSISTANT SURGEON</th>
							<th>ANESTHESIST</th>
							<th>LABORATORY COMMENT</th>
							<th>TYPE OF PROCEDURE</th>
							<th>REMARKS</th>
							<th>TYPE OF OPERATION</th>
							<th>RESULT</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>					
							<th></th>					
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<div class="tab-pane fade" id="phyexam" role="tabpanel" aria-labelledby="phyexam-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
					<i class="fa fa-user-md"></i>
						&nbsp PHYSICAL EXAMINATION
					</div>
				</div>
				<table id="alertTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE/TIME LOG</th>
							<th>PHYSICAL EXAM TYPE</th>
							<th>DESCRIPTION</th>							
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>					
						</tr>
					</tfoot>
				</table>
			</div>
		</div>

		<div class="tab-pane fade" id="specimen" role="tabpanel" aria-labelledby="specimen-tab">
			<div class="row">
				<div class="col-md-6">
					<div class="h3 text text-success"> 
					<i class="fa fa-user-md"></i>
						&nbsp SPECIMEN
					</div>
				</div>
				<table id="alertTbl" class="table table-sm table-condensed table-bordered"width="100%">
					<thead>
						<tr>
							<th>DATE COLLECTED</th>
							<th>TIME COLLECTED</th>
							<th>QUANTITY</th>							
							<th>UNIT OF MEASURE</th>							
							<th>DESCRIPTION</th>							
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>					
						</tr>
					</tfoot>
				</table>
			</div>
		</div>


	</div>
	<div class="card-footer"></div>
	</div>
	</div>
</div>
	<input name="hpercode" id ="hpercode" type="hidden">
	<input name="enccode" id ="enccode" type="hidden">
	<script type="text/javascript">
	$(document).ready(function()
	{	uppercase();
		$("#PatSearch").modal({backdrop: "static"});
		$("#PatientImage").prop('src','assets/img/avatars/none.png');
	});
	</script>
	<script src="<?php echo base_url()?>assets/scripts/Rep_MedRecReport/sociodemodata.js"></script>
