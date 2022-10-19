<div class="modal fade" id="ModalMAIPCharge" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card-header">
					<div class="row">
						<div class="col-md-6 col-md-auto">
							<h3 class="text text-success"><i class="fa fa-money"></i>&nbsp; Type of Charge List</h3>
						</div>
						<div class="col-md-6 mb-2">
							<div class="btn-group pull-right" role="group" aria-label="">
								<button type ="button" id = "btnMAIPCharge_Add" title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add Charge/s</button>
								<input type="hidden" name="charge_uniquecode_maip" id="charge_uniquecode_maip">
								<input type="hidden" name="charge_trandate_maip" id="charge_trandate_maip">
								<input type="hidden" name="totalMAIPCharges" id="totalMAIPCharges">
								<input type="hidden" name="totalRemMAIP" id="totalRemMAIP">

							</div>
						</div>	
					</div>	
				</div>

				<div class="card-body table-responsive">
					<table id="TableMAIPChargeList" class="table table-sm table-condensed table-bordered" width="100%">
						<thead>
							<tr>
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th>Type of Charge</th>
								<th>Amount</th>
								<th width="140px"></th>
							</tr>
						</thead>
					</table>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<div class="h4 text text-success "> TOTAL
							</div>			
						</div>
						<div class="col-md-6 mb-2">
							<div class="h4 text text-success col-md-3"><label id="TOTALCHARGES"></label> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<form id="frmMAIPChargeDelete" name="frmMAIPChargeDelete" method="post">
	<div class="modal fade" id="ModalMAIPChargeDelete" name="ModalMAIPChargeDelete" role="form">
		<input type="hidden" name="maipEnccodeChargeDelete" id="maipEnccodeChargeDelete">
		<input type="hidden" name="maipHpercodeChargeDelete" id="maipHpercodeChargeDelete">
		<input type="hidden" name="maipChargeCodeDelete" id="maipChargeCodeDelete">
		<input type="hidden" name="maipUniqueCodeChargeDelete" id="maipUniqueCodeChargeDelete">
		<input type="hidden" name="deleteMAIPChargeIden" id="deleteMAIPChargeIden" value="delete">

		<input type="hidden" name="RemAmount" id="RemAmount">
		<input type="hidden" name="ChargeUsedAmount" id="ChargeUsedAmount">
		<input type="hidden" name="ResultAmount" id="ResultAmount">

		<div class="modal-dialog modal-dialog-centered modal-md" >
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




<form name ="frmMAIPCharge" id="frmMAIPCharge">
	<div class="modal" id="ModalMAIPCharge_modal" name="ModalMAIPCharge_modal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
						<h4 class="modal-title text-success float-left"><i class="fa fa-percent"></i> MAIP of Charge/s</h4>
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
					<div class="form-row">
						<div class="col-md-4 col-form-label  text-default mb-1">
							Type of Charge:
						</div>
						<div class="col-md-8">
							<select type="text" name="_charges" id="_charges"  class="form-control" required></select>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="maip_charge_amount" id="maip_charge_amount" class="form-control" placeholder="Amount" required maxlength="17">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Available Amount:
						</div>
						<div class="col-md-8">
							<input type="number" readonly="" name="maip_avail_amount" id="maip_avail_amount" class="form-control"placeholder="Available Amount" >
						</div>

						<div class="col-md-4 col-form-label  text-default mb-1">
							Remaining Amount:
						</div>
						<div class="col-md-8">
							<input type="number" readonly="" name="maip_remain_amount" id="maip_remain_amount" class="form-control"placeholder="Remaining Amount" >
						</div>

						<input type="hidden" name="chargeMAIPformIden" id="chargeMAIPformIden">
						<input type="hidden" name="chrgEnccode_maip" id="chrgEnccode_maip">
						<input type="hidden" name="chrgHpercode_maip" id="chrgHpercode_maip">
						<input type="hidden" name="chrguniquecode_maip" id="chrguniquecode_maip">
						<input type="hidden" name="chrgtrandate_maip" id="chrgtrandate_maip">
						<input type="hidden" name="maip_charge_amount_old" id="maip_charge_amount_old">
						<input type="hidden" name="maip_charge_old" id="maip_charge_old">

						<!-- <input type="hidden" name="PDAFUsedAmount" id="PDAFUsedAmount">
						<input type="hidden" name="PDAFAmount" id="PDAFAmount">
						<input type="hidden" name="TotalCharge" id="TotalCharge">
						<input type="hidden" name="oldAmount" id="oldAmount"> -->
					</div>
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-success btn-md"><i class="fa fa-save"></i> SAVE</button>
						<button  class="btn btn-outline-danger btn-md" data-dismiss="modal"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_maip_charge.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_maip.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/socialservice.js"></script>
