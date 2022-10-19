$("#frmAlert").validate({
		 rules:{
			frmalertdate:'required',
			frmalertype:'required',
			frmalertdesc:'required', 
			},	
		 messages:{
			frmalertdate:'Datetime is required',
			frmalertype:'Please select type',
			frmalertdesc:'Description is required', 
			},
		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
		error.addClass('invalid-feedback');
		error.insertAfter(element); 
	  },
	  highlight: function highlight(element) {
		$(element).addClass('is-invalid').removeClass('is-valid');
		  if( $(element).hasClass('select2') && $(element).next('.select2-container').length)
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