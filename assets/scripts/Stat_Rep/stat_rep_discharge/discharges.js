var baseURL = $('#base_url').val();
function Inpatient(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Statistical/InpatientCare_Dataload/" + year,
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
				document.getElementById('totpatadmdis').innerHTML = 0;
				document.getElementById('totnuminpatserv').innerHTML = 0;
				document.getElementById('totnumfac').innerHTML = 0;
				document.getElementById('totnumanthfac').innerHTML = 0;
				document.getElementById('totnumprevyear').innerHTML = 0;

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
				$('#no_phic_servitotal').val(obj['no_med_phic_servitotal']);
				$('#medic_recov').val(obj['med_recov']);
				$('#no_obstet_nphic_paytotal').val(obj['no_obs_nphic_paytotal']);
				$('#no_obstet_nphic_servitotal').val(obj['no_obs_nphic_servitotal']);
				$('#no_obstet_phic_paytotal').val(obj['no_obs_phic_paytotal']);
				$('#no_obstet_phic_servitotal').val(obj['no_obs_phic_servitotal']);
				$('#obstet_recov').val(obj['obs_recov']);
				$('#no_gyne_nphic_paytotal').val(obj['no_gyn_nphic_paytotal']);
				$('#no_gyne_nphic_servitotal').val(obj['no_gyn_nphic_servitotal']);
				$('#no_gyne_phic_paytotal').val(obj['no_gyn_phic_paytotal']);
				$('#no_gyne_phic_servitotal').val(obj['no_gyn_phic_servitotal']);
				$('#gyne_recov').val(obj['gyn_recov']);
				$('#no_pediatrics_nphic_paytotal').val(obj['no_pedia_nphic_paytotal']);
				$('#no_pediatrics_nphic_servitotal').val(obj['no_pedia_nphic_servitotal']);
				$('#no_pediatrics_phic_paytotal').val(obj['no_pedia_phic_paytotal']);
				$('#no_pediatrics_phic_servitotal').val(obj['no_pedia_phic_servitotal']);
				$('#pediatrics_recov').val(obj['pedia_recov']);
				$('#no_surpedia_nphic_paytotal').val(obj['no_surped_nphic_paytotal']);
				$('#no_surpedia_nphic_servitotal').val(obj['no_surped_nphic_servitotal']);
				$('#no_surpedia_phic_paytotal').val(obj['no_surped_phic_paytotal']);
				$('#no_surpedia_phic_servitotal').val(obj['no_surped_phic_servitotal']);
				$('#surpedia_recov').val(obj['surped_recov']);
				$('#no_suradus_nphic_paytotal').val(obj['no_suradu_nphic_paytotal']);
				$('#no_suradus_nphic_servitotal').val(obj['no_suradu_nphic_servitotal']);
				$('#no_suradus_phic_paytotal').val(obj['no_suradu_phic_paytotal']);
				$('#no_suradus_phic_servitotal').val(obj['no_suradu_phic_servitotal']);
				$('#suradus_recov').val(obj['suradu_recov']);
				$('#los_pathology').val(obj['los_patho']);
				$('#los_unpathology').val(obj['los_unpatho']);
				$('#no_pathology_nphic_paytotal').val(obj['no_patho_nphic_paytotal']);
				$('#no_unpathology_nphic_paytotal').val(obj['no_unpatho_nphic_paytotal']);
				$('#no_pathology_nphic_servitotal').val(obj['no_patho_nphic_servitotal']);
				$('#no_unpathology_nphic_servitotal').val(obj['no_unpatho_nphic_servitotal']);
				$('#no_pathology_phic_paytotal').val(obj['no_patho_phic_paytotal']);
				$('#no_unpathology_phic_paytotal').val(obj['no_unpatho_phic_paytotal']);
				$('#no_pathology_phic_servitotal').val(obj['no_patho_phic_servitotal']);
				$('#no_unpathology_phic_servitotal').val(obj['no_unpatho_phic_servitotal']);
				$('#pathology_recov').val(obj['patho_recov']);
				$('#unpathology_recov').val(obj['unpatho_recov']);
				$('#pathology_a_d').val(obj['patho_a_d']);
				$('#unpathology_a_d').val(obj['unpatho_a_d']);
				$('#pathology_b_d').val(obj['patho_b_d']);
				$('#unpathology_b_d').val(obj['unpatho_a_d']);
				$('#totpatadmdis').val(obj['totsameday']);
				$('#totnumprevyear').val(obj['totprevyear']);

				var totpatadmdis_a = document.getElementById('totpatadmdis').value;
				var totnumprevyear_a = document.getElementById('totnumprevyear').value;

				var pathology_b_d_a = document.getElementById('pathology_b_d').value;
				var unpathology_b_d_a = document.getElementById('unpathology_b_d').value;
				var pathology_a_d_a = document.getElementById('pathology_a_d').value;
				var unpathology_a_d_a = document.getElementById('unpathology_a_d').value;
				var patho_recov_a = document.getElementById('pathology_recov').value;
				var unpatho_recov_a = document.getElementById('unpathology_recov').value;
				var no_patho_phic_servitotal_a = document.getElementById('no_pathology_phic_servitotal').value;
				var no_unpatho_phic_servitotal_a = document.getElementById('no_unpathology_phic_servitotal').value;
				var no_patho_phic_paytotal_a = document.getElementById('no_pathology_phic_paytotal').value;
				var no_unpatho_phic_paytotal_a = document.getElementById('no_unpathology_phic_paytotal').value;
				var no_patho_nphic_servitotal_a = document.getElementById('no_pathology_nphic_servitotal').value;
				var no_unpatho_nphic_servitotal_a = document.getElementById('no_unpathology_nphic_servitotal').value;
				var no_patho_nphic_paytotal_a = document.getElementById('no_pathology_nphic_paytotal').value;
				var no_unpatho_nphic_paytotal_a = document.getElementById('no_unpathology_nphic_paytotal').value;
				var los_patho_a = document.getElementById('los_pathology').value;
				var los_unpatho_a = document.getElementById('los_unpathology').value;
				var suradu_recov_a = document.getElementById('suradus_recov').value;
				var no_suradu_phic_servitotal_a = document.getElementById('no_suradus_phic_servitotal').value;
				var no_suradu_phic_paytotal_a = document.getElementById('no_suradus_phic_paytotal').value;
				var no_suradu_nphic_servitotal_a = document.getElementById('no_suradus_nphic_servitotal').value;
				var no_suradu_nphic_paytotal_a = document.getElementById('no_suradus_nphic_paytotal').value;
				var surped_recov_a = document.getElementById('surpedia_recov').value;
				var no_surped_phic_servitotal_a = document.getElementById('no_surpedia_phic_servitotal').value;
				var no_surped_phic_paytotal_a = document.getElementById('no_surpedia_phic_paytotal').value;
				var no_surped_nphic_servitotal_a = document.getElementById('no_surpedia_nphic_servitotal').value;
				var no_surped_nphic_paytotal_a = document.getElementById('no_surpedia_nphic_paytotal').value;
				var pedia_recov_a = document.getElementById('pediatrics_recov').value;
				var no_pedia_phic_servitotal_a = document.getElementById('no_pediatrics_phic_servitotal').value;
				var no_pedia_phic_paytotal_a = document.getElementById('no_pediatrics_phic_paytotal').value;
				var no_pedia_nphic_servitotal_a = document.getElementById('no_pediatrics_nphic_servitotal').value;
				var no_pedia_nphic_paytotal_a = document.getElementById('no_pediatrics_nphic_paytotal').value;
				var gyn_recov_a = document.getElementById('gyne_recov').value;
				var no_gyn_phic_servitotal_a = document.getElementById('no_gyne_phic_servitotal').value;
				var no_gyn_phic_paytotal_a = document.getElementById('no_gyne_phic_paytotal').value;
				var no_gyn_nphic_servitotal_a = document.getElementById('no_gyne_nphic_servitotal').value;
				var no_gyn_nphic_paytotal_a = document.getElementById('no_gyne_nphic_paytotal').value;
				var obs_recov_a = document.getElementById('obstet_recov').value;
				var no_obs_phic_servitotal_a = document.getElementById('no_obstet_phic_servitotal').value;
				var no_obs_phic_paytotal_a = document.getElementById('no_obstet_phic_paytotal').value;
				var no_obs_nphic_servitotal_a = document.getElementById('no_obstet_nphic_servitotal').value;
				var no_obs_nphic_paytotal_a = document.getElementById('no_obstet_nphic_paytotal').value;
				var med_recov_a = document.getElementById('medic_recov').value;
				var no_med_phic_servitotal_a = document.getElementById('no_phic_servitotal').value;
				var no_med_phic_paytotal_a = document.getElementById('no_phic_paytotal').value;
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
				var total_p_serv = parseInt(no_med_phic_servitotal_a) + parseInt(no_obs_phic_servitotal_a) + parseInt(no_gyn_phic_servitotal_a) + parseInt(no_pedia_phic_servitotal_a) + parseInt(no_surped_phic_servitotal_a) + parseInt(no_suradu_phic_servitotal_a);
				if (!isNaN(total_p_serv)) {
					document.getElementById('total_p_servs').value = total_p_serv;
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
				var total_nb_total_np_a = parseInt(total_nb_np_pay) + parseInt(total_nb_np_ser);
				if (!isNaN(total_nb_total_np_a)) {
					document.getElementById('tot_nb_total_np').value = total_nb_total_np_a;
				}
				var total_nb_phic_pay_a = parseInt(no_patho_phic_paytotal_a) + parseInt(no_unpatho_phic_paytotal_a);
				if (!isNaN(total_nb_phic_pay_a)) {
					document.getElementById('tot_nb_phic_pay').value = total_nb_phic_pay_a;
				}
				var total_nb_phic_serv_a = parseInt(no_patho_phic_servitotal_a) + parseInt(no_unpatho_phic_servitotal_a);
				if (!isNaN(total_nb_phic_serv_a)) {
					document.getElementById('tot_nb_phic_serv').value = total_nb_phic_serv_a;
				}
				var total_nb_total_phic_a = parseInt(total_nb_phic_pay_a) + parseInt(total_nb_phic_serv_a);
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
				document.getElementById('no_pathology_phic_servitotal').innerHTML = no_patho_phic_servitotal_a;
				document.getElementById('no_unpathology_phic_servitotal').innerHTML = no_unpatho_phic_servitotal_a;
				document.getElementById('tot_nb_phic_pay').innerHTML = total_nb_phic_pay_a;
				document.getElementById('no_pathology_phic_paytotal').innerHTML = no_patho_phic_paytotal_a;
				document.getElementById('no_unpathology_phic_paytotal').innerHTML = no_unpatho_phic_paytotal_a;
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
				document.getElementById('total_p_pays').innerHTML = total_p_pay;
				document.getElementById('total_np_totals').innerHTML = total_np_total;
				document.getElementById('total_np_servs').innerHTML = total_np_serv;
				document.getElementById('total_np_pays').innerHTML = total_np_pay;
				document.getElementById('suradus_recov').innerHTML = suradu_recov_a;
				document.getElementById('tot_suradus_phic').innerHTML = tot_suradu_phic;
				document.getElementById('no_suradus_phic_servitotal').innerHTML = no_suradu_phic_servitotal_a;
				document.getElementById('no_suradus_phic_paytotal').innerHTML = no_suradu_phic_paytotal_a;
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
				document.getElementById('no_surpedia_phic_paytotal').innerHTML = no_surped_phic_paytotal_a;
				document.getElementById('tot_surpedia_nphic').innerHTML = tot_surped_nphic;
				document.getElementById('no_surpedia_nphic_servitotal').innerHTML = no_surped_nphic_servitotal_a;
				document.getElementById('no_surpedia_nphic_paytotal').innerHTML = no_surped_nphic_paytotal_a;
				document.getElementById('los_surpedia').innerHTML = los_surped_a;
				document.getElementById('total_surpedia').innerHTML = total_surped;
				document.getElementById('total_surpedias').innerHTML = total_surped;
				document.getElementById('tot_pediatrics_phic').innerHTML = tot_pedia_phic;
				document.getElementById('no_pediatrics_phic_servitotal').innerHTML = no_pedia_phic_servitotal_a;
				document.getElementById('no_pediatrics_phic_paytotal').innerHTML = no_pedia_phic_paytotal_a;
				document.getElementById('tot_pediatrics_nphic').innerHTML = tot_pedia_nphic;
				document.getElementById('no_pediatrics_nphic_servitotal').innerHTML = no_pedia_nphic_servitotal_a;
				document.getElementById('no_pediatrics_nphic_paytotal').innerHTML = no_pedia_nphic_paytotal_a;
				document.getElementById('los_pediatrics').innerHTML = los_pedia_a;
				document.getElementById('total_pediatric').innerHTML = total_pedia;
				document.getElementById('total_pediatrics').innerHTML = total_pedia;
				document.getElementById('gyne_recov').innerHTML = gyn_recov_a;
				document.getElementById('tot_gyne_phic').innerHTML = tot_gyn_phic;
				document.getElementById('no_gyne_phic_servitotal').innerHTML = no_gyn_phic_servitotal_a;
				document.getElementById('no_gyne_phic_paytotal').innerHTML = no_gyn_phic_paytotal_a;
				document.getElementById('tot_gyne_nphic').innerHTML = tot_gyn_nphic;
				document.getElementById('no_gyne_nphic_servitotal').innerHTML = no_gyn_nphic_servitotal_a;
				document.getElementById('no_gyne_nphic_paytotal').innerHTML = no_gyn_nphic_paytotal_a;
				document.getElementById('los_gyne').innerHTML = los_gyn_a;
				document.getElementById('total_gyne').innerHTML = total_gyn;
				document.getElementById('total_gynes').innerHTML = total_gyn;
				document.getElementById('obstet_recov').innerHTML = obs_recov_a;
				document.getElementById('tot_obstet_phic').innerHTML = tot_obs_phic;
				document.getElementById('no_obstet_phic_servitotal').innerHTML = no_obs_phic_servitotal_a;
				document.getElementById('no_obstet_phic_paytotal').innerHTML = no_obs_phic_paytotal_a;
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
				document.getElementById('no_phic_paytotal').innerHTML = no_med_phic_paytotal_a;
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
				document.getElementById('totpatadmdis').innerHTML = totpatadmdis_a;
				document.getElementById('totnumprevyear').innerHTML = totnumprevyear_a;

			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}