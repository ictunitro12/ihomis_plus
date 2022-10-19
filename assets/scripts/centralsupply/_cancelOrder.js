function cancelOrder(){
    var table=$("#drugMedsIssue").DataTable();
    var rows =table.rows('.selectedOrder').indexes().toArray();
    var dataJSONSTRING=[];
    for(let i = 0; i< rows.length; i++){
        var dataArr={};
      var issuedte= $(table.cells(rows[i], 1).nodes()).find('input').val();
        var lotno= $(table.cells(rows[i], 3).nodes()).find('input').val();
        var desc= $(table.cells(rows[i], 4).nodes()).text();
        var order= $(table.cells(rows[i], 6).nodes()).find('input').val();
        var issue= $(table.cells(rows[i], 7).nodes()).find('input').val();
        var qtybal = parseInt(order) - parseInt(issue);
        var price= $(table.cells(rows[i], 8).nodes()).text();
        var total= $(table.cells(rows[i], 9).nodes()).text();
        var dmdcomb= $(table.cells(rows[i], 10).nodes()).text();
        var dmdctr= $(table.cells(rows[i], 11).nodes()).text();
        var dmdsub= $(table.cells(rows[i], 12).nodes()).text();
        var pricedate= $(table.cells(rows[i], 13).nodes()).text();
        var docointkey= $(table.cells(rows[i], 14).nodes()).text();
        var enccode= $(table.cells(rows[i], 15).nodes()).text();
        var hpercode= $(table.cells(rows[i], 16).nodes()).text();
        var unitcode= $(table.cells(rows[i], 17).nodes()).text();

        $('#listDoco').prepend('<li class="text-success list-group-item"><h6>'+desc+'</h6>'+
         '<input type="hidden" name="pricedate" id="pricedate" value="'+pricedate+'">'+
         '<input type="hidden" name="price" id="price" value='+price+'>'+
         '<input type="hidden" name="issue" id="issue" value='+issue+'>'+
         '<input type="hidden" name="order" id="order" value='+order+'>'+
         '<input type="hidden" name="lotno" id="lotno" value='+lotno+'>'+
         '<input type="hidden" name="dmdsub" id="dmdsub" value='+dmdsub+'>'+
         '<input type="hidden" name="dmdcomb" id="dmdcomb" value='+dmdcomb+'>'+
         '<input type="hidden" name="dmdctr" id="dmdctr" value='+dmdctr+'>'+
         '<input type="hidden" name="docointkey" id="docointkey" value="'+docointkey+'">'+
         '<input type="hidden" name="enccode" id="enccode" value='+enccode+'>'+
         '<input type="hidden" name="hpercode" id="hpercode" value='+hpercode+'>'+
         '<input type="hidden" name="locacode" id="locacode" value="PHARM">'+
         '<input type="hidden" name="qtybal" id="qtybal" value='+qtybal+'>'+
         '<input type="hidden" name="uomcode" id="uomcode" value='+unitcode+'>'+
         '<input type="hidden" name="total" id="total" value='+total+'>'+
         '<input type="hidden" name="issuedte" id="issuedte" value='+issuedte+'>');
    }
    $("#cancelDrugModal").modal('show');
}
$("#frmGenerate").on('submit',function(){
    var docointkey = $(this).find("input[name='docointkey']").map(function(i, el) {
          return el.value;
    }).get();
    var enccode = $(this).find("input[name='enccode']").map(function(i, el) {
          return el.value;
    }).get();
    var hpercode = $(this).find("input[name='hpercode']").map(function(i, el) {
          return el.value;
    }).get();
    var issuedte = $(this).find("input[name='issuedte']").map(function(i, el) {
          return el.value;
    }).get();
    var lotno = $(this).find("input[name='lotno']").map(function(i, el) {
          return el.value;
    }).get();
    var locacode = $(this).find("input[name='locacode']").map(function(i, el) {
          return el.value;
    }).get();
    var dmdcomb = $(this).find("input[name='dmdcomb']").map(function(i, el) {
          return el.value;
    }).get();
    var dmdctr = $(this).find("input[name='dmdctr']").map(function(i, el) {
          return el.value;
    }).get();
    var dmdsub = $(this).find("input[name='dmdsub']").map(function(i, el) {
          return el.value;
    }).get();
    var pricedate = $(this).find("input[name='pricedate']").map(function(i, el) {
          return el.value;
    }).get();
    var uomcode = $(this).find("input[name='uomcode']").map(function(i, el) {
          return el.value;
    }).get();
    var issuedqty = $(this).find("input[name='issue']").map(function(i, el) {
          return el.value;
    }).get();
    var orderqty = $(this).find("input[name='order']").map(function(i, el) {
          return el.value;
    }).get();
    var unitprice = $(this).find("input[name='price']").map(function(i, el) {
          return el.value;
    }).get();

    var qtybal = $(this).find("input[name='qtybal']").map(function(i, el) {
          return el.value;
    }).get();

    var total = $(this).find("input[name='total']").map(function(i, el) {
          return el.value;
    }).get();

    var pcchrgcod = $("#chargeslip").text().trim();
    var totalamount = $("#TotalAmount").text().trim();

    var dataArr={};
    var dataJSON =[];
    dataArr.docointkey= docointkey;
    dataArr.enccode= enccode;
    dataArr.hpercode= hpercode;
    dataArr.issuedte= issuedte;
    dataArr.lotno= lotno;
    dataArr.qtybal= qtybal;
    dataArr.issuedqty= issuedqty;
    dataArr.orderqty= orderqty;
    dataArr.unitprice= unitprice;
    dataArr.dmdcomb= dmdcomb;
    dataArr.dmdctr= dmdctr;
    dataArr.dmdsub= dmdsub;
    dataArr.locacode= locacode;
    dataArr.pricedate= pricedate;
    dataArr.uomcode= uomcode;
    dataArr.total= total;
    dataJSON.push(dataArr);
    var  orderList_JSONString = JSON.stringify(dataJSON);
     $.ajax({
         type: "POST",
         url: baseURL + "Pharmacy/saveIssuance",
         data: { data: orderList_JSONString,pcchrgcod:pcchrgcod,totalamount:totalamount},
         dataType: 'JSON',
         success: function (data, response) {
                       toastr.success('Record saved!','Success');
                       $("#drugOrderModal").modal('hide');
                       $("#drugMedsIssue").DataTable().ajax.reload();
         },
         error: function (xhr, desc, err) {
             toastr.error('Error on saving ', xhr);
         }
});
return false;
});

