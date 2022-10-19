<div class="modal fade" id="ModalTypeCharge" tabindex="-1" role="dialog">
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
								<button type ="button" id = "btnTypeCharge_Add" title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add Charge/s</button>
								<input type="hidden" name="chargeEnccode" id="chargeEnccode">
								<input type="hidden" name="charge_fundcode" id="charge_fundcode">
								<input type="hidden" name="charge_funddate" id="charge_funddate">
							</div>
						</div>	
					</div>	
				</div>

				<div class="card-body table-responsive">
					<table id="TableTypeChargeList" class="table table-sm table-condensed table-bordered" width="100%">
						<thead>
							<tr>
								<th></th>
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
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="h4 text text-success "> TOTAL
						</div>			
					</div>
					<div class="col-md-6 mb-2">
						<div class="h4 text text-success col-md-3"><label id="TOTALFUNDSOURCECHARGES"></label> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	

<form id="frmTypeChargeDelete" name="frmTypeChargeDelete" method="post">
	<div class="modal fade" id="ModalTypeChargeDelete" name="ModalTypeChargeDelete" role="form">
		<input type="hidden" name="chargeEnccodeDelete" id="chargeEnccodeDelete">
		<input type="hidden" name="chargecodeDelete" id="chargecodeDelete">
		<input type="hidden" name="fundcodeChargeDelete" id="fundcodeChargeDelete">
		<input type="hidden" name="deleteTypeChargeIden" id="deleteTypeChargeIden" value="delete">
		<input type="hidden" name="AmountDelete" id="AmountDelete">
		<input type="hidden" name="usedAmountDelete" id="usedAmountDelete">
		<input type="hidden" name="TotalusedAmountDelete" id="TotalusedAmountDelete">
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




<form name ="frmTypeCharge" id="frmTypeCharge">
	<div class="modal" id="ModalTypeCharge_modal" name="ModalTypeCharge_modal" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
						<h4 class="modal-title text-success float-left"><i class="fa fa-percent"></i> Type of Charge/s</h4>
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
					<div class="form-row">
						<div class="col-md-4 col-form-label  text-default mb-1">
							Type of Charge:
						</div>
						<div class="col-md-8">
							<select type="text" name="fundsource_charges" id="fundsource_charges"  class="form-control" required></select>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="amttypecharge" id="amttypecharge" class="form-control" placeholder="Amount" required maxlength="17">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Available Amount:
						</div>
						<div class="col-md-8">
							<input type="number" readonly="" name="AvailableAmount" id="AvailableAmount" class="form-control"placeholder="Available Amount" >
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Remaining Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="PDAFAmount" id="PDAFAmount" class="form-control" placeholder="Remaining Amount" required maxlength="17" readonly>
						</div>

						<input type="hidden" name="chargeformIden" id="chargeformIden">
						<input type="hidden" name="chrgEnccode" id="chrgEnccode">
						<input type="hidden" name="chrgfundcode" id="chrgfundcode">
						<input type="hidden" name="chrgfunddate" id="chrgfunddate">

						<input type="hidden" name="SubTotalCharge" id="SubTotalCharge">
						<input type="hidden" name="TotalCharge" id="TotalCharge">
						<input type="hidden" name="oldAmount" id="oldAmount">
						<input type="hidden" name="oldChargeCode" id="oldChargeCode">
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


<script type="text/javascript">
	$(function(){

	});

</script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_fundsource_typecharge.js"></script>
