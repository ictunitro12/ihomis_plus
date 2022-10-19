	$(function(){
		userLists();
	});
 
	var  table ="userLists";
	function  userLists()
	{
		var data = new Object();
		data.id = "userLists";
		data.link = baseURL+"Auth/Userlist";
		data.type = "POST";
		data.coldef =[
		{
			targets: ["_all"],
			className:'align-middle no-wrap'
		},
		{
			targets: [4],
			width:'0%'
		},
		{	
			targets: [3],
			searchable:false,
			orderable:false,
			width:'4%',
			className:'text-center no-wrap',
			render: function (data,type,row) 
			{
				switch(data)
				{
					case "1": return '<div class="p-1 bg-success text-white text-center"><i class="fa fa-check"></i>&nbsp Active</div> '; break;
					case "0" : return '<i class="fa fa-exclamation-circle"></i>&nbsp Inactive'; break;
					default  : return '<i class="fa fa-exclamation"></i>&nbsp Unconfirmed';
				}
			},
		}];

	var userTable=loadTable(data);
		userTable.on('click','#userInfo',function(){
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = 'Auth/UserInformation/'+URLencode(atob($(this).data('enccode')));
		Obj.data = "JSON";  
		var row =Information(Obj);
	
			$('#ModalPatientInformation').modal('show');
			var fullname=row[0]['name'];
			var ward=row[0]['board'];
			var age=row[0]['age'];
			$('#casenum').text(row[0]['casenum']);
			$('#accountno').text(row[0]['paacctno']);
			$('#enccodeCSS').val(row[0]['enccode']);
			$('#hpercode').text(row[0]['hpercode']);
			$('#patname').text(fullname);
			$('#patage').text(age);
			$('#patwrb').text(ward);
			$('#patts').text(row[0]['tsdesc']);
			$('#patdiag').text(row[0]['admtxt']);
			if(row[0]['picname']==null || row[0]['picname']=="")
			{
				$("#PatientPicInfo").prop('src', 'assets/img/avatars/none.png');
			}else
			{
				$("#PatientPicInfo").prop('src', baseURL+row[0]['picname']);
			}
			InpatientRoom($(this).data('enccode'));
		});

		userTable.on('click','#userDelete',function(){
			$("#modalDeleteUser").modal({backdrop:'true'});
			var id = $(this).data('id');
			alert(id);
			$("#userID").val(id);
		});

		$("#modalDeleteUser").on('hidden.coreui.modal',function(){
			userTable.ajax.reload();
		});

		$('#frmDeleteUser').on('submit', function(e){
			$.ajax({
				type : "POST",
				url  : baseURL+"Auth/saveUser",
				data :new FormData(this),
				processData: false,
				contentType: false,
					success: function(data,response){
						toastr.success(' Deleted!' ,'Success');
						userTable.ajax.reload();
						$('#modalDeleteUser').modal('hide');
					},
					error: function(xhr, desc, err){
						toastr.error('Error on saving ' ,xhr);
					}
			});
			return false;
		});
	}