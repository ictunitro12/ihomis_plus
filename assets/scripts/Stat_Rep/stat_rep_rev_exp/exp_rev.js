function outofpocket(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/outofpocket_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj == null) {

				document.getElementById('revs_direct').innerHTML = 0;
			} else {
				$('#revs_direct').val(obj['oop']);
				var rev_direct_a = document.getElementById('revs_direct').value;
				document.getElementById('revs_direct').innerHTML = rev_direct_a;

				if ($("#AddRev").val() == 'insert') {
					document.getElementById('revs_gtotal').innerHTML = rev_direct_a;
				}
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Expenses(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/Expenses_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				$("#AddIden").val("insert");
				document.getElementById('exps_wage').innerHTML = 0;
				document.getElementById('exps_benefits').innerHTML = 0;
				document.getElementById('exps_allowances').innerHTML = 0;
				document.getElementById('exps_tot_wba_ly').innerHTML = 0;
				document.getElementById('exps_med').innerHTML = 0;
				document.getElementById('exps_medsup').innerHTML = 0;
				document.getElementById('exps_util').innerHTML = 0;
				document.getElementById('exps_nonmed').innerHTML = 0;
				document.getElementById('exps_tot_mooe').innerHTML = 0;
				document.getElementById('exps_infra').innerHTML = 0;
				document.getElementById('exps_equipment').innerHTML = 0;
				document.getElementById('exps_co').innerHTML = 0;
				document.getElementById('exps_gtotal').innerHTML = 0;
			} else {
				$("#AddIden").val("update");
				$('#exps_wage').val(obj['exp_wage']);
				$('#exps_benefits').val(obj['exp_benefits']);
				$('#exps_allowances').val(obj['exp_allowances']);
				$('#exps_tot_wba_ly').val(obj['exp_tot_wba_ly']);
				$('#exps_med').val(obj['exp_med']);
				$('#exps_medsup').val(obj['exp_medsup']);
				$('#exps_util').val(obj['exp_util']);
				$('#exps_nonmed').val(obj['exp_nonmed']);
				$('#exps_tot_mooe').val(obj['exp_tot_mooe']);
				$('#exps_infra').val(obj['exp_infra']);
				$('#exps_equipment').val(obj['exp_equipment']);
				$('#exps_co').val(obj['exp_co']);
				$('#exps_gtotal').val(obj['exp_gtotal']);
				$('#code').val(obj['hfhudcode']);
				$('#exp_year').val($.session.get('year'));

				var exp_wage_a = document.getElementById('exps_wage').value;
				var exp_benefits_a = document.getElementById('exps_benefits').value;
				var exps_allowances_a = document.getElementById('exps_allowances').value;
				var exp_tot_wba_ly_a = document.getElementById('exps_tot_wba_ly').value;
				var exp_med_a = document.getElementById('exps_med').value;
				var exp_medsup_a = document.getElementById('exps_medsup').value;
				var exp_util_a = document.getElementById('exps_util').value;
				var exp_nonmed_a = document.getElementById('exps_nonmed').value;
				var exp_tot_mooe_a = document.getElementById('exps_tot_mooe').value;
				var exp_infra_a = document.getElementById('exps_infra').value;
				var exp_equipment_a = document.getElementById('exps_equipment').value;
				var exp_co_a = document.getElementById('exps_co').value;
				var exp_gtotal_a = document.getElementById('exps_gtotal').value;

				document.getElementById('exps_wage').innerHTML = exp_wage_a;
				document.getElementById('exps_benefits').innerHTML = exp_benefits_a;
				document.getElementById('exps_allowances').innerHTML = exps_allowances_a;
				document.getElementById('exps_tot_wba_ly').innerHTML = exp_tot_wba_ly_a;
				document.getElementById('exps_med').innerHTML = exp_med_a;
				document.getElementById('exps_medsup').innerHTML = exp_medsup_a;
				document.getElementById('exps_util').innerHTML = exp_util_a;
				document.getElementById('exps_nonmed').innerHTML = exp_nonmed_a;
				document.getElementById('exps_tot_mooe').innerHTML = exp_tot_mooe_a;
				document.getElementById('exps_infra').innerHTML = exp_infra_a;
				document.getElementById('exps_equipment').innerHTML = exp_equipment_a;
				document.getElementById('exps_co').innerHTML = exp_co_a;
				document.getElementById('exps_gtotal').innerHTML = exp_gtotal_a;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

$('#manageExp_button').on('click', function () {
	var wage = $('#exps_wage').val();
	var wages = parseFloat(wage.replace(/,/g, ''));
	if (isNaN(wages)) {
		var wages = 0;
	} else {
		var wages = parseFloat(wage.replace(/,/g, ''));
	}

	var benefit = $('#exps_benefits').val();
	var benefits = parseFloat(benefit.replace(/,/g, ''));
	if (isNaN(benefits)) {
		var benefits = 0;
	} else {
		var benefits = parseFloat(benefit.replace(/,/g, ''));
	}

	var allowance = $('#exps_allowances').val();
	var allowances = parseFloat(allowance.replace(/,/g, ''));
	if (isNaN(allowances)) {
		var allowances = 0;
	} else {
		var allowances = parseFloat(allowance.replace(/,/g, ''));
	}

	var wba = $('#exps_tot_wba_ly').val();
	var wbas = parseFloat(wba.replace(/,/g, ''));
	if (isNaN(wbas)) {
		var wbas = 0;
	} else {
		var wbas = parseFloat(wba.replace(/,/g, ''));
	}

	var med = $('#exps_med').val();
	var meds = parseFloat(med.replace(/,/g, ''));
	if (isNaN(meds)) {
		var meds = 0;
	} else {
		var meds = parseFloat(med.replace(/,/g, ''));
	}

	var medsup = $('#exps_medsup').val();
	var medsups = parseFloat(medsup.replace(/,/g, ''));
	if (isNaN(medsups)) {
		var medsups = 0;
	} else {
		var medsups = parseFloat(medsup.replace(/,/g, ''));
	}

	var expsUtil = $('#exps_util').val();
	var expsUtils = parseFloat(expsUtil.replace(/,/g, ''));
	if (isNaN(expsUtils)) {
		var expsUtils = 0;
	} else {
		var expsUtils = parseFloat(expsUtil.replace(/,/g, ''));
	}

	var expsNonmed = $('#exps_nonmed').val();
	var expsNonmeds = parseFloat(expsNonmed.replace(/,/g, ''));
	if (isNaN(expsNonmeds)) {
		var expsNonmeds = 0;
	} else {
		var expsNonmeds = parseFloat(expsNonmed.replace(/,/g, ''));
	}

	var expsTotmoe = $('#exps_tot_mooe').val();
	var expsTotmoes = parseFloat(expsTotmoe.replace(/,/g, ''));
	if (isNaN(expsTotmoes)) {
		var expsTotmoes = 0;
	} else {
		var expsTotmoes = parseFloat(expsTotmoe.replace(/,/g, ''));
	}

	var expsInfra = $('#exps_infra').val();
	var expsInfras = parseFloat(expsInfra.replace(/,/g, ''));
	if (isNaN(expsInfras)) {
		var expsInfras = 0;
	} else {
		var expsInfras = parseFloat(expsInfra.replace(/,/g, ''));
	}

	var expsEquip = $('#exps_equipment').val();
	var expsEquips = parseFloat(expsEquip.replace(/,/g, ''));
	if (isNaN(expsEquips)) {
		var expsEquips = 0;
	} else {
		var expsEquips = parseFloat(expsEquip.replace(/,/g, ''));
	}

	var expsCo = $('#exps_co').val();
	var expsCos = parseFloat(expsCo.replace(/,/g, ''));
	if (isNaN(expsCos)) {
		var expsCos = 0;
	} else {
		var expsCos = parseFloat(expsCo.replace(/,/g, ''));
	}

	var expsGtotal = $('#exps_gtotal').val();
	var expsGtotals = parseFloat(expsGtotal.replace(/,/g, ''));
	if (isNaN(expsGtotals)) {
		var expsGtotals = 0;
	} else {
		var expsGtotals = parseFloat(expsGtotal.replace(/,/g, ''));
	}

	$("#manageExp_modal").modal({ backdrop: 'static' }).draggable({});
	$('#exp_year').val($.session.get('year'));
	$('#hfudcode').val($('#code').val());
	$('#AddIdenExp').val($('#AddIden').val());
	$('#exps_wages').val(wages);
	$('#exps_benefitss').val(benefits);
	$('#exps_allowancess').val(allowances);
	$('#exps_tot_wba_lys').val(wbas);
	$('#exps_meds').val(meds);
	$('#exps_medsups').val(medsups);
	$('#exps_utils').val(expsUtils);
	$('#exps_nonmeds').val(expsNonmeds);
	$('#exps_tot_mooes').val(expsTotmoes);
	$('#exps_infras').val(expsInfras);
	$('#exps_equipments').val(expsEquips);
	$('#exps_cos').val(expsCos);
	$('#exps_gtotals').val(expsGtotals);
});

function sumExp() {
	var wages = document.getElementById('exps_wages').value;
	var benefits = document.getElementById('exps_benefitss').value;
	var allowancess = document.getElementById('exps_allowancess').value;

	var meds = document.getElementById('exps_meds').value;
	var medsup = document.getElementById('exps_medsups').value;
	var util = document.getElementById('exps_utils').value;
	var nonmeds = document.getElementById('exps_nonmeds').value;

	var infras = document.getElementById('exps_infras').value;
	var equipments = document.getElementById('exps_equipments').value;

	var totwba = parseFloat(wages.replace(/,/g, '')) + parseFloat(benefits.replace(/,/g, '')) + parseFloat(allowancess.replace(/,/g, ''));
	if (!isNaN(totwba)) {
		document.getElementById('exps_tot_wba_lys').value = formatPera(totwba);
	}

	var totmooe = parseFloat(meds.replace(/,/g, '')) + parseFloat(medsup.replace(/,/g, '')) + parseFloat(util.replace(/,/g, '')) + parseFloat(nonmeds.replace(/,/g, ''));
	if (!isNaN(totmooe)) {
		document.getElementById('exps_tot_mooes').value = formatPera(totmooe);
	}

	var totco = parseFloat(infras.replace(/,/g, '')) + parseFloat(equipments.replace(/,/g, ''));
	if (!isNaN(totco)) {
		document.getElementById('exps_cos').value = formatPera(totco);
	}

	var gtot = parseFloat(totwba) + parseFloat(totmooe) + parseFloat(totco);
	if (!isNaN(gtot)) {
		document.getElementById('exps_gtotals').value = formatPera(gtot);
	}
}
/* END OF EXPENSES */


function Revenues(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/Revenues_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				$("#AddRev").val('insert');
				document.getElementById('revs_doh').innerHTML = 0;
				document.getElementById('revs_donor').innerHTML = 0;
				document.getElementById('revs_priv').innerHTML = 0;
				document.getElementById('revs_phic').innerHTML = 0;

				document.getElementById('revs_reim').innerHTML = 0;
				document.getElementById('revs_lgu').innerHTML = 0;
				document.getElementById('revs_oth').innerHTML = 0;
			} else {
				$("#AddRev").val('update');
				$('#revs_doh').val(obj['rev_doh']);
				$('#revs_donor').val(obj['rev_donor']);
				$('#revs_priv').val(obj['rev_priv']);
				$('#revs_phic').val(obj['rev_phic']);
				/* $('#revs_direct').val(obj['rev_direct']); */
				$('#revs_reim').val(obj['rev_reim']);
				$('#revs_lgu').val(obj['rev_lgu']);
				$('#revs_oth').val(obj['rev_oth']);
				$('#revs_gtotal').val(obj['rev_gtotal']);
				$('#coderev').val(obj['hfhudcode']);
				$('#rev_year').val($.session.get('year'));

				var rev_doh_a = document.getElementById('revs_doh').value;
				var rev_donor_a = document.getElementById('revs_donor').value;
				var rev_priv_a = document.getElementById('revs_priv').value;
				var rev_phic_a = document.getElementById('revs_phic').value;
				/* var rev_direct_a = document.getElementById('revs_direct').value; */
				var rev_reim_a = document.getElementById('revs_reim').value;
				var rev_lgu_a = document.getElementById('revs_lgu').value;
				var rev_oth_a = document.getElementById('revs_oth').value;
				var rev_gtotal_a = document.getElementById('revs_gtotal').value;

				document.getElementById('revs_doh').innerHTML = rev_doh_a;
				document.getElementById('revs_donor').innerHTML = rev_donor_a;
				document.getElementById('revs_priv').innerHTML = rev_priv_a;
				document.getElementById('revs_phic').innerHTML = rev_phic_a;
				/* document.getElementById('revs_direct').innerHTML = rev_direct_a; */
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

$('#manageRev_button').on('click', function () {
	var dohRev = $('#revs_doh').val();
	var dohRevs = parseFloat(dohRev.replace(/,/g, ''));
	if (isNaN(dohRevs)) {
		var dohRevs = 0;
	} else {
		var dohRevs = parseFloat(dohRev.replace(/,/g, ''));
	}

	var donorRev = $('#revs_donor').val();
	var donorRevs = parseFloat(donorRev.replace(/,/g, ''));
	if (isNaN(donorRevs)) {
		var donorRevs = 0;
	} else {
		var donorRevs = parseFloat(donorRev.replace(/,/g, ''));
	}

	var privRev = $('#revs_priv').val();
	var privRevs = parseFloat(privRev.replace(/,/g, ''));
	if (isNaN(privRevs)) {
		var privRevs = 0;
	} else {
		var privRevs = parseFloat(privRev.replace(/,/g, ''));
	}

	var phicRev = $('#revs_phic').val();
	var phicRevs = parseFloat(phicRev.replace(/,/g, ''));
	if (isNaN(phicRevs)) {
		var phicRevs = 0;
	} else {
		var phicRevs = parseFloat(phicRev.replace(/,/g, ''));
	}

	var directRev = $('#revs_direct').val();
	var directRevs = parseFloat(directRev.replace(/,/g, ''));
	if (isNaN(directRevs)) {
		var directRevs = 0;
	} else {
		var directRevs = parseFloat(directRev.replace(/,/g, ''));
	}

	var reimRev = $('#revs_reim').val();
	var reimRevs = parseFloat(reimRev.replace(/,/g, ''));
	if (isNaN(reimRevs)) {
		var reimRevs = 0;
	} else {
		var reimRevs = parseFloat(reimRev.replace(/,/g, ''));
	}

	var lguRev = $('#revs_lgu').val();
	var lguRevs = parseFloat(lguRev.replace(/,/g, ''));
	if (isNaN(lguRevs)) {
		var lguRevs = 0;
	} else {
		var lguRevs = parseFloat(lguRev.replace(/,/g, ''));
	}

	var othRev = $('#revs_oth').val();
	var othRevs = parseFloat(othRev.replace(/,/g, ''));
	if (isNaN(othRevs)) {
		var othRevs = 0;
	} else {
		var othRevs = parseFloat(othRev.replace(/,/g, ''));
	}

	var gtotalRev = $('#revs_gtotal').val();
	var gtotalRevs = parseFloat((dohRev + donorRev + privRev + phicRev + directRev + reimRev + lguRev + othRev).replace(/,/g, ''));
	if (gtotalRev == 0) {
		var gtotalRevs = parseFloat((dohRev + donorRev + privRev + phicRev + directRev + reimRev + lguRev + othRev).replace(/,/g, ''));
	} else {
		var gtotalRevs = parseFloat(gtotalRev.replace(/,/g, ''));
	}

	$("#manageRev_modal").modal({ backdrop: 'static' }).draggable({});
	$('#rev_year').val($.session.get('year'));
	$('#hfudcodeRev').val($('#coderev').val());
	$('#AddIdenRev').val($('#AddRev').val());
	$('#doh_rev').val(dohRevs);
	$('#donor_rev').val(donorRevs);
	$('#priv_rev').val(privRevs);
	$('#phic_rev').val(phicRevs);
	$('#direct_rev').val(directRevs);
	$('#reim_rev').val(reimRevs);
	$('#lgu_rev').val(lguRevs);
	$('#oth_rev').val(othRevs);
	$('#tot_rev').val(gtotalRevs);
});

function sumRev() {
	var dohrev = document.getElementById('doh_rev').value;
	var donorrev = document.getElementById('donor_rev').value;
	var privrev = document.getElementById('priv_rev').value;
	var phicrev = document.getElementById('phic_rev').value;
	var directrev = document.getElementById('direct_rev').value;
	var reimrev = document.getElementById('reim_rev').value;
	var lgurev = document.getElementById('lgu_rev').value;
	var othrev = document.getElementById('oth_rev').value;

	var revtotal = parseFloat(dohrev.replace(/,/g, '')) + parseFloat(donorrev.replace(/,/g, '')) + parseFloat(privrev.replace(/,/g, '')) + parseFloat(phicrev.replace(/,/g, '')) + parseFloat(directrev.replace(/,/g, '')) + parseFloat(reimrev.replace(/,/g, '')) + parseFloat(lgurev.replace(/,/g, '')) + parseFloat(othrev.replace(/,/g, ''));
	if (!isNaN(revtotal)) {
		document.getElementById('tot_rev').value = formatPera(revtotal);
	}
}
/* END OF REVENUES */


function formatInput() {
	/* expenses */
	var wages = document.getElementById('exps_wages').value;
	money = formatPera(parseFloat(wages.replace(/,/g, '')));
	if (wages == '') {
		document.getElementById('exps_wages').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_wages').value = money;
	}

	var benefits = document.getElementById('exps_benefitss').value;
	money1 = formatPera(parseFloat(benefits.replace(/,/g, '')));
	if (benefits == '') {
		document.getElementById('exps_benefitss').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_benefitss').value = money1;
	}

	var allowances = document.getElementById('exps_allowancess').value;
	money2 = formatPera(parseFloat(allowances.replace(/,/g, '')));
	if (allowances == '') {
		document.getElementById('exps_allowancess').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_allowancess').value = money2;
	}

	var wbas = document.getElementById('exps_tot_wba_lys').value;
	money3 = formatPera(parseFloat(wbas.replace(/,/g, '')));
	if (wbas == '') {
		document.getElementById('exps_tot_wba_lys').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_tot_wba_lys').value = money3;
	}

	var meds = document.getElementById('exps_meds').value;
	money4 = formatPera(parseFloat(meds.replace(/,/g, '')));
	if (meds == '') {
		document.getElementById('exps_meds').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_meds').value = money4;
	}

	var medsups = document.getElementById('exps_medsups').value;
	money5 = formatPera(parseFloat(medsups.replace(/,/g, '')));
	if (medsups == '') {
		document.getElementById('exps_medsups').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_medsups').value = money5;
	}

	var expsUtils = document.getElementById('exps_utils').value;
	money6 = formatPera(parseFloat(expsUtils.replace(/,/g, '')));
	if (expsUtils == '') {
		document.getElementById('exps_utils').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_utils').value = money6;
	}

	var expsNonmeds = document.getElementById('exps_nonmeds').value;
	money7 = formatPera(parseFloat(expsNonmeds.replace(/,/g, '')));
	if (expsNonmeds == '') {
		document.getElementById('exps_nonmeds').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_nonmeds').value = money7;
	}

	var expsTotmoes = document.getElementById('exps_tot_mooes').value;
	money8 = formatPera(parseFloat(expsTotmoes.replace(/,/g, '')));
	if (expsTotmoes == '') {
		document.getElementById('exps_tot_mooes').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_tot_mooes').value = money8;
	}

	var expsInfras = document.getElementById('exps_infras').value;
	money9 = formatPera(parseFloat(expsInfras.replace(/,/g, '')));
	if (expsInfras == '') {
		document.getElementById('exps_infras').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_infras').value = money9;
	}

	var expsEquips = document.getElementById('exps_equipments').value;
	money10 = formatPera(parseFloat(expsEquips.replace(/,/g, '')));
	if (expsEquips == '') {
		document.getElementById('exps_equipments').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_equipments').value = money10;
	}

	var expsCos = document.getElementById('exps_cos').value;
	money11 = formatPera(parseFloat(expsCos.replace(/,/g, '')));
	if (expsCos == '') {
		document.getElementById('exps_cos').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_cos').value = money11;
	}

	var expsGtotals = document.getElementById('exps_gtotals').value;
	money12 = formatPera(parseFloat(expsGtotals.replace(/,/g, '')));
	if (expsGtotals == '') {
		document.getElementById('exps_gtotals').value = formatPera(parseInt(0));
	} else {
		document.getElementById('exps_gtotals').value = money12;
	}


	/* revenue */
	var dohRevs = document.getElementById('doh_rev').value;
	money13 = formatPera(parseFloat(dohRevs.replace(/,/g, '')));
	if (dohRevs == '') {
		document.getElementById('doh_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('doh_rev').value = money13;
	}

	var donorRevs = document.getElementById('donor_rev').value;
	money14 = formatPera(parseFloat(donorRevs.replace(/,/g, '')));
	if (donorRevs == '') {
		document.getElementById('donor_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('donor_rev').value = money14;
	}

	var privRevs = document.getElementById('priv_rev').value;
	money15 = formatPera(parseFloat(privRevs.replace(/,/g, '')));
	if (privRevs == '') {
		document.getElementById('priv_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('priv_rev').value = money15;
	}

	var phicRevs = document.getElementById('phic_rev').value;
	money16 = formatPera(parseFloat(phicRevs.replace(/,/g, '')));
	if (phicRevs == '') {
		document.getElementById('phic_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('phic_rev').value = money16;
	}

	var directRevs = document.getElementById('direct_rev').value;
	money17 = formatPera(parseFloat(directRevs.replace(/,/g, '')));
	if (directRevs == '') {
		document.getElementById('direct_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('direct_rev').value = money17;
	}

	var reimRevs = document.getElementById('reim_rev').value;
	money18 = formatPera(parseFloat(reimRevs.replace(/,/g, '')));
	if (reimRevs == '') {
		document.getElementById('reim_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('reim_rev').value = money18;
	}

	var lguRevs = document.getElementById('lgu_rev').value;
	money19 = formatPera(parseFloat(lguRevs.replace(/,/g, '')));
	if (lguRevs == '') {
		document.getElementById('lgu_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('lgu_rev').value = money19;
	}

	var othRevs = document.getElementById('oth_rev').value;
	money20 = formatPera(parseFloat(othRevs.replace(/,/g, '')));
	if (othRevs == '') {
		document.getElementById('oth_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('oth_rev').value = money20;
	}

	var gtotalRevs = document.getElementById('tot_rev').value;
	money21 = formatPera(parseFloat(gtotalRevs.replace(/,/g, '')));
	if (gtotalRevs == '') {
		document.getElementById('tot_rev').value = formatPera(parseInt(0));
	} else {
		document.getElementById('tot_rev').value = money21;
	}
}

function formatPera(num) {
	var p = num.toFixed(2).split(".");

	return p[0].split("").reverse().reduce(function (acc, num, i, orig) {
		return num + (num != "-" && i && !(i % 3) ? "," : "") + acc;
	}, "") + "." + p[1];
}

function isNumber(evt, element) {
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 48 || charCode > 57) && !(charCode == 46 || charCode == 45))
		return false;
	else {
		var len = $(element).val().length;

		/* Validation Point */
		var index = $(element).val().indexOf('.');
		if ((index > 0 && charCode == 46) || len == 0 && charCode == 46) {
			return false;
		}
		if (index > 0) {
			var CharAfterdot = (len + 1) - index;
			if (CharAfterdot > 3) {
				return false;
			}
		}

		/* Validating Negative sign */
		index = $(element).val().indexOf('-');
		if ((index > 0 && charCode == 45) || (len > 0 && charCode == 45)) {
			return false;
		}
	}
	return true;
}