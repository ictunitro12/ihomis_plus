function alertList(hpercode) {
  var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
  var enccode = encodeURIComponent(encodeURIComponent(enccode));
  var data = new Object();
  data.id = "alrtbl";
  data.link = baseURL + "MedicalRecords/alertDetails/"+hpercode;
  data.type = "POST";
  data.destroy = true;
  data.searching = true;
  data.paging = true;
  data.info = true;
  data.columns = [
  {data:'date'},
    {
	  data : 'alertype',
      render: function (data, type, row) {
        switch (data) {
          case "01":
            return "Allergy";
            break;
          case "02":
            return "Disability";
            break;
          case "03":
            return "Drug";
            break;
          case "04":
            return "Handicaps";
            break;
          case "05":
            return "Impairment";
            break;
          default:
            return "N/A";
        }
      },
    },
	{
	  data : 'altstat',
      render: function (data, type, row) {
        switch (data) {
          case "A":
            return "<i class='fa fa-check'></i>Active";
            break;
          case "I":
            return "<i class='fa fa-close'></i>Inactive";
            break;
          default:
            return "N/A";
        }
      },
    },
	{data:'alertdesc'},
	{ data : "enccode",
				render: function(data, type, row){
				return "<div class='btn-group btn-sm float-right'>"+
					   "<button type='button' class='btn btn-outline-success btn-sm  dropdown-toggle dropdown-toggle-split' data-toggle='dropdown'>"+
					   "<span class='caret'></span>"+
					   "<span class='sr-only'>Toggle Dropdown</span>"+
					   "</button>"+
					   "<div class='dropdown-menu' x-placement='bottom-start' style='position: absolute; transform: translate3d(71px, 34px, 10px); top: 0px; bottom:0px; left: 0px; right: 0px; will-change: transform;' role='menu'>"+
					   "<a href='javascript:void(0);' class='dropdown-item'  data-hpercode='"+row.hpercode+"' data-seqno='"+row.halseqno+"' data-type='"+row.alertype+"' id='btnAlertUpdate'><i class='fa fa-edit'></i>&nbsp Edit</a>"+
					   "<a href='javascript:void(0);' class='dropdown-item'   data-hpercode='"+row.hpercode+"' data-seqno='"+row.halseqno+"' data-type='"+row.alertype+"' id='btnAlertDelete'><i class='fa fa-trash'></i>&nbsp Delete</a>"+
					   "</div>"+
					   "<button type='button'  id ='btnPatientProfile' data-enccode='"+row.enccode+"'  data-hpercode='"+row.hpercode+"' class='btn btn-outline-success  btn-sm ' ><i class='fa fa-user-circle-o fa-sm'></i></button>"+
					   "</div>";
				}	
	}
  ];
   data.coldef = [
   {
	targets:["_all"],
	className:"align-middle" 
   }
   ];
  Datatable(data);
}

$("#Alertbtn").on('click',function () {
  $("#patientAlertModal").modal("show");
  $("#alerthpercode").val($.session.get("hpercode"));
  $("#frmstatus option[value=" +'A'+ "]").prop('selected', true);
  $("#formType").val('insert');
});

$("#alrtbl").on('click','#btnAlertDelete',function(){
	var hpercode =$(this).data('hpercode');
	var seqno =	$(this).data('seqno');
	var type =	$(this).data('type');
	$("#delalertseq").val(seqno);
	$("#delalerthpercode").val(hpercode);
	$("#deleteAlertModal").modal("show");
});

$("#alrtbl").on('click','#btnAlertUpdate',function(){
	var hpercode =$(this).data('hpercode');
	var seqno =	$(this).data('seqno');
	var type =	$(this).data('type');
	$("#formType").val('update');
	$.post(baseURL+"MedicalRecords/alertInfo",
	  {
		hpercode:hpercode,
		alertype:type,
		halseqno:seqno,
	  },
	  function(data, status){
		var obj = $.parseJSON(data);
		$("#alertDate").val(setTimeLocale(obj['alertdate']));
		$("#frmalertype option[value=" + obj['alertype']+ "]").prop('selected', true);
		$("#frmalertdesc").val(obj['alertdesc']);
		$("#alerthpercode").val(obj['hpercode']);
		 $("#frmstatus option[value=" +obj['altstat']+ "]").prop('selected', true);
		$("#alertseq").val(obj['halseqno']);
		$("#patientAlertModal").modal("show");
	  });
});


$("#frmAlert").on("submit", function (e) {
if ($('#frmAlert').valid()){ 
  $.ajax({
    method: "POST",
    url: baseURL + "MedicalRecords/saveAlertForm",
    data: $("#frmAlert").serialize(),
    success: function (data) {
		toastr.success("Successfuly Saved! ", "Success");
		$("#patientAlertModal").modal("hide");
		$("#alrtbl").DataTable().ajax.reload();
    },
	error:function(data){
		toastr.error("Failed to save! ", "Error");
		$("#patientAlertModal").modal("hide");
		$("#alrtbl").DataTable().ajax.reload();
	}
  });
  return false;
}
});

$('#frmAlertDelete').on('submit', function(e){
      var form = this;
		$.ajax({
		type : "POST",
		url  : baseURL+"MedicalRecords/saveAlertForm",
		data :new FormData(this),
		processData: false,
		contentType: false,
		success: function(data,response){
			$('#deleteAlertModal').modal('hide');
			toastr.success('Successfully Deleted! ' ,'Success');
			$("#alrtbl").DataTable().ajax.reload();
		},
	
		error: function(xhr, desc, err){
			toastr.error(xhr ,'Error');
		}
		});
		  return false;
	}); 
