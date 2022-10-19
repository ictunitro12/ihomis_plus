<form id="frmResult" method="post">
		<div class="modal" id="modalResult" tab-index ='-1' role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
				<div class="modal-content card-accent-success">
				<div class="modal-header">
					<div class="h4 modal-title text-success align-middle"> <i class="fa fa-th-list"></i>&nbsp Transaction/s</div>
				</div>
					<div class="modal-body">
						<?php echo ViewPatientInformation2();?>	
						<div class="clearfix">
							<div class="h5 text-success float-left"><i class="fa fa-th-list"></i> List of order/s</div>
							<button onclick="generateslip();"  type = "button" class="btn btn-outline-success btn-sm float-right mb-2"><i class="fa fa-plus"></i> Generate chargeslip</button>
						</div>
						<div class="border-bottom mb-2 text-success"></div>
						<table id="patientOrders"  style ="cursor:pointer;" class="table table-sm table-bordered table-condensed table-hover table-sm" width="100%">
								<thead>
									<tr>
										<th>Order date</th>
										<th>Chargeslip</th>
										<th>Description</th>
										<th>Priority</th>
										<th>Status</th>
										<th>Ordering Doctor</th>
										<th>Price</th>
										<th>doco</th>
										<th>pricedate</th>
										<th>prikey</th>
										<th>Type</th>
										<th></th>
									</tr>
								</thead>
						</table>
					</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
				</div>
			</div>
		</div>
		</div>
	</form>
	<form id="frmSpecimen" name="frmSpecimen" method="post">
	<div class="modal fade" id="modalSpecimen" tab-index ='-1' role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<h4 class="modal-title text-success h4"> <i class="fa fa-flask"></i> Specimen</h4>
					<div class="form-row">
						<input type="hidden" id="specidocointkey" name="specidocointkey">
						<input type="hidden" id="specienccode" name="specienccode">
						<input type="hidden" id="specihpercode" name="specihpercode">
						<input type="hidden" id="speciproccode" name="speciproccode">
						<input type="hidden" id="speciFormIden" name="speciFormIden">
						<input type="hidden" id="resultType" name="resultType">
						<div class="col-md-4 col-form-label text-default mb-1">
							Laboratory No:
						</div>
						<div class="col-md-8">
							<input type="text" class="form-control  mb-1" readonly id="labno" name="labno">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Log:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control  mb-1" autocomplete="off" step="1" id="speciDateLog" name="speciDateLog" required>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Quantity:
						</div>
						<div class="col-md-8">
							<input type="number" class="form-control  mb-1" autocomplete="off" value="1" id="speciQty" name="speciQty">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Units of Measure:
						</div>
						<div class="col-md-8">
							<select class="form-control  mb-1" id="speci_oum" name="speci_oum" required>
								<option value="">Select</option>
							</select>
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
	<form id="frmGenerate" method="post">
		<div class="modal" id="modalGenerateSlip" tab-index ='-1' role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
				<div class="modal-content card-accent-success">
					<div class="modal-header">
					<div class="h4 modal-title text-success"><i class="fa fa-user"></i> <span id="slipno" class="text-success"></span> </div>
					</div>
					<div class="modal-body">
						<label class="h5 text-success">You want to generated Chargeslip?</label>
						<ul id="listOrder"></ul>
					</div>
					<div class="modal-footer">
						<div class="btn-group">
							<button  type="submit" class="btn btn-outline-success"><i class="fa fa-save"></i> Save</button>
							<button type="button" class="btn btn-outline-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
						</div>
					</div>
				</div>
			</div>
			</div>
	</form>
	<script src="<?php echo base_url()?>assets/scripts/laboratory/specimen.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/laboratory/_patientorder.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/laboratory/_generateslip.js"></script>