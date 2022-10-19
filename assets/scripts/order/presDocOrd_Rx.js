  
  $("#btnRxDrug").on("click",function(){
	$("#modalPresRX").modal({backdrop:'static',show:true});
	 var src =baseURL+'DoctorsOrder/rxDrugpdf/'+URLencode(enccode)+'/'+hpercode;
	var x = document.getElementById("rxDrug_pdf").src = src;
	$("#rxDrug_pdf").attr("src", src);
  });

 