function generateslip(){      
    var table=$("#patientOrders").DataTable();
    var rows =table.rows('.selected').indexes().toArray();
    var dataJSONSTRING=[];
    for(let i = 0; i< rows.length; i++){
    var dataArr={};
    var desc= $(table.cells(rows[i], 2).nodes()).text();
    var price= $(table.cells(rows[i], 6).nodes()).text();     
    var docointkey= $(table.cells(rows[i], 7).nodes()).text(); 
    var pricedate= $(table.cells(rows[i], 8).nodes()).text(); 
    var prikey= $(table.cells(rows[i], 9).nodes()).text();             
        $('#listOrder').prepend('<li class="text-success list-group-item"><h6>'+desc+'</h6>'+
        '<input type="hidden" name="statdate" id="statdate" value="'+pricedate+'">'+
        '<input type="hidden" name="prikey" id="prikey" value="'+prikey+'">'+
        '<input type="hidden" name="price" id="price" value="'+price+'">'+
        '<input type="hidden" name="docointkey" id="docointkey" value="'+docointkey+'">');
    }
    $.get(baseURL+'Laboratory/genchargeSlip',function(data){
            $("#slipno").text(data);
            $("#modalGenerateSlip").modal('show');
    });
}
 
$("#modalGenerateSlip").on('hidden.coreui.modal',function(){
    $('#listOrder li').remove();
 });

$("#frmGenerate").on('submit',function(){
    var docointkey = $(this).find("input[name='docointkey']").map(function(i, el) {
          return el.value;
    }).get();
  
    var statdate = $(this).find("input[name='statdate']").map(function(i, el) {
      return el.value;
    }).get();

    var prikey = $(this).find("input[name='prikey']").map(function(i, el) {
      return el.value;
    }).get();

    var price = $(this).find("input[name='price']").map(function(i, el) {
      return el.value;
    }).get();

    var prikey = $(this).find("input[name='prikey']").map(function(i, el) {
      return el.value;
    }).get();
    
    var pcchrgcod = $("#slipno").text().trim();
    var dataArr={};
    var dataJSON =[];
    dataArr.docointkey= docointkey;
    dataArr.price= price;
    dataArr.statdate= statdate;
    dataArr.prikey= prikey;
    dataArr.pcchrgcod= pcchrgcod;
    dataJSON.push(dataArr);
    var  orderList_JSONString = JSON.stringify(dataJSON);
     $.ajax({
         type: "POST",
         url: baseURL + "Laboratory/saveChargeslip",
         data: { data: orderList_JSONString,pcchrgcod:pcchrgcod},
         dataType: 'JSON',
         success: function (data, response) {
            toastr.success('Record saved!','Success');
            $("#patientOrders").DataTable().ajax.reload();
            $("#modalGenerateSlip").modal('hide');
         },
         error: function (xhr, desc, err) {
             toastr.error('Error on saving ', xhr);
         }
});
return false;
});
