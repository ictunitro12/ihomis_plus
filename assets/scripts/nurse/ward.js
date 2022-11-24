	$(function(){
		wardInfo(wardCode);
		$('a[data-toggle="list"]').click();
	   
	});
	
	
	$("#btnPat").on('click',function(){initWard();});
	$("#btnMed").on('click',function(){initMed();});
	$("#btnSup").on('click',function(){initWard();});
	$("#btnEquip").on('click',function(){initWard();});


	function initWard()
	{
		$("#content").load(baseURL+"Nurse/view_patients",function(){
			$("#btnPat").addClass('active'); 
			$("#btnMed").removeClass('active'); 
			$("#btnSup").removeClass('active'); 
			$("#btnEquip").removeClass('active'); 
			inpatientList(wardCode);
		});
	}

	function initMed()
	{
		$("#content").load(baseURL+"Nurse/view_med",function(){
			$("#btnPat").removeClass('active'); 
			$("#btnMed").addClass('active'); 
			$("#btnSup").removeClass('active'); 
			$("#btnEquip").removeClass('active'); 
			medicineStock(wardCode);
		});
	}

	$("#btnMed").on('click',function(){				
		$("#tableSupplies").hide();
		$("#tablePatient").hide();
		$("#tableMedicine").show();
		medicineStock(wardCode);
	});
	
	$("#btnSup").on('click',function(){		
		$("#tableSupplies").show();
		$("#tablePatient").hide();
		$("#tableMedicine").hide();
		requestList_ND();
	});
	
	function inpatientList(wardcode)
	{		
		var data = new Object();
		data.id = "patientList";
		data.link = baseURL+"MedicalRecords/admissionList/"+wardcode;
		data.type = "POST";
		data.ordering = false;
		data.search = true;
		data.paging = true;
 		data.info = true;
		data.columns=[
			{data:"date_entered"},
			{data:"hpercode"},
			{ 
				render: function(data, type, row)
				{
					return "<small>"+ row.name +"</small>";
				}
			},
			{
				targets: [4],
				searchable: false,
				orderable: false,
				render: function (data, type, row) {
				  let createdDate = moment(data);
		  
				  return createdDate.format("MM/DD/YYYY");
				},
			  },
			{
				render: function(data, type, row)
				{
					return (row.patsex == 'M' ? '<i class="fa fa-male"></i> Male' : (row.patsex == 'F' ? '<i class="fa fa-female"></i> Female' : '<div class="p-1 bg-secondary text-white">None</div>'));
				}
			},
			{data:"tsdesc"},
			{data:"admtxt"},
			{data:"room_assignment"},
			//{data:"bdname"},
				{
					data: "enccode",
					render: function(data, type, row){
					return "<div class='btn-group' role='group'><button id='btnGroupDrop1'  type='button' class='btn btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>"
					+"<i class='fa fa-th-list'></i>"
					+"</button>"
					+"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>"
					+"<a href='"+ baseURL+"PatientRecords/Records/"+btoa(data)+"/"+btoa(row.hpercode)+"'class='dropdown-item' id='btnIssuePat' data-enccode ='"+data+"' href='#'><i class='fa fa-archive'></i>&nbsp Records</a>"
					+"<a href='"+ baseURL+"DoctorsOrder/Orders/"+btoa(data)+"/"+btoa(row.hpercode)+"' class='dropdown-item' id='btnIssuePat' data-enccode ='"+data+"' href='#'><i class='fa fa-stethoscope'></i>&nbsp Orders</a>"
					+"<a href='"+ baseURL+"Nurse/labResults/"+btoa(data)+"/"+btoa(row.hpercode)+"' class='dropdown-item' id='btnIssuePat' data-enccode ='"+data+"' href='#'><i class='fa fa-flask'></i>&nbsp Results</a>"
					+"<a href='"+ baseURL+"Nurse/wardFDAR/"+btoa(data)+"/"+btoa(row.hpercode)+"' class='dropdown-item' id='btnReturn' data-enccode ='"+data+"' href='#'><i class='fa fa fa-medkit'></i>&nbsp F.D.A.R </a>"
					+"<a href='javascript:void(0);' class='dropdown-item' id='btnDischarge' data-enccode ='"+data+"' href='#'><i class='fa fa-sign-out'></i>&nbsp Discharge </a></div>"
					+"</div>";
				}	
			}];
		data.coldef = [
		{
			targets:["_all"],
			className:"align-middle"
		},
		{
			targets: [8],
			orderable: false,
		}];
		var patientList=Datatable(data);
			
	patientList.on('click','#btnDischarge',function(){
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+'Admission/InPatientInformation/'+URLencode($(this).data('enccode'));
		Obj.data = "JSON";
		var obj=  Information(Obj);
		$('#dischCasenum').text(obj['casenum']);
		$('#dischHpercode').text(obj['hpercode']);
		$('#dischPatName').text(obj['name']);
		$('#dischAge').text(obj['age']);
		$('#dischAdmDate').text(formatDate(obj['admdate']));
		$('#dischWard').text(obj['board']);
		$('#dischDate').val(getDate());
		$('#dischTime').val(getTime());
		$('#dischEnccode').val(obj['enccode']);
		$('#discHpercode').val(obj['hpercode']);
		$('#dischBed').val(obj['bdintkey']);
		$('#ModalDischargePatient').modal('show');
		loadImage(obj['hpercode']);
	});
	}
	
	function wardInfo(wardcode)
	{
		var Obj = new Object();
			Obj.type="POST";
			Obj.url=baseURL+"/Ward/wardInformation/"+wardcode;
			Obj.data="JSON";
		var data=Information(Obj);
		$('#wardname').text(data['wardname']);
		$('#roomno').text(data['wardrmno']);
		$('#wardserv').text(data['tsdesc']);
		$('#wardsex').text(data['sex']);
		
	}
	
	$('#patientList').on('click','#btnEPR',function(){
		$('#EPRModal').modal('show');
		var enctr=encodeURIComponent(encodeURIComponent(atob($(this).data('enccode'))));
		var hpercode=encodeURIComponent(encodeURIComponent(atob($(this).data('percode'))));
		var x = document.getElementById("EPR_pdf").src = baseURL+'PatientRecords/EPR/'+enctr+'/'+hpercode;
	});


