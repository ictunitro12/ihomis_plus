<style>

table#SocialServiceTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="tab-pane fade show active" id="mss" role="tabpanel" aria-labelledby="mss-tab">
	<div class="form-row">	
		<div class="col-md-6">
			<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>&nbsp Classification
			</div>
		</div>
	</div>
	<div class="form-row">	
		<div class="col-md-12 col-md-auto">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button onclick="AddSocialService()" id="MSSAddButton" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-original-title="Add MSS" data-toggle="tooltip"><i class="fa fa-plus"> </i> Add MSS</button>

				<button onclick="AssessmentLink()" id="AssessmentAddButton" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in" data-original-title="Assessment Form" data-toggle="tooltip"><i class="fa fa-wpforms"> </i> Assessment Form</button>
			</div>
		</div>	
		<div class="col-md-12">
			<table id="SocialServiceTable" class="table table-sm table-condensed table-bordered" width="100%">
				<thead>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th>CODE</th>
						<th>DESCRIPTION</th>
						<th>AMOUNT</th>
						<th>INTERVIEWER</th>
						<th>SOURCE OF REFERRAL</th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</thead>					
			</table>
		</div>	
	</div>
</div>
<?php  $this->load->view('SocialService/saveassessmentform.php');?>

<form name="frmDeleteSocialService"   id="frmDeleteSocialService">
	<div class="modal fade" id="ModalDeleteSocialService" role="form">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">

		<div class="modal-dialog modal-dialog-centered md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<form name="frmSocialService"   id="frmSocialService">
	<div class="modal fade" id="ModalAddSocialService" role="form">
		<input type="hidden" name="SocialServiceformIden" id="SocialServiceformIden">
		<div class="modal-dialog modal-dialog-centered" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> <?php echo $header;?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">	
						<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="SocialServiceEnccode" name="SocialServiceEnccode">
						<input type="hidden" class="form-control form-control-mb" autocomplete="off"   id="SocialServiceHpercode" name="SocialServiceHpercode">

						<div class="col-md-3 col-form-label text-default mb-1">Social Service Classification:</div>
						<div class="col-md-9">
							<select id="sel_mss" name="sel_mss" class="form-control"> </select>
						</div>

						<div class="col-md-3 col-form-label text-default mb-1">Interviewer:</div>
						<div class="col-md-9">
							<select name ="sel_interviewer" id ="sel_interviewer" class="form-control"></select>
						</div>						
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button  class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form name ="frmSocialServicePDF" id="frmSocialServicePDF" method="post">
	<div class="modal" id="ModalSocialService" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<input name="code" id ="code" type="hidden">
					<input name="percode" id ="percode" type="hidden">
					<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i>MSWD Form No. 3 Assessment Tool</h2>
					<button class="btn btn-danger btn-ladda  float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal"><i class="fa fa-close"></i></button>
				</div>
				<div class="modal-body border-success" id="SocialServicePDF">

				</div>
				<div class="modal-footer bg-secondary">

				</div>
			</div>
		</div>
	</div>
</form>
