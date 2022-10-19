
$('#occupList').on('dblclick', 'tr', function() {
    var occuphone = $(this).find('td:nth-child(2)').text();

    $("#ModalOccup").modal('hide');
    $("#info_occu").val(occuphone);
});

$('#btnOccupat').on('click',function(){    
    $("#ModalAddOccup").modal({ backdrop: 'static'}).draggable({});;
    RowsOccup();

}); 


$('#btnSubmitOc').on('click',function(){
    SubmitOccup();
}); 


var selectedRow = null
function SubmitOccup() {
    if (validateOccup()) {
        var formData = readFormDataOccup();
        if (selectedRow == null)
            insertOccup(formData);

        else
            updateOccup(formData);
        resetFormOccup();
    }
}

function readFormDataOccup() {
    var formData = {};

    formData["codeno"] = document.getElementById("codeno").value;
    formData["occup"] = document.getElementById("occup").value;
    formData["employer"] = document.getElementById("employer").value;
    formData["email"] = document.getElementById("email").value;
    formData["employertelno"] = document.getElementById("employertelno").value;
    formData["branch"] = document.getElementById("branch").value;
    formData["employeraddr"] = document.getElementById("employeraddr").value;
    return formData;
}


function insertOccup(data) {

    let rowIndexes = $('#occupList tbody tr').length;    

    var containers = document.getElementById("infooccup");

    var inputCodes = document.createElement("input");
    inputCodes.className = 'data-' + data.codeno;
    inputCodes.type = "hidden";
    inputCodes.name = "occups["+data.codeno+"][codeno]";
    inputCodes.value = data.codeno;
    containers.appendChild(inputCodes);

    var inputOccup = document.createElement("input");
    inputOccup.className = 'data-' + data.codeno;
    inputOccup.type = "hidden";
    inputOccup.name = "occups["+data.codeno+"][occup]";
    inputOccup.value = data.occup;
    containers.appendChild(inputOccup);

    var inputEmployer = document.createElement("input");
    inputEmployer.className = 'data-' + data.codeno;
    inputEmployer.type = "hidden";
    inputEmployer.name = "occups["+data.codeno+"][employer]";
    inputEmployer.value = data.employer;
    containers.appendChild(inputEmployer);

    var inputEmail = document.createElement("input");
    inputEmail.className = 'data-' + data.codeno;
    inputEmail.type = "hidden";
    inputEmail.name = "occups["+data.codeno+"][email]";
    inputEmail.value = data.email;
    containers.appendChild(inputEmail);


    var inputEmployertelno = document.createElement("input");
    inputEmployertelno.className = 'data-' + data.codeno;
    inputEmployertelno.type = "hidden";
    inputEmployertelno.name = "occups["+data.codeno+"][employertelno]";
    inputEmployertelno.value = data.employertelno;
    containers.appendChild(inputEmployertelno);

    var inputBranch = document.createElement("input");
    inputBranch.className = 'data-' + data.codeno;
    inputBranch.type = "hidden";
    inputBranch.name = "occups["+data.codeno+"][branch]";
    inputBranch.value = data.branch;
    containers.appendChild(inputBranch);

    var inputEmployeraddr = document.createElement("input");
    inputEmployeraddr.className = 'data-' + data.codeno;
    inputEmployeraddr.type = "hidden";
    inputEmployeraddr.name = "occups["+data.codeno+"][employeraddr]";
    inputEmployeraddr.value = data.employeraddr;
    containers.appendChild(inputEmployeraddr);


    var table = document.getElementById("occupList").getElementsByTagName('tbody')[0];

    $("#info_occu").val(data.occup); 

    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.codeno;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.occup;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.employer;
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.email;
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.employertelno;
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = data.branch;
    cell7 = newRow.insertCell(6);
    cell7.innerHTML = data.employeraddr;

    cell8 = newRow.insertCell(7);

    cell8.innerHTML = `
    <a  class="btn btn-primary" style="color:white;" onClick="EditOccup(this, ${data.codeno})" ><i class="fa fa-edit"></i></a>
    <a  class="btn btn-danger" style="color:white;" onClick="DeleteOccup(this, ${data.codeno})" ><i class="fa fa-trash"></i></a>
    `;

    $("#ModalAddOccup").modal("hide");  
    resetFormOccup();  
}

function resetFormOccup() {
    document.getElementById("codeno").value = "";
    document.getElementById("occup").value = "";
    document.getElementById("employer").value = "";
    document.getElementById("email").value = "";
    document.getElementById("employertelno").value = "";
    document.getElementById("branch").value = "";
    document.getElementById("employeraddr").value = "";
    selectedRow = null;
}

function EditOccup(td, id) {
    $("#ModalAddOccup").modal("show");    
    
    selectedRow = td.parentElement.parentElement;
    document.getElementById("codeno").value = selectedRow.cells[0].innerHTML;
    document.getElementById("occup").value = selectedRow.cells[1].innerHTML;
    document.getElementById("employer").value = selectedRow.cells[2].innerHTML;
    document.getElementById("email").value = selectedRow.cells[3].innerHTML;
    document.getElementById("employertelno").value = selectedRow.cells[4].innerHTML;
    document.getElementById("branch").value = selectedRow.cells[5].innerHTML;
    document.getElementById("employeraddr").value = selectedRow.cells[6].innerHTML;
}
function updateOccup(formData) {
    selectedRow.cells[0].innerHTML = formData.codeno;
    selectedRow.cells[1].innerHTML = formData.occup;
    selectedRow.cells[2].innerHTML = formData.employer;
    selectedRow.cells[3].innerHTML = formData.email;
    selectedRow.cells[4].innerHTML = formData.employertelno;
    selectedRow.cells[5].innerHTML = formData.branch;
    selectedRow.cells[6].innerHTML = formData.employeraddr;


    $(`input[name="occups[${formData.codeno}][occup]"]`).val(formData.occup);
    $(`input[name="occups[${formData.codeno}][employer]"]`).val(formData.employer);
    $(`input[name="occups[${formData.codeno}][email]"]`).val(formData.email);
    $(`input[name="occups[${formData.codeno}][employertelno]"]`).val(formData.employertelno);
    $(`input[name="occups[${formData.codeno}][branch]"]`).val(formData.branch);
    $(`input[name="occups[${formData.codeno}][employeraddr]"]`).val(formData.employeraddr);

    $("#ModalAddOccup").modal("hide");    
}


function DeleteOccup(td, id) {
    var table = document.getElementById("occupList");
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
        document.getElementById("occupList").deleteRow(row);
        $(`input[name="occups[${id}][codeno]"]`).remove();
        $(`input[name="occups[${id}][occup]"]`).remove();
        $(`input[name="occups[${id}][employer]"]`).remove();
        $(`input[name="occups[${id}][email]"]`).remove();
        $(`input[name="occups[${id}][employertelno]"]`).remove();
        $(`input[name="occups[${id}][branch]"]`).remove();
        $(`input[name="occups[${id}][employeraddr]"]`).remove();
        resetFormOccup();
        $("#info_occu").val("");  

    }
}
}
function validateOccup() {
    isValid = true;
    if (document.getElementById("codeno").value == "") {
        isValid = false;
        document.getElementById("codenoValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("codenoValidationError").classList.contains("hide"))
            document.getElementById("codenoValidationError").classList.add("hide");
    }
    return isValid;
}
function RowsOccup() {
    var totalRowCount = 0;
    var rowCount = 0;
    var table = document.getElementById("occupList");
    var rows = table.getElementsByTagName("tr")
    for (var i = 0; i < rows.length; i++) {
        totalRowCount++;
        if (rows[i].getElementsByTagName("td").length > 0) {
            rowCount++;
        }
    }
    var message =  totalRowCount;
    $("#codeno").val(message);
}

