<style>

table#drugData.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<form id="frmDeleteDeliv" name="frmDeleteDeliv" method="post">
	<div class="modal reset" id="deleteDeliv" name="deleteDeliv" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
		<div class="modal-content">
		<div class="modal-body">
		<h2 class="modal-title text-danger"><i class="fa fa-trash"></i> Delete Record ?</h2>
			<h5> Are you sure do you want to delete this record? </h5>
			<input type="hidden" name="delintkey" id="delintkey">
		</div>
		<div class="modal-footer">
      <div class="btn-group">
	    	<button type="submit"  class="btn btn-outline-danger btn-inline  btn-ladda" data-style="slide-right"><i class="fa fa-trash"></i>&nbsp Delete</button>
	     	<button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>&nbsp Cancel</button>
		  </div>
    </div>
		</div>
		</div>
	</div>
</form>
<form name="formDeliveries" id="formDeliveries">
  <div class="modal" id="modalDeliveries" role="form" style="overflow: auto;">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="form">
  <div class="modal-content">
    <div class="modal-body">
      <div class="modal-title text-success h4"><i class="fa fa-ambulance"></i> Pickup & Delivery</div>
      <hr class="bg-success">
      </hr>
      <h5 class="text-success"><i class="fa fa-th-list"></i> Delivery & Purchase Information</h5>
      <div class="row">
        <div class="col-md-6">
          Date:
          <input type="datetime-local" class="form-control form-control-md" name="delDate" id="delDate"/>
          Type of Account:
          <select class="form-control form-control-md" name="delAcc_acc" id="delAcc_acc"></select>
        </div>
        <div class="col-md-6">
          Delivery No:
          <input type="text" readonly class="form-control form-control-md" name="delNo" id="delNo"/>
          Supplier:
          <select class=" form-control form-control-md" name="delSupp_supplier" id="delSupp_supplier"></select>
        </div>
        <div class="col-md-12">
          Delivery Type:
          <select class=" form-control form-control-sm" name="delSuppind" id="delSuppind">
            <option value="">Select</option>
            <option value="P">Procured</option>
            <option value="D">Donation</option>
            <option value="R">Central Office</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          Sales Invoice :
          <input type="text"  class="form-control form-control-md" autocomplete="off" name="delInvoice" id="delInvoice" placeholder ="Sales invoice"/>
          Requisition Slip no :
          <input type="text"  class="form-control form-control-md" autocomplete="off" name="delRisno" id="delRisno" placeholder ="Requisition Slip number"/>
        </div>
        <div class="col-md-6">
          Purchase Request no:
          <input type="text"  class="form-control form-control-md" autocomplete="off" name="delReqno" id="delReqno" placeholder ="Request no"/>
          Purchase Order no:
          <input type="text"  class="form-control form-control-md" autocomplete="off" name="delPono" id="delPono" placeholder ="Purchase Order no"/>
        </div>
      </div>
      <hr class="bg-success"></hr>
      <h5 class="text-success"><i class="fa fa-th-list"></i> Item information</h5>
      <div class="row">
        <div class="col-md-6">
          Item Type:
          <select class="form-control form-control-md" name="delitem_type" id="delitem_type">
            <option value="">Select</option>
            <option value="DM">Drugs & Medicine</option>
            <option value="SM">Medical Supplies</option>
            <option value="SE">Supplies & Equipment</option>
          </select>
        </div>
		<div class="col-md-6">
          Drug name:
          <div class="input-group">
             <input type="text" readonly class="form-control form-control-md" placeholder="Drugs/ Medicine" name="drug" id="drug"><button id="btnDrug" type="button" class="btn btn-outline-success"><i class="fa fa-search"></i></button>
             <input type="hidden" class="form-control form-control-md" name="dmdcomb" id="drugcomb">
             <input type="hidden"  class="form-control form-control-md" name="dmdctr" id="drugctr">
             <input type="hidden"  class="form-control form-control-md" name="unitcode" id="formcode">
          </div>
          </div>
        
         <div class="col-md-6">
          Quantity:
          <input  type="number" class="form-control form-control-md" placeholder="0" minlength="1" autocomplete="off" name="delQty" id="delQty">
	    	</div>
        <div class="col-md-6">
          UnitPrice:
          <input  type="text" class="form-control form-control-md" placeholder="Unit Price" autocomplete="off" name="uprice" id="uprice">
	    	</div>
      </div>
      <div class="row">
        <div class="col-md-6">
          Expiration:
          <input  type="datetime-local" class="form-control form-control-md" name="delExpire" autocomplete="off" id="delExpire">
        </div>
        <div class="col-md-6">
          Lot no :
          <input  type="text" class="form-control form-control-md" name="delLotno" id="delLotno" autocomplete="off" placeholder='Lot no'>
        </div>
        <div class="col-md-6">
          Remarks :
          <textarea  type="text" class="form-control form-control-md" name="delRem" id="delRem" autocomplete="off" placeholder="Remarks"></textarea>
        </div>
      </div>
      <input name="delivformIden" id="delivformIden" type="hidden">
        <input name="intkey" id="intkey" type="hidden">
</div>
  <div class="modal-footer">
    <div class="btn-group float-right">
      <button type="submit" class="btn btn-outline-success float-right" id="btnSave"><i class="fa fa-save"></i> Save</button>
      <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>Cancel</button>
    </div>
</form>
<?php $this->load->view('Pharmacy/_modalDrugList.php');?>


<script src="<?php echo base_url()?>assets/scripts/pharmacy/stock.js"></script>
<script>

  
	$('#formDeliveries').validate({
	submitHandler: function (form) {
	var  POSTURL = baseURL+"Pharmacy/saveDeliveryPharm";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#delivformIden').val()=='insert'){
					$("#deliver_tbl").DataTable().ajax.reload();
					toastr.success('Order Successfully Saved! ' ,'Success');
					$("#modalDeliveries").modal('hide');
				}else if($('#delivformIden').val()=='update'){
					$("#deliver_tbl").DataTable().ajax.reload();
					toastr.success('Order Successfully Updated! ' ,'Success');
					$("#modalDeliveries").modal('hide');
				}
			},
		
			});
		return false;
		$(form).submit();
   },
  rules:{
    delSupp_supplier:'required',
    delAcc_acc:'required',
    delitem_type:'required',
    delQty:'required',
    delItem_dm:'required',
    delExpire:'required',
    delPrice:'required',
    delLotno:'required',
  },	
  messages:{
	delSupp_supplier:'Supplier is required!',
    delAcc_acc:'Account is required!',
    delitem_type:'Item is required',
    delQty:'Quantity is required!',
    delItem_dm:'Item is required',
    delExpire:'Expiration date is required',
    delPrice:'Item price is required',
    delLotno:'Lot no is required',
  },
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');
	error.insertAfter(element); 
  },
  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2') && $(element).next('.select2-container').length)
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }  
  } 
  });


  $('#frmDeleteDeliv').on('submit', function(e){
		var form = this;
		$.ajax({
			type : "POST",
			url  : baseURL+"Pharmacy/deleteDelivery",
			data :new FormData(this),
			processData: false,
			contentType: false,
			success: function(data,response){
        $("#deliver_tbl").DataTable().ajax.reload();
			  $('#deleteDeliv').modal('hide');
        toastr.success('Successfully Deleted! ' ,'Success');
			},
			error: function(xhr, desc, err){
				toastr.error(xhr ,'Error');
			}
		});
		return false;
	}); 
</script>