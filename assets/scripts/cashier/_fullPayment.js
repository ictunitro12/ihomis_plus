$('#formPayment').on('submit', function(e){



var chrgRow  = $("#paymentbl").DataTable().rows().data().toArray();
var roomCharges  = $("#roomCharges").DataTable().rows().data().toArray();

console.log(roomCharges);












    return false;
});

