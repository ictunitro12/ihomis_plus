
$("#btnSupplier").on('click',function(){
    var data = new Object();
    data.id="drugAccount";
    data.link=baseURL+"Pharmacy/drugAccountDT";
    data.type="POST";
    data.columns=[
        {data : "suppcode"},
        {data : "suppname"}
    ];
    Datatable(data);

$("#drugAccountModal").modal({backdrop:false});
});

$("#drugAccount tbody").on('click','tr',function(){
    var rowData = $(this).row.data();
    console.log(rowData);


});
	
