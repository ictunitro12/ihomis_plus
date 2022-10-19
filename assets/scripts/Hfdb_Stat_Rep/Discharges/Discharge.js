function Inpatient(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Discharges_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				//Inpatient Care
				document.getElementById('totnuminpat').innerHTML = 0;
				document.getElementById('totnewborn').innerHTML = 0;
				document.getElementById('totdisalive').innerHTML = 0;
				document.getElementById('totnuminpatserv').innerHTML = 0;
				document.getElementById('totnumfac').innerHTML = 0;
				document.getElementById('totnumanthfac').innerHTML = 0;

				//Medicine
				document.getElementById('total_medic').innerHTML = 0;
				document.getElementById('los_medical').innerHTML = 0;
				document.getElementById('no_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_medic_nphic').innerHTML = 0;
				document.getElementById('no_phic_paytotal').innerHTML = 0;
				document.getElementById('no_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_medic_phic').innerHTML = 0;
				document.getElementById('medic_recov').innerHTML = 0;
				document.getElementById('medic_t').innerHTML = 0;
				document.getElementById('medic_h').innerHTML = 0;
				document.getElementById('medic_a').innerHTML = 0;
				document.getElementById('medic_u').innerHTML = 0;
				document.getElementById('medic_a_d').innerHTML = 0;
				document.getElementById('medic_b_d').innerHTML = 0;
				document.getElementById('total_1').innerHTML = 0;
				document.getElementById('total_medics').innerHTML = 0;

				//Obstetrics
				document.getElementById('total_obstet').innerHTML = 0;
				document.getElementById('los_obs').innerHTML = 0;
				document.getElementById('no_obstet_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_obstet_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_obstet_nphic').innerHTML = 0;
				document.getElementById('no_obstet_phic_paytotal').innerHTML = 0;
				document.getElementById('no_obstet_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_obstet_phic').innerHTML = 0;
				document.getElementById('obstet_recov').innerHTML = 0;
				document.getElementById('obstet_t').innerHTML = 0;
				document.getElementById('obstet_h').innerHTML = 0;
				document.getElementById('obstet_a').innerHTML = 0;
				document.getElementById('obstet_u').innerHTML = 0;
				document.getElementById('obstet_a_d').innerHTML = 0;
				document.getElementById('obstet_b_d').innerHTML = 0;
				document.getElementById('total_2').innerHTML = 0;
				document.getElementById('total_obstets').innerHTML = 0;

				//Gynecology
				document.getElementById('total_gyne').innerHTML = 0;
				document.getElementById('los_gyne').innerHTML = 0;
				document.getElementById('no_gyne_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_gyne_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_gyne_nphic').innerHTML = 0;
				document.getElementById('no_gyne_phic_paytotal').innerHTML = 0;
				document.getElementById('no_gyne_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_gyne_phic').innerHTML = 0;
				document.getElementById('gyne_recov').innerHTML = 0;
				document.getElementById('gyne_t').innerHTML = 0;
				document.getElementById('gyne_h').innerHTML = 0;
				document.getElementById('gyne_a').innerHTML = 0;
				document.getElementById('gyne_u').innerHTML = 0;
				document.getElementById('gyne_a_d').innerHTML = 0;
				document.getElementById('gyne_b_d').innerHTML = 0;
				document.getElementById('total_3').innerHTML = 0;
				document.getElementById('total_gynes').innerHTML = 0;

				//Pediatrics
				document.getElementById('total_pediatric').innerHTML = 0;
				document.getElementById('los_pediatrics').innerHTML = 0;
				document.getElementById('no_pediatrics_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_pediatrics_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_pediatrics_nphic').innerHTML = 0;
				document.getElementById('no_pediatrics_phic_paytotal').innerHTML = 0;
				document.getElementById('no_pediatrics_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_pediatrics_phic').innerHTML = 0;
				document.getElementById('pediatrics_recov').innerHTML = 0;
				document.getElementById('pediatrics_t').innerHTML = 0;
				document.getElementById('pediatrics_h').innerHTML = 0;
				document.getElementById('pediatrics_a').innerHTML = 0;
				document.getElementById('pediatrics_u').innerHTML = 0;
				document.getElementById('pediatrics_a_d').innerHTML = 0;
				document.getElementById('pediatrics_b_d').innerHTML = 0;
				document.getElementById('total_4').innerHTML = 0;
				document.getElementById('total_pediatrics').innerHTML = 0;

				//Surgery_Pedia
				document.getElementById('total_surpedia').innerHTML = 0;
				document.getElementById('los_surpedia').innerHTML = 0;
				document.getElementById('no_surpedia_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_surpedia_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_surpedia_nphic').innerHTML = 0;
				document.getElementById('no_surpedia_phic_paytotal').innerHTML = 0;
				document.getElementById('no_surpedia_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_surpedia_phic').innerHTML = 0;
				document.getElementById('surpedia_recov').innerHTML = 0;
				document.getElementById('surpeds_t').innerHTML = 0;
				document.getElementById('surpeds_h').innerHTML = 0;
				document.getElementById('surpeds_a').innerHTML = 0;
				document.getElementById('surpeds_u').innerHTML = 0;
				document.getElementById('surpeds_a_d').innerHTML = 0;
				document.getElementById('surpeds_b_d').innerHTML = 0;
				document.getElementById('total_5').innerHTML = 0;
				document.getElementById('total_surpedias').innerHTML = 0;

				//Surgery_Adult
				document.getElementById('total_suradus').innerHTML = 0;
				document.getElementById('los_suradus').innerHTML = 0;
				document.getElementById('no_suradus_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_suradus_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_suradus_nphic').innerHTML = 0;
				document.getElementById('no_suradus_phic_paytotal').innerHTML = 0;
				document.getElementById('no_suradus_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_suradus_phic').innerHTML = 0;
				document.getElementById('suradus_recov').innerHTML = 0;
				document.getElementById('suradus_t').innerHTML = 0;
				document.getElementById('suradus_h').innerHTML = 0;
				document.getElementById('suradus_a').innerHTML = 0;
				document.getElementById('suradus_u').innerHTML = 0;
				document.getElementById('suradus_b_d').innerHTML = 0;
				document.getElementById('suradus_a_d').innerHTML = 0;
				document.getElementById('total_6').innerHTML = 0;
				document.getElementById('total_suraduss').innerHTML = 0;

				//Total
				document.getElementById('totnuminpatient').innerHTML = 0;
				document.getElementById('totnuminpatservs').innerHTML = 0;
				document.getElementById('total_np_pays').innerHTML = 0;
				document.getElementById('total_np_servs').innerHTML = 0;
				document.getElementById('total_np_totals').innerHTML = 0;
				document.getElementById('total_p_pays').innerHTML = 0;
				document.getElementById('total_p_servs').innerHTML = 0;
				document.getElementById('total_p_totals').innerHTML = 0;
				document.getElementById('total_ris').innerHTML = 0;
				document.getElementById('totals_t').innerHTML = 0;
				document.getElementById('totals_h').innerHTML = 0;
				document.getElementById('totals_a').innerHTML = 0;
				document.getElementById('totals_u').innerHTML = 0;
				document.getElementById('total_lessthan48_a').innerHTML = 0;
				document.getElementById('total_graterthan48_a').innerHTML = 0;
				document.getElementById('total_death_a').innerHTML = 0;
				document.getElementById('total_discharges_a').innerHTML = 0;

				//Newborn
				document.getElementById('total_nb_no_of_pat_a').innerHTML = 0;
				document.getElementById('total_nb_length_of_stay_a').innerHTML = 0;
				document.getElementById('tot_nb_np_pay').innerHTML = 0;
				document.getElementById('tot_nb_np_ser').innerHTML = 0;
				document.getElementById('tot_nb_total_np').innerHTML = 0;
				document.getElementById('tot_nb_phic_pay').innerHTML = 0;
				document.getElementById('tot_nb_phic_serv').innerHTML = 0;
				document.getElementById('tot_nb_total_phic').innerHTML = 0;
				document.getElementById('tot_nb_ri').innerHTML = 0;
				document.getElementById('tot_nb_t').innerHTML = 0;
				document.getElementById('tot_nb_h').innerHTML = 0;
				document.getElementById('tot_nb_a').innerHTML = 0;
				document.getElementById('tot_nb_u').innerHTML = 0;
				document.getElementById('tot_nb_lessthan').innerHTML = 0;
				document.getElementById('tot_nb_graterthan').innerHTML = 0;
				document.getElementById('tot_nb_death').innerHTML = 0;
				document.getElementById('tot_nb_no_of_pat_a').innerHTML = 0;

				//Pathologic
				document.getElementById('tot_patho').innerHTML = 0;
				document.getElementById('los_pathology').innerHTML = 0;
				document.getElementById('no_pathology_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_pathology_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_pathology_nphic').innerHTML = 0;
				document.getElementById('no_pathology_phic_paytotal').innerHTML = 0;
				document.getElementById('no_pathology_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_pathology_phic').innerHTML = 0;
				document.getElementById('pathology_recov').innerHTML = 0;
				document.getElementById('pathology_t').innerHTML = 0;
				document.getElementById('pathology_h').innerHTML = 0;
				document.getElementById('pathology_a').innerHTML = 0;
				document.getElementById('pathology_u').innerHTML = 0;
				document.getElementById('pathology_a_d').innerHTML = 0;
				document.getElementById('pathology_b_d').innerHTML = 0;
				document.getElementById('total_7').innerHTML = 0;
				document.getElementById('total_pathology').innerHTML = 0;

				//Non-Pathologic
				document.getElementById('tot_unpatho').innerHTML = 0;
				document.getElementById('los_unpathology').innerHTML = 0;
				document.getElementById('no_unpathology_nphic_paytotal').innerHTML = 0;
				document.getElementById('no_unpathology_nphic_servitotal').innerHTML = 0;
				document.getElementById('tot_unpathology_nphic').innerHTML = 0;
				document.getElementById('no_unpathology_phic_paytotal').innerHTML = 0;
				document.getElementById('no_unpathology_phic_servitotal').innerHTML = 0;
				document.getElementById('tot_unpathology_phic').innerHTML = 0;
				document.getElementById('unpathology_recov').innerHTML = 0;
				document.getElementById('unpathology_t').innerHTML = 0;
				document.getElementById('unpathology_h').innerHTML = 0;
				document.getElementById('unpathology_a').innerHTML = 0;
				document.getElementById('unpathology_u').innerHTML = 0;
				document.getElementById('unpathology_a_d').innerHTML = 0;
				document.getElementById('unpathology_b_d').innerHTML = 0;
				document.getElementById('total_8').innerHTML = 0;
				document.getElementById('total_unpathology').innerHTML = 0;

			} else {
				$('#medic_t').val(obj['med_t']);
				$('#medic_h').val(obj['med_h']);
				$('#medic_a').val(obj['med_a']);
				$('#medic_u').val(obj['med_u']);
				$('#no_medic').val(obj['no_med']);
				$('#obstet_t').val(obj['obs_t']);
				$('#obstet_h').val(obj['obs_h']);
				$('#obstet_a').val(obj['obs_a']);
				$('#obstet_u').val(obj['obs_u']);
				$('#no_obstet').val(obj['no_obs']);
				$('#gyne_t').val(obj['gyn_t']);
				$('#gyne_h').val(obj['gyn_h']);
				$('#gyne_a').val(obj['gyn_a']);
				$('#gyne_u').val(obj['gyn_u']);
				$('#no_gyne').val(obj['no_gyn']);
				$('#pediatrics_t').val(obj['pedia_t']);
				$('#pediatrics_h').val(obj['pedia_h']);
				$('#pediatrics_a').val(obj['pedia_a']);
				$('#pediatrics_u').val(obj['pedia_u']);
				$('#no_pediatrics').val(obj['no_pedia']);
				$('#surpeds_t').val(obj['surped_t']);
				$('#surpeds_h').val(obj['surped_h']);
				$('#surpeds_a').val(obj['surped_a']);
				$('#surpeds_u').val(obj['surped_u']);
				$('#no_surpeds').val(obj['no_surped']);
				$('#suradus_t').val(obj['suradu_t']);
				$('#suradus_h').val(obj['suradu_h']);
				$('#suradus_a').val(obj['suradu_a']);
				$('#suradus_u').val(obj['suradu_u']);
				$('#no_suradus').val(obj['no_suradu']);
				$('#pathology_t').val(obj['patho_t']);
				$('#pathology_h').val(obj['patho_h']);
				$('#pathology_a').val(obj['patho_a']);
				$('#pathology_u').val(obj['patho_u']);
				$('#no_pathology').val(obj['no_patho']);
				$('#unpathology_t').val(obj['unpatho_t']);
				$('#unpathology_h').val(obj['unpatho_h']);
				$('#unpathology_a').val(obj['unpatho_a']);
				$('#unpathology_u').val(obj['unpatho_u']);
				$('#no_unpathology').val(obj['no_unpatho']);
				$('#medic_a_d').val(obj['med_a_d']);
				$('#medic_b_d').val(obj['med_b_d']);
				$('#obstet_a_d').val(obj['obs_a_d']);
				$('#obstet_b_d').val(obj['obs_b_d']);
				$('#gyne_a_d').val(obj['gyn_a_d']);
				$('#gyne_b_d').val(obj['gyn_b_d']);
				$('#pediatrics_a_d').val(obj['pedia_a_d']);
				$('#pediatrics_b_d').val(obj['pedia_b_d']);
				$('#surpeds_a_d').val(obj['surped_a_d']);
				$('#surpeds_b_d').val(obj['surped_b_d']);
				$('#suradus_a_d').val(obj['suradu_a_d']);
				$('#suradus_b_d').val(obj['suradu_b_d']);
				$('#los_medic').val(obj['los_med']);
				$('#los_obstet').val(obj['los_obs']);
				$('#los_gyne').val(obj['los_gyn']);
				$('#los_pediatrics').val(obj['los_pedia']);
				$('#los_surpeds').val(obj['los_surped']);
				$('#los_suradus').val(obj['los_suradu']);
				$('#totnumfac').val(obj['total_trans_to']);
				$('#totnumanthfac').val(obj['total_trans_from']);
				$('#no_nphic_paytotal').val(obj['no_med_nphic_paytotal']);
				$('#no_nphic_servitotal').val(obj['no_med_nphic_servitotal']);
				$('#no_phic_paytotal').val(obj['no_med_phic_paytotal']);
				$('#no_phic_paytotal1').val(obj['no_med_phic_paytotal1']);
				$('#no_phic_paytotal2').val(obj['no_med_phic_paytotal2']);

				$('#no_phic_servitotal').val(obj['no_med_phic_servitotal']);
				$('#no_phic_servitotal1').val(obj['no_med_phic_servitotal1']);
				$('#no_phic_servitotal2').val(obj['no_med_phic_servitotal2']);
				$('#medic_recov').val(obj['med_recov']);
				$('#no_obstet_nphic_paytotal').val(obj['no_obs_nphic_paytotal']);
				$('#no_obstet_nphic_servitotal').val(obj['no_obs_nphic_servitotal']);
				$('#no_obstet_phic_paytotal').val(obj['no_obs_phic_paytotal']);
				$('#no_obstet_phic_paytotal1').val(obj['no_obs_phic_paytotal1']);
				$('#no_obstet_phic_paytotal2').val(obj['no_obs_phic_paytotal2']);
				$('#no_obstet_phic_servitotal').val(obj['no_obs_phic_servitotal']);
				$('#no_obstet_phic_servitotal1').val(obj['no_obs_phic_servitotal1']);
				$('#no_obstet_phic_servitotal2').val(obj['no_obs_phic_servitotal2']);
				$('#obstet_recov').val(obj['obs_recov']);
				$('#no_gyne_nphic_paytotal').val(obj['no_gyn_nphic_paytotal']);
				$('#no_gyne_nphic_servitotal').val(obj['no_gyn_nphic_servitotal']);
				$('#no_gyne_phic_paytotal').val(obj['no_gyn_phic_paytotal']);
				$('#no_gyne_phic_paytotal1').val(obj['no_gyn_phic_paytotal1']);
				$('#no_gyne_phic_paytotal2').val(obj['no_gyn_phic_paytotal2']);
				$('#no_gyne_phic_servitotal').val(obj['no_gyn_phic_servitotal']);
				$('#no_gyne_phic_servitotal1').val(obj['no_gyn_phic_servitotal1']);
				$('#no_gyne_phic_servitotal2').val(obj['no_gyn_phic_servitotal2']);
				$('#gyne_recov').val(obj['gyn_recov']);
				$('#no_pediatrics_nphic_paytotal').val(obj['no_pedia_nphic_paytotal']);
				$('#no_pediatrics_nphic_servitotal').val(obj['no_pedia_nphic_servitotal']);
				$('#no_pediatrics_phic_paytotal').val(obj['no_pedia_phic_paytotal']);
				$('#no_pediatrics_phic_paytotal1').val(obj['no_pedia_phic_paytotal1']);
				$('#no_pediatrics_phic_paytotal2').val(obj['no_pedia_phic_paytotal2']);
				$('#no_pediatrics_phic_servitotal').val(obj['no_pedia_phic_servitotal']);
				$('#no_pediatrics_phic_servitotal1').val(obj['no_pedia_phic_servitotal1']);
				$('#no_pediatrics_phic_servitotal2').val(obj['no_pedia_phic_servitotal2']);
				$('#pediatrics_recov').val(obj['pedia_recov']);
				$('#no_surpedia_nphic_paytotal').val(obj['no_surped_nphic_paytotal']);
				$('#no_surpedia_nphic_servitotal').val(obj['no_surped_nphic_servitotal']);
				$('#no_surpedia_phic_paytotal').val(obj['no_surped_phic_paytotal']);
				$('#no_surpedia_phic_paytotal1').val(obj['no_surped_phic_paytotal1']);
				$('#no_surpedia_phic_paytotal2').val(obj['no_surped_phic_paytotal2']);
				$('#no_surpedia_phic_servitotal').val(obj['no_surped_phic_servitotal']);
				$('#no_surpedia_phic_servitotal1').val(obj['no_surped_phic_servitotal1']);
				$('#no_surpedia_phic_servitotal2').val(obj['no_surped_phic_servitotal2']);
				$('#surpedia_recov').val(obj['surped_recov']);
				$('#no_suradus_nphic_paytotal').val(obj['no_suradu_nphic_paytotal']);
				$('#no_suradus_nphic_servitotal').val(obj['no_suradu_nphic_servitotal']);
				$('#no_suradus_phic_paytotal').val(obj['no_suradu_phic_paytotal']);
				$('#no_suradus_phic_paytotal1').val(obj['no_suradu_phic_paytotal1']);
				$('#no_suradus_phic_paytotal2').val(obj['no_suradu_phic_paytotal2']);
				$('#no_suradus_phic_servitotal').val(obj['no_suradu_phic_servitotal']);
				$('#no_suradus_phic_servitotal1').val(obj['no_suradu_phic_servitotal1']);
				$('#no_suradus_phic_servitotal2').val(obj['no_suradu_phic_servitotal2']);
				$('#suradus_recov').val(obj['suradu_recov']);
				$('#los_pathology').val(obj['los_patho']);
				$('#los_unpathology').val(obj['los_unpatho']);
				$('#no_pathology_nphic_paytotal').val(obj['no_patho_nphic_paytotal']);
				$('#no_unpathology_nphic_paytotal').val(obj['no_unpatho_nphic_paytotal']);
				$('#no_pathology_nphic_servitotal').val(obj['no_patho_nphic_servitotal']);
				$('#no_unpathology_nphic_servitotal').val(obj['no_unpatho_nphic_servitotal']);
				$('#no_pathology_phic_paytotal').val(obj['no_patho_phic_paytotal']);
				$('#no_pathology_phic_paytotal1').val(obj['no_patho_phic_paytotal1']);
				$('#no_pathology_phic_paytotal2').val(obj['no_patho_phic_paytotal2']);
				$('#no_unpathology_phic_paytotal').val(obj['no_unpatho_phic_paytotal']);
				$('#no_unpathology_phic_paytotal1').val(obj['no_unpatho_phic_paytotal1']);
				$('#no_unpathology_phic_paytotal2').val(obj['no_unpatho_phic_paytotal2']);
				$('#no_pathology_phic_servitotal').val(obj['no_patho_phic_servitotal']);
				$('#no_pathology_phic_servitotal1').val(obj['no_patho_phic_servitotal1']);
				$('#no_pathology_phic_servitotal2').val(obj['no_patho_phic_servitotal2']);
				$('#no_unpathology_phic_servitotal').val(obj['no_unpatho_phic_servitotal']);
				$('#no_unpathology_phic_servitotal1').val(obj['no_unpatho_phic_servitotal1']);
				$('#no_unpathology_phic_servitotal2').val(obj['no_unpatho_phic_servitotal2']);
				$('#pathology_recov').val(obj['patho_recov']);
				$('#unpathology_recov').val(obj['unpatho_recov']);
				$('#pathology_a_d').val(obj['patho_a_d']);
				$('#unpathology_a_d').val(obj['unpatho_a_d']);
				$('#pathology_b_d').val(obj['patho_b_d']);
				$('#unpathology_b_d').val(obj['unpatho_a_d']);

				var pathology_b_d_a = document.getElementById('pathology_b_d').value;
				var unpathology_b_d_a = document.getElementById('unpathology_b_d').value;
				var pathology_a_d_a = document.getElementById('pathology_a_d').value;
				var unpathology_a_d_a = document.getElementById('unpathology_a_d').value;
				var patho_recov_a = document.getElementById('pathology_recov').value;
				var unpatho_recov_a = document.getElementById('unpathology_recov').value;
				var no_patho_phic_servitotal_a = document.getElementById('no_pathology_phic_servitotal').value;
				var no_patho_phic_servitotal_a1 = document.getElementById('no_pathology_phic_servitotal1').value;
				var no_patho_phic_servitotal_a2 = document.getElementById('no_pathology_phic_servitotal2').value;
				var no_unpatho_phic_servitotal_a = document.getElementById('no_unpathology_phic_servitotal').value;
				var no_unpatho_phic_servitotal_a1 = document.getElementById('no_unpathology_phic_servitotal1').value;
				var no_unpatho_phic_servitotal_a2 = document.getElementById('no_unpathology_phic_servitotal2').value;
				var no_patho_phic_paytotal_a = document.getElementById('no_pathology_phic_paytotal').value;
				var no_patho_phic_paytotal_a1 = document.getElementById('no_pathology_phic_paytotal1').value;
				var no_patho_phic_paytotal_a2 = document.getElementById('no_pathology_phic_paytotal2').value;
				var no_unpatho_phic_paytotal_a = document.getElementById('no_unpathology_phic_paytotal').value;
				var no_unpatho_phic_paytotal_a1 = document.getElementById('no_unpathology_phic_paytotal1').value;
				var no_unpatho_phic_paytotal_a2 = document.getElementById('no_unpathology_phic_paytotal2').value;
				var no_patho_nphic_servitotal_a = document.getElementById('no_pathology_nphic_servitotal').value;
				var no_unpatho_nphic_servitotal_a = document.getElementById('no_unpathology_nphic_servitotal').value;
				var no_patho_nphic_paytotal_a = document.getElementById('no_pathology_nphic_paytotal').value;
				var no_unpatho_nphic_paytotal_a = document.getElementById('no_unpathology_nphic_paytotal').value;
				var los_patho_a = document.getElementById('los_pathology').value;
				var los_unpatho_a = document.getElementById('los_unpathology').value;
				var suradu_recov_a = document.getElementById('suradus_recov').value;
				var no_suradu_phic_servitotal_a = document.getElementById('no_suradus_phic_servitotal').value;
				var no_suradu_phic_servitotal_a1 = document.getElementById('no_suradus_phic_servitotal1').value;
				var no_suradu_phic_servitotal_a2 = document.getElementById('no_suradus_phic_servitotal2').value;
				var no_suradu_phic_paytotal_a = document.getElementById('no_suradus_phic_paytotal').value;
				var no_suradu_phic_paytotal_a1 = document.getElementById('no_suradus_phic_paytotal1').value;
				var no_suradu_phic_paytotal_a2 = document.getElementById('no_suradus_phic_paytotal2').value;
				var no_suradu_nphic_servitotal_a = document.getElementById('no_suradus_nphic_servitotal').value;
				var no_suradu_nphic_paytotal_a = document.getElementById('no_suradus_nphic_paytotal').value;
				var surped_recov_a = document.getElementById('surpedia_recov').value;
				var no_surped_phic_servitotal_a = document.getElementById('no_surpedia_phic_servitotal').value;
				var no_surped_phic_servitotal_a1 = document.getElementById('no_surpedia_phic_servitotal1').value;
				var no_surped_phic_servitotal_a2 = document.getElementById('no_surpedia_phic_servitotal2').value;
				var no_surped_phic_paytotal_a = document.getElementById('no_surpedia_phic_paytotal').value;
				var no_surped_phic_paytotal_a1 = document.getElementById('no_surpedia_phic_paytotal1').value;
				var no_surped_phic_paytotal_a2 = document.getElementById('no_surpedia_phic_paytotal2').value;
				var no_surped_nphic_servitotal_a = document.getElementById('no_surpedia_nphic_servitotal').value;
				var no_surped_nphic_paytotal_a = document.getElementById('no_surpedia_nphic_paytotal').value;
				var pedia_recov_a = document.getElementById('pediatrics_recov').value;
				var no_pedia_phic_servitotal_a = document.getElementById('no_pediatrics_phic_servitotal').value;
				var no_pedia_phic_servitotal_a1 = document.getElementById('no_pediatrics_phic_servitotal1').value;
				var no_pedia_phic_servitotal_a2 = document.getElementById('no_pediatrics_phic_servitotal2').value;
				var no_pedia_phic_paytotal_a = document.getElementById('no_pediatrics_phic_paytotal').value;
				var no_pedia_phic_paytotal_a1 = document.getElementById('no_pediatrics_phic_paytotal1').value;
				var no_pedia_phic_paytotal_a2 = document.getElementById('no_pediatrics_phic_paytotal2').value;
				var no_pedia_nphic_servitotal_a = document.getElementById('no_pediatrics_nphic_servitotal').value;
				var no_pedia_nphic_paytotal_a = document.getElementById('no_pediatrics_nphic_paytotal').value;
				var gyn_recov_a = document.getElementById('gyne_recov').value;
				var no_gyn_phic_servitotal_a = document.getElementById('no_gyne_phic_servitotal').value;
				var no_gyn_phic_servitotal_a1 = document.getElementById('no_gyne_phic_servitotal1').value;
				var no_gyn_phic_servitotal_a2 = document.getElementById('no_gyne_phic_servitotal2').value;
				var no_gyn_phic_paytotal_a = document.getElementById('no_gyne_phic_paytotal').value;
				var no_gyn_phic_paytotal_a1 = document.getElementById('no_gyne_phic_paytotal1').value;
				var no_gyn_phic_paytotal_a2 = document.getElementById('no_gyne_phic_paytotal2').value;
				var no_gyn_nphic_servitotal_a = document.getElementById('no_gyne_nphic_servitotal').value;
				var no_gyn_nphic_paytotal_a = document.getElementById('no_gyne_nphic_paytotal').value;
				var obs_recov_a = document.getElementById('obstet_recov').value;
				var no_obs_phic_servitotal_a = document.getElementById('no_obstet_phic_servitotal').value;
				var no_obs_phic_servitotal_a1 = document.getElementById('no_obstet_phic_servitotal1').value;
				var no_obs_phic_servitotal_a2 = document.getElementById('no_obstet_phic_servitotal2').value;
				var no_obs_phic_paytotal_a = document.getElementById('no_obstet_phic_paytotal').value;
				var no_obs_phic_paytotal_a1 = document.getElementById('no_obstet_phic_paytotal1').value;
				var no_obs_phic_paytotal_a2 = document.getElementById('no_obstet_phic_paytotal2').value;
				var no_obs_nphic_servitotal_a = document.getElementById('no_obstet_nphic_servitotal').value;
				var no_obs_nphic_paytotal_a = document.getElementById('no_obstet_nphic_paytotal').value;
				var med_recov_a = document.getElementById('medic_recov').value;
				var no_med_phic_servitotal_a = document.getElementById('no_phic_servitotal').value;
				var no_med_phic_servitotal_a1 = document.getElementById('no_phic_servitotal1').value;
				var no_med_phic_servitotal_a2 = document.getElementById('no_phic_servitotal2').value;
				var no_med_phic_paytotal_a = document.getElementById('no_phic_paytotal').value;
				var no_med_phic_paytotal_a1 = document.getElementById('no_phic_paytotal1').value;
				var no_med_phic_paytotal_a2 = document.getElementById('no_phic_paytotal2').value;
				var no_med_nphic_servitotal_a = document.getElementById('no_nphic_servitotal').value;
				var no_med_nphic_paytotal_a = document.getElementById('no_nphic_paytotal').value;
				var med_t_a = document.getElementById('medic_t').value;
				var med_h_a = document.getElementById('medic_h').value;
				var med_a_a = document.getElementById('medic_a').value;
				var med_u_a = document.getElementById('medic_u').value;
				var no_med_a = document.getElementById('no_medic').value;
				var obs_t_a = document.getElementById('obstet_t').value;
				var obs_h_a = document.getElementById('obstet_h').value;
				var obs_a_a = document.getElementById('obstet_a').value;
				var obs_u_a = document.getElementById('obstet_u').value;
				var no_obs_a = document.getElementById('no_obstet').value;
				var gyn_t_a = document.getElementById('gyne_t').value;
				var gyn_h_a = document.getElementById('gyne_h').value;
				var gyn_a_a = document.getElementById('gyne_a').value;
				var gyn_u_a = document.getElementById('gyne_u').value;
				var no_gyn_a = document.getElementById('no_gyne').value;
				var pedia_t_a = document.getElementById('pediatrics_t').value;
				var pedia_h_a = document.getElementById('pediatrics_h').value;
				var pedia_a_a = document.getElementById('pediatrics_a').value;
				var pedia_u_a = document.getElementById('pediatrics_u').value;
				var no_pedia_a = document.getElementById('no_pediatrics').value;
				var surped_t_a = document.getElementById('surpeds_t').value;
				var surped_h_a = document.getElementById('surpeds_h').value;
				var surped_a_a = document.getElementById('surpeds_a').value;
				var surped_u_a = document.getElementById('surpeds_u').value;
				var no_surped_a = document.getElementById('no_surpeds').value;
				var suradu_t_a = document.getElementById('suradus_t').value;
				var suradu_h_a = document.getElementById('suradus_h').value;
				var suradu_a_a = document.getElementById('suradus_a').value;
				var suradu_u_a = document.getElementById('suradus_u').value;
				var no_suradu_a = document.getElementById('no_suradus').value;
				var patho_t_a = document.getElementById('pathology_t').value;
				var patho_h_a = document.getElementById('pathology_h').value;
				var patho_a_a = document.getElementById('pathology_a').value;
				var patho_u_a = document.getElementById('pathology_u').value;
				var no_patho_a = document.getElementById('no_pathology').value;
				var unpatho_t_a = document.getElementById('unpathology_t').value;
				var unpatho_h_a = document.getElementById('unpathology_h').value;
				var unpatho_a_a = document.getElementById('unpathology_a').value;
				var unpatho_u_a = document.getElementById('unpathology_u').value;
				var no_unpatho_a = document.getElementById('no_unpathology').value;
				var med_a_d_a = document.getElementById('medic_a_d').value;
				var med_b_d_a = document.getElementById('medic_b_d').value;
				var obs_a_d_a = document.getElementById('obstet_a_d').value;
				var obs_b_d_a = document.getElementById('obstet_b_d').value;
				var gyn_a_d_a = document.getElementById('gyne_a_d').value;
				var gyn_b_d_a = document.getElementById('gyne_b_d').value;
				var pedia_a_d_a = document.getElementById('pediatrics_a_d').value;
				var pedia_b_d_a = document.getElementById('pediatrics_b_d').value;
				var surped_a_d_a = document.getElementById('surpeds_a_d').value;
				var surped_b_d_a = document.getElementById('surpeds_b_d').value;
				var suradu_a_d_a = document.getElementById('suradus_a_d').value;
				var suradu_b_d_a = document.getElementById('suradus_b_d').value;
				var los_med_a = document.getElementById('los_medic').value;
				var los_obs_a = document.getElementById('los_obstet').value;
				var los_gyn_a = document.getElementById('los_gyne').value;
				var los_pedia_a = document.getElementById('los_pediatrics').value;
				var los_surped_a = document.getElementById('los_surpeds').value;
				var los_suradu_a = document.getElementById('los_suradus').value;
				var total_trans_to_a = document.getElementById('totnumfac').value;
				var total_trans_from_a = document.getElementById('totnumanthfac').value;
				var total_pedia = parseInt(no_pedia_a);
				var med_disp = parseInt(med_t_a) + parseInt(med_h_a) + parseInt(med_a_a);
				var total_med = parseInt(no_med_a);
				var total_meds = parseInt(no_med_a);
				var obs_disp = parseInt(obs_t_a) + parseInt(obs_h_a) + parseInt(obs_a_a);
				var total_obs = parseInt(no_obs_a);
				var total_obst = parseInt(no_obs_a);
				var gyn_disp = parseInt(gyn_t_a) + parseInt(gyn_h_a) + parseInt(gyn_a_a);
				var total_gyn = parseInt(no_gyn_a);
				var pedia_disp = parseInt(pedia_t_a) + parseInt(pedia_h_a) + parseInt(pedia_a_a);
				/*var total_pedia = parseInt(no_pedia_a);*/
				var surped_disp = parseInt(surped_t_a) + parseInt(surped_h_a) + parseInt(surped_a_a);
				var total_surped = parseInt(no_surped_a);
				var suradu_disp = parseInt(suradu_t_a) + parseInt(suradu_h_a) + parseInt(suradu_a_a);
				var total_suradu = parseInt(no_suradu_a);
				var total_no_of_pat = parseInt(total_med) + parseInt(total_obs) + parseInt(total_gyn) + parseInt(total_pedia) + parseInt(total_surped) + parseInt(total_suradu);
				if (!isNaN(total_no_of_pat)) {
					document.getElementById('totnuminpat').value = total_no_of_pat;
				}
				var patho_disp = parseInt(patho_t_a) + parseInt(patho_h_a) + parseInt(patho_a_a);
				var total_patho = parseInt(patho_disp) + parseInt(no_patho_a);
				var unpatho_disp = parseInt(unpatho_t_a) + parseInt(unpatho_h_a) + parseInt(unpatho_a_a);
				var total_unpatho = parseInt(unpatho_disp) + parseInt(no_unpatho_a);
				var total_nb_no_of_pat = parseInt(total_patho) + parseInt(total_unpatho);
				if (!isNaN(total_nb_no_of_pat)) {
					document.getElementById('totnewborn').value = total_nb_no_of_pat;
				}
				var tot_1 = parseInt(med_a_d_a) + parseInt(med_b_d_a);
				var tot_2 = parseInt(obs_a_d_a) + parseInt(obs_b_d_a);
				var tot_3 = parseInt(gyn_a_d_a) + parseInt(gyn_b_d_a);
				var tot_4 = parseInt(pedia_a_d_a) + parseInt(pedia_b_d_a);
				var tot_5 = parseInt(surped_a_d_a) + parseInt(surped_b_d_a);
				var tot_6 = parseInt(suradu_a_d_a) + parseInt(suradu_b_d_a);
				var tot_7 = parseInt(pathology_a_d_a) + parseInt(pathology_b_d_a);
				var tot_8 = parseInt(unpathology_a_d_a) + parseInt(unpathology_b_d_a);
				var total_death = parseInt(tot_1) + parseInt(tot_2) + parseInt(tot_3) + parseInt(tot_4) + parseInt(tot_5) + parseInt(tot_6);
				var totaldischarges = parseInt(total_no_of_pat) - parseInt(total_death);
				if (!isNaN(totaldischarges)) {
					document.getElementById('totdisalive').value = totaldischarges;
				}
				var total_length_of_stay = parseInt(los_med_a) + parseInt(los_obs_a) + parseInt(los_gyn_a) + parseInt(los_pedia_a) + parseInt(los_surped_a) + parseInt(los_suradu_a);
				if (!isNaN(total_length_of_stay)) {
					document.getElementById('totnuminpatserv').value = total_length_of_stay;
				}
				var tot_med_nphic = parseInt(no_med_nphic_servitotal_a) + parseInt(no_med_nphic_paytotal_a);
				if (!isNaN(tot_med_nphic)) {
					document.getElementById('tot_medic_nphic').value = tot_med_nphic;
				}
				var tot_med_phic = parseInt(no_med_phic_servitotal_a) + parseInt(no_med_phic_paytotal_a);
				if (!isNaN(tot_med_phic)) {
					document.getElementById('tot_medic_phic').value = tot_med_phic;
				}
				var tot_obs_nphic = parseInt(no_obs_nphic_servitotal_a) + parseInt(no_obs_nphic_paytotal_a);
				if (!isNaN(tot_obs_nphic)) {
					document.getElementById('tot_obstet_nphic').value = tot_obs_nphic;
				}
				var tot_obs_phic = parseInt(no_obs_phic_servitotal_a) + parseInt(no_obs_phic_paytotal_a);
				if (!isNaN(tot_obs_phic)) {
					document.getElementById('tot_obstet_phic').value = tot_obs_phic;
				}
				var tot_gyn_nphic = parseInt(no_gyn_nphic_servitotal_a) + parseInt(no_gyn_nphic_paytotal_a);
				if (!isNaN(tot_gyn_nphic)) {
					document.getElementById('tot_gyne_nphic').value = tot_gyn_nphic;
				}
				var tot_gyn_phic = parseInt(no_gyn_phic_servitotal_a) + parseInt(no_gyn_phic_paytotal_a);
				if (!isNaN(tot_gyn_phic)) {
					document.getElementById('tot_gyne_phic').value = tot_gyn_phic;
				}
				var tot_pedia_nphic = parseInt(no_pedia_nphic_servitotal_a) + parseInt(no_pedia_nphic_paytotal_a);
				if (!isNaN(tot_pedia_nphic)) {
					document.getElementById('tot_pediatrics_nphic').value = tot_pedia_nphic;
				}
				var tot_pedia_phic = parseInt(no_pedia_phic_servitotal_a) + parseInt(no_pedia_phic_paytotal_a);
				if (!isNaN(tot_pedia_phic)) {
					document.getElementById('tot_pediatrics_phic').value = tot_pedia_phic;
				}
				var tot_surped_nphic = parseInt(no_surped_nphic_servitotal_a) + parseInt(no_surped_nphic_paytotal_a);
				if (!isNaN(tot_surped_nphic)) {
					document.getElementById('tot_surpedia_nphic').value = tot_surped_nphic;
				}
				var tot_surped_phic = parseInt(no_surped_phic_servitotal_a) + parseInt(no_surped_phic_paytotal_a);
				if (!isNaN(tot_surped_phic)) {
					document.getElementById('tot_surpedia_phic').value = tot_surped_phic;
				}
				var tot_suradu_nphic = parseInt(no_suradu_nphic_servitotal_a) + parseInt(no_suradu_nphic_paytotal_a);
				if (!isNaN(tot_suradu_nphic)) {
					document.getElementById('tot_suradus_nphic').value = tot_suradu_nphic;
				}
				var tot_suradu_phic = parseInt(no_suradu_phic_servitotal_a) + parseInt(no_suradu_phic_paytotal_a);
				if (!isNaN(tot_suradu_phic)) {
					document.getElementById('tot_suradus_phic').value = tot_suradu_phic;
				}
				var total_np_pay = parseInt(no_med_nphic_paytotal_a) + parseInt(no_obs_nphic_paytotal_a) + parseInt(no_gyn_nphic_paytotal_a) + parseInt(no_pedia_nphic_paytotal_a) + parseInt(no_surped_nphic_paytotal_a) + parseInt(no_suradu_nphic_paytotal_a);
				if (!isNaN(total_np_pay)) {
					document.getElementById('total_np_pays').value = total_np_pay;
				}
				var total_np_serv = parseInt(no_med_nphic_servitotal_a) + parseInt(no_obs_nphic_servitotal_a) + parseInt(no_gyn_nphic_servitotal_a) + parseInt(no_pedia_nphic_servitotal_a) + parseInt(no_surped_nphic_servitotal_a) + parseInt(no_suradu_nphic_servitotal_a);
				if (!isNaN(total_np_serv)) {
					document.getElementById('total_np_servs').value = total_np_serv;
				}
				var total_np_total = parseInt(tot_med_nphic) + parseInt(tot_obs_nphic) + parseInt(tot_gyn_nphic) + parseInt(tot_pedia_nphic) + parseInt(tot_surped_nphic) + parseInt(tot_suradu_nphic);
				if (!isNaN(total_np_total)) {
					document.getElementById('total_np_totals').value = total_np_total;
				}
				var total_p_pay = parseInt(no_med_phic_paytotal_a) + parseInt(no_obs_phic_paytotal_a) + parseInt(no_gyn_phic_paytotal_a) + parseInt(no_pedia_phic_paytotal_a) + parseInt(no_surped_phic_paytotal_a) + parseInt(no_suradu_phic_paytotal_a);
				if (!isNaN(total_p_pay)) {
					document.getElementById('total_np_pays').value = total_p_pay;
				}
				var total_p_pay1 = parseInt(no_med_phic_paytotal_a1) + parseInt(no_obs_phic_paytotal_a1) + parseInt(no_gyn_phic_paytotal_a1) + parseInt(no_pedia_phic_paytotal_a1) + parseInt(no_surped_phic_paytotal_a1) + parseInt(no_suradu_phic_paytotal_a1);
				if (!isNaN(total_p_pay1)) {
					document.getElementById('total_p_pays1').value = total_p_pay1;
				}
				var total_p_pay2 = parseInt(no_med_phic_paytotal_a2) + parseInt(no_obs_phic_paytotal_a2) + parseInt(no_gyn_phic_paytotal_a2) + parseInt(no_pedia_phic_paytotal_a2) + parseInt(no_surped_phic_paytotal_a2) + parseInt(no_suradu_phic_paytotal_a2);
				if (!isNaN(total_p_pay2)) {
					document.getElementById('total_p_pays2').value = total_p_pay2;
				}
				var total_p_serv = parseInt(no_med_phic_servitotal_a) + parseInt(no_obs_phic_servitotal_a) + parseInt(no_gyn_phic_servitotal_a) + parseInt(no_pedia_phic_servitotal_a) + parseInt(no_surped_phic_servitotal_a) + parseInt(no_suradu_phic_servitotal_a);
				if (!isNaN(total_p_serv)) {
					document.getElementById('total_p_servs').value = total_p_serv;
				}
				var total_p_serv1 = parseInt(no_med_phic_servitotal_a1) + parseInt(no_obs_phic_servitotal_a1) + parseInt(no_gyn_phic_servitotal_a1) + parseInt(no_pedia_phic_servitotal_a1) + parseInt(no_surped_phic_servitotal_a1) + parseInt(no_suradu_phic_servitotal_a1);
				if (!isNaN(total_p_serv1)) {
					document.getElementById('total_p_servs1').value = total_p_serv1;
				}
				var total_p_serv2 = parseInt(no_med_phic_servitotal_a2) + parseInt(no_obs_phic_servitotal_a2) + parseInt(no_gyn_phic_servitotal_a2) + parseInt(no_pedia_phic_servitotal_a2) + parseInt(no_surped_phic_servitotal_a2) + parseInt(no_suradu_phic_servitotal_a2);
				if (!isNaN(total_p_serv2)) {
					document.getElementById('total_p_servs2').value = total_p_serv2;
				}
				var total_p_total = parseInt(tot_med_phic) + parseInt(tot_obs_phic) + parseInt(tot_gyn_phic) + parseInt(tot_pedia_phic) + parseInt(tot_surped_phic) + parseInt(tot_suradu_phic);
				if (!isNaN(total_p_total)) {
					document.getElementById('total_p_totals').value = total_p_total;
				}
				var total_ri = parseInt(med_recov_a) + parseInt(obs_recov_a) + parseInt(gyn_recov_a) + parseInt(pedia_recov_a) + parseInt(surped_recov_a) + parseInt(suradu_recov_a);
				if (!isNaN(total_ri)) {
					document.getElementById('total_ris').value = total_ri;
				}
				var total_t = parseInt(med_t_a) + parseInt(obs_t_a) + parseInt(gyn_t_a) + parseInt(pedia_t_a) + parseInt(surped_t_a) + parseInt(suradu_t_a);
				if (!isNaN(total_t)) {
					document.getElementById('total_ris').value = total_t;
				}
				var total_h = parseInt(med_h_a) + parseInt(obs_h_a) + parseInt(gyn_h_a) + parseInt(pedia_h_a) + parseInt(surped_h_a) + parseInt(suradu_h_a);
				if (!isNaN(total_h)) {
					document.getElementById('totals_h').value = total_h;
				}
				var total_a = parseInt(med_a_a) + parseInt(obs_a_a) + parseInt(gyn_a_a) + parseInt(pedia_a_a) + parseInt(surped_a_a) + parseInt(suradu_a_a);
				if (!isNaN(total_a)) {
					document.getElementById('totals_a').value = total_a;
				}
				var total_u = parseInt(med_u_a) + parseInt(obs_u_a) + parseInt(gyn_u_a) + parseInt(pedia_u_a) + parseInt(surped_u_a) + parseInt(suradu_u_a);
				if (!isNaN(total_u)) {
					document.getElementById('totals_u').value = total_u;
				}
				var total_graterthan48 = parseInt(med_b_d_a) + parseInt(obs_b_d_a) + parseInt(gyn_b_d_a) + parseInt(pedia_b_d_a) + parseInt(surped_b_d_a) + parseInt(suradu_b_d_a);
				if (!isNaN(total_graterthan48)) {
					document.getElementById('total_graterthan48_a').value = total_graterthan48;
				}
				var total_lessthan48 = parseInt(med_a_d_a) + parseInt(obs_a_d_a) + parseInt(gyn_a_d_a) + parseInt(pedia_a_d_a) + parseInt(surped_a_d_a) + parseInt(suradu_a_d_a);
				if (!isNaN(total_lessthan48)) {
					document.getElementById('total_lessthan48_a').value = total_lessthan48;
				}
				var total_death = parseInt(tot_1) + parseInt(tot_2) + parseInt(tot_3) + parseInt(tot_4) + parseInt(tot_5) + parseInt(tot_6);
				if (!isNaN(total_death)) {
					document.getElementById('total_death_a').value = total_death;
				}
				var total_discharges = parseInt(total_med) + parseInt(total_obs) + parseInt(total_gyn) + parseInt(total_pedia) + parseInt(total_surped) + parseInt(total_suradu);
				if (!isNaN(total_discharges)) {
					document.getElementById('total_discharges_a').value = total_discharges;
				}
				var total_nb_length_of_stay = parseInt(los_patho_a) + parseInt(los_unpatho_a);
				if (!isNaN(total_nb_length_of_stay)) {
					document.getElementById('total_nb_length_of_stay_a').value = total_nb_length_of_stay;
				}
				var total_nb_np_pay = parseInt(no_patho_nphic_paytotal_a) + parseInt(no_unpatho_nphic_paytotal_a);

				var total_nb_np_ser = parseInt(no_patho_nphic_servitotal_a) + parseInt(no_unpatho_nphic_servitotal_a);
				if (!isNaN(total_nb_np_ser)) {
					document.getElementById('tot_nb_np_ser').value = total_nb_np_ser;
				}
				var tot_patho_nphic = parseInt(no_patho_nphic_paytotal_a) + parseInt(no_patho_nphic_servitotal_a);
				if (!isNaN(tot_patho_nphic)) {
					document.getElementById('tot_pathology_nphic').value = tot_patho_nphic;
				}

				var tot_unpatho_nphic = parseInt(no_unpatho_nphic_paytotal_a) + parseInt(no_unpatho_nphic_servitotal_a);
				var total_nb_total_np_a = parseInt(no_patho_nphic_servitotal_a) + parseInt(no_unpatho_nphic_servitotal_a);
				if (!isNaN(total_nb_total_np_a)) {
					document.getElementById('tot_nb_total_np').value = total_nb_total_np_a;
				}
				var total_nb_phic_pay_a = parseInt(no_patho_phic_paytotal_a) + parseInt(no_unpatho_phic_paytotal_a);
				if (!isNaN(total_nb_phic_pay_a)) {
					document.getElementById('tot_nb_phic_pay').value = total_nb_phic_pay_a;
				}
				var total_nb_phic_pay_a1 = parseInt(no_patho_phic_paytotal_a1) + parseInt(no_unpatho_phic_paytotal_a1);
				if (!isNaN(total_nb_phic_pay_a1)) {
					document.getElementById('tot_nb_phic_pay1').value = total_nb_phic_pay_a1;
				}
				var total_nb_phic_pay_a2 = parseInt(no_patho_phic_paytotal_a2) + parseInt(no_unpatho_phic_paytotal_a2);
				if (!isNaN(total_nb_phic_pay_a2)) {
					document.getElementById('tot_nb_phic_pay2').value = total_nb_phic_pay_a2;
				}
				var total_nb_phic_serv_a = parseInt(no_patho_phic_servitotal_a) + parseInt(no_unpatho_phic_servitotal_a);
				if (!isNaN(total_nb_phic_serv_a)) {
					document.getElementById('tot_nb_phic_serv').value = total_nb_phic_serv_a;
				}
				var total_nb_phic_serv_a1 = parseInt(no_patho_phic_servitotal_a1) + parseInt(no_unpatho_phic_servitotal_a1);
				if (!isNaN(total_nb_phic_serv_a1)) {
					document.getElementById('tot_nb_phic_serv1').value = total_nb_phic_serv_a1;
				}
				var total_nb_phic_serv_a2 = parseInt(no_patho_phic_servitotal_a2) + parseInt(no_unpatho_phic_servitotal_a2);
				if (!isNaN(total_nb_phic_serv_a2)) {
					document.getElementById('tot_nb_phic_serv2').value = total_nb_phic_serv_a2;
				}
				var total_nb_total_phic_a = parseInt(no_patho_phic_servitotal_a) + parseInt(no_unpatho_phic_servitotal_a);
				if (!isNaN(total_nb_total_phic_a)) {
					document.getElementById('tot_nb_total_phic').value = total_nb_total_phic_a;
				}
				var tot_nb_ri_a = parseInt(patho_recov_a) + parseInt(unpatho_recov_a);
				if (!isNaN(tot_nb_ri_a)) {
					document.getElementById('tot_nb_ri').value = tot_nb_ri_a;
				}
				var tot_nb_t_a = parseInt(patho_t_a) + parseInt(unpatho_t_a);
				if (!isNaN(tot_nb_t_a)) {
					document.getElementById('tot_nb_t').value = tot_nb_t_a;
				}
				var tot_nb_h_a = parseInt(patho_h_a) + parseInt(unpatho_h_a);
				if (!isNaN(tot_nb_h_a)) {
					document.getElementById('tot_nb_h').value = tot_nb_h_a;
				}
				var tot_nb_a_a = parseInt(patho_a_a) + parseInt(unpatho_a_a);
				if (!isNaN(tot_nb_a_a)) {
					document.getElementById('tot_nb_a').value = tot_nb_a_a;
				}
				var tot_nb_u_a = parseInt(patho_u_a) + parseInt(unpatho_u_a);
				if (!isNaN(tot_nb_u_a)) {
					document.getElementById('tot_nb_u').value = tot_nb_u_a;
				}
				var total_nb_lessthan = parseInt(pathology_a_d_a) + parseInt(unpathology_a_d_a);
				if (!isNaN(total_nb_lessthan)) {
					document.getElementById('tot_nb_lessthan').value = total_nb_lessthan;
				}
				var total_nb_graterthan = parseInt(pathology_b_d_a) + parseInt(unpathology_b_d_a);
				if (!isNaN(total_nb_graterthan)) {
					document.getElementById('tot_nb_graterthan').value = total_nb_graterthan;
				}
				var total_nb_death = parseInt(tot_7) + parseInt(tot_8);
				if (!isNaN(total_nb_death)) {
					document.getElementById('tot_nb_death').value = total_nb_death;
				}
				var tot_patho_phic_a = parseInt(no_patho_phic_paytotal_a) + parseInt(no_patho_phic_servitotal_a);
				if (!isNaN(tot_patho_phic_a)) {
					document.getElementById('tot_pathology_phic').value = tot_patho_phic_a;
				}

				var tot_unpatho_phic_a = parseInt(no_unpatho_phic_paytotal_a) + parseInt(no_unpatho_phic_servitotal_a);
				if (!isNaN(tot_unpatho_phic_a)) {
					document.getElementById('tot_unpathology_phic').value = tot_unpatho_phic_a;
				}

				var alos = parseFloat(parseInt(total_length_of_stay) / parseInt(total_no_of_pat)).toFixed(0);
				if (!isNaN(alos)) {
					document.getElementById('alos').value = alos;
					document.getElementById('alos').innerHTML = alos;
				}

				var alosnewborn = parseFloat(parseInt(total_nb_length_of_stay) / parseInt(total_nb_no_of_pat)).toFixed(0);
				if (!isNaN(alos)) {
					document.getElementById('alosnewborn').value = alosnewborn;
					document.getElementById('alosnewborn').innerHTML = alosnewborn;
				}

				document.getElementById('total_unpathology').innerHTML = total_unpatho;
				document.getElementById('total_8').innerHTML = tot_8;
				document.getElementById('tot_unpathology_phic').innerHTML = tot_unpatho_phic_a;
				document.getElementById('tot_unpathology_nphic').innerHTML = tot_unpatho_nphic;
				document.getElementById('tot_unpatho').innerHTML = total_unpatho;
				document.getElementById('total_pathology').innerHTML = total_patho;
				document.getElementById('total_7').innerHTML = tot_7;
				document.getElementById('tot_pathology_phic').innerHTML = tot_patho_phic_a;
				document.getElementById('tot_pathology_nphic').innerHTML = tot_patho_nphic;
				document.getElementById('tot_patho').innerHTML = total_patho;
				document.getElementById('tot_nb_no_of_pat_a').innerHTML = total_nb_no_of_pat;
				document.getElementById('tot_nb_death').innerHTML = total_nb_death;
				document.getElementById('tot_nb_graterthan').innerHTML = total_nb_graterthan;
				document.getElementById('pathology_b_d').innerHTML = pathology_b_d_a;
				document.getElementById('unpathology_b_d').innerHTML = unpathology_b_d_a;
				document.getElementById('tot_nb_lessthan').innerHTML = total_nb_lessthan;
				document.getElementById('pathology_a_d').innerHTML = pathology_a_d_a;
				document.getElementById('unpathology_a_d').innerHTML = unpathology_a_d_a;
				document.getElementById('tot_nb_u').innerHTML = tot_nb_u_a;
				document.getElementById('tot_nb_a').innerHTML = tot_nb_a_a;
				document.getElementById('tot_nb_h').innerHTML = tot_nb_h_a;
				document.getElementById('tot_nb_t').innerHTML = tot_nb_t_a;
				document.getElementById('tot_nb_ri').innerHTML = tot_nb_ri_a;
				document.getElementById('pathology_recov').innerHTML = patho_recov_a;
				document.getElementById('unpathology_recov').innerHTML = unpatho_recov_a;
				document.getElementById('tot_nb_total_phic').innerHTML = total_nb_total_phic_a;
				document.getElementById('tot_nb_phic_serv').innerHTML = total_nb_phic_serv_a;
				document.getElementById('tot_nb_phic_serv1').innerHTML = total_nb_phic_serv_a1;
				document.getElementById('tot_nb_phic_serv2').innerHTML = total_nb_phic_serv_a2;
				document.getElementById('no_pathology_phic_servitotal').innerHTML = no_patho_phic_servitotal_a;
				document.getElementById('no_pathology_phic_servitotal1').innerHTML = no_patho_phic_servitotal_a1;
				document.getElementById('no_pathology_phic_servitotal2').innerHTML = no_patho_phic_servitotal_a2;
				document.getElementById('no_unpathology_phic_servitotal').innerHTML = no_unpatho_phic_servitotal_a;
				document.getElementById('no_unpathology_phic_servitotal1').innerHTML = no_unpatho_phic_servitotal_a1;
				document.getElementById('no_unpathology_phic_servitotal2').innerHTML = no_unpatho_phic_servitotal_a2;
				document.getElementById('tot_nb_phic_pay').innerHTML = total_nb_phic_pay_a;
				document.getElementById('tot_nb_phic_pay1').innerHTML = total_nb_phic_pay_a1;
				document.getElementById('tot_nb_phic_pay2').innerHTML = total_nb_phic_pay_a2;
				document.getElementById('no_pathology_phic_paytotal').innerHTML = no_patho_phic_paytotal_a;
				document.getElementById('no_pathology_phic_paytotal1').innerHTML = no_patho_phic_paytotal_a1;
				document.getElementById('no_pathology_phic_paytotal2').innerHTML = no_patho_phic_paytotal_a2;
				document.getElementById('no_unpathology_phic_paytotal').innerHTML = no_unpatho_phic_paytotal_a;
				document.getElementById('no_unpathology_phic_paytotal1').innerHTML = no_unpatho_phic_paytotal_a1;
				document.getElementById('no_unpathology_phic_paytotal2').innerHTML = no_unpatho_phic_paytotal_a2;
				document.getElementById('tot_nb_total_np').innerHTML = total_nb_total_np_a;
				document.getElementById('tot_nb_np_ser').innerHTML = total_nb_np_ser;
				document.getElementById('no_pathology_nphic_servitotal').innerHTML = no_patho_nphic_servitotal_a;
				document.getElementById('no_unpathology_nphic_servitotal').innerHTML = no_unpatho_nphic_servitotal_a;
				document.getElementById('total_nb_length_of_stay_a').innerHTML = total_nb_length_of_stay;
				document.getElementById('tot_nb_np_pay').innerHTML = total_nb_np_pay;
				document.getElementById('no_pathology_nphic_paytotal').innerHTML = no_patho_nphic_paytotal_a;
				document.getElementById('no_unpathology_nphic_paytotal').innerHTML = no_unpatho_nphic_paytotal_a;
				document.getElementById('los_pathology').innerHTML = los_patho_a;
				document.getElementById('los_unpathology').innerHTML = los_unpatho_a;
				document.getElementById('total_nb_no_of_pat_a').innerHTML = total_nb_no_of_pat;
				document.getElementById('total_discharges_a').innerHTML = total_discharges;
				document.getElementById('total_death_a').innerHTML = total_death;
				document.getElementById('total_lessthan48_a').innerHTML = total_lessthan48;
				document.getElementById('total_graterthan48_a').innerHTML = total_graterthan48;
				document.getElementById('totals_u').innerHTML = total_u;
				document.getElementById('totals_a').innerHTML = total_a;
				document.getElementById('totals_h').innerHTML = total_h;
				document.getElementById('totals_t').innerHTML = total_t;
				document.getElementById('total_ris').innerHTML = total_ri;
				document.getElementById('total_p_totals').innerHTML = total_p_total;
				document.getElementById('total_p_servs').innerHTML = total_p_serv;
				document.getElementById('total_p_servs1').innerHTML = total_p_serv1;
				document.getElementById('total_p_servs2').innerHTML = total_p_serv2;
				document.getElementById('total_p_pays').innerHTML = total_p_pay;
				document.getElementById('total_p_pays1').innerHTML = total_p_pay1;
				document.getElementById('total_p_pays2').innerHTML = total_p_pay2;
				document.getElementById('total_np_totals').innerHTML = total_np_total;
				document.getElementById('total_np_servs').innerHTML = total_np_serv;
				document.getElementById('total_np_pays').innerHTML = total_np_pay;
				document.getElementById('suradus_recov').innerHTML = suradu_recov_a;
				document.getElementById('tot_suradus_phic').innerHTML = tot_suradu_phic;
				document.getElementById('no_suradus_phic_servitotal').innerHTML = no_suradu_phic_servitotal_a;
				document.getElementById('no_suradus_phic_servitotal1').innerHTML = no_suradu_phic_servitotal_a1;
				document.getElementById('no_suradus_phic_servitotal2').innerHTML = no_suradu_phic_servitotal_a2;
				document.getElementById('no_suradus_phic_paytotal').innerHTML = no_suradu_phic_paytotal_a;
				document.getElementById('no_suradus_phic_paytotal1').innerHTML = no_suradu_phic_paytotal_a1;
				document.getElementById('no_suradus_phic_paytotal2').innerHTML = no_suradu_phic_paytotal_a2;
				document.getElementById('tot_suradus_nphic').innerHTML = tot_suradu_nphic;
				document.getElementById('no_suradus_nphic_servitotal').innerHTML = no_suradu_nphic_servitotal_a;
				document.getElementById('no_suradus_nphic_paytotal').innerHTML = no_suradu_nphic_paytotal_a;
				document.getElementById('los_suradus').innerHTML = los_suradu_a;
				document.getElementById('total_suradus').innerHTML = total_suradu;
				document.getElementById('total_suraduss').innerHTML = total_suradu;
				document.getElementById('surpedia_recov').innerHTML = surped_recov_a;
				document.getElementById('pediatrics_recov').innerHTML = pedia_recov_a;
				document.getElementById('tot_surpedia_phic').innerHTML = tot_surped_phic;
				document.getElementById('no_surpedia_phic_servitotal').innerHTML = no_surped_phic_servitotal_a;
				document.getElementById('no_surpedia_phic_servitotal1').innerHTML = no_surped_phic_servitotal_a1;
				document.getElementById('no_surpedia_phic_servitotal2').innerHTML = no_surped_phic_servitotal_a2;
				document.getElementById('no_surpedia_phic_paytotal').innerHTML = no_surped_phic_paytotal_a;
				document.getElementById('no_surpedia_phic_paytotal1').innerHTML = no_surped_phic_paytotal_a1;
				document.getElementById('no_surpedia_phic_paytotal2').innerHTML = no_surped_phic_paytotal_a2;
				document.getElementById('tot_surpedia_nphic').innerHTML = tot_surped_nphic;
				document.getElementById('no_surpedia_nphic_servitotal').innerHTML = no_surped_nphic_servitotal_a;
				document.getElementById('no_surpedia_nphic_paytotal').innerHTML = no_surped_nphic_paytotal_a;
				document.getElementById('los_surpedia').innerHTML = los_surped_a;
				document.getElementById('total_surpedia').innerHTML = total_surped;
				document.getElementById('total_surpedias').innerHTML = total_surped;
				document.getElementById('tot_pediatrics_phic').innerHTML = tot_pedia_phic;
				document.getElementById('no_pediatrics_phic_servitotal').innerHTML = no_pedia_phic_servitotal_a;
				document.getElementById('no_pediatrics_phic_servitotal1').innerHTML = no_pedia_phic_servitotal_a1;
				document.getElementById('no_pediatrics_phic_servitotal2').innerHTML = no_pedia_phic_servitotal_a2;
				document.getElementById('no_pediatrics_phic_paytotal').innerHTML = no_pedia_phic_paytotal_a;
				document.getElementById('no_pediatrics_phic_paytotal1').innerHTML = no_pedia_phic_paytotal_a1;
				document.getElementById('no_pediatrics_phic_paytotal2').innerHTML = no_pedia_phic_paytotal_a2;
				document.getElementById('tot_pediatrics_nphic').innerHTML = tot_pedia_nphic;
				document.getElementById('no_pediatrics_nphic_servitotal').innerHTML = no_pedia_nphic_servitotal_a;
				document.getElementById('no_pediatrics_nphic_paytotal').innerHTML = no_pedia_nphic_paytotal_a;
				document.getElementById('los_pediatrics').innerHTML = los_pedia_a;
				document.getElementById('total_pediatric').innerHTML = total_pedia;
				document.getElementById('total_pediatrics').innerHTML = total_pedia;
				document.getElementById('gyne_recov').innerHTML = gyn_recov_a;
				document.getElementById('tot_gyne_phic').innerHTML = tot_gyn_phic;
				document.getElementById('no_gyne_phic_servitotal').innerHTML = no_gyn_phic_servitotal_a;
				document.getElementById('no_gyne_phic_servitotal1').innerHTML = no_gyn_phic_servitotal_a1;
				document.getElementById('no_gyne_phic_servitotal2').innerHTML = no_gyn_phic_servitotal_a2;
				document.getElementById('no_gyne_phic_paytotal').innerHTML = no_gyn_phic_paytotal_a;
				document.getElementById('no_gyne_phic_paytotal1').innerHTML = no_gyn_phic_paytotal_a1;
				document.getElementById('no_gyne_phic_paytotal2').innerHTML = no_gyn_phic_paytotal_a2;
				document.getElementById('tot_gyne_nphic').innerHTML = tot_gyn_nphic;
				document.getElementById('no_gyne_nphic_servitotal').innerHTML = no_gyn_nphic_servitotal_a;
				document.getElementById('no_gyne_nphic_paytotal').innerHTML = no_gyn_nphic_paytotal_a;
				document.getElementById('los_gyne').innerHTML = los_gyn_a;
				document.getElementById('total_gyne').innerHTML = total_gyn;
				document.getElementById('total_gynes').innerHTML = total_gyn;
				document.getElementById('obstet_recov').innerHTML = obs_recov_a;
				document.getElementById('tot_obstet_phic').innerHTML = tot_obs_phic;
				document.getElementById('no_obstet_phic_servitotal').innerHTML = no_obs_phic_servitotal_a;
				document.getElementById('no_obstet_phic_servitotal1').innerHTML = no_obs_phic_servitotal_a1;
				document.getElementById('no_obstet_phic_servitotal2').innerHTML = no_obs_phic_servitotal_a2;
				document.getElementById('no_obstet_phic_paytotal').innerHTML = no_obs_phic_paytotal_a;
				document.getElementById('no_obstet_phic_paytotal1').innerHTML = no_obs_phic_paytotal_a1;
				document.getElementById('no_obstet_phic_paytotal2').innerHTML = no_obs_phic_paytotal_a2;
				document.getElementById('tot_obstet_nphic').innerHTML = tot_obs_nphic;
				document.getElementById('no_obstet_nphic_servitotal').innerHTML = no_obs_nphic_servitotal_a;
				document.getElementById('no_obstet_nphic_paytotal').innerHTML = no_obs_nphic_paytotal_a;
				document.getElementById('los_obs').innerHTML = los_obs_a;
				document.getElementById('total_obstet').innerHTML = total_obs;
				document.getElementById('total_obstets').innerHTML = total_obst;
				document.getElementById('total_1').innerHTML = tot_1;
				document.getElementById('total_2').innerHTML = tot_2;
				document.getElementById('total_3').innerHTML = tot_3;
				document.getElementById('total_4').innerHTML = tot_4;
				document.getElementById('total_5').innerHTML = tot_5;
				document.getElementById('total_6').innerHTML = tot_6;
				document.getElementById('medic_recov').innerHTML = med_recov_a;
				document.getElementById('tot_medic_phic').innerHTML = tot_med_phic;
				document.getElementById('no_phic_servitotal').innerHTML = no_med_phic_servitotal_a;
				document.getElementById('no_phic_servitotal1').innerHTML = no_med_phic_servitotal_a1;
				document.getElementById('no_phic_servitotal2').innerHTML = no_med_phic_servitotal_a2;
				document.getElementById('no_phic_paytotal').innerHTML = no_med_phic_paytotal_a;
				document.getElementById('no_phic_paytotal1').innerHTML = no_med_phic_paytotal_a1;
				document.getElementById('no_phic_paytotal2').innerHTML = no_med_phic_paytotal_a2;
				document.getElementById('tot_medic_nphic').innerHTML = tot_med_nphic;
				document.getElementById('no_nphic_servitotal').innerHTML = no_med_nphic_servitotal_a;
				document.getElementById('no_nphic_paytotal').innerHTML = no_med_nphic_paytotal_a;
				document.getElementById('los_medical').innerHTML = los_med_a;
				document.getElementById('total_medic').innerHTML = total_med;
				document.getElementById('total_medics').innerHTML = total_meds;
				document.getElementById('totnuminpatserv').innerHTML = total_length_of_stay;
				document.getElementById('totnuminpatservs').innerHTML = total_length_of_stay;
				document.getElementById('totdisalive').innerHTML = totaldischarges;
				document.getElementById('medic_a_d').innerHTML = med_a_d_a;
				document.getElementById('medic_b_d').innerHTML = med_b_d_a;
				document.getElementById('obstet_a_d').innerHTML = obs_a_d_a;
				document.getElementById('obstet_b_d').innerHTML = obs_b_d_a;
				document.getElementById('gyne_a_d').innerHTML = gyn_a_d_a;
				document.getElementById('gyne_b_d').innerHTML = gyn_b_d_a;
				document.getElementById('pediatrics_a_d').innerHTML = pedia_a_d_a;
				document.getElementById('pediatrics_b_d').innerHTML = pedia_b_d_a;
				document.getElementById('surpeds_a_d').innerHTML = surped_a_d_a;
				document.getElementById('surpeds_b_d').innerHTML = surped_b_d_a;
				document.getElementById('suradus_a_d').innerHTML = suradu_a_d_a;
				document.getElementById('suradus_b_d').innerHTML = suradu_b_d_a;
				document.getElementById('totnewborn').innerHTML = total_nb_no_of_pat;
				document.getElementById('pathology_t').innerHTML = patho_t_a;
				document.getElementById('pathology_h').innerHTML = patho_h_a;
				document.getElementById('pathology_a').innerHTML = patho_a_a;
				document.getElementById('pathology_u').innerHTML = patho_u_a;
				document.getElementById('no_pathology').innerHTML = unpatho_t_a;
				document.getElementById('unpathology_t').innerHTML = unpatho_t_a;
				document.getElementById('unpathology_h').innerHTML = unpatho_h_a;
				document.getElementById('unpathology_a').innerHTML = unpatho_a_a;
				document.getElementById('unpathology_u').innerHTML = unpatho_u_a;
				document.getElementById('no_unpathology').innerHTML = no_unpatho_a;
				document.getElementById('totnuminpat').innerHTML = total_no_of_pat;
				document.getElementById('totnuminpatient').innerHTML = total_no_of_pat;
				document.getElementById('medic_t').innerHTML = med_t_a;
				document.getElementById('medic_h').innerHTML = med_h_a;
				document.getElementById('medic_a').innerHTML = med_a_a;
				document.getElementById('medic_u').innerHTML = med_u_a;
				document.getElementById('no_medic').innerHTML = no_med_a;
				document.getElementById('obstet_t').innerHTML = obs_t_a;
				document.getElementById('obstet_h').innerHTML = obs_h_a;
				document.getElementById('obstet_a').innerHTML = obs_a_a;
				document.getElementById('obstet_u').innerHTML = obs_u_a;
				document.getElementById('no_obstet').innerHTML = no_obs_a;
				document.getElementById('gyne_t').innerHTML = gyn_t_a;
				document.getElementById('gyne_h').innerHTML = gyn_h_a;
				document.getElementById('gyne_a').innerHTML = gyn_a_a;
				document.getElementById('gyne_u').innerHTML = gyn_u_a;
				document.getElementById('no_gyne').innerHTML = no_gyn_a;
				document.getElementById('pediatrics_t').innerHTML = pedia_t_a;
				document.getElementById('pediatrics_h').innerHTML = pedia_h_a;
				document.getElementById('pediatrics_a').innerHTML = pedia_a_a;
				document.getElementById('pediatrics_u').innerHTML = pedia_u_a;
				document.getElementById('no_pediatrics').innerHTML = no_pedia_a;
				document.getElementById('surpeds_t').innerHTML = surped_t_a;
				document.getElementById('surpeds_h').innerHTML = surped_h_a;
				document.getElementById('surpeds_a').innerHTML = surped_a_a;
				document.getElementById('surpeds_u').innerHTML = surped_u_a;
				document.getElementById('no_surpeds').innerHTML = no_surped_a;
				document.getElementById('suradus_t').innerHTML = suradu_t_a;
				document.getElementById('suradus_h').innerHTML = suradu_h_a;
				document.getElementById('suradus_a').innerHTML = suradu_a_a;
				document.getElementById('suradus_u').innerHTML = suradu_u_a;
				document.getElementById('no_suradus').innerHTML = no_suradu_a;
				document.getElementById('totnumfac').innerHTML = total_trans_to_a;
				document.getElementById('totnumanthfac').innerHTML = total_trans_from_a;


			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Result_of_Treatment(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Result_of_Treatment_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			//Medicine
			document.getElementById('med_recov_dis').innerHTML = 0;
			document.getElementById('med_recov_trans').innerHTML = 0;
			document.getElementById('med_recov_hama').innerHTML = 0;
			document.getElementById('med_recov_abs').innerHTML = 0;
			document.getElementById('med_recov_total').innerHTML = 0;
			document.getElementById('med_impro_dis').innerHTML = 0;
			document.getElementById('med_impro_trans').innerHTML = 0;
			document.getElementById('med_impro_hama').innerHTML = 0;
			document.getElementById('med_impro_abs').innerHTML = 0;
			document.getElementById('med_impro_total').innerHTML = 0;
			document.getElementById('med_unimp_dis').innerHTML = 0;
			document.getElementById('med_unimp_trans').innerHTML = 0;
			document.getElementById('med_unimp_hama').innerHTML = 0;
			document.getElementById('med_unimp_abs').innerHTML = 0;
			document.getElementById('med_unimp_total').innerHTML = 0;
			document.getElementById('med_less_died').innerHTML = 0;
			document.getElementById('med_great_died').innerHTML = 0;
			document.getElementById('med_total_died').innerHTML = 0;
			document.getElementById('medicine_total').innerHTML = 0;

			//Obstetrics
			document.getElementById('obs_recov_dis').innerHTML = 0;
			document.getElementById('obs_recov_trans').innerHTML = 0;
			document.getElementById('obs_recov_hama').innerHTML = 0;
			document.getElementById('obs_recov_abs').innerHTML = 0;
			document.getElementById('obs_recov_total').innerHTML = 0;
			document.getElementById('obs_impro_dis').innerHTML = 0;
			document.getElementById('obs_impro_trans').innerHTML = 0;
			document.getElementById('obs_impro_hama').innerHTML = 0;
			document.getElementById('obs_impro_abs').innerHTML = 0;
			document.getElementById('obs_impro_total').innerHTML = 0;
			document.getElementById('obs_unimp_dis').innerHTML = 0;
			document.getElementById('obs_unimp_trans').innerHTML = 0;
			document.getElementById('obs_unimp_hama').innerHTML = 0;
			document.getElementById('obs_unimp_abs').innerHTML = 0;
			document.getElementById('obs_unimp_total').innerHTML = 0;
			document.getElementById('obs_less_died').innerHTML = 0;
			document.getElementById('obs_great_died').innerHTML = 0;
			document.getElementById('obs_total_died').innerHTML = 0;
			document.getElementById('obstetrics_total').innerHTML = 0;

			//Gynecology
			document.getElementById('gyn_recov_dis').innerHTML = 0;
			document.getElementById('gyn_recov_trans').innerHTML = 0;
			document.getElementById('gyn_recov_hama').innerHTML = 0;
			document.getElementById('gyn_recov_abs').innerHTML = 0;
			document.getElementById('gyn_recov_total').innerHTML = 0;
			document.getElementById('gyn_impro_dis').innerHTML = 0;
			document.getElementById('gyn_impro_trans').innerHTML = 0;
			document.getElementById('gyn_impro_hama').innerHTML = 0;
			document.getElementById('gyn_impro_abs').innerHTML = 0;
			document.getElementById('gyn_impro_total').innerHTML = 0;
			document.getElementById('gyn_unimp_dis').innerHTML = 0;
			document.getElementById('gyn_unimp_trans').innerHTML = 0;
			document.getElementById('gyn_unimp_hama').innerHTML = 0;
			document.getElementById('gyn_unimp_abs').innerHTML = 0;
			document.getElementById('gyn_unimp_total').innerHTML = 0;
			document.getElementById('gyn_less_died').innerHTML = 0;
			document.getElementById('gyn_great_died').innerHTML = 0;
			document.getElementById('gyn_total_died').innerHTML = 0;
			document.getElementById('gynecology_total').innerHTML = 0;

			//Pediatrics
			document.getElementById('pedia_recov_dis').innerHTML = 0;
			document.getElementById('pedia_recov_trans').innerHTML = 0;
			document.getElementById('pedia_recov_hama').innerHTML = 0;
			document.getElementById('pedia_recov_abs').innerHTML = 0;
			document.getElementById('pedia_recov_total').innerHTML = 0;
			document.getElementById('pedia_impro_dis').innerHTML = 0;
			document.getElementById('pedia_impro_trans').innerHTML = 0;
			document.getElementById('pedia_impro_hama').innerHTML = 0;
			document.getElementById('pedia_impro_abs').innerHTML = 0;
			document.getElementById('pedia_impro_total').innerHTML = 0;
			document.getElementById('pedia_unimp_dis').innerHTML = 0;
			document.getElementById('pedia_unimp_trans').innerHTML = 0;
			document.getElementById('pedia_unimp_hama').innerHTML = 0;
			document.getElementById('pedia_unimp_abs').innerHTML = 0;
			document.getElementById('pedia_unimp_total').innerHTML = 0;
			document.getElementById('pedia_less_died').innerHTML = 0;
			document.getElementById('pedia_great_died').innerHTML = 0;
			document.getElementById('pedia_total_died').innerHTML = 0;
			document.getElementById('pediatrics_total').innerHTML = 0;

			//Surgery
			document.getElementById('surgi_recov_dis').innerHTML = 0;
			document.getElementById('surgi_recov_trans').innerHTML = 0;
			document.getElementById('surgi_recov_hama').innerHTML = 0;
			document.getElementById('surgi_recov_abs').innerHTML = 0;
			document.getElementById('surgi_recov_total').innerHTML = 0;
			document.getElementById('surgi_impro_dis').innerHTML = 0;
			document.getElementById('surgi_impro_trans').innerHTML = 0;
			document.getElementById('surgi_impro_hama').innerHTML = 0;
			document.getElementById('surgi_impro_abs').innerHTML = 0;
			document.getElementById('surgi_impro_total').innerHTML = 0;
			document.getElementById('surgi_unimp_dis').innerHTML = 0;
			document.getElementById('surgi_unimp_trans').innerHTML = 0;
			document.getElementById('surgi_unimp_hama').innerHTML = 0;
			document.getElementById('surgi_unimp_abs').innerHTML = 0;
			document.getElementById('surgi_unimp_total').innerHTML = 0;
			document.getElementById('surgi_less_died').innerHTML = 0;
			document.getElementById('surgi_great_died').innerHTML = 0;
			document.getElementById('surgi_total_died').innerHTML = 0;
			document.getElementById('surgery_total').innerHTML = 0;

			data.forEach(data => {
				if (data.tstype == "MEDIC") {
					//-----------------Medicine-----------------//
					$('#med_recov_dis').val(obj['recov_dis']);
					document.getElementById('med_recov_dis').innerHTML = data.recov_dis;

					$('#med_recov_trans').val(obj['recov_trans']);
					document.getElementById('med_recov_trans').innerHTML = data.recov_trans;

					$('#med_recov_hama').val(obj['recov_hama']);
					document.getElementById('med_recov_hama').innerHTML = data.recov_hama;

					$('#med_recov_abs').val(obj['recov_abs']);
					document.getElementById('med_recov_abs').innerHTML = data.recov_abs;

					$('#med_recov_total').val(obj['recov_total']);
					document.getElementById('med_recov_total').innerHTML = data.recov_total;

					$('#med_impro_dis').val(obj['impro_dis']);
					document.getElementById('med_impro_dis').innerHTML = data.impro_dis;

					$('#med_impro_trans').val(obj['impro_trans']);
					document.getElementById('med_impro_trans').innerHTML = data.impro_trans;

					$('#med_impro_hama').val(obj['impro_hama']);
					document.getElementById('med_impro_hama').innerHTML = data.impro_hama;

					$('#med_impro_abs').val(obj['impro_abs']);
					document.getElementById('med_impro_abs').innerHTML = data.impro_abs;

					$('#med_impro_total').val(obj['impro_total']);
					document.getElementById('med_impro_total').innerHTML = data.impro_total;

					$('#med_unimp_dis').val(obj['unimp_dis']);
					document.getElementById('med_unimp_dis').innerHTML = data.unimp_dis;

					$('#med_unimp_trans').val(obj['unimp_trans']);
					document.getElementById('med_unimp_trans').innerHTML = data.unimp_trans;

					$('#med_unimp_hama').val(obj['unimp_hama']);
					document.getElementById('med_unimp_hama').innerHTML = data.unimp_hama;

					$('#med_unimp_abs').val(obj['unimp_abs']);
					document.getElementById('med_unimp_abs').innerHTML = data.unimp_abs;

					$('#med_unimp_total').val(obj['unimp_total']);
					document.getElementById('med_unimp_total').innerHTML = data.unimp_total;

					$('#med_less_died').val(obj['less_died']);
					document.getElementById('med_less_died').innerHTML = data.less_died;

					$('#med_great_died').val(obj['great_died']);
					document.getElementById('med_great_died').innerHTML = data.great_died;

					$('#med_total_died').val(obj['tot_died']);
					document.getElementById('med_total_died').innerHTML = data.tot_died;

					document.getElementById('medicine_total').innerHTML = parseInt(data.recov_total) + parseInt(data.impro_total) + parseInt(data.unimp_total) + parseInt(data.tot_died);
				}
				else if (data.tstype == "SURGI") {
					//-----------------Surgery-----------------//
					$('#surgi_recov_dis').val(obj['recov_dis']);
					document.getElementById('surgi_recov_dis').innerHTML = data.recov_dis;

					$('#surgi_recov_trans').val(obj['recov_trans']);
					document.getElementById('surgi_recov_trans').innerHTML = data.recov_trans;

					$('#surgi_recov_hama').val(obj['recov_hama']);
					document.getElementById('surgi_recov_hama').innerHTML = data.recov_hama;

					$('#surgi_recov_abs').val(obj['recov_abs']);
					document.getElementById('surgi_recov_abs').innerHTML = data.recov_abs;

					$('#surgi_recov_total').val(obj['recov_total']);
					document.getElementById('surgi_recov_total').innerHTML = data.recov_total;

					$('#surgi_impro_dis').val(obj['impro_dis']);
					document.getElementById('surgi_impro_dis').innerHTML = data.impro_dis;

					$('#surgi_impro_trans').val(obj['impro_trans']);
					document.getElementById('surgi_impro_trans').innerHTML = data.impro_trans;

					$('#surgi_impro_hama').val(obj['impro_hama']);
					document.getElementById('surgi_impro_hama').innerHTML = data.impro_hama;

					$('#surgi_impro_abs').val(obj['impro_abs']);
					document.getElementById('surgi_impro_abs').innerHTML = data.impro_abs;

					$('#surgi_impro_total').val(obj['impro_total']);
					document.getElementById('surgi_impro_total').innerHTML = data.impro_total;

					$('#surgi_unimp_dis').val(obj['unimp_dis']);
					document.getElementById('surgi_unimp_dis').innerHTML = data.unimp_dis;

					$('#surgi_unimp_trans').val(obj['unimp_trans']);
					document.getElementById('surgi_unimp_trans').innerHTML = data.unimp_trans;

					$('#surgi_unimp_hama').val(obj['unimp_hama']);
					document.getElementById('surgi_unimp_hama').innerHTML = data.unimp_hama;

					$('#surgi_unimp_abs').val(obj['unimp_abs']);
					document.getElementById('surgi_unimp_abs').innerHTML = data.unimp_abs;

					$('#surgi_unimp_total').val(obj['unimp_total']);
					document.getElementById('surgi_unimp_total').innerHTML = data.unimp_total;

					$('#surgi_less_died').val(obj['less_died']);
					document.getElementById('surgi_less_died').innerHTML = data.less_died;

					$('#surgi_great_died').val(obj['great_died']);
					document.getElementById('surgi_great_died').innerHTML = data.great_died;

					$('#surgi_total_died').val(obj['tot_died']);
					document.getElementById('surgi_total_died').innerHTML = data.tot_died;

					document.getElementById('surgery_total').innerHTML = parseInt(data.recov_total) + parseInt(data.impro_total) + parseInt(data.unimp_total) + parseInt(data.tot_died);
				}
				else if (data.tstype == "PEDIA") {
					//-----------------Pediatrics-----------------//
					$('#pedia_recov_dis').val(obj['recov_dis']);
					document.getElementById('pedia_recov_dis').innerHTML = data.recov_dis;

					$('#pedia_recov_trans').val(obj['recov_trans']);
					document.getElementById('pedia_recov_trans').innerHTML = data.recov_trans;

					$('#pedia_recov_hama').val(obj['recov_hama']);
					document.getElementById('pedia_recov_hama').innerHTML = data.recov_hama;

					$('#pedia_recov_abs').val(obj['recov_abs']);
					document.getElementById('pedia_recov_abs').innerHTML = data.recov_abs;

					$('#pedia_recov_total').val(obj['recov_total']);
					document.getElementById('pedia_recov_total').innerHTML = data.recov_total;

					$('#pedia_impro_dis').val(obj['impro_dis']);
					document.getElementById('pedia_impro_dis').innerHTML = data.impro_dis;

					$('#pedia_impro_trans').val(obj['impro_trans']);
					document.getElementById('pedia_impro_trans').innerHTML = data.impro_trans;

					$('#pedia_impro_hama').val(obj['impro_hama']);
					document.getElementById('pedia_impro_hama').innerHTML = data.impro_hama;

					$('#pedia_impro_abs').val(obj['impro_abs']);
					document.getElementById('pedia_impro_abs').innerHTML = data.impro_abs;

					$('#pedia_impro_total').val(obj['impro_total']);
					document.getElementById('pedia_impro_total').innerHTML = data.impro_total;

					$('#pedia_unimp_dis').val(obj['unimp_dis']);
					document.getElementById('pedia_unimp_dis').innerHTML = data.unimp_dis;

					$('#pedia_unimp_trans').val(obj['unimp_trans']);
					document.getElementById('pedia_unimp_trans').innerHTML = data.unimp_trans;

					$('#pedia_unimp_hama').val(obj['unimp_hama']);
					document.getElementById('pedia_unimp_hama').innerHTML = data.unimp_hama;

					$('#pedia_unimp_abs').val(obj['unimp_abs']);
					document.getElementById('pedia_unimp_abs').innerHTML = data.unimp_abs;

					$('#pedia_unimp_total').val(obj['unimp_total']);
					document.getElementById('pedia_unimp_total').innerHTML = data.unimp_total;

					$('#pedia_less_died').val(obj['less_died']);
					document.getElementById('pedia_less_died').innerHTML = data.less_died;

					$('#pedia_great_died').val(obj['great_died']);
					document.getElementById('pedia_great_died').innerHTML = data.great_died;

					$('#pedia_total_died').val(obj['tot_died']);
					document.getElementById('pedia_total_died').innerHTML = data.tot_died;

					document.getElementById('pediatrics_total').innerHTML = parseInt(data.recov_total) + parseInt(data.impro_total) + parseInt(data.unimp_total) + parseInt(data.tot_died);
				}
				else if (data.tstype == "GYN") {
					//-----------------Gynecology-----------------//
					$('#gyn_recov_dis').val(obj['recov_dis']);
					document.getElementById('gyn_recov_dis').innerHTML = data.recov_dis;

					$('#gyn_recov_trans').val(obj['recov_trans']);
					document.getElementById('gyn_recov_trans').innerHTML = data.recov_trans;

					$('#gyn_recov_hama').val(obj['recov_hama']);
					document.getElementById('gyn_recov_hama').innerHTML = data.recov_hama;

					$('#gyn_recov_abs').val(obj['recov_abs']);
					document.getElementById('gyn_recov_abs').innerHTML = data.recov_abs;

					$('#gyn_recov_total').val(obj['recov_total']);
					document.getElementById('gyn_recov_total').innerHTML = data.recov_total;

					$('#gyn_impro_dis').val(obj['impro_dis']);
					document.getElementById('gyn_impro_dis').innerHTML = data.impro_dis;

					$('#gyn_impro_trans').val(obj['impro_trans']);
					document.getElementById('gyn_impro_trans').innerHTML = data.impro_trans;

					$('#gyn_impro_hama').val(obj['impro_hama']);
					document.getElementById('gyn_impro_hama').innerHTML = data.impro_hama;

					$('#gyn_impro_abs').val(obj['impro_abs']);
					document.getElementById('gyn_impro_abs').innerHTML = data.impro_abs;

					$('#gyn_impro_total').val(obj['impro_total']);
					document.getElementById('gyn_impro_total').innerHTML = data.impro_total;

					$('#gyn_unimp_dis').val(obj['unimp_dis']);
					document.getElementById('gyn_unimp_dis').innerHTML = data.unimp_dis;

					$('#gyn_unimp_trans').val(obj['unimp_trans']);
					document.getElementById('gyn_unimp_trans').innerHTML = data.unimp_trans;

					$('#gyn_unimp_hama').val(obj['unimp_hama']);
					document.getElementById('gyn_unimp_hama').innerHTML = data.unimp_hama;

					$('#gyn_unimp_abs').val(obj['unimp_abs']);
					document.getElementById('gyn_unimp_abs').innerHTML = data.unimp_abs;

					$('#gyn_unimp_total').val(obj['unimp_total']);
					document.getElementById('gyn_unimp_total').innerHTML = data.unimp_total;

					$('#gyn_less_died').val(obj['less_died']);
					document.getElementById('gyn_less_died').innerHTML = data.less_died;

					$('#gyn_great_died').val(obj['great_died']);
					document.getElementById('gyn_great_died').innerHTML = data.great_died;

					$('#gyn_total_died').val(obj['tot_died']);
					document.getElementById('gyn_total_died').innerHTML = data.tot_died;

					document.getElementById('gynecology_total').innerHTML = parseInt(data.recov_total) + parseInt(data.impro_total) + parseInt(data.unimp_total) + parseInt(data.tot_died);
				} else if (data.tstype == "OBGYN") {
					//-----------------Obstetrics-----------------//
					$('#obs_recov_dis').val(obj['recov_dis']);
					document.getElementById('obs_recov_dis').innerHTML = data.recov_dis;

					$('#obs_recov_trans').val(obj['recov_trans']);
					document.getElementById('obs_recov_trans').innerHTML = data.recov_trans;

					$('#obs_recov_hama').val(obj['recov_hama']);
					document.getElementById('obs_recov_hama').innerHTML = data.recov_hama;

					$('#obs_recov_abs').val(obj['recov_abs']);
					document.getElementById('obs_recov_abs').innerHTML = data.recov_abs;

					$('#obs_recov_total').val(obj['recov_total']);
					document.getElementById('obs_recov_total').innerHTML = data.recov_total;

					$('#obs_impro_dis').val(obj['impro_dis']);
					document.getElementById('obs_impro_dis').innerHTML = data.impro_dis;

					$('#obs_impro_trans').val(obj['impro_trans']);
					document.getElementById('obs_impro_trans').innerHTML = data.impro_trans;

					$('#obs_impro_hama').val(obj['impro_hama']);
					document.getElementById('obs_impro_hama').innerHTML = data.impro_hama;

					$('#obs_impro_abs').val(obj['impro_abs']);
					document.getElementById('obs_impro_abs').innerHTML = data.impro_abs;

					$('#obs_impro_total').val(obj['impro_total']);
					document.getElementById('obs_impro_total').innerHTML = data.impro_total;

					$('#obs_unimp_dis').val(obj['unimp_dis']);
					document.getElementById('obs_unimp_dis').innerHTML = data.unimp_dis;

					$('#obs_unimp_trans').val(obj['unimp_trans']);
					document.getElementById('obs_unimp_trans').innerHTML = data.unimp_trans;

					$('#obs_unimp_hama').val(obj['unimp_hama']);
					document.getElementById('obs_unimp_hama').innerHTML = data.unimp_hama;

					$('#obs_unimp_abs').val(obj['unimp_abs']);
					document.getElementById('obs_unimp_abs').innerHTML = data.unimp_abs;

					$('#obs_unimp_total').val(obj['unimp_total']);
					document.getElementById('obs_unimp_total').innerHTML = data.unimp_total;

					$('#obs_less_died').val(obj['less_died']);
					document.getElementById('obs_less_died').innerHTML = data.less_died;

					$('#obs_great_died').val(obj['great_died']);
					document.getElementById('obs_great_died').innerHTML = data.great_died;

					$('#obs_total_died').val(obj['tot_died']);
					document.getElementById('obs_total_died').innerHTML = data.tot_died;

					document.getElementById('obstetrics_total').innerHTML = parseInt(data.recov_total) + parseInt(data.impro_total) + parseInt(data.unimp_total) + parseInt(data.tot_died);
				} else {
					end();
				}

				//recovered
				var med_recov_dis = document.getElementById('med_recov_dis').innerHTML;
				var surgi_recov_dis = document.getElementById('surgi_recov_dis').innerHTML;
				var pedia_recov_dis = document.getElementById('pedia_recov_dis').innerHTML;
				var gyn_recov_dis = document.getElementById('gyn_recov_dis').innerHTML;
				var obs_recov_dis = document.getElementById('obs_recov_dis').innerHTML;

				document.getElementById('total_recov_dis').innerHTML = parseInt(med_recov_dis) + parseInt(surgi_recov_dis) + parseInt(pedia_recov_dis) + parseInt(gyn_recov_dis) + parseInt(obs_recov_dis);

				var med_recov_trans = document.getElementById('med_recov_trans').innerHTML;
				var surgi_recov_trans = document.getElementById('surgi_recov_trans').innerHTML;
				var pedia_recov_trans = document.getElementById('pedia_recov_trans').innerHTML;
				var gyn_recov_trans = document.getElementById('gyn_recov_trans').innerHTML;
				var obs_recov_trans = document.getElementById('obs_recov_trans').innerHTML;

				document.getElementById('total_recov_trans').innerHTML = parseInt(med_recov_trans) + parseInt(surgi_recov_trans) + parseInt(pedia_recov_trans) + parseInt(gyn_recov_trans) + parseInt(obs_recov_trans);

				var med_recov_hama = document.getElementById('med_recov_hama').innerHTML;
				var surgi_recov_hama = document.getElementById('surgi_recov_hama').innerHTML;
				var pedia_recov_hama = document.getElementById('pedia_recov_hama').innerHTML;
				var gyn_recov_hama = document.getElementById('gyn_recov_hama').innerHTML;
				var obs_recov_hama = document.getElementById('obs_recov_hama').innerHTML;

				document.getElementById('total_recov_hama').innerHTML = parseInt(med_recov_hama) + parseInt(surgi_recov_hama) + parseInt(pedia_recov_hama) + parseInt(gyn_recov_hama) + parseInt(obs_recov_hama);

				var med_recov_abs = document.getElementById('med_recov_abs').innerHTML;
				var surgi_recov_abs = document.getElementById('surgi_recov_abs').innerHTML;
				var pedia_recov_abs = document.getElementById('pedia_recov_abs').innerHTML;
				var gyn_recov_abs = document.getElementById('gyn_recov_abs').innerHTML;
				var obs_recov_abs = document.getElementById('obs_recov_abs').innerHTML;

				document.getElementById('total_recov_abs').innerHTML = parseInt(med_recov_abs) + parseInt(surgi_recov_abs) + parseInt(pedia_recov_abs) + parseInt(gyn_recov_abs) + parseInt(obs_recov_abs);

				var med_recov_total = document.getElementById('med_recov_total').innerHTML;
				var surgi_recov_total = document.getElementById('surgi_recov_total').innerHTML;
				var pedia_recov_total = document.getElementById('pedia_recov_total').innerHTML;
				var gyn_recov_total = document.getElementById('gyn_recov_total').innerHTML;
				var obs_recov_total = document.getElementById('obs_recov_total').innerHTML;

				document.getElementById('total_recov_total').innerHTML = parseInt(med_recov_total) + parseInt(surgi_recov_total) + parseInt(pedia_recov_total) + parseInt(gyn_recov_total) + parseInt(obs_recov_total);

				//improved
				var med_impro_dis = document.getElementById('med_impro_dis').innerHTML;
				var surgi_impro_dis = document.getElementById('surgi_impro_dis').innerHTML;
				var pedia_impro_dis = document.getElementById('pedia_impro_dis').innerHTML;
				var gyn_impro_dis = document.getElementById('gyn_impro_dis').innerHTML;
				var obs_impro_dis = document.getElementById('obs_impro_dis').innerHTML;

				document.getElementById('total_impro_dis').innerHTML = parseInt(med_impro_dis) + parseInt(surgi_impro_dis) + parseInt(pedia_impro_dis) + parseInt(gyn_impro_dis) + parseInt(obs_impro_dis);

				var med_impro_trans = document.getElementById('med_impro_trans').innerHTML;
				var surgi_impro_trans = document.getElementById('surgi_impro_trans').innerHTML;
				var pedia_impro_trans = document.getElementById('pedia_impro_trans').innerHTML;
				var gyn_impro_trans = document.getElementById('gyn_impro_trans').innerHTML;
				var obs_impro_trans = document.getElementById('obs_impro_trans').innerHTML;

				document.getElementById('total_impro_trans').innerHTML = parseInt(med_impro_trans) + parseInt(surgi_impro_trans) + parseInt(pedia_impro_trans) + parseInt(gyn_impro_trans) + parseInt(obs_impro_trans);

				var med_impro_hama = document.getElementById('med_impro_hama').innerHTML;
				var surgi_impro_hama = document.getElementById('surgi_impro_hama').innerHTML;
				var pedia_impro_hama = document.getElementById('pedia_impro_hama').innerHTML;
				var gyn_impro_hama = document.getElementById('gyn_impro_hama').innerHTML;
				var obs_impro_hama = document.getElementById('obs_impro_hama').innerHTML;

				document.getElementById('total_impro_hama').innerHTML = parseInt(med_impro_hama) + parseInt(surgi_impro_hama) + parseInt(pedia_impro_hama) + parseInt(gyn_impro_hama) + parseInt(obs_impro_hama);

				var med_impro_abs = document.getElementById('med_impro_abs').innerHTML;
				var surgi_impro_abs = document.getElementById('surgi_impro_abs').innerHTML;
				var pedia_impro_abs = document.getElementById('pedia_impro_abs').innerHTML;
				var gyn_impro_abs = document.getElementById('gyn_impro_abs').innerHTML;
				var obs_impro_abs = document.getElementById('obs_impro_abs').innerHTML;

				document.getElementById('total_impro_abs').innerHTML = parseInt(med_impro_abs) + parseInt(surgi_impro_abs) + parseInt(pedia_impro_abs) + parseInt(gyn_impro_abs) + parseInt(obs_impro_abs);

				var med_impro_total = document.getElementById('med_impro_total').innerHTML;
				var surgi_impro_total = document.getElementById('surgi_impro_total').innerHTML;
				var pedia_impro_total = document.getElementById('pedia_impro_total').innerHTML;
				var gyn_impro_total = document.getElementById('gyn_impro_total').innerHTML;
				var obs_impro_total = document.getElementById('obs_impro_total').innerHTML;

				document.getElementById('total_impro_total').innerHTML = parseInt(med_impro_total) + parseInt(surgi_impro_total) + parseInt(pedia_impro_total) + parseInt(gyn_impro_total) + parseInt(obs_impro_total);

				//unimproved
				var med_unimp_dis = document.getElementById('med_unimp_dis').innerHTML;
				var surgi_unimp_dis = document.getElementById('surgi_unimp_dis').innerHTML;
				var pedia_unimp_dis = document.getElementById('pedia_unimp_dis').innerHTML;
				var gyn_unimp_dis = document.getElementById('gyn_unimp_dis').innerHTML;
				var obs_unimp_dis = document.getElementById('obs_unimp_dis').innerHTML;

				document.getElementById('total_unimp_dis').innerHTML = parseInt(med_unimp_dis) + parseInt(surgi_unimp_dis) + parseInt(pedia_unimp_dis) + parseInt(gyn_unimp_dis) + parseInt(obs_unimp_dis);

				var med_unimp_trans = document.getElementById('med_unimp_trans').innerHTML;
				var surgi_unimp_trans = document.getElementById('surgi_unimp_trans').innerHTML;
				var pedia_unimp_trans = document.getElementById('pedia_unimp_trans').innerHTML;
				var gyn_unimp_trans = document.getElementById('gyn_unimp_trans').innerHTML;
				var obs_unimp_trans = document.getElementById('obs_unimp_trans').innerHTML;

				document.getElementById('total_unimp_trans').innerHTML = parseInt(med_unimp_trans) + parseInt(surgi_unimp_trans) + parseInt(pedia_unimp_trans) + parseInt(gyn_unimp_trans) + parseInt(obs_unimp_trans);

				var med_unimp_hama = document.getElementById('med_unimp_hama').innerHTML;
				var surgi_unimp_hama = document.getElementById('surgi_unimp_hama').innerHTML;
				var pedia_unimp_hama = document.getElementById('pedia_unimp_hama').innerHTML;
				var gyn_unimp_hama = document.getElementById('gyn_unimp_hama').innerHTML;
				var obs_unimp_hama = document.getElementById('obs_unimp_hama').innerHTML;

				document.getElementById('total_unimp_hama').innerHTML = parseInt(med_unimp_hama) + parseInt(surgi_unimp_hama) + parseInt(pedia_unimp_hama) + parseInt(gyn_unimp_hama) + parseInt(obs_unimp_hama);

				var med_unimp_abs = document.getElementById('med_unimp_abs').innerHTML;
				var surgi_unimp_abs = document.getElementById('surgi_unimp_abs').innerHTML;
				var pedia_unimp_abs = document.getElementById('pedia_unimp_abs').innerHTML;
				var gyn_unimp_abs = document.getElementById('gyn_unimp_abs').innerHTML;
				var obs_unimp_abs = document.getElementById('obs_unimp_abs').innerHTML;

				document.getElementById('total_unimp_abs').innerHTML = parseInt(med_unimp_abs) + parseInt(surgi_unimp_abs) + parseInt(pedia_unimp_abs) + parseInt(gyn_unimp_abs) + parseInt(obs_unimp_abs);

				var med_unimp_total = document.getElementById('med_unimp_total').innerHTML;
				var surgi_unimp_total = document.getElementById('surgi_unimp_total').innerHTML;
				var pedia_unimp_total = document.getElementById('pedia_unimp_total').innerHTML;
				var gyn_unimp_total = document.getElementById('gyn_unimp_total').innerHTML;
				var obs_unimp_total = document.getElementById('obs_unimp_total').innerHTML;

				document.getElementById('total_unimp_total').innerHTML = parseInt(med_unimp_total) + parseInt(surgi_unimp_total) + parseInt(pedia_unimp_total) + parseInt(gyn_unimp_total) + parseInt(obs_unimp_total);


				//died
				var med_less_died = document.getElementById('med_less_died').innerHTML;
				var surgi_less_died = document.getElementById('surgi_less_died').innerHTML;
				var pedia_less_died = document.getElementById('pedia_less_died').innerHTML;
				var gyn_less_died = document.getElementById('gyn_less_died').innerHTML;
				var obs_less_died = document.getElementById('obs_less_died').innerHTML;

				document.getElementById('total_less_died').innerHTML = parseInt(med_less_died) + parseInt(surgi_less_died) + parseInt(pedia_less_died) + parseInt(gyn_less_died) + parseInt(obs_less_died);

				var med_great_died = document.getElementById('med_great_died').innerHTML;
				var surgi_great_died = document.getElementById('surgi_great_died').innerHTML;
				var pedia_great_died = document.getElementById('pedia_great_died').innerHTML;
				var gyn_great_died = document.getElementById('gyn_great_died').innerHTML;
				var obs_great_died = document.getElementById('obs_great_died').innerHTML;

				document.getElementById('total_great_died').innerHTML = parseInt(med_great_died) + parseInt(surgi_great_died) + parseInt(pedia_great_died) + parseInt(gyn_great_died) + parseInt(obs_great_died);

				document.getElementById('total_total_died').innerHTML = parseInt(med_less_died) + parseInt(surgi_less_died) + parseInt(pedia_less_died) + parseInt(gyn_less_died) + parseInt(obs_less_died) + parseInt(med_great_died) + parseInt(surgi_great_died) + parseInt(pedia_great_died) + parseInt(gyn_great_died) + parseInt(obs_great_died);


				//total
				var medicine_total = document.getElementById('medicine_total').innerHTML;
				var surgery_total = document.getElementById('surgery_total').innerHTML;
				var pediatrics_total = document.getElementById('pediatrics_total').innerHTML;
				var gynecology_total = document.getElementById('gynecology_total').innerHTML;
				var obstetrics_total = document.getElementById('obstetrics_total').innerHTML;

				document.getElementById('total_total').innerHTML = parseInt(medicine_total) + parseInt(surgery_total) + parseInt(pediatrics_total) + parseInt(gynecology_total) + parseInt(obstetrics_total);
			});
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}

function Discharges_Adult_Pedia(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Adult_Pedia_Treatment_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				//Adult
				document.getElementById('adult_surgi_recov_dis').innerHTML = 0;
				document.getElementById('adult_surgi_recov_trans').innerHTML = 0;
				document.getElementById('adult_surgi_recov_hama').innerHTML = 0;
				document.getElementById('adult_surgi_recov_abs').innerHTML = 0;
				document.getElementById('adult_surgi_recov_total').innerHTML = 0;
				document.getElementById('adult_surgi_impro_dis').innerHTML = 0;
				document.getElementById('adult_surgi_impro_trans').innerHTML = 0;
				document.getElementById('adult_surgi_impro_hama').innerHTML = 0;
				document.getElementById('adult_surgi_impro_abs').innerHTML = 0;
				document.getElementById('adult_surgi_impro_total').innerHTML = 0;
				document.getElementById('adult_surgi_unimp_dis').innerHTML = 0;
				document.getElementById('adult_surgi_unimp_trans').innerHTML = 0;
				document.getElementById('adult_surgi_unimp_hama').innerHTML = 0;
				document.getElementById('adult_surgi_unimp_abs').innerHTML = 0;
				document.getElementById('adult_surgi_unimp_total').innerHTML = 0;
				document.getElementById('adult_surgi_less_died').innerHTML = 0;
				document.getElementById('adult_surgi_great_died').innerHTML = 0;
				document.getElementById('adult_surgi_total_died').innerHTML = 0;
				document.getElementById('adult_total').innerHTML = 0;

				//Pedia
				document.getElementById('pedia_surgi_recov_dis').innerHTML = 0;
				document.getElementById('pedia_surgi_recov_trans').innerHTML = 0;
				document.getElementById('pedia_surgi_recov_hama').innerHTML = 0;
				document.getElementById('pedia_surgi_recov_abs').innerHTML = 0;
				document.getElementById('pedia_surgi_recov_total').innerHTML = 0;
				document.getElementById('pedia_surgi_impro_dis').innerHTML = 0;
				document.getElementById('pedia_surgi_impro_trans').innerHTML = 0;
				document.getElementById('pedia_surgi_impro_hama').innerHTML = 0;
				document.getElementById('pedia_surgi_impro_abs').innerHTML = 0;
				document.getElementById('pedia_surgi_impro_total').innerHTML = 0;
				document.getElementById('pedia_surgi_unimp_dis').innerHTML = 0;
				document.getElementById('pedia_surgi_unimp_trans').innerHTML = 0;
				document.getElementById('pedia_surgi_unimp_hama').innerHTML = 0;
				document.getElementById('pedia_surgi_unimp_abs').innerHTML = 0;
				document.getElementById('pedia_surgi_unimp_total').innerHTML = 0;
				document.getElementById('pedia_surgi_less_died').innerHTML = 0;
				document.getElementById('pedia_surgi_great_died').innerHTML = 0;
				document.getElementById('pedia_surgi_total_died').innerHTML = 0;
				document.getElementById('pedia_total').innerHTML = 0;
			} else {
				//-----------------Adult-----------------//
				$('#adult_surgi_recov_dis').val(obj['adult_recov_dis']);
				document.getElementById('adult_surgi_recov_dis').innerHTML = data.adult_recov_dis;
				$('#adult_surgi_recov_trans').val(obj['adult_recov_trans']);
				document.getElementById('adult_surgi_recov_trans').innerHTML = data.adult_recov_trans;
				$('#adult_surgi_recov_hama').val(obj['adult_recov_hama']);
				document.getElementById('adult_surgi_recov_hama').innerHTML = data.adult_recov_hama;
				$('#adult_surgi_recov_abs').val(obj['adult_recov_abs']);
				document.getElementById('adult_surgi_recov_abs').innerHTML = data.adult_recov_abs;
				$('#adult_surgi_recov_total').val(obj['adult_recov_total']);
				document.getElementById('adult_surgi_recov_total').innerHTML = data.adult_recov_total;
				$('#adult_surgi_impro_dis').val(obj['adult_impro_dis']);
				document.getElementById('adult_surgi_impro_dis').innerHTML = data.adult_impro_dis;
				$('#adult_surgi_impro_trans').val(obj['adult_impro_trans']);
				document.getElementById('adult_surgi_impro_trans').innerHTML = data.adult_impro_trans;
				$('#adult_surgi_impro_hama').val(obj['adult_impro_hama']);
				document.getElementById('adult_surgi_impro_hama').innerHTML = data.adult_impro_hama;
				$('#adult_surgi_impro_abs').val(obj['adult_impro_abs']);
				document.getElementById('adult_surgi_impro_abs').innerHTML = data.adult_impro_abs;
				$('#adult_surgi_impro_total').val(obj['adult_impro_total']);
				document.getElementById('adult_surgi_impro_total').innerHTML = data.adult_impro_total;
				$('#adult_surgi_unimp_dis').val(obj['adult_unimp_dis']);
				document.getElementById('adult_surgi_unimp_dis').innerHTML = data.adult_unimp_dis;
				$('#adult_surgi_unimp_trans').val(obj['adult_unimp_trans']);
				document.getElementById('adult_surgi_unimp_trans').innerHTML = data.adult_unimp_trans;
				$('#adult_surgi_unimp_hama').val(obj['adult_unimp_hama']);
				document.getElementById('adult_surgi_unimp_hama').innerHTML = data.adult_unimp_hama;
				$('#adult_surgi_unimp_abs').val(obj['adult_unimp_abs']);
				document.getElementById('adult_surgi_unimp_abs').innerHTML = data.adult_unimp_abs;
				$('#adult_surgi_unimp_total').val(obj['adult_unimp_total']);
				document.getElementById('adult_surgi_unimp_total').innerHTML = data.adult_unimp_total;
				$('#adult_surgi_less_died').val(obj['adult_less_died']);
				document.getElementById('adult_surgi_less_died').innerHTML = data.adult_less_died;
				$('#adult_surgi_great_died').val(obj['adult_great_died']);
				document.getElementById('adult_surgi_great_died').innerHTML = data.adult_great_died;
				$('#adult_surgi_total_died').val(obj['adult_tot_died']);
				document.getElementById('adult_surgi_total_died').innerHTML = data.adult_tot_died;

				document.getElementById('adult_total').innerHTML = parseInt(data.adult_recov_total) + parseInt(data.adult_impro_total) + parseInt(data.adult_unimp_total) + parseInt(data.adult_tot_died);

				//-----------------Pedia-----------------//
				$('#pedia_surgi_recov_dis').val(obj['pedia_recov_dis']);
				document.getElementById('pedia_surgi_recov_dis').innerHTML = data.pedia_recov_dis;
				$('#pedia_surgi_recov_trans').val(obj['pedia_recov_trans']);
				document.getElementById('pedia_surgi_recov_trans').innerHTML = data.pedia_recov_trans;
				$('#pedia_surgi_recov_hama').val(obj['pedia_recov_hama']);
				document.getElementById('pedia_surgi_recov_hama').innerHTML = data.pedia_recov_hama;
				$('#pedia_surgi_recov_abs').val(obj['pedia_recov_abs']);
				document.getElementById('pedia_surgi_recov_abs').innerHTML = data.pedia_recov_abs;
				$('#pedia_surgi_recov_total').val(obj['pedia_recov_total']);
				document.getElementById('pedia_surgi_recov_total').innerHTML = data.pedia_recov_total;
				$('#pedia_surgi_impro_dis').val(obj['pedia_impro_dis']);
				document.getElementById('pedia_surgi_impro_dis').innerHTML = data.pedia_impro_dis;
				$('#pedia_surgi_impro_trans').val(obj['pedia_impro_trans']);
				document.getElementById('pedia_surgi_impro_trans').innerHTML = data.pedia_impro_trans;
				$('#pedia_surgi_impro_hama').val(obj['pedia_impro_hama']);
				document.getElementById('pedia_surgi_impro_hama').innerHTML = data.pedia_impro_hama;
				$('#pedia_surgi_impro_abs').val(obj['pedia_impro_abs']);
				document.getElementById('pedia_surgi_impro_abs').innerHTML = data.pedia_impro_abs;
				$('#pedia_surgi_impro_total').val(obj['pedia_impro_total']);
				document.getElementById('pedia_surgi_impro_total').innerHTML = data.pedia_impro_total;
				$('#pedia_surgi_unimp_dis').val(obj['pedia_unimp_dis']);
				document.getElementById('pedia_surgi_unimp_dis').innerHTML = data.pedia_unimp_dis;
				$('#pedia_surgi_unimp_trans').val(obj['pedia_unimp_trans']);
				document.getElementById('pedia_surgi_unimp_trans').innerHTML = data.pedia_unimp_trans;
				$('#pedia_surgi_unimp_hama').val(obj['pedia_unimp_hama']);
				document.getElementById('pedia_surgi_unimp_hama').innerHTML = data.pedia_unimp_hama;
				$('#pedia_surgi_unimp_abs').val(obj['pedia_unimp_abs']);
				document.getElementById('pedia_surgi_unimp_abs').innerHTML = data.pedia_unimp_abs;
				$('#pedia_surgi_unimp_total').val(obj['pedia_unimp_total']);
				document.getElementById('pedia_surgi_unimp_total').innerHTML = data.pedia_unimp_total;
				$('#pedia_surgi_less_died').val(obj['pedia_less_died']);
				document.getElementById('pedia_surgi_less_died').innerHTML = data.pedia_less_died;
				$('#pedia_surgi_great_died').val(obj['pedia_great_died']);
				document.getElementById('pedia_surgi_great_died').innerHTML = data.pedia_great_died;
				$('#pedia_surgi_total_died').val(obj['pedia_tot_died']);
				document.getElementById('pedia_surgi_total_died').innerHTML = data.pedia_tot_died;

				document.getElementById('pedia_total').innerHTML = parseInt(data.pedia_recov_total) + parseInt(data.pedia_impro_total) + parseInt(data.pedia_unimp_total) + parseInt(data.pedia_tot_died);
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}


function Discharges_Newborn(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Newborn_Treatment_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			if (obj < 1) {
				//pathologic
				document.getElementById('pathologic_recov_dis').innerHTML = 0;
				document.getElementById('pathologic_recov_trans').innerHTML = 0;
				document.getElementById('pathologic_recov_hama').innerHTML = 0;
				document.getElementById('pathologic_recov_abs').innerHTML = 0;
				document.getElementById('pathologic_recov_total').innerHTML = 0;
				document.getElementById('pathologic_impro_dis').innerHTML = 0;
				document.getElementById('pathologic_impro_trans').innerHTML = 0;
				document.getElementById('pathologic_impro_hama').innerHTML = 0;
				document.getElementById('pathologic_impro_abs').innerHTML = 0;
				document.getElementById('pathologic_impro_total').innerHTML = 0;
				document.getElementById('pathologic_unimp_dis').innerHTML = 0;
				document.getElementById('pathologic_unimp_trans').innerHTML = 0;
				document.getElementById('pathologic_unimp_hama').innerHTML = 0;
				document.getElementById('pathologic_unimp_abs').innerHTML = 0;
				document.getElementById('pathologic_unimp_total').innerHTML = 0;
				document.getElementById('pathologic_less_died').innerHTML = 0;
				document.getElementById('pathologic_great_died').innerHTML = 0;
				document.getElementById('pathologic_total_died').innerHTML = 0;
				document.getElementById('pathologic_total').innerHTML = 0;

				//nonpathologic
				document.getElementById('nonpathologic_recov_dis').innerHTML = 0;
				document.getElementById('nonpathologic_recov_trans').innerHTML = 0;
				document.getElementById('nonpathologic_recov_hama').innerHTML = 0;
				document.getElementById('nonpathologic_recov_abs').innerHTML = 0;
				document.getElementById('nonpathologic_recov_total').innerHTML = 0;
				document.getElementById('nonpathologic_impro_dis').innerHTML = 0;
				document.getElementById('nonpathologic_impro_trans').innerHTML = 0;
				document.getElementById('nonpathologic_impro_hama').innerHTML = 0;
				document.getElementById('nonpathologic_impro_abs').innerHTML = 0;
				document.getElementById('nonpathologic_impro_total').innerHTML = 0;
				document.getElementById('nonpathologic_unimp_dis').innerHTML = 0;
				document.getElementById('nonpathologic_unimp_trans').innerHTML = 0;
				document.getElementById('nonpathologic_unimp_hama').innerHTML = 0;
				document.getElementById('nonpathologic_unimp_abs').innerHTML = 0;
				document.getElementById('nonpathologic_unimp_total').innerHTML = 0;
				document.getElementById('nonpathologic_less_died').innerHTML = 0;
				document.getElementById('nonpathologic_great_died').innerHTML = 0;
				document.getElementById('nonpathologic_total_died').innerHTML = 0;
				document.getElementById('nonpathologic_total').innerHTML = 0;

				//total
				document.getElementById('newborn_recov_dis').innerHTML = 0;
				document.getElementById('newborn_recov_trans').innerHTML = 0;
				document.getElementById('newborn_recov_hama').innerHTML = 0;
				document.getElementById('newborn_recov_abs').innerHTML = 0;
				document.getElementById('newborn_recov_total').innerHTML = 0;
				document.getElementById('newborn_impro_dis').innerHTML = 0;
				document.getElementById('newborn_impro_trans').innerHTML = 0;
				document.getElementById('newborn_impro_hama').innerHTML = 0;
				document.getElementById('newborn_impro_abs').innerHTML = 0;
				document.getElementById('newborn_impro_total').innerHTML = 0;
				document.getElementById('newborn_unimp_dis').innerHTML = 0;
				document.getElementById('newborn_unimp_trans').innerHTML = 0;
				document.getElementById('newborn_unimp_hama').innerHTML = 0;
				document.getElementById('newborn_unimp_abs').innerHTML = 0;
				document.getElementById('newborn_unimp_total').innerHTML = 0;
				document.getElementById('newborn_less_died').innerHTML = 0;
				document.getElementById('newborn_great_died').innerHTML = 0;
				document.getElementById('newborn_total_died').innerHTML = 0;
				document.getElementById('newborn_total').innerHTML = 0;
			} else {
				//-----------------pathologic-----------------//
				$('#pathologic_recov_dis').val(obj['pathologic_recov_dis']);
				document.getElementById('pathologic_recov_dis').innerHTML = data.pathologic_recov_dis;
				$('#pathologic_recov_trans').val(obj['pathologic_recov_trans']);
				document.getElementById('pathologic_recov_trans').innerHTML = data.pathologic_recov_trans;
				$('#pathologic_recov_hama').val(obj['pathologic_recov_hama']);
				document.getElementById('pathologic_recov_hama').innerHTML = data.pathologic_recov_hama;
				$('#pathologic_recov_abs').val(obj['pathologic_recov_abs']);
				document.getElementById('pathologic_recov_abs').innerHTML = data.pathologic_recov_abs;
				$('#pathologic_recov_total').val(obj['pathologic_recov_total']);
				document.getElementById('pathologic_recov_total').innerHTML = data.pathologic_recov_total;
				$('#pathologic_impro_dis').val(obj['pathologic_impro_dis']);
				document.getElementById('pathologic_impro_dis').innerHTML = data.pathologic_impro_dis;
				$('#pathologic_impro_trans').val(obj['pathologic_impro_trans']);
				document.getElementById('pathologic_impro_trans').innerHTML = data.pathologic_impro_trans;
				$('#pathologic_impro_hama').val(obj['pathologic_impro_hama']);
				document.getElementById('pathologic_impro_hama').innerHTML = data.pathologic_impro_hama;
				$('#pathologic_impro_abs').val(obj['pathologic_impro_abs']);
				document.getElementById('pathologic_impro_abs').innerHTML = data.pathologic_impro_abs;
				$('#pathologic_impro_total').val(obj['pathologic_impro_total']);
				document.getElementById('pathologic_impro_total').innerHTML = data.pathologic_impro_total;
				$('#pathologic_unimp_dis').val(obj['pathologic_unimp_dis']);
				document.getElementById('pathologic_unimp_dis').innerHTML = data.pathologic_unimp_dis;
				$('#pathologic_unimp_trans').val(obj['pathologic_unimp_trans']);
				document.getElementById('pathologic_unimp_trans').innerHTML = data.pathologic_unimp_trans;
				$('#pathologic_unimp_hama').val(obj['pathologic_unimp_hama']);
				document.getElementById('pathologic_unimp_hama').innerHTML = data.pathologic_unimp_hama;
				$('#pathologic_unimp_abs').val(obj['pathologic_unimp_abs']);
				document.getElementById('pathologic_unimp_abs').innerHTML = data.pathologic_unimp_abs;
				$('#pathologic_unimp_total').val(obj['pathologic_unimp_total']);
				document.getElementById('pathologic_unimp_total').innerHTML = data.pathologic_unimp_total;
				$('#pathologic_less_died').val(obj['pathologic_less_died']);
				document.getElementById('pathologic_less_died').innerHTML = data.pathologic_less_died;
				$('#pathologic_great_died').val(obj['pathologic_great_died']);
				document.getElementById('pathologic_great_died').innerHTML = data.pathologic_great_died;
				$('#pathologic_total_died').val(obj['pathologic_tot_died']);
				document.getElementById('pathologic_total_died').innerHTML = data.pathologic_tot_died;

				document.getElementById('pathologic_total').innerHTML = parseInt(data.pathologic_recov_total) + parseInt(data.pathologic_impro_total) + parseInt(data.pathologic_unimp_total) + parseInt(data.pathologic_tot_died);

				//-----------------nonpathologic-----------------//
				$('#nonpathologic_recov_dis').val(obj['nonpathologic_recov_dis']);
				document.getElementById('nonpathologic_recov_dis').innerHTML = data.nonpathologic_recov_dis;
				$('#nonpathologic_recov_trans').val(obj['nonpathologic_recov_trans']);
				document.getElementById('nonpathologic_recov_trans').innerHTML = data.nonpathologic_recov_trans;
				$('#nonpathologic_recov_hama').val(obj['nonpathologic_recov_hama']);
				document.getElementById('nonpathologic_recov_hama').innerHTML = data.nonpathologic_recov_hama;
				$('#nonpathologic_recov_abs').val(obj['nonpathologic_recov_abs']);
				document.getElementById('nonpathologic_recov_abs').innerHTML = data.nonpathologic_recov_abs;
				$('#nonpathologic_recov_total').val(obj['nonpathologic_recov_total']);
				document.getElementById('nonpathologic_recov_total').innerHTML = data.nonpathologic_recov_total;
				$('#nonpathologic_impro_dis').val(obj['nonpathologic_impro_dis']);
				document.getElementById('nonpathologic_impro_dis').innerHTML = data.nonpathologic_impro_dis;
				$('#nonpathologic_impro_trans').val(obj['nonpathologic_impro_trans']);
				document.getElementById('nonpathologic_impro_trans').innerHTML = data.nonpathologic_impro_trans;
				$('#nonpathologic_impro_hama').val(obj['nonpathologic_impro_hama']);
				document.getElementById('nonpathologic_impro_hama').innerHTML = data.nonpathologic_impro_hama;
				$('#nonpathologic_impro_abs').val(obj['nonpathologic_impro_abs']);
				document.getElementById('nonpathologic_impro_abs').innerHTML = data.nonpathologic_impro_abs;
				$('#nonpathologic_impro_total').val(obj['nonpathologic_impro_total']);
				document.getElementById('nonpathologic_impro_total').innerHTML = data.nonpathologic_impro_total;
				$('#nonpathologic_unimp_dis').val(obj['nonpathologic_unimp_dis']);
				document.getElementById('nonpathologic_unimp_dis').innerHTML = data.nonpathologic_unimp_dis;
				$('#nonpathologic_unimp_trans').val(obj['nonpathologic_unimp_trans']);
				document.getElementById('nonpathologic_unimp_trans').innerHTML = data.nonpathologic_unimp_trans;
				$('#nonpathologic_unimp_hama').val(obj['nonpathologic_unimp_hama']);
				document.getElementById('nonpathologic_unimp_hama').innerHTML = data.nonpathologic_unimp_hama;
				$('#nonpathologic_unimp_abs').val(obj['nonpathologic_unimp_abs']);
				document.getElementById('nonpathologic_unimp_abs').innerHTML = data.nonpathologic_unimp_abs;
				$('#nonpathologic_unimp_total').val(obj['nonpathologic_unimp_total']);
				document.getElementById('nonpathologic_unimp_total').innerHTML = data.nonpathologic_unimp_total;
				$('#nonpathologic_less_died').val(obj['nonpathologic_less_died']);
				document.getElementById('nonpathologic_less_died').innerHTML = data.nonpathologic_less_died;
				$('#nonpathologic_great_died').val(obj['nonpathologic_great_died']);
				document.getElementById('nonpathologic_great_died').innerHTML = data.nonpathologic_great_died;
				$('#nonpathologic_total_died').val(obj['nonpathologic_tot_died']);
				document.getElementById('nonpathologic_total_died').innerHTML = data.nonpathologic_tot_died;

				document.getElementById('nonpathologic_total').innerHTML = parseInt(data.nonpathologic_recov_total) + parseInt(data.nonpathologic_impro_total) + parseInt(data.nonpathologic_unimp_total) + parseInt(data.nonpathologic_tot_died);

				//-----------------total-----------------//
				document.getElementById('newborn_recov_dis').innerHTML = parseInt(data.nonpathologic_recov_dis) + parseInt(data.pathologic_recov_dis);

				document.getElementById('newborn_recov_trans').innerHTML = parseInt(data.nonpathologic_recov_trans) + parseInt(data.pathologic_recov_trans);

				document.getElementById('newborn_recov_hama').innerHTML = parseInt(data.nonpathologic_recov_hama) + parseInt(data.pathologic_recov_hama);

				document.getElementById('newborn_recov_abs').innerHTML = parseInt(data.nonpathologic_recov_abs) + parseInt(data.pathologic_recov_abs);

				document.getElementById('newborn_recov_total').innerHTML = parseInt(data.nonpathologic_recov_total) + parseInt(data.pathologic_recov_total);

				document.getElementById('newborn_impro_dis').innerHTML = parseInt(data.nonpathologic_impro_dis) + parseInt(data.pathologic_impro_dis);

				document.getElementById('newborn_impro_trans').innerHTML = parseInt(data.nonpathologic_impro_trans) + parseInt(data.pathologic_impro_trans);

				document.getElementById('newborn_impro_hama').innerHTML = parseInt(data.nonpathologic_impro_hama) + parseInt(data.pathologic_impro_hama);

				document.getElementById('newborn_impro_abs').innerHTML = parseInt(data.nonpathologic_impro_abs) + parseInt(data.pathologic_impro_abs);

				document.getElementById('newborn_impro_total').innerHTML = parseInt(data.nonpathologic_impro_total) + parseInt(data.pathologic_impro_total);

				document.getElementById('newborn_unimp_dis').innerHTML = parseInt(data.nonpathologic_unimp_dis) + parseInt(data.pathologic_unimp_dis);

				document.getElementById('newborn_unimp_trans').innerHTML = parseInt(data.nonpathologic_unimp_trans) + parseInt(data.pathologic_unimp_trans);

				document.getElementById('newborn_unimp_hama').innerHTML = parseInt(data.nonpathologic_unimp_hama) + parseInt(data.pathologic_unimp_hama);

				document.getElementById('newborn_unimp_abs').innerHTML = parseInt(data.nonpathologic_unimp_abs) + parseInt(data.pathologic_unimp_abs);

				document.getElementById('newborn_unimp_total').innerHTML = parseInt(data.nonpathologic_unimp_total) + parseInt(data.pathologic_unimp_total);

				document.getElementById('newborn_less_died').innerHTML = parseInt(data.nonpathologic_less_died) + parseInt(data.pathologic_less_died);

				document.getElementById('newborn_great_died').innerHTML = parseInt(data.nonpathologic_great_died) + parseInt(data.pathologic_great_died);

				document.getElementById('newborn_total_died').innerHTML = parseInt(data.nonpathologic_tot_died) + parseInt(data.pathologic_tot_died);

				document.getElementById('newborn_total').innerHTML = parseInt(data.nonpathologic_recov_total) + parseInt(data.nonpathologic_impro_total) + parseInt(data.nonpathologic_unimp_total) + parseInt(data.nonpathologic_tot_died) + parseInt(data.pathologic_recov_total) + parseInt(data.pathologic_impro_total) + parseInt(data.pathologic_unimp_total) + parseInt(data.pathologic_tot_died);
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching data.");
		}
	});
}
