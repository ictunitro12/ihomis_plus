
<style>

table#chargesTbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>

	<div class="modal " id="ModalChargeslip" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
			 <div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i> Chargeslip</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
				   <iframe id="chargesPdf" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
				</div>
			 </div>
		  </div>
	   </div>
	   
	<div class="modal " id="ModalFinalBill" tabindex="-1" role="dialog">
		  <div class="modal-dialog modal-dialog-centered modal-xl" role="dialog">
			 <div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i> Final Bill</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
				   <iframe id="finalBillPdf" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
				</div>
			 </div>
		  </div>
	   </div>
	   
	   
<form id="frmDeleteCharge" name="frmDeleteDiag" method="post">
	<div class="modal fade" id="ModalChargesDelete" name="ModalChargesDelete" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"> <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<h5 id="deleteChargeDesc"></h5>
			<input type="hidden" name="chrgSlipNo" id="chrgSlipNo">
			<input type="hidden" name="chrgCode" id="chrgCode">
			<input type="hidden" name="chrgItemCode" id="chrgItemCode">
			<input type="hidden" name="chrgDelete" id="chrgDelete">
			<input type="hidden" name="chrgEnccode" id="chrgEnccode">
			<input type="hidden" name="chrgDesc" id="chrgDesc">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>

<form id="frmSelectBill" name="frmSelectBill" method="post">
	<div class="modal" id="ModalSelectType" name="ModalChargesDelete" role="form">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="form">
		<div class="modal-content">
		<div class="modal-body">
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>	
			<h4 class="text text-success"><i class="fa fa-print"></i> Print Option</h4>
			<hr>
			<div class="form-check">
			<input class="form-check-input" type="radio" name="billingType"  checked id="billingType" value="final">
			  <label class="form-check-label" for="billingType">
				Final
			  </label>
			</div>
			<div class="form-check">
			<input class="form-check-input" type="radio" name="billingType" disabled id="billingType" value="tenta">
			  <label class="form-check-label" for="billingType">
				Tentative
			  </label>
			</div>
			<hr>
			<div class="form-check">
			<input class="form-check-input" type="radio" name="billingMode" id="billingMode" value="details">
			  <label class="form-check-label" for="billingMode">
				Details Only
			  </label>
			</div>
			<div class="form-check">
			<input class="form-check-input" type="radio" name="billingMode" id="billingMode" value="summary">
			  <label class="form-check-label" for="billingMode">
				Summary Only
			  </label>
			</div>
			<div class="form-check">
			<input class="form-check-input" type="radio" name="billingMode" id="billingMode" value="all">
			  <label class="form-check-label" for="billingMode">
				Details & Summary
			  </label>
			</div>
			<hr>
			<div class="form-check">
			<input class="form-check-input" type="checkbox" name="billingMode" id="billingMode" value="phic">
			  <label class="form-check-label" for="billingClaim">
				Philhealth Claim?
			  </label>
			</div>
		</div>
		<div class="modal-footer">
				<button type="submit" class="btn btn-outline-success btn-lg btn-block"><i class="fa fa-file-pdf-o"></i> GENERATE</button>
				
			</div>
		</div>
		</div>
		</div>
	
</form>

	<div class="tab-pane fade show active" id="charges" role="tabpanel" aria-labelledby="charges-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h4 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Charge/s
				</div>
			</div>
			<div class="col-md-6">
				<div class="btn-group pull-right" role="group" aria-label="">
					<button type ="button" id="btnCharge_add"  title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i>  Add Charges</button>
					<!--div class="btn-group" role="group">
						<button id="btnGroupDrop1" type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fa fa-print"></i> Printbill
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
							<a class="dropdown-item" id="btnFinalBill"><i class="fa fa-file-pdf-o"></i>&nbsp Final Bill</a>
						</div>
					</div-->
				</div>
			</div>		
		</div>	
		<div class="p-2 table-responsive">
			<table id="chargesTbl" class="table table-sm table-condensed "width="100%">
				<thead>
					<tr>
						<!--th></th>
						<th></th>
						<th width="30%">Datetime</th>
						<th width="50%">Chargeslip</th>
						<th	width="15%">Amount</th>
						<th width="5%"></th -->
						<th width="10%" class="chargeSlipNumber">Charge Slip#</th>
						<th width="10%" class="chargeDateTime">Date/Time</th>
						<th width="20%" class="typeOfCharge">Type of Charge</th>
						<th width="30%" class="itemDescription">Item</th>
						<th width="5%" class="chargeQuantity">Quantity</th>
						<th width="10%" class="chargePrice">Price</th>
						<th width="10%" class="chargeAmount">Amount</th>
						<th width="5%"></th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th width="10%"></th>
						<th width="10%"></th>
						<th width="20%"></th>
						<th width="30%"></th>
						<th width="5%"></th>
						<th width="10%"></th>
						<th width="10%" id="chrgTotal"></th>
						<th width="5%"></th>
				</tfoot>

				<!--th></th>
						<th></th>
						<th width="50%"></th>
						<th width="30%"></th>
						<th	width="15%" id="chrgTotal"></th>
						<th width="5%"></th>
					</tr -->

			</table>
		</div>
		
	</div>
<?php $this->load->view('Billing/_charges.php');?>
<script src="<?php echo base_url()?>assets/scripts/billing/charges.js"></script>
<script src="<?php echo base_url()?>assets/scripts/billing/billing_validation.js"></script>