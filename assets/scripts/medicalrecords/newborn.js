var enccode=$.session.get('enccode');
var hpercode=$.session.get('hpercode');
var enctr = encodeURIComponent(encodeURIComponent(enccode));
var percode = encodeURIComponent(encodeURIComponent(hpercode));

function initNewBorn(enccode, hpercode){

 $("#btnNewborn").removeAttr("disabled");

 $("#encounter").val(enccode);
 $("#percode").val(hpercode);

 var enctr = encodeURIComponent(encodeURIComponent(enccode));
 newbornDetails(enctr);
}

function newbornDetails(enccode)
{
  var data = new Object();
  data.id = "nbtbl";
  data.link = baseURL + "MedicalRecords/newbornDetails/" + enccode,
  data.type = "POST";
  data.coldef =[
  {
    targets: [0,1],
    visible: false,
  }
  ];
  loadTable(data);
}

function SearchEnctr(){
  var code = btoa(hpercode);
  checkHistory(code);
}

function AddNewBorn(){
  $("#patientNewBornModal").modal({ backdrop: 'static'});
  $("#newbornIden").val('insert');

  $("#moth_enccode").val($("#encounter").val());
  $("#moth_hpercode").val($("#percode").val());

  var obj = getParentsInfo(hpercode);

  getCTR(encodeURIComponent(encodeURIComponent($("#moth_enccode").val())));

  $("#moth_lname").val(obj['patlast']);
  $("#moth_fname").val(obj['patfirst']);
  $("#moth_mname").val(obj['patmiddle']);
  $("#fat_lname").val(obj['splast']);
  $("#fat_fname").val(obj['spfirst']);
  $("#fat_mname").val(obj['spmid']);

  $("#baby_str").val(obj['patstr']);
  $("#baby_brgy").val(obj['brg']);
  $("#baby_city").val(obj['ctycode']);
  $("#baby_prov").val(obj['provcode']);
  $("#baby_zip").val(obj['patzip']);
  $("#baby_cntry").val(obj['cntrycode']);

  $("#addrdate").val(getTimeLocale());
  SelResident();
  SelResident2();
  generatehpercode();
}


$("#nbtbl").on("click",".ModalEditNewBorn",function(){
	var data = $(this).data();
  $("#patientNewBornModal").modal({ backdrop: 'static'});
  $("#newbornIden").val('update');
  var enccode = data['enccode'];
  var hpercode = data['hpercode'];
  var ctr = data['ctr'];
  var enctr = encodeURIComponent(encodeURIComponent(enccode));

  var family = getParentsInfo(hpercode);
  var obj= getNewBorn(enctr, ctr);
  console.log(obj);

  var exam = obj['pedate'];
  var examdate = ((exam == "1970-01-01 00:00:00") ||(exam == "1970-01-01 08:00:00") || (exam == null)) ? "0000-00-00 00:00:00" : setTimeLocale(exam);
  $("#dateexam").val(examdate);

  $("#updatetime").val(getTimeLocale());

  $("#moth_enccode").val(enccode);
  $("#moth_hpercode").val(hpercode);
  $("#baby_ctr").val(ctr);

  $("#patlname").val(obj['lastname']);
  $("#patfname").val(obj['firstname']);
  $("#patmname").val(obj['middlename']);
  $("#babysex").val(obj['sex']);

  var newbdate = obj['birthdate'];
  var newbornbdate = ((newbdate == "1970-01-01 00:00:00") ||(newbdate == "1970-01-01 08:00:00") || (newbdate == null)) ? "0000-00-00 00:00:00" : setTimeLocale(newbdate);
  $("#patdob").val(newbornbdate);
/*
  $("#patdob").val(obj['birthdate']);*/
  $("#marks").val(obj['distmark']);
  $("#hour_birth").val(obj['hourabirth']);
  $("#apagar_birth").val(obj['agphar1']);
  $("#apagar_minafter").val(obj['agphar2']);
  $("#apagar_ten_minafter").val(obj['agphar3']);
  $("#gen_cond").val(obj['gencond']);

  $("#phyexam_measure").val(obj['measuremnt']);
  $("#phyexam_head").val(obj['head']);
  $("#phyexam_circum").val(obj['circumfer']);
  $("#phyexam_chest").val(obj['chest']);
  $("#phyexam_abdomen").val(obj['abdomen1']);
  $("#phyexam_weight").val(obj['birthweigt']);
  $("#phyexam_length").val(obj['birthlengt']);
  $("#phyexam_patho").val(obj['pathologic']);

  $("#gen_muscu").val(obj['musctonus']);
  $("#skin_color").val(obj['skincolor']);
  $("#skin_turgon").val(obj['skinturgon']);
  $("#skin_rash").val(obj['skinrash']);
  $("#skin_desqua").val(obj['skindesqua']);

  $("#head_mold").val(obj['headmold']);
  $("#head_scalp").val(obj['headscalp']);
  $("#head_fontanellss").val(obj['headfontan']);
  $("#head_suture").val(obj['headsuture']);

  $("#gen_abdomen").val(obj['abdomen2']);
  $("#gen_spleen").val(obj['spleen']);
  $("#gen_kidney").val(obj['kidney']);
  $("#gen_liver").val(obj['liver']);
  $("#gen_umbicord").val(obj['umbilcord']);
  $("#gen_ingui").val(obj['inghernia']);
  $("#gen_face").val(obj['face']);
  $("#gen_diact").val(obj['drecti']);

  $("#eyes_conj").val(obj['eyeconjunc']);
  $("#eyes_scelra").val(obj['eyesclera']);
  $("#eyes_pupils").val(obj['eyespupil']);
  $("#eyes_disc").val(obj['eyesdisc']);

  $("#gen_othfind").val(obj['otherfind1']);
  $("#gen_genitals").val(obj['genitals']);
  $("#gen_testes").val(obj['maletestes']);
  $("#gen_tr").val(obj['tr']);
  $("#gen_l").val(obj['ml']);
  $("#gen_abno").val(obj['abnormal1']);
  $("#gen_ears").val(obj['ears']);
  $("#gen_nose").val(obj['nose']);

  $("#mouth_lip").val(obj['mouthlip']);
  $("#mouth_tongue").val(obj['mouthtong']);
  $("#mouth_palate").val(obj['mouthpala']);

  $("#gen_vagina").val(obj['vagbleed']);
  $("#gen_abno2").val(obj['abnormal2']);
  $("#gen_extreme").val(obj['extreme']);

  $("#gen_neck").val(obj['neck']);
  $("#neck_sternoclai").val(obj['sternoclai']);

  $("#neck_fistulla").val(obj['fistula']);
  $("#neck_oth").val(obj['otherfind2']);

  $("#chest_shape").val(obj['chestshape']);
  $("#chest_respi").val(obj['respirate']);
  $("#chest_clavi").val(obj['clavicles']);
  $("#chest_breast").val(obj['breast']);
  $("#chest_heart").val(obj['heart']);
  $("#chest_lungs").val(obj['lungs']);
  $("#gen_impress").val(obj['impression']);

  $("#gen_clubfoot").val(obj['clubfoot']);
  $("#gen_hipdisc").val(obj['hipdiscolo']);
  $("#gen_femo").val(obj['fempulse']);
  $("#gen_spine").val(obj['spine']);
  $("#gen_anus").val(obj['anus']);

  $("#baby_hpatkey").val(family['hpatkey']);
  $("#baby_hpercode").val(family['hpercode']);
  $("#addrdate").val(family['haddrdte']);

  $("#patlname").val(family['patlast']);
  $("#patfname").val(family['patfirst']);
  $("#patmname").val(family['patmiddle']);
  $("#babysex").val(family['patsex']);

  $("#moth_lname").val(family['motlast']);
  $("#moth_fname").val(family['motfirst']);
  $("#moth_mname").val(family['motmid']);
  $("#fat_lname").val(family['fatlast']);
  $("#fat_fname").val(family['fatfirst']);
  $("#fat_mname").val(family['fatmid']);

  $("#baby_str").val(family['patstr']);
  $("#baby_brgy").val(family['brg']);
  $("#baby_city").val(family['ctycode']);
  $("#baby_prov").val(family['provcode']);
  $("#baby_zip").val(family['patzip']);
  $("#baby_cntry").val(family['cntrycode']);


  setResident(obj['employee1']);
  setResident2(obj['employee2']);

});

function generatehpercode()
{
  $.ajax({
    url:"Patient/generatehpercode",
    type:"POST",
    data: "JSON",
    processData:false,
    contentType:false,
    cache:false,
    async:true,
    success: function(data,response){
      var obj =$.parseJSON(data);
      $("#baby_hpercode").val(obj['percode']);
      $("#baby_hpatkey").val(obj['patkey']);
    },
    error: function(response){

      toastr.error('Error', 'Failed to Generate Hpercode!');
    }});  
}


function getParentsInfo(hpercode){
  var obj;
  var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
  $.ajax({
    type: "POST",
    url: baseURL+"MedicalRecords/getParentsInfo/"+ hpercode ,
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

function getParentsInfo(hpercode){
  var obj;
  var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
  $.ajax({
    type: "POST",
    url: baseURL+"MedicalRecords/getParentsInfo/"+ hpercode ,
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


function SelResident() {
  $('#sel_emp').select2({
    theme: 'coreui',
    placeholder: 'Select Employee',
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Personnel/searchEmployees",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchEmployees: params.term
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.fullname
          });
        });
        return {
          results: results
        }
      }
    }
  });
  $('#sel_emp').on('change', function () {
    $("#sel_emp option:selected", this);
    $("#sel_emp").val(this.value);
  });
}

function SelResident2() {
  $('#sel2_emp').select2({
    theme: 'coreui',
    placeholder: 'Select Employee',
    allowClear: true,
    encryption: true,
    ajax: {
      url: baseURL + "Ref_Personnel/searchEmployees",
      dataType: "json",
      type: "POST",
      delay: 250,
      data: function (params) {
        return {
          searchEmployees: params.term
        };
      },
      processResults: function (data) {
        var results = [];
        $.each(data, function (index, item) {
          results.push({
            id: item.employeeid,
            text: item.fullname
          });
        });
        return {
          results: results
        }
      }
    }
  });
  $('#sel2_emp').on('change', function () {
    $("#sel2_emp option:selected", this);
    $("#sel2_emp").val(this.value);
  });
}

function setResident(employeeid) {
  SelResident();
  var relSelect = $('#sel_emp');
  $.ajax({
    type: 'POST',
    url: baseURL + 'Ref_Personnel/setEmployees/' + employeeid,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj['fullname'], obj['employeeid'], true, true);
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

function setResident2(employeeid) {
  SelResident2();
  var relSelect = $('#sel2_emp');
  $.ajax({
    type: 'POST',
    url: baseURL + 'Ref_Personnel/setEmployees/' + employeeid,
  }).then(function (data) {
    var obj = $.parseJSON(data);
    var option = new Option(obj['fullname'], obj['employeeid'], true, true);
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

function getCTR(enccode){
  $.ajax({
    type: "POST",
    url: baseURL+"MedicalRecords/getCTR/"+ enccode,
    data: "JSON",
    async:false,
    success: function(data,status){ 
      obj = $.parseJSON(data);
      var ctr = obj['ctr'];
      if (ctr == null || ctr == '0') {
        var ctr = '0';
        var result =parseInt(ctr) + 1;
        $("#baby_ctr").val(result);
      }
      else{
        var result =parseInt(ctr) + 1;
        $("#baby_ctr").val(result);
      }

    },
    error: function(data,status){
    }
  });
  return obj;
}

function getNewBorn(enccode, ctr){
  $.ajax({
    type: "POST",
    url: baseURL+"MedicalRecords/getNewBorn/"+ enccode + "/" +ctr,
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


$('#frmNewBorn').validate({
  submitHandler: function (form) {
    var  POSTURL = baseURL+"MedicalRecords/saveNewBorn";
    $.ajax({
      type : "POST",
      url  : POSTURL,
      dataType: "JSON",
      cache:false,
      async:true,
      data:$(form).serialize(),
      success: function(data){
        toastr.success("Successfuly Saved! ", "Success");
        $("#patientNewBornModal").modal('hide');
        var encounterr =$("#encounter").val();
        var enctr = encodeURIComponent(encodeURIComponent(encounterr));
        console.log(enctr);
        newbornDetails(enctr);
      },
      error: function(data){
        toastr.error('Error on saving!'+ data ,'Error');
      }
    });
    return false;
    $(form).submit();
  },
  rules: {
    patfname:'required',
    patlname:'required',
    patsex:'required',
    patdob:'required',
    gen_cond:'required',
  },  
  messages: {
   patfname:'First Name is required!',
   patlname:'Last Name is required!',
   patsex:'Sex is required!',
   patdob:'Date of Birth is required!',
   gen_cond:'General Condition is required!'
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
