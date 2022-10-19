
$("#frmmanner").on('change',function(){
    var value = $(this).val();
    if(value=='O'){
        $("#frmothman").prop('disabled',false);
    }else{
        $("#frmothman").prop('disabled',true);
    }
});

$("input[name='frmautopsy']").on('change',function(){
    var value = $(this).val();
    if(value=='Y'){
        $("#frmplace").prop('disabled',false);
    }else if (value='N'){
        $("#frmplace").prop('disabled',true);
    }else{
        $("#frmplace").prop('disabled',true);
    }
});

$("input[name='frmdattend']").on('change',function(){
    var value = $(this).val();
    if(value=='OTHER'){
        $("#frmdothatt").prop('disabled',false);
    }else if (value=='NONEE'){
        $("#frmatfrom").prop('disabled',true);
        $("#frmattendto").prop('disabled',true);
        $("#frmdothatt").prop('disabled',true);
    }else{
        $("#frmdothatt").prop('disabled',true);
        $("#frmatfrom").prop('disabled',false);
        $("#frmattendto").prop('disabled',false);
    }
});

$("input[name='frmcorpse']").on('change',function(){
    var value = $(this).val();
    if(value=='B'){
        $("#frmburyno").prop('disabled',false);
        $("#frmburydate").prop('disabled',false);
        $("#frmcemname").prop('disabled',true);
        $("#frmcemadd").prop('disabled',true);
        $("#frmothcor").prop('disabled',true);
    }else if (value=='C'){
        $("#frmcemname").prop('disabled',false);
        $("#frmcemadd").prop('disabled',false);
        $("#frmburyno").prop('disabled',true);
        $("#frmburydate").prop('disabled',true);
        $("#frmothcor").prop('disabled',true);
    }else if (value=='O'){
        $("#frmcemname").prop('disabled',true);
        $("#frmcemadd").prop('disabled',true);
        $("#frmburyno").prop('disabled',true);
        $("#frmburydate").prop('disabled',true);
        $("#frmothcor").prop('disabled',false);
    }else{
        $("#frmcemname").prop('disabled',true);
        $("#frmcemadd").prop('disabled',true);
        $("#frmburyno").prop('disabled',true);
        $("#frmburydate").prop('disabled',true);
        $("#frmothcor").prop('disabled',true);
    }
});

$("input[name='frmcertify']").on('change',function(){
    var value = $(this).val();
    if(value=='Y'){
        $("#frmalertdate").prop('disabled',false);
        $("#frmcertdate").prop('disabled',false);
        $("#frmcertname").prop('disabled',false);
    }else if (value=='N'){
        $("#frmalertdate").prop('disabled',true);
        $("#frmcertdate").prop('disabled',true);
        $("#frmcertname").prop('disabled',true);
    }else{
        $("#frmalertdate").prop('disabled',true);
        $("#frmcertdate").prop('disabled',true);
        $("#frmcertname").prop('disabled',true);
    }
});

