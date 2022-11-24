$("#btnTransaction").on('click',function(){
    var enccode=$.session.get('enccode');
    $.post(baseURL+'Pharmacy/pharmacylog',{type:'004',enccode:enccode},function(){
        var x = document.getElementById("chargeslip").src = src;
        $("#chargesPDF").attr("src", src);
    });
});

 