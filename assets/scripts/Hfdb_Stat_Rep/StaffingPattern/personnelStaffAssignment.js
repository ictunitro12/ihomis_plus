var baseURL = $('#base_url').val();

$('#managePersonnelStaff_button').on('click', function () {
	var consulPartTime = $('#consulPartTime').val();
	var consulFullTime = $('#consulFullTime').val();
	var Res = $('#Res').val();
	var Ancillary = $('#Ancillary').val();
	var Dental = $('#Dental').val();
	var Head = $('#Head').val();
	var Supervisor = $('#Supervisor').val();
	var Staff = $('#Staff').val();
	var mwAide = $('#mwAide').val();
    var Hepo = $('#Hepo').val();
	var Admin = $('#Admin').val();
	var total = $('#total').val();

    $('#consulPartTimes').val(consulPartTime);
    $('#consulFullTimes').val(consulFullTime);
    $('#Ress').val(Res);
    $('#Ancillarys').val(Ancillary);
    $('#Dentals').val(Dental);
    $('#Heads').val(Head);
    $('#Supervisors').val(Supervisor);
    $('#Staffs').val(Staff);
    $('#mwAides').val(mwAide);
    $('#Hepos').val(Hepo);
    $('#Admins').val(Admin);
    $('#totals').val(total);
});

function sumPerssonelStaff() {
	var consulPartTime = document.getElementById('consulPartTimes').value;
	var consulFullTime = document.getElementById('consulFullTimes').value;
	var Res = document.getElementById('Ress').value;
	var Ancillary = document.getElementById('Ancillarys').value;
	var Dental = document.getElementById('Dentals').value;
	var Head = document.getElementById('Heads').value;
	var Supervisor = document.getElementById('Supervisors').value;
	var Staff = document.getElementById('Staffs').value;
    var mwAide = document.getElementById('mwAides').value;
	var Hepo = document.getElementById('Hepos').value;
	var Admin = document.getElementById('Admins').value;

	var total = parseInt(consulPartTime) + parseInt(consulFullTime) + parseInt(Res) + parseInt(Ancillary) + parseInt(Dental) + parseInt(Head) + parseInt(Supervisor) + parseInt(Staff) + parseInt(mwAide) + parseInt(Hepo) + parseInt(Admin);
	if (!isNaN(total)) {
		document.getElementById('totals').value = total;
	}
}

function personnelStaff(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/PersonnelStaffAssignment/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				$("#AddIden").val('insert');
				document.getElementById('consulPartTime').innerHTML = 0;
				document.getElementById('consulFullTime').innerHTML = 0;
				document.getElementById('Res').innerHTML = 0;
				document.getElementById('Ancillary').innerHTML = 0;
				document.getElementById('Dental').innerHTML = 0;
				document.getElementById('Head').innerHTML = 0;
				document.getElementById('Supervisor').innerHTML = 0;
				document.getElementById('Staff').innerHTML = 0;
				document.getElementById('mwAide').innerHTML = 0;
				document.getElementById('Hepo').innerHTML = 0;
				document.getElementById('Admin').innerHTML = 0;
				document.getElementById('total').innerHTML = 0;
			} else {
				$("#AddIden").val('update');
				$('#consulPartTime').val(obj['parttime']);
				$('#consulFullTime').val(obj['fulltime']);
				$('#Res').val(obj['res']);
				$('#Ancillary').val(obj['ancillary']);
				$('#Dental').val(obj['dental']);
				$('#Head').val(obj['head']);
				$('#Supervisor').val(obj['supervisor']);
				$('#Staff').val(obj['staff']);
				$('#mwAide').val(obj['mwaide']);
				$('#Hepo').val(obj['hepo']);
				$('#Admin').val(obj['admin']);
				$('#total').val(total);

				var rev_doh_a = document.getElementById('revs_doh').value;
				var rev_donor_a = document.getElementById('revs_donor').value;
				var rev_priv_a = document.getElementById('revs_priv').value;
				var rev_phic_a = document.getElementById('revs_phic').value;
				var rev_direct_a = document.getElementById('revs_direct').value;
				var rev_reim_a = document.getElementById('revs_reim').value;
				var rev_lgu_a = document.getElementById('revs_lgu').value;
				var rev_oth_a = document.getElementById('revs_oth').value;
				var rev_gtotal_a = document.getElementById('revs_gtotal').value;

				document.getElementById('revs_doh').innerHTML = rev_doh_a;
				document.getElementById('revs_donor').innerHTML = rev_donor_a;
				document.getElementById('revs_priv').innerHTML = rev_priv_a;
				document.getElementById('revs_phic').innerHTML = rev_phic_a;
				document.getElementById('revs_direct').innerHTML = rev_direct_a;
				document.getElementById('revs_reim').innerHTML = rev_reim_a;
				document.getElementById('revs_lgu').innerHTML = rev_lgu_a;
				document.getElementById('revs_oth').innerHTML = rev_oth_a;
				document.getElementById('revs_gtotal').innerHTML = rev_gtotal_a;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}