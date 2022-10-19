<table id="en_trans" style="cursor:pointer" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
			<thead>
				<tr>
					<th width="10px">Date</th>
					<th width="30px">Code</th>
					<th width="50px">Description</th>
					<th width="5px"></th>
				</tr>
			</thead>
		</table>
<div class="modal" id="modalTransaction" tabindex="-1" role="form">
	<div class="modal-dialog modal-dialog-centered modal-xl" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title h4 text-success"> <i class="fa fa-exchange"> </i> Transaction</div>
			</div>
			<div class="modal-body">
			  <div class="row">
                     <div class="col-md-2 col-form-label  text-success mb-1">
                        Transaction ID:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="text" name="trans_id" id="trans_id" readonly class="form-control form-control-md" placeholder="Transaction ID">
                     </div>
                     <div class="col-md-2 col-form-label  text-success mb-1 ">
                        Transaction Date:
                     </div>
                     <div class="col-md-4 mb-1">
                        <input type="datetime-local" name="trans_date" id="trans_date" readonly class="form-control form-control-md">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2 col-form-label  text-success mb-1">
                       Transaction Type:
                     </div>
                     <div class="col-md-4 mb-1">
                       <select  name="tran_type" id="tran_type"  class="form-control form-control-md">
							<option value="">Select</option>
                       </select>
                     </div>
                     <div class="col-md-2 col-form-label  text-success mb-1">
                        Cost Center:
                     </div>
                     <div class="col-md-4 mb-1">
                        <select  name="costcntr" id="costcntr"  class="form-control form-control-md" placeholder="Cost Center" >
                           <option value="">Cost Centers</option>
                           <option value="LABOR">Laboratory</option>
                           <option value="RADIO">Radiology</option>
                           <option value="PROCE">Procedure</option>
                           <option value="PCKPR">Packages</option>
                           <option value="RADTH">Radio Theraphy</option>
                           <option value="NUCME">Nuclear Medicine</option>
                           <option value="DENTA">Dental</option>
                           <option value="DERMA">Dermatology</option>
                           <option value="OPTHA">Opthalmology</option>
                           <option value="PHARM">Pharmacy</option>
                           <option value="NEURO">Neurology</option>
                           <option value="OPD">Out-Patient Department</option>
                           <option value="ER">Emergency Room</option>
                           <option value="OR">Operating Room</option>
                           <option value="DR">Delivery Room</option>
                           <option value="WARD">Ward</option>
                           <option value="PERIN">Perinatal</option>
                           <option value="CSSR">Central Supply Room</option>
                           <option value="PT">Physical Therapy</option>
                           <option value="MISCE">Miscellanous</option>
                        </select>
                     </div>
                  </div>
				
			</div>
			<div class="modal-footer">
				<button class="btn btn-success"><i class="fa fa-save"></i> </button>
				<button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i> </button>
			</div>
		</div>
	</div>
</div>

<script>

$("#btntrans_Add").on('click',function(){

$("#modalTransaction").modal({backdrop: false, show: true});
$('#trans_date').val(getTimeLocale());

});

</script>


