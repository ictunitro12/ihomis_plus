
    var ItemTable=  $("#itemList").DataTable({
      "serverside":true,
      "paging":true,
      "destroy":true,
      "searching":true
    });
    
    function itemList() 
    {
        var data = new Object();
        data.id = "itemData";
        data.link = baseURL + "Stockroom/itemList";
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
  
    $("#itemData").on("click","tbody>tr",function(){
        $(this).toggleClass("table-success selected");
        var rowData = $("#itemData").DataTable().row(".selected").data();
        $("#cl2codee").val(rowData["cl2code"]);
        $("#c2lcomb").val(rowData["code"]);
        $("#cl1code").val(rowData["ctr"]);
        $("#item").val(rowData["descs"]);
        var supTable = $("#itemData").DataTable();
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
    