<style>

table#chargeMSS.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<form id = "frmMSS" name="frmMSS" class="form">
<div class="modal" id="ModalMSS_modal"  role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
	<h4 class="modal-title text-success"><i class="fa fa-refresh"></i> MSS</h4>
	<br>
		<div class="form-row">
			<div class="col-md-4 col-form-label text-default mb-1">
				Log:
			</div>
			<div class="col-md-8">
				<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"   id="mssDateLog" name="mssDateLog" >
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
				Classification :
			</div>
			<div class="col-md-8">
				<select name="mssClass_mss" id="sel_mss"  class="form-control form-control-md">
					<option value="">Select</option>
				</select>
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
				Interviewer:
			</div>
			<div class="col-md-8">
				<select name="mssInt_emp" id="sel_interviewer"  class="form-control form-control-md">
					<option value="">Select</option>
				</select>	
			</div>
		</div>
		<input type="hidden" name="mssformIden" id="mssformIden" >
		<input type="hidden" name="mssHpercode" id="mssHpercode">
		<input type="hidden" name="mssEnccode" id="mssEnccode">
	</div>
		<div class="modal-footer">
				<div class="btn-group float-right">
					<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> Save</button>
					<button  class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
			    </div>
		</div>
	</div>
	</div>
	</div>
</form>	
<form id="frmMSSDelete" name="frmMSSDelete" method="post">
	<div class="modal fade" id="ModalMSSDelete" name="ModalMSSDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" >
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="mssEnccodeDelete" id="mssEnccodeDelete">
			<input type="hidden" name="deleteMSS" id="deleteMSS" value="delete">
		</div>
		<div class="modal-footer ">
			<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
			<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
		</div>
</form>

<div class="tab-pane fade" id="mss" role="tabpanel" aria-labelledby="mss-tab">
		<div class="row">
			<div class="col-md-6">
			<div class="h4 text text-success"> 
			<i class="fa fa-heartbeat"></i>
			&nbsp MSS
			</div>
			</div>
		<div class="col-md-6">
		<div class="btn-group pull-right" role="group" aria-label="">
		<button type ="button" id="btnMSS_add"  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add MSS
		</button>
		</div>
		</div>		
		</div>
	<table id="chargeMSS" class="table table-sm table-condensed table-bordered"width="100%">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th>Code</th>
				<th>Description</th>
				<th>Interviewer</th>
				<th  width="50px"></th>
			</tr>
		</thead>
	</table>
	</div>

	<script src="<?php echo base_url()?>assets/scripts/billing/mss.js"></script>