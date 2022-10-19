var baseURL = $("#base_url").val();

$("#removehpercode").on("click", function () {
  if (
    $.trim($("#memhpercode").val()) == "" ||
    $("#memhpercode").val() == null ||
    $("#memhpercode").val() == "null"
  ) {
    return;
  }

  var remove = confirm("Do you want to remove the Health Record Number?");

  if (remove) {
    $("#memhpercode").val(null);
  }
});

function initForm() {
  $("#PatSearchList .modal-footer > a").hide();
  $("#PatSearch").modal("show");
  $("#formIden").val("insert");
  setMemType();
  SelReligion();
  memCity('mem');
  memCity('emp');
  //Region("mem");
  //Region("emp");
}

function initFormEdit(phicnum) {
  $("#formIden").val("update");
  MemberInformation(phicnum);
  setMemType();
  memCity('mem');
  memCity('emp');
}

function setMemType() {
  $("#typemem").select2({
    enabled: true,
    theme: "coreui",
    placeholder: "Select Member Type",
    triggerChange: true,
    allowClear: true,
    ajax: {
      url: baseURL + "Philhealth/getMemType",
      dataType: "JSON",
      type: "POST",
      delay: 250,
      data: function (params) {
        return { tyepmem: params.term };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({ id: item.typemem, text: item.typedesc });
        });
        return { results: results };
      },
    },
  });

  $("#typemem").change(function () {
    if ($(this).val() == "01" || $(this).val() == "02") {
      $("#pen").prop("disabled", false);
      $("#employer").prop("disabled", false);
      $("#empStr").prop('disabled',false);
      $("#empBrgy").prop('disabled',false);
      $("#empCity").prop('disabled',false);
      $("#empZip").prop('disabled',false);      
      $("#empDist").prop('disabled',false);
      $("#empProv").prop('disabled',false);
      $("#empReg").prop('disabled',false);
      $("#empcountry").prop('disabled',false);
      $("#empcontactno").prop('disabled',false);
    } else {
      $("#pen").prop("disabled", true);
      $("#employer").prop("disabled", true);
      $("#pen").val("");
      $("#employer").val("");

      $("#empStr").prop('disabled',false);
      $("#empStr").prop('disabled',true);
      $("#empStr").val("");
      
      $("#empBrgy").prop('disabled',false);
      $("#empBrgy").prop('disabled',true);
      $("#empBrgy").empty();

      $("#empCity").prop('disabled',false);
      $("#empCity").prop('disabled',true);
      $("#empCity").empty();

      $("#empZip").prop('disabled',false);      
      $("#empZip").prop('disabled',true);
      $("#empZip").val("");

      $("#empDist").prop('disabled',false);
      $("#empDist").prop('disabled',true);
      $("#empDist").empty();

      $("#empProv").prop('disabled',false);
      $("#empProv").prop('disabled',true);
      $("#empProv").empty();

      $("#empReg").prop('disabled',false);
      $("#empReg").prop('disabled',true);
      $("#empReg").empty();

      $("#empcountry").prop('disabled',false);
      $("#empcountry").prop('disabled',true);
      $("#empcountry").empty();

      $("#empcontactno").prop('disabled',false);
      $("#empcontactno").prop('disabled',true);
      $("#empcontactno").empty();
    }
  });
}

$("#memcstat").change(function () {
  if ($(this).val() == "M") {
    $("#memspouselastname").prop("disabled", false);
    $("#memspousefirstname").prop("disabled", false);
    $("#memspousemiddlename").prop("disabled", false);
    $("#memspousesuffix").prop("disabled", false);
  } else {
    $("#memspouselastname").prop("disabled", true);
    $("#memspousefirstname").prop("disabled", true);
    $("#memspousemiddlename").prop("disabled", true);
    $("#memspousesuffix").prop("disabled", true);
    $("#memspouselastname").val("");
    $("#memspousefirstname").val("");
    $("#memspousemiddlename").val("");
    $("#memspousesuffix").val("");
  }
});

$("#searchpatient").click(function () {
  $("#PatSearch").modal("show");
  $("#PatSearchList .modal-footer > a").hide();
});

$("#frmPatSearch").submit(function () {
  $.ajax({
    url: baseURL + "Patient/PatientAdvanceSearch",
    type: "POST",
    data: new FormData(this),
    dataType: "JSON",
    processData: false,
    contentType: false,
    cache: false,
    async: true,
    success: function (data, response) {
      $("#PatSearchList").modal("show");
      $("#PatSearch").modal("hide");
      PatSearchList(data);
    },
    error: function (response) {
      toastr.error("Error:Please try again!", "Error");
    },
  });
  return false;
});

function PatSearchList(data) {
  $("#TblPatSearchList").off();

  var table = $("#TblPatSearchList").DataTable({
    data: data,
    destroy: true,
    className:
      "table table-sm table-responsive table-bordered table-striped table-hovered",
    columns: [
      { data: "hpercode" },
      { data: "fullname" },
      { data: "dob" },
      { data: "patsex" },
    ],
  });

  $("#TblPatSearchList").on("dblclick", "tr", function () {
    var data = table.row(this).data();
    if (data == undefined) {
      return;
    }
    var ishpercodeavailable;
    if ($("#formIden").val() == "update") {
      ishpercodeavailable = existhpercode(
        data["hpercode"],
        $("#phicnum").val()
      );
    } else {
      ishpercodeavailable = existhpercode(data["hpercode"], $("#pin").val());
    }
    if (ishpercodeavailable == "false" || ishpercodeavailable == false) {
      toastr.error("Health Record Number is already used!", "Error");
      return;
    }
    $("#memhpercode").val(data["hpercode"]);
    $("#PatSearchList").modal("hide");
    if ($("#formIden").val() == "update") {
      return;
    }
    var objPatInfo = PatientInfo(data["hpercode"]);
    if (objPatInfo == undefined) {
      return;
    }

    $("#memlast").val(objPatInfo["patlast"]);
    $("#memfirst").val(objPatInfo["patfirst"]);
    $("#memmiddle").val(objPatInfo["patmiddle"]);
    $("#memsuffix").val(objPatInfo["patsuffix"]);
    $("#memsex").val(objPatInfo["patsex"]);
    $("#membdate").val(
      $.datepicker.formatDate("yy-mm-dd", new Date(objPatInfo["patbdate"]))
    );
    $("#memcstat").val(objPatInfo["patcstat"]);

    var objPatAddress = PatientAddress(data["hpercode"]);
    if (objPatAddress == undefined) {
      return;
    }
    $("#memstr").val(objPatAddress["patstr"]);
    var regcode = objPatAddress["regcode"];
    var regname = objPatAddress["regname"];

    if (regcode != null && regcode != "") {
      var newOption = new Option(regname, regcode, true, true);
      $("#memReg").append(newOption).trigger("change");
    }
    setMemRegion("mem",regcode);
    //setMemRegion(regcode);

    var provcode = objPatAddress["provcode"];
    var provname = objPatAddress["provname"];
    if (provcode != null && provcode != "") {
      var newOption = new Option(provname, provcode, true, true);
      $("#memProv").append(newOption).trigger("change");
      $("#memProv").prop("disabled", false);
    }
    setMemProv("mem",regcode);
    //setMemProv(regcode);

    var ctycode = objPatAddress["ctycode"];
    var ctyname = objPatAddress["ctyname"];
    if (ctycode != null && ctycode != "") {
      var newOption = new Option(ctyname, ctycode, true, true);
      $("#memCity").append(newOption).trigger("change");
      $("#memCity").prop("disabled", false);
    }
    setMemCity("mem",provcode);
    //setMemCity(provcode);

    var brg = objPatAddress["brg"];
    var bgyname = objPatAddress["bgyname"];
    if (brg != null && brg != "") {
      var newOption = new Option(bgyname, brg, true, true);
      $("#memBrgy").append(newOption).trigger("change");
      $("#memBrgy").prop("disabled", false);
    }
    setMemBrgy("mem",ctycode);
    //setMemBrgy(ctycode);

    var patzip = objPatAddress["patzip"];
    $("#memZip").val(patzip);
    var distzip = objPatAddress["distzip"];
    var distname = objPatAddress["distname"];
    if (distzip != null && distzip != "") {
      var newOption = new Option(distname, distzip, true, true);
      $("#memDist").append(newOption).trigger("change");
      $("#memDist").prop("disabled", false);
    }
    setMemZipCode("mem",ctycode);
    //setMemZipCode(ctycode);
    if(objPatInfo["patcstat"] == "M") {
      $("#memspouselastname").prop("disabled", false);
      $("#memspousefirstname").prop("disabled", false);
      $("#memspousemiddlename").prop("disabled", false);
      $("#memspousesuffix").prop("disabled", false);
    }
  });
}

function PatientInfo(hpercode) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientInformation/" + hpercode,
    data: "JSON",
    async: false,
    success: function (data) {
      obj = $.parseJSON(data);
    },
    error: function (data) {
      toastr.error("Error: Fetching Patient Information!", "Error");
    },
  });
  return obj;
}

function PatientAddress(hpercode) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Patient/PatientAddress/" + hpercode,
    data: "JSON",
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data);
    },
    error: function (data, status) {},
  });
  return obj;
}

function existhpercode(hpercode, pin) {
  var obj;
  $.ajax({
    type: "POST",
    url: baseURL + "Philhealth/existhpercode",
    data: { pin: pin, memhpercode: hpercode },
    async: false,
    success: function (data, status) {
      obj = $.parseJSON(data);
    },
    error: function (data, status) {},
  });
  return obj;
}

$("#getPINBtn").click(function(){
  var memberLastName = $("#memlast").val();
  var memberFirstName = $("#memfirst").val();
  var memberMiddleName = $("#memmiddle").val();
  var memberSuffix = $("#memsuffix").val();
  var memberDateOfBirth = $("#membdate").val();

  if(memberLastName == ""){
    $("#memlast").addClass("is-invalid");
    $("#memlast").attr("aria-describedby","memlast-error");
    $("#memlast").attr("aria-invalid",true);
    $("#memlast-error").remove();
    $('<span id="memlast-error" class="error invalid-feedback">Last Name is required!</span>').insertAfter("#memlast");
  }

  if(memberFirstName == ""){
    $("#memfirst").addClass("is-invalid");
    $("#memfirst").attr("aria-describedby","memfirst-error");
    $("#memfirst").attr("aria-invalid",true);
    $("#memfirst-error").remove();
    $('<span id="memfirst-error" class="error invalid-feedback">First Name is required!</span>').insertAfter("#memfirst");
  }

  if(memberDateOfBirth == ""){
    $("#membdate").addClass("is-invalid");
    $("#membdate").attr("aria-describedby","membdate-error");
    $("#membdate").attr("aria-invalid",true);
    $("#membdate-error").remove();
    $('<span id="membdate-error" class="error invalid-feedback">Date of Birth is required!</span>').insertAfter("#membdate");
  }

  if(memberLastName == "" || memberFirstName == "" || memberDateOfBirth == ""){
    toastr.warning("Member Last Name, First Name and Date of Birth are required!","Please try again.");
    return;
  }

  $("#processModal").modal({
    backdrop: 'static',
    keyboard: false
  });
  $("#processModal").modal("show");
  $.ajax({
    url: baseURL + "EclaimsLookup/getmemberpin",
    type : "POST",
    dataType: "JSON",
    cache:false,
    async:true,
    data: {getPINAccreditation:"",memberLastName:memberLastName,memberFirstName:memberFirstName,memberMiddleName:memberMiddleName,memberSuffix:memberSuffix,memberDateOfBirth:memberDateOfBirth},
    success: function(data){
      if(data.status === 'success'){
        if(data.data.status == 'error'){
          $("#pin").val('');
          toastr.error(data.data.message, "Get Member PIN Error");
          $("#processModal").modal("hide");
          return;
        }
        var dataMessage = data.data.toString();
        let position = dataMessage.indexOf('NO RECORDS FOUND');
        if(position >= 0){
          toastr.error(dataMessage, "Get Member PIN Error");
          $("#pin").val('');
          $("#processModal").modal("hide");
        }else{
          $("#pin").val(data.data);
          toastr.success("Get Member PIN successfull!","Get Member PIN");
          $("#processModal").modal("hide");
        }
      }else{
        $("#pin").val('');
        toastr.error("Please try again.", "Get Member PIN Error");
        $("#processModal").modal("hide");
      }
    },
    error: function(data){
      $("#pin").val('');
      toastr.error(data.responseJSON.message, "Get Member PIN Error");
      $("#processModal").modal("hide");
    }
    });
});

$("#getPENBtn").click(function(){
  if ($("#typemem").val() != "01" && $("#typemem").val() != "02"){
    return;
  }

  var memberPEN = $("#pen").val();
  var memberEmployer = $("#employer").val();

  if(memberPEN == "" && memberEmployer == ""){
    if($("#pen").next().hasClass('error invalid-feedback') == false){
      $("#pen").addClass("is-invalid");
      $("#pen").attr("aria-describedby","memlast-error");
      $("#pen").attr("aria-invalid",true);
      $("#pen-error").remove();
      $('<span id="pen-error" class="error invalid-feedback">Philhealth Employer Number is required!</span>').insertAfter("#pen");
    }
    
    if($("#employer").next().hasClass('error invalid-feedback') == false){
      $("#employer").addClass("is-invalid");
      $("#employer").attr("aria-describedby","employer-error");
      $("#employer").attr("aria-invalid",true);
      $("#employer-error").remove();
      $('<span id="employer-error" class="error invalid-feedback">Employer Name is required!</span>').insertAfter("#employer");
    }
    return;
  }
  $("#processModal").modal({
    backdrop: 'static',
    keyboard: false
  });
  $("#processModal").modal("show");
  $.ajax({
    url: baseURL + "EclaimsLookup/searchEmployer",
    type : "POST",
    dataType: "JSON",
    cache:false,
    async:true,
    data: {getPINAccreditation:"",employerNo:memberPEN,employerName:memberEmployer},
    success: function(data){
      if(data.data.status === 'error'){
        toastr.error(data.data.message, "Search Employer Error");
        $("#processModal").modal('hide');
      }else{
        $("#processModal").modal('hide');
        $("#employersModal").modal('show');
        laodEmployers(data.data);
      }
    },
    error: function(data){
      toastr.error("Please try again.", "Search Employer Error");
      $("#processModal").modal('hide');
    }
    });
});

function laodEmployers(data){
  $("#employersTable").prop("hidden",false);
  $('#employersTable').DataTable().clear();
  $('#employersTable').DataTable().destroy();
  $('#employersTable').DataTable({
    "data" : data,
     "columns": [
       { "data": "pPEN" },
       { "data": "pEmployerName" },
       { "data": "pEmployerAddress"},
       { "data": null,
          orderable: true,
				  searchable: false,
				  render: function (data) {
					return ('<button class="btn btn-success selectEmployer" data-pen="'+data.pPEN+'" data-employer="'+data.pEmployerName+'"><i class="fa fa-chevron-circle-right" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Select '+data.pEmployerName+'"></i></button>');
				},
      }
     ],
     "scrollX": true,
     "ordering": true,
     "searching": true,
     "pageLength": 5,
     "processing": true,
     "lengthChange": true,
    "language": {
     "processing": '<div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div>'
     }
   });
}

$("#employersTable").on('click','.selectEmployer',function(){
  var pen = $(this).data('pen');
  $("#pen").val(pen);
  var employer = $(this).data('employer');
  $("#employer").val(employer);
  $("#employersModal").modal('hide');
});
