var enccode=$.session.get('enccode');
var hpercode=$.session.get('hpercode');
var enctr = encodeURIComponent(encodeURIComponent(enccode));
var percode = encodeURIComponent(encodeURIComponent(hpercode));

var baseURL=$('#base_url').val();


function tab_MaipListCharge(enccode,uniquecode)
{
    var data = new Object();
    data.search = false;
    data.paging = true;
    data.info = false;
    data.orderable = false;

    data.id = "TableMAIPChargeList";
    data.link = baseURL+"SocialService/tab_MaipListCharge/"+enctr+ "/" + uniquecode,
    data.type = "POST";
    data.coldef =[
    {
        targets: [0,1,2,3],
        visible:false,
        orderable:false,
    },
    ],
    loadTable(data);
}


$("#TableMAIP").on("click",".ModalMAIPCharge",function(){
    var data = $(this).data();
    var uniquecode = data['unique_code'];
    var trandate = data['trandate'];
    var unique_code = encodeURIComponent(encodeURIComponent(uniquecode));

    $('#ModalMAIPCharge').modal({ backdrop: 'static'}); 
    $('#charge_uniquecode_maip').val(uniquecode);
    $('#charge_trandate_maip').val(trandate);
    $('#chargeEnccode_maip').val(enccode);
    tab_MaipListCharge(enccode, unique_code);

    getTOTALCharges(enccode, unique_code);

    var obj = getMAIP(percode, unique_code);
    var remamount= obj['remamount'];

    if (remamount==0)
    {
        $("#btnMAIPCharge_Add").prop('disabled',true);
    }

});

$("#btnMAIPCharge_Add").on("click",function(){
    var UCode= $('#charge_uniquecode_maip').val();  
    var Tdate= $('#charge_trandate_maip').val();    
    $('#ModalMAIPCharge_modal').modal({ backdrop: 'static'});   
    SelCharges();
    $('#chargeMAIPformIden').val('insert'); 
    $('#chrguniquecode_maip').val(UCode);
    $('#chrgtrandate_maip').val(Tdate);
    $('#chrgEnccode_maip').val(enccode);
    $('#chrgHpercode_maip').val(percode);
    var obj = getMAIP(percode, UCode);
    $('#maip_remain_amount').val(obj['remamount']);
    
});

$('#maip_charge_amount').on('change', function() {
    if ($('#chargeMAIPformIden').val() == 'insert')
    {       
        var remain = document.getElementById('maip_remain_amount').value;
        var chargeamount = document.getElementById('maip_charge_amount').value;
        var result = parseInt(remain) - parseInt(chargeamount);
        $('#maip_avail_amount').val(result);
    }

    else if($('#chargeMAIPformIden').val() == 'update')
    {
      var remain = document.getElementById('maip_remain_amount').value;
      var chargeamount = document.getElementById('maip_charge_amount').value;
      var result = parseInt(remain) - parseInt(chargeamount);
      $('#maip_avail_amount').val(result);
  }
  else{
    toastr.error('Not enough Fund');
}
});



function SelCharges()
{
    $('[name $="_charges"]').select2({
        allowClear: true,
        placeholder:'Select Type of Charge',
        theme:'coreui',
        ajax:{
            url: baseURL+"Ref_Charge/searchCharge",
            dataType: "json",
            type:"POST",
            delay: 250,
            data: function(params){
                return{
                    searchCharge: params.term
                };
            },
            processResults: function(data){
                var results = [];
                $.each(data, function(index, item){
                    results.push({
                        id: item.chrgcode,
                        text: item.chrgdesc
                    });
                });
                return{
                    results: results
                }

            }
        }
    });


    $('[name $="_charges"]').on('change', function() {
        $("[name $='_charges'] option:selected",this);
        var chargecode =$('#_charges').val();
        checkChargecodeMAIP(enctr, chargecode);
    });

}

function setCharges(chrgcode) {
    SelCharges();
    var relSelect = $('#_charges');
    $.ajax({
        type: 'POST',
        url: baseURL + 'Ref_Charge/setCharge/' + chrgcode,
    }).then(function (data) {
        var obj = $.parseJSON(data);
        var option = new Option(obj['chrgdesc'], obj['chrgcode'], true, true);
        relSelect.append(option).trigger('change');
        relSelect.trigger({
            theme: 'coreui',
            type: 'select2:select',
            params: {
                data: data
            }
        });
    });
}




$('#frmMAIPCharge').validate({
    submitHandler: function (form) {
        var chargeamount=$('#maip_charge_amount').val();
        var remainamount=$('#maip_remain_amount').val();
        var availamount=$('#maip_avail_amount').val();
        
        if( parseInt(chargeamount) <= parseInt(remainamount))
        {
            var  POSTURL = baseURL+"SocialService/tab_saveMAIPCharge";
            $.ajax({
                type : "POST",
                url  : POSTURL,
                dataType: "JSON",
                cache:false,
                async:true,
                data: $(form).serialize(),
                success: function(data){
                    var unique_code = $('#charge_uniquecode_maip').val();
                    if($('#chargeMAIPformIden').val()=='insert')
                    {
                        $('#ModalMAIPCharge_modal').modal('hide');
                        toastr.success(' Successfully Saved! ' ,'Success');
                        tab_MaipListCharge(enccode,unique_code);
                        getTOTALCharges(enccode,unique_code);
                        tab_MAIP(hpercode);

                        var obj = getMAIP(hpercode, unique_code);
                        var remamount= obj['remamount'];

                        if (remamount==0)
                        {
                            $("#btnMAIPCharge_Add").prop('disabled',true);
                        }

                    }
                    else if($('#chargeMAIPformIden').val()=='update')
                    {
                        toastr.success('Successfully Updated! ' ,'Success');
                        $('#ModalMAIPCharge_modal').modal('hide');
                        tab_MaipListCharge(enccode,unique_code);
                        getTOTALCharges(enccode,unique_code);
                        tab_MAIP(hpercode);

                        var obj = getMAIP(hpercode, unique_code);
                        var remamount= obj['remamount'];

                        if (remamount==0)
                        {
                            $("#btnMAIPCharge_Add").prop('disabled',true);
                        }
                    }

                },
                error: function(data){
                    toastr.error('Error!','Error');
                }
            });
            return false;
            $(form).submit();
        }
        else{
            toastr.error('Charges Exceed Fund Amount!','Error');
        }   
    },
    rules: {
        selCharge:'required',
        amttypecharge:'required',
    },  
    messages: {
        selCharge:'required',
        amttypecharge:'required!',
    },
    errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
        error.addClass('invalid-feedback');

        if (element.prop('type') === 'checkbox')
        {
            error.insertAfter(element.parent('label'));
        }else if(element.hasClass('select2-hidden-accessible'))
        {
            element=$("#selReg" + element.attr("id") + "ul").parent();

            error.insertAfter(element);
        }
        else 
        {
            error.insertAfter(element);
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


$('#frmMAIPChargeDelete').validate({
    submitHandler: function (form) {
        var  POSTURL = baseURL+"SocialService/tab_saveMAIPCharge";
        $.ajax({
            type : "POST",
            url  : POSTURL,
            dataType: "JSON",
            cache:false,
            async:true,
            data: $(form).serialize(),
            success: function(data){
                var unique_code = $('#maipUniqueCodeChargeDelete').val();

                if($('#deleteMAIPChargeIden').val()=='delete')
                {
                    toastr.success('Successfully Deleted! ' ,'Success');
                    $('#ModalMAIPChargeDelete').modal('hide');
                    tab_MaipListCharge(enctr,unique_code);
                    getTOTALCharges(enccode,unique_code);
                    tab_MAIP(hpercode);

                    var obj = getMAIP(hpercode, unique_code);
                    var remamount= obj['remamount'];
                    

                    if (remamount==0)
                    {
                        $("#btnMAIPCharge_Add").prop('disabled',true);
                    }
                    else{
                        $("#btnMAIPCharge_Add").prop('disabled',false);
                    }

                }
                else{
                    toastr.error('Error on deleting!','Error');
                }
            },
            error: function(data){
                toastr.error('Error on deleting!','Error');
            }
        });
        return false;
        $(form).submit();
    },

    errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
        error.addClass('invalid-feedback');

        if (element.prop('type') === 'checkbox')
        {
            error.insertAfter(element.parent('label'));
        }else if(element.hasClass('select2-hidden-accessible'))
        {
            element=$("#selReg" + element.attr("id") + "ul").parent();

            error.insertAfter(element);
        }
        else 
        {
            error.insertAfter(element);
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


$("#TableMAIPChargeList").on("click",".ModalEditMAIPTypeCharge",function(){
  var data = $(this).data();
  var uniquecode = data['unique_code'];
  var chrgcode = data['chrgcode'];
  var unique_code = encodeURIComponent(encodeURIComponent(uniquecode));

  $('#ModalMAIPCharge_modal').modal({ backdrop: 'static'}); 
  setCharges(chrgcode);

  var obj = getMAIPCharges(data['enccode'], data['unique_code'], data['chrgcode']);
  console.log

  $("#chargeMAIPformIden").val('update');
  $("#maip_charge_amount").val(obj['usedamount']);
  $("#chrgEnccode_maip").val(obj['enccode']);
  $("#chrgHpercode_maip").val(obj['hpercode']);
  $("#chrguniquecode_maip").val(obj['unique_code']);
  $("#maip_charge_amount_old").val(obj['usedamount']);


  $("#maip_charge_old").val(obj['chrgcode']);

  
  $("#maip_remain_amount").val(parseInt(obj['usedamount']) + parseInt(obj['remamount']));

  var remain = document.getElementById('maip_remain_amount').value;
  var chargeamount = document.getElementById('maip_charge_amount').value;
  var result = parseInt(remain) - parseInt(chargeamount);
  $('#maip_avail_amount').val(result);

  $("#chrgtrandate_maip").val(obj['trandate']);

});




$("#TableMAIPChargeList").on("click",".ModalDeleteMAIPTypeCharge",function(){
    var data = $(this).data();
    $('#ModalMAIPChargeDelete').modal({ backdrop: 'static'});   
    $("#deleteMAIPChargeIden").val('delete');

    $("#maipEnccodeChargeDelete").val(data['enccode']);
    $("#maipUniqueCodeChargeDelete").val(data['unique_code']);
    $("#maipChargeCodeDelete").val(data['chrgcode']);
    $("#ChargeUsedAmount").val(data['usedamount']);
    $("#maipHpercodeChargeDelete").val(hpercode);

    var obj = getMAIP(hpercode, data['unique_code']);
    $("#RemAmount").val(obj['remamount']);


    var remamount = document.getElementById('RemAmount').value;
    var used = document.getElementById('ChargeUsedAmount').value;
    var finalamount = parseInt(remamount) + parseInt(used);
    
    $("#ResultAmount").val(finalamount);

});




////////

function checkChargecodeMAIP(enctr, chargecode)
{
    var chargecode = encodeURIComponent(encodeURIComponent(chargecode));

    $.ajax({
        type: "POST",
        url: "../SocialService/checkChargecodeMAIP/"+enctr + "/" + chargecode,
        data: "JSON",
        success: function(data)
        { 

            if ($('#chargeMAIPformIden').val() == 'insert') 
            {
             if(data>0)
             {   
                toastr.error('Type of Charge selected already exist!');
                $('#_charges').empty();
                $('#maip_charge_amount').val('');
            }  
        }

        else if($('#chargeMAIPformIden').val() == 'update')
        {
            if ($('#maip_charge_old').val() == $('#_charges').val()) 
            {

            }
            else
            {
             if(data>0)
             {   
                toastr.error('Type of Charge selected already exist!');
                $('#_charges').empty();
                $('#maip_charge_amount').val('');
            }   
        }
    }
},
error: function(data)
{
    alert('Please Try Again!');
}
});
}


function getMAIPCharges(enccode, uniquecode, chrgcode){
    var enccode = encodeURIComponent(encodeURIComponent(enccode));
    var uniquecode = encodeURIComponent(encodeURIComponent(uniquecode));
    var chrgcode = encodeURIComponent(encodeURIComponent(chrgcode));
    $.ajax({
        type: "POST",
        url: baseURL+"SocialService/getMAIPCharges/"+ enccode + "/"+ uniquecode + "/" +chrgcode,
        data: "JSON",
        async:false,
        success: function(data,status){ 
            obj = $.parseJSON(data);
        },
        error: function(data,status){
        }
    });
    return obj;
}   


