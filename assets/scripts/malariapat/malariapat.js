var Module=$('#module').val();
	
	
		$("#MalariaPatTable").on("click",".ModalDeleteMalariaPat",function(){
		var data = $(this).data();
		$('#DeleteMalariaPat').modal('show');
		$("#formIdentification").val('delete');
		var enccode = atob(data['enccode'])
		$("#deletecode").val(enccode);
		$("#fromdatedel").val($("#fromdate").val());
		$("#todatedel").val($("#todate").val());

	});


$('#btnCSS').on('click', function (data){
		$('#ModalMalariaPat').modal('show');
		$("#fromdatepdf").val($("#fromdate").val());
		$("#todatepdf").val($("#todate").val());
		$('#MalariaPatPDF').html('<embed src="'+"MalariaPat/MalariaPatForm/"+ $("#fromdatepdf").val() + "/" + $("#todatepdf").val()+'" frameborder="2" width="100%" height="800px" id="MalariaPatPDF">');
		
	});


		
		function getMalariaPat(enccode,hpercode){
			var enccode = encodeURIComponent(encodeURIComponent(enccode));
			var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
        $.ajax({
            type: "POST",
            url: baseURL+"MalariaPat/getMalariaPat/"+ enccode + "/"+hpercode ,
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

function checkMalariaPat(enccode,hpercode)
	{
		enccode= encodeURIComponent(encodeURIComponent(enccode));
		hpercode= encodeURIComponent(encodeURIComponent(hpercode));


	  $.ajax({
	  type: "POST",
	  url: "../MalariaPat/checkMalariaPat/"+enccode+ "/" + hpercode,
	  data: "JSON",
	  success: function(data)
	  { 
		if(data==1)
		{	
			toastr.warning('Patient already exist!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');		
		}
		else
		{ 
			initMalariaPat(enccode,hpercode);
		}
	 },
		error: function(data)
		{
			alert('Please Try Again!');
		}
	  });
	}


	function initMalariaPat(enccode,hpercode)
	{	
		uppercase();
		getPatientData(enccode,hpercode);
		Patient_Address(hpercode);
		CityTemp();
		SelIndig();
		$('#enccode').val(enccode);
		$('#formIden').val('insert');
		$('#FIRST').val(getTimeLocale());
		$('#onset_ill').val(getTimeLocale());
		$('#specimen_collect').val(getTimeLocale());
	}
	
	 function initMalariaPatEdit(enccode,hpercode)
	{
		uppercase();
		Patient_Address(hpercode);
		getMalariaPatData(enccode,hpercode);
		MalariaPatAddress(hpercode);
		CityTemp();
		SelIndig();
		$('#enccode').val(enccode);
		$('#formIden').val('update');
		$("#hey").attr("disabled", true);
	}

	function MalariaPatPatientInfo(hpercode)
	{
		var obj="";
		$.ajax({
		type: "POST",
		url: baseURL+"MalariaPat/MalariaPatPatientInformation/"+hpercode,
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
			url: baseURL + "MalariaPat/getPatientData/"+enccode+ "/" + hpercode,
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

			$('#admit').val(obj['admitted']);
			$('#out').val(obj['outcome']);
			$('#hospcode').val(obj['hfhudcode']);
			$('#typecode').val(obj['typeofpatient']);

			var gender=sex(obj['patsex']);
			$("#info_sex option[value='" + obj['patsex']+"']").attr("selected","selected");
			
			var dob= setTimeLocale(obj['patbdate']);
			var dteseen= setTimeLocale(obj['dateseen']);
			var ages= AgeComputation(dob);
			$('#info_dob').val(dob);
			$('#info_seen').val(dteseen);

			console.log(dteseen);

			 var str = obj['hpercode'];
			 console.log(str);
  			var res = str.slice(12, 15);
			$('#sample').val(res);
						
			},
			error: function(response){
			toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
		}});
	}
	
	
	
	function getMalariaPatData(enccode, hpercode)
	{
			
			var enccode = encodeURIComponent(encodeURIComponent(enccode));
			var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
			$.ajax({
			url: baseURL + "MalariaPat/getMalariaPatData/"+enccode+"/"+hpercode,
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
			$("#MalariaPat option[value='" + obj['Typhidot']+"']").attr("selected","selected");
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
	    	var ages= AgeComputation(dateofbirth);
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


$('#travel').change(function() {
  if( $(this).val() == 'Y') {
    $('#periodtravel').removeAttr( "disabled");
    $('#placetravel').removeAttr( "disabled");
   

  } else  {       
     $('#periodtravel').attr( "disabled", true);
     $('#placetravel').attr( "disabled", true);

     $('#periodtravel').val( "0000-00-00 00:00:00");
     $('#placetravel').val("");
  }
});

$('#malariainfect').change(function() {
  if( $(this).val() == 'Y') {
    $('#diagnos').removeAttr( "disabled");
    $('#treatout').removeAttr( "disabled");
   

  } else  {       
     $('#diagnos').attr( "disabled", true);
     $('#treatout').attr( "disabled", true);

     $('#treatout').val("");
     $('#diagnos').val("");
  }
});

$('#treatcourse').change(function() {
  if( $(this).val() == '01') {
    $('#treatcoursedate').removeAttr( "disabled");
   
  } else  {       
     $('#treatcoursedate').attr( "disabled", true);
     $('#treatcoursedate').val( "0000-00-00 00:00:00");

  }
});