$("#btnCreateAcc").on('click',function(){
    $("#formIdenDrug").val("insert");
    $("#modalItem").modal('show');
});

$("#btnSearchDrug").on("click", function (e) {
  drugData();
  $("#modaldrugData").modal("show");
});

function accountItem() {
    var data = new Object();
    data.id = "medAcctTbl";
    data.link = baseURL + "Central_Supply/csrstk";
    data.dataType = 'JSON';
    data.type = "POST";
    data.search = true;
    data.info = true;
    data.paging = true;
    data.rowsGroup = [1];
    data.destroy = true;
    data.columns = [

        { data : "cl2comb" },
				{ data : "cl1desc" },
				{ data : "cl2desc" },
				{
					data: "chrgdesc"
				},
				{ data : "stockbal" },
				{ data : "begbal" },
				{
					data: "reorder_level",
					render: function (data, type, row) {
						if(data){
							if(row.stockbal >= data){
								return '<div class="p-2 bg-danger text-center text-white">&nbsp '+data+'(Low)</div>'; 
							}else{
								return '<div class="p-2 bg-success text-center text-white">&nbsp '+data+' </div>'; 
							}
						}else{
							return '<div class="text-center text-danger"> No reorder level </div>';
						}
					}
				},
				{ 
					data : "cl2comb" ,
					render: function(data, type, row){
					return "<div class='btn-group btn-sm'>"+
						"<button type='button' class='btn btn-outline-success  btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>"+
						"<i class='fa fa-th-list'></i>" +
						"<span class='sr-only'>Toggle Dropdown</span>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>" +
						"<a href='javascript:void(0);' class='dropdown-item' id='btnTypeAcc' data-oumcode='"+row.uomcode+"'  data-cl1comb='"+row.cl1comb+"' data-cl1comb='"+row.cl1comb+"' data-cl2code='"+row.cl2code+"' data-description='"+row.cl2desc+"' data-date='"+row.baldteasof+"' data-cl2comb='"+row.cl2comb+"' data-hclass2sub='"+row.hclass2sub+"'><i class='fa fa-th-list'></i>&nbsp Item list/s</a>"+
						"<a href='javascript:void(0);' class='dropdown-item' id='btnStock_Edit' data-cl2comb='"+row.cl2comb+"'><i class='fa fa-refresh'></i>&nbsp Edit</a>"+
						"</div>"+
							"</div>"

				}
                }	
          ];
    return Datatable(data);
}

$('#medAcctTbl').on('click', '#btnTypeAcc', function(e) {
    var data = $(this).data();
    $("#itemName").text(data['description']);
    $("#cl2code").val(data['cl2code']);
    $("#cl1comb").val(data['cl1comb']);
    $("#cl2comb").val(data['cl2comb']);
    $("#hclass2sub").val(data['hclass2sub']);
    $("#unitcode").val(data['oumcode']);
    $("#baldteasof").val(data['date']);
    $("#modalItemAccount").modal('show');
    
    var data = new Object();
    data.id = "itemAccTbl";
    data.link = baseURL + "Central_Supply/itemToFix";
    data.dataType = 'JSON';
    data.data = {
        cl2comb:  $("#cl2comb").val(),
        hclass2sub:  $("#hclass2sub").val()
    };
    data.type = "POST";
    data.search = true;
    data.info = true;
    data.paging = true;
    data.destroy = true;
    data.columns = [{
            data: "cl2dteas",
            render: function(data, type, row) {
                return formatDatetime(data);
            }

        },
        {
            data: "itemcode",
            render: function(data, type, row) {
                if (data == null) {
                    return '<code class="text-danger">No lotno!</code>';
                } else {
                    return data;
                }
            }
        },
        {
            data: "stockbal",
            render: function(data, type, row) {
                if (data == null) {
                    return '<code class="text-danger">No Stock balance!</code>';
                } else {
                    return data;
                }
            }
        },
        {
            data: "begbal",
            render: function(data, type, row) {
                if (data == null) {
                    return '<code class="text-danger">No Beginning balance!</code>';
                } else {
                    return data;
                }
            }
        },
        {
            data: "expiry"
        },
        {
            data: "remarks"
        },
        {
            data: null,
            render: function(data, type, row) {
                return "<span type='button' class='fa fa-edit text-success'  style ='cursor:pointer' data-cl2dteas = '" + row.cl2dteas +"' data-cl2comb = '" + row.cl2comb +"'  data-account = '" + row.hclass2sub +"' id='btnEditItemAcc'>&nbsp Edit</button>";
            }
        },
        {
            data: null,
            render: function(data, type, row) {
                    return "<span type='button' class='fa fa-remove text-danger'  style ='cursor:pointer' data-cl2dteas = '" + row.cl2dteas +"' data-cl2comb = '" + row.cl2comb +"'  data-account = '" + row.hclass2sub +"' id='btnDeleteItem'>&nbsp Delete</button>";
            }
        }

    ];
    data.coldef = [{
        targets: ["_all"],
        className: "align-middle"
    }];

    data.footerCallback = function(row, data, start, end, display) {
        var api = this.api(),
            data;

        var intVal = function(i) {
            return typeof i === 'string' ?
                i.replace(/[\$,]/g, '') * 1 :
                typeof i === 'number' ?
                i : 0;
        };

        var stock = api
            .column(2)
            .data()
            .reduce(function(a, b) {
                return intVal(a) + intVal(b);
            }, 0);

        var begin = api
            .column(3)
            .data()
            .reduce(function(a, b) {
                return intVal(a) + intVal(b);
            }, 0);
        $("#totalStock").val(stock);
        $("#totalBegin").val(begin);
    };
    Datatable(data);

    $("#itemAccTbl").on('click','#btnEditItemAcc', function() {
        $("#modalItemAcc").modal('show');
       var data =JSON.stringify($(this).data());;
       $.post(baseURL+"Central_Supply/getItemInfo",{data:data},function(data){
         var output = data['data'];
         $("#beginbalance").val(output['begbal']);
         $("#stockbalance").val(output['stockbal']);
         $("#unitprice").val(output['costprc']);
         $("#selling").val(output['cl2retprc']);
         $("#lotno").val(output['itemcode']);
         $("#expiry").val(output['expiry']);
         $("#remarks").val(output['remarks']);
         $("#remarks").val(output['remarks']);
         $("#cl2dteas").val(output['cl2dteas']);
         $("#account").val(output['hclass2sub']);
         $("#formcode").val(output['uomcode']);
         $("#pricedate").val(output['cl2dteas']);
         $("#cl2").val(output['cl2comb']);
         $("#formiden").val('update');
    });
      
    });
});

$("#itemAccTbl").on('click', '#btnDeleteItem', function() {
    $("#deleteModalItem").modal('show');
    var data = $(this).data();
    $("input[name=formiden]").val('delete');
    $("input[name=cl2comb]").val(data['cl2comb']);
    $("input[name=hclass2sub]").val(data['account']);
    $("input[name=cl2dteas]").val(data['cl2dteas']);
});

$("#btnAddItem").on('click', function() {
    $("#modalItemAcc").modal('show');
    $("#cl2").val($("#cl2comb").val());
    $("#account").val($("#hclass2sub").val());
    $("#formcode").val($("#unitcode").val());
    $("#pricedate").val(getTimeLocale());
    $("#formiden").val('insert');
});

$('#frmAccount').on('submit', function(e) {
    var form = this;
    $.ajax({
        type: "POST",
        url: baseURL + "Central_Supply/saveOverrideAccount",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function(data, response) {
            $("#medAcctTbl").DataTable().ajax.reload();
            toastr.success('Record saved!', 'Success!');
            $("#modalItemAccount").modal('hide');
        },
        error: function(xhr, desc, err) {
            toastr.error(err, 'ERROR!');
        }
    });
    return false;
});

$('#modalItemAcc').on('hidden.coreui.modal', function(event) {
    $(this).find("input,textarea,select").val('').end();
    $(this).find("checkbox,radio").prop('checked', false);
    $(this).find("radio").removeAttr('checked');
    $(this).find("input,textarea,select").removeClass('is-valid');
    $(this).find("input,textarea,select").removeClass('is-invalid');
    $(this).find("select").val('').trigger('change');
});
