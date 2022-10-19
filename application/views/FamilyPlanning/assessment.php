

	<div class="tab-pane fade show " id="assess" role="tabpanel" aria-labelledby="assess-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h5 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Assessment Form
				</div>
			</div>
			<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button onclick="AddAssessment()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i>
			</button>
			</div>
			</div>		
		</div>	
		<table id="AssessmentTable" class="table table-sm table-condensed table-bordered"width="100%">
			<thead>
				<tr>
					<th>enccode</th>
					<th>hpercode</th>
					<th>toecode</th>
					<th width="50%">Date of Assessment</th>
					<th width="30%">Type of Client</th>
					<th	width="15%">Method</th>
					<th></th>

				</tr>
			</thead>
			<tfoot>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th width="50%"></th>
					<th width="30%"></th>
					<th	width="15%"></th>
					<th></th>

				</tr>
			</tfoot>
		</table>
	</div>


<form name="frmAssessment"   id="frmAssessment">
	<div class="modal fade" id="ModalAddAssessment" tabindex="-1" role="dialog">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" class="form-control form-control-mg" name ="assess_code" id="assess_code" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="assess_enccode" id="assess_enccode" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="assess_toecode" id="assess_toecode" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="assess_datereport" id="assess_datereport" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="assess_dateassess" id="assess_dateassess" autocomplete="off"/>
	<div class="modal-dialog modal-dialog-centered " role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp; Assessment Form</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
		
		<div class="row">	
			<div class="col-md-4 col-form-label text-default mb-1"> <i class="fa fa-asterisk text-danger "></i>&nbsp; Type of Client:</div>
			<div class="col-md-8">
					<select name ="client" id ="client" class="form-control">
						<option value="">SELECT TYPE OF CLIENT</option>
						<option value="1">Changing Clinic</option>
						<option value="2">Changing Method</option>
						<option value="3">Current Users</option>
						<option value="4">New Acceptors</option>
						<option value="5">Restart</option>
					</select>
				</div>
			<div class="col-md-4 col-form-label text-default mb-1"> <i class="fa fa-asterisk text-danger "></i>&nbsp; Method:</div>
			<div class="col-md-4">
					<select name ="assess_method" id ="assess_method" class="form-control">
						<option value="">SELECT WHAT METHOD</option>
						<option value="01">Combined Oral Contraceptives (COC) </option>
						<option value="02">Progestin Only Pill (POP)</option>
						<option value="03">Injectible</option>
						<option value="04">Implant</option>
						<option value="05">Intra-Uterine Device - Interval</option>
						<option value="06">Intra-Uterine Device - Postpartum</option>
						<option value="07">Condom</option>
						<option value="08">Natural Assessment Planning - Cervical Mucus Method</option>
						<option value="09">Natural Assessment Planning - Basal Body Temperature</option>
						<option value="10">Natural Assessment Planning - Symptothermal Method</option>
						<option value="11">Natural Assessment Planning - Standard Days Method</option>				
						<option value="12">Lactational Amenorrhea Method</option>
						<option value="13">Others, specify</option>
					</select>
				</div>	
				<div class="col-md-4">
					<input type="text" class="form-control form-control-mg" name ="assess_method_specify" id="assess_method_specify" autocomplete="off"/>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Administered By:</div>
				<div class="col-md-8">
					<select name ="selEmployees" id ="selEmployees" class="form-control">
					</select>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Schedule Next visit:</div>
				<div class="col-md-8">
					<input type="datetime-local" class="form-control form-control-mb" id="nextvisit" name="nextvisit" > 
					<small class="text-muted"><b>Recommended date for next visit for this method</b></small>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Source:</div>
				<div class="col-md-8">
					<select name ="source" id ="source" class="form-control">
						<option value="">SELECT</option>
						<option value="1">Private</option>
						<option value="2">Public</option>
					</select>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Given Deworming:</div>
				<div class="col-md-8">
					<select name ="givedeworm" id ="givedeworm" class="form-control">
						<option value="">SELECT</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>					
			<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger "></i>&nbsp; Date Given Deworming:</div>
				<div class="col-md-8">
					<input type="datetime-local" class="form-control form-control-mb" name="datedeworm" id="datedeworm" >
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Deworming Dose:</div>
				<div class="col-md-8">
					<select name ="wormdose" id ="wormdose" class="form-control">
						<option value="">SELECT DEWORMING DOSE</option>
						<option value="1">1</option>
						<option value="2">2</option>
					</select>
				</div>		
			<div class="col-md-4 col-form-label text-default mb-1"> Remarks:</div>
				<div class="col-md-8">
					<textarea class="form-control form-control-mb" autocomplete="off" id="remarks" name="remarks"></textarea>
				</div>				

		
		</div>
	</div>
	<div class="modal-footer bg-secondary">
		<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
		<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
	</div>
	
	</div>
	</div>
	</div>
	</form>

	<form name ="frmAssessmentPDF" id="frmAssessmentPDF" method="post">
	<div class="modal" id="ModalAssess" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
	<div class="modal-content card-accent-success">
	<div class="modal-header">
		<input name="code" id ="code" type="hidden">
	<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Family Planning Form</h2>
	</div>
	<div class="modal-body border-success" id="AssessmentPDF">
		
	</div>
	<div class="modal-footer bg-secondary"></div>
	</div>
	</div>
	</div>
	</form>

	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/assessment.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/assessment_validation.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/library.js"></script>