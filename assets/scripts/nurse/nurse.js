	function initNurse()
	{
		
	}

	function NurseList()
		{
			var data = new Object();
			data.id = "nurseTbl";
			data.link = baseURL+"Nurse/nurseList";
			data.type = "POST";
			data.coldef =[
			{	
				targets: ["_all"],
				className:"align-middle",
			},
			{	
				targets: [2],
				searchable:false,
				orderable:false,
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'A' : return '<i class="fa fa-check text-success"></i>&nbsp <span class="text-success">Active</span>'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp <span class="text-danger">Inactive</span>'; break;
						
						default  : return 'N/A';
					}
				},
			}];
			loadTable(data);
		}
		
	
	function NurseWard(empID)
		{
			var data = new Object();
			data.id = "nurseWard";
			data.link = baseURL+"Nurse/nurseListWard/"+empID;
			data.type = "POST";
			data.coldef =[
			{	
			targets: [0,1,3],
			visible :false,
			orderable:false,
			}

			];
			loadTable(data);
		}
	
	$("#btnAddWard").on('click',function(){
		$('#modalAddward').modal('show');
		wards();
		$("#userIDRN").val($("#userIDN").val());
	});
	
	$('#nurseTbl').on('click','#btnWardAssign',function(){
		var id=$(this).data('id');
		$("#userIDN").val(id);
		NurseWard(id);
		$('#modalWard').modal('show');
	});
	
	$('#nurseWard').on('click','#btnWardRemove',function(){
		var id=$(this).data('id');
		var ward=$(this).data('wardcode');
		$("#userID").val(id);
		$("#wardCode").val(ward);
		$('#wardRemoveModal').modal('show');	
	});
	
	
	function wards()
	{
		
		$('[name $="_ward[]"]').select2({
			placeholder:'Select ward',
			allowClear: false,
			multiple: true,
			theme:'coreui',
			ajax:{
			url: baseURL+"Nurse/wardList",
			dataType: "json",
			type:"POST",
			data: function(params){
			return{
				searchWard: params.term
			};
			},
			processResults: function(data){
			var results = [];
			$.each(data, function(index, item){
			results.push({
				id:item.wardcode,
				text:item.ward
			});
			});
			return{
				results: results
			}
			}
			}
		});
		$('[name $="_ward[]"]').on('change', function() {
		$("[name $='_ward[]'] option:selected",this);
		
		});
	
	}
	
	$('#frmWard').submit('click',function(){
	$.ajax({
	type : "POST",
	url  : baseURL+"Nurse/saveNurseWard",
	data :new FormData(this),
	processData: false,
	contentType: false,
	success: function(data,response){
		$("#modalAddward").modal('hide');
		toastr.success('Ward  Successfully Added! ' ,'Success');
		NurseWard($("#userIDN").val());
	},
	error: function(xhr, desc, err){
		toastr.error('Ward  Failed to Save!' ,'Error');
	}
	});
	return false;
	});
	
	$('#frmRemoveWard').submit('click',function(){
	$.ajax({
	type : "POST",
	url  : baseURL+"Nurse/removeWard",
	data :new FormData(this),
	processData: false,
	contentType: false,
	success: function(data,response){
		$("#wardRemoveModal").modal('hide');
		toastr.success('Ward  Successfully Removed! ' ,'Success');
		NurseWard($("#userIDN").val());
	},
	error: function(xhr, desc, err){
		toastr.error('Ward  Failed to Save!' ,'Error');
	}
	});
	return false;
	});

	
	 function NurseInformation(empID)
	 {	
		var data;
		var Obj = new Object();
		Obj.type="POST";
		Obj.url= baseURL+'Nurse/NurseInformation/'+empID;
		Obj.data="JSON";
		data=Information(Obj);
		$("#empid").text(data['employeeid']);
		$("#licno").text(data['licno']);
		$("#nursename").text(data['empprefix']+'.'+data['firstname']+','+data['lastname']);
		$("#sex").text(data['provsex']);
		$("#dateofbirth").text(data['provbdate']);
		$("#deptname").text(data['deptname']);
		$("#postitle").text(data['postitle']);
		$("#accountno").text(data['accno']);
		var picture = data['photo'];
		
		 if (picture === '' || picture ===undefined){
			$("#NurseImage").prop('src', baseURL+'assets/img/avatars/none.png'); 
		 }
		 else
		 {
			$("#NurseImage").prop('src', baseURL+picture);
		 }
	 }


	
