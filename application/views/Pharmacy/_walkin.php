<style>

table#walkinTbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
		<div class="row">
			<div class="col-6 col-md-6">
				<div class="h4 float-left text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Walkin
				</div>
			</div>
			<div class="col-6 col-md-6 mb-2 ">
				<div class="btn-group float-right" role="group" aria-label="">
					<button type ="button" id="btnCharge_add" class="btn btn-outline-success btn-md" data-style="zoom-in"><i class="fa fa-plus"></i>Charge</button>
				</div>
			</div>		
</div>
		<table id="walkinTbl" class="table table-sm table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th width="5%">Datetime</th>
					<th width="10%">Chargeslip</th>
					<th width="40%">Name</th>
					<th width="15%">Amount</th>
					<th width="10%">Paid</th>
					<th width="8%">Status</th>
					<th width="3%"></th>
				</tr>
			</thead>
		</table>
		
	<form id="frmDeleteWalkin" name="frmDeleteWalkin" method="POST">
		<div class="modal" id="modalDeleteWalkin" name="modalDeleteWalkin"  role="form">
			<input type="hidden" name="delorno" id="delorno">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp Delete Record</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>				
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
					  <button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
			</div>
			</div>
     </form>

		
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

<input name="module" id ="module" type="hidden" value="pharmacy">
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_walkin.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_walkinactions.js"></script>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/_walkinlib.js"></script>
