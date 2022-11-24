function wardrequestList()
{
	var wardRequests = $('#wardRequest_tbl').DataTable({
		"ajax": baseURL+"Pharmacy/wardRequest",
		 "aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		 "destroy":true,
		 "columns":[
			{data : "wardname"},
			{data : "description"},
			{data : "dtereq"},
			{data : "qtyreq"},
			{data : "totqtyissue",
				render: function(data, type, row){
					if(data==null)
					{
						return '0';
					}else{
						return data;
					}
				}
			},
			{data : "phrxstatus",
				render: function(data, type, row){	
				 if(data =='U'){
					return '<div  class="p-1 bg-danger text-white">Unserve</div>' ;
				 }else if(data =='P'){
					 return '<div  class="p-1 bg-warning text-white">Partial</div>' 
				 }else{
					  return '<div  class="p-1 bg-success text-white">Served</div>' 
				 }
				}
			},
			{data : "rxstatus",
				
				render: function(data, type, row){
				 if(data =='U')
				 {
					return '<div  class="p-1 bg-danger text-white">Unserve</div>' ;
				 }else if(data =='P'){
					 
					 return '<div  class="p-1 bg-danger text-white">Unserve</div>' ;
				 }else{
					  return '<div  class="p-1 bg-success text-white">Served</div>' 
				 }
				}
			},
			{ 
				render: function(data, type, row){
				return "<button class='btn btn-outline-success btn-sm' data-wardcode='"+row.wardcode+"' data-dmdctr='"+row.dmdctr+"' data-qty='"+row.qtyreq+"'  data-qtyissue='"+row.totqtyissue+"'  data-dmdcomb='"+row.dmdcomb+"'  data-datereq='"+row.dtereq+"' id='btnIssue' ><i class='fa fa-search'></i></button>";
				}
			}
	

		],
	});
	
	wardRequests.on('click',"#btnIssue",function(){
	var data = $(this).data();	
	var qtyissue = (data['qtyissue'] == null ? 0 : data['qtyissue']);
	var totalbal= data['qty'] - qtyissue;
		$("#wardcode").val(data['wardcode']);
		$("#stockloc").val('WARD');
		$("#dmdcomb").val(data['dmdcomb']);
		$("#dmdctr").val(data['dmdctr']);
		$("#qtyreq").val(totalbal);
		$("#datereq").val(setTimeLocale(data['datereq']));
		$("#ModalPharmacyReplenish").modal('show');
	});
	
	$("#btnLot").on('click',function(){
		var code = $("#dmdcomb").val();
		 $("#drugIssueModal").modal({backdrop:'static', show:true,draggable:true});
			var logList= $('#lotnotbl').DataTable({
				"ajax" : baseURL+"Pharmacy/getLotno/"+code,
				"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
				"scrollY":"300px",
				"scrollX":true,
				"scrollCollapse": true,
				"serverside":true, 
				"processing":true,
				"destroy":true,
				"searching":false,
				"paging":false,
				"columns" : [
								{data:"lotno"},//0
								{data:"description"},//1
								{data:"dmselprice"},//2
								{data:"stockbal"},//3
								{data:"dmdcomb"},//4
								{data:"dmdctr"},//5
								{data:"dmhdrsub"},//6
								{data:"dmdprdte"},//7
							],
							"columnDefs": 
							[
								{"visible": false, "targets": [4,5,6,7]},
								
								{
									targets: [2,3],
									className: 'text-center align-middle'
								}
							]
			});
		
		logList.on('click','tbody>tr',function(){
			var currentRow=$(this).closest("tr"); 
			var data = $('#lotnotbl').DataTable().row(currentRow).data();
			$("#lotno").val(data.lotno);
			$("#dmhdrsub").val(data.dmhdrsub);
			$("#pricedate").val(data.dmdprdte);
			$("#dmdctr").val(data.dmdctr);
			$("#stock").val(data.stockbal);
			$("#medicineItem").val(data.description);
			$("#qtyissue").prop('readonly',false);
			$("#drugIssueModal").modal('hide');
		});
		
	});
}

	$("#qtyissue").on('change',function(){
		var issueqty  =parseInt($(this).val());
		var currentStock  =parseInt($("#stock").val());
		if(issueqty > currentStock){
			$(this).val(currentStock);
			toastr.warning('Out of Stock','Warning!');
			$(this).removeClass("is-valid");
			$(this).addClass("is-invalid");
		}
	});


	$('#ModalPharmacyReplenish').on('hidden.coreui.modal', function(event) {
		$(this).find("input,textarea,select").val('').end();
		$(this).find("input,textarea,select").removeClass('is-valid'); 
		$(this).find("input,textarea,select").removeClass('is-invalid');
		$(this).find("select").val('').trigger('change');
		wardrequestList();
	});


$('#frmwardIssue').validate({
	submitHandler: function (form) {
	var  POSTURL = baseURL+"Pharmacy/saveward_Issue";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:false,
			data: $(form).serialize(),
			success: function(data){
				toastr.success('Request Successfully Saved! ' ,'Success');
				$("#ModalPharmacyReplenish").modal('hide');
				$("#wardRequest_tbl").DataTable().ajax.reload();
			},
			
		
			});
		return false;
	 $(form).submit();
   },
  rules:{
    dateIssue:'required',
    medicineItem:'required',
    qtyissue:'required'
  },	
  messages:{
	dateIssue:'Date is required!',
    medicineItem:'Please select item!',
    qtyissue:'Issue is required!'
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




	
	


