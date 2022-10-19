var baseURL=$('#base_url').val();
	
$("#formlink").on('click',function(){
			 var enccode =  $("#Enccode").val();
			 var hpercode =  $("#Hpercode").val();
	 		 enccode = encodeURIComponent(encodeURIComponent(enccode));
	 		 hpercode = encodeURIComponent(encodeURIComponent(hpercode));
    			
 			if($('#Occupation').is(':checked') && $('#Citizenship').is(':checked')) { 
             window.open(href = baseURL + "Rep_MedRec/DischargedForm/"+ enccode+ "/" +hpercode);
            } 
            else if($('#Occupation').is(':checked')) { 
              window.open(href = baseURL + "Rep_MedRec/Occupation/" + enccode+ "/" +hpercode);
            } 
            else if($('#Citizenship').is(':checked')){ 
              window.open(href = baseURL + "Rep_MedRec/Citizenship/" + enccode+ "/" +hpercode);
            }
            else {
               window.open(href = baseURL + "Rep_MedRec/None/" + enccode+ "/" +hpercode);
            }

		});

		

	 $('#frmPatSearch').submit('click',function(){
		$.ajax({
			url:baseURL+"Patient/PatientAdvanceSearch",
			type:"POST",
			data:new FormData(this),
			dataType: "JSON",
			processData:false,
			contentType:false,
			cache:false,
			async:true,
			success: function(data,response){
			$("#PatSearchList").modal('show');
			$("#PatSearch").modal('hide');
			PatSearchList(data);
			},
			error: function(response){
			alert("Error:Please try again!");
		}});
			return false;
	});
	
	function PatSearchList(data)
	 {
		var table =$("#TblPatSearchList").DataTable({
		 data: data,
		 destroy: true,
		 className:'table table-sm table-responsive table-bordered table-striped table-hovered',
			columns: [
			{"data" : "hpercode"},
			{"data" : "patfirst"},
			{"data" : "patlast"},
			{"data" : "patmiddle"},
			{"data" : "patsex"}],
		 });	

		$('#TblPatSearchList').on( 'click', 'tr', function () {
		  var data = table.row(this).data();
		  var hpercode= data['hpercode'];
		  PatEncounter(hpercode);

	
		 });
	 }
	 

	function PatEncounter(hpercode) {
    $('#PatEncList').modal('show');
    $("#PatSearchList").modal('hide');

    var table2 = $('#TblPatEncList').DataTable({

      "pageLength": 5,
      "lengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
      "pagingType": "full_numbers",
      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [[1, "desc"]],
      "ajax": {

        url: "searchPatEncounter/" + hpercode,
        type: 'POST'
      },
      "columns": [
        {'data': 'hpatcode', 'defaultContent': ''},
        {'data': 'encdate', 'defaultContent': ''},
        {'data': 'toecode', 'defaultContent': ''},
        {'data': 'disdate', 'defaultContent': ''},
        {'data': 'diagdesc', 'defaultContent': ''}
      ]
    });

    $('#TblPatEncList').on('click', 'tr', function () {
      var data = table2.row(this).data();
      console.log(data);
      $('#PatEncList').modal('hide');
      $("#enccode").val(data['enccode']);
	  $("#hpercode").val(data['hpatcode']);
      $('#formIden').val('insert');
      $('#Request').modal('show');

      
    });

  }