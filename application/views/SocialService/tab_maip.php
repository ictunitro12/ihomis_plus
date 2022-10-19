<style>

table#TableMAIP.dataTable tbody tr:hover {
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
				<iframe id="maipountPDF" type="application/pdf" frameborder="2" width="100%" height="650px"></iframe>
			</div>
		</div>
	</div>
</div>
<form id="frmMAIPDelete" name="frmMAIPDelete" method="post">
	<div class="modal fade" id="ModalMAIPDelete" name="ModalMAIPDelete" role="form">
		<input type="hidden" name="maipHpercodeDelete" id="maipHpercodeDelete">
		<input type="hidden" name="maipUniqueCodeDelete" id="maipUniqueCodeDelete">
		<input type="hidden" name="deleteMAIP" id="deleteMAIP" value="delete">
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




<form name ="frmMAIP" id="frmMAIP" method="post">
	<div class="modal" id="ModalMAIP_modal" name="ModalMAIP_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
						<h4 class="modal-title text-success float-left"><i class="fa fa-percent"></i> MAIP/s</h4>
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
					<div class="form-row">
						<div class="col-md-4 col-form-label  text-default mb-1">
							Unique Code:
						</div>
						<div class="col-md-8">
							<input type="text" name="uniquecode" id="uniquecode"  class="form-control" placeholder="Unique Code" maxlength="45">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Fund Source:
						</div>
						<div class="col-md-7">
							<input type="text" name="fundname_maip" readonly id="fundname_maip"  class="form-control" placeholder="Fund Source">
						</div>
						<div class="col-md-1">
							<a id="btnFundMAIP" class="btn btn-success"><i class="fa fa-plus"></i></a>
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Indorsement Date:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="dateIndorse" id="dateIndorse" value="" class="form-control" >
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Date Expiry:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="dateExpired" id="dateExpired" value="" class="form-control">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="amount_maip" id="amount_maip" value="" class="form-control" placeholder="Amount" >
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Remaining Amount:
						</div>
						<div class="col-md-8">
							<input type="number" name="remaining_amount" id="remaining_amount" value="" class="form-control" placeholder="Remaining Amount" >
						</div>


						<input type="hidden" name="maipformIden" id="maipformIden">
						<input type="hidden" name="maipHpercode" id="maipHpercode">
						<input type="hidden" name="datetrans" id="datetrans">
						<input type="hidden" name="codemaip" id="codemaip">

						<input type="hidden" name="totalAmountCharges" id="totalAmountCharges">
						
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

<div class="tab-pane fade" id="maip" role="tabpanel" aria-labelledby="maip-tab">
	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>&nbsp MAIP
			</div>
		</div>
		<div class="col-md-6 mb-2">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button type ="button" id = "btnMAIP_Add" title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add MAIP</button>
			</div>
		</div>		
	</div>	
	<table id="TableMAIP" class="table table-sm table-condensed table-bordered" width="100%">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th></th>
				<th>Unique Code</th>
				<th>Fund Source</th>
				<th>Indorsement Date</th>
				<th>Date Expiry</th>
				<th>Amount</th>
				<th>Remaining Amount</th>
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
			<div class="h4 text text-success col-md-3"><label id="TOTAL"></label> 
			</div>
		</div>
	</div>
</div>


<?php $this->load->view('SocialService/ModalFundMAIP.php');?>
<?php $this->load->view('SocialService/ModalMAIPCharge.php');?>

<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_maip.js"></script>
