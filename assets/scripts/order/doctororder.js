
	$(function(){
		initdocOrd(enccode,hpercode);
	});
	function initdocOrd(enccode,hpercpde)
	{
		PatientData(hpercode);
		PatientDemographics(hpercode);
		CaseInformation(enccode);
		orderExamination(enccode);
		orderPrescription(enccode);
		orderSupplies(enccode);
		docOrdDiet(enccode);
	}

		$('a[data-toggle="tab"]').on('click', function (e){
		var tab = e.target.id;
			switch(tab) {
			  case "exam-tab":
				$("#docOrdexam").DataTable().ajax.reload();		
				break;
			  case "prescri-tab":
			  		var form =$("#frmProc");
					  $("#docOrdpres").DataTable().ajax.reload();	
					selDoctor(form);
				break;
			  case "supplies-tab":
					var form =$("#frmProc");
					$("#docOrdsupp").DataTable().ajax.reload();	
					selDoctor(form);
				break;
			  case "diet-tab":
					var form =$("#frmDietOrder");
					$("#docOrdDiet").DataTable().ajax.reload();
					selDoctor(form);
					docOrdDiet(enccode);
				break;
			  case "disch-tab":
				
				break;
			  default:
			 break;
			}
		});
	
	
