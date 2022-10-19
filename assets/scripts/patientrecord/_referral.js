  
  
  function initReferralto(enccode,hpercode)
  {
	  $("#dateRefto").val(getTimeLocale());
	  SelFacilities();
	  SelFacType();
	  SelDiagnosis();
	  SelDocRef();
  }
  
  table.on('click','#btnReferral',function(){
		var enccode=atob($(this).data('enccode'));
		var hpercode=atob($(this).data('percode'));
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var percode = encodeURIComponent(encodeURIComponent(hpercode));
		$("#dateRefto").val(getTimeLocale());
		$("#refEnccode").val(enctr);
		$("#refHpercode").val(percode);
		SelFacilities();
		SelFacType();
		SelDiagnosis();
		SelDocRef();
		$('#refertoModal').modal('show');
	});
	
	