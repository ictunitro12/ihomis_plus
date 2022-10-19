$('path').click( function(){
    var state = $(this).attr('fill');
    if(state == '#f5f5f5'){
        $(this).attr("fill", "#2038fb");
     
    }else{
        $(this).attr("fill", "#f5f5f5");
    }
});