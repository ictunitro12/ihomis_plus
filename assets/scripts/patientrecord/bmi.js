	/*
	function name :  BMI
	param : str|enccode 
	description :generate list of Body Mass Index
	*/
function bmiList(enccode)
	{
	var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "BMIlist";
		data.link = baseURL+"PatientRecords/BMIList/"+enctr;
		data.type = "POST";
		data.coldef =[
						{
                        "orderable": false, 
                        "targets": [0,1], 
                        "searchable":false,
                        "visible": false
						},
						{	
						targets : 6,
						searchable:false,
							render: function ( data, type, row ) 
							{
								switch(data) 
								{
									case 'UND' : return '<div class="text-primary">UNDERWEIGHT</span>'; break;
									case 'NOR' : return '<div class="text-success">NORMALWEIGHT</span>'; break;
									case 'OVE' : return '<div class="text-warning">OVERWEIGHT</span>'; break;
									case 'OBE' : return '<div class="text-danger">OBESITY CLASS I</span>'; break;
									case 'OBEII' : return '<div class="text-danger">OBESITY CLASS II</span>'; break;
									case 'OBEIII' : return '<div class="text-danger">OBESITY CLASS III</span>'; break;
								
									default  : return '<div class="text-default"></span>';
								}
							},
						},
					];
		loadTable(data);
	}
	
	$('#BMIlist').on('click','#btnEditHw',function(){
		$('#hwModal').modal('show');
		var enccode=atob($(this).data('enccode'));
		var datelog=atob($(this).data('datelog'));
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var log = encodeURIComponent(encodeURIComponent(datelog));
		$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/bmiInfo/"+enctr+'/'+log,
		data: "JSON",
		async:false,
		success: function(data)
		{
	
			var now= new Date();
			obj = $.parseJSON(data);
			var dateLog=new Date(obj['othrdte']);
			var val =new Date(dateLog.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
			$('#hwformIden').val('update');
			$('#hwDateLog').val(val);
			$('#hwEnccode').val(obj['enccode']);
			$('#hwHpercode').val(obj['hpercode']);
			$('#hwBMI').val(obj['vsbmi']);
			$('#hwHeight').val(obj['vsheight']);
			$('#hwWeight').val(obj['vsweight']);
			_BMI(obj['vsbmi']);
		},
		error: function(data)
		{
			alert("Error: Fetching Patient BMI!");
		}
		});
	});
	
	function calculateBMI()
	{
		var weight =parseFloat($("#hwWeight").val());
		var height =parseFloat($("#hwHeight").val());
		
		var totHeight = (parseFloat(height *  0.01 ) * parseFloat(height *  0.01));
		
		var totWeight  = weight / totHeight;
		
		var BMI =totWeight.toFixed(2);
		_BMI(BMI);
		$("#hwBMI").val(BMI);

		var wais =parseFloat($("#hwWaist").val());
		womenWaist(wais);
	}

	function calculate_BMI()
	{
		var weight =parseFloat($("#hwWeight").val());
		var height =parseFloat($("#hwHeight").val());
				
		var totHeight = (parseFloat(height) * parseFloat(height));		
		var totWeight  = weight / totHeight;
		
		var BMI =totWeight.toFixed(2);
		_BMI(BMI);
		$("#hwBMI").val(BMI);

		var wais =parseFloat($("#hwWaist").val());
		womenWaist(wais);
	}
	
	function _BMI(n)
	{
		if(n < 18.5)
		{
			$("#bmiclass").text("Underweight").addClass("text-danger");
			$("#bmicat").val("UND");
			$("#classbmi").val("Underweight");
		}else if( (n <= 18.5) || (n <= 24.9)){
			$("#bmiclass").text("Normal weight").addClass("text-success");
			$("#bmicat").val("NOR");
			$("#classbmi").val("Normal weight");
		}else if( (n <= 25.0) || (n <= 29.9)){
			$("#bmiclass").text("Overweight").addClass("text-danger");
			$("#bmicat").val("OVER");
			$("#classbmi").val("Overweight");

		}else if( (n <= 30.0) || (n <= 34.9)){
			$("#bmiclass").text("Class I obesity").addClass("text-danger");
			$("#bmicat").val("OBE");
			$("#classbmi").val("Class I obesity");

		}else if( (n <= 35.0) || (n <= 39.9)){
			$("#bmiclass").text("Class II obesity").addClass("text-danger");
			$("#bmicat").val("OBEII");
			$("#classbmi").val("Class II obesity");

		}else if( (n >= 40.0)){
			$("#bmiclass").text("Class III obesity").addClass("text-danger");
			$("#bmicat").val("OBEIII");
			$("#classbmi").val("Class III obesity");

		}else{
			$("#bmicat").val("");
		}
			
	}

	function menWaist(n)
	{
		if(n < 40 )
		{
			$("#classwaist").val("Normal");
		}else{
			$("#classwaist").val("");
		}
			
	}

	function womenWaist(n)
	{
		if(n < 35 )
		{
			$("#classwaist").val("Normal");
		}else{
			$("#classwaist").val("");
		}
			
	}


$('#frmhW').validate({
submitHandler: function (form) {
var  POSTURL = baseURL+"PatientRecords/saveBMI";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#hwformIden').val()=='insert'){
					$("#hwModal").modal('hide');
					formReset($('#frmhW'));
					toastr.success('Body Mass Index Successfully Saved! ' ,'Success');
					bmiList(enccode);
				}else if($('#hwformIden').val()=='update'){
					toastr.success('Body Mass Index Successfully Saved!' ,'Success');
					$("#hwModal").modal('hide');
					bmiList(enccode);
				}else if($('#hwformIdenDelete').val()=='delete'){
					
				}else{
					toastr.error('no post','data');
				}

			},
			error: function(data,xhr,text){
			
				toastr.error(data,'data');
				toastr.error(xhr,'xhr');
				toastr.error(text,'text');
			}
			});
		return false;
	 $(form).submit();
   },
  rules: {
    hwDateLog:'required',
    hwHeight:'required',
    hwWeight:'required',
   
  },	
  messages: {
	hwDateLog: 'Enter Date log!',
	hwHeight: 'Enter Height!',
	hwWeight: 'Enter Weight',
  },
  errorElement: 'span',
  errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');
      error.insertAfter(element);
    
  },

  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2-offscreen'))
	  {
		  element=$("#s2id_" + element.attr("id") + " ul").parent();
		$(element).addClass('is-invalid').removeClass('is-valid');
      }
  },
  
  unhighlight: function unhighlight(element) {
    $(element).addClass('is-valid').removeClass('is-invalid');
	if( $(element).hasClass('select2-offscreen'))
	  {
		 $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
      }
  } 
   });
   
   function addHW(enccode,hpercode)
	{
		 $('#hwModal').modal('show');	
		 $('#hwformIden').val("insert");
		 $('#hwDateLog').val(getTimeLocale());
		 $('#hwEnccode').val(atob(enccode));	 
		 $('#hwHpercode').val(atob(hpercode));	
		 $("#bmicat").val("");		 
		 $("#bmiclass").text("");		 
	}

	function bmi(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		$.ajax({
		type: "POST",
		url: baseURL+"PatientRecords/bmiinformation/"+enctr,
		data: "JSON",
		async:false,
		success: function(data)
		{
			var now= new Date();
			obj = $.parseJSON(data);

			if (obj !== null) {

				var dateLog=new Date(obj['othrdte']);
				var val =new Date(dateLog.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
				$('#hwformIden').val('update');
				$('#hwDateLog').val(val);
				$('#hwEnccode').val(obj['enccode']);
				$('#hwHpercode').val(obj['hpercode']);
				$('#hwBMI').val(obj['vsbmi']);
				$('#hwHeight').val(obj['vsheight']);
				$('#hwWeight').val(obj['vsweight']);
				_BMI(obj['vsbmi']);
			}
		},
		error: function(data)
		{
			alert("Error: Fetching Patient BMI!");
		}
		});
	}
	
	$('#BMIlist').on('click','#btnDeleteHw',function(){
		
		var enccode=atob($(this).data('enccode'));
		var datelog=atob($(this).data('datelog'));
		
		var now= new Date();
		var LogDate=new Date(datelog);
		var val =new Date(LogDate.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
		
		$("#deleteBMIModal").modal('show');
		$("#delBMIenccode").val(enccode);
		$("#delBMIdatelog").val(val);
		$("#hwformIdenDelete").val("delete");
	});
	
	$('#frmDeleteBMI').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"PatientRecords/saveBMI",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#deleteBMIModal').modal('hide');
			toastr.success('Successfully Deleted! ' ,'Success');
			bmiList(enccode);
		},
	
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 
	
	