var enccode=$("#lb_moth_enccode").val();
var hpercode=$("#lb_moth_hpercode").val();
var enctr = encodeURIComponent(encodeURIComponent(enccode));

$("#ViewBirthCert").on("click", function () {
  var babycode=$("#lb_baby_hpercode").val();
  $("#ModalViewBirthCert").modal({ backdrop: "static" });
    $('#ViewBirthCertPDF').html('<embed src="'+baseURL+"MedicalRecords/LiveBirthCertificate/" + enctr + "/" + babycode+'" frameborder="2" width="100%" height="800px" id="ViewBirthCertPDF">');

});
$("#ViewBirthCert2").on("click", function () {
  var babycode=$("#lb_baby_hpercode").val();
  window.open(baseURL+"MedicalRecords/LiveBirthCertificatePrint/" + enctr + "/" + babycode);
});
/*function LiveBirthCert(){
  var babycode=$("#lb_baby_hpercode").val();
  console.log(babycode);
  $("ModalViewBirthCert").modal('show');
    $('#ViewBirthCertPDF').html('<embed src="'+baseURL+"MedicalRecords/LiveBirthCertificate/" + enctr + "/" + babycode+'" frameborder="2" width="100%" height="800px" id="ViewBirthCertPDF">');
  window.open(baseURL+"MedicalRecords/LiveBirthCertificate/" + enctr + "/" + babycode);
*/



$("#nbtbl").on("click",".ModalLiveBirth",function(){
  var data = $(this).data();
  $("#patientLiveBirthModal").modal({ backdrop: 'static'});
  validation();
  var enctr = encodeURIComponent(encodeURIComponent(enccode));
  var obj = getNewBorn(enctr, data['ctr']);
  var livebirth = getLiveBirth(enctr, data['ctr']);

  $("#lb_moth_enccode").val(obj['enccode']);
  $("#lb_moth_hpercode").val(hpercode);
  $("#lb_baby_hpercode").val(obj['hpercode']);
  $("#lb_baby_ctr").val(obj['ctr']);
  $("#lb_dateexam").val(obj['pedate']);
  $("#birth_weight").val(obj['birthweigt']);

  $("#lb_patfname").val(obj['firstname']);
  $("#lb_patlname").val(obj['lastname']);
  $("#lb_patmname").val(obj['middlename']);
  $("#lb_babysex").val(obj['sex']);

   var newbdate = obj['birthdate'];
  var newbornbdate = ((newbdate == "1970-01-01 00:00:00") ||(newbdate == "1970-01-01 08:00:00") || (newbdate == null)) ? "0000-00-00 00:00:00" : setTimeLocale(newbdate);
  $("#lb_patdob").val(newbornbdate);


  if(livebirth['typbirth']=='OTHER'){
    $('#birth_type_oth').removeAttr("disabled");
    $("#birth_type_oth").val(livebirth['typbirth_oth']);
  }
  else{
    $('#birth_type_oth').attr("disabled", true);
  }


  $("#birth_type").val(livebirth['typbirth']); 
  $("#multiple_birth").val(livebirth['rank']);

  if(livebirth['rank']=='OTHER'){
    $('#multiple_birth_oth').removeAttr("disabled");
    $("#multiple_birth_oth").val(livebirth['othrank']);
  }
  else{
    $('#multiple_birth_oth').attr("disabled", true);
  }


  $("#birth_order").val(livebirth['border']);
  $("#born_alive").val(livebirth['totnum']);
  $("#still_livingbirth").val(livebirth['alive']);
  $("#nochild_dead").val(livebirth['dead']);

  $("#fath_fname").val(livebirth['fatfirst']);
  $("#fath_mname").val(livebirth['fatmiddle']);
  $("#fath_lname").val(livebirth['fatlast']);
  $("#fath_cit").val(livebirth['fatcit']);

  if (livebirth['fatrel']== null) {
    SelReligion();
  }
  else{
    setReligion(livebirth['fatrel']);
  }

  $("#fath_occup").val(livebirth['fatoccup']);
  $("#fath_age").val(parseInt(livebirth['fatage']));
  $("#fath_addr").val(livebirth['fataddr']);

  var marriage = livebirth['datemar'];
  var datemarriage = ((marriage == "1970-01-01 00:00:00") ||(marriage == "1970-01-01 08:00:00") || (marriage == null)) ? "0000-00-00 00:00:00" : setTimeLocale(marriage);
  $("#marriage_date").val(datemarriage);
  $("#marriage_place").val(livebirth['placemar']);

  if (livebirth['attend']== null) {
    SelAttendant();
  }
  else{
    setAttendant(livebirth['attend']);
    let text1 = livebirth['attend'];
    let result1 = text1.substring(0,2);
    $("#attendant").val(result1);
  }
  $("#attendant_oth").val(obj['othatt']);

  var cert = livebirth['certdate'];
  var certdate = ((cert == "1970-01-01 00:00:00") ||(cert == "1970-01-01 08:00:00") || (cert == null)) ? "0000-00-00 00:00:00" : setTimeLocale(cert);
  $("#datecert").val(certdate);

  $("#info_name").val(livebirth['inform']);
  $("#info_relation").val(livebirth['infrel']);
  $("#info_addr").val(livebirth['infadd']);
  var informant = livebirth['infdate'];
  var dateinformant = ((informant == "1970-01-01 00:00:00") ||(informant == "1970-01-01 08:00:00") || (informant == null)) ? "0000-00-00 00:00:00" : setTimeLocale(informant);
  $("#info_date").val(dateinformant);

  if (livebirth['prename']== null) {
    SelEmployees();
  }
  else{
    setEmployees(livebirth['prename']);
  }

  var prep = livebirth['prepdate'];
  var dateprep = ((prep == "1970-01-01 00:00:00") ||(prep == "1970-01-01 08:00:00") || (prep == null)) ? "0000-00-00 00:00:00" : setTimeLocale(prep);
  $("#prep_date").val(dateprep);

  var sworn = livebirth['dtesworn'];
  var datesworn = ((sworn == "1970-01-01 00:00:00") ||(sworn == "1970-01-01 08:00:00") || (sworn == null)) ? "0000-00-00 00:00:00" : setTimeLocale(sworn);
  $("#date_sworn").val(datesworn);

  var motherID = livebirth['mot_dteissued'];
  var datemotherID = ((motherID == "1970-01-01 00:00:00") ||(motherID == "1970-01-01 08:00:00") || (motherID == null)) ? "0000-00-00 00:00:00" : setTimeLocale(motherID);
  $("#moth_dateissued").val(datemotherID);

  var fatherID = livebirth['fat_dteissued'];
  var datefatherID = ((fatherID == "1970-01-01 00:00:00") ||(fatherID == "1970-01-01 08:00:00") || (fatherID == null)) ? "0000-00-00 00:00:00" : setTimeLocale(fatherID);
  $("#fath_dateissued").val(datefatherID);

  $("#moth_valid").val(livebirth['mot_validID']);
  $("#fath_valid").val(livebirth['fat_validID']);
  $("#moth_placeissue").val(livebirth['mot_placeissued']);
  $("#fath_placeissue").val(livebirth['fat_placeissued']);

  var family = getParentsInfo(data['hpercode']);
  $("#moth_first").val(family['motfirst']);
  $("#moth_last").val(family['motmid']);
  $("#moth_middle").val(family['motlast']);

  

});

function getLiveBirth(enccode, ctr){
  $.ajax({
    type: "POST",
    url: baseURL+"MedicalRecords/getLiveBirth/"+ enccode + "/" +ctr,
    data: "JSON",
    async:false,
    success: function(data,status){ 
      obj = $.parseJSON(data);
    },
    error: function(data,status){
    }
  });
  return obj;
}


function SelAttendant() {
  $('#selAttendant').select2({
    theme: 'coreui',
    placeholder: 'Select Employee',
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "MedicalRecords/searchAttendant",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchAttendant: params.term
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.licno,
            text: item.fullname
          });
        });
        return {
          results: results
        }
      }
    }
  });
  $('#selAttendant').on('change', function () {
    $("#selAttendant option:selected", this);
    $("#selAttendant").val(this.value);
    let text = $("#selAttendant").val();
    let result = text.substring(0,2);
    $("#attendant").val(result);

  });
}


function setAttendant(licno) {
  SelAttendant();
  var relSelect = $('#selAttendant');
  $.ajax({
    type: 'POST',
    url: baseURL + 'MedicalRecords/setAttendant/' + licno,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj['fullname'], obj['licno'], true, true);
    relSelect.append(option).trigger('change');
    relSelect.trigger({
      theme: 'coreui',
      type: 'select2:select',
      params: {
        data: data
      }
    });
  });

}

function validation(){
  $('#birth_type_oth').attr( "disabled", true );
  $('#multiple_birth_oth').attr( "disabled", true );
  $('#attendant_oth').attr( "disabled", true );  
}

$('#birth_type').change(function() {
  if( $(this).val() == 'OTHER') {
    $("#birth_type_oth").removeAttr("disabled");
  } else  {       
    $('#birth_type_oth').attr("disabled", true);
    $('#birth_type_oth').val("");
  }
});

$('#multiple_birth').change(function() {
  if( $(this).val() == 'OTHER') {
    $("#multiple_birth_oth").removeAttr("disabled");
  } else  {       
    $('#multiple_birth_oth').attr("disabled", true);
    $('#multiple_birth_oth').val("");
  }
});

$('#attendant').change(function() {
  if( $(this).val() == 'OT') {
    $("#attendant_oth").removeAttr("disabled");
  } else  {       
    $('#attendant_oth').attr("disabled", true);
    $('#attendant_oth').val("");
  }
});

$('#frmLiveBirth').validate({
  submitHandler: function (form) {
    var  POSTURL = baseURL+"MedicalRecords/saveLiveBirth";
    $.ajax({
      type : "POST",
      url  : POSTURL,
      dataType: "JSON",
      cache:false,
      async:true,
      data:$(form).serialize(),
      success: function(data){
        toastr.success("Successfuly Saved! ", "Success");
      },
      error: function(data){
        toastr.error('Error on saving!'+ data ,'Error');
      }
    });
    return false;
    $(form).submit();
  },
  rules: {
    lb_patfname:'required',
    lb_patlname:'required',
    lb_patmname:'required',
    lb_babysex:'required',
    lb_patdob:'required',
    birth_type:'required',
    multiple_birth:'required',
    birth_order:'required',
    birth_weight:'required',
  },  
  messages: {
   lb_patfname:'First Name is required!',
   lb_patlname:'Last Name is required!',
   lb_patmname:'Middle Name is required!',
   lb_babysex:'Sex is required!',
   lb_patdob:'Date of Birth is required!',
   birth_type:'Type of Birth is required!',
   multiple_birth:'required!',
   birth_order:'required!',
   birth_weight:'required!',
 },
 errorElement: 'span',
 errorPlacement: function errorPlacement(error, element) {
  error.addClass('invalid-feedback');

  if (element.prop('type') === 'checkbox')
  {
    error.insertAfter(element.parent('label'));
  }else if(element.hasClass('select2-hidden-accessible'))
  {
   element=$("#selReg" + element.attr("id") + "ul").parent();

   error.insertAfter(element);
 }
 else 
 {
  error.insertAfter(element);
}
},

highlight: function highlight(element) {
  $(element).addClass('is-invalid').removeClass('is-valid');
  if( $(element).hasClass('select2-offscreen'))
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
