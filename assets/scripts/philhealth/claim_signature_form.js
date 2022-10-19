$(document).ready(function() {
    $('#ClaimsTable').on('click', '.ModalClaimCSF', function() {
        $('#csfForm').trigger("reset");
        $('#csfModal').modal('show');

        const enccode = $(this).attr('data-enccode');
        const accreno = $(this).attr('data-accreno');

        $('#csfForm #csfenccode').val(enccode);
        $('#csfForm #csfaccreno').val(accreno);
    });


    $('#csfForm').validate({
        rules:{
			csfmember_date_signed:{
				required :{
					depends: function(element){
						if($('#csfmember').is(':checked') && $("#csfmember_date_signed").val() == ""){
							return true;
						}else{
							return false;
						}
					}
				}
			},
            csfsign_type:{
                required:{
                    depends: function(){
                        if($('#csfmember').is(':checked') == false && $('#csfrepresentative').is(':checked') == false){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            csfrepresentative_name:{
                required:{
                    depends: function(){
                        if($('#csfrepresentative').is(':checked') && $("#csfrepresentative_name").val() == ""){
							return true;
						}else{
							return false;
						}
                    }
                }
            },
            csfrepresetative_date_signed:{
                required:{
                    depends: function(){
                        if($('#csfrepresentative').is(':checked') && $("#csfrepresetative_date_signed").val() == ""){
							return true;
						}else{
							return false;
						} 
                    }
                }
            },
            csfrelationship:{
                required:{
                    depends: function(){
                        if($('#csfrepresentative').is(':checked') && $('#csfchild').is(':checked') == false && $('#csfparent').is(':checked') == false && $('#csfspouse').is(':checked') == false && $('#csfsibling').is(':checked') == false && $('#csfrel_other').is(':checked') == false){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            csfrelationship_other:{
                required:{
                    depends: function(){
                        if($('#csfrepresentative').is(':checked') && $('#csfrel_other').is(':checked')){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            csfreason:{
                required:{
                    depends: function(){
                        if($('#csfrepresentative').is(':checked') && $('#csfincapacitated').is(':checked') == false && $('#csfreas_other').is(':checked') == false){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            csfreason_other:{
                required:{
                    depends: function(){
                        if($('#csfrepresentative').is(':checked') && $('#csfreas_other').is(':checked')){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            }
		},
		messages:{
			csfmember_date_signed: {
				required :"Date signed is required!"
			},
            csfsign_type: {
                required : "Please select an option!"
            },
            csfrepresentative_name:{
                required: "Name of Representative is required!"
            },
            csfrepresetative_date_signed:{
                required: "Date signed is required!"
            },
            csfrelationship:{
                required: "Relationship of Representative to Member is required!"
            },
            csfrelationship_other:{
                required: "Please specify relationship!"
            },
            csfreason:{
                required: "Reason for Signing in Behalf of the Member is required!"
            },
            csfreason_other:{
                required: "Please specify reason!"
            }
		},
		validClass: "is-valid",
		errorClass: "is-invalid",
		errorElement: "div",
		errorPlacement: function(error,element){
			error.addClass("invalid-feedback");
			error.insertAfter(element);
		}
    });

    $('#csfForm').on('submit', function(e) {
        e.preventDefault();
        if($(this).valid() == false){
            return;
        }
        let form = new FormData(this);

        if($('#csfmember').is(':checked')){
            form.set("csfsign_type", 'P');    
        }else{
            form.set("csfsign_type", 'R');
        }

        if($('#csfrepresentative').is(':checked')){
            if($('#csfchild').is(':checked')){
                form.set("csfrelationship", 'C');
            }else if($('#csfspouse').is(':checked')){
                form.set("csfrelationship", 'S');
            }else if($('#csfparent').is(':checked')){
                form.set("csfrelationship", 'P');
            }else if($('#csfsibling').is(':checked')){
                form.set("csfrelationship", 'I');
            }else if($('#csfsibling').is(':checked')){
                form.set("csfrelationship", 'O');
            }
        
            if($('#csfincapacitated').is(':checked')){
                form.set("csfreason", 'I');    
            }else{
                form.set("csfreason", 'O');
            }
        }

        $.ajax({
			url: baseURI + "Philhealth/generateClaimSignatureFormPDF",
			type: "POST",
			data: form,
			dataType: "JSON",
			processData: false,
			contentType: false,
			success: function (data, response) {
                $('#csfModal').modal('hide');
                $('#csfForm').trigger("reset");
				$('.csfPDFBody').html('<object id="pdfframe" type="application/pdf" data="data:application/pdf;base64,'+data.data.pdf_base64+'" width="100%" style="height:140vh; overflow:hidden;"></object>');
                $('#csfPDFModal').modal('show');
			},
			error: function (response) {
				toastr.error(response.responseJSON.message, "Error");
			},
		});
    })

    $('.close-csf-modal').on('click', function() {
        $('#csfPDFModal').modal('hide');
        $('#csfForm').trigger("reset");
    });
});

$("#csfthumbmark").change(function(){
    if(this.checked){
        $("#csfthumbmark_value").val('Y');
    }else{
        $("#csfthumbmark_value").val('N');
    }
});

$("#csfmemberpatient").change(function(){
    if(this.checked){
        $("#csfmemberpatient_value").val('Y');
    }else{
        $("#csfmemberpatient_value").val('N');
    }
});

$("#csfmemberpin").change(function(){
    if(this.checked){
        $("#csfmemberpin_value").val('Y');
    }else{
        $("#csfmemberpin_value").val('N');
    }
});

$("#csfmember").change(function(){
    if(this.checked){
        $("#csfmember_date_signed").prop('disabled',false);
        $("#csfrepresentative_name").prop('disabled',true);
        $("#csfrepresentative_name").val('');

        $("#csfrepresetative_date_signed").prop('disabled',true);
        $("#csfrepresetative_date_signed").val('');

        $("#csfchild").prop('disabled',true);
        $("#csfchild").prop("checked", false);
        
        $("#csfspouse").prop('disabled',true);
        $("#csfspouse").prop("checked", false);
        
        $("#csfparent").prop('disabled',true);
        $("#csfparent").prop("checked", false);
        
        $("#csfsibling").prop('disabled',true);
        $("#csfsibling").prop("checked", false);
        
        $("#csfrel_other").prop('disabled',true);
        $("#csfrel_other").prop("checked", false);
        
        $("#csfrelationship_other").prop('disabled',true);
        $("#csfrelationship_other").val('');
        
        $("#csfincapacitated").prop('disabled',true);
        $("#csfincapacitated").prop("checked", false);
        
        $("#csfreas_other").prop('disabled',true);
        $("#csfreas_other").prop("checked", false);
        
        $("#csfreason_other").prop('disabled',true);
        $("#csfreason_other").val('');
    }
});

$("#csfrepresentative").change(function(){
    if(this.checked){
        $("#csfmember_date_signed").prop('disabled',true);
        $("#csfmember_date_signed").val('');
        $("#csfrepresentative_name").prop('disabled',false);
        $("#csfrepresetative_date_signed").prop('disabled',false);
        $("#csfchild").prop('disabled',false);
        $("#csfspouse").prop('disabled',false);
        $("#csfparent").prop('disabled',false);
        $("#csfsibling").prop('disabled',false);
        $("#csfrel_other").prop('disabled',false);
        $("#csfrelationship_other").prop('disabled',false);
        $("#csfincapacitated").prop('disabled',false);
        $("#csfreas_other").prop('disabled',false);
        $("#csfreason_other").prop('disabled',false);
    }
});