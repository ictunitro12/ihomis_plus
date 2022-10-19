<div class="modal fade" id="ModalTelep" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered " role="dialog">
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
							<h3 class="text text-success"><i class="fa fa-mobile"></i>&nbsp; Telephone/Mobile Number</h3>
						</div>

						<div class="col-md-2 col-md-auto">
							<div class="btn-group pull-right" role="group" aria-label="">
								<a id="btnTelep" class="btn btn-success"><i class ="fa fa-plus"></i></a>
							</div>
						</div>	
					</div>	
				</div>
				<div class="card-body table-responsive">
					<table  id="telepList" class="list table table-sm table-striped  table-bordered table-condensed table-hover ">
						<thead>
							<tr class="thead-dark">
								<th width="50px">Code</th>
								<th width="150px">Telephone Number</th>
								<th width="200px">Telephone Type</th>
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

	<form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
		<div class="modal fade" id="ModalAddTelep" data-backdrop="static" tabindex="-1" role="dialog">
			<input type="hidden" name="formIdenTelep" id="formIdenTelep">
			<input type="hidden" name="index" id="index">
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
							<label class="validation-error hide" type="hidden" id="seqnoValidationError"></label>
							<div class="col-md-3 col-form-label text-default mb-1">Code:</div>

							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" readonly="" autocomplete="off"   id="seqno" name="seqno" placeholder ="Code" >						
							</div>	
							<div class="col-md-3 col-form-label text-default mb-1">Telephone Number:</div>
							<div class="col-md-9">
								<input type="text" class="form-control form-control-mb" autocomplete="off"   id="telno" name="telno"   placeholder ="Telephone Number">
							</div>
							<div class="col-md-3 col-form-label text-default mb-1">Telephone Type:</div>
							<div class="col-md-9">
								<select name ="contacttype" id ="contacttype" class="form-control">
									<option value="">Type of Telephone</option>
									<option value="RESID">Residence</option>
									<option value="OFFIC">Office</option>
									<option value="SCHOO">School</option>
									<option value="CELLP">Cellular phone</option>
								</select>
							</div>				
						</div>
					</div>
					<div class="modal-footer bg-secondary">
						<a id="btnSubmit" type="submit" value="Submit" class="btn btn-success"><i class ="fa fa-save"></i></a>
					</div>

				</div>
			</div>
		</div>
	</form>

	<form name="frmDeleteTelep" id="frmDeleteTelep">
		<input type="hidden" name="formIdentification" id="formIdentification">
		<input type="hidden" name="deletecode" id="deletecode">


		<div class="modal fade" id="DeleteTelep" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content">
					<div class="modal-header bg-danger">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
					<div class="modal-footer bg-secondary">
						<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
					</div>
				</div>
			</div>
		</div>
	</form>	


	<script src="<?php echo base_url()?>assets/scripts/patient/telep.js"></script>



