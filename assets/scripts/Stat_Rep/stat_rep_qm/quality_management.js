var baseURL = $('#base_url').val();
function BOR(year) {
    $.ajax({
        url: baseURL + "Rep_Statistical/BOR_Dataload/" + year,
        type: "POST",
        dataType: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = data;
            $('#totalbor').val(obj['total']);
            $('#bedcapbor').val(obj['bc']);

            var totalbor_a = document.getElementById('totalbor').value;
            var bedcapbor_a = document.getElementById('bedcapbor').value;

            if ((year % 400 == 0) || ((year % 100 != 0) && (year % 4 == 0))) {
                var nodays = 366;
            } else {
                var nodays = 365;
            }

            var divisorbor = parseInt(bedcapbor_a) * nodays;
            console.log(nodays);
            if (!isNaN(divisorbor)) {
                document.getElementById('bor').value = divisorbor;
                document.getElementById('bor').innerHTML = divisorbor;
            } else {
                document.getElementById('bor').value = 0;
                document.getElementById('bor').innerHTML = 0;
            }

            var quotientbor = parseFloat((parseInt(totalbor_a) / parseInt(divisorbor)) * 100).toFixed(2);
            if (!isNaN(quotientbor)) {
                document.getElementById('bor1').value = quotientbor;
                document.getElementById('bor1').innerHTML = quotientbor;
            } else {
                document.getElementById('bor1').value = 0;
                document.getElementById('bor1').innerHTML = 0;
            }
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error fetching data!");
        }
    });
}

function QuaMa() {
    $.ajax({
        url: baseURL + "Rep_Statistical/GeneralInformation_Dataload/",
        type: "POST",
        dataType: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = data;
            $('#inter_accreno').val(obj['inter_accreno']);
            $('#inter_validfr').val('Validity Period&nbsp; : &nbsp;' + obj['inter_validfr']);
            $('#inter_validto').val('- ' + obj['inter_validto']);
            $('#accno').val(obj['accno']);
            $('#accdte').val('Validity Period&nbsp; : &nbsp;' + obj['accdte']);
            $('#accdteto').val('- ' + obj['accdteto']);
            $('#pcaho_validto').val('- ' + obj['pcaho_validto']);
            $('#pcaho_validfr').val('Validity Period&nbsp; : &nbsp;' + obj['pcaho_validfr']);
            $('#pcaho_accreno').val(obj['pcaho_accreno']);
            $('#bedcap_a').val(obj['bedcap']);
            $('#hhosmem').val(obj['hhosmem']);
            $('#hhosmem').val(obj['hhosmem']);
            $('#phic').val(obj['phic']);

            var inter_accreno_a = document.getElementById('inter_accreno').value;
            var inter_validfr_a = document.getElementById('inter_validfr').value;
            var inter_validto_a = document.getElementById('inter_validto').value;
            var accno_a = document.getElementById('accno').value;
            var accdte_a = document.getElementById('accdte').value;
            var accdteto_a = document.getElementById('accdteto').value;
            var pcaho_validto_a = document.getElementById('pcaho_validto').value;
            var pcaho_validfr_a = document.getElementById('pcaho_validfr').value;
            var pcaho_accreno_a = document.getElementById('pcaho_accreno').value;
            var bedcapacity = document.getElementById('bedcap_a').value;
            var hhosmem_a = document.getElementById('hhosmem').value;
            var phic_a = document.getElementById('phic').value;

            document.getElementById('inter_accreno').innerHTML = inter_accreno_a;
            if (obj['inter_validfr'] == 'Jan 01, 1970' || obj['inter_validfr'] == null) {
                document.getElementById('inter_validfr').innerHTML = '';
            } else {
                document.getElementById('inter_validfr').innerHTML = inter_validfr_a;
            }
            if (obj['inter_validto'] == 'Jan 01, 1970' || obj['inter_validto'] == null) {
                document.getElementById('inter_validto').innerHTML = '';
            } else {
                document.getElementById('inter_validto').innerHTML = inter_validto_a;
            }

            document.getElementById('accno').innerHTML = accno_a;
            if (obj['accdte'] == 'Jan 01, 1970' || obj['accdte'] == null) {
                document.getElementById('accdte').innerHTML = '';
            } else {
                document.getElementById('accdte').innerHTML = accdte_a;
            }
            if (obj['accdteto'] == 'Jan 01, 1970' || obj['accdteto'] == null) {
                document.getElementById('accdteto').innerHTML = '';
            } else {
                document.getElementById('accdteto').innerHTML = accdteto_a;
            }

            document.getElementById('pcaho_accreno').innerHTML = pcaho_accreno_a;
            if (obj['pcaho_validfr'] == 'Jan 01, 1970' || obj['pcaho_validfr'] == null) {
                document.getElementById('pcaho_validfr').innerHTML = '';
            } else {
                document.getElementById('pcaho_validfr').innerHTML = pcaho_validfr_a;
            }
            if (obj['pcaho_validto'] == 'Jan 01, 1970' || obj['pcaho_validto'] == null) {
                document.getElementById('pcaho_validto').innerHTML = '';
            } else {
                document.getElementById('pcaho_validto').innerHTML = pcaho_validto_a;
            }

            document.getElementById('bedcap_a').innerHTML = bedcapacity;
            document.getElementById('hhosmem').innerHTML = hhosmem_a;
            document.getElementById('phic').innerHTML = phic_a;
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error fetching data!");
        }
    });
}


function isocert(year) {
    var year = $.session.get('year');
    $.ajax({
        url: baseURL + "Rep_Statistical/ISOCert_Dataload/" + year,
        type: "POST",
        dataType: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = data.data;
            var tr = '';
            var counter = 1;
            if (obj < 1) {
                tr += '<tr align="center"><td width="100%" colspan="5">No data available.</td>';
            } else {
                $.each(obj, function (key, value) {
                    tr += '<tr><td><input type="hidden" value="' + value.isodesc + '" name ="isodesc' + counter + '[]"><span name ="isodesc' + counter + '[]" id="ft40p"/>' + counter + '. ' + value.isodesc + '</span></td>';
                    tr += '<td align = "left"><span name ="isodesc' + counter + '[]" id="ft40p"/>' + value.isocertbody + '</span></td>';
                    tr += '<td align = "center"><span name ="isodesc' + counter + '[]" id="ft40p"/>' + value.validfrom + ' - ' + value.validto + '</span></td>';
                    counter++;
                });
            }
            $("#ISOTable tbody").html(tr);
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
        }
    });
}




