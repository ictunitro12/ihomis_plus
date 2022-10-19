var Module=$('#module').val();

function daterangeselect()
{
	$("#DateSearch").modal();
}

$('#filter').on('click',function()
{
	var from = $("#from").val();
	var to = $("#to").val();
	$("#fromdate").val(from);
	$("#todate").val(to);

	$.session.set('from',from);
	$.session.set('to',to);
	$("#DateSearch").modal('hide');
	MalariaLabList(from,to);
	return false;
});

function MalariaLabList(from,to)
{
	var data = new Object();
	data.id = "MalariaLabTable";
	data.link = baseURL+"MalariaLab/MalariaLabList/"+from+"/"+to;
	data.type = "POST";
	data.coldef =[
	{
		targets: [0],
		visible:false,
		searchable:true,
	}
	];
	loadTable(data);
}


$("#MalariaLabTable").on("click",".ModalDeleteMalariaLab",function(){
	var data = $(this).data();
	$('#DeleteMalariaLab').modal('show');
	$("#formIdentification").val('delete');
	var enccode = atob(data['enccode'])
	$("#deletecode").val(enccode);
	$("#fromdatedel").val($("#fromdate").val());
	$("#todatedel").val($("#todate").val());

});


$('#btnCSS').on('click', function (data){

	$('#ModalMalariaLab').modal('show');
	$("#fromdatepdf").val($("#fromdate").val());
	$("#todatepdf").val($("#todate").val());
	$('#MalariaLabPDF').html('<embed src="'+"MalariaLab/MalariaLabForm/"+ $.session.get('from') + "/" + $.session.get('to')+'" frameborder="2" width="100%" height="800px" id="MalariaLabPDF">');

});



function getMalariaLab(enccode,hpercode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		type: "POST",
		url: baseURL+"MalariaLab/getMalariaLab/"+ enccode + "/"+hpercode ,
		data: "JSON",
		async:false,
		success: function(data,status){ 
			obj = $.parseJSON(data);
		},
		error: function(data,status){
		}
	});
	return obj;
}

function checkMalariaLab(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));

	$.ajax({
		type: "POST",
		url: "../MalariaLab/checkMalariaLab/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');		
			}
			else
			{ 
				initMalariaLab(enccode,hpercode);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}


function initMalariaLab(enccode,hpercode)
{	
	uppercase();
	getPatientData(enccode,hpercode);
	Patient_Address(hpercode);
	$(".daysfollow").attr("disabled", true);
	$('#enccode').val(enccode);
	$('#formIden').val('insert');
	$('#dtecollect').val(getTimeLocale());
	$('#dteexam').val(getTimeLocale());
	$('#dtereleased').val(getTimeLocale());
}

function initMalariaLabEdit(enccode,hpercode)
{
	uppercase();
	Patient_Address(hpercode);
	getMalariaLabData(enccode,hpercode);
	$(".daysfollow").attr("disabled", true);
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}

function MalariaLabPatientInfo(hpercode)
{
	var obj="";
	$.ajax({
		type: "POST",
		url: baseURL+"MalariaLab/MalariaLabPatientInformation/"+hpercode,
		data: "JSON",
		async:false,
		success: function(data)
		{
			obj = $.parseJSON(data);
		},
		error: function(data)
		{
			toastr.error('Error:'+' '+data.status+' '+data.statusText);
		}
	});
	return obj;
}

function getPatientData(enccode, hpercode)
{

	$.ajax({
		url: baseURL + "MalariaLab/getPatientData/"+enccode+ "/" + hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);
			$('#datetoday').val(getTimeLocale());			
			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hpercode']);
			$('#hospcode').val(obj['hfhudcode']);
			$('#typecode').val(obj['typeofpatient']);

			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);
			

			var gender=sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");
			
			var dob= setTimeLocale(obj['patbdate']);
			var dteseen= setTimeLocale(obj['encdate']);
			var ages= AgeComputation(dob);
			$('#info_dob').val(dob);
			$('#info_encdate').val(dteseen);
			

		},
		error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
}



function getMalariaLabData(enccode, hpercode)
{

	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		url: baseURL + "MalariaLab/getMalariaLabData/"+enccode+"/"+hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);

			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hpercode']);

			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);

			$('#info_year').val(obj['age_in_years']);
			$('#info_month').val(obj['age_in_months']);
			$('#info_day').val(obj['age_in_days']);
			$('#sliderdt').val(obj['slide_rdt_no']);
			$('#parasite_asex').val(obj['parasite_count_asexual']);
			$('#parasite_sex').val(obj['parasite_count_sexual']);
			$('#remark').val(obj['remarks']);

			$("#typedetect option[value='" + obj['detection_type']+"']").attr("selected","selected");
			$("#typeexam option[value='" + obj['examination_type']+"']").attr("selected","selected");
			$("#speciemicro option[value='" + obj['microscopy_specie']+"']").attr("selected","selected");
			$("#specierdt option[value='" + obj['rdt_specie']+"']").attr("selected","selected");
			$("#followup option[value='" + obj['follow_up']+"']").attr("selected","selected");

			var gender=sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");

			var dob = obj['patbdate'];
			var dateofbirth = ((dob == "1970-01-01 00:00:00") || (dob == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			var ages= AgeComputation(dateofbirth);
			$('#info_dob').val(dateofbirth);

			var dtecollect = obj['collection_date'];
			var datecollect = ((dtecollect == "1970-01-01 00:00:00") || (dtecollect == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dtecollect);
			$("#dtecollect").val(datecollect);

			var exam = obj['lab_exam_date'];
			var dateexam = ((exam == "1970-01-01 00:00:00") || (exam == null)) ? "0000-00-00 00:00:00" : setTimeLocale(exam);
			$("#dteexam").val(dateexam);

			var result = obj['result_date'];
			var dateresult = ((result == "1970-01-01 00:00:00") || (result == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result);
			$("#dtereleased").val(dateresult);

			var added = obj['date_added'];
			var dateadded = ((added == "1970-01-01 00:00:00") || (added == null)) ? "0000-00-00 00:00:00" : setTimeLocale(added);
			$("#datetoday").val(dateadded);

			var examtype = obj['examination_type'];
			var micro_spec = obj['microscopy_specie'];

			if(micro_spec=="1"){
				$("#parasite_sex").removeAttr("disabled");	
			}
			else{
				$("#parasite_sex").attr("disabled", true);
			}


			if (examtype == '1'){
				$("#speciemicro").removeAttr("disabled");
				$("#specierdt").attr("disabled", true);
			}
			else if(examtype =="2"){
				$("#specierdt").removeAttr("disabled");
				$("#speciemicro").attr("disabled", true);
			}
			else{
				$("#specierdt").attr("disabled", true);				
				$("#speciemicro").attr("disabled", true);
			}

			var folowup = obj['follow_up'];

			if (folowup == "Y"){
				console.log(folowup);
				$(".daysfollow").removeAttr("disabled");

				var collect_three = obj['collected_date3'];
				var daycollect_three = ((collect_three == "1970-01-01 00:00:00") || (collect_three == null)) ? "0000-00-00 00:00:00" : setTimeLocale(collect_three);
				$("#follow_dtecollect3").val(daycollect_three);

				var conduct_three = obj['conducted_date3'];
				var dayconduct_three = ((conduct_three == "1970-01-01 00:00:00") || (conduct_three == null)) ? "0000-00-00 00:00:00" : setTimeLocale(conduct_three);
				$("#follow_dteexam3").val(dayconduct_three);

				var result_three = obj['result_date3'];
				var dayresult_three = ((result_three == "1970-01-01 00:00:00") || (result_three == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result_three);
				$("#follow_dtereleased3").val(dayresult_three);

				$('#slideno3').val(obj['slide_no3']);
				$('#parasite3').val(obj['parasite_ul3']);

				var collect_seven = obj['collected_date7'];
				var daycollect_seven = ((collect_seven == "1970-01-01 00:00:00") || (collect_seven == null)) ? "0000-00-00 00:00:00" : setTimeLocale(collect_seven);
				$("#follow_dtecollect7").val(daycollect_seven);

				var conduct_seven = obj['conducted_date7'];
				var dayconduct_seven = ((conduct_seven == "1970-01-01 00:00:00") || (conduct_seven == null)) ? "0000-00-00 00:00:00" : setTimeLocale(conduct_seven);
				$("#follow_dteexam7").val(dayconduct_seven);

				var result_seven = obj['result_date7'];
				var dayresult_seven = ((result_seven == "1970-01-01 00:00:00") || (result_seven == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result_seven);
				$("#follow_dtereleased7").val(dayresult_seven);

				$('#slideno7').val(obj['slide_no7']);
				$('#parasite7').val(obj['parasite_ul7']);

				var collect_fourteen = obj['collected_date14'];
				var daycollect_fourteen = ((collect_fourteen == "19140-01-01 00:00:00") || (collect_fourteen == null)) ? "0000-00-00 00:00:00" : setTimeLocale(collect_fourteen);
				$("#follow_dtecollect14").val(daycollect_fourteen);

				var conduct_fourteen = obj['conducted_date14'];
				var dayconduct_fourteen = ((conduct_fourteen == "19140-01-01 00:00:00") || (conduct_fourteen == null)) ? "0000-00-00 00:00:00" : setTimeLocale(conduct_fourteen);
				$("#follow_dteexam14").val(dayconduct_fourteen);

				var result_fourteen = obj['result_date14'];
				var dayresult_fourteen = ((result_fourteen == "19140-01-01 00:00:00") || (result_fourteen == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result_fourteen);
				$("#follow_dtereleased14").val(dayresult_fourteen);

				$('#slideno14').val(obj['slide_no14']);
				$('#parasite14').val(obj['parasite_ul14']);

				var collect_one = obj['collected_date21'];
				var daycollect_one = ((collect_one == "19210-01-01 00:00:00") || (collect_one == null)) ? "0000-00-00 00:00:00" : setTimeLocale(collect_one);
				$("#follow_dtecollect21").val(daycollect_one);

				var conduct_one = obj['conducted_date21'];
				var dayconduct_one = ((conduct_one == "19210-01-01 00:00:00") || (conduct_one == null)) ? "0000-00-00 00:00:00" : setTimeLocale(conduct_one);
				$("#follow_dteexam21").val(dayconduct_one);

				var result_one = obj['result_date21'];
				var dayresult_one = ((result_one == "19210-01-01 00:00:00") || (result_one == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result_one);
				$("#follow_dtereleased21").val(dayresult_one);

				$('#slideno21').val(obj['slide_no21']);
				$('#parasite21').val(obj['parasite_ul21']);

				var collect_eight = obj['collected_date28'];
				var daycollect_eight = ((collect_eight == "19280-01-01 00:00:00") || (collect_eight == null)) ? "0000-00-00 00:00:00" : setTimeLocale(collect_eight);
				$("#follow_dtecollect28").val(daycollect_eight);

				var conduct_eight = obj['conducted_date28'];
				var dayconduct_eight = ((conduct_eight == "19280-01-01 00:00:00") || (conduct_eight == null)) ? "0000-00-00 00:00:00" : setTimeLocale(conduct_eight);
				$("#follow_dteexam28").val(dayconduct_eight);

				var result_eight = obj['result_date28'];
				var dayresult_eight = ((result_eight == "19280-01-01 00:00:00") || (result_eight == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result_eight);
				$("#follow_dtereleased28").val(dayresult_eight);

				$('#slideno28').val(obj['slide_no28']);
				$('#parasite28').val(obj['parasite_ul28']);



			}
			else{
				$('.daysfollow').attr("disabled", true);
			}



			

		},
		error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
}

function AgeComputation(bdate)
{ 
	$.ajax({
		type: "POST",
		url: baseURL+"Patient/AgeComp/"+bdate,
		data: "json",
		success: function(data,status)
		{ 
			var obj = $.parseJSON(data);
			$("#info_year").val(obj['year']);
			$("#info_month").val(obj['month']);
			$("#info_day").val(obj['day']);


			var result = document.getElementById('info_year').value+ " year(s), " +document.getElementById('info_month').value+ " month(s), " +document.getElementById('info_day').value+ " day(s), ";
			if (!isNaN(result)) {
				document.getElementById('info_age').value = result;
			}
			$("#info_age").val(result);
			console.log(result);

		},
		error: function(data,status)
		{
			return status;
		}
	});
}

$("#lab_micro").click(function(){
	if($(this).is(":checked")){
		$("#lab_micro").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#lab_micro").val("N");
	}
});

$("#lab_rdt").click(function(){
	if($(this).is(":checked")){
		$("#lab_rdt").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#lab_rdt").val("N");
	}
});

$("#plasma_1").click(function(){
	if($(this).is(":checked")){
		$("#plasma_1").val("Y");
		$("#parasite_sex").removeAttr("disabled");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_1").val("N");
		$("#parasite_sex").val("");
		$("#parasite_sex").attr("disabled",true);

	}
});

$("#plasma_2").click(function(){
	if($(this).is(":checked")){
		$("#plasma_2").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_2").val("N");
	}
});

$("#plasma_3").click(function(){
	if($(this).is(":checked")){
		$("#plasma_3").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_3").val("N");
	}
});


$("#plasma_4").click(function(){
	if($(this).is(":checked")){
		$("#plasma_4").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_4").val("N");
	}
});

$("#plasma_5").click(function(){
	if($(this).is(":checked")){
		$("#plasma_5").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_5").val("N");
	}
});

$("#plasma_6").click(function(){
	if($(this).is(":checked")){
		$("#plasma_6").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_6").val("N");
	}
});

$("#plasma_7").click(function(){
	if($(this).is(":checked")){
		$("#plasma_7").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_7").val("N");
	}
});

$("#plasma_8").click(function(){
	if($(this).is(":checked")){
		$("#plasma_8").val("Y");
	}
	else if($(this).is(":not(:checked)")){
		$("#plasma_8").val("N");
	}
});

$('#typeexam').change(function() {
	if( $(this).val() == '1') {
		$("#speciemicro").removeAttr("disabled");
		$("#specierdt").attr("disabled", true);
		$("#specierdt").val($("#specierdt option:first").val());
	}
	else if( $(this).val() == '2') {
		$("#specierdt").removeAttr("disabled");
		$("#speciemicro").attr("disabled", true);
		$("#speciemicro").val($("#speciemicro option:first").val());
	}
	else {       
		$("#speciemicro").attr("disabled", true);
		$("#specierdt").attr("disabled", true);
	}
});

$('#speciemicro').change(function() {
	if( $(this).val() == '1') {
		$("#parasite_sex").removeAttr("disabled");
	} else {       
		$("#parasite_sex").attr("disabled", true);
		$("#parasite_sex").val("");
	}
});

$('#followup').change(function() {
	if( $(this).val() == 'Y') {
		$(".daysfollow").removeAttr("disabled");
		$("#follow_dtecollect3").val(getTimeLocale());
		$("#follow_dteexam3").val(getTimeLocale());
		$("#follow_dtereleased3").val(getTimeLocale());

		let numWeeks = 1;
		let now = new Date();
		let fornow = new Date();
		let onenow = new Date();
		let eightnow = new Date();
		now.setDate(now.getDate() + numWeeks * 7);
		fornow.setDate(fornow.getDate() + numWeeks * 14);
		onenow.setDate(onenow.getDate() + numWeeks * 21);
		eightnow.setDate(eightnow.getDate() + numWeeks * 28);

		var week = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
		var fourweek = new Date(fornow.getTime()-fornow.getTimezoneOffset()*60000).toISOString().substring(0,19);
		var twentyweek = new Date(onenow.getTime()-onenow.getTimezoneOffset()*60000).toISOString().substring(0,19);
		var eightweek = new Date(eightnow.getTime()-eightnow.getTimezoneOffset()*60000).toISOString().substring(0,19);
		console.log(week);

		$("#follow_dtecollect7").val(week);
		$("#follow_dteexam7").val(week);
		$("#follow_dtereleased7").val(week);

		$("#follow_dtecollect14").val(fourweek);
		$("#follow_dteexam14").val(fourweek);
		$("#follow_dtereleased14").val(fourweek);

		$("#follow_dtecollect21").val(twentyweek);
		$("#follow_dteexam21").val(twentyweek);
		$("#follow_dtereleased21").val(twentyweek);

		$("#follow_dtecollect28").val(eightweek);
		$("#follow_dteexam28").val(eightweek);
		$("#follow_dtereleased28").val(eightweek);
	}
	else {       
		$(".daysfollow").attr("disabled", true);
		$(".daysfollow").val("");
	}
});
