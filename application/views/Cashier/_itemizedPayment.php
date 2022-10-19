<form name="formPaymentItem" id="formPaymentItem">
   <div class="modal fade" id="ModalPayment_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered modal-lg"  >
         <div class="modal-content card-accent-success">
            <div class="modal-body">
				<div class="text text-success h5"><i class="fa fa-user-circle-o"></i> Payment Information</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-1 mb-1">
								Date:
							</div>
							<div class="col-md-11 mb-1">
									<input class="form-control form-control-md  mb-1"  type="datetime-local"  name="ordate" id="ordate">
							</div>
							<div class="col-md-1 mb-1">
								OR:
							</div>
							<div class="col-md-11 mb-1">
								<input class="form-control mb-1  form-control-md mb-1"   type="text" name="orno" id="orno" placeholder="OR Number">
							</div>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
				<div class="text text-success h5"><i class="fa fa-th-list"></i> List of items</div>
							<table id="toPayList" class="table table-sm table-bordered" style="cursor:pointer"  width="100%">
								<thead>
									<tr>
										<th>Chargesslip</th>
										<th>Description</th>
										<th>Quantity</th>
										<th>Amount</th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th></th>
										<th></th>
										<th width="5px" class="text-success text-right">Amount due:</th>
										<th id="totalPayAmount"></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</tfoot>
							</table>
					</div>
					</div>
					<div class="row">
						<div class="col-md-6 border-right">
							<div class="row">
								<div class="col-md-3 mb-1 text-success">
									Tendered:
								</div>
								<div class="col-md-9 mb-1">
									<input class="form-control mb-1 form-control-md  mb-1"  type="number" step='any' name="tenderedAmt"  id="tenderedAmt_Item" placeholder="Tendered Amount">
								</div>
								<div class="col-md-3 mb-1 text-success">
									Balance:
								</div>
								<div class="col-md-9 mb-1 text-success">
									<input class="form-control mb-1  form-control-md mb-1" readonly  type="number" name="balanceAmt" id="balanceAmt_item" placeholder="Balance">
								</div>
								<div class="col-md-3 mb-1 text-success">
									Remarks:
								</div>
								<div class="col-md-9 mb-1">
										<textarea type="text" name="itemRemarks" id="itemRemarks"  class="form-control form-control-lg mb-1" placeholder="Remarks"></textarea>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<div class="row">
							<div class="form-check">
								<input  type="radio"  id="itemMop" name="itemMop"  onchange="cheque(this.value);" value="C">
								<span class="text-success"> :Cash</span>
								<label class="form-check-label" for="toc"></label>
							</div>	
							<div class="form-check">
								<input  type="radio"  id="itemMop" name="itemMop" onchange="cheque(this.value);" value="X">
								<span class="text-success"> :Cheque</span>
								<label class="form-check-label" for="toc"></label>
							</div>
						</div>
							<div class="row">
							<div class="col-md-3 mb-1">
								Cheque no:
							</div>
							<div class="col-md-9 mb-1">
								<input class="form-control form-control-md mb-1"  type="text" name="checkno" id="checkno" readonly placeholder="Cheque No">
							</div>
							<div class="col-md-3 mb-1">
								Check Date:
							</div>
							<div class="col-md-9 mb-1">
								<input class="form-control form-control-md mb-1"  type="text" name="checkdate" id="checkdate"  readonly placeholder="Cheque Date">
							</div>
							</div>
						</div>
					</div>
					<input class="form-control form-control-md mb-1"  type="hidden" name="formtype" id="formtype" >
					
            </div>
			<div class="modal-footer">	
				<div class="btn-group">
					<button type="submit"  class="btn btn-outline-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-refresh"></i> Process</button>
					<button class="btn btn-outline-danger btn-md  btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> Cancel</button>
				</div>
			</div>
         </div>
      </div>
   </div>
</form>
<script>
	$('#tenderedAmt_Item').on('change', function (){
    var ta= $(this).val();
    var total=$("#totalPayAmount").text();	
    var compute= total - ta;
    $("#balanceAmt_item").val(compute);
});


$('#formPaymentItem').submit('click',function(){

var orno = $("#orno").val();
var paylist=$('#toPayList').DataTable();
var row  = paylist.rows().indexes().toArray(); 
var dataJSON =[];
for(var i = 0; i <row.length; i++)
{
var dataArr={};
var enccode = $.session.get('Cashierenccode');
var hpercode= $.session.get('Cashierhpercode');
var slipno= $(paylist.cell(row[i], 0).node()).text();
var itemcode= $(paylist.cell(row[i], 4).node()).text();
var chrgcode= $(paylist.cell(row[i], 5).node()).text();
var amt= $(paylist.cell(row[i], 3).node()).text();

var ordate =$("#ordate").val();
var acctno = $("#account").text();
var orno = $("#orno").val();
var remarks = $("#itemRemarks").val();
var itemmop = $("input[name=itemMop]").val();
var checkno = $("#checkno").val();
var checkdate = $("#checkdate").val();
var balance = $("#balanceAmt_item").val();
var tendered = $("#tenderedAmt_Item").val();
var formType = $("#formtype").val();

	dataArr.counter= row.length;
    dataArr.enccode= enccode;
	dataArr.hpercode= hpercode;
	dataArr.slipno= slipno;
	dataArr.itemcode= itemcode;
	dataArr.amt= amt;
	dataArr.ordate= ordate;
	dataArr.chrgcode= chrgcode;
	dataArr.acctno= acctno;
	dataArr.orno= orno;
	dataArr.remarks= remarks;
	dataArr.itemmop= itemmop;
	dataArr.checkno= checkno;
	dataArr.balance= balance;
	dataArr.tendered= tendered;
	dataArr.checkdate= checkdate;
	dataArr.formType= formType;
    dataJSON.push(dataArr);
}       

var  dataJSONSTRING = JSON.stringify(dataJSON);
console.log(dataJSONSTRING);
var url = baseURL+"Cashier/savePaymentItem";
        $.ajax({
        type:'POST',
        data:{data:dataJSONSTRING},
        dataType:'JSON',
        url:url,
        success:function(data) {
            toastr.success('Payment done!','Success');
            $("#ModalPayment_modal").modal('hide');
			location.reload();
        },
        error:function(data){
            console.log(data.status);
        }
        });
return false;
});

$("#ModalPayment_modal").on('hidden.coreui.modal',function(){
	$('#toPayList').DataTable().clear().draw();
 });

</script>

