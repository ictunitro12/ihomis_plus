    var Module=$('#module').val();
	
$("#HealthWomenTable").on("click",".ModalEditWomen",function(){
        var data = $(this).data();
        var obj = getWomen(data['hpercode']);     
        console.log(obj);

        $("#code").val(obj['hpercode']);
        $("#toecode").val(obj['toecode']);       
      
        $("#fecun").val(obj['fecun']);
        $("#partner").val(obj['partner']);
        $("#usefpmethod").val(obj['fpmethod']);
        $("#morechild").val(obj['planchild']);
      
        $("#counselling").val(obj['counsel']);
        $("#wattype").val(obj['what_type']);
        $("#methodname").val(obj['cmethod']);
        $("#method_specify").val(obj['cmethod_sp']);
        $("#modernmethod").val(obj['switch']);

        var report = obj['dtereport'];
        var reports = ((report == "1970-01-01 00:00:00") || (report == null)) ? "0000-00-00 00:00:00" : setTimeLocale(report);
        $("#datereport").val(reports);

        var assess = obj['dteassess'];
        var assessment = ((assess == "1970-01-01 00:00:00") || (assess == null)) ? "0000-00-00 00:00:00" : setTimeLocale(assess);
        $("#dateassess").val(assessment);

        var child = obj['dtechild'];
        var childs = ((child == "1970-01-01 00:00:00") || (child == null)) ? "0000-00-00 00:00:00" : setTimeLocale(child);
        $("#yesdate").val(childs);

        ////////////////////////////////////////////////CONDITION

         if (obj['partner']== 'Y'){
            $('#usefpmethod').removeAttr("disabled");
            $('#morechild').removeAttr("disabled");
        }
        else  if (obj['partner']== 'N'){
             $('#morechild').removeAttr("disabled");
             $('#counselling').removeAttr("disabled");
        }

        else{
            $('#usefpmethod').attr( "disabled", true );
            $('#morechild').attr( "disabled", true );
        }

       if (obj['fpmethod'] == 'Y'){
             $('#methodname').removeAttr("disabled");
             $('#wattype').removeAttr("disabled");
        }
        else{
            $('#methodname').attr( "disabled", true );
            $('#wattype').attr( "disabled", true );
        }

         if (obj['what_type']== 'T'){
           $('#modernmethod').removeAttr("disabled");
        }
        else{
            $('#modernmethod').attr( "disabled", true );
        }

        if (obj['cmethod']== '13'){
           $('#method_specify').removeAttr("disabled");
        }
        else{
            $('#method_specify').attr( "disabled", true );
        }

         if (obj['planchild']== 'Y'){
           $('#yesdate').removeAttr("disabled");
           $('#counselling').attr( "disabled", true );

        }
        else  if (obj['planchild']== 'N'){
           $('#counselling').removeAttr("disabled");
            $('#yesdate').attr( "disabled", true );

        }
        else{
            $('#yesdate').attr( "disabled", true );
            $('#counselling').attr( "disabled", true );
        }

         $("#formIden").val('update');
        initcheck();
        $('#ModalAddWomen').modal('show');
        

    });

    function initcheck()
    {
           $("#usefpmethod").attr("disabled", true);
           $("#morechild").attr("disabled", true);
           $("#yesdate").attr("disabled", true);
           $("#counselling").attr("disabled", true);
           $("#wattype").attr("disabled", true);
           $("#methodname").attr("disabled", true);
           $("#method_specify").attr("disabled", true);
           $("#modernmethod").attr("disabled", true);
           
    }

	function AddWomen(){
        initcheck();
		$('#ModalAddWomen').modal('show');		
		$("#dateassess").val(getTimeLocale());
		$("#datereport").val(getTimeLocale());
		$("#code").val($("#percode").val());
		$("#enccode").val($("#encode").val());
		$("#toecode").val($("#toeccode").val());
		$("#formIden").val('insert');
		
	}

 	$('#partner').change(function() {
                if( $(this).val() == 'Y') {
                    $('#usefpmethod').removeAttr("disabled");
                    $('#morechild').removeAttr("disabled");
                } 
                else if( $(this).val() == 'N') {
                    $('#usefpmethod').attr( "disabled", true);    
                    $("#usefpmethod").val($("#usefpmethod option:first").val());            	
                              	
                    $('#morechild').removeAttr("disabled");
                    $("#morechild").val($("#usefpmethod option:first").val());  

                    $('#wattype').attr( "disabled", true );
                    $('#method').attr( "disabled", true );
                    $('#method_specify').attr( "disabled", true );

                    $("#wattype").val($("#wattype option:first").val());  
                    $("#method").val($("#method option:first").val());  
                    $("#method_specify").val("");  

                    $('#modernmethod').attr( "disabled", true );
                    $("#modernmethod").val($("#wattype option:first").val());  

                    $('#methodname').attr( "disabled", true );
                    $("#methodname").val($("#method option:first").val());  

                } 
                else {       
                    $('#usefpmethod').attr( "disabled", true );
                    $('#morechild').attr( "disabled", true );
                    $('#methodname').attr( "disabled", true );

                    $("#methodname").val($("#method option:first").val());  
                    $("#morechild").val($("#morechild option:first").val());  
                    $("#usefpmethod").val($("#usefpmethod option:first").val());  
                }
            });

 	$('#usefpmethod').change(function() {
                if( $(this).val() == 'Y') {
                    $('#wattype').removeAttr("disabled");
                    $('#methodname').removeAttr("disabled");
                } 
                else {       
                    $('#wattype').attr( "disabled", true );
                    $('#methodname').attr( "disabled", true );
                    $('#method_specify').attr( "disabled", true );
                    $('#modernmethod').attr( "disabled", true );

                    $("#wattype").val($("#wattype option:first").val());  
                    $("#methodname").val($("#method option:first").val());  
                    $("#method_specify").val("");  
                     $("#modernmethod").val($("#modernmethod option:first").val()); 

                }
            });
    $('#methodname').change(function() {
                if( $(this).val() == '13') {
                    $('#method_specify').removeAttr("disabled");
                } 
                else {       
                    $('#method_specify').attr( "disabled", true );
                    $("#method_specify").val("");  
                }
            });

 	$('#wattype').change(function() {
                if( $(this).val() == 'T') {
                    $('#modernmethod').removeAttr("disabled");
                } 
                else {       
                    $('#modernmethod').attr( "disabled", true );
                    $("#modernmethod").val($("#wattype option:first").val());  
                }
            });



 	$('#morechild').change(function() {
                if( $(this).val() == 'Y') {
                    $('#yesdate').removeAttr("disabled");
                    $('#yesdate').val(getTimeLocale());
                    $('#counselling').attr( "disabled", true );
                    $("#counselling").val($("#counselling option:first").val());  

                } 
                else if( $(this).val() == 'N') {
                    $('#counselling').removeAttr("disabled");
                    $("#yesdate").val("0000-00-00 00:00:00");
                    $('#yesdate').attr( "disabled", true );
                } 
                else {      
                	
					$("#yesdate").val("0000-00-00 00:00:00");

                    $('#yesdate').attr( "disabled", true );
                   
                    $('#counselling').attr( "disabled", true );
                    $("#counselling").val($("#counselling option:first").val());  
                }
            });

