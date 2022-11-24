var licno='';
	 function DoctorInformation(licno)
	 {	
		var data;
		var Obj = new Object();
		Obj.type="POST";
		Obj.url= baseURL+'Doctor/DoctorInformation/'+licno;
		Obj.data="JSON";
		data=Information(Obj);

		$("#empid").text(data['employeeid']);
		$("#doctorsname").text(data['name']);
		$("#sex").text(data['provsex']);
		$("#dateofbirth").text(data['provbdate']);
		$("#deptname").text(data['deptname']);
		$("#postitle").text(data['position']);
		$("#accountno").text(data['accno']);
		var picture = data['photo'];
		 if (picture === '' || picture ===undefined){
			$("#DoctorImage").prop('src', baseURL+'assets/img/avatars/none.png'); 
		 }
		 else
		 {
			$("#DoctorImage").prop('src', baseURL+picture);
		 }
	 }
	 
	 function setDoctor(licno)
	 {
		var selDoc = $('[name $="_doc"]');
		$.ajax({
			type: 'POST',
			url: baseURL+'Doctor/DoctorInformation/'+licno,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['name'], obj['licno'], true, true);
			selDoc.append(option).trigger('change');
			selDoc.trigger({
				theme:'coreui',
				type: 'select2:select',
				params: {
					data: data
				}
			});
		});
	}

	
	
	function Adm()
	{
		var data = new Object();
		data.id = "admtbl";
		data.link = baseURL+"Doctor/DoctorAdmission";
		data.type = "POST";
		data.coldef =[
			{
				targets: 0,
				visible:false,
				orderable:false,
			},
			{
				targets : [3,4],
				searchable:false,
				orderable:false,
				render: function ( data, type, row ) 
				{
					switch(data) 
					{
						case 'M' : return '<i class="fa fa-male"></i>&nbsp MALE'; break;
						case 'F' : return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
						case 'CONSU' : return '<div class="text text-success"><i class="fa fa-stethoscope"></i> CONSULTING</div>'; break;
						case 'ADMIT' : return '<div class="text text-success"><i class="fa fa-bed"></i> ADMITTING</div>'; break;
						case 'ATTEN' : return '<div class="text text-success"><i class="fa fa-door-open"></i> ATTENDING</div>'; break;
						case 'RESID' : return '<div class="text text-success"><i class="fa fa-hospial0-o"></i> RESIDENT</div>'; break;
						default  : return 'N/A';
					}
				},
			},

		];
		loadTable(data);
	}
	
	
	function Opd()
	{
		var data = new Object();
		data.id = "opdtbl";
		data.link = baseURL+"Doctor/DoctorOutpatient";
		data.type = "POST";
		data.coldef =[
			{
				targets: 0,
				visible:false,
				orderable:false,
			},
			{
				targets : [3,4],
				searchable:false,
				orderable:false,
				render: function ( data, type, row ) 
				{
					switch(data) 
					{
						case 'M' : return '<i class="fa fa-male"></i>&nbsp MALE'; break;
						case 'F' : return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
						case 'CONSU' : return '<div class="text text-success"><i class="fa fa-stethoscope"></i> CONSULTING</div>'; break;
						case 'ADMIT' : return '<div class="text text-success"><i class="fa fa-bed"></i> ADMITTING</div>'; break;
						case 'ATTEN' : return '<div class="text text-success"><i class="fa fa-door-open"></i> ATTENDING</div>'; break;
						case 'RESID' : return '<div class="text text-success"><i class="fa fa-hospial0-o"></i> RESIDENT</div>'; break;
						default  : return 'N/A';
					}
				},
			},

		];
		loadTable(data);
	}
	
	function Er()
	{
		var data = new Object();
		data.id = "ertbl";
		data.link = baseURL+"Doctor/DoctorEmergency";
		data.type = "POST";
		data.coldef =[
			{
				targets: 0,
				visible:false,
				orderable:false,
			},
			{
				targets : [3,4],
				searchable:false,
				orderable:false,
				render: function ( data, type, row ) 
				{
					switch(data) 
					{
						case 'M' : return '<i class="fa fa-male"></i>&nbsp MALE'; break;
						case 'F' : return '<i class="fa fa-female"></i>&nbsp FEMALE'; break;
						case 'CONSU' : return '<div class="text text-success"><i class="fa fa-stethoscope"></i> CONSULTING</div>'; break;
						case 'ADMIT' : return '<div class="text text-success"><i class="fa fa-bed"></i> ADMITTING</div>'; break;
						case 'ATTEN' : return '<div class="text text-success"><i class="fa fa-door-open"></i> ATTENDING</div>'; break;
						case 'RESID' : return '<div class="text text-success"><i class="fa fa-hospial0-o"></i> RESIDENT</div>'; break;
						default  : return 'N/A';
					}
				},
			},

		];
		loadTable(data);
	}	
	
	function Appointment()
	{
		let table = $("#myAppointmentTable").DataTable({
			oLanguage: {
				sProcessing:
					'<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>',
			},
			destroy: true,
			processing: true,
			columns: [
				{
					data: "appointment_date",
				},
				{
					data: "complaint",
				},
				{
					data: "slot",
				},
				{
					data: "patient_name",
				},
				{
					data: null,
					orderable: false,
					render: function (data, type, row, meta) {
					  const patient = JSON.parse(data.patient);
		  
					  return patient.sex_description;
					},
				},
				{
					data: "status",
				},
				{
					data: null,
					orderable: false,
					render: function (data, type, row, meta) {
						return (
							`<div class="btn-group  btn-ladda" btn-sm data-layout="zoom-in">
									<button type="button" class="btn btn-success btn-sm  dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
									<span class="caret"></span>
									<span class="sr-only">Toggle Dropdown</span>
									</button>
									<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu">
									<a href="javascript:void(0);" class="dropdown-item" data-appointment-id="` +
							data.appointment_id +
							`" data-type="` +
							data.type +
							`" ><i class="fa fa-check"></i>&nbsp Accept</a>
									</div>
									<button type="button" data-enccode="$1" data-percode="$2"  class="btn btn-success btn-sm   ModalPatientInformation View" ><i class="fa fa-user-circle fa-sm"></i></button>
								</div>`
						);
					},
				},
			],
			ajax: {
				url: baseURL + "appointments/doctors",
				type: "POST",
				data: { doctor: licno },
				error: function (data) {
					toastr.error(data.responseJSON.message, "Error");
				},
			},
		});
	}
	