
$("#btnAcctList").on('click',function(){
    
    var data = new Object();
    data.id="drugAccount";
    data.destroy=true;
    data.link=baseURL+"Pharmacy/drugAccountDT";
    data.type="POST";
    data.columns=[
        {data : "chrgcode"},
        {data : "chrgdesc"}
    ];
    Datatable(data);
$("#drugAccountModal").modal({backdrop:false});
});

$("#drugAccount").on('click','tbody>tr',function(){
    var row = $(this).closest("tr");
    var rowData = $("#drugAccount").DataTable().row(row).data();
    $("#acctname").val(rowData['chrgdesc']);
    $("#acctcode").val(rowData['chrgcode']);
    $("#drugAccountModal").modal('hide');
});
	
