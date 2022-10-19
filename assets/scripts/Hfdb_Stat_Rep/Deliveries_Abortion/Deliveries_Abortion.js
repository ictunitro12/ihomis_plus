function Deliveries_Abortion(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Deliveries_Abortion_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			//-----------------Normal-----------------//
			document.getElementById('normal_10_14').innerHTML = 0;
			document.getElementById('normal_15_19').innerHTML = 0;
			document.getElementById('normal_20_44').innerHTML = 0;
			document.getElementById('normal_45_64').innerHTML = 0;
			document.getElementById('total_normal').innerHTML = 0;

			//-----------------VBAC-----------------//
			document.getElementById('vbac_10_14').innerHTML = 0;
			document.getElementById('vbac_15_19').innerHTML = 0;
			document.getElementById('vbac_20_44').innerHTML = 0;
			document.getElementById('vbac_45_64').innerHTML = 0;
			document.getElementById('total_vbac').innerHTML = 0;

			//-----------------Caesarian-----------------//
			document.getElementById('cs_10_14').innerHTML = 0;
			document.getElementById('cs_15_19').innerHTML = 0;
			document.getElementById('cs_20_44').innerHTML = 0;
			document.getElementById('cs_45_64').innerHTML = 0;
			document.getElementById('total_cs').innerHTML = 0;

			//-----------------Breech Extraction-----------------//
			document.getElementById('breech_10_14').innerHTML = 0;
			document.getElementById('breech_15_19').innerHTML = 0;
			document.getElementById('breech_20_44').innerHTML = 0;
			document.getElementById('breech_45_64').innerHTML = 0;
			document.getElementById('total_breech').innerHTML = 0;

			//-----------------Forceps-----------------//
			document.getElementById('forceps_10_14').innerHTML = 0;
			document.getElementById('forceps_15_19').innerHTML = 0;
			document.getElementById('forceps_20_44').innerHTML = 0;
			document.getElementById('forceps_45_64').innerHTML = 0;
			document.getElementById('total_forceps').innerHTML = 0;

			//-----------------Vacuum / Ventose-----------------//
			document.getElementById('vacuum_10_14').innerHTML = 0;
			document.getElementById('vacuum_15_19').innerHTML = 0;
			document.getElementById('vacuum_20_44').innerHTML = 0;
			document.getElementById('vacuum_45_64').innerHTML = 0;
			document.getElementById('total_vacuum').innerHTML = 0;

			if (obj != null || obj > 0) {
				//-----------------Normal-----------------//
				$('#normal_10_14').val(obj['normal_10_14']);
				document.getElementById('normal_10_14').innerHTML = data.normal_10_14;

				$('#normal_15_19').val(obj['normal_15_19']);
				document.getElementById('normal_15_19').innerHTML = data.normal_15_19;

				$('#normal_20_44').val(obj['normal_20_44']);
				document.getElementById('normal_20_44').innerHTML = data.normal_20_44;

				$('#normal_45_64').val(obj['normal_45_64']);
				document.getElementById('normal_45_64').innerHTML = data.normal_45_64;

				$('#total_normal').val(obj['total_normal']);
				document.getElementById('total_normal').innerHTML = data.total_normal;

				//-----------------VBAC-----------------//
				$('#vbac_10_14').val(obj['vbac_10_14']);
				document.getElementById('vbac_10_14').innerHTML = data.vbac_10_14;

				$('#vbac_15_19').val(obj['vbac_15_19']);
				document.getElementById('vbac_15_19').innerHTML = data.vbac_15_19;

				$('#vbac_20_44').val(obj['vbac_20_44']);
				document.getElementById('vbac_20_44').innerHTML = data.vbac_20_44;

				$('#vbac_45_64').val(obj['vbac_45_64']);
				document.getElementById('vbac_45_64').innerHTML = data.vbac_45_64;

				$('#total_vbac').val(obj['total_vbac']);
				document.getElementById('total_vbac').innerHTML = data.total_vbac;

				//-----------------Caesarian-----------------//
				$('#cs_10_14').val(obj['cs_10_14']);
				document.getElementById('cs_10_14').innerHTML = data.cs_10_14;

				$('#cs_15_19').val(obj['cs_15_19']);
				document.getElementById('cs_15_19').innerHTML = data.cs_15_19;

				$('#cs_20_44').val(obj['cs_20_44']);
				document.getElementById('cs_20_44').innerHTML = data.cs_20_44;

				$('#cs_45_64').val(obj['cs_45_64']);
				document.getElementById('cs_45_64').innerHTML = data.cs_45_64;

				$('#total_cs').val(obj['total_cs']);
				document.getElementById('total_cs').innerHTML = data.total_cs;

				//-----------------Breech Extraction-----------------//
				$('#breech_10_14').val(obj['breech_10_14']);
				document.getElementById('breech_10_14').innerHTML = data.breech_10_14;

				$('#breech_15_19').val(obj['breech_15_19']);
				document.getElementById('breech_15_19').innerHTML = data.breech_15_19;

				$('#breech_20_44').val(obj['breech_20_44']);
				document.getElementById('breech_20_44').innerHTML = data.breech_20_44;

				$('#breech_45_64').val(obj['breech_45_64']);
				document.getElementById('breech_45_64').innerHTML = data.breech_45_64;

				$('#total_breech').val(obj['total_breech']);
				document.getElementById('total_breech').innerHTML = data.total_breech;

				//-----------------Forceps-----------------//
				$('#forceps_10_14').val(obj['forceps_10_14']);
				document.getElementById('forceps_10_14').innerHTML = data.forceps_10_14;

				$('#forceps_15_19').val(obj['forceps_15_19']);
				document.getElementById('forceps_15_19').innerHTML = data.forceps_15_19;

				$('#forceps_20_44').val(obj['forceps_20_44']);
				document.getElementById('forceps_20_44').innerHTML = data.forceps_20_44;

				$('#forceps_45_64').val(obj['forceps_45_64']);
				document.getElementById('forceps_45_64').innerHTML = data.forceps_45_64;

				$('#total_forceps').val(obj['total_forceps']);
				document.getElementById('total_forceps').innerHTML = data.total_forceps;

				//-----------------Vacuum / Ventose-----------------//
				$('#vacuum_10_14').val(obj['vacuum_10_14']);
				document.getElementById('vacuum_10_14').innerHTML = data.vacuum_10_14;

				$('#vacuum_15_19').val(obj['vacuum_15_19']);
				document.getElementById('vacuum_15_19').innerHTML = data.vacuum_15_19;

				$('#vacuum_20_44').val(obj['vacuum_20_44']);
				document.getElementById('vacuum_20_44').innerHTML = data.vacuum_20_44;

				$('#vacuum_45_64').val(obj['']);
				document.getElementById('vacuum_45_64').innerHTML = data.vacuum_45_64;

				$('#total_vacuum').val(obj['total_vacuum']);
				document.getElementById('total_vacuum').innerHTML = data.total_vacuum;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Abort(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Abortion_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;

			//-----------------Non-Septic-----------------//
			document.getElementById('nonsep_complete_sponta_a').innerHTML = 0;
			document.getElementById('nonsep_complete_ind').innerHTML = 0;
			document.getElementById('nonsep_immi_sponta_a').innerHTML = 0;
			document.getElementById('nonsep_immi_ind').innerHTML = 0;
			document.getElementById('nonsep_inevi_sponta_a').innerHTML = 0;
			document.getElementById('nonsep_inevi_ind').innerHTML = 0;
			document.getElementById('nonsep_incomp_sponta_a').innerHTML = 0;
			document.getElementById('nonsep_incomp_ind').innerHTML = 0;
			document.getElementById('tot_nonsep_complete').innerHTML = 0;
			document.getElementById('tot_nonsep_imminent').innerHTML = 0;
			document.getElementById('tot_nonsep_inevitable').innerHTML = 0;
			document.getElementById('tot_nonsep_incomplete').innerHTML = 0;

			//-----------------Septic-----------------//
			document.getElementById('sep_complete_sponta_a').innerHTML = 0;
			document.getElementById('sep_complete_ind').innerHTML = 0;
			document.getElementById('sep_immi_sponta_a').innerHTML = 0;
			document.getElementById('sep_immi_ind').innerHTML = 0;
			document.getElementById('sep_inevi_sponta_a').innerHTML = 0;
			document.getElementById('sep_inevi_ind').innerHTML = 0;
			document.getElementById('sep_incomp_sponta_a').innerHTML = 0;
			document.getElementById('sep_incomp_ind').innerHTML = 0;
			document.getElementById('tot_sep_complete').innerHTML = 0;
			document.getElementById('tot_sep_imminent').innerHTML = 0;
			document.getElementById('tot_sep_inevitable').innerHTML = 0;
			document.getElementById('tot_sep_incomplete').innerHTML = 0;
			document.getElementById('subtotal_sponta').innerHTML = 0;
			document.getElementById('subtotal_induced').innerHTML = 0;
			document.getElementById('subtotal_total').innerHTML = 0;

			//-----------------Threatened-----------------//
			document.getElementById('threat_abort_sponta_a').innerHTML = 0;
			document.getElementById('threat_abort_indu').innerHTML = 0;
			document.getElementById('tot_threat_abort').innerHTML = 0;
			document.getElementById('blig_abort_sponta_a').innerHTML = 0;
			document.getElementById('blig_abort_indu').innerHTML = 0;
			document.getElementById('tot_blig_abort').innerHTML = 0;

			//-----------------Missed Abortion-----------------//
			document.getElementById('missed_abort_sponta_a').innerHTML = 0;
			document.getElementById('missed_abort_indu').innerHTML = 0;
			document.getElementById('tot_missed_abort').innerHTML = 0;

			if (obj != null || obj > 0) {
				//-----------------Non-Septic-----------------//
				$('#nonsep_complete_sponta_a').val(obj['nonsep_complete_sponta']);
				document.getElementById('nonsep_complete_sponta_a').innerHTML = data.nonsep_complete_sponta;

				$('#nonsep_complete_ind').val(obj['nonsep_complete_ind']);
				document.getElementById('nonsep_complete_ind').innerHTML = data.nonsep_complete_ind;

				$('#nonsep_immi_sponta_a').val(obj['nonsep_immi_sponta']);
				document.getElementById('nonsep_immi_sponta_a').innerHTML = data.nonsep_immi_sponta;

				$('#nonsep_immi_ind').val(obj['nonsep_immi_ind']);
				document.getElementById('nonsep_immi_ind').innerHTML = data.nonsep_immi_ind;

				$('#nonsep_inevi_sponta_a').val(obj['nonsep_inevi_sponta']);
				document.getElementById('nonsep_inevi_sponta_a').innerHTML = data.nonsep_inevi_sponta;

				$('#nonsep_inevi_ind').val(obj['nonsep_inevi_ind']);
				document.getElementById('nonsep_inevi_ind').innerHTML = data.nonsep_inevi_ind;

				$('#nonsep_incomp_sponta_a').val(obj['nonsep_incomp_sponta']);
				document.getElementById('nonsep_incomp_sponta_a').innerHTML = data.nonsep_incomp_sponta;

				$('#nonsep_incomp_ind').val(obj['nonsep_incomp_ind']);
				document.getElementById('nonsep_incomp_ind').innerHTML = data.nonsep_incomp_ind;

				$('#tot_nonsep_complete').val(obj['nonsep_complete_sponta']);
				document.getElementById('tot_nonsep_complete').innerHTML = data.nonsep_complete_sponta;

				$('#tot_nonsep_imminent').val(obj['nonsep_immi_sponta']);
				document.getElementById('tot_nonsep_imminent').innerHTML = data.nonsep_immi_sponta;

				$('#tot_nonsep_inevitable').val(obj['nonsep_inevi_sponta']);
				document.getElementById('tot_nonsep_inevitable').innerHTML = data.nonsep_inevi_sponta;

				$('#tot_nonsep_incomplete').val(obj['nonsep_incomp_sponta']);
				document.getElementById('tot_nonsep_incomplete').innerHTML = data.nonsep_incomp_sponta;

				//-----------------Septic-----------------//
				$('#sep_complete_sponta_a').val(obj['sep_complete_sponta']);
				document.getElementById('sep_complete_sponta_a').innerHTML = data.sep_complete_sponta;

				$('#sep_complete_ind').val(obj['sep_complete_ind']);
				document.getElementById('sep_complete_ind').innerHTML = data.sep_complete_ind;

				$('#sep_immi_sponta_a').val(obj['sep_immi_sponta']);
				document.getElementById('sep_immi_sponta_a').innerHTML = data.sep_immi_sponta;

				$('#sep_immi_ind').val(obj['sep_immi_ind']);
				document.getElementById('sep_immi_ind').innerHTML = data.sep_immi_ind;

				$('#sep_inevi_sponta_a').val(obj['sep_inevi_sponta']);
				document.getElementById('sep_inevi_sponta_a').innerHTML = data.sep_inevi_sponta;

				$('#sep_inevi_ind').val(obj['sep_inevi_ind']);
				document.getElementById('sep_inevi_ind').innerHTML = data.sep_inevi_ind;

				$('#sep_incomp_sponta_a').val(obj['sep_incomp_sponta']);
				document.getElementById('sep_incomp_sponta_a').innerHTML = data.sep_incomp_sponta;

				$('#sep_incomp_ind').val(obj['sep_incomp_ind']);
				document.getElementById('sep_incomp_ind').innerHTML = data.sep_incomp_ind;

				$('#tot_sep_complete').val(obj['sep_complete_sponta']);
				document.getElementById('tot_sep_complete').innerHTML = data.sep_complete_sponta;

				$('#tot_sep_imminent').val(obj['sep_immi_sponta']);
				document.getElementById('tot_sep_imminent').innerHTML = data.sep_immi_sponta;

				$('#tot_sep_inevitable').val(obj['sep_inevi_sponta']);
				document.getElementById('tot_sep_inevitable').innerHTML = data.sep_inevi_sponta;

				$('#tot_sep_incomplete').val(obj['sep_incomp_sponta']);
				document.getElementById('tot_sep_incomplete').innerHTML = data.sep_incomp_sponta;

				document.getElementById('subtotal_sponta').innerHTML = parseInt(data.nonsep_complete_sponta) + parseInt(data.nonsep_immi_sponta) + parseInt(data.nonsep_inevi_sponta) + parseInt(data.nonsep_incomp_sponta) + parseInt(data.sep_complete_sponta) + parseInt(data.sep_immi_sponta) + parseInt(data.sep_inevi_sponta) + parseInt(data.sep_incomp_sponta);

				document.getElementById('subtotal_induced').innerHTML = parseInt(data.nonsep_complete_ind) + parseInt(data.nonsep_immi_ind) + parseInt(data.nonsep_inevi_ind) + parseInt(data.nonsep_incomp_ind) + parseInt(data.sep_complete_ind) + parseInt(data.sep_immi_ind) + parseInt(data.sep_inevi_ind) + parseInt(data.sep_incomp_ind);

				document.getElementById('subtotal_total').innerHTML = parseInt(data.nonsep_complete_sponta) + parseInt(data.nonsep_immi_sponta) + parseInt(data.nonsep_inevi_sponta) + parseInt(data.nonsep_incomp_sponta) + parseInt(data.sep_complete_sponta) + parseInt(data.sep_immi_sponta) + parseInt(data.sep_inevi_sponta) + parseInt(data.sep_incomp_sponta);

				//-----------------Threatened-----------------//
				$('#threat_abort_sponta_a').val(obj['threat_abort_sponta']);
				document.getElementById('threat_abort_sponta_a').innerHTML = data.threat_abort_sponta;

				$('#threat_abort_indu').val(obj['threat_abort_indu']);
				document.getElementById('threat_abort_indu').innerHTML = data.threat_abort_indu;

				$('#tot_threat_abort').val(obj['threat_abort_sponta']);
				document.getElementById('tot_threat_abort').innerHTML = data.threat_abort_sponta;

				//-----------------Blighted Ovum-----------------//
				$('#blig_abort_sponta_a').val(obj['blig_abort_sponta']);
				document.getElementById('blig_abort_sponta_a').innerHTML = data.blig_abort_sponta;

				$('#blig_abort_indu').val(obj['blig_abort_indu']);
				document.getElementById('blig_abort_indu').innerHTML = data.blig_abort_indu;

				$('#tot_blig_abort').val(obj['blig_abort_sponta']);
				document.getElementById('tot_blig_abort').innerHTML = data.blig_abort_sponta;

				//-----------------Missed Abortion-----------------//
				$('#missed_abort_sponta_a').val(obj['missed_abort_sponta']);
				document.getElementById('missed_abort_sponta_a').innerHTML = data.missed_abort_sponta;

				$('#missed_abort_indu').val(obj['missed_abort_indu']);
				document.getElementById('missed_abort_indu').innerHTML = data.missed_abort_indu;

				$('#tot_missed_abort').val(obj['missed_abort_sponta']);
				document.getElementById('tot_missed_abort').innerHTML = data.missed_abort_sponta;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

