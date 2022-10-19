	var Module=$('#module').val();
    var baseURL=$('#base_url').val();

    function initWomenHealth(enccode,hpercode)
    {   
        uppercase();
        PatientData(hpercode);
        $('#encode').val(enccode);
        $('#percode').val(hpercode);
        getData(enccode);
        FamilyPlanningList(hpercode);
        checkFamilyPlanning(enccode);
        $('#hey2').attr('disabled', true);
        $('#btnFamilyPlanning').attr('disabled', true);
    }

     function FamilyPlanningList(hpercode)
    {
        var hpercode= encodeURIComponent(encodeURIComponent(hpercode));

        var data = new Object();
        data.id = "FamilyPlanningTable";
        data.link = baseURL+"FamilyPlanning/FamilyPlanningList/" + hpercode;
        data.type = "POST";
        data.coldef=[
        {
            targets : [0],
            searchable:false,
            visible:false,
        }
        ];
        loadTable(data);
    }



    function checkFamilyPlanning(enccode) {
        enccode = encodeURIComponent(encodeURIComponent(enccode));
        $.ajax({
            type: "POST",
            url: "../FamilyPlanning/checkFamilyPlanning/" + enccode,
            data: "JSON",
            success: function (data) {
                if (data == 1) {
                 $('#btnFamilyPlanning').attr('disabled', true);        
             }
             else {
                 $('#btnFamilyPlanning').removeAttr("disabled");        
             }
         },
         error: function (data) {
            alert('Please Try Again!');
        }
    });
    }

    function checkFamilyPlanningDelete(enccode) {
        enccode = encodeURIComponent(encodeURIComponent(enccode));
        $.ajax({
            type: "POST",
            url: "../FamilyPlanning/checkFamilyPlanning/" + enccode,
            data: "JSON",
            success: function (data) {
                if (data == 1) {
                    toastr.error('Cannot delete data', 'Error');        
                }
                else {
                    $('#ModalDeleteWomen').modal('show');
                    $("#formIdentification").val('delete');
                    $("#deletecode").val(enccode);
                }
            },
            error: function (data) {
                alert('Please Try Again!');
            }
        });
    }

    $('#btnFamilyPlanning').on('click', function (){
       var toecode= $("#toeccode").val();
       var entryby= $("#entrybycode").val();

       window.location.href=baseURL + "FamilyPlanning/FamilyPlanningForm/"+ btoa(toecode) + "/" + btoa(entryby) ;

   });

    $('#hey').on('click', function (){
       $("#PatSearch").modal('show');
       $("#PatientImage").prop('src','assets/img/avatars/none.png');

   });


   
    function getData(enccode)
    {
        var enccode = encodeURIComponent(encodeURIComponent(enccode));
        $.ajax({
            url: baseURL + "FamilyPlanning/getData/"+enccode,
            type:"POST",
            data:"JSON",
            processData:false,
            cache:false,
            async:true,
            success: function(data,response){
                var obj = $.parseJSON(data);
                $('#encode').val(obj['enccode']);
                $('#percode').val(obj['hpercode']);
                $('#toeccode').val(obj['toecode']);

            },
            error: function(response){
                toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp'+"Error : Fetching  data!");
            }});
    }

    $("#FamilyPlanningTable").on("click", ".ModalDeleteFamily", function () {
        var data = $(this).data();
       
        var enccode = atob(data['enccode']);
        var hpercode = atob(data['hpercode']);
        $('#DeleteFamilyPlanning').modal('show');
        $("#formIdentification").val('delete');
        $("#deletecode").val(enccode);
        $("#deletepercode").val(hpercode);

    });

    $("#FamilyPlanningTable").on("click", ".ModalFamilyPlanning", function () {
        var data = $(this).data();
       
        var enccode = atob(data['enccode']);
        var hpercode = atob(data['hpercode']);
        enccode = encodeURIComponent(encodeURIComponent(enccode));
        $("#code").val(enccode);
        window.location.href=baseURL + "FamilyPlanning/FamilyPlanningPDF/" + enccode+ "/" + hpercode;

        $('#ModalFamilyPlanning').modal('show');

        $('#FamilyPlanningPDF').html('<embed src="' + baseURL + "FamilyPlanning/FamilyPlanningPDF/" + enccode + "/" + hpercode+'" frameborder="2" width="100%" height="800px" id="FamilyPlanningPDF">');    
    });
