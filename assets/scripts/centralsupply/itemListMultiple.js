var ItemTable=  $("#itemList").DataTable({
    "serverside":true,
    "paging":true,
    "destroy":true,
    "searching":true
  });
  
  function itemMultipleSelect() 
  {
      var data = new Object();
      data.id = "itemData";
      data.link = baseURL + "Stockroom/itemList";
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
          { data: "code" },
          { data: "descs" }];
      Datatable(data);
  }

  $("#btnSelect").on("click",function(){
      var supTable = $("#itemData").DataTable();
      var rowData=supTable.rows('.selected').data();
      var ItemTable=  $("#itemList").DataTable({
          "serverside":true,
          "paging":true,
          "destroy":true,
          "searching":true,
          "columnDefs":[
          {
              targets:[5,6,7,8],
              visible:false
          }]
       });
       
      $.each(rowData, function (i, d) {
      
          ItemTable.row.add([	
             '<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnremdeliv" ><i class="fa fa-close fa-2x"></i></a>',
            '<input type="text"  autocomplete ="off" class="form-control form-control-md" name="lotno" id="lotno'+i+'" placeholder="Lotno">',
            '<div class="align-middle">'+d['descs']+'</div>',
            '<select  class="form-control form-control-md" name="delitem_type" id="delitem_type'+i+'">'+
            '<option value="">Select</option>'+
             '<option value="DM">Drugs & Medicine</option>'+
             '<option selected value="SM">Medical Supplies</option>'+
             '<option value="SE">Supplies & Equipment</option>'+
            '</select>',
            '<input type="number"  autocomplete ="off" class="form-control form-control-md" name="qty" id="qty'+i+'" placeholder="Quantity">',
            '<div class="align-middle" id="cl1comb'+i+'">'+d['ctr']+'</div>',
            '<div class="align-middle" id="cl2comb'+i+'">'+d['code']+'</div>',
            '<div class="align-middle" id="cl2code'+i+'">'+d['cl2code']+'</div>',
            '<div class="align-middle" id="formcode'+i+'">'+d['uomcode']+'</div>',
            '<input type="number"  autocomple te ="off" class="form-control form-control-md" placeholder ="Unit price" name="unitprice" id="unitprice'+i+'">',
            '<input type="date"  autocomplete ="off" class="form-control form-control-md" name="expire" id="expire'+i+'">',
            '<input type="text"  autocomplete ="off" class="form-control form-control-md" name="remarks" id="remarks'+i+'" placeholder="Remarks">'
          ]).draw(true);
         
      });
      $("#modalItemData").modal('hide');
      supTable.rows('.selected').remove().draw();
    });
  
  $('#btnMultipleItem').on('click',function(e){
        itemMultipleSelect();
      $("#modalItemData").modal('show');
  }); 
  
  $('#itemList tbody').on('click','#btnremdeliv', function() {
    $('#itemList').DataTable()
    .row($(this).parents('tr'))
    .remove()
    .draw();
  });	
  