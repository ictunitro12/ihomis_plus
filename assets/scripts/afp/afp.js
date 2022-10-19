var Module = $('#module').val();

/* function PatientLogList(from, to) */
function PatientLogList() {
    var data = new Object();
    data.id = "AFPTable";
    /* data.link = baseURL + "AFP/AFPList/" + from + "/" + to; */
    data.link = baseURL + "AFP/AFPList";
    data.type = "POST";
    data.coldef = [
        {
            targets: [0],
            visible: false,
            searchable: true,
        },
        {
            targets: [1, 2, 3, 4, 5, 6],
            orderable: false,
        }
    ];
    loadTable(data);
}

function LaboratoryDataList(enccode, hpercode) {
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    var data = new Object();
    data.id = "LaboratoryDataTable";
    data.link = baseURL + "AFP/LaboratoryDataList/" + enccode + "/" + hpercode;
    data.type = "POST";
    data.coldef = [
        {
            targets: [0, 1, 6, 7, 8, 9],
            visible: false,
            searchable: true,
        },
        {
            targets: [2, 3, 4, 5, 10, 11, 12, 13],
            orderable: false,
        }
    ];
    loadTable(data);
}

$("#AFPTable").on("click", ".ModalAFP", function () {
    var base_url = $('#base_url').val();
    var data = $(this).data();
    $('#ModalAFP').modal({ backdrop: 'static' }).draggable({});
    var enccode = atob(data['enccode']);
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    $("#code").val(enccode);
    $('#AFPPDF').html('<embed src="' + base_url + "AFP/AFPForm/" + enccode + '" frameborder="2" width="100%" height="800px" id="AFPPDF">');
});

function checkAFP(enccode, hpercode) {
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    $.ajax({
        type: "POST",
        url: "../AFP/checkAFP/" + enccode + "/" + hpercode,
        data: "JSON",
        success: function (data) {
            if (data == 1) {
                toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
                window.location.reload();
            }
            else {
                initAFP(enccode, hpercode);
            }
        },
        error: function (data) {
            alert('Please try again!');
        }
    });
}

$('#search').click(function () {
    $("#PatSearch").modal('show');
});

function initAFP(enccode, hpercode) {
    uppercase();
    getPatientData(enccode, hpercode);
    SelIndig();

    $('#enccode').val(enccode);
    $('#formIden').val('insert');
    $('#drutype').val('Government Hospital');
    $("#search").attr("disabled", false);
}

function initAFPEdit(hpercode, enccode) {
    getPatientData(enccode, hpercode);
    getAFPData(enccode);

    $('#enccode').val(enccode);
    $('#drutype').val('Government Hospital');
    $("#search").attr("disabled", true);
}

$("#AFPTable").on("click", ".ModalDeleteAFP", function () {
    var data = $(this).data();

    $('#DeleteAFP').modal({ backdrop: 'static' }).draggable({});
    $("#formIdentification").val('delete');

    var enccode = atob(data['enccode']);
    $("#deletecode").val(enccode);
});

$("#LaboratoryDataTable").on("click", ".ModalDeleteLaboratoryData", function () {
    var data = $(this).data();

    $('#DeleteLaboratoryData').modal({ backdrop: 'static' }).draggable({});
    $("#formIdentification").val('delete');

    var enccode = atob(data['enccode']);
    $("#deletecode").val(enccode);
});


$("#LaboratoryDataTable").on("click", ".ModalEditLaboratoryData", function () {
    var data = $(this).data();
    var enccode = atob(data['enccode']);
    var hpercode = atob(data['hpercode']);
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    getLaboratoryData(enccode, hpercode);

    $('#ModalAddLaboratoryData').modal({ backdrop: 'static' }).draggable({});
});

function getLaboratoryData(enccode, hpercode) {
    $.ajax({
        url: baseURL + "AFP/getLaboratoryData/" + enccode + "/" + hpercode,
        type: "POST",
        data: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = $.parseJSON(data);

            $("#formIden").val('update');
            $('#enccode').val(obj['enccode']);
            $('#hpercode').val(obj['hpercode']);
            $('#ctr').val(obj['hafpctr']);

            var dcollected = obj['date_collected'];
            var dcollecteds = ((dcollected == "1970-01-01 00:00:00") || (dcollected == null)) ? "" : setTimeLocale(dcollected);
            $("#dcollected").val(dcollecteds);

            var dsent = obj['date_sent_RITM'];
            var dsents = ((dsent == "1970-01-01 00:00:00") || (dsent == null)) ? "" : setTimeLocale(dsent);
            $("#dsent").val(dsents);

            var dreceived = obj['date_received_RITM'];
            var dreceiveds = ((dreceived == "1970-01-01 00:00:00") || (dreceived == null)) ? "" : setTimeLocale(dreceived);
            $("#dreceived").val(dreceiveds);

            var labresult = obj['result'];
            if (labresult == null || labresult == '' || labresult == 'NEG' || labresult == 'NPEV') {
                $('#labresultspecify').removeAttr("enabled");
            } else {
                $('#labresultspecify').removeAttr("disabled");
            }
            $("#labresult").val(labresult);
            $("#labresultspecify").val(obj['specify']);
            $("#aostool").val(obj['amount_stool']);
            $("#noipacks").val(obj['no_ice_packs']);
            $("#qoipacks").val(obj['quality_ice_packs']);
            $("#tocontainer").val(obj['type_container']);
            $("#nocourier").val(obj['name_courier']);
            $("#rby").val(obj['recieved_by']);
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
        }
    });
}

function getPatientData(enccode, hpercode) {
    $.ajax({
        url: baseURL + "AFP/getPatientData/" + enccode + "/" + hpercode,
        type: "POST",
        data: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = $.parseJSON(data);

            $('#formIden').val('insert');
            $('#newfhud').val(obj['newfhudcode']);
            $('#encountercode').val(obj['enccode']);
            $('#percode').val(obj['hpercode']);
            $('#info_fullname').val(obj['patientname']);
            $('#info_lname').val(obj['patlast']);
            $('#info_fname').val(obj['patfirst']);
            $('#info_mname').val(obj['patmiddle']);
            $('#info_suffix').val(obj['suffix']);
            $('#patsuffix').val(obj['patsuffix']);
            $('#info_telno').val(obj['Landline']);
            $('#info_sex').val(obj['patsex']);
            $('#info_bplace').val(obj['patbplace']);
            $('#info_cs').val(obj['patcstat']);
            $('#info_nat').val(obj['natcode']);
            $('#occupation').val(obj['occupation']);
            $('#toecode').val(obj['toecode']);
            $('#selEmp').val(obj['patempstat']);
            $("#info_dob").val(obj['patbdate']);
            $('#info_age').val(obj['age']);
            $('#selRel').val(obj['relcode']);
            $('#rcode').val(obj['regcode']);
            $('#pcode').val(obj['provcode']);
            $('#ccode').val(obj['ctycode']);
            $('#bcode').val(obj['brg']);
            $('#info_street').val(obj['patstr']);

            $('#city').val(obj['ctyname']);
            $('#barangay').val(obj['brgyname']);
            $('#province').val(obj['provname']);
            $('#region').val(obj['regname']);

            $('#nodru').val(obj['hhosname']);
            $('#druaddress').val(obj['druaddress']);

            var padmitted = obj['toecode'];
            var padmitteds = ((padmitted == "ADM")) ? "Yes" : "No";
            $('#padmitted').val(padmitteds);

            var dasc = obj['consult_date'];
            var dascs = ((dasc == "1970-01-01 00:00:00") || (dasc == null)) ? "" : setTimeLocale(dasc);
            $("#dasc").val(dascs);

            $('#workdiag').val(obj['working_diagnosis']);
            $('#findiag').val(obj['fin']);
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
        }
    });
}

function getAFPData(enccode) {
    $.ajax({
        url: baseURL + "AFP/getAFPData/" + enccode,
        type: "POST",
        data: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = $.parseJSON(data);

            $('#formIden').val('update');

            setIndigenous(obj['member_of_IP']);

            var donset = obj['date_paralysis'];
            var donsets = ((donset == "1970-01-01 00:00:00") || (donset == null)) ? "" : setTimeLocale(donset);
            $("#donset").val(donsets);

            $('#noparent').val(obj['name_parent_caregiver']);
            $('#parentcno').val(obj['parent_caregiver_nos']);

            var dor = obj['date_report'];
            var dors = ((dor == "1970-01-01 00:00:00") || (dor == null)) ? "" : setTimeLocale(dor);
            $("#dor").val(dors);

            var doi = obj['date_investigation'];
            var dois = ((doi == "1970-01-01 00:00:00") || (doi == null)) ? "" : setTimeLocale(doi);
            $("#doi").val(dois);

            $('#noinvestigator').val(obj['name_investigator']);
            $('#investigatorcno').val(obj['investigator_nos']);

            $("#fever option[value='" + obj['fever'] + "']").attr("selected", "selected");
            $("#cough option[value='" + obj['cough'] + "']").attr("selected", "selected");
            $("#diarrhea_vomit option[value='" + obj['diarrhea_vomit'] + "']").attr("selected", "selected");
            $("#muscle_pain option[value='" + obj['muscle_pain'] + "']").attr("selected", "selected");
            $("#meningeal_signs option[value='" + obj['meningeal_signs'] + "']").attr("selected", "selected");

            $("#pabirth option[value='" + obj['present_birth'] + "']").attr("selected", "selected");
            $("#asymmetric option[value='" + obj['asymmetric'] + "']").attr("selected", "selected");
            $("#threetofourteenoi option[value='" + obj['paralysis_3_to_14'] + "']").attr("selected", "selected");
            $("#doparalysis option[value='" + obj['paralysis_direction'] + "']").attr("selected", "selected");

            $("#rarm option[value='" + obj['clinical_paralysis_rarm'] + "']").attr("selected", "selected");
            $('#rarmss').val(obj['rarm_sensory_status']);
            $('#rarmdtr').val(obj['rarm_d_tendon_reflexes']);
            $('#rarmms').val(obj['rarm_motor_status']);
            var rarm = obj['clinical_paralysis_rarm'];
            if (rarm == 'Y') {
                $('#rarmss').removeAttr("disabled");
                $('#rarmdtr').removeAttr("disabled");
                $('#rarmms').removeAttr("disabled");
            } else if (rarm == 'N') {
                $('#rarmss').removeAttr("enabled");
                $('#rarmdtr').removeAttr("enabled");
                $('#rarmms').removeAttr("enabled");
            } else {
                $('#rarmss').removeAttr("enabled");
                $('#rarmdtr').removeAttr("enabled");
                $('#rarmms').removeAttr("enabled");
            }

            $("#larm option[value='" + obj['clinical_paralysis_larm'] + "']").attr("selected", "selected");
            $('#larmss').val(obj['larm_sensory_status']);
            $('#larmdtr').val(obj['larm_d_tendon_reflexes']);
            $('#larmms').val(obj['larm_motor_status']);
            var larm = obj['clinical_paralysis_larm'];
            if (larm == 'Y') {
                $('#larmss').removeAttr("disabled");
                $('#larmdtr').removeAttr("disabled");
                $('#larmms').removeAttr("disabled");
            } else if (larm == 'N') {
                $('#larmss').removeAttr("enabled");
                $('#larmdtr').removeAttr("enabled");
                $('#larmms').removeAttr("enabled");
            } else {
                $('#larmss').removeAttr("enabled");
                $('#larmdtr').removeAttr("enabled");
                $('#larmms').removeAttr("enabled");
            }

            $("#rleg option[value='" + obj['clinical_paralysis_rleg'] + "']").attr("selected", "selected");
            $('#rlegss').val(obj['rleg_sensory_status']);
            $('#rlegdtr').val(obj['rleg_d_tendon_reflexes']);
            $('#rlegms').val(obj['rleg_motor_status']);
            var rleg = obj['clinical_paralysis_rleg'];
            if (rleg == 'Y') {
                $('#rlegss').removeAttr("disabled");
                $('#rlegdtr').removeAttr("disabled");
                $('#rlegms').removeAttr("disabled");
            } else if (rleg == 'N') {
                $('#rlegss').removeAttr("enabled");
                $('#rlegdtr').removeAttr("enabled");
                $('#rlegms').removeAttr("enabled");
            } else {
                $('#rlegss').removeAttr("enabled");
                $('#rlegdtr').removeAttr("enabled");
                $('#rlegms').removeAttr("enabled");
            }

            $("#lleg option[value='" + obj['clinical_paralysis_lleg'] + "']").attr("selected", "selected");
            $('#llegss').val(obj['lleg_sensory_status']);
            $('#llegdtr').val(obj['lleg_d_tendon_reflexes']);
            $('#llegms').val(obj['lleg_motor_status']);
            var lleg = obj['clinical_paralysis_lleg'];
            if (lleg == 'Y') {
                $('#llegss').removeAttr("disabled");
                $('#llegdtr').removeAttr("disabled");
                $('#llegms').removeAttr("disabled");
            } else if (lleg == 'N') {
                $('#llegss').removeAttr("enabled");
                $('#llegdtr').removeAttr("enabled");
                $('#llegms').removeAttr("enabled");
            } else {
                $('#llegss').removeAttr("enabled");
                $('#llegdtr').removeAttr("enabled");
                $('#llegms').removeAttr("enabled");
            }

            $("#bmuscles option[value='" + obj['breathing_muscles'] + "']").attr("selected", "selected");
            $("#nmuscles option[value='" + obj['neck_muscles'] + "']").attr("selected", "selected");
            $("#fmuscles option[value='" + obj['facial_muscles'] + "']").attr("selected", "selected");

            $("#hondisorder option[value='" + obj['hist_neuro_dis'] + "']").attr("selected", "selected");
            var hondisorder = obj['hist_neuro_dis'];
            if (hondisorder == 'Y') {
                $('#hondisorderspecify').removeAttr("disabled");
            } else if (hondisorder == 'N') {
                $('#hondisorderspecify').removeAttr("enabled");
            } else {
                $('#hondisorderspecify').removeAttr("enabled");
            }
            $('#hondisorderspecify').val(obj['hist_neuro_dis_specify']);
            $("#omptillness option[value='" + obj['travel_one_month_prio'] + "']").attr("selected", "selected");
            var omptillness = obj['travel_one_month_prio'];
            if (omptillness == 'Y') {
                $('#omptillnessplace').removeAttr("disabled");
                $('#dtfrom').removeAttr("disabled");
                $('#dtto').removeAttr("disabled");
            } else if (omptillness == 'N') {
                $('#omptillnessplace').removeAttr("enabled");
                $('#dtfrom').removeAttr("enabled");
                $('#dtto').removeAttr("enabled");
            } else {
                $('#omptillnessplace').removeAttr("enabled");
                $('#dtfrom').removeAttr("enabled");
                $('#dtto').removeAttr("enabled");
            }
            $('#omptillnessplace').val(obj['travel_one_month_prio_specify']);

            var dtfrom = obj['date_traveled_from'];
            var dtfroms = ((dtfrom == "1970-01-01 00:00:00") || (dtfrom == null)) ? "" : setTimeLocale(dtfrom);
            $("#dtfrom").val(dtfroms);
            var dtto = obj['date_traveled_to'];
            var dttos = ((dtto == "1970-01-01 00:00:00") || (dtto == null)) ? "" : setTimeLocale(dtto);
            $("#dtto").val(dttos);

            $("#sixtydaysparalysis option[value='" + obj['other_afp_in_community'] + "']").attr("selected", "selected");
            $("#itanimalbite option[value='" + obj['hist_injection_trauma'] + "']").attr("selected", "selected");
            var itanimalbite = obj['hist_injection_trauma'];
            if (itanimalbite == 'Y') {
                $('#itanimalbitespecify').removeAttr("disabled");
            } else if (itanimalbite == 'N') {
                $('#itanimalbitespecify').removeAttr("enabled");
            } else {
                $('#itanimalbitespecify').removeAttr("enabled");
            }
            $('#itanimalbitespecify').val(obj['hist_injection_trauma_specify']);
            $("#esample option[value='" + obj['sample_tested_positive'] + "']").attr("selected", "selected");
            var esample = obj['sample_tested_positive'];
            if (esample == 'Y') {
                $('#esampledate').removeAttr("disabled");
            } else if (esample == 'N') {
                $('#esampledate').removeAttr("enabled");
            } else {
                $('#esampledate').removeAttr("enabled");
            }
            var esampledate = obj['sample_tested_positive_date'];
            var esampledates = ((esampledate == "1970-01-01 00:00:00") || (esampledate == null)) ? "" : setTimeLocale(esampledate);
            $("#esampledate").val(esampledates);

            $('#opvipvreceived').val(obj['opv_ipv_dose_received']);
            var lastdoseopvipv = obj['opv_ipv_dose_received_date'];
            var lastdoseopvipvs = ((lastdoseopvipv == "1970-01-01 00:00:00") || (lastdoseopvipv == null)) ? "" : setTimeLocale(lastdoseopvipv);
            $("#lastdoseopvipv").val(lastdoseopvipvs);
            $("#hotcase option[value='" + obj['hot_case'] + "']").attr("selected", "selected");

            var edofollowup = obj['expected_date_follow_up'];
            var edofollowups = ((edofollowup == "1970-01-01 00:00:00") || (edofollowup == null)) ? "" : setTimeLocale(edofollowup);
            $("#edofollowup").val(edofollowups);
            $("#fudone option[value='" + obj['date_follow_up_done'] + "']").attr("selected", "selected");
            var fudone = obj['date_follow_up_done'];
            if (fudone == 'Y') {
                $('#fudonedate').removeAttr("disabled");
            } else if (fudone == 'N') {
                $('#fudonedate').removeAttr("enabled");
            } else {
                $('#fudonedate').removeAttr("enabled");
            }
            var fudonedate = obj['actual_date_follow_up'];
            var fudonedates = ((fudonedate == "1970-01-01 00:00:00") || (fudonedate == null)) ? "" : setTimeLocale(fudonedate);
            $("#fudonedate").val(fudonedates);
            $("#pedone option[value='" + obj['PE_done'] + "']").attr("selected", "selected");
            var pedone = obj['PE_done'];
            if (pedone == 'N') {
                $('#pendonereason').removeAttr("disabled");
            } else if (pedone == 'Y') {
                $('#pendonereason').removeAttr("enabled");
            } else {
                $('#pendonereason').removeAttr("enabled");
            }
            $('#pendonereason').val(obj['reason_no_PE_done']);
            $("#rpsixtydays option[value='" + obj['residual_paralysis'] + "']").attr("selected", "selected");
            var rpsixtydays = obj['residual_paralysis'];
            if (rpsixtydays == 'Y') {
                $('#rpsixtydaysspecify').removeAttr("disabled");
            } else if (rpsixtydays == 'N') {
                $('#rpsixtydaysspecify').removeAttr("enabled");
            } else {
                $('#rpsixtydaysspecify').removeAttr("enabled");
            }
            $("#rpsixtydaysspecify option[value='" + obj['residual_paralysis_specify'] + "']").attr("selected", "selected");
            $("#poatrophy option[value='" + obj['presence_atrophy'] + "']").attr("selected", "selected");
            var poatrophy = obj['presence_atrophy'];
            if (poatrophy == 'Y') {
                $('#srarm').removeAttr("disabled");
                $('#slarm').removeAttr("disabled");
                $('#srleg').removeAttr("disabled");
                $('#slleg').removeAttr("disabled");
            } else if (poatrophy == 'N') {
                $('#srarm').removeAttr("enabled");
                $('#slarm').removeAttr("enabled");
                $('#srleg').removeAttr("enabled");
                $('#slleg').removeAttr("enabled");
            } else {
                $('#srarm').removeAttr("enabled");
                $('#slarm').removeAttr("enabled");
                $('#srleg').removeAttr("enabled");
                $('#slleg').removeAttr("enabled");
            }
            $("#srarm option[value='" + obj['site_rarm'] + "']").attr("selected", "selected");
            $("#slarm option[value='" + obj['site_larm'] + "']").attr("selected", "selected");
            $("#srleg option[value='" + obj['site_rleg'] + "']").attr("selected", "selected");
            $("#slleg option[value='" + obj['site_lleg'] + "']").attr("selected", "selected");
            $('#ltfollowup').val(obj['lost_followup']);
            $('#othersspecify').val(obj['reason_specify']);
            $('#noobservations').val(obj['other_observation']);
            $("#finalclass option[value='" + obj['final_classification'] + "']").attr("selected", "selected");
            $("#vapp option[value='" + obj['final_classification_VAPP'] + "']").attr("selected", "selected");
            var finalclass = obj['final_classification'];
            if (finalclass == 'DISCARD') {
                $('#vapp').removeAttr("enabled");
                $('#dclassified').removeAttr("disabled");
            } else if (finalclass == 'VAPP') {
                $('#vapp').removeAttr("disabled");
                $('#dclassified').removeAttr("enabled");
            } else {
                $('#vapp').removeAttr("enabled");
                $('#dclassified').removeAttr("enabled");
            }

            var dclassified = obj['date_classified'];
            var dclassifieds = ((dclassified == "1970-01-01 00:00:00") || (dclassified == null)) ? "" : setTimeLocale(dclassified);
            $("#dclassified").val(dclassifieds);
            $("#ccriteria option[value='" + obj['classification_criteria'] + "']").attr("selected", "selected");
            $("#nafp option[value='" + obj['case_not_AFP'] + "']").attr("selected", "selected");
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
        }
    });
}

/*class==checker*/
$(".checker").click(function () {
    if ($(this).is(":checked")) {
        $(this).val("1");
    } else if ($(this).is(":not(:checked)")) {
        $(this).val("2");
    }
});

$('#rarm').change(function () {
    if ($(this).val() == 'Y') {
        $('#rarmss').prop("disabled", false);
        $('#rarmdtr').prop("disabled", false);
        $('#rarmms').prop("disabled", false);
    } else {
        $('#rarmss').prop("disabled", true);
        $('#rarmdtr').prop("disabled", true);
        $('#rarmms').prop("disabled", true);
        $('#rarmss').val("");
        $('#rarmdtr').val("");
        $('#rarmms').val("");
    }
});

$('#larm').change(function () {
    if ($(this).val() == 'Y') {
        $('#larmss').prop("disabled", false);
        $('#larmdtr').prop("disabled", false);
        $('#larmms').prop("disabled", false);
    } else {
        $('#larmss').prop("disabled", true);
        $('#larmdtr').prop("disabled", true);
        $('#larmms').prop("disabled", true);
        $('#larmss').val("");
        $('#larmdtr').val("");
        $('#larmms').val("");
    }
});

$('#rleg').change(function () {
    if ($(this).val() == 'Y') {
        $('#rlegss').prop("disabled", false);
        $('#rlegdtr').prop("disabled", false);
        $('#rlegms').prop("disabled", false);
    } else {
        $('#rlegss').prop("disabled", true);
        $('#rlegdtr').prop("disabled", true);
        $('#rlegms').prop("disabled", true);
        $('#rlegss').val("");
        $('#rlegdtr').val("");
        $('#rlegms').val("");
    }
});

$('#lleg').change(function () {
    if ($(this).val() == 'Y') {
        $('#llegss').prop("disabled", false);
        $('#llegdtr').prop("disabled", false);
        $('#llegms').prop("disabled", false);
    } else {
        $('#llegss').prop("disabled", true);
        $('#llegdtr').prop("disabled", true);
        $('#llegms').prop("disabled", true);
        $('#llegss').val("");
        $('#llegdtr').val("");
        $('#llegms').val("");
    }
});

$('#hondisorder').change(function () {
    if ($(this).val() == 'Y') {
        $('#hondisorderspecify').prop("disabled", false);
    } else {
        $('#hondisorderspecify').prop("disabled", true);
        $('#hondisorderspecify').val("");
    }
});

$('#omptillness').change(function () {
    if ($(this).val() == 'Y') {
        $('#omptillnessplace').prop("disabled", false);
        $('#dtfrom').prop("disabled", false);
        $('#dtto').prop("disabled", false);
    } else {
        $('#omptillnessplace').prop("disabled", true);
        $('#dtfrom').prop("disabled", true);
        $('#dtto').prop("disabled", true);
        $('#omptillnessplace').val("");
        $('#dtfrom').val("");
        $('#dtto').val("");
    }
});

$('#itanimalbite').change(function () {
    if ($(this).val() == 'Y') {
        $('#itanimalbitespecify').prop("disabled", false);
    } else {
        $('#itanimalbitespecify').prop("disabled", true);
        $('#itanimalbitespecify').val("");
    }
});

$('#esample').change(function () {
    if ($(this).val() == 'Y') {
        $('#esampledate').prop("disabled", false);
    } else {
        $('#esampledate').prop("disabled", true);
        $('#esampledate').val("");
    }
});

$('#fudone').change(function () {
    if ($(this).val() == 'Y') {
        $('#fudonedate').prop("disabled", false);
    } else {
        $('#fudonedate').prop("disabled", true);
        $('#fudonedate').val("");
    }
});

$('#pedone').change(function () {
    if ($(this).val() == 'N') {
        $('#pendonereason').prop("disabled", false);
    } else {
        $('#pendonereason').prop("disabled", true);
        $('#pendonereason').val("");
    }
});

$('#rpsixtydays').change(function () {
    if ($(this).val() == 'Y') {
        $('#rpsixtydaysspecify').prop("disabled", false);
    } else {
        $('#rpsixtydaysspecify').prop("disabled", true);
        $('#rpsixtydaysspecify').val("");
    }
});

$('#poatrophy').change(function () {
    if ($(this).val() == 'Y') {
        $('#srarm').prop("disabled", false);
        $('#slarm').prop("disabled", false);
        $('#srleg').prop("disabled", false);
        $('#slleg').prop("disabled", false);
    } else {
        $('#srarm').prop("disabled", true);
        $('#slarm').prop("disabled", true);
        $('#srleg').prop("disabled", true);
        $('#slleg').prop("disabled", true);
        $('#srarm').val("");
        $('#slarm').val("");
        $('#srleg').val("");
        $('#slleg').val("");
    }
});

$('#finalclass').change(function () {
    if ($(this).val() == 'VAPP') {
        $('#vapp').prop("disabled", false);
        $('#dclassified').prop("disabled", true);
        $('#dclassified').val("");
    } else if ($(this).val() == 'DISCARD') {
        $('#vapp').prop("disabled", true);
        $('#dclassified').prop("disabled", false);
        $('#vapp').val("");
    } else {
        $('#vapp').prop("disabled", true);
        $('#dclassified').prop("disabled", true);
        $('#vapp').val("");
        $('#dclassified').val("");
    }
});


$('#labresult').change(function () {
    if ($(this).val() == 'WPV' || $(this).val() == 'SABIN' || $(this).val() == 'VDPV') {
        $('#labresultspecify').prop("disabled", false);
    } else {
        $('#labresultspecify').prop("disabled", true);
        $('#labresultspecify').val("");
    }
});
