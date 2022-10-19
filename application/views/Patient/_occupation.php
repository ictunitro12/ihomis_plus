<div class="modal fade" id="ModalOccup" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-header">
					<div class="row">
						<div class="col-md-10 col-md-auto">
							<h3 class="text text-success"><i class="fa fa-users"></i>&nbsp; Occupation</h3>
						</div>

						<div class="col-md-2 col-md-auto">
							<div class="btn-group pull-right" role="group" aria-label="">
								<a id="btnOccupat" class="btn btn-success"><i class ="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>	
				</div>
				<div class="card-body table-responsive">
					<table  id="occupList" class="list table table-sm table-striped  table-bordered table-condensed table-hover ">
						<thead>
							<tr class="thead-dark">
								<th width="50px">Code</th>
								<th>Occupation</th>
								<th>Employer</th>
								<th>Employer Email Address</th>
								<th>Employer Occuphone No.</th>
								<th>Branch/ Station</th>
								<th>Employer Address</th>
								<th width="200px"></th>
							</tr>
						</thead>
						<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>	
<form onsubmit="event.preventDefault();SubmitOccup();" autocomplete="off">
	<div class="modal fade" id="ModalAddOccup" data-backdrop="static" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
		<div class="modal-dialog modal-dialog-centered " role="dialog">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title text-white" ><i class="fa fa-plus"></i> </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">	
						<label class="validation-error hide" type="hidden" id="codenoValidationError"></label>
						<div class="col-md-3 col-form-label text-default mb-1">Code:</div>

						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb" readonly="" autocomplete="off"   id="codeno" name="codeno" placeholder ="Code" >						
						</div>	
						<div class="col-md-3 col-form-label text-default mb-1">Occupation:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="occup" name="occup"  required="" placeholder ="Occupation">
						</div>
						<div class="col-md-3 col-form-label text-default mb-1">Employer:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="employer" name="employer"  required="" placeholder ="Employer">
						</div>	
						<div class="col-md-3 col-form-label text-default mb-1">Employer Email Address:</div>
						<div class="col-md-9">
							<input type="email" class="form-control form-control-mb" autocomplete="off"   id="email" name="email"  required="" placeholder ="Employer Email Address">
						</div>	
						<div class="col-md-3 col-form-label text-default mb-1">Employer Telephone No.:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="employertelno" name="employertelno"  required="" placeholder ="Employer Telephone No.">
						</div>	
						<div class="col-md-3 col-form-label text-default mb-1">Branch/Station:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="branch" name="branch"  required="" placeholder ="Branch/Station">
						</div>	
						<div class="col-md-3 col-form-label text-default mb-1">Employer Address:</div>
						<div class="col-md-9">
							<input type="text" class="form-control form-control-mb" autocomplete="off"   id="employeraddr" name="employeraddr"  required="" placeholder ="Employer Address">
						</div>				
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<a id="btnSubmitOc" type="submit" value="Submit" class="btn btn-success"><i class ="fa fa-save"></i></a>
				</div>

			</div>
		</div>
	</div>
</form>
<script src="<?php echo base_url()?>assets/scripts/patient/occup.js"></script>
