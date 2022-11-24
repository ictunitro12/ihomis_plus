
$('#btnMultipledrug').on('click',function(e){
    drugMultipleSelect();
    $("#modaldrugMultiple").modal('show');
}); 


var ItemTable=  $("#itemList").DataTable({
    "serverside":true,
    "paging":true,
    "destroy":true,
    "searching":true,
    "columnDefs":[
    {
        targets:[5,6,7],
        visible:false
    }]
  });
  
  function drugMultipleSelect() 
  {
      var data = new Object();
      data.id = "drugData";
      data.link = baseURL + "Drugs/drugdata";
      data.select = {
          select: true,
          style: 'multi',
          className:'bg-success text-white selected'
      },
      data.type = "POST";
      data.search = true;
      data.destroy = true;
      data.paging = true;
      data.info = true;
      data.columns = [
          { data: "dmdcomb" },
          { data: "drugs" }];
      Datatable(data);
  }
  
  
  $("#btnSelect").on("click",function(){
      var drugTable = $("#drugData").DataTable();
      var rowData=drugTable.rows('.selected').data();
      var ItemTable=  $("#itemList").DataTable({
          "serverside":true,
          "paging":true,
          "destroy":true,
          "searching":true,
          "columnDefs":[
            { "width": "5%", "targets": 0 },
          {
              targets:[5,6,7],
              visible:false
          }]
       });
       
      $.each(rowData, function (i, d) {
      
          ItemTable.row.add([	
             '<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremdeliv" ><i class="fa fa-close fa-2x"></i></a>',
            '<input type="text"  autocomplete ="off" class="form-control form-control-md" name="lotno" id="lotno'+i+'" placeholder="Lotno">',
            '<div class="align-middle">'+d['drugs']+'</div>',
            '<select class="form-control form-control-md" name="delitem_type" id="delitem_type'+i+'">'+
            '<option value="">Select</option>'+
             '<option value="DM">Drugs & Medicine</option>'+
             '<option value="SM">Medical Supplies</option>'+
             '<option value="SE">Supplies & Equipment</option>'+
            '</select>',
            '<input type="number"  autocomplete ="off" class="form-control form-control-md" name="qty" id="qty'+i+'" placeholder="Quantity">',
            '<div class="align-middle" id="dmdcomb'+i+'">'+d['dmdcomb']+'</div>',
            '<div class="align-middle" id="dmdctr'+i+'">'+d['dmdctr']+'</div>',
            '<div class="align-middle" id="formcode'+i+'">'+d['formcode']+'</div>',
            '<input type="number"  autocomplete ="off" class="form-control form-control-md" placeholder ="Unit price" name="unitprice" id="unitprice'+i+'">',
            '<input type="date"  autocomplete ="off" class="form-control form-control-md" name="expire" id="expire'+i+'">',
            '<input type="text"  autocomplete ="off" class="form-control form-control-md" name="remarks" id="remarks'+i+'" placeholder="Remarks">'
          ]).draw(true);
         
      });
      $("#modaldrugMultiple").modal('hide');
      drugTable.rows('.selected').remove().draw();
    });
  
 
  
  $('#itemList tbody').on('click','#btnremdeliv', function() {
    $('#itemList').DataTable()
    .row($(this).parents('tr'))
    .remove()
    .draw();
  });	