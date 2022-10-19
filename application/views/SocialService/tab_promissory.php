<style>

table#TablePromi.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="modal" id="modalPromiPDF" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content card-accent-success">
			<div class="modal-body">
				<div class="clearfix">
					<h4 class="modal-title text-success float-left"><i class="fa fa-file-pdf-o"></i> Promisorry</h4>
					<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
				</div>
				<iframe id="promiountPDF" type="application/pdf" frameborder="2" width="100%" height="850px"></iframe>
			</div>
		</div>
	</div>
</div>
<form id="frmPromisorryDelete" name="frmPromisorryDelete" method="post">
	<div class="modal fade" id="ModalPromisorryDelete" name="ModalPromisorryDelete" role="form">		
		<input type="hidden" name="promiEnccodeDelete" id="promiEnccodeDelete">
		<input type="hidden" name="deletePromisorry" id="deletePromisorry" value="delete">
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




<form name ="frmPromissory" id="frmPromissory" method="post">
	<div class="modal" id="ModalPromisorry_modal" name="ModalPromisorry_modal" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-body">
					<div class="clearfix">
						<h4 class="modal-title text-success float-left"><i class="fa fa-percent"></i> Promisorry</h4>
						<a class=" float-right" data-dismiss="modal" ><i class="fa fa-close"></i></a>			   
					</div>
					<div class="form-row">
						<div class="col-md-4 col-form-label  text-default mb-1">
							Promissory Note Number:
						</div>
						<div class="col-md-8">
							<input type="text" name="prominum" id="prominum" class="form-control" placeholder="Promissory Note Number" maxlength="10">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Promissory Note Date:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="datePromi" id="datePromi" class="form-control">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Name of Person Signing the Promissory Note:
						</div>
						<div class="col-md-8">
							<input type="text" name="namesign"  id="namesign" class="form-control" placeholder="Name of Person Signing the Promissory Note">
						</div>
						<div class="col-md-4 col-form-label  text-default mb-1">
							Payabale Due First:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="payfirst"  id="payfirst" class="form-control" placeholder="Payabale Due First">
						</div>

						<div class="col-md-4 col-form-label  text-default mb-1">
							Payabale Due Second:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="paysecond"  id="paysecond" class="form-control" placeholder="Payabale Due Second">
						</div>

						<div class="col-md-4 col-form-label  text-default mb-1">
							Payabale Due Third:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" name="paythird"  id="paythird" class="form-control" placeholder="Payabale Due Third">
						</div>

						<div class="col-md-4 col-form-label  text-default mb-1">
							Payabale Due Amount First:
						</div>
						<div class="col-md-8">
							<input type="number" name="payamountfirst" id="payamountfirst" class="form-control" placeholder="Payabale Due Amount First">
						</div>

						<div class="col-md-4 col-form-label  text-default mb-1">
							Payabale Due Amount Second:
						</div>
						<div class="col-md-8">
							<input type="number" name="payamountsecond" id="payamountsecond" class="form-control" placeholder="Payabale Due Amount Second">
						</div>

						<div class="col-md-4 col-form-label  text-default mb-1">
							Payabale Due Amount Third:
						</div>
						<div class="col-md-8">
							<input type="number" name="payamountthird" id="payamountthird" class="form-control" placeholder="Payabale Due Amount Third">
						</div>


						<input type="hidden" name="promiformIden" id="promiformIden">
						<input type="hidden" name="promiEnccode" id="promiEnccode">
						<input type="hidden" name="promiHpercode" id="promiHpercode">
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



<div class="tab-pane fade" id="promi" role="tabpanel" aria-labelledby="promi-tab">
	<div class="row">
		<div class="col-md-6">
			<div class="h4 text text-success"> 
				<i class="fa fa-th-list"></i>&nbsp Promisorry
			</div>
		</div>
		<div class="col-md-6 mb-2">
			<div class="btn-group pull-right" role="group" aria-label="">
				<button type ="button" id = "btnPromissory_Add" title=""  class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i> Add Promisorry/s</button>
			</div>
		</div>		
	</div>	
	<table id="TablePromi" class="table table-sm table-condensed table-bordered" width="100%">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Promissory Note Number</th>
				<th>Promissory Note Date</th>
				<th>Name of Person Signing the Promissory Note</th>
				<th>Payabale Due First</th>
				<th>Payabale Due Second</th>
				<th>Payabale Due Third</th>
				<th>Payabale Due Amount First</th>
				<th>Payabale Due Amount Second</th>
				<th>Payabale Due Amount Third</th>
				<th width="50px"></th>
			</tr>
		</thead>
	</table>
</div>

<script src="<?php echo base_url()?>assets/scripts/socialservice/tab_promissory.js"></script>