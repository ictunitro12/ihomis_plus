function getCF4AttendProv(enccode) {
  $.ajax({
    url: baseURI + "Philhealth/getCF4Provider",
    type: "POST",
    dataType: "JSON",
    data: jQuery.param({
      enccode: enccode,
    }),
    success: function (data, response) {
      $("#cf4attendprov")
        .empty()
        .append("<option value=''>SELECT HEALTH CARE PROFESSIONAL</option>");
      var providerName = "";
      var providerSuffix = "";
      var providerMiddleName = "";
      for (i in data) {
        if (data[i].empsuffix == null || data[i].empsuffix == "") {
          providerSuffix = "";
        } else {
          providerSuffix = " " + data[i].empsuffix;
        }

        if (data[i].middlename == null || data[i].middlename == "") {
          providerMiddleName = "";
        } else {
          providerMiddleName = ", " + data[i].middlename;
        }

        providerName =
          data[i].lastname +
          ", " +
          data[i].firstname +
          providerSuffix +
          providerMiddleName;
        if (data[i].cf4attendprov == data[i].licno) {
          $("#cf4attendprov").append(
            "<option value='" +
              data[i].licno +
              "' selected>" +
              providerName +
              "</option>"
          );
        } else {
          $("#cf4attendprov").append(
            "<option value='" +
              data[i].licno +
              "'>" +
              providerName +
              "</option>"
          );
        }
      }
    },
  });
}

$("#cf4attendprovFrom").submit(function (e) {
  e.preventDefault();

  let formData = new FormData(this);
  formData.append("enccode", enccode);

  updateCF4AttendProv(formData, enccode);
});

function updateCF4AttendProv(formData, enccode) {
  $.ajax({
    url: baseURI + "cf4-attending-provider/update",
    type: "POST",
    data: formData,
    dataType: "JSON",
    processData: false,
    contentType: false,
    success: function (data, response) {
      if (data == true) {
      }
      toastr.success(data.message, "Success");
    },
  });
}
