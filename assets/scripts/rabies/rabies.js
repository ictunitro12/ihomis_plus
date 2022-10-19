var Module = $('#module').val();

/* function PatientLogList(from, to) */
function PatientLogList() {
    var data = new Object();
    data.id = "RabiesTable";
    /* data.link = baseURL + "Rabies/RabiesList/" + from + "/" + to; */
    data.link = baseURL + "Rabies/RabiesList";
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

$("#RabiesTable").on("click", ".ModalRabies", function () {
    var base_url = $('#base_url').val();
    var data = $(this).data();
    $('#ModalRabies').modal({ backdrop: 'static' }).draggable({});
    var enccode = atob(data['enccode']);
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    $("#code").val(enccode);
    $('#RabiesPDF').html('<embed src="' + base_url + "Rabies/RabiesForm/" + enccode + '" frameborder="2" width="100%" height="800px" id="RabiesPDF">');
});

function checkRabies(enccode, hpercode) {
    enccode = encodeURIComponent(encodeURIComponent(enccode));
    hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    $.ajax({
        type: "POST",
        url: "../Rabies/checkRabies/" + enccode + "/" + hpercode,
        data: "JSON",
        success: function (data) {
            if (data == 1) {
                toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>', 'Warning');
                window.location.reload();
            }
            else {
                initRabies(enccode, hpercode);
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

function initRabies(enccode, hpercode) {
    uppercase();
    getPatientData(enccode, hpercode);
    CityInj();

    $('#enccode').val(enccode);
    $('#formIden').val('insert');
    $('#drutype').val('Government Hospital');
    $("#search").attr("disabled", false);
}

function initRabiesEdit(hpercode, enccode) {
    getPatientData(enccode, hpercode);
    getRabiesData(enccode);
    PatientCurrentAddress(enccode);

    $('#enccode').val(enccode);
    $('#drutype').val('Government Hospital');
    $("#search").attr("disabled", true);
}

$("#RabiesTable").on("click", ".ModalDeleteRabies", function () {
    var data = $(this).data();

    $('#DeleteRabies').modal({ backdrop: 'static' }).draggable({});
    $("#formIdentification").val('delete');

    var enccode = atob(data['enccode']);
    $("#deletecode").val(enccode);
});

function PatientCurrentAddress(enccode) {
    $.ajax({
        type: "POST",
        url: baseURL + "Rabies/PatientCurrentAddress/" + enccode,
        data: "JSON",
        async: false,
        success: function (data, status) {
            var obj = $.parseJSON(data);

            if (obj['pat_perm_address_reg'] == null || obj['pat_perm_address_prov'] == null || obj['pat_perm_address_city'] == null) {
                CityInj();
            } else {
                $('#info_street2').val(obj['pat_address_street_name2']);
                var str = obj['pat_perm_address_reg'].substring(0, 2);
                setRegionInj(str);
                setRegionInj(obj['pat_perm_address_prov']);
                setCityInj(obj['pat_perm_address_city']);
                setBrgyInj(obj['pat_perm_address_brgy'])
            }
        },
    });
}

function getPatientData(enccode, hpercode) {
    $.ajax({
        url: baseURL + "Rabies/getPatientData/" + enccode + "/" + hpercode,
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

            var ddied = obj['pexpireddate'];
            var ddieds = ((ddied == "1970-01-01 00:00:00") || (ddied == null) || (ddied == "")) ? "" : setTimeLocale(ddied);
            $("#ddied").val(ddieds);

            $('#outcomec').val(obj['dispcode']);
            $('#outcome').val(obj['disposition']);

            if ((obj['dispcode'] == 'EXPIR') || (obj['dispcode'] == 'DIEDD')) {
                $('#dd').prop("hidden", false);
            } else {
                $('#dd').prop("hidden", true);
            }
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
        }
    });
}

function getRabiesData(enccode) {
    $.ajax({
        url: baseURL + "Rabies/getRabiesData/" + enccode,
        type: "POST",
        data: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = $.parseJSON(data);

            $('#formIden').val('update');

            var dooi = obj['date_on_set'];
            var doois = ((dooi == "1970-01-01 00:00:00") || (dooi == null)) ? "" : setTimeLocale(dooi);
            $("#dooi").val(doois);

            var dor = obj['date_report'];
            var dors = ((dor == "1970-01-01 00:00:00") || (dor == null)) ? "" : setTimeLocale(dor);
            $("#dor").val(dors);
            $('#noreporter').val(obj['name_reporter']);
            $('#reportercno').val(obj['contactno_reporter']);

            var doi = obj['date_investigation'];
            var dois = ((doi == "1970-01-01 00:00:00") || (doi == null)) ? "" : setTimeLocale(doi);
            $("#doi").val(dois);
            $('#noinvestigator').val(obj['name_investigator']);
            $('#investigatorcno').val(obj['contactno_investigator']);

            $("#toexposure option[value='" + obj['type_exposure'] + "']").attr("selected", "selected");
            $('#coeas').val(obj['affected_site']);
            $('#toexposureother').val(obj['type_exposure_others']);
            var toexpo = obj['type_exposure'];
            if ((toexpo == '0' && toexpo !== null) || toexpo == '1') {
                $('#toexposureother').removeAttr("enabled");
                $('#coeas').removeAttr("disabled");
                $('#toeas').prop("hidden", false);
                $('#toeos').prop("hidden", true);
            } else if (toexpo == '5') {
                $('#toexposureother').removeAttr("disabled");
                $('#coeas').removeAttr("enabled");
                $('#toeas').prop("hidden", true);
                $('#toeos').prop("hidden", false);
            } else {
                $('#toexposureother').removeAttr("enabled");
                $('#coeas').removeAttr("enabled");
                $('#toeas').prop("hidden", true);
                $('#toeos').prop("hidden", true);
            }

            var doe = obj['date_exposure'];
            var does = ((doe == "1970-01-01 00:00:00") || (doe == null)) ? "" : setTimeLocale(doe);
            $("#doe").val(does);

            $('#poexposure').val(obj['place_exposure']);

            $("#coexposure option[value='" + obj['category_exposure'] + "']").attr("selected", "selected");

            $("#toanimal option[value='" + obj['type_animal'] + "']").attr("selected", "selected");
            $('#toanimalother').val(obj['type_animal_others']);
            var toa = obj['type_animal'];
            if (toa == 'O') {
                $('#toanimalother').removeAttr("disabled");
                $('#toanimalother').prop("hidden", false);
            } else {
                $('#toanimalother').removeAttr("enabled");
                $('#toanimalother').prop("hidden", true);
            }

            $("#lddone option[value='" + obj['labdiagnosdone'] + "']").attr("selected", "selected");
            $('#lddonespecify').val(obj['diagnosresult']);
            var dr = obj['labdiagnosdone'];
            if (dr == 'Y') {
                $('#lddonespecify').removeAttr("disabled");
                $('#lddonespecify').prop("hidden", false);
            } else {
                $('#lddonespecify').removeAttr("enabled");
                $('#lddonespecify').prop("hidden", true);
            }

            $("#animalstat option[value='" + obj['animal_status'] + "']").attr("selected", "selected");
            $('#animalstatother').val(obj['animal_status_other']);
            var asother = obj['animal_status'];
            if (asother == 'O') {
                $('#animalstatother').removeAttr("disabled");
                $('#animalstatother').prop("hidden", false);
            } else {
                $('#animalstatother').removeAttr("enabled");
                $('#animalstatother').prop("hidden", true);
            }

            $("#avhistory option[value='" + obj['animal_vacc_hist'] + "']").attr("selected", "selected");
            $("#woundclean option[value='" + obj['would_clean'] + "']").attr("selected", "selected");
            $("#pgrig option[value='" + obj['given_RIG'] + "']").attr("selected", "selected");
            $("#pgrv option[value='" + obj['given_rabies_vacc'] + "']").attr("selected", "selected");

            var dvs = obj['date_vaccine_started'];
            var dvss = ((dvs == "1970-01-01 00:00:00") || (dvs == null)) ? "" : setTimeLocale(dvs);
            $("#dvs").val(dvss);
            $('#bnovaccine').val(obj['brand_vaccine']);
            $("#roa option[value='" + obj['route_admin'] + "']").attr("selected", "selected");
            $("#pecompleted option[value='" + obj['post_exposure'] + "']").attr("selected", "selected");

            $("#fclassification option[value='" + obj['final_classification'] + "']").attr("selected", "selected");
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

$('#toexposure').change(function () {
    if ($(this).val() == '5') {
        $('#toexposureother').prop("disabled", false);
    } else {
        $('#toexposureother').prop("disabled", true);
        $('#toexposureother').val("");
    }
});

$('#toexposure').change(function () {
    if ($(this).val() == '0' || $(this).val() == '1') {
        $('#coeas').prop("disabled", false);
    } else {
        $('#coeas').prop("disabled", true);
        $('#coeas').val("");
    }
});

$('#toexposure').change(function () {
    if ($(this).val() == '0' || $(this).val() == '1') {
        $('#toeas').prop("hidden", false);
        $('#toeos').prop("hidden", true);
    } else if ($(this).val() == '5') {
        $('#toeas').prop("hidden", true);
        $('#toeos').prop("hidden", false);
    } else {
        $('#toeas').prop("hidden", true);
        $('#toeos').prop("hidden", true);
    }
});

$('#toanimal').change(function () {
    if ($(this).val() == 'O') {
        $('#toanimalother').prop("disabled", false);
        $('#toanimalother').prop("hidden", false);
        toanimalother
    } else {
        $('#toanimalother').prop("disabled", true);
        $('#toanimalother').val("");
        $('#toanimalother').prop("hidden", true);
    }
});

$('#lddone').change(function () {
    if ($(this).val() == 'Y') {
        $('#lddonespecify').prop("disabled", false);
        $('#lddonespecify').prop("hidden", false);
    } else {
        $('#lddonespecify').prop("disabled", true);
        $('#lddonespecify').val("");
        $('#lddonespecify').prop("hidden", true);
    }
});

$('#animalstat').change(function () {
    if ($(this).val() == 'O') {
        $('#animalstatother').prop("disabled", false);
        $('#animalstatother').prop("hidden", false);
    } else {
        $('#animalstatother').prop("disabled", true);
        $('#animalstatother').val("");
        $('#animalstatother').prop("hidden", true);
    }
});