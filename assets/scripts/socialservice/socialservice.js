	Module=$('#module').val();

	var enccode=$.session.get('enccode');
	var hpercode= $.session.get('hpercode');

	$(function(){
		if((enccode == undefined) && (hpercode  == undefined))
		{
			$("#PatSearch").modal({backdrop:'static'});
			$("#PatientImage").prop('src','assets/img/avatars/none.png');
		}
		else
		{
			initSocialService(enccode,hpercode);
		}
	});




	function initSocialService(enccode,hpercode)
	{
		uppercase();
		$('#hpercode').val(hpercode);
		$('#hhpercode').val(hpercode);
		$('#enccode').val(enccode);
		PatientData(hpercode);
		CaseInformation(enccode);
		SocialServiceList(enccode,hpercode);	
		checkMSS(enccode,hpercode);	
		checkAssessmentExist(enccode,hpercode);
		tab_Discounts(enccode,hpercode);
		tab_Funds(enccode);
		tab_MAIP(hpercode);
		tab_Promissory(enccode,hpercode);
	}


	function PatSearch(){
		$.session.remove('enccode'); 
		$.session.remove('hpercode'); 
		location.reload();
	}

	function SocialServiceList(enccode,hpercode)
	{
		var enccode = encodeURIComponent(encodeURIComponent(enccode));
		var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;
		
		data.id = "SocialServiceTable";
		data.link = baseURL+"SocialService/SocialServiceList/"+enccode+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1,2,3,9,10],
			visible:false,
			orderable:false,
		},

		];
		loadTable(data);
	}

	function checkMSS(enccode,hpercode)
	{
		enccode= encodeURIComponent(encodeURIComponent(enccode));
		hpercode= encodeURIComponent(encodeURIComponent(hpercode));

		$.ajax({
			type: "POST",
			url: "../SocialService/checkMSS/"+enccode+ "/" + hpercode,
			data: "JSON",
			success: function(data)
			{ 
				if(data==0)
				{	
					checkAssess(enccode,hpercode);

				}
				else if(data>=1)
				{	
					$('#MSSAddButton').attr('disabled', true);
				}
				else
				{ 
					$('#ModalAddSocialService').modal({ backdrop: 'static'}).draggable({});
					$('#SocialServiceformIden').val('insert');


					$('#SocialServiceEnccode').val($.session.get('enccode'));
					$('#SocialServiceHpercode').val($.session.get('hpercode'));
					SelMSS();
					SelInterviewer();
				}
			},
			error: function(data)
			{
				alert('Please Try Again!');
			}
		});
	}

	function checkAssess(enccode,hpercode)
	{

		$.ajax({
			type: "POST",
			url: "../SocialService/checkAssessmentExist/"+enccode+ "/" + hpercode,
			data: "JSON",
			success: function(data)
			{ 
				if(data==0)
				{	
					toastr.warning('Please Fill up the Assessment Form!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr" onclick="location.reload();">Cancel</button>' ,'Warning');	
				}
				else
				{ 
					$('#ModalAddSocialService').modal({ backdrop: 'static'}).draggable({});;
					$('#SocialServiceformIden').val('insert');


					$('#SocialServiceEnccode').val($.session.get('enccode'));
					$('#SocialServiceHpercode').val($.session.get('hpercode'));
					SelMSS();
					SelInterviewer();
				}
			},
			error: function(data)
			{
				alert('Please Try Again!');
			}
		});
	}

	function AddSocialService(){
		var enccode= $.session.get('enccode');
		var hpercode =$.session.get('hpercode');
		checkMSS(enccode,hpercode);
	}

	function AssessmentLink(){
		window.location.replace(baseURL+"SocialService/SocialServiceAssessment" );
	}


	$("#SocialServiceTable").on("click",".ModalDeleteSocialService",function(){
		var data = $(this).data();
		var enccode = atob(data['enccode']);
		$('#ModalDeleteSocialService').modal({ backdrop: 'static'}).draggable({});;
		$("#formIdentification").val('delete');
		$('#deletecode').val(enccode);
	});

	$("#SocialServiceTable").on("click",".ModalEditSocialService",function(){
		var data = $(this).data();
		var enccode = atob(data['enccode']);
		var hpercode = atob(data['hpercode']);
		var mssikey = atob(data['mssikey']);
		var employeeid = atob(data['interviewer']);
		setMSS(mssikey);
		setInterviewer(employeeid);

		console.log(mssikey);
		console.log(employeeid);

		$('#ModalAddSocialService').modal({ backdrop: 'static'}).draggable({});;
		$('#SocialServiceformIden').val('update');
		$('#SocialServiceEnccode').val(enccode);
		$('#SocialServiceHpercode').val(hpercode);
	});

	$("#SocialServiceTable").on("click",".ModalSocialService",function(){
		var base_url= $('#base_url').val();
		var data = $(this).data();
		console.log(data);

		$('#ModalSocialService').modal({ backdrop: 'static'}).draggable({});;
		var enccode= data['enccode'];
		var hpercode=data['hpercode'];
		
		var old=atob(data['opatient']);
		var newpat=atob(data['npatient']);


		console.log(old);
		console.log(newpat);

		$("#code").val(enccode);
		$("#percode").val(hpercode);

		if (old== 'Y') {	
			$('#SocialServicePDF').html('<embed src="'+"SocialService/AssessmentFormOld/"+enccode+ "/"+hpercode+'" frameborder="2" width="100%" height="800px" id="SocialServicePDF">');
		}
		else if( newpat=='Y'){
			$('#SocialServicePDF').html('<embed src="'+"SocialService/AssessmentFormNew/"+enccode+ "/"+hpercode+'" frameborder="2" width="100%" height="800px" id="SocialServicePDF">');

		}
		else{
			$('#SocialServicePDF').html('<embed src="'+"SocialService/AssessmentFormOld/"+enccode+ "/"+hpercode+'" frameborder="2" width="100%" height="800px" id="SocialServicePDF">');
		}	
		
	});

	function tab_Discounts(enccode,hpercode)
	{
		var enccode= $.session.get('enccode');
		var hpercode =$.session.get('hpercode');
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;

		data.id = "TableDisc";
		data.link = baseURL+"SocialService/table_DiscountList/"+enctr+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1],
			visible:false,
			orderable:false,
		},

		{	
			targets: [7],
			searchable:true,
			render: function (data,type,row) 
			{
				switch(data)
				{
					case 'P' : return 'PERCENT(%)'; break;
					case 'A' : return 'AMOUNT(.00)'; break;
					default  : return 'N/A';
				}
			},
		},
		],
		loadTable(data);
	}	

	function tab_Funds(enccode)
	{
		var enccode= $.session.get('enccode');
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;

		data.id = "TableFund";
		data.link = baseURL+"SocialService/tab_FundsList/"+enctr,
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1],
			visible:false,
			orderable:false,
		},
		],
		loadTable(data);
	}	

	function tab_MAIP(hpercode)
	{
		var hpercode= $.session.get('hpercode');
		var percode = encodeURIComponent(encodeURIComponent(hpercode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;

		data.id = "TableMAIP";
		data.link = baseURL+"SocialService/tab_MaipList/"+percode,
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1,2],
			visible:false,
			orderable:false,
		},
		],
		loadTable(data);
	}	


	function tab_Promissory(enccode,hpercode)
	{
		var enccode= $.session.get('enccode');
		var hpercode =$.session.get('hpercode');
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;

		data.id = "TablePromi";
		data.link = baseURL+"SocialService/tab_PromissoryList/"+enctr+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
		{
			targets: [0,1],
			visible:false,
			orderable:false,
		},
		],
		loadTable(data);
	}	


	$('a[data-toggle="tab"]').on('click', function (e){
		var tab = e.target.id;
		var enccode= $.session.get('enccode');
		var hpercode =$.session.get('hpercode');

		switch(tab) {
			case "mss-tab":
			SocialServiceList(enccode,hpercode);
			break;
			case "fund-tab":
			tab_Funds(enccode);
			getTOTALFundsource(enccode);
			break;
			case "disc-tab":
			tab_Discounts(enccode,hpercode);
			break;
			case "maip-tab":
			tab_MAIP(hpercode);
			getTOTAL(hpercode);
			break;
			case "promi-tab": 
			tab_Promissory(enccode,hpercode);
			checkPromi(enctr);
			break;
			default:
			SocialServiceList(enccode,hpercode);
			break;
		}
	});
	