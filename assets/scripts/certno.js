function getCertNo(enccode){
	var obj;
	$.ajax({
		type: "POST",
		url: baseURL+"MedicoLegalALL/getCertNo",
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


function intkey(enccode)
{
	var obj = getCertNo(enccode);
	var enccode = obj['enccode'];
	var date = new Date();
	var year = date.getFullYear();

	var i;
	var x;
	for (i = 0; i <= enccode; i++) {
		x= i+1;

		var total = year+ "0000000"+ x;		
		$("#certno").val(total);
	}

}	


