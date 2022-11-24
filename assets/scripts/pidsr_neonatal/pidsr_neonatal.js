var Module = $('#module').val();

function initcheck() {

   $('#outcome').change(function () {
      if ($(this).val() == 'D') {
         $('#date_died').removeAttr('disabled');
      } else {
         $('#date_died').attr("disabled", true);
         $('#date_died').val('');
      }
   });

   //radio button function
   //PLACE OF DELIVERY
   $("#podhome").click(function () {
      if ($(this).is(":checked")) {
         $("#placedeliveryothers").attr('disabled', true);
      }
   });
   $("#podhosp").click(function () {
      if ($(this).is(":checked")) {
         $("#placedeliveryothers").attr('disabled', true);
         $("#placedeliveryothers").val("");
      }
   });
   $("#podother").click(function () {
      if ($(this).is(":checked")) {
         $("#placedeliveryothers").removeAttr("disabled");
      }
   });

   //CORD WAS CUT USING;
   $("#cordcuts").click(function () {
      if ($(this).is(":checked")) {
         $("#cordcutothers").attr('disabled', true);
      }
   });
   $("#cordcutb").click(function () {
      if ($(this).is(":checked")) {
         $("#cordcutothers").attr('disabled', true);
         $("#cordcutothers").val("");
      }
   });
   $("#cordcutbam").click(function () {
      if ($(this).is(":checked")) {
         $("#cordcutothers").attr('disabled', true);
         $("#cordcutothers").val("");
      }
   });
   $("#cordcutu").click(function () {
      if ($(this).is(":checked")) {
         $("#cordcutothers").attr('disabled', true);
         $("#cordcutothers").val("");
      }
   });
   $("#cordcuto").click(function () {
      if ($(this).is(":checked")) {
         $("#cordcutothers").removeAttr("disabled");
      }
   });
   //Who attend the delivery
   $("#attendedeliveryp").click(function () {
      if ($(this).is(":checked")) {
         $("#attendedeliveryothers").attr('disabled', true);
      }
   });
   $("#attendedeliveryn").click(function () {
      if ($(this).is(":checked")) {
         $("#attendedeliveryothers").attr('disabled', true);
         $("#attendedeliveryothers").val("");
      }
   });
   $("#attendedeliverym").click(function () {
      if ($(this).is(":checked")) {
         $("#attendedeliveryothers").attr('disabled', true);
         $("#attendedeliveryothers").val("");
      }
   });
   $("#attendedeliveryh").click(function () {
      if ($(this).is(":checked")) {
         $("#attendedeliveryothers").attr('disabled', true);
         $("#attendedeliveryothers").val("");
      }
   });
   $("#attendedeliveryo").click(function () {
      if ($(this).is(":checked")) {
         $("#attendedeliveryothers").removeAttr("disabled");
      }
   });
   //Stump treated
   //Who attend the delivery
   $("#stumpa").click(function () {
      if ($(this).is(":checked")) {
         $("#stumpothers").attr('disabled', true);
      }
   });
   $("#stumpp").click(function () {
      if ($(this).is(":checked")) {
         $("#stumpothers").attr('disabled', true);
         $("#stumpothers").val("");
      }
   });
   $("#stumpu").click(function () {
      if ($(this).is(":checked")) {
         $("#stumpothers").attr('disabled', true);
         $("#stumpothers").val("");
      }
   });
   $("#stumpo").click(function () {
      if ($(this).is(":checked")) {
         $("#stumpothers").removeAttr("disabled");
      }
   });
}