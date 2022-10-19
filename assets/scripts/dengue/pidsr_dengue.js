var Module=$('#module').val();
	
	$('#NS1RDT_result').change(function() {
        if( $(this).val() == '') {
            $('#NS1RDT_date').attr('readonly', true );
            $('#NS1RDT_date').val('');
        } else {    
			$('#NS1RDT_date').removeAttr('readonly');   
        }
    });
	
	$('#PCR_result').change(function() {
        if( $(this).val() == '') {
            $('#PCR_date').attr('readonly', true );
            $('#PCR_date').val('');
        } else {    
			$('#PCR_date').removeAttr('readonly');
           
        }
    });
	
	$('#IgG_result').change(function() {
        if( $(this).val() == '') {
            $('#IgG_date').attr('readonly', true );
            $('#IgG_date').val('');
        } else {    
			$('#IgG_date').removeAttr('readonly');
        }
    });
	
	$('#IgM_result').change(function() {
        if( $(this).val() == '') {
            $('#IgM_date').attr('readonly', true );
            $('#IgM_date').val('');
        } else {    
			$('#IgM_date').removeAttr('readonly');
        }
    });
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 