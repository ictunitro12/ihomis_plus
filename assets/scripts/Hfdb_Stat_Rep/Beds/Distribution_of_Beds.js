function Distribution_of_Beds(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Distribution_of_Beds_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;

			console.log(data);
			//Medicine
			document.getElementById('alloc_med_pay').innerHTML = 0;
			document.getElementById('alloc_med_serv').innerHTML = 0;
			document.getElementById('alloc_med_total').innerHTML = 0;
			document.getElementById('actual_nphicpay_bed').innerHTML = 0;
			document.getElementById('actual_nphicserv_bed').innerHTML = 0;
			document.getElementById('actual_phicpay_bed').innerHTML = 0;
			document.getElementById('actual_phicserv_bed').innerHTML = 0;
			document.getElementById('actual_total_pay').innerHTML = 0;
			document.getElementById('actual_total_serv').innerHTML = 0;
			document.getElementById('actual_bed_total').innerHTML = 0;
			document.getElementById('los_med').innerHTML = 0;

			//Obstetrics
			document.getElementById('alloc_obs_pay').innerHTML = 0;
			document.getElementById('alloc_obs_serv').innerHTML = 0;
			document.getElementById('alloc_obs_total').innerHTML = 0;
			document.getElementById('actual_nphicpay_bed_obs').innerHTML = 0;
			document.getElementById('actual_nphicserv_bed_obs').innerHTML = 0;
			document.getElementById('actual_phicpay_bed_obs').innerHTML = 0;
			document.getElementById('actual_phicserv_bed_obs').innerHTML = 0;
			document.getElementById('actual_total_pay_obs').innerHTML = 0;
			document.getElementById('actual_total_serv_obs').innerHTML = 0;
			document.getElementById('actual_bed_total_obs').innerHTML = 0;
			document.getElementById('los_obs').innerHTML = 0;

			//Gynecology
			document.getElementById('alloc_gyn_pay').innerHTML = 0;
			document.getElementById('alloc_gyn_serv').innerHTML = 0;
			document.getElementById('alloc_gyn_total').innerHTML = 0;
			document.getElementById('actual_nphicpay_bed_gyn').innerHTML = 0;
			document.getElementById('actual_nphicserv_bed_gyn').innerHTML = 0;
			document.getElementById('actual_phicpay_bed_gyn').innerHTML = 0;
			document.getElementById('actual_phicserv_bed_gyn').innerHTML = 0;
			document.getElementById('actual_total_pay_gyn').innerHTML = 0;
			document.getElementById('actual_total_serv_gyn').innerHTML = 0;
			document.getElementById('actual_bed_total_gyn').innerHTML = 0;
			document.getElementById('los_gyne').innerHTML = 0;

			//Pediatrics
			document.getElementById('alloc_pedia_pay').innerHTML = 0;
			document.getElementById('alloc_pedia_serv').innerHTML = 0;
			document.getElementById('alloc_pedia_total').innerHTML = 0;
			document.getElementById('actual_nphicpay_bed_pedia').innerHTML = 0;
			document.getElementById('actual_nphicserv_bed_pedia').innerHTML = 0;
			document.getElementById('actual_phicpay_bed_pedia').innerHTML = 0;
			document.getElementById('actual_phicserv_bed_pedia').innerHTML = 0;
			document.getElementById('actual_total_pay_pedia').innerHTML = 0;
			document.getElementById('actual_total_serv_pedia').innerHTML = 0;
			document.getElementById('actual_bed_total_pedia').innerHTML = 0;
			document.getElementById('los_pedia').innerHTML = 0;

			//Surgery
			document.getElementById('alloc_surgi_pay').innerHTML = 0;
			document.getElementById('alloc_surgi_serv').innerHTML = 0;
			document.getElementById('alloc_surgi_total').innerHTML = 0;
			document.getElementById('actual_nphicpay_bed_surgi').innerHTML = 0;
			document.getElementById('actual_nphicserv_bed_surgi').innerHTML = 0;
			document.getElementById('actual_phicpay_bed_surgi').innerHTML = 0;
			document.getElementById('actual_phicserv_bed_surgi').innerHTML = 0;
			document.getElementById('actual_total_pay_surgi').innerHTML = 0;
			document.getElementById('actual_total_serv_surgi').innerHTML = 0;
			document.getElementById('actual_bed_total_surgi').innerHTML = 0;
			document.getElementById('los_surgi').innerHTML = 0;

			//Adult
			document.getElementById('adult_alloc_pay').innerHTML = 0;
			document.getElementById('adult_alloc_serv').innerHTML = 0;
			document.getElementById('adult_alloc_total').innerHTML = 0;
			document.getElementById('adult_actual_nphicpay_bed').innerHTML = 0;
			document.getElementById('adult_actual_nphicserv_bed').innerHTML = 0;
			document.getElementById('adult_actual_phicpay_bed').innerHTML = 0;
			document.getElementById('adult_actual_phicserv_bed').innerHTML = 0;
			document.getElementById('adult_actual_total_pay').innerHTML = 0;
			document.getElementById('adult_actual_total_serv').innerHTML = 0;
			document.getElementById('adult_actual_bed_total').innerHTML = 0;
			document.getElementById('los_adult').innerHTML = 0;

			//Pedia
			document.getElementById('pedia_alloc_pay').innerHTML = 0;
			document.getElementById('pedia_alloc_serv').innerHTML = 0;
			document.getElementById('pedia_alloc_total').innerHTML = 0;
			document.getElementById('pedia_actual_nphicpay_bed').innerHTML = 0;
			document.getElementById('pedia_actual_nphicserv_bed').innerHTML = 0;
			document.getElementById('pedia_actual_phicpay_bed').innerHTML = 0;
			document.getElementById('pedia_actual_phicserv_bed').innerHTML = 0;
			document.getElementById('pedia_actual_total_pay').innerHTML = 0;
			document.getElementById('pedia_actual_total_serv').innerHTML = 0;
			document.getElementById('pedia_actual_bed_total').innerHTML = 0;
			document.getElementById('los_ped').innerHTML = 0;

			data.forEach(data => {
				if (data.tstype == "MEDIC") {
					//-----------------Medicine-----------------//
					document.getElementById('alloc_med_pay').innerHTML = data.Alloc_Bed_Pay;
					document.getElementById('alloc_med_serv').innerHTML = data.Alloc_Bed_Serv;
					document.getElementById('alloc_med_total').innerHTML = data.Alloc_Bed_Tot;
					document.getElementById('actual_nphicpay_bed').innerHTML = data.Actual_Bed_NphicPay;
					document.getElementById('actual_nphicserv_bed').innerHTML = data.Actual_Bed_NphicServ;
					document.getElementById('actual_phicpay_bed').innerHTML = data.Actual_Bed_PhicPay;
					document.getElementById('actual_phicserv_bed').innerHTML = data.Actual_Bed_PhicServ;
					document.getElementById('actual_total_pay').innerHTML = data.total_pay;
					document.getElementById('actual_total_serv').innerHTML = data.total_servi;
					document.getElementById('actual_bed_total').innerHTML = data.Total_Actual_Bed;
					document.getElementById('actual_bed_total').innerHTML = data.Total_Actual_Bed;
					document.getElementById('los_med').innerHTML = data.los;
				}
				else if (data.tstype == "SURGI") {
					//-----------------Surgery-----------------//
					document.getElementById('alloc_surgi_pay').innerHTML = data.Alloc_Bed_Pay;
					document.getElementById('alloc_surgi_serv').innerHTML = data.Alloc_Bed_Serv;
					document.getElementById('alloc_surgi_total').innerHTML = data.Alloc_Bed_Tot;
					document.getElementById('actual_nphicpay_bed_surgi').innerHTML = data.Actual_Bed_NphicPay;
					document.getElementById('actual_nphicserv_bed_surgi').innerHTML = data.Actual_Bed_NphicServ;
					document.getElementById('actual_phicpay_bed_surgi').innerHTML = data.Actual_Bed_PhicPay;
					document.getElementById('actual_phicserv_bed_surgi').innerHTML = data.Actual_Bed_PhicServ;
					document.getElementById('actual_total_pay_surgi').innerHTML = data.total_pay;
					document.getElementById('actual_total_serv_surgi').innerHTML = data.total_servi;
					document.getElementById('actual_bed_total_surgi').innerHTML = data.Total_Actual_Bed;
					document.getElementById('los_surgi').innerHTML = data.los;
				}else if (data.tstype == "PEDIA") {
					//-----------------Pedia-----------------//
					document.getElementById('alloc_pedia_pay').innerHTML = data.Alloc_Bed_Pay;
					document.getElementById('alloc_pedia_serv').innerHTML = data.Alloc_Bed_Serv;
					document.getElementById('alloc_pedia_total').innerHTML = data.Alloc_Bed_Tot;
					document.getElementById('actual_nphicpay_bed_pedia').innerHTML = data.Actual_Bed_NphicPay;
					document.getElementById('actual_nphicserv_bed_pedia').innerHTML = data.Actual_Bed_NphicServ;
					document.getElementById('actual_phicpay_bed_pedia').innerHTML = data.Actual_Bed_PhicPay;
					document.getElementById('actual_phicserv_bed_pedia').innerHTML = data.Actual_Bed_PhicServ;
					document.getElementById('actual_total_pay_pedia').innerHTML = data.total_pay;
					document.getElementById('actual_total_serv_pedia').innerHTML = data.total_servi;
					document.getElementById('actual_bed_total_pedia').innerHTML = data.Total_Actual_Bed;
					document.getElementById('los_pedia').innerHTML = data.los;
				} else if (data.tstype == "GYN") {
					//-----------------Gynecology-----------------//
					document.getElementById('alloc_gyn_pay').innerHTML = data.Alloc_Bed_Pay;
					document.getElementById('alloc_gyn_serv').innerHTML = data.Alloc_Bed_Serv;
					document.getElementById('alloc_gyn_total').innerHTML = data.Alloc_Bed_Tot;
					document.getElementById('actual_nphicpay_bed_gyn').innerHTML = data.Actual_Bed_NphicPay;
					document.getElementById('actual_nphicserv_bed_gyn').innerHTML = data.Actual_Bed_NphicServ;
					document.getElementById('actual_phicpay_bed_gyn').innerHTML = data.Actual_Bed_PhicPay;
					document.getElementById('actual_phicserv_bed_gyn').innerHTML = data.Actual_Bed_PhicServ;
					document.getElementById('actual_total_pay_gyn').innerHTML = data.total_pay;
					document.getElementById('actual_total_serv_gyn').innerHTML = data.total_servi;
					document.getElementById('actual_bed_total_gyn').innerHTML = data.Total_Actual_Bed;
					document.getElementById('los_gyne').innerHTML = data.los;
				} else if (data.tstype == "OBGYN") {
					//-----------------Obstetrics-----------------//
					document.getElementById('alloc_obs_pay').innerHTML = data.Alloc_Bed_Pay;
					document.getElementById('alloc_obs_serv').innerHTML = data.Alloc_Bed_Serv;
					document.getElementById('alloc_obs_total').innerHTML = data.Alloc_Bed_Tot;
					document.getElementById('actual_nphicpay_bed_obs').innerHTML = data.Actual_Bed_NphicPay;
					document.getElementById('actual_nphicserv_bed_obs').innerHTML = data.Actual_Bed_NphicServ;
					document.getElementById('actual_phicpay_bed_obs').innerHTML = data.Actual_Bed_PhicPay;
					document.getElementById('actual_phicserv_bed_obs').innerHTML = data.Actual_Bed_PhicServ;
					document.getElementById('actual_total_pay_obs').innerHTML = data.total_pay;
					document.getElementById('actual_total_serv_obs').innerHTML = data.total_servi;
					document.getElementById('actual_bed_total_obs').innerHTML = data.Total_Actual_Bed;
					document.getElementById('los_obs').innerHTML = data.los;
				}else{
					end();
				}
			});

			
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

function Beds_Adult_Pedia(year) {
	var year = $.session.get('year');
	$.ajax({
		url: baseURL + "Rep_Hfdb/Bed_Adult_Pedia_Dataload/" + year,
		type: "POST",
		dataType: "JSON",
		processData: false,
		cache: false,
		async: true,
		success: function (data, response) {
			var obj = data;
			//-----------------Adult-----------------//
			document.getElementById('adult_alloc_pay').innerHTML = 0;
			document.getElementById('adult_alloc_serv').innerHTML = 0;
			document.getElementById('adult_alloc_total').innerHTML = 0;
			document.getElementById('adult_actual_nphicpay_bed').innerHTML = 0;
			document.getElementById('adult_actual_nphicserv_bed').innerHTML = 0;
			document.getElementById('adult_actual_phicpay_bed').innerHTML = 0;
			document.getElementById('adult_actual_phicserv_bed').innerHTML = 0;
			document.getElementById('adult_actual_total_pay').innerHTML = 0;
			document.getElementById('adult_actual_total_serv').innerHTML = 0;
			document.getElementById('adult_actual_bed_total').innerHTML = 0;
			document.getElementById('los_adult').innerHTML = 0;

			//-----------------Pedia-----------------//
			document.getElementById('pedia_alloc_pay').innerHTML = 0;
			document.getElementById('pedia_alloc_serv').innerHTML = 0;
			document.getElementById('pedia_alloc_total').innerHTML = 0;
			document.getElementById('pedia_actual_nphicpay_bed').innerHTML = 0;
			document.getElementById('pedia_actual_nphicserv_bed').innerHTML = 0;
			document.getElementById('pedia_actual_phicpay_bed').innerHTML = 0;
			document.getElementById('pedia_actual_phicserv_bed').innerHTML = 0;
			document.getElementById('pedia_actual_total_pay').innerHTML = 0;
			document.getElementById('pedia_actual_total_serv').innerHTML = 0;
			document.getElementById('pedia_actual_bed_total').innerHTML = 0;
			document.getElementById('los_ped').innerHTML = 0;

			if (obj != null || obj > 0) {
				//-----------------Adult-----------------//
				$('#adult_alloc_pay').val(obj['Adult_Alloc_Bed_Pay']);
				document.getElementById('adult_alloc_pay').innerHTML = data.Adult_Alloc_Bed_Pay;
				$('#adult_alloc_serv').val(obj['Adult_Alloc_Bed_Serv']);
				document.getElementById('adult_alloc_serv').innerHTML = data.Adult_Alloc_Bed_Serv;
				$('#adult_alloc_total').val(obj['Adult_Alloc_Bed_Tot']);
				document.getElementById('adult_alloc_total').innerHTML = data.Adult_Alloc_Bed_Tot;
				$('#adult_actual_nphicpay_bed').val(obj['Adult_Actual_Bed_NphicPay']);
				document.getElementById('adult_actual_nphicpay_bed').innerHTML = data.Adult_Actual_Bed_NphicPay;
				$('#adult_actual_nphicserv_bed').val(obj['Adult_Actual_Bed_NphicServ']);
				document.getElementById('adult_actual_nphicserv_bed').innerHTML = data.Adult_Actual_Bed_NphicServ;
				$('#adult_actual_phicpay_bed').val(obj['Adult_Actual_Bed_PhicPay']);
				document.getElementById('adult_actual_phicpay_bed').innerHTML = data.Adult_Actual_Bed_PhicPay;
				$('#adult_actual_phicserv_bed').val(obj['Adult_Actual_Bed_PhicServ']);
				document.getElementById('adult_actual_phicserv_bed').innerHTML = data.Adult_Actual_Bed_PhicServ;
				$('#adult_actual_total_pay').val(obj['Adult_total_pay']);
				document.getElementById('adult_actual_total_pay').innerHTML = data.Adult_total_pay;
				$('#adult_actual_total_serv').val(obj['Adult_total_servi']);
				document.getElementById('adult_actual_total_serv').innerHTML = data.Adult_total_servi;
				$('#adult_actual_bed_total').val(obj['Adult_Total_Actual_Bed']);
				document.getElementById('adult_actual_bed_total').innerHTML = data.Adult_Total_Actual_Bed;
				$('#los_adult').val(obj['adult_los']);
				document.getElementById('los_adult').innerHTML = data.adult_los;

				//-----------------Pedia-----------------//
				$('#pedia_alloc_pay').val(obj['Pedia_Alloc_Bed_Pay']);
				document.getElementById('pedia_alloc_pay').innerHTML = data.Pedia_Alloc_Bed_Pay;
				$('#pedia_alloc_serv').val(obj['Pedia_Alloc_Bed_Serv']);
				document.getElementById('pedia_alloc_serv').innerHTML = data.Pedia_Alloc_Bed_Serv;
				$('#pedia_alloc_total').val(obj['Pedia_Alloc_Bed_Tot']);
				document.getElementById('pedia_alloc_total').innerHTML = data.Pedia_Alloc_Bed_Tot;
				$('#pedia_actual_nphicpay_bed').val(obj['Pedia_Actual_Bed_NphicPay']);
				document.getElementById('pedia_actual_nphicpay_bed').innerHTML = data.Pedia_Actual_Bed_NphicPay;
				$('#pedia_actual_nphicserv_bed').val(obj['Pedia_Actual_Bed_NphicServ']);
				document.getElementById('pedia_actual_nphicserv_bed').innerHTML = data.Pedia_Actual_Bed_NphicServ;
				$('#pedia_actual_phicpay_bed').val(obj['Pedia_Actual_Bed_PhicPay']);
				document.getElementById('pedia_actual_phicpay_bed').innerHTML = data.Pedia_Actual_Bed_PhicPay;
				$('#pedia_actual_phicserv_bed').val(obj['Pedia_Actual_Bed_PhicServ']);
				document.getElementById('pedia_actual_phicserv_bed').innerHTML = data.Pedia_Actual_Bed_PhicServ;
				$('#pedia_actual_total_pay').val(obj['Pedia_total_pay']);
				document.getElementById('pedia_actual_total_pay').innerHTML = data.Pedia_total_pay;
				$('#pedia_actual_total_serv').val(obj['Pedia_total_servi']);
				document.getElementById('pedia_actual_total_serv').innerHTML = data.Pedia_total_servi;
				$('#pedia_actual_bed_total').val(obj['Pedia_Total_Actual_Bed']);
				document.getElementById('pedia_actual_bed_total').innerHTML = data.Pedia_Total_Actual_Bed;
				$('#los_ped').val(obj['pedia_los']);
				document.getElementById('los_ped').innerHTML = data.pedia_los;
			}
		},
		error: function (response) {
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error : Fetching  data!");
		}
	});
}

