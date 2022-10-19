var url = $(location).attr('href').split("/").splice(0, 6).join("/");
var segments = url.split( '/' );
var action = segments[3];
var id = segments[5];

$('#drugRequestModal').on('hidden.coreui.modal', function (e) {
	$("#drugReqModal").modal('show');
	 requestList('requestMed','request',wardCode);
	});


$("#btnRequestmeds").on("click",function(){
	$("#drugReqModal").modal('show');
	requestList('requestMed','request',wardCode);
});


$("#btnAddrequestmed").on("click",function(){
	$("#drugRequestModal").modal('show');
	$("#drugReqModal").modal('hide');
	$("#formIdenreqMed").val("insert");
	$("#locacodeMed").val(id);
	$("#rxstatus").val('U');
	$("#phrxstatus").val('U');
	selectDrugs();
});


function selectDrugs() {
		$('#selectDrugs').select2({
			placeholder: 'DRUGS AND MEDICINE',
			allowClear: true,
			theme: 'coreui',
			ajax: {
				url: baseURL + "/Drugs/searchDrugs",
				dataType: "json",
				type: "POST",
				delay: 250,
				data: function (params) {
					return {
						searchDrugs: params.term
					};
				},
				processResults: function (data) {
					var results = [];
					$.each(data, function (index, item) {
						results.push({
							id: item.dmdcomb,
							text: item.drugs
						});
					});
					return {
						results: results
					}
				}
			}
		});
			$('#selectDrugs').on('change', function () {
			$("#selectDrugs option:selected", this);
			$("#dmdcomb").val(this.value);
		});
	}


function medicineStock(wardCode)
	 {
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url= baseURL+'Pharmacy/medicineStock/'+wardCode;
		Obj.data = "JSON";
		var jsonObj =Information(Obj);
		var table =$("#medStock").DataTable({
		 data: jsonObj,
		processing: true,
		 language:{
            'processing': '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'
			}, 
		 destroy: true,
		 searching:true,
		 processing: true,
		 ordering:true,
		 paging:true,
		 info:true,
		  columns: [	
			{"data" : "dmdcomb"},
			{"data" : "description"},
			{"data" : "level"},
			{"data" : "balance"}],
			columnDefs:[
				{ 
					targets:[0],
					visible:false
				},
				{ 
					targets:["_all"],
					className:"align-middle"
				}],
			fnRowCallback: function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
			
			  if (aData['level'] == "0") {
					$('td', nRow).addClass('table-danger');
					$('td', nRow).prop('disabled',true);
			  }else if (aData['level'] <= aData['balance']) {
				    $('td', nRow).addClass('table-warning');
			  }else if (aData['level'] >= aData['balance']){
				    $('td', nRow).addClass('table-success');
			   }else{
				   $('td', nRow).addClass('table-gray');
			  }
			  },
		 }); 
	 }
	 
	function requestList(table,type,ward)
	 {
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url= baseURL+'Pharmacy/pharmacyRequest/'+ward+'/'+type;
		Obj.data = "JSON";
		var jsonObj =Information(Obj);
		var table =$("#"+table).DataTable({
		 data: jsonObj,
		 processing: true,
		 language:{
            'processing': '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'
			}, 	
		 destroy: true,
		 searching:true,
		 processing: true,
		 ordering:true,
		 paging:true,
		 info:true,
		 className:'table table-sm table-responsive table-bordered table-striped table-hovered',
		  columns: [
			{"data" : "date"},
			{"data" : "description"},
			{"data" : "quantity"},
			{"data" : "rxstatus"},
			{"data" : "phrxstatus"},
			{"data" : "priority"}],	
			columnDefs:[
			{	
				targets: ["_all"],
				className:"align-middle"
			},
			{	
				targets: [3,4,5],
				searchable:false,
				orderable:false,
					render: function (data,type,row) 
					{
						switch(data)
						{
							case 'U' : return '<div class="text text-danger">Unserve</div>'; break;
							case 'S' : return '<div class="text text-success">Served</div>'; break;
							case 'Y' : return 'Yes'; break;
							case 'N' : return 'No'; break;
							default  : return '';
						}
					}
			}],
	
		 }); 
	 }
	 
	 $("#requestMed").on('dblclick','tr', function (){
		var rowData =$('#requestMed').DataTable().row(this).data();
			$(this).toggleClass('bg-success text-white');
			if(rowData['phrxstatus']=='U'){
				toastr.info('Pharmacy not yet served!','Information');
			}else if(rowData['phrxstatus']=='S'){
				$("#drugReceiveModal").moda('show');
			}
    });
	
	$('#frmdrugReq').validate({
	submitHandler: function (form) {
	var  POSTURL = baseURL+"Pharmacy/saveRequest";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#formIdenreqMed').val()=='insert'){
					toastr.success('Request Successfully Saved! ' ,'Success');
					$("#drugRequestModal").modal('hide');
					$("#drugReqModal").modal('shows');
				}else if($('#formIdenreqMed').val()=='update'){
					toastr.success('Request Successfully Updated! ' ,'Success');
					$("#modalDeliveries").modal('hide');
				}
			},
		
			});
		return false;
	 $(form).submit();
   },
  rules:{
    dtereceivedMed:'required',
    itemreceivedMed_drugs:'required',
    qtyreceiveMed:'required',
    priorequestMed:'required'
  },	
  messages:{
	dtereceivedMed:'Date is required!',
    itemreceivedMed_drugs:'Drugname is required!',
    qtyreceiveMed:'Quantity is required!',
    priorequestMed:'Priority is required!',
  },
	errorElement: 'span',
	errorPlacement: function errorPlacement(error, element) {
    error.addClass('invalid-feedback');
	error.insertAfter(element); 
  },
  highlight: function highlight(element) {
    $(element).addClass('is-invalid').removeClass('is-valid');
	  if( $(element).hasClass('select2') && $(element).next('.select2-container').length)
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

	
	
	 