var Module=$('#module').val();


function daterangeselect()
{
	$("#DateSearch").modal();
}

$('#filter').on('click',function()
{
	var from = $("#from").val();
	var to = $("#to").val();
	$.session.set('from',from);
	$.session.set('to',to);
	$("#DateSearch").modal('hide');
	TyphoidList(from,to);
	return false;
});

/* function TyphoidList(from,to) */
function TyphoidList()
{
	var data = new Object();
	data.id = "TyphoidTable";
	/* data.link = baseURL+"Typhoid/TyphoidList/"+from+"/"+to; */
	data.link = baseURL+"Typhoid/TyphoidList";
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


$("#TyphoidTable").on("click",".ModalDeleteTyphoid",function(){
	var data = $(this).data();
	$('#DeleteTyphoid').modal('show');
	$("#formIdentification").val('delete');
	var enccode = atob(data['enccode'])
	/* var from = $.session.get('from');
	var to = $.session.get('to'); */
	$("#deletecode").val(enccode);
	/* $("#fromdatedel").val(from);
	$("#todatedel").val(to); */

});


$('#btnCSS').on('click', function (data){
	$('#ModalTyphoid').modal('show');
	/* var from = $.session.get('from');
	var to = $.session.get('to'); */
	/* $('#TyphoidPDF').html('<embed src="'+"Typhoid/TyphoidForm/"+ from + "/" + to+'" frameborder="2" width="100%" height="800px" id="TyphoidPDF">'); */
	var x = document.getElementById("TyphoidPDF");
			x.src = baseURL+"Typhoid/TyphoidForm";

});


function getTyphoid(enccode,hpercode){
	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		type: "POST",
		url: baseURL+"Typhoid/getTyphoid/"+ enccode + "/"+hpercode ,
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

function checkTyphoid(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../Typhoid/checkTyphoid/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');		
			}
			else
			{ 
				initTyphoid(enccode,hpercode);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}

function initTyphoid(enccode,hpercode)
{	
	Typhoidwizard();
	getPatientData(enccode,hpercode);
	Patient_Address(hpercode);
	CityTemp();
	SelIndig();
	$('#enccode').val(enccode);
	$('#formIden').val('insert');		
	$('#specimen_collect').val(getTimeLocale());
	
}

function initTyphoidEdit(enccode,hpercode)
{
	Typhoidwizard();
	Patient_Address(hpercode);
	getTyphoidData(enccode,hpercode);
	TyphoidAddress(hpercode);
	CityTemp();
	SelIndig();
	$('#enccode').val(enccode);
	$('#formIden').val('update');
	$("#hey").attr("disabled", true);
}


$('#consult').change(function() {
	if( $(this).val() == 'Y' ) {
		$('#FIRST').removeAttr( "disabled" );
		$('#place_consult').removeAttr( "disabled" );
		$('#onset_ill').removeAttr( "disabled" );

		$('#FIRST').val(getTimeLocale());
		$('#onset_ill').val(getTimeLocale());

	} else {       
		$('#FIRST').attr( "disabled", true );
		$('#place_consult').attr( "disabled", true );
		$('#onset_ill').attr( "disabled", true );

		$('#place_consult').val("");
		$('#FIRST').val( "0000-00-00 00:00:00");
		$('#onset_ill').val( "0000-00-00 00:00:00");
	}
});


function TyphoidPatientInfo(hpercode)
{
	var obj="";
	$.ajax({
		type: "POST",
		url: baseURL+"Typhoid/TyphoidPatientInformation/"+hpercode,
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
		url: baseURL + "Typhoid/getPatientData/"+enccode+ "/" + hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);

			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hpercode']);

			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);

			$('#admit').val(obj['admitted']);
			$('#out').val(obj['outcome']);
			$('#hospcode').val(obj['hfhudcode']);
			$('#typecode').val(obj['typeofpatient']);
			$('#sample').val(obj['newfhudcode']);
			var gender=sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");
			
			var dob= setTimeLocale(obj['patbdate']);
			var dteseen= setTimeLocale(obj['dateseen']);

			var ages= AgeCompute(dob);

			$('#info_dob').val(dob);
			$('#info_seen').val(dteseen);	

		},
		error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
}



function getTyphoidData(enccode, hpercode)
{

	var enccode = encodeURIComponent(encodeURIComponent(enccode));
	var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
	$.ajax({
		url: baseURL + "Typhoid/getTyphoidData/"+enccode+"/"+hpercode,
		type:"POST",
		data:"JSON",
		processData:false,
		cache:false,
		async:true,
		success: function(data,response){
			var obj = $.parseJSON(data);
			console.log(obj);

			setIndigenous(obj['ip_tribe']);

			$('#encountercode').val(obj['enccode']);
			$('#percode').val(obj['hpercode']);
			$('#hospcode').val(obj['hfhudcode']);
			$('#typecode').val(obj['toecode']);
			$('#admit').val(obj['admitted']);
			$('#sample').val(obj['user_id']);

			$("#consult option[value='" + obj['consulted']+"']").attr("selected","selected");
			$("#case_classif option[value='" + obj['caseclass']+"']").attr("selected","selected");
			$("#widal option[value='" + obj['widal']+"']").attr("selected","selected");
			$("#typhoidot option[value='" + obj['Typhidot']+"']").attr("selected","selected");
			$("#tube option[value='" + obj['tubex']+"']").attr("selected","selected");
			$("#stool option[value='" + obj['stblcult']+"']").attr("selected","selected");

			$('#info_fullname').val(obj['patientname']);
			$('#info_lname').val(obj['patlast']);
			$('#info_fname').val(obj['patfirst']);
			$('#info_mname').val(obj['patmiddle']);

			
			$('#out').val(obj['outcome']);
			$('#place_consult').val(obj['placeofconsultation']);

			var gender=sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");


			var dob = obj['patbdate'];
			var dateofbirth = ((dob == "1970-01-01 00:00:00") || (dob == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dob);
			var ages= AgeCompute(dateofbirth);
			$('#info_dob').val(dateofbirth);

			var dteseen = obj['dateseenconsult'];
			var dateseen = ((dteseen == "1970-01-01 00:00:00") || (dteseen == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dteseen);
			$("#info_seen").val(dateseen);

			var first = obj['dateoffirstconsult'];
			var firstcons = ((first == "1970-01-01 00:00:00") || (first == null)) ? "0000-00-00 00:00:00" : setTimeLocale(first);
			$("#FIRST").val(firstcons);


			var onset = obj['dateonset'];
			var onsetcons = ((onset == "1970-01-01 00:00:00") || (onset == null)) ? "0000-00-00 00:00:00" : setTimeLocale(onset);
			$("#onset_ill").val(onsetcons);


			var spec = obj['date_specimen_collected'];
			var speccol = ((spec == "1970-01-01 00:00:00") || (spec == null)) ? "0000-00-00 00:00:00" : setTimeLocale(spec);
			$("#specimen_collect").val(speccol);

			if (obj['consulted']=='Y') {
				$('#FIRST').removeAttr("disabled");
				$('#onset_ill').removeAttr("disabled");
				$('#place_consult').removeAttr("disabled");
			}
			else{
				$('#FIRST').attr("disabled", true);
				$('#onset_ill').attr("disabled", true);
				$('#place_consult').attr("disabled", true);
			}

		},
		error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
}

function AgeCompute(bdate)
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

		},
		error: function(data,status)
		{
			return status;
		}
	});
}

	/////start 

	function Typhoidwizard() {
		var formType = $("#formIden").val();
		_initWizardTyphoid();
		_eventWizard(formType);
		_validateWizard();
	}


	function _initWizardTyphoid() {
		var btnFinish = $('<button type="button"  disabled name ="btnDone" id="btnDone"></button>')
		.text('Done')
		.addClass('btn btn-info btn-ladda')
		.on('click', function () {

			if ($('#form-step-2').valid()) {
				
				var data = new FormData($('#form-step-1')[0]);

				var step2 = $('#form-step-2').serializeArray();
				step2.forEach((item) => {
					data.append(item.name, item.value)
				});

				console.log(data);
				$.ajax({
					type: "POST",
					url: baseURL + "Typhoid/saveTyphoid",
					data: data,
					processData: false,
					contentType: false,
					success: function (data, response) {						
						window.location.replace(baseURL + "Typhoid");
						toastr.success('Successfully Saved! ', 'Success');
					},
					error: function (xhr, desc, err) {
						toastr.error(xhr, 'Error');
					}
				});
			} else {
				return false
			}
		});

		var btnCancel = $('<button></button>').text('Reset')
		.addClass('btn btn-danger btn-ladda btn-square')
		.on('click', function () {
			$('#smartwizard')
			.smartWizard("reset");
		});

		$('#smartwizard').smartWizard({
			selected: 0,
			theme: 'circles',
			transitionEffect: 'fade',
			showStepURLhash: false,
			transitionSpeed: '1500',
			toolbarSettings:
			{
				toolbarPosition: 'top',
				toolbarExtraButtons: [btnFinish, btnCancel]
			}

		});
	}

	function _eventWizard(type) {
		$("#smartwizard").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
			if (stepPosition === 'first') {
				$('#btnDone').prop('disabled', true);
				$("#prev-btn").addClass('disabled');
				$("#prev-btn").addClass('disabled');
			}
			else if (stepPosition === 'final') {
				$("#next-btn").addClass('disabled');
				$('#btnDone').prop('disabled', false);
			}
			else {
				$("#prev-btn").removeClass('disabled');
				$("#next-btn").removeClass('disabled');
				$('#btnDone').prop('disabled', true);
			}
		});
	}

	function _validateWizard() {
		$("#smartwizard").on("leaveStep", function (e, anchorObject, stepNumber, stepDirection) {
			switch (stepNumber) {
				case 0:
				if ($('#form-step-1').valid())
				{
					return true;
				} 
				else 
				{
					return false;
				}
				break;
			}
		});
	}


