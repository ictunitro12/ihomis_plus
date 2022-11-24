
	
	$("form[name='formDeliveries']").validate({
		rules: {
            delDate:'required',
            refno:'required',
            delSuppind:'required',
            delSupp_supplier:'required',
            acctname:'required'
		},	
		messages: {
            delDate:'Date is required',
            refno:'Reference is required',
            delSuppind:'Delivery type is required',
            delSupp_supplier:'Supplier is required',
            acctname:'Acccount is required'
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
		  

$('#formDeliveries').on('submit', function(e) {
    if ($('#formDeliveries').valid()) 
	{
        var table=$("#itemList").DataTable();
        var rows =table.rows().indexes().toArray();
        var formType= $("#delivformIden").val();
        var deliverydate= $("#delDate").val();
        var acctcode= $("#acctcode").val();
         var suppind=$("#delSuppind").val();
        var refno= $("#refno").val();
        var delno=$("#delNo").val();
        var supplier= $("#delSupp_supplier").val();
        var invoice= $("#delInvoice").val();
        var reqno= $("#delReqno").val();
        var ris= $("#delRisno").val();
        var pono= $("#delPono").val();
        var dataJSON =[];
        for(let i = 0; i< rows.length; i++){
            var dataArr={};    
            var lotno= $(table.cells(rows[i], 1).nodes()).find('input[name=lotno]').val();
            var itemtype= $(table.cells(rows[i], 3).nodes()).find('select[name=delitem_type]').val();
            var quantity= $(table.cells(rows[i], 4).nodes()).find('input[name=qty]').val();

            var dmdcomb= $(table.cells(rows[i], 5).nodes()).text();
            var dmdctr= $(table.cells(rows[i], 6).nodes()).text();
            var formcode= $(table.cells(rows[i], 7).nodes()).text();


            var unitprice= $(table.cells(rows[i], 8).nodes()).find('input[name=unitprice]').val();
            var expiry= $(table.cells(rows[i], 9).nodes()).find('input[name=expire]').val();
            var remarks= $(table.cells(rows[i], 10).nodes()).find('input[name=remarks]').val();
           
            var lotno_elem = $(table.cell(rows[i], 1).node())
            .find("input")
            .get(0);
    
            var item_elem = $(table.cell(rows[i], 3).node())
            .find("select")
            .get(0);
    
            var qty_elem = $(table.cell(rows[i], 4).node())
            .find("input")
            .get(0);
    
            var price_elem = $(table.cell(rows[i], 8).node())
            .find("input")
            .get(0);
    
            var expiry_elem = $(table.cell(rows[i], 9).node())
            .find("input")
            .get(0);
     
            if (lotno == 0) {
                $(lotno_elem).next("#issueQtyError").remove();
                $(lotno_elem).removeClass("is-valid");
                $(lotno_elem).addClass("is-invalid");
                $(lotno_elem).after('<div class="invalid-feedback" id="issueQtyError">Lot no is required!</div>');
            }
    
            if (itemtype == 0) {
                $(item_elem).next("#issueQtyError").remove();
                $(item_elem).removeClass("is-valid");
                $(item_elem).addClass("is-invalid");
                $(item_elem).after('<div class="invalid-feedback" id="issueQtyError">Type is required!</div>');
            }
    
            if (quantity == 0) {
                $(qty_elem).next("#issueQtyError").remove();
                $(qty_elem).removeClass("is-valid");
                $(qty_elem).addClass("is-invalid");
                $(qty_elem).after('<div class="invalid-feedback" id="issueQtyError">Quantity is required!</div>');
            }
    
            if (unitprice == 0) {
                $(price_elem).next("#issueQtyError").remove();
                $(price_elem).removeClass("is-valid");
                $(price_elem).addClass("is-invalid");
                $(price_elem).after('<div class="invalid-feedback" id="issueQtyError">Unit price is required!</div>');
            }
    
            if (expiry == 0) {
                $(expiry_elem).next("#issueQtyError").remove();
                $(expiry_elem).removeClass("is-valid");
                $(expiry_elem).addClass("is-invalid");
                $(expiry_elem).after('<div class="invalid-feedback" id="issueQtyError">Expiry is required!</div>');
            }
            dataArr.formType= formType;
            dataArr.refno= refno;
            dataArr.delno= delno;
            dataArr.suppind=suppind;
            dataArr.delivdate= deliverydate;
            dataArr.supplier= supplier;
            dataArr.invoice= invoice;
            dataArr.acctcode= acctcode;
            dataArr.reqno= reqno;
            dataArr.ris= ris;
            dataArr.pono= pono;
            dataArr.lotno= lotno;
            dataArr.itemtype= itemtype;
            dataArr.quantity= quantity;
            dataArr.unitprice= unitprice;
            dataArr.dmdcomb= dmdcomb;
            dataArr.dmdctr= dmdctr;
            dataArr.formcode= formcode;
            dataArr.expiry= expiry;
            dataArr.remarks= remarks;
            dataJSON.push(dataArr);
        }   
        var  data_JSONString = JSON.stringify(dataJSON);
          $.ajax({
          type:'POST',
          data: {data:data_JSONString},
          dataType:'JSON',
          url: baseURL+"Pharmacy/saveDelivery",
          success: function(data){
            $("#modalDeliveries").modal('hide');
            $("#deliver_tbl").DataTable().ajax.reload();
            toastr.success('Record saved!','Success');
          },
          error: function(data,response){
            toastr.error(data.message,'Error');
          },
        });
      
    }
    return false;
    
});

$("#modalDeliveries").on('hidden.coreui.modal',function(){
    $("#itemList").DataTable().clear().draw();
    $(this).find("input,textarea,select").val('').end();
    $(this).find("checkbox,radio").prop('checked',false);
    $(this).find("radio").removeAttr('checked');
    $(this).find("input,textarea,select").removeClass('is-valid'); 
    $(this).find("input,textarea,select").removeClass('is-invalid');
    $(this).find("select").val('').trigger('change');
});


