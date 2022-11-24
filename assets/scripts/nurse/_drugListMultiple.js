
$('#btnMultipledrug').on('click',function(e){
    drugMultipleSelect();
    $("#modaldrugMultiple").modal('show');
}); 


var ItemTable=  $("#requestList_drug").DataTable({
    "serverside":true,
    "paging":true,
    "destroy":true,
    "searching":true,
    "columnDefs":[
    {
       targets:[2,3,4],
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
      var ItemTable=  $("#requestList_drug").DataTable({
          "serverside":true,
          "paging":true,
          "destroy":true,
          "searching":true,
          "columnDefs":[
            { "width": "5%", "targets": 0 },
          {
              targets:[2,3,4],
              visible:false
          }]
       });
       
      $.each(rowData, function (i, d) {
        var oldNode = ItemTable.$("td:contains('"+d['dmdcomb']+"')").data();

          ItemTable.row.add([	
            '<a class="text text-danger text-center"  style ="cursor:pointer;" id="btnRemove" ><i class="fa fa-close fa-2x"></i></a>',
            '<div class="align-middle">'+d['drugs']+'</div>',
            '<div class="align-middle" id="dmdcomb'+i+'">'+d['dmdcomb']+'</div>',
            '<div class="align-middle" id="dmdctr'+i+'">'+d['dmdctr']+'</div>',
            '<div class="align-middle" id="formcode'+i+'">'+d['formcode']+'</div>',
            '<input type="number"  autocomplete ="off" min=1 class="form-control form-control-md" name="qty" id="qty'+i+'" placeholder="Quantity">',
            '<select class="form-control form-control-md" name="prio" id="prio'+i+'">'+
            '<option value="">Select</option>'+
             '<option value="Y">Yes</option>'+
             '<option value="N">No</option>'+
            '</select>']).draw(true);
         
      });
      $("#modaldrugMultiple").modal('hide');
      drugTable.rows('.selected').remove().draw();
    });
  
 
  
  $('#requestList_drug tbody').on('click','#btnRemove', function() {
    $('#requestList_drug').DataTable()
    .row($(this).parents('tr'))
    .remove()
    .draw();
  });	

