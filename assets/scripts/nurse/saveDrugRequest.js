$('#frmdrugReq').on('submit', function(e) {
 
  var table=$("#requestList_drug").DataTable();
  var rows =table.rows().indexes().toArray();
  var formType= $("#formIdenreqMed").val();
  var wardcode= $("#locacodeMed").val();
  var requestdate= $("#dterequestMed").val();
  var dataJSON =[];
 
  for(let i = 0; i< rows.length; i++){
      var dataArr={};    
      var dmdcomb= $(table.cells(rows[i], 2).nodes()).text();
      var dmdctr= $(table.cells(rows[i], 3).nodes()).text();
      var formcode= $(table.cells(rows[i], 4).nodes()).text();
      var quantity= $(table.cells(rows[i], 5).nodes()).find('input[name=qty]').val();
      var prio= $(table.cells(rows[i], 6).nodes()).find('select[name=prio]').val();
     
      var qty_elem = $(table.cell(rows[i], 5).node())
      .find("input")
      .get(0);
 
      if (quantity == 0){
          $(qty_elem).next("#qtyError").remove();
          $(qty_elem).removeClass("is-valid");
          $(qty_elem).addClass("is-invalid");
          $(qty_elem).after('<div class="invalid-feedback" id="issueQtyError">Qty is required!</div>');
      }
 
    dataArr.formType= formType;
    dataArr.wardcode= wardcode;
    dataArr.requestdate=requestdate;
    dataArr.dmdcomb= dmdcomb;
    dataArr.dmdctr= dmdctr;
    dataArr.formcode= formcode;
    dataArr.quantity= quantity;
    dataArr.prio= prio;
    dataJSON.push(dataArr); 
  }   
  var  data_JSONString = JSON.stringify(dataJSON);
  $.ajax({
    type:'POST',
    url: baseURL+"Nurse/saveRequest",
    data: {data:data_JSONString},
    dataType:'text',
    async:true, 
    success: function(data){
     $("#requestmodal_drug").modal('hide');
     $("#requestMed").DataTable().ajax.reload();
     toastr.success('Request Added!','Success');
    },
    error: function(data,response){
        toastr.error(data.message,'Error');
        $("#drugRequestModal").modal('hide');
    },
 }); 
 return false;
 });
 
 $("#requestmodal_drug").on('hidden.coreui.modal',function(){
    $("#requestList_drug").DataTable().rows().clear();
    $(this).find("input,textarea,select").val('').end();
    $(this).find("checkbox,radio").prop('checked',false);
    $(this).find("radio").removeAttr('checked');
    $(this).find("input,textarea,select").removeClass('is-valid'); 
    $(this).find("input,textarea,select").removeClass('is-invalid');
    $(this).find("select").val('').trigger('change');
 });

 $('#frmdrugReq_edit').on('submit', function(e) {
  $.ajax({
    type:'POST',
    url: baseURL+"Nurse/updateRequest",
    data: $(this).serialize(),
    async:true, 
    success: function(data){
     $("#requestmodal_edit").modal('hide');
     var  ss = $("#requestMed").DataTable().ajax.reload();
     console.log(ss);
     toastr.success('Request Added!','Success');
    },
    error:function(data,response){
        toastr.error(data.message,'Error');
        $("#drugRequestModal").modal('hide');
    },
 }); 
  return false;                     
 });