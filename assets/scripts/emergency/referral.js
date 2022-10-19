$(document).ready(function () {
  $("#frmReferto").validate({
    rules: {
      dateRefto: "required",
      ReferType: "required",
      ReferOTH: {
        required: {
          depends: function () {
            if ($("#ReferType").val() == "OTHER") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      reftoReas: "required",
      RefCategory: "required",
      refFacility: "required",
      dateRefCall: {
        required: {
          depends: function () {
            if ($("#RefCategory").val() == "ER") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      RefFrom_doc: "required",
    },
    messages: {
      dateRefto: "Date of Referral is required!",
      ReferType: "Type of Referral is required!",
      ReferOTH: "Please specify Other Type!",
      reftoReas: "Reason for Referral is required!",
      RefCategory: "Referral Category is required!",
      refFacility: "Receiving Facility is required!",
      dateRefCall: "Please specify date and time called!",
      RefFrom_doc: "Referring Provider is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      error.insertAfter(element);
    },
  });

  $("#frmReferto").submit(function (event) {
    event.preventDefault();
    if ($("#frmReferto").valid() == false) {
      return;
    }
    var POSTURL = baseURL + "Referral/saveReferralTo";
    $.ajax({
      type: "POST",
      url: POSTURL,
      dataType: "JSON",
      cache: false,
      async: true,
      data: $(this).serialize(),
      success: function (data) {
        toastr.success(data.message, "Success");
        $("#refertoModal").modal("hide");
      },
      error: function (data, xhr, text) {
        toastr.error(data.responseJSON.message, "Error");
      },
    });
  });

  $("#ReferType").change(function () {
    if ($(this).val() == "OTHER") {
      $("#ReferOTH").prop("readonly", false);
    } else {
      $("#ReferOTH").val("");
      $("#ReferOTH").prop("readonly", true);
    }
  });
  init_refto_hfhudcode();
  init_referring_doc();
  init_referral_doc();
});

function init_refto_hfhudcode() {
  $("#refFacility").select2({
    allowClear: true,
    placeholder: "Select Receiving Facility",
    theme: "coreui",
    ajax: {
      url: baseURL + "Referral/getReferralHfhud/",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          referralHfhud: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.faccode,
            text: item.hfhudname,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function init_referring_doc() {
  $("#RefFrom_doc").select2({
    placeholder: "Select Referring Provider",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Doctor/searchDoctor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}

function init_referral_doc() {
  $("#RefTo_doc").select2({
    placeholder: "Select Referral Provider",
    allowClear: true,
    theme: "coreui",
    ajax: {
      url: baseURL + "Doctor/searchRefDoctor",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchDoctor: params.term,
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.name,
          });
        });
        return {
          results: results,
        };
      },
    },
  });
}
