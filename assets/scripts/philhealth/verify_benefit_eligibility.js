$(document).ready(function () {
  let form = $("#benefit_eligibility_form");
  const baseURL = $("#base_url").val();

  $(".search_patient").click(function () {
    $("#PatSearch").modal("show");
    $("#MemberSearchList .modal-footer > a").hide();
    $("#shpercode").prop("placeholder", "Member PIN");
    $("#PatSearch > div > div > div > h1").html(
      '<i class="fa fa-thin fa-search fa-2x" aria-hidden="true"></i> Member Search'
    );
  });

  $("#reset_form").click(function () {
    form.trigger("reset");
  });

  $("#frmPatSearch").submit(function () {
    $.ajax({
      url: baseURL + "Philhealth/MemberAdvanceSearch",
      type: "POST",
      data: new FormData(this),
      dataType: "JSON",
      processData: false,
      contentType: false,
      cache: false,
      async: true,
      success: function (data, response) {
        $("#MemberSearchList > div > div > div > a").prop("hidden", true);
        $("#MemberSearchList").modal("show");
        $("#PatSearch").modal("hide");
        PatSearchList(data);
      },
      error: function (response) {
        toastr.error("Error:Please try again!", "Error");
      },
    });
    return false;
  });

  $("#benefit_eligibility_form").submit(function (event) {
    event.preventDefault();
    if ($("#benefit_eligibility_form").valid() == false) {
      return;
    }
    $("#processModal").modal({
      backdrop: "static",
      keyboard: false,
    });
    $("#processModal").modal("show");

    let form = new FormData(this);

    const memberGender = $("#member_gender option:selected").text();
    form.append("member_gender_description", memberGender);

    const patientGender = $("#patient_gender option:selected").text();
    form.append("patient_gender_description", patientGender);

    //const membershipType = $("#membership_type option:selected").text();
    //form.append('membership_type_description', membershipType);

    const phictypemem = $("#membership_type option:selected").attr(
      "data-phictypemem"
    );
    form.append("phictypemem", phictypemem);

    const preltomem = $("#patient_relation option:selected").attr(
      "data-preltomem"
    );
    form.append("preltomem", preltomem);

    //const patientRelation = $("#patient_relation option:selected").text();
    //form.append('patient_relation_description', patientRelation);

    $.ajax({
      url: baseURL + "Philhealth/handlePBEFData",
      type: "POST",
      data: form,
      dataType: "JSON",
      processData: false,
      contentType: false,
      success: function (data, response) {
        if (data.status == "error") {
          toastr.error(data.code + ":" + data.message, "Error");
          $("#processModal").modal("hide");
          $("#pbefpdf").html("");
        } else {
          $("#processModal").modal("hide");
          $("#pbefpdf").html(
            '<object id="pdfframe" type="application/pdf" data="data:application/pdf;base64,' +
              data.data.pdf_base64 +
              '" width="100%" style="height:140vh; overflow:hidden;"></object>'
          );
        }
        //const url = baseURL + 'upload/pbef/' + data.data.filename;
        //$('#pbefpdf').html('<iframe id="pdfframe" type="application/pdf" src="'+url+'" width="100%" style="height:140vh; overflow:hidden;" ></iframe>');
      },
      error: function (response) {
        $("#processModal").modal("hide");
        toastr.error(response.responseJSON.message, "Error");
      },
    });
  });

  function PatSearchList(data) {
    $("#TblMemberSearchList").off();
    var table = $("#TblMemberSearchList").DataTable({
      data: data,
      destroy: true,
      className:
        "table table-sm table-responsive table-bordered table-striped table-hovered",
      columns: [
        { data: "phicnum" },
        { data: "fullname" },
        { data: "dob" },
        {
          data: "memsex",
          render: function (data) {
            return data == "F"
              ? '<i class="fa fa-female" aria-hidden="true"></i> FEMALE'
              : '<i class="fa fa-male" aria-hidden="true"></i> MALE';
          },
        },
        {
          data: null,
          orderable: false,
          searchable: false,
          render: function (data, type, row, meta) {
            return (
              `<div class="btn-group btn-ladda btn-sm selectClaim" data-layout="zoom-in">
									<button type="button" data-phicnum="` +
              data.phicnum +
              `" class="btn btn-success btn-sm selectMember" data-toggle="tooltip" data-placement="top" title="Select Member"><i class="fa fa-arrow-circle-right fa-xs"></i></button>
									</div>`
            );
          },
        },
      ],
    });

    $("#TblMemberSearchList").on("dblclick", "tr", function () {
      var data = table.row(this).data();

      if (data == undefined) {
        return;
      }

      var hpercode = data["phicnum"];
      var patientname = data["fullname"];
      var patsex = data["memsex"];
      $.ajax({
        type: "POST",
        url: baseURL + "Philhealth/claimHistory/" + hpercode,
        data: jQuery.param({ phicnum: hpercode }),
        async: false,
        dataType: "JSON",
        success: function (data) {
          if (data.data.length != 0) {
            $("#ClaimHistoryList .modal-footer > a").hide();
            $("#searchpatienthpercode").text(hpercode);
            $("#searchpatientname").text(patientname);
            $("#ClaimHistoryList").modal("show");
            $("#MemberSearchList").modal("hide");
            PatVisitList(data.data);
          } else {
            toastr.warning("Member has no existing claim!", "Warning");
          }
        },
        error: function (data) {
          toastr.error("Error: Fetching Patient Visits!", "Error");
        },
      });
    });

    $("#TblMemberSearchList").on("click", ".selectMember", function () {
      const row = $(this).closest("tr");
      const data = table.row(row).data();
      $("#philhealth_no").val(data.phicnum);
      $("#member_lastname").val(data.memlast);
      $("#member_firstname").val(data.memfirst);
      $("#member_middlename").val(data.memmid);
      $("#member_suffix").val(data.memsuffix);
      $("#member_gender").val(data.memsex);
      $("#member_birthdate").val(data.memberdob);
      $("#patient_relation").val("6");

      $("#patient_lastname").val(data.memlast);
      $("#patient_firstname").val(data.memfirst);
      $("#patient_middlename").val(data.memmid);
      $("#patient_suffix").val(data.memsuffix);
      $("#patient_gender").val(data.memsex);
      $("#patient_birthdate").val(data.memberdob);
      $("#MemberSearchList").modal("hide");
      //populatePBEFForm(data);
    });
  }

  function PatVisitList(data) {
    $("#claimLogList").off();

    var table = $("#claimLogList").DataTable({
      data: data,
      destroy: true,
      className:
        "table table-sm table-responsive table-bordered table-striped table-hovered",
      columns: [
        { data: "fullname" },
        { data: "admdate" },
        { data: "entry_time" },
        { data: "discharge_date" },
        { data: "discharge_time" },
        { data: "encountertype" },
        { data: "typeofclaim" },
        {
          data: null,
          orderable: false,
          searchable: false,
          render: function (data, type, row, meta) {
            return (
              `<div class="btn-group btn-ladda btn-sm selectClaim" data-layout="zoom-in">
									<button type="button" data-enccode="` +
              data.enccode +
              `" data-accreditation="` +
              data.paccreno +
              `" class="btn btn-success btn-sm selectClaim" data-toggle="tooltip" data-placement="top" title="Select Claim"><i class="fa fa-arrow-circle-right fa-xs"></i></button>
									</div>`
            );
          },
        },
        { data: "enccode", visible: false },
      ],
    });

    $("#claimLogList").on("dblclick", "tr", function () {
      const data = table.row(this).data();

      $("#ClaimHistoryList").modal("hide");

      populatePBEFForm(data);

      //$("#EnterPurpos").modal("show");
      //$("#formIden").val("insert");
      //$("#enccode").val(data["enccode"]);
      //$("#hpercode").val(data["hpercode"]);
    });

    $("#claimLogList").on("click", ".selectClaim", function () {
      const row = $(this).closest("tr");
      const data = table.row(row).data();
      $("#ClaimHistoryList").modal("hide");
      populatePBEFForm(data);
    });
  }

  function populatePBEFForm(data) {
    form.trigger("reset");

    //$("#philhealth_no").val(data.phicnum);
    $("#philhealth_no").val(data.memberpin);
    $("#member_lastname").val(data.memlast);
    $("#member_firstname").val(data.memfirst);
    $("#member_middlename").val(data.memmid);
    $("#member_suffix").val(data.memsuffix);
    $("#member_gender").val(data.memsex);
    $("#member_birthdate").val(data.membdate);
    $("#member_address").val(data.memberaddress);
    $("#member_zip").val(data.memzip);
    $("#membership_type").val(data.typemem); //phictypemem
    $("#phictypemem").val(data.phictypemem);
    $("#patient_relation").val(data.reltomem);
    $("#employers_pen").val(data.phicnum2);
    $("#employer_name").val(data.employername);

    $("#patient_lastname").val(data.patlast);
    $("#patient_firstname").val(data.patfirst);
    $("#patient_middlename").val(data.patmiddle);
    $("#patient_suffix").val(data.patsuffix);
    $("#patient_gender").val(data.patsex);
    $("#patient_birthdate").val(data.patbdate);
    $("#patient_address").val(data.patientaddress);

    const patientaddress = data.patientaddress;
    let patzip = patientaddress.lastIndexOf("patzip");
    if (patzip) {
      $("#patient_address").val(patientaddress.substr(0, patzip));
      patzip = patientaddress.substr(
        patzip,
        patientaddress.lastIndexOf("patdistzip") - patzip - 1
      );
      patzip = patzip.substr(8, patzip.length - 8);
    }

    let patdistzip = patientaddress.lastIndexOf("patdistzip");
    if (patdistzip) {
      patdistzip = patientaddress.substr(
        patdistzip,
        patientaddress.lastIndexOf("patdistzip") - patdistzip
      );
      patdistzip = patdistzip.substr(12, patdistzip.length - 12);
    }

    $("#patient_zip").val(patzip ? patzip : patdistzip);

    if (data.padmissiondatetime == null) {
      $("#admission_date").val(data.admdate);
    } else {
      $("#admission_date").val(data.admission_date);
    }
    if (data.pdischargedatetime) {
      $("#discharge_date").val(data.disdate);
    } else {
      $("#discharge_date").val(data.discharge_date);
    }
    $("#rvs").val(data.prvscode1);
    $("#total_hospital_bill").val(data.pgrandtotal);
    $("#phic_reimbursement").val(data.total_amount_claimed);
    $("#accreno").val(data.accreno);
  }

  $("#benefit_eligibility_form").validate({
    rules: {
      accreno: "required",
      isfinal: "required",
      philhealth_no: "required",
      member_lastname: "required",
      member_firstname: "required",
      member_gender: "required",
      member_birthdate: "required",
      patient_relation: "required",
      patient_lastname: "required",
      patient_firstname: "required",
      patient_middlename: "required",
      patient_gender: "required",
      patient_birthdate: "required",
      admission_date: "required",
      discharge_date: {
        required: {
          depends: function (element) {
            if ($("#isfinal").val() == "1") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      employers_pen: {
        required: {
          depends: function (element) {
            const phictypemem = $("#membership_type option:selected").attr(
              "data-phictypemem"
            );
            if (phictypemem == "S" || phictypemem == "G") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
      employer_name: {
        required: {
          depends: function (element) {
            const phictypemem = $("#membership_type option:selected").attr(
              "data-phictypemem"
            );
            if (phictypemem == "S" || phictypemem == "G") {
              return true;
            } else {
              return false;
            }
          },
        },
      },
    },
    messages: {
      accreno: "Accreditation Number is required!",
      isfinal: "Please select Initial or Final!",
      philhealth_no: "Philhealth Identification Number is required!",
      member_lastname: "Member Last Name is required!",
      member_firstname: "Member First Name is required!",
      member_gender: "Member Gender is required!",
      member_birthdate: "Member Date of Birth is required!",
      patient_relation: "Patient's Relation to Member is required!",
      employers_pen: "PhilHealth Employer's Number is required!",
      employer_name: "Employer's Name is required!",
      patient_lastname: "Patient Last Name is required!",
      patient_firstname: "Patient First Name is required!",
      patient_gender: "Patient Gender is required!",
      patient_birthdate: "Patient Date of Birth is required!",
      admission_date: "Patient Admission Date is required!",
      discharge_date: "Patient Discharged Date is required!",
    },
    validClass: "is-valid",
    errorClass: "is-invalid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      const elementID = element[0].id;
      if ($("#" + elementID + "-error").length == 0) {
        error.addClass("invalid-feedback");
        error.insertAfter(element);
      }
    },
  });
});

$("#cancelTblMemberSearchListBtn").click(function () {
  $("#MemberSearchList").modal("hide");
});

$("#CancelClaimHistoryListBtn").click(function () {
  $("#ClaimHistoryList").modal("hide");
});

$("#memberPIN").click(function () {
  var memberPIN;
  var hasError = false;
  if ($("#philhealth_no").val() == "") {
    if ($("#accreno").val() == "") {
      $("#accreno").next("#accreno-error").remove();
      $("#accreno").removeClass("is-valid");
      $("#accreno").addClass("is-invalid");
      $("#accreno").after(
        '<div id="accreno-error" class="is-invalid invalid-feedback">Accreditation Number is required!</div>'
      );
      hasError = true;
    } else {
      $("#accreno").next("#accreno-error").remove();
      $("#accreno").removeClass("is-invalid");
      $("#accreno").addClass("is-valid");
      $("#accreno").after(
        '<div id="accreno-error" class="is-invalid invalid-feedback">Accreditation Number is required!</div>'
      );
    }

    if ($("#member_lastname").val() == "") {
      $("#member_lastname").next("#member_lastname-error").remove();
      $("#member_lastname").removeClass("is-valid");
      $("#member_lastname").addClass("is-invalid");
      $("#member_lastname").after(
        '<div id="member_lastname-error" class="is-invalid invalid-feedback">Member Last Name is required!</div>'
      );
      hasError = true;
    } else {
      $("#member_lastname").next("#member_lastname-error").remove();
      $("#member_lastname").removeClass("is-invalid");
      $("#member_lastname").addClass("is-valid");
      $("#member_lastname").after(
        '<div id="member_lastname-error" class="is-invalid invalid-feedback">Member Last Name is required!</div>'
      );
    }

    if ($("#member_firstname").val() == "") {
      $("#member_firstname").next("#member_firstname-error").remove();
      $("#member_firstname").removeClass("is-valid");
      $("#member_firstname").addClass("is-invalid");
      $("#member_firstname").after(
        '<div id="member_firstname-error" class="is-invalid invalid-feedback">Member First Name is required!</div>'
      );
      hasError = true;
    } else {
      $("#member_firstname").next("#member_firstname-error").remove();
      $("#member_firstname").removeClass("is-invalid");
      $("#member_firstname").addClass("is-valid");
      $("#member_firstname").after(
        '<div id="member_firstname-error" class="is-invalid invalid-feedback">Member First Name is required!</div>'
      );
    }

    if ($("#member_birthdate").val() == "") {
      $("#member_birthdate").next("#member_gender-error").remove();
      $("#member_birthdate").removeClass("is-valid");
      $("#member_birthdate").addClass("is-invalid");
      $("#member_birthdate").after(
        '<div id="member_birthdate-error" class="is-invalid invalid-feedback">Member Date of Birth is required!</div>'
      );
      hasError = true;
    } else {
      $("#member_birthdate").next("#member_gender-error").remove();
      $("#member_birthdate").removeClass("is-invalid");
      $("#member_birthdate").addClass("is-valid");
      $("#member_birthdate").after(
        '<div id="member_birthdate-error" class="is-invalid invalid-feedback">Member Date of Birth is required!</div>'
      );
    }

    if (hasError) return;

    let memberData = {
      getPINAccreditation: $("#accreno").val(),
      memberLastName: $("#member_lastname").val(),
      memberFirstName: $("#member_firstname").val(),
      memberMiddleName: $("#member_middlename").val(),
      memberSuffix: $("#member_suffix").val(),
      memberDateOfBirth: $("#member_birthdate").val(),
    };
    getMemberPIN(memberData);
  }
});

function getMemberPIN(memberData) {
  $("#processModal").modal({
    backdrop: "static",
    keyboard: false,
  });
  $("#processModal").modal("show");
  var memberPin = "";
  $.ajax({
    url: baseURL + "EclaimsLookup/getmemberpin",
    type: "POST",
    dataType: "JSON",
    cache: false,
    async: true,
    data: memberData,
    success: function (data) {
      if (data.status === "success") {
        if (typeof data.data == "object") {
          toastr.error(data.data.message, "Get Member PIN");
          $("#processModal").modal("hide");
        } else {
          if (typeof data.data == "number") {
            $("#philhealth_no").val(data.data);
            $("#processModal").modal("hide");
            toastr.success("Get Member PIN successfull!", "Get Member PIN");
          } else {
            let position = data.data.search("NO RECORDS FOUND.");
            if (position == 0) {
              toastr.error(data.data, "Get Member PIN Error");
              $("#processModal").modal("hide");
            } else {
              $("#philhealth_no").val(data.data);
              toastr.success("Get Member PIN successfull!", "Get Member PIN");
            }
          }
        }
      } else {
        toastr.error("Please try again.", "Get Member PIN Error");
        $("#processModal").modal("hide");
      }
    },
    error: function (data) {
      $("#processModal").modal("hide");
      toastr.error("Please try again.", "Get Member PIN Error");
    },
  });
}

$("#patient_relation").change(function () {
  if ($(this).val() == "6") {
    $("#patient_lastname").val($("#member_lastname").val());
    $("#patient_firstname").val($("#member_firstname").val());
    $("#patient_middlename").val($("#member_middlename").val());
    $("#patient_suffix").val($("#member_suffix").val());
    $("#patient_gender").val($("#member_gender").val());
    $("#patient_birthdate").val($("#member_birthdate").val());
    $("#patient_address").val($("#member_address").val());
    $("#patient_zip").val($("#member_zip").val());
  } else {
    $("#patient_lastname").val("");
    $("#patient_firstname").val("");
    $("#patient_middlename").val("");
    $("#patient_suffix").val("");
    $("#patient_gender").val("");
    $("#patient_birthdate").val("");
    $("#patient_address").val("");
    $("#patient_zip").val("");
  }
});
