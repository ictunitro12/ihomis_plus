var Module=$('#module').val();


function checkCertificate(enccode,hpercode)
{
	enccode= encodeURIComponent(encodeURIComponent(enccode));
	hpercode= encodeURIComponent(encodeURIComponent(hpercode));


	$.ajax({
		type: "POST",
		url: "../Rep_MedRec/checkCertificate/"+enccode+ "/" + hpercode,
		data: "JSON",
		success: function(data)
		{ 
			if(data==1)
			{	
				$('#ModalMedicoLegalAll').modal('show');	
				$("#code").val(enccode);
				$("#percode").val(hpercode);
				$('#MedicoLegalAllPDF').html('<embed src="'+"MedicoLegalALLView/"+enccode+"/"+hpercode+'" frameborder="2" width="100%" height="800px" id="MedicoLegalAllPDF">');
			}
			else
			{ 
				$('#ModalRequest').modal('show');	
				$("#code").val(enccode);
				var certnumber = getCertNo(enccode);
				console.log(certnumber);
			}
		},
		error: function(data)
		{
			alert('Please Try Again!');
		}
	});
}

function getCertNo(enccode){
        var obj;
        $.ajax({
            type: "POST",
            url: baseURL+"Rep_MedRec/getCertNo",
            data: { enccode: enccode},
            async:false,
            success: function(data,status){ 
                obj = $.parseJSON(data);
            },
            error: function(data,status){
            }
        });
		return obj;
    }

function intkey()
{
	var date = new Date();
	var year = date.getFullYear();

	var obj = getCertNo(enccode)
	var dao= year + '0000000' ;
	console.log(dao);
	$('#certno').val( dao);	
}	
