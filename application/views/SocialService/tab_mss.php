<style>
	table#SocialServiceTable.dataTable tbody tr:hover {
		background-color: #80DB88;
	}

	.table-responsive {
		overflow: visible;
	}
</style>
<div class="tab-pane fade show active" id="mss" role="tabpanel" aria-labelledby="mss-tab">
	<div class="form-row">
		<div class="col-md-6">
			<div class="h4 text text-success">
				<i class="fa fa-file-pdf"></i>&nbsp; MSS Classification
			</div>
		</div>
		<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button onclick="AddSocialService()" id="MSSAddButton" class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i>&nbsp; Add MSS Classification</button>
				<button onclick="AssessmentLink()" id="AssessmentAddButton" class="btn btn-outline-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-wpforms"></i>&nbsp; Assessment Form</button>
			</div>
		</div>
	</div>
	<div class="form-row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table id="SocialServiceTable" class="table table-sm table-bordered" width="100%">
					<thead>
						<tr>
							<th class="never"></th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="align-middle all">Classification</th>
							<th class="align-middle all">Discount</th>
							<th class="align-middle all">Interviewer</th>
							<th class="align-middle all">Source of Referral</th>
							<th class="never"></th>
							<th class="never"></th>
							<th class="align-middle all" width="1%">Actions</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('SocialService/saveassessmentform.php'); ?>

<form id="frmDeleteSocialService" name="frmDeleteSocialService">
	<input type="hidden" id="formIdentification" name="formIdentification">
	<input type="hidden" id="deletecode" name="deletecode">
	<div class="modal fade" id="ModalDeleteSocialService" role="form">
		<div class="modal-dialog modal-dialog-centered md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<span class="text-white" id="classification" name="classification"></span>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp; DELETE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp; CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmSocialService" name="frmSocialService">
	<input type="hidden" id="SocialServiceformIden" name="SocialServiceformIden">
	<input type="hidden" id="SocialServiceEnccode" name="SocialServiceEnccode">
	<input type="hidden" id="SocialServiceHpercode" name="SocialServiceHpercode">
	<div class="modal fade" id="ModalAddSocialService" role="form">
		<div class="modal-dialog modal-dialog-centered" role="form">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white"><i class="fa fa-file-pdf"></i>&nbsp; MSS Classification</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-3 col-form-label text-default mb-1">Classification:</div>
						<div class="col-md-9">
							<select class="form-control form-control-mb mb-1" id="sel_mss" name="sel_mss" required></select>
						</div>

						<div class="col-md-3 col-form-label text-default mb-1">Interviewer:</div>
						<div class="col-md-9">
							<select class="form-control form-control-mb mb-1" id="sel_interviewer" name="sel_interviewer" required></select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SUBMIT</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp; CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmSocialServicePDF" name="frmSocialServicePDF" method="post">
	<input type="hidden" id="code" name="code">
	<input type="hidden" id="percode" name="percode">
	<div class="modal" id="ModalSocialService" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h4 class="modal-title text-success"><i class="fa fa-file-pdf"></i>&nbsp; MSWD Form No. 3 Assessment Tool</h4>
					<button class="btn btn-danger btn-ladda float-right" data-style="zoom-in" ria-label="Close" data-dismiss="modal"><i class="fa fa-close"></i></button>
				</div>
				<div class="modal-body" id="SocialServicePDF">
				</div>
			</div>
		</div>
	</div>
</form>