	Module=$('#module').val();

 $(".ModalAddContactTracing").on('click',function(){

  $('#AddContactTracing').modal('show');
  $("#ContactIden").val('insert');
  $("#contactenccode").val($("#encountercode").val());
  $("#contacthpercode").val($("#percode").val());

});

 $(".ModalAddTravelA").on('click',function(){
  $('#AddTravelA').modal('show');
  $("#Travel_1_Iden").val('insert');
  $("#travel_1_enccode").val($("#encountercode").val());
  $("#travel_1_hpercode").val($("#percode").val());

});

 $(".ModalAddTravelB").on('click',function(){

  $('#AddTravelB').modal('show');
  $("#Travel_2_Iden").val('insert');
  $("#travel_2_enccode").val($("#encountercode").val());
  $("#travel_2_hpercode").val($("#percode").val());

});

 $("#ConTraceTable").on("click",".ModalEditConTrace",function(){
  var data = $(this).data();
  $('#AddContactTracing').modal('show');
  $("#contactid").val(data['contact_id']);
  $("#contactenccode").val(data['enccode']);
  $("#contacthpercode").val(data['hpercode']);
  $("#contact_fname").val(data['name']);
  $("#contact_age").val(data['age']);
  $("#contact_address").val(data['address']);
  $("#contact_illness").val(data['illness']);

  var dateobserve =data['dteobserve_ill'];
  var observe = ((dateobserve == "1970-01-01 00:00:00") || (dateobserve == null)) ? "0000-00-00 00:00:00" : setTimeLocale(dateobserve);  
  $("#contact_dteill").val(observe);

  $("#contact_number").val(data['contactno']);
  $("#ContactIden").val('update');

});

 $("#ConTraceTable").on("click",".ModalDeleteConTrace",function(){
  var data = $(this).data();

  $('#DeleteContactTracing').modal('show');
  $("#delcontactformIden").val('delete');
  $("#deletecode").val(data['enccode']);
  $("#deletecontactid").val(data['contact_id']);
});

 $("#TravelATable").on("click",".ModalEditTravelA",function(){
  var data = $(this).data();

  $('#AddTravelA').modal('show');
  $("#travel_1_id").val(data['travelhist1_id']);
  $("#travel_1_enccode").val(data['enccode']);
  $("#travel_1_hpercode").val(data['hpercode']);
  $("#travel1_place").val(data['over_stay']);

  var datearrive =data['dtearrive'];
  var arrive = ((datearrive == "1970-01-01 00:00:00") || (datearrive == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datearrive);  
  $("#travel1_arrival").val(arrive);

  var datedepart =data['dtedepart'];
  var depart = ((datedepart == "1970-01-01 00:00:00") || (datedepart == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datedepart);  
  $("#travel1_departure").val(depart);

  $("#Travel_1_Iden").val('update');

});

 $("#TravelATable").on("click",".ModalDeleteTravelA",function(){
  var data = $(this).data();

  $('#DeleteAddTravelA').modal('show');
  $("#deltravel1_formIden").val('delete');
  $("#deletetravelcode1").val(data['enccode']);
  $("#deletetravelid1").val(data['travelhist1_id']);
});


 $("#TravelBTable").on("click",".ModalEditTravelB",function(){
  var data = $(this).data();

  $('#AddTravelB').modal('show');
  $("#travel_2_id").val(data['travelhist2_id']);
  $("#travel_2_enccode").val(data['enccode']);
  $("#travel_2_hpercode").val(data['hpercode']);
  $("#travel2_place").val(data['over_stay']);

  var datearrive =data['dtearrive'];
  var arrive = ((datearrive == "1970-01-01 00:00:00") || (datearrive == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datearrive);  
  $("#travel2_arrival").val(arrive);

  var datedepart =data['dtedepart'];
  var depart = ((datedepart == "1970-01-01 00:00:00") || (datedepart == null)) ? "0000-00-00 00:00:00" : setTimeLocale(datedepart);  
  $("#travel2_departure").val(depart);

  $("#Travel_2_Iden").val('update');

});

 $("#TravelBTable").on("click",".ModalDeleteTravelB",function(){
  var data = $(this).data();

  $('#DeleteAddTravelB').modal('show');
  $("#deltravel_2_formIden").val('delete');
  $("#deletetravelcode2").val(data['enccode']);
  $("#deletetravelid2").val(data['travelhist2_id']);
});

