
$("#btnAcctList").on('click',function(){
    var data = new Object();
    data.id="itemAccount";
    data.destroy=true;
    data.searching=true;
    data.link=baseURL+"Central_Supply/itemAccountDT";
    data.type="POST";
    data.columns=[
        {data : "code"},
        {data : "name"}
    ];

    Datatable(data);
    $("#itemAccountModal").modal({backdrop:false});
});

$("#itemAccount").on('click','tbody>tr',function(){
    var row = $(this).closest("tr");
    var rowData = $("#itemAccount").DataTable().row(row).data();
    $("#acctname").val(rowData['name']);
    $("#acctcode").val(rowData['code']);
    $("#itemAccountModal").modal('hide');
});
	
