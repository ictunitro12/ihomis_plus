$('#telepList').on('dblclick', 'tr', function() {
  var telephone = $(this).find('td:nth-child(2)').text();   

  $("#ModalTelep").modal('hide');
  $("#info_telno").val(telephone);
});


$('#btnTelep').on('click',function(){    
  $("#ModalAddTelep").modal({ backdrop: 'static'}).draggable({});
  CountRows();
}); 



$('#btnSubmit').on('click',function(){
  onFormSubmit();
}); 


var selectedRow = null;

function onFormSubmit() {
  if (validatetelep()) {
   var formData = readFormData();
   if (selectedRow == null)
    insertNewRecord(formData);

  else
    updateRecord(formData);
  resetForm();
}
}


function readFormData() {
  var formData = {};

  formData["seqno"] = document.getElementById("seqno").value;
  formData["telno"] = document.getElementById("telno").value;
  formData["contacttype"] = document.getElementById("contacttype").value;
  return formData;
}


function insertNewRecord(data) {
  let rowIndex = $('#telepList tbody tr').length;    

  var container = document.getElementById("info");

  var telephoneType = {
    '': '',
    'RESID': 'Residence',
    'OFFIC': 'Office',
    'SCHOO': 'School',
    'CELLP': 'Cellular Phone',
  };


  var inputCode = document.createElement("input");
  inputCode.className = 'data-' + data.seqno;
  inputCode.type = "hidden";
  inputCode.name = "contacts["+data.seqno+"][seqno]";
  inputCode.value = data.seqno;
  container.appendChild(inputCode);

  var inputTelephone = document.createElement("input");
  inputTelephone.className = 'data-' + data.seqno;
  inputTelephone.type = "hidden";
  inputTelephone.name = "contacts["+data.seqno+"][telno]";
  inputTelephone.value = data.telno;
  container.appendChild(inputTelephone);

  var inputTeltype = document.createElement("input");
  inputTeltype.className = 'data-' + data.seqno;
  inputTeltype.type = "hidden";
  inputTeltype.name = "contacts["+data.seqno+"][contacttype]";
  inputTeltype.value = data.contacttype;
  container.appendChild(inputTeltype);

  var table = document.getElementById("telepList").getElementsByTagName('tbody')[0];
  console.log(table);

  $("#info_telno").val(data.telno);  

  var newRow = table.insertRow(table.length);
  cell1 = newRow.insertCell(0);
  cell1.innerHTML = data.seqno;
  cell2 = newRow.insertCell(1);
  cell2.innerHTML = data.telno;
  cell3 = newRow.insertCell(2);
  cell3.innerHTML = telephoneType[data.contacttype];
  cell4 = newRow.insertCell(3);
  cell4.innerHTML = ` 
  <a  class="btn btn-primary" style="color:white;" id="btnEditContact" data-id="${data.seqno}" data-tel="${data.telno}" data-type="${data.contacttype}" ><i class="fa fa-edit"></i></a>
  <a  class="btn btn-danger" style="color:white;" onClick="onDelete(this, ${data.seqno})"><i class="fa fa-trash"></i></a>
  `;

  $("#ModalAddTelep").modal("hide");  
  resetForm();  
}



$("#telepList").on("click","#btnEditContact",function(){
  $("#ModalAddTelep").modal("show");

  var id=$(this).data('id');
  var type=$(this).data('type');
  var tell=$(this).data('tel');
  $("#contacttype option[value=" + type + "]").prop('selected', true);
  $("#seqno").val(id);
  $("#telno").val(tell);
  selectedRow= document.getElementById("telepList").rows[id];
  iddd =selectedRow.cells[0].innerHTML;
  teeeelno =selectedRow.cells[1].innerHTML;
  teeeel =selectedRow.cells[2].innerHTML;
  console.log(iddd);
  console.log(teeeelno);
  console.log(teeeel);
});



function resetForm() {
  document.getElementById("seqno").value = "";
  document.getElementById("telno").value = "";
  document.getElementById("contacttype").value = "";
  selectedRow = null;
}

function updateRecord(formData) {
  var telepType = {
    'RESID': 'Residence',
    'OFFIC': 'Office',
    'SCHOO': 'School',
    'CELLP': 'Cellular Phone',
  };

  var contact = formData['contacttype']

  selectedRow.cells[0].innerHTML = formData.seqno;
  selectedRow.cells[1].innerHTML = formData.telno;
  selectedRow.cells[2].innerHTML = telepType[contact];
  selectedRow.cells[3].innerHTML = `<a  class="btn btn-primary" style="color:white;" id="btnEditContact" data-id="${formData.seqno}" data-tel="${formData.telno}" data-type="${formData.contacttype}" ><i class="fa fa-edit"></i></a> <a  class="btn btn-danger" style="color:white;" onClick="onDelete(this, ${formData.seqno})"><i class="fa fa-trash"></i></a>  `;

  console.log(formData);
  console.log(selectedRow);

  $(`input[name="contacts[${formData.seqno}][seqno]"]`).val(formData.seqno);
  $(`input[name="contacts[${formData.seqno}][telno]"]`).val(formData.telno);
  $(`input[name="contacts[${formData.seqno}][contacttype]"]`).val(formData.contacttype);

  $("#ModalAddTelep").modal("hide");       
}



function onDelete(td, id) {
  var table = document.getElementById("telepList");
  var rowCount = table.rows.length;
  var lastRow = rowCount -1; 
  row = td.parentElement.parentElement.rowIndex;

  console.log(lastRow);
  if (id==1) {
    alert("Cannot delete the first row. ");
  }

  else if (row<lastRow) {
   alert("Please delete the last row. ");
 }
 else{
  if (confirm('Are you sure to delete this record ?')) {
    row = td.parentElement.parentElement.rowIndex;
    document.getElementById("telepList").deleteRow(row);
    $(`input[name="contacts[${id}][telno]"]`).remove();
    $(`input[name="contacts[${id}][contacttype]"]`).remove();
    $(`input[name="contacts[${id}][seqno]"]`).remove();
    resetForm();
    $("#info_telno").val("");  

  }
}
}
function validatetelep() {
  isValid = true;
  if (document.getElementById("seqno").value == "" ) {
    isValid = false;
  } 
  if (document.getElementById("contacttype").value == "" ) {
    isValid = false;
  }
  else {
    isValid = true;
    if (!document.getElementById("seqnoValidationError").classList.contains("hide"))
      document.getElementById("seqnoValidationError").classList.add("hide");
  }
  return isValid;
}
function CountRows() {
  var totalRowCount = 0;
  var rowCount = 0;
  var table = document.getElementById("telepList");
  var rows = table.getElementsByTagName("tr")
  for (var i = 0; i < rows.length; i++) {
    totalRowCount++;
    if (rows[i].getElementsByTagName("td").length > 0) {
      rowCount++;
    }
  }
  var message =  totalRowCount;
  $("#seqno").val(message);
}

