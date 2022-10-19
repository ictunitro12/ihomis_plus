	var Module=$('#module').val();

     $("#AssessmentTable").on("click",".ModalAssessment",function(){
        var base_url= $('#base_url').val();
        var data = $(this).data();
        console.log(data);
        $('#ModalAssess').modal('show');
        var hpercode= data['hpercode'];
        console.log(hpercode);

        hpercode = encodeURIComponent(encodeURIComponent(hpercode));
        $("#assess_code").val(hpercode);
        $('#AssessmentPDF').html('<embed src="'+base_url+"FamilyPlanning/AssessmentForm/"+hpercode+'" frameborder="2" width="100%" height="800px" id="AssessmentPDF">');
    
    });

    $("#AssessmentTable").on("click",".ModalEditAssessment",function(){
        var data = $(this).data();
        var obj = getAssessment(data['hpercode'], data['enccode']);     
        console.log(obj);

        $("#assess_code").val(obj['hpercode']);
        $("#assess_enccode").val(obj['enccode']);
        $("#assess_toecode").val(obj['toecode']);       
      
        $("#client").val(obj['typeclient']);
        $("#assess_method").val(obj['cmethod']);
        $("#assess_method_specify").val(obj['cmethod_sp']);

       setEmployees(obj['administer']);    
        $("#source").val(obj['source']);
        $("#givedeworm").val(obj['givendeworm']);
        $("#wormdose").val(obj['dewormdose']);
        $("#remarks").val(obj['remark']);
        $("#modernmethod").val(obj['switch']);

        var report = obj['dtereport'];
        var reports = ((report == "1970-01-01 00:00:00") || (report == null)) ? "0000-00-00 00:00:00" : setTimeLocale(report);
        $("#assess_datereport").val(reports);

        var assess = obj['dteassess'];
        var assessment = ((assess == "1970-01-01 00:00:00") || (assess == null)) ? "0000-00-00 00:00:00" : setTimeLocale(assess);
        $("#assess_dateassess").val(assessment);

        var visit = obj['schedvisit'];
        var schedule = ((visit == "1970-01-01 00:00:00") || (visit == null)) ? "0000-00-00 00:00:00" : setTimeLocale(visit);
        $("#nextvisit").val(schedule);

         var worm = obj['dtedeworm'];
        var deworm = ((worm == "1970-01-01 00:00:00") || (worm == null)) ? "0000-00-00 00:00:00" : setTimeLocale(worm);
        $("#datedeworm").val(deworm);

        var givedeworm =  obj['givendeworm'];

        ////////////////////////////////////////////////

        if (givedeworm == "Y"){
            console.log(givedeworm);
            $('#datedeworm').removeAttr("disabled");
            $('#wormdose').removeAttr("disabled");
        }
        else{
             $('#datedeworm').attr("disabled", true);
             $('#wormdose').attr("disabled", true);
        }


        if (obj['cmethod']== "13"){
           $('#assess_method_specify').removeAttr("disabled");
        }
        else{
            $('#assess_method_specify').attr( "disabled", true );
        }


         $("#formIdentification").val('update');
        initcheck();
        SelEmployees();
        $('#ModalAddAssessment').modal('show');
        

    });


    function initcheck()
    {
           $("#assess_method_specify").attr("disabled", true);    
           $("#dtedeworm").attr("disabled", true);    
           $("#dewormdose").attr("disabled", true);    
    }

	function AddAssessment(){
        $('#ModalAddAssessment').modal('show');
       
        let month = 1;
        let now = new Date();
        now.setMonth(now.getMonth() + month * 1);
    
        var time = new Date(now.getTime()-now.getTimezoneOffset()*60000).toISOString().substring(0,19);
        console.log(time);

        $("#nextvisit").val(time);
        SelEmployees();
        initcheck();
       $("#assess_datereport").val(getTimeLocale());
       $("#assess_dateassess").val(getTimeLocale());
        $("#assess_code").val($("#percode").val());
        $("#assess_enccode").val($("#encode").val());
        $("#assess_toecode").val($("#toeccode").val());
        $("#formIdentification").val('insert');

        }


 	$('#givedeworm').change(function() {
                if( $(this).val() == 'Y') {
                    $('#dtedeworm').val(getTimeLocale());
                    $('#dtedeworm').removeAttr("disabled");
                    $('#dewormdose').removeAttr("disabled");
                } 
                else {       
                    $('#dtedeworm').val("0000-00-00 00:00:00");
                    $('#dtedeworm').attr( "disabled", true );
                    $('#dewormdose').attr( "disabled", true );
                    $("#dewormdose").val($("#dewormdose option:first").val());  
                }
            });

$('#assess_method').change(function() {
                if( $(this).val() == '13') {
                    $('#assess_method_specify').removeAttr("disabled");
                } 
                else {       
                    $('#assess_method_specify').attr( "disabled", true );
                    $("#assess_method_specify").val("");  
                }
            });