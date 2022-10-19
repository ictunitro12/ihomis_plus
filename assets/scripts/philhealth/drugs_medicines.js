$(document).ready(function() {
    getFormCodes();
});

$("#drugsAndMedicineTable").on("click", ".edit", function () {
    $("#description").text($(this).data('drug_description'));
    $("#chargecode").val($(this).data('chargecode'));
    $("#itemcode").val($(this).data('itemcode'));
    $("#chargeslipno").val($(this).data('chargeslipno'));
    $("#chargeslipno").val($(this).data('chargeslipno'));
    $("#chargefrom").val($(this).data('chargefrom'));
    $("#docointkey").val($(this).data('docointkey'));
    $("#qtyintake").val($(this).data('qtyintake'));
    $("#time_frequency").val($(this).data('time_frequency'));
    $("#unit_frequency").val($(this).data('unit_frequency').toUpperCase());

    if($(this).data('unit_frequency').toUpperCase() == "PRN"){
        $("#time_frequency").val("");
        $("#time_frequency").prop("required",false);
        $("#time_frequency").prop("disabled",true);
    }else{
        $("#time_frequency").prop("required",true);
        $("#time_frequency").prop("disabled",false);
    }

    if($(this).data('uomintake') == ""){
        $("#uomintake").val($(this).data('formcode'));
    }else{
        $("#uomintake").val($(this).data('uomintake'));
    }
    $("#editDrugsModal").modal("show");
});

$("#editDrugsModal .close-modal").on("click", function () {
    $("#editDrugsModal").modal("hide");
    $("#drugsForm").trigger("reset");
});

$("#unit_frequency").change(function(){
    if($(this).val() == "PRN"){
        $("#time_frequency").val("");
        $("#time_frequency").prop("required",false);
        $("#time_frequency").prop("disabled",true);
    }else{
        $("#time_frequency").prop("required",true);
        $("#time_frequency").prop("disabled",false);
    }
});

$("#drugsForm").submit(function (e) {
    e.preventDefault();

    let formData = new FormData(this);
    formData.append("enccode", enccode);

    updateDrugInstruction(formData,enccode);
});

function updateDrugInstruction(formData,enccode){
    $.ajax({
        url: baseURI + "cf4-drugs-medicines/update/",
        type: "POST",
        data: formData,
        dataType: "JSON",
        processData: false,
        contentType: false,
        success: function (data, response) {
            toastr.success(data.message, "Success");
            $("#editDrugsModal").modal("hide");
            $("#drugsForm").trigger("reset");
            getDrugsAndMedicnes(enccode);
        },
    });
}

function getFormCodes() {
    $.ajax({
        url: baseURI + "Philhealth/getCF4DrugForm",
        type: "POST",
        dataType: "JSON",
        success: function(data, response) {
            $("#uomintake").empty().append('<option value="">Select Unit</option>');
            for(i in data){
                $("#uomintake").append("<option value='" + data[i].formcode + "'>" + data[i].FORMDESC + "</option>");
            }
        }
    });
}