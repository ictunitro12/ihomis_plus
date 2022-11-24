<form id="frmDeleteDiag" name="frmDeleteDiag" method="post">
	<div class="modal" id="deleteBMIModal" name="deleteVitalModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger" <i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="diagMIenccode" id="diagMIenccode">
			<input type="hidden" name="diagBMIdatelog" id="diagBMIdatelog">
			<input type="hidden" name="diagformIdenDelete" id="diagformIdenDelete" value="delete">
		</div>
		<div class="modal-footer ">
		<button type="submit"  class="btn btn-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i></button>
		<button class="btn btn-default btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
		</div>
		</div>
		</div>
	</div>
</form>



<form id = "frmdrugRec" name="frmdrugRec" class="form">
	<div class="modal fade" id="drugReceiveModal"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
				<h2 class=" h4 modal-title text-success"><i class="fa fa-reply"></i> Received</h2>
				<br>
				<div class="form-row">
					<div class="col-md-4 col-form-label text-default mb-1">
						Date request:
					</div>
					<div class="col-md-8">
						<input type="datetime-local" class="form-control form-control mb-1" autocomplete="off" id="dtereceivedMed" name="dterequestMed">
					</div>
					<div class="col-md-4 col-form-label text-default mb-1">
						Items:
					</div>
					<div class="col-md-8">
						<select class="form-control form-control mb-1"  id="itemreceivedMed_drugs" name="itemrequestMed_drugs">
							<option value="">Select</option>
						</select>
					</div>
					
					<div class="col-md-4 col-form-label text-default mb-1">
						Quantity:
					</div>
					<div class="col-md-8">
						<input type="number" class="form-control form-control mb-1" minlength="1" value=1 autocomplete="off" id="qtyreceiveMed" name="qtyrequestMed">
					</div>	
					<div class="col-md-4 col-form-label text-default mb-1">
						Priority:
					</div>
					<div class="col-md-8">
						<select class="form-control form-control mb-1"  id="priorequestMed" name="priorequestMed">
							<option value="">Select</option>
							<option value="Y">Yes</option>
							<option value="N">No</option>
						</select>
					</div>
					<input type="text"  name="locacodeMedrec" id="locacodeMedrec" value ='<?php echo $this->uri->segment(3)?>'>
					<input type="text"  name="formIdenrecMed" id="formIdenrecMed">
				</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="btnSaveDiag" id="btnSaveDiag"  class="btn btn-success btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-save"></i></button>
					<button class="btn btn-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>
<?php $this->load->view('Pharmacy/_modalDrugList.php');?>
<script src="<?php echo base_url()?>assets/scripts/pharmacy/stock.js"></script>