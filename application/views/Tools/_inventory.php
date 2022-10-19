<style>

table#admtbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#opdtbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#ertbl.dataTable tbody tr:hover {
  background-color: #80DB88;
}
table#myAppointmentTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6 col-md-auto">
						<div class="h3 text text-success">
							<i class="fa fa-bar-chart"></i>
							&nbsp<?php echo $header; ?>
							&nbsp <small><?php echo $subheader; ?></small>
						</div>
                    </div>
				</div>
			</div>
			<div class="card-body">
				<ul class="nav nav-tabs nav-justified" id="myTab1" role="tablist">
					<li class="nav-item">
						<a class="nav-link text text-success active" id="pharm-tab" data-toggle="tab" href="#pharm" role="tab" aria-controls="pharm" aria-expanded="true"><i class="fa fa-pills fa-2x"></i>&nbsp Pharmacy</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text text-success " id="cssr-tab" data-toggle="tab" href="#cssr" role="tab" aria-controls="cssr"><i class="fa fa-syringe  fa-2x"></i>&nbsp Central supply</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active mb-1" id="pharm" role="tabpanel" aria-labelledby="pharm-tab">
						<div class="clearfix mb-2">
							<div class="h4 text-success float-left">
								List/s
							</div>
							<button class="btn btn-outline-success btn-md float-right" id="btnCreateAcc">
								Create Account
							</button>
						</div>
						<div class="table-responsive">
                        <table id="medAcctTbl" style="cursor:pointer;" class="table table-sm table-striped table-bordered  table-hover"
                            width="100%">
							<thead>
								<tr>
									<th width="50px" class="align-middle" rowspan="2">Code</th>
									<th width="50px" class="align-middle" rowspan="2">EDPMS</th>
									<th width="100px" class="align-middle" rowspan="2">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
									
									<th style="text-align:center; vertical-align:middle;" colspan="2">Stock</th>
									<th width="5px" rowspan="2"></th>
								</tr>
								<tr>
									<th width="5px">Stock</th>
									<th width="5px">Begin</th>
								</tr>
							</thead>
                        </table>
					</div>
					</div>
					<div class="tab-pane fade" id="cssr" role="tabpanel" aria-labelledby="opd-tab"> 
						<br>
						<table id="opdtbl" class="table table-sm table-striped  table-bordered  table-condensed table-hover " width="100%">
							<thead>
								<tr>
									<th></th>
									<th width="140px">Health Record no</th>
									<th>Patient name(<small>Firstname,Middlename,Lastname Suffix</small>)</th>
									<th>Sex(<small>Male,Female</small>)</th>
									<th>Type</th>
									<th>Date Entered</th>
									<th width="50px"></th>
								</tr>
							</thead>

						</table>
					</div>
				</div>
			</div>
			<div class="card-footer"></div>
		</div>

	</div>
</div>


<script>
   	$(function() {
		accountDrug();
	});

	$("#btnCreateAcc").on('click',function(){
		$("#modalDrug").modal('show');
	});
 
function accountDrug() {
	var data = new Object();
	data.id = "medAcctTbl";
	data.link = baseURL + "Pharmacy/accountToFix";
	data.dataType = 'JSON';
	data.type = "POST";
	data.search = true;
	data.info = true;
	data.paging = true;
	data.rowsGroup =[1];
	data.destroy = true;
	data.columns = [
			{ data: "dmdcomb" },
			{ data: "chrgdesc" },
			{
				data: "description",
				render: function (data, type, row) {
					return "<em>" + data + "</em>";
				}
			},
			{ data: "stockbal" },
			{ data: "begbal" },
			{
				data:null,
				render: function (data, type, row) {
					return "<div class=btn-group role=group>" +
						"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>" +
						"<i class='fa fa-th-list'></i>" +
						"</button>" +
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
						"<a class='dropdown-item'  data-dmdcomb='" + row.dmdcomb + "'  data-description='" + row.description + "' data-dmdctr='" + row.dmdctr + "' data-dmsub='" + row.dmhdrsub + "'  data-formcode='" + row.formcode + "'  data-baldteasof='" + row.baldteasof + "' id='btnTypeAcc' href='#'><i class='fa fa-th-list'></i> &nbsp Show items</a>" +
						"<a class='dropdown-item'  data-barcode ='" + row.barcode + "' data-reord ='" + row.reorder_level + "'  data-dmdcomb='" + row.dmdcomb + "' data-drugname='" + row.description + "' data-dmdctr='" + row.dmdctr + "'  data-dmsub='" + row.dmhdrsub + "' data-formcode='" + row.formcode + "'  data-baldteasof='" + row.baldteasof + "' id='btnStock_Edit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>" +
						"</div>" +
						"</div>";
				}
			}
		],
		data.coldef = [
			{
				targets: ["_all"],
				className: 'align-middle',
			},{
				targets: [0],
				visible: false,
			}];
	return Datatable(data);
}

$('#medAcctTbl').on('click','#btnTypeAcc',function (e) {
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmsub');
	var unitcode = $(this).data('formcode');
	var baldteasof  = $(this).data('baldteasof');
	$("#drugName").text($(this).data('description'));
	$("#dmdcomb").val(dmdcomb);
	$("#dmdctr").val(dmdctr);
	$("#dmdsub").val(dmsub);
	$("#unitcode").val(unitcode);
	$("#baldteasof").val(baldteasof);
	$("#modalDrugAccount").modal('show');
	var data = new Object();
	data.id = "drugaccTbl";
	data.link = baseURL + "Pharmacy/itemToFix";
	data.dataType = 'JSON';
	data.data =  {dmdcomb : dmdcomb, dmdctr : dmdctr ,account:dmsub};
	data.type = "POST";
	data.search = true;
	data.info = true;
	data.paging = true;
	data.destroy = true;
	data.columns = [
		{ data: "dmdprdte",
		
		render: function (data, type, row) {
			return formatDatetime(data);			
		}
	
		},
		{ data: "lotno",
			render: function (data, type, row) {
					if(data==null){
						return '<div class="text-danger">No lotno!</div>';
					}else{
						return data;
					}
			}
		},
		{ data: "stockbal",
			render: function (data, type, row) {
					if(data==null){
						return '<div class="text-danger">No Stock balance!</div>';
					}else{
						return data;
					}
			}
		},
		{ data: "begbal",
			render: function (data, type, row) {
					if(data==null){
						return '<div class="text-danger">No Beginning balance!</div>';
					}else{
						return data;
					}
			}
		},
		{ data: "expiry" },
		{ data: "dmdrem" },
		{
			data:null,
			render: function (data, type, row) {
				return "<span class='fa fa-edit text-success'  style ='cursor:pointer' data-remarks = '" + row.remarks + "' data-dmduprice = '" + row.dmduprice + "'  data-lotno = '" + row.lotno + "'  data-expiry = '" + row.expiry + "' data-uprice = '" + row.dmduprice + "'  data-selprice = '" + row.dmselprice + "'   data-stockbal='" + row.stockbal + "' data-begin='" + row.begbal + "'data-dmdcomb='" + row.dmdcomb + "'  data-description='" + row.description + "'  data-formcode='" + row.unitcode + "'  data-dmdprdte='" + row.dmdprdte + "' data-dmdctr='" + row.dmdctr + "' data-dmsub='" + row.dmhdrsub + "' id='btnEditItem'>&nbsp Edit</span>";
			}
		},
		{
			data:null,
			render: function (data, type, row) {
				return "<span class='fa fa-trash text-danger'  style ='cursor:pointer' data-remarks = '" + row.remarks + "'  data-lotno = '" + row.lotno + "'  data-expiry = '" + row.expiry + "' data-uprice = '" + row.dmduprice + "'  data-selprice = '" + row.dmselprice + "'   data-stockbal='" + row.stockbal + "' data-begin='" + row.begbal + "'data-dmdcomb='" + row.dmdcomb + "'  data-description='" + row.description + "'  data-formcode='" + row.unitcode + "'  data-dmdprdte='" + row.dmdprdte + "' data-dmdctr='" + row.dmdctr + "' data-dmsub='" + row.dmhdrsub + "' id='btnDeleteItem'>&nbsp Delete</span>";
		}
		}
		    
	];
	data.coldef = [
		{
			targets: ["_all"],
			className: "align-middle"
		}];

	data.footerCallback=function ( row, data, start, end, display ) {
						var api = this.api(), data;
			 
						var intVal = function ( i ) {
							return typeof i === 'string' ?
								i.replace(/[\$,]/g, '')*1 :
								typeof i === 'number' ?
									i : 0;
						};
					
						var stock = api
							.column(2)
							.data()
							.reduce( function (a, b) {
								return intVal(a) + intVal(b);
							}, 0 );

						var begin = api
							.column(3)
							.data()
							.reduce( function (a, b) {
								return intVal(a) + intVal(b);
							}, 0 );
			 
						$("#totalStock").val(stock);
						$("#totalBegin").val(begin);
						
						
						};
							

	 Datatable(data);
	
});

$("#drugaccTbl").on('click','#btnEditItem',function(){
	$("#modalDrugForm").modal('show');
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmsub');
	var unitcode = $(this).data('formcode');
	var dmdprdte  = $(this).data('dmdprdte');
	var stock = $(this).data('stockbal');
	var begin  = $(this).data('begin');
	var uprice = $(this).data('dmduprice');
	alert(uprice);
	var selprice  = $(this).data('selprice');
	var expiry = $(this).data('expiry');
	var lotno  = $(this).data('lotno');
	
	$("#comb").val(dmdcomb);
	$("#ctr").val(dmdctr);
	$("#sub").val(dmsub);
	$("#beginbalance").val(stock);
	$("#stockbalance").val(begin);
	$("#unitprice").val(uprice);
	$("#selling").val(selprice);
	$("#formcode").val(unitcode);
	$("#dmdprdte").val(dmdprdte);
	$("#lotno").val(lotno);
	$("#expiry").val(expiry);
	$("#formiden").val('update');
});

$("#drugaccTbl").on('click','#btnDeleteItem',function(){
	$("#deleteModalItem").modal('show');
	var dmdcomb = $(this).data('dmdcomb');
	var dmdctr = $(this).data('dmdctr');
	var dmsub = $(this).data('dmsub');
	var unitcode = $(this).data('formcode');
	var dmdprdte  = $(this).data('dmdprdte');
	$("#deldmdcomb").val(dmdcomb);
	$("#deldmctr").val(dmdctr);
	$("#deldmsub").val(dmsub);
	$("#deldate").val(dmdprdte);
});


$("#btnAddItem").on('click',function(){
	$("#modalDrugForm").modal('show');
	$("#comb").val($("#dmdcomb").val());
	$("#ctr").val($("#dmdctr").val());
	$("#sub").val($("#dmdsub").val());
	$("#formcode").val($("#unitcode").val());
	$("#dmdprdte").val(getTimeLocale());
	$("#formiden").val('insert');
});

$('#frmAccount').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/saveOverrideAccount",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#medAcctTbl").DataTable().ajax.reload();
			toastr.success('Record saved!', 'Success!');
			$("#modalDrugAccount").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});


$('#frmdrugAccount').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/saveOverrideItem",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#drugaccTbl").DataTable().ajax.reload();
			toastr.success('Record saved!', 'Success!');
			$("#modalDrugForm").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});

$('#frmDeleteDrug').on('submit', function (e) {
	var form = this;
	$.ajax({
		type: "POST",
		url: baseURL + "Pharmacy/saveOverrideItem",
		data: new FormData(this),
		processData: false,
		contentType: false,
		success: function (data, response) {
			$("#drugaccTbl").DataTable().ajax.reload();
			toastr.success('Record deleted!', 'Success!');
			$("#deleteModalItem").modal('hide');
		},
		error: function (xhr, desc, err) {
			toastr.error(err, 'ERROR!');
		}
	});
	return false;
});

$('#modalDrugForm').on('hidden.coreui.modal', function(event) {
	$(this).find("input,textarea,select").val('').end();
	$(this).find("checkbox,radio").prop('checked',false);
	$(this).find("radio").removeAttr('checked');
	$(this).find("input,textarea,select").removeClass('is-valid'); 
	$(this).find("input,textarea,select").removeClass('is-invalid');
	$(this).find("select").val('').trigger('change');	
});


</script>

   