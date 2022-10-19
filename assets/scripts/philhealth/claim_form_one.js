$(document).ready(function() {
    $('#ClaimsTable').on('click', '.ModalClaimCF1', function() {
        $('#certificationOfMemberForm').trigger("reset");
        $('#certificationOfMemberModal').modal('show');

        const enccode = $(this).attr('data-enccode');
        const accreno = $(this).attr('data-accreno');

        $('#certificationOfMemberForm #enccode').val(enccode);
        $('#certificationOfMemberForm #accreno').val(accreno);
    });


    $('#certificationOfMemberForm').validate({
        rules:{
			member_date_signed:{
				required :{
					depends: function(element){
						if($('#member').is(':checked') && $("#member_date_signed").val() == ""){
							return true;
						}else{
							return false;
						}
					}
				}
			},
            sign_type:{
                required:{
                    depends: function(){
                        if($('#member').is(':checked') == false && $('#representative').is(':checked') == false){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            representative_name:{
                required:{
                    depends: function(){
                        if($('#representative').is(':checked') && $("#representative_name").val() == ""){
							return true;
						}else{
							return false;
						}
                    }
                }
            },
            represetative_date_signed:{
                required:{
                    depends: function(){
                        if($('#representative').is(':checked') && $("#represetative_date_signed").val() == ""){
							return true;
						}else{
							return false;
						} 
                    }
                }
            },
            relationship:{
                required:{
                    depends: function(){
                        if($('#representative').is(':checked') && $('#child').is(':checked') == false && $('#parent').is(':checked') == false && $('#spouse').is(':checked') == false && $('#sibling').is(':checked') == false && $('#rel_other').is(':checked') == false){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            relationship_other:{
                required:{
                    depends: function(){
                        if($('#representative').is(':checked') && $('#rel_other').is(':checked')){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            reason:{
                required:{
                    depends: function(){
                        if($('#representative').is(':checked') && $('#incapacitated').is(':checked') == false && $('#reas_other').is(':checked') == false){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            },
            reason_other:{
                required:{
                    depends: function(){
                        if($('#representative').is(':checked') && $('#reas_other').is(':checked')){
                            return true;
                        }else{
                            return false;
                        }
                    }
                }
            }
		},
		messages:{
			member_date_signed: {
				required :"Date signed is required!"
			},
            sign_type: {
                required : "Please select an option!"
            },
            representative_name:{
                required: "Name of Representative is required!"
            },
            represetative_date_signed:{
                required: "Date signed is required!"
            },
            relationship:{
                required: "Relationship of Representative to Member is required!"
            },
            relationship_other:{
                required: "Please specify relationship!"
            },
            reason:{
                required: "Reason for Signing in Behalf of the Member is required!"
            },
            reason_other:{
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

    $('#certificationOfMemberForm').on('submit', function(e) {
        e.preventDefault();

        if($(this).valid() == false){
            return;
        }

        let form = new FormData(this);

        if($('#member').is(':checked')){
            form.set("sign_type", 'P');    
        }else{
            form.set("sign_type", 'R');
        }

        if($('#representative').is(':checked')){
            if($('#child').is(':checked')){
                form.set("relationship", 'C');
            }else if($('#spouse').is(':checked')){
                form.set("relationship", 'S');
            }else if($('#parent').is(':checked')){
                form.set("relationship", 'P');
            }else if($('#sibling').is(':checked')){
                form.set("relationship", 'I');
            }else if($('#sibling').is(':checked')){
                form.set("relationship", 'O');
            }
            
            if($('#incapacitated').is(':checked')){
                form.set("reason", 'I');    
            }else{
                form.set("reason", 'O');
            }
        }
       

        $.ajax({
			url: baseURI + "Philhealth/generateClaimForm1",
			type: "POST",
			data: form,
			dataType: "JSON",
			processData: false,
			contentType: false,
			success: function (data, response) {
                $('#certificationOfMemberModal').modal('hide');
                $('#certificationOfMemberForm').trigger("reset");
				$('.cf1Body').html('<object id="pdfframe" type="application/pdf" data="data:application/pdf;base64,'+data.data.pdf_base64+'" width="100%" style="height:140vh; overflow:hidden;"></object>');
                $('#cf1Modal').modal('show');
			},
			error: function (response) {
				toastr.error(response.responseJSON.message, "Error");
			},
		});
    })

    $('.close-cf1-modal').on('click', function() {
        $('#cf1Modal').modal('hide');
        $('#certificationOfMemberForm').trigger("reset");
    });
});

$("#thumbmark").change(function(){
    if(this.checked){
        $("#thumbmark_value").val('Y');
    }else{
        $("#thumbmark_value").val('N');
    }
});

$("#memberpatient").change(function(){
    if(this.checked){
        $("#memberpatient_value").val('Y');
    }else{
        $("#memberpatient_value").val('N');
    }
});

$("#memberpin").change(function(){
    if(this.checked){
        $("#memberpin_value").val('Y');
    }else{
        $("#memberpin_value").val('N');
    }
});

$("#member").change(function(){
    if(this.checked){
        $("#member_date_signed").prop('disabled',false);
        $("#representative_name").prop('disabled',true);
        $("#representative_name").val('');

        $("#represetative_date_signed").prop('disabled',true);
        $("#represetative_date_signed").val('');

        $("#child").prop('disabled',true);
        $("#child").prop("checked", false);
        
        $("#spouse").prop('disabled',true);
        $("#spouse").prop("checked", false);
        
        $("#parent").prop('disabled',true);
        $("#parent").prop("checked", false);
        
        $("#sibling").prop('disabled',true);
        $("#sibling").prop("checked", false);
        
        $("#rel_other").prop('disabled',true);
        $("#rel_other").prop("checked", false);
        
        $("#relationship_other").prop('disabled',true);
        $("#relationship_other").val('');
        
        $("#incapacitated").prop('disabled',true);
        $("#incapacitated").prop("checked", false);
        
        $("#reas_other").prop('disabled',true);
        $("#reas_other").prop("checked", false);
        
        $("#reason_other").prop('disabled',true);
        $("#reason_other").val('');
    }
});

$("#representative").change(function(){
    if(this.checked){
        $("#member_date_signed").prop('disabled',true);
        $("#member_date_signed").val('');
        $("#representative_name").prop('disabled',false);
        $("#represetative_date_signed").prop('disabled',false);
        $("#child").prop('disabled',false);
        $("#spouse").prop('disabled',false);
        $("#parent").prop('disabled',false);
        $("#sibling").prop('disabled',false);
        $("#rel_other").prop('disabled',false);
        $("#relationship_other").prop('disabled',false);
        $("#incapacitated").prop('disabled',false);
        $("#reas_other").prop('disabled',false);
        $("#reason_other").prop('disabled',false);
    }
});