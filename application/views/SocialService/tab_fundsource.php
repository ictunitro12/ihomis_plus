<style>

table#TableFund.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="modalFundPDF" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-body">
				<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i> Add Fund Source</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
				</div>
				<iframe id="fundountPDF" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
			</div>
		</div>
	</div>
</div>
<form id="frmFundSourceDelete" name="frmFundSourceDelete" method="post">
	<div class="modal fade" id="ModalFundSourceDelete" name="ModalFundSourceDelete" role="form">
		<input type="hidden" name="fundEnccodeDelete" id="fundEnccodeDelete">
		<input type="hidden" name="fundcodeDelete" id="fundcodeDelete">
		<input type="hidden" name="fundrefDateDelete" id="fundrefDateDelete">
		<input type="hidden" name="deleteFundSource" id="deleteFundSource" value="delete">
		<input type="hidden" name="backAmount" id="backAmount">
		<input type="hidden" name="usedAmount" id="usedAmount">
		<input type="hidden" name="TotalAmount" id="TotalAmount">
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




<form name ="frmFundSource" id="frmFundSource" method="post">
	<div class="modal" id="ModalFundSource_modal" name="ModalFundSource_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
						<h4 class="modal-title text-success float-left"><i class="fa fa-percent"></i> FundSource/s</h4>
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
					<div class="form-row">
						<div class="col-md-4 col-form-label  text-default mb-1">
							Transaction Date:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="dateFund" id="dateFund" value="" class="form-control" >
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Refferal Date:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="daterefFund" id="daterefFund" value="" class="form-control" readonly>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Fund Source:
						</div>
						<div class="col-md-7">
							<input type="text" name="fundname" readonly id="fundname"  class="form-control" placeholder="Fund Source">
						</div>
						<div class="col-md-1">
							<button id="btnFund" class="btn btn-success"><i class="fa fa-plus"></i></button>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="amtfund" id="amtfund" value="" class="form-control" placeholder="Amount" >
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Used Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="fund_usedamount" id="fund_usedamount" value="" readonly class="form-control" placeholder="Used Amount" >
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Remaining Fund Source Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="avail_FundSource" id="avail_FundSource" value="" class="form-control" placeholder="Remaining Fund Source Amount" readonly>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Available Fund Source Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="availorig" readonly id="availorig" class="form-control" placeholder="Available FundSource Amount">
						</div>
						<input type="hidden" name="fundformIden" id="fundformIden">
						<input type="hidden" name="fundEnccode" id="fundEnccode">
						<input type="hidden" name="codefund" id="codefund">
						<input type="hidden" name="amount2" id="amount2">
						<input type="hidden" name="updatecodefund" id="updatecodefund">
						<input type="hidden" name="updatedatefund" id="updatedatefund">
						<input type="hidden" name="updatedremamount" id="updatedremamount">
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

<br>
<br>
<div class="tab-pane fade" id="fund" role="tabpanel" aria-labelledby="fund-tab">
	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>&nbsp FundSource/s
			</div>
		</div>
		<div class="col-md-6 mb-2">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button type ="button" id = "btnFundSource_Add" title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add FundSource/s</button>
			</div>
		</div>		
	</div>	
	<table id="TableFund" class="table table-sm table-condensed table-bordered" width="100%">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Transaction Date</th>
				<th>Referral Date</th>
				<th>Fund Source</th>
				<th>Amount</th>
				<th>Used Amount</th>
				<th>Available Amount</th>
				<th width="140px"></th>
			</tr>
		</thead>
	</table>

	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success "> TOTAL
			</div>			
		</div>
		<div class="col-md-6 mb-2">
			<div class="h4 text text-success col-md-3"><label id="TOTALFUNDSOURCE"></label> 
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('SocialService/ModalFund.php');?>
<?php $this->load->view('SocialService/ModalTypeCharge.php');?>

<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_fundsource.js"></script>
<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_fundsource_typecharge.js"></script>
