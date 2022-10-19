
	$(document).ready(function(){
		$("#frmAddRoom").validate({
			rules:{
				addRoom_datetime: {
					required : true,
					step: false
				}
			},
			messages:{	
				addRoom_datetime: "Date and Time is required!"
			},
			validClass: "is-valid",
			errorClass: "is-invalid",
			errorElement: "div",
			errorPlacement: function(error,element){
				error.addClass("invalid-feedback");
				error.insertAfter(element);
			}
		});

		$("#frmTransferRoom").validate({
			rules:{
				tran_datetime: {
					required : true,
					step: false
				}
			},
			messages:{	
				tran_datetime: "Date and Time is required!"
			},
			validClass: "is-valid",
			errorClass: "is-invalid",
			errorElement: "div",
			errorPlacement: function(error,element){
				error.addClass("invalid-feedback");
				error.insertAfter(element);
			}
		});
	});

	$('#btnTransferRoom').on('click', function (e){
		$('#modalTransfer').modal({backdrop:'static',show:true});
		var now = new Date();
		now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
		$("#tran_datetime").val(now.toISOString().slice(0,16));
		 $("#bedlist").load(baseURL+"Ref_Ward/view_vacant",function(){
			vacantlist($('#patRoomSex').val());
				$("#rmEnccode").val(getCookie('enccode'));
				$("#rmHpercode").val(getCookie('hpercode'));
				$("#patRoomSex").val(getCookie('sex'));
				$("#patOldBed").val(getCookie('bed'));
		 }); 
	});
	
	$('#btnAddRoom').on('click', function (e){
		$('#modalAddRoom').modal({backdrop:'static',show:true});
		var now = new Date();
		now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
		$("#addRoom_datetime").val(now.toISOString().slice(0,16));
		 $("#addbed").load(baseURL+"Ref_Ward/view_vacant",function(){
			$("#addRoom_enccode").val(getCookie('enccode'));
			$("#addRoom_hpercode").val(getCookie('hpercode'));
			$("#patRoomSex").val(getCookie('sex'));
			vacantlist(getCookie('sex'));
		 }); 
	});
	
	$('#ModalManageRoom').on('hidden.coreui.modal', function () {
		deleteAllCookie();
	});
		//Room Manage
	function InpatientRoom(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
			$.ajax({
			url:"Admission/InpatientRoom/"+enctr,
			type:"POST",
			dataType: "JSON",
			processData:false,
			cache:false,
			async:true,
			success: function(data,response){
				PatRoomList(data);
			},
			error: function(response){
			toastr.error('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching rooms failed!");
		}});	
	}

	function PatRoomList(data)
	 {
		var room =$("#InPatientRoom").DataTable({
		 data: data,
		 destroy: true,
		 processing:true,
		 language: {
         processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span> '},
			columns: [
			{"data" : "enccode"},
			{"data" : "wardcode"},
			{"data" : "wardname"},
			{"data" : "bdintkey"},
			{"data" : "hprtime"},
			{"data" : "rmname"},
			{"data" : "bdname"},
			{"data" : "patrmstat"},
			{"data" : "rmvcode"},
			{ 
				data : "bdintkey" ,
				render: function(data, type, row){
				if(row.patrmstat == 'A')
				{
					return "<button class='btn btn-outline-danger btn-square  btn-block btn-sm' data-bedcode='"+row.bdintkey+"'  data-bdname='"+row.bdintkey+"' data-rmname='"+row.rmname+"' data-wardname='"+row.wardname+"'  data-enccode='"+row.enccode+"' data-hprdate='"+row.hprdate+"' id='btnRevoke' href='#'>Revoke</button>";
				}else{
					return "<button disabled class='btn btn-outline-danger btn-square  btn-block btn-sm' data-bedcode='"+row.bdintkey+"'  data-bdname='"+row.bdintkey+"' data-rmname='"+row.rmname+"' data-wardname='"+row.wardname+"'  data-enccode='"+row.enccode+"' data-hprdate='"+row.hprdate+"' id='btnRevoke' href='#'>Revoke</button>";
				}
					
				}	
			}
			],

		 columnDefs: [ {
			targets: [7,8],
			searchable: false,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'A' : return '<div class="bg-success p-1"><i class="fa fa-check text-white"></i> Active </div>'; break;
					case 'I' : return '<div class="bg-danger p-1"><i class="fa fa-remove text-white"></i> Inactive </div>'; break;
					case 'ORADM' : return '<div class="bg-success p-1"><i class="fa fa-remove text-white"></i> Current</div>'; break;
					case 'REVOK' : return '<div class="bg-danger p-1"><i class="fa fa-remove text-white"></i> Revoked</div>'; break;
					case 'TRWAR' : return '<div class="bg-info p-1"><i class="fa fa-refresh text-white"></i> Transfer</div>'; break;
					default  : return 'N/A';
				}
			},
			},
			{
				targets:[0,1,2,3],
				visible:false
			}
			]
		 });
		 var numRows = room.rows().count();
		 if(numRows == 0)
		 {
			$("#btnRevoke").prop('disabled',true);
		 }

	
	 }
	 
		$("#InPatientRoom").on( 'click', '#btnRevoke', function () {
		   var bedCode=$(this).data('bedcode');
		   var bed=$(this).data('bdname');
		   var room=$(this).data('rmname');
		   var ward=$(this).data('wardname');				
		   var enccode=$(this).data('enccode');		
		   var roomDatetime= $(this).data('hprdate');		
			$("#roomEnccode").val(enccode);
			$("#bedcode").val(bedCode);
			$("#roomBed").val(bed);
			$("#roomRoom").val(room);
			$("#roomWrd").val(ward);
			$("#roomDatetime").val(roomDatetime);
		    $("#modalRevoke").modal('show');
			
		});
		
		$('#modalRevoke').on('hidden.coreui.modal',function(){
			$("#roomBed").empty();
			$("#roomRoom").empty();
			$("#roomWard").empty();
			$("#roomEnccode").empty();
			$("#bedcode").empty();
		});
		
		$('#frmTransferRoom').submit('click',function(event){
			event.preventDefault();
			if($("#frmTransferRoom").valid() == false){
				return;
			}
			$.ajax({
				type : "POST",
				url  : baseURL+"Admission/transferRoom",
				data :new FormData(this),
				processData: false,
				contentType: false,
				success: function(data,response){
					$("#modalTransfer").modal('hide');
					InpatientRoom(getCookie('enccode'));
					toastr.success(data.message,'Success');
				},
				error: function(data,response){
					if(data.responseJSON.message ==  undefined){
						toastr.error('Error in the transfer of patient room!' ,'Error');
					  }else{
						toastr.error(data.responseJSON.message ,'Error');
					  }
				}
				});
			return false;
		});
		
		$('#frmRevoke').submit('click',function(event){
			$.ajax({
				type : "POST",
				url  : baseURL+"Admission/revokeRoom",
				data :new FormData(this),
				processData: false,
				contentType: false,
				dataType: "JSON",
				success: function(data,response){
					$("#modalRevoke").modal('hide');
					InpatientRoom(getCookie('enccode'));
					//toastr.success('Room revoked!' ,'Success');
					toastr.success(data.message,'Success');
				},
				error: function(data, reponse){
					if(data.responseJSON.message ==  undefined){
						toastr.error('Error in revoking patient room!' ,'Error');
					  }else{
						toastr.error(data.responseJSON.message ,'Error');
					  }
				}
				});
				return false;
		});
		
		$('#frmAddRoom').submit('click',function(event){
			event.preventDefault();
			if($("#frmAddRoom").valid() == false){
				return;
			}
			$.ajax({
				type : "POST",
				url  : baseURL+"Admission/addRoom",
				data :new FormData(this),
				processData: false,
				contentType: false,
				success: function(data,response){
					$("#modalAddRoom").modal('hide');
					InpatientRoom(getCookie('enccode'));
					//toastr.success('Room Successfully Added!' ,'Success');
					toastr.success(data.message,'Success');
				},
				error: function(data, response){
					if(data.responseJSON.message ==  undefined){
						toastr.error('Error adding room!' ,'Error');
					  }else{
						toastr.error(data.responseJSON.message ,'Error');
					  }
				}
				});
				return false;
		});