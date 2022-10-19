function returnItem(){
    var table=$("#drugMedsReturn").DataTable();
    var rows =table.rows('.selectReturn').indexes().toArray();
 
    for(let i = 0; i< rows.length; i++){
        var dataArr={};
        var returnDate= $(table.cells(rows[i], 1).nodes()).find('input').val();
        var slipno= $(table.cells(rows[i], 2).nodes()).text();
        var lotno= $(table.cells(rows[i], 3).nodes()).text();
        var desc= $(table.cells(rows[i], 4).nodes()).text();
        var dmdcomb= $(table.cells(rows[i], 9).nodes()).text();
        var dmdctr= $(table.cells(rows[i], 10).nodes()).text();
        var dmdsub= $(table.cells(rows[i], 11).nodes()).text(); 
        var pricedate= $(table.cells(rows[i], 12).nodes()).text(); 
        var docointkey= $(table.cells(rows[i], 13).nodes()).text();
        var enccode= $(table.cells(rows[i], 14).nodes()).text();
        var hpercode= $(table.cells(rows[i], 15).nodes()).text();
        var unitcode= $(table.cells(rows[i], 16).nodes()).text();
        var unitprice= $(table.cells(rows[i], 17).nodes()).text();
        var returnqty= $(table.cells(rows[i], 7).nodes()).find('input').val();
        var remarks= $(table.cells(rows[i], 8).nodes()).find('input').val();
        var return_total= parseFloat(unitprice)   *  parseFloat(returnqty);
        var issuedqty= $(table.cells(rows[i], 6).nodes()).find('input').val();

        var returnDate_elem = $(table.cell(rows[i], 1).node())
        .find("input")
        .get(0);

        var returnqty_elem = $(table.cell(rows[i], 7).node())
        .find("input")
        .get(0);


        if (returnDate == 0) {
          $('#listReturn li').remove();
          table.rows('.selectReturn').deselect();
          $(returnDate_elem).next("#returnDateError").remove();
          $(returnDate_elem).removeClass("is-valid");
          $(returnDate_elem).addClass("is-invalid");
          $(returnDate_elem).after(
            '<div class="invalid-feedback" id="returnDateError">Datetime is required!</div>'
          );
          hasError = true;
        } else {
          $(returnDate_elem).next("#returnDateError").remove();
          $(returnDate_elem).removeClass("is-invalid");
          $(returnDate_elem).addClass("is-valid");
          $(returnDate_elem).after(
            '<div class="invalid-feedback" id="returnDateError">Datetime is required!</div>'
          );
        }

        if (returnqty == 0) {
            $('#listReturn li').remove();
            table.rows('.selectReturn').deselect();
            $(returnqty_elem).next("#returnqtyError").remove();
            $(returnqty_elem).removeClass("is-valid");
            $(returnqty_elem).addClass("is-invalid");
            $(returnqty_elem).after(
              '<div class="invalid-feedback" id="returnqtyError">Qty is required!</div>'
            );
            hasError = true;
          } else {
            $(returnqty_elem).next("#returnqtyError").remove();
            $(returnqty_elem).removeClass("is-invalid");
            $(returnqty_elem).addClass("is-valid");
            $(returnqty_elem).after(
              '<div class="invalid-feedback" id="returnqtyError">Qty is required!</div>'
            );
          }

        if(returnDate!=0 && returnqty!=0){
            $("#returnDrugModal").modal('show');
          }else{
            $('#listReturn li').remove();
          }

        $('#listReturn').prepend('<li class="text-success list-group-item"><h6>'+desc+'</h6>'+
         '<input type="hidden" name="pricedate" id="pricedate" value="'+pricedate+'">'+
         '<input type="hidden" name="pcchrgcod" id="pcchrgcod" value="'+slipno+'">'+
         '<input type="hidden" name="price" id="price" value='+unitprice+'>'+
         '<input type="hidden" name="lotno" id="lotno" value='+lotno+'>'+
         '<input type="hidden" name="dmdsub" id="dmdsub" value='+dmdsub+'>'+
         '<input type="hidden" name="dmdcomb" id="dmdcomb" value='+dmdcomb+'>'+
         '<input type="hidden" name="dmdctr" id="dmdctr" value='+dmdctr+'>'+
         '<input type="hidden" name="docointkey" id="docointkey" value="'+docointkey+'">'+
         '<input type="hidden" name="enccode" id="enccode" value='+enccode+'>'+
         '<input type="hidden" name="hpercode" id="hpercode" value='+hpercode+'>'+
         '<input type="hidden" name="locacode" id="locacode" value="PHARM">'+
         '<input type="hidden" name="uomcode" id="uomcode" value='+unitcode+'>'+
         '<input type="hidden" name="qty" id="qty" value='+returnqty+'>'+
         '<input type="hidden" name="issuedqty" id="issuedqty" value='+issuedqty+'>'+
         '<input type="hidden" name="total" id="total" value='+return_total+'>'+
         '<input type="hidden" name="returnDate" id="returnDate" value='+returnDate+'>');
    }
 
  
}
$("#frmReturn").on('submit',function(){
    var docointkey = $(this).find("input[name='docointkey']").map(function(i, el) {
          return el.value;
    }).get();
    var enccode = $(this).find("input[name='enccode']").map(function(i, el) {
          return el.value;
    }).get();
    var hpercode = $(this).find("input[name='hpercode']").map(function(i, el) {
          return el.value;
    }).get();
    var pcchrgcod = $(this).find("input[name='pcchrgcod']").map(function(i, el) {
      return el.value;
}).get();
    var returndate = $(this).find("input[name='returnDate']").map(function(i, el) {
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
    var returnqty = $(this).find("input[name='qty']").map(function(i, el) {
          return el.value;
    }).get();

    var issuedqty = $(this).find("input[name='issuedqty']").map(function(i, el) {
      return el.value;
      }).get();
    var unitprice = $(this).find("input[name='price']").map(function(i, el) {
          return el.value;
    }).get();

    var total = $(this).find("input[name='total']").map(function(i, el) {
          return el.value;
    }).get();

    var dataArr={};
    var dataJSON =[];
    dataArr.docointkey= docointkey;
    dataArr.pcchrgcod= pcchrgcod;
    dataArr.enccode= enccode;
    dataArr.hpercode= hpercode;
    dataArr.returndate= returndate;
    dataArr.lotno= lotno;
    dataArr.unitprice= unitprice;
    dataArr.dmdcomb= dmdcomb;
    dataArr.dmdctr= dmdctr;
    dataArr.dmdsub= dmdsub;
    dataArr.locacode= locacode;
    dataArr.returnqty= returnqty;
    dataArr.pricedate= pricedate;
    dataArr.uomcode= uomcode;
    dataArr.total= total;
    dataArr.issuedqty= issuedqty;
    dataJSON.push(dataArr);
    var  return_JSONString = JSON.stringify(dataJSON);
     $.ajax({
         type: "POST",
         url: baseURL + "Pharmacy/saveReturn",
         data: { data: return_JSONString},
         dataType: 'JSON',
         success: function (data, response) {
            toastr.success('Record saved!','Success');
            $("#returnDrugModal").modal('hide');
            $("#drugMedsReturn").DataTable().ajax.reload();
         },
         error: function (xhr, desc, err) {
             toastr.error('Error on saving ', xhr);
         }
}); 
return false; 
});

$("#returnDrugModal").on('hidden.coreui.modal',function(){
    $('#listReturn li').remove();
 });