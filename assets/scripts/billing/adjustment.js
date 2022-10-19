function Adjustments(enccode,hpercode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.search = false;
		data.paging = true;
		data.info = false;
		data.orderable = false;
		data.id = "chargesAdj";
		data.link = baseURL+"Billing/chargesAdjList/"+enctr+"/"+hpercode,
		data.type = "POST";
		data.coldef =[
			{
				targets: [0,1,3,10],
				visible:false,
				orderable:false,
			},
			{	
				targets: [9],
				searchable:true,
				render: function (data,type,row) 
				{
					switch(data)
					{
						case 'S' : return 'Subtract(-)'; break;
						case 'A' : return 'Additional(+)'; break;
						default  : return 'N/A';
					}
				},
			},
			
		];
		loadTable(data);
	}
	
	//Add
	$('#btnAdjust').on('click', function (){
		$("#modalSize").removeClass('modal-md');
		$("#modalSize").addClass('modal-xl');
		$("#selectTypeofCharge").show();
		$("#selectCostCenter").removeClass('col-md');
		$("#selectCostCenter").addClass('col-md-6');
		$("#modalAdjIcon").removeClass('fa fa-pencil-square-o');
		$("#modalAdjIcon").addClass('fa fa-refresh');
		$("#modalAdjTitle").text('Add Adjustment');
		$("#adjCostcntr").removeAttr("style");
		
		$('#ModalAdjustment').modal('show');
		$('#adjformIden').val('insert');
		$('#adjDateLog').val(getTimeLocale());
		$('#adjEnccode').val($.session.get('enccode'));
		$('#adjHpercode').val($.session.get('hpercode'));
	});
	
	function adjustmentSel(val)
	{
		SelTypeofAdjustment(val);
		$("#chargesAdjust").DataTable().destroy();
		$("#chargesAdjust").DataTable().clear();
		$('[name $="_adj"]').empty();
	}
	
	function SelTypeofAdjustment(costcent)
	{
			$('[name $="_adj"]').select2({
			allowClear: true,
			placeholder:'Select Charge',
			theme:'coreui',
			ajax:{
			url: baseURL+"Charges/charges/"+costcent,
			dataType: "json",
			type:"POST",
			delay: 250,
			data: function(params){
			return{
			searchCharges: params.term
			};
			},
			processResults: function(data){
			var results = [];
				$.each(data, function(index, item){
				results.push({
					id:item.chrgcode,
					text:item.chrgdesc,
				});
			});
			return{
				results: results
			}
			}
			}
			});
				// $('[name $="_adj"]').on('change', function() {
				// var data =  $("[name $='_adj'] option:selected",this);
				//  if(this.value){
				// chargeAdjust(this.value);
				//  }
				
				// });
			
	}

	$("#typechrge_adj").change(function(){
		if($(this).val() == null){
			return;
		}
		chargeAdjust($(this).val());
	});
	
	 function chargeAdjust(type)
	{
		var chargesEnccode = encodeURIComponent(encodeURIComponent(enccode));
		$('#chargesAdjust').DataTable({
			//"ajax" :baseURL+"Charges/chargesType/"+type,
			"ajax" :baseURL+"Billing/getCharges/"+chargesEnccode+"/"+type,
			"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
			"processing":true,
			"serverside":true,
			 "deferRender": true,
			"deferLoading": 3000,
			 "fixedColumns": true,
			"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
			"destroy":true,
			"columns" : [
			{data : "chargcode"},
			{data : "itemcode"},
			{data : "itemdesc"},
			{data : "uomcode"},
			{data : "pchrgup"},
			{data : "lotno"},
			{data : "pcchrgcod"},
			{data : "dmdctr"}
			],
			columnDefs: [
			{
				targets:[0,1,7],
				visible:false
			}
			
			],
		});
	}
	
	//$("#chargesAdj").on('click','#btnAdjust_Edit', function (){
		$("#chargesAdj").on('click','.ModalEdit', function (){
	    var editAdjEnccode= URLencode($(this).data('enccode'));
	    var refno= URLencode($(this).data('pcchrgcod'));
		var chargcode= URLencode($(this).data('chargcode'));
		var itemcode= URLencode($(this).data('itemcode'));
		var Obj = new Object();
		Obj.type = "POST";
		Obj.url = baseURL+"Billing/adjustInformation/"+editAdjEnccode+"/"+refno+"/"+chargcode+"/"+itemcode,
		Obj.data = "JSON";
		var row =Information(Obj);

		$("#modalSize").removeClass('modal-xl');
		$("#modalSize").addClass('modal-md');
		$("#selectTypeofCharge").hide();
		$("#selectCostCenter").removeClass('col-md-6');
		$("#selectCostCenter").addClass('col-md');
		$("#modalAdjIcon").removeClass('fa fa-refresh');
		$("#modalAdjIcon").addClass('fa fa-pencil-square-o');
		$("#modalAdjTitle").text('Edit Adjustment');
		$("#adjCostcntr").attr("style", "pointer-events: none;");

		$("#adjDateLog").val(setTimeLocale(row['pcchrgdte']));
		$("#adjCostcntr option[value=" +row['srcchrg']+"]").prop('selected', true);
		$("#adjItemcode").val(row['itemcode']);
		$("#adjItemdesc").val(row['itemdesc']);
		$("#adjQty").val(row['pchrgqty']);
		$("#adjPrice").val(row['pchrgup']);
		$("#adjAmount").val(row['pcchrgamt']);
		$("#adjRef").val(row['pcchrgcod']);
		$("#adjType option[value=" +row['addsub']+"]").prop('selected', true);
		$("#adjformIden").val('update');
		$("#adjHpercode").val(row['hpercode']);
		$("#adjEnccode").val(row['enccode']);
		$("#adjtypeOfCharge").val(row['chargcode']);
		$("#ModalAdjustment").modal('show');
	});
	
	$("#chargesAdj").on('click','.ModalDelete', function (){
	    //var enccode= URLencode($.session.get('enccode'));
	    //var refno= URLencode($(this).data('code'));
		var thisRow = $(this).closest('tr');
		$("#deleteAdjItem").text(thisRow[0].cells[1].innerText);
		$("#adjchrgDelete").val(thisRow[0].cells[1].innerText);
		var enccode = $(this).data('enccode');
		$("#adjEnccodeDelete").val(enccode);
		var refno = $(this).data('pcchrgcod');
		$("#adjRefnoDelete").val(refno);
		var chargcode = $(this).data('chargcode');
		$("#adjchargcodeDelete").val(chargcode);
		var itemcode = $(this).data('itemcode');
		$("#adjitemcodeDelete").val(itemcode);
		$("#deleteAdj").val('delete');
		$("#ModalAdjustDelete").modal({backdrop:'static'});
		$("#ModalAdjustDelete").modal('show');
	});
	
	$('#frmAdjustDelete').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		dataType : "JSON",
		url  : baseURL+"Billing/saveAdjust",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#ModalAdjustDelete').modal('hide');
			Adjustments($.session.get('enccode'),$.session.get('hpercode'));
			//toastr.success('Adjustment Successfully Deleted! ' ,'Success');
			toastr.success(data.message,'Success');
		},
		error: function(data,response){
			toastr.error(data.responseJSON.message,'Error');
		}
		});
		return false;
	}); 
	//Delete
	$("#chargesAdjust").on('click','tbody>tr>td', function (){
		var rowData =$('#chargesAdjust').DataTable().row(this).data();
		var code= rowData['chargcode'];
		var item= rowData['itemcode'];
		var desc= rowData['itemdesc'];
		var uom= rowData['uomcode'];
		var price= rowData['pcchrgamt'];
		var pcchrgcod = rowData['pcchrgcod'];
		var dmdctr = rowData['dmdctr'];
		$("#adjtypeOfCharge").val(code);
		$("#adjDateLog").val(getTimeLocale());
		if(dmdctr != ""){
			$("#adjItemcode").val(item+dmdctr);
		}else{
			$("#adjItemcode").val(item);
		}		
		$("#adjItemdesc").val(desc);
		$("#adjQty").val(1);
		$("#adjPrice").val(price);
		$("#adjAmount").val(price);
		$("#adjOum").val(uom);
		$("#adjRef").val(pcchrgcod);
		//$("#chargesAdjust").empty();
		//$('[name $="_adj"]').empty();
	});
	
	
	
	$("#adjQty").on('change', function (){
	  
	var qty = $('#adjQty').val();
	var price =  $('#adjPrice').val();
	 $("#adjAmount").val(qty * price);
	});
	
	
$('#frmAdj_form').validate({
submitHandler: function (form){
var  POSTURL = baseURL+"Billing/saveAdjust";
		  $.ajax({
			type : "POST",
			url  : POSTURL,
			dataType: "JSON",
			cache:false,
			async:true,
			data: $(form).serialize(),
			success: function(data){
				if($('#adjformIden').val()=='insert'){
					$('#ModalAdjustment').modal('hide');
					Adjustments($.session.get('enccode'),$.session.get('hpercode'));
					toastr.success('Adjustment Successfully Saved! ' ,'Success');

				}else if($('#adjformIden').val()=='update'){
					$('#ModalAdjustment').modal('hide');
					Adjustments($.session.get('enccode'),$.session.get('hpercode'));
					toastr.success('Adjustment Successfully Updated! ' ,'Success');
				}else{
					toastr.error('Error:No post' ,'Error');
				}
			},
			error: function(data,response){
				toastr.warning(response,'Error');
			}
			});
		return false;
	 $(form).submit();
   },
  rules:{
    adjDateLog:'required',
    adjCostcntr:'required',
    adjItemdesc:'required',
    adjQty:'required', 
    adjPrice:'required', 
    adjAmount:'required', 
    adjRef:'required', 
    adjType:'required'
  },	
  messages:{
	adjDateLog:'Date is required!',
    adjCostcntr:'Cost center is required!',
    adjItemdesc:'Description is required!',
    adjQty:'Qty is required!', 
    adjPrice:'Item no price!', 
    adjAmount:'Item no price!', 
    adjRef:'Reference no is required!', 
    adjType:'Please select  type!'
  },
  errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
  

   if(element.hasClass('select2-hidden-accessible'))
	{
		error.insertAfter(element.next('.select2-container'));
	    error.addClass('invalid-feedback');
	}
	else 
	{
      error.insertAfter(element);
	    error.addClass('invalid-feedback');
    }
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
	