var Module=$('#module').val();

    function initcheck()
    {
        sari_history_of_travel();
         ranitidine();
         amantidine();
         zanamivir();
         oseltamivir();
         medication_prior_oth();
         chestxrays();

         fever_feverish();
         headache();
         cough();
         sore_throat();
         Diff_of_breathing();
         other_signs_symptoms();

         imci_pneumonia1();
         imci_pneumonia2();
         imci_pneumonia3();
         imci_pneumonia4();
         sari_hospadm2();
         imci_spneumonia1();
         imci_spneumonia2();
         imci_spneumonia3();
         imci_spneumonia4();
         imci_spneumonia5();
         imci_spneumonia6();
         sari_hospadm3();

         sari_bats();
         sari_poultry();
         sari_camels();
         sari_pigs();
         sari_horses();
         sari_others2_cb();

         asthma();
         chronic_cardiacdis();
         chronic_liverdis();
         chronic_neuro();
         chronic_renaldis();
         diabetes();
         Haematologic();
         immunodis();
         pregnant();

         antibiotics();
         antivirals();
         fluidtheraphy();
         oxygen();
         intubation();
         bacterialtesting();
         othertherapeuticprocedures();

         $('#ranitidine').click(ranitidine);
         $('#amantidine').click(amantidine);
         $('#zanamivir').click(zanamivir);
         $('#oseltamivir').click(oseltamivir);
         $('#medication_prior_oth').click(medication_prior_oth);

         $('#sari_histtravel').click(sari_history_of_travel);

         $("#fever_feverish").click(fever_feverish);
         $("#headache").click(headache);
         $("#cough").click(cough);
         $("#sore_throat").click(sore_throat);
         $("#Diff_of_breathing").click(Diff_of_breathing);
         $("#other_signs_symptoms").click(other_signs_symptoms);

         $("#imci_pneumonia1").click(imci_pneumonia1);
         $("#imci_pneumonia2").click(imci_pneumonia2);
         $("#imci_pneumonia3").click(imci_pneumonia3);
         $("#imci_pneumonia4").click(imci_pneumonia4);
         $("#sari_hospadm2").click(sari_hospadm2);
         $("#imci_spneumonia1").click(imci_spneumonia1);
         $("#imci_spneumonia2").click(imci_spneumonia2);
         $("#imci_spneumonia3").click(imci_spneumonia3);
         $("#imci_spneumonia4").click(imci_spneumonia4);
         $("#imci_spneumonia5").click(imci_spneumonia5);
         $("#imci_spneumonia6").click(imci_spneumonia6);
         $("#sari_hospadm3").click(sari_hospadm3);

         $("#sari_bats").click(sari_bats);
         $("#sari_poultry").click(sari_poultry);
         $("#sari_camels").click(sari_camels);
         $("#sari_pigs").click(sari_pigs);
         $("#sari_horses").click(sari_horses);
         $("#sari_others2_cb").click(sari_others2_cb);

         $('#asthma').click(asthma);
         $('#chronic_cardiacdis').click(chronic_cardiacdis);
         $('#chronic_liverdis').click(chronic_liverdis);
         $('#chronic_neuro').click(chronic_neuro);
         $('#chronic_renaldis').click(chronic_renaldis);
         $('#diabetes').click(diabetes);
         $('#Haematologic').click(Haematologic);
         $('#immunodis').click(immunodis);
         $('#pregnant').click(pregnant);

         $("#antibiotics").click(antibiotics);
         $("#antivirals").click(antivirals);
         $("#fluidtheraphy").click(fluidtheraphy);
         $("#oxygen").click(oxygen);
         $("#intubation").click(intubation);
         $("#bacterialtesting").click(bacterialtesting);
         $("#othertherapeuticprocedures").click(othertherapeuticprocedures);
    }

$('#typeofdru').change(function() {
        if( $(this).val() == '9') {
            $('#typeofdru_other').removeAttr('disabled');
        } else {       
            $('#typeofdru_other').attr("disabled", true );
        }
    });
 function ranitidine()
 {
    if(this.checked)
      { $('#ranitidine').val('Y'); }
    else
      { $('#ranitidine').val('N'); }
 }
 function amantidine()
 {
    if(this.checked)
      { $('#amantidine').val('Y'); }
    else
      { $('#amantidine').val('N'); }
 }
 function zanamivir()
 {
    if(this.checked)
      {
        $('#zanamivir').val('Y');
      }
    else{
      $('#zanamivir').val('N');
    }
 }
 function oseltamivir()
 {
    if(this.checked)
      {
        $('#oseltamivir').val('Y');
      }
    else{
      $('#oseltamivir').val('N');
    }
 }
 function medication_prior_oth()
 {
    if(this.checked)
      {
        $('#medication_prior_oth').val('Y');
        $('#med_other_specify').removeAttr('disabled');
      }
    else
    {
        $('#medication_prior_oth').val('N');
        $('#med_other_specify').attr('disabled', true);
        $('#med_other_specify').val("");

    }
 }
 //-------History of travel:---------------------------------------------------->
function sari_history_of_travel()
{
      $("#sari_histtravely").click(function(){
            if($(this).is(":checked")){
                $("#sari_country").removeAttr("disabled");
            }
        });
      $("#sari_histtraveln").click(function(){
            if($(this).is(":checked")){
                $("#sari_country").attr('disabled', true);
                $("#sari_country").val("");
            }
        }); 

}
//-------------------chest xray------------------------------------------------->
function chestxrays()
{
      $("#chestxrayy").click(function(){
            if($(this).is(":checked")){
                $("#chestxray_result").removeAttr("disabled");
            }
        });
      $("#chestxrayn").click(function(){
            if($(this).is(":checked")){
                $("#chestxray_result").attr('disabled', true);
                $("#chestxray_result").val("");
            }
        }); 

}
//------------------------------------------------------------>
function fever_feverish()
{
  if(this.checked)
      {
        $('#fever_feverish').val('Y');
      }
    else{
      $('#fever_feverish').val('N');
    }
}
function headache()
{
  if(this.checked)
    {
      $('#headache').val('Y');
    }
    else{
      $('#headache').val('N');
    }
}
function cough()
{
    if(this.checked)
    {
      $('#cough').val("Y");
    }
    else{
      $('#cough').val("N");
    }
}
function sore_throat()
{
  if(this.checked)
    {
      $('#sore_throat').val("Y");
    }
    else{
      $('#sore_throat').val("N");
    }
}
function Diff_of_breathing()
{
  if (this.checked)
    {
      $('#Diff_of_breathing').val('Y');
    }
    else{
      $('#Diff_of_breathing').val('N');
    }
}
function other_signs_symptoms()
{
  if(this.checked)
    {
      $('#other_signs_symptoms').val("Y");
      $('#other_signs_symptoms_txt').removeAttr('disabled');
    }
    else{
      $('#other_signs_symptoms').val("N");
      $('#other_signs_symptoms_txt').attr('disabled', true);
       $('#other_signs_symptoms_txt').val("");
    }

}
//----------------------IMCI Criteria for pneumonia:-------------------------------->
 function imci_pneumonia1()
        {
          if(this.checked)
            { $("#imci_pneumonia1").val("Y");}
          else
            {$("#imci_pneumonia1").val("N");}
        }
 function imci_pneumonia2()
        {
          if (this.checked)
            {$("#imci_pneumonia2").val("Y");}
          else
            {$("#imci_pneumonia2").val("N");}
        }
 function imci_pneumonia3()
        {
          if (this.checked)
            {$("#imci_pneumonia3").val("Y");}
          else
            {$("#imci_pneumonia3").val("N");}
        }
 function imci_pneumonia4()
        {
          if (this.checked)
            {$("#imci_pneumonia4").val("Y");}
          else
            {$("#imci_pneumonia4").val("N");}
        }
 function sari_hospadm2()
        {
          if (this.checked)
            {$("#sari_hospadm2").val("Y");}
          else
            {$("#sari_hospadm2").val("N");}
        }
//------------------IMCI criteria for severe pneumonia--------------------------------------->
 function imci_spneumonia1()
        {
          if (this.checked)
            {$("#imci_spneumonia1").val("Y");}
          else
            {$("#imci_spneumonia1").val("N");}
        }
 function imci_spneumonia2()
        {
          if (this.checked)
            {$("#imci_spneumonia2").val("Y");}
          else
            {$("#imci_spneumonia2").val("N");}
        }
 function imci_spneumonia3()
        {
          if (this.checked)
            {$("#imci_spneumonia3").val("Y");}
          else
            {$("#imci_spneumonia3").val("N");}
        }
 function imci_spneumonia4()
        {
          if (this.checked)
            {$("#imci_spneumonia4").val("Y");}
          else
            {$("#imci_spneumonia4").val("N");}
        }
 function imci_spneumonia5()
        {
          if (this.checked)
            {$("#imci_spneumonia5").val("Y");}
          else
            {$("#imci_spneumonia5").val("N");}
        }
 function imci_spneumonia6()
        {
          if (this.checked)
            {$("#imci_spneumonia6").val("Y");}
          else
            {$("#imci_spneumonia6").val("N");}
        }
 function sari_hospadm3()
        {
          if (this.checked)
            {$("#sari_hospadm3").val("Y");}
          else
            {$("#sari_hospadm3").val("N");}
        }
//------History of exposure to any of the following:---------------------------------->
 function sari_bats() 
 {
          if (this.checked) {
              $("#sari_bats").val("Y");
          } else {
              $("#sari_bats").val("N");
          }
 }
 function sari_poultry() 
 {
          if (this.checked) {
              $("#sari_poultry").val("Y");
          } else {
              $("#sari_poultry").val("N");
          }
 }
  function sari_camels() 
 {
          if (this.checked) {
              $("#sari_camels").val("Y");
          } else {
              $("#sari_camels").val("N");
          }
 }
  function sari_pigs() 
 {
          if (this.checked) {
              $("#sari_pigs").val("Y");
          } else {
              $("#sari_pigs").val("N");
          }
 }
  function sari_horses() 
 {
          if (this.checked) {
              $("#sari_horses").val("Y");
          } else {
              $("#sari_horses").val("N");
          }
 }
  function sari_others2_cb() 
 {
    
           $("#sari_others2_cb").click(function(){
            if($(this).is(":checked")){
                $("#sari_others2_cb").val("Y");
                $("#sari_others2").removeAttr("disabled");
                
            }
            else if($(this).is(":not(:checked)")){
                $("#sari_others2_cb").val("N");
                $("#sari_others2").attr("disabled", true);
                $("#sari_others2").val(" ");

            }
        });  
 }
//-----------------------Pre-existing Conditions-------------------------------------------------------------->
  function asthma()
  {
    if (this.checked)
      {$("#asthma").val("Y");}
    else
      {$("#asthma").val("N");}
  }
  function chronic_cardiacdis()
  {
    if (this.checked)
      {$("#chronic_cardiacdis").val("Y");}
    else
      {$("#chronic_cardiacdis").val("N");}
  }
  function chronic_liverdis()
  {
    if (this.checked)
      {$("#chronic_liverdis").val("Y");}
    else
      {$("#chronic_liverdis").val("N");}
  }
  function chronic_neuro()
  {
    if (this.checked)
      {$("#chronic_neuro").val("Y");}
    else
      {$("#chronic_neuro").val("N");}
  }
  function chronic_renaldis()
  {
    if (this.checked)
      {$("#chronic_renaldis").val("Y");}
    else
      {$("#chronic_renaldis").val("N");}
  }
  function diabetes()
  {
    if (this.checked)
      {$("#diabetes").val("Y");}
    else
      {$("#diabetes").val("N");}
  }
  function Haematologic()
  {
    if (this.checked)
      {$("#Haematologic").val("Y");}
    else
      {$("#Haematologic").val("N");}
  }
  function immunodis()
  {
    if (this.checked)
      {$("#immunodis").val("Y");}
    else
      {$("#immunodis").val("N");}
  }
  function pregnant()
  {
    if (this.checked)
      {$("#pregnant").val("Y");}
    else
      {$("#pregnant").val("N");}
  }
//------------------CLINICAL MANAGEMENT AND OUTCOME----------------------------->
 function antibiotics()
 {
    $("#antibioticsy").click(function(){
            if($(this).is(":checked")){
                $("#antibiotics_specify").removeAttr("disabled");
                $("#antibioticsy").val("Y");
                
            }
        });
    $("#antibioticsn").click(function(){
            if($(this).is(":checked")){
                $("#antibiotics_specify").attr("disabled", true);
                $("#antibioticsn").val("N");
                $("#antibiotics_specify").val("");
                
            } 
        }); 
    $("#antibioticsu").click(function(){
            if($(this).is(":checked")){
                $("#antibiotics_specify").attr("disabled", true);
                $("#antibioticsu").val("U");
                $("#antibiotics_specify").val("");
                
            } 
        }); 
 }
 function antivirals()
 {
    $("#antiviralsy").click(function(){
            if($(this).is(":checked")){
                $("#antivirals_specify").removeAttr("disabled");
                $("#antiviralsy").val("Y");
                
            }
        });
    $("#antiviralsn").click(function(){
            if($(this).is(":checked")){
                $("#antivirals_specify").attr("disabled", true);
                $("#antiviralsn").val("N");
                $("#antivirals_specify").val("");
                
            } 
        }); 
    $("#antiviralsu").click(function(){
            if($(this).is(":checked")){
                $("#antivirals_specify").attr("disabled", true);
                $("#antiviralsu").val("U");
                $("#antivirals_specify").val("");
                
            } 
        }); 
 }
 function fluidtheraphy()
 {
    $("#fluidtheraphyy").click(function(){
            if($(this).is(":checked")){
                $("#fluidtheraphy_specify").removeAttr("disabled");
                $("#fluidtheraphyy").val("Y");
                
            }
        });
    $("#fluidtheraphyn").click(function(){
            if($(this).is(":checked")){
                $("#fluidtheraphy_specify").attr("disabled", true);
                $("#fluidtheraphyn").val("N");
                $("#fluidtheraphy_specify").val("");
                
            } 
        }); 
    $("#fluidtheraphynu").click(function(){
            if($(this).is(":checked")){
                $("#fluidtheraphy_specify").attr("disabled", true);
                $("#fluidtheraphynu").val("U");
                $("#fluidtheraphy_specify").val("");
            } 
        }); 
 }
 function oxygen()
 {
    $("#oxygeny").click(function(){
            if($(this).is(":checked")){
                $("#oxygen_specify").removeAttr("disabled");
                 $("#oxygeny").val("Y");
                
            }
        });
    $("#oxygenn").click(function(){
            if($(this).is(":checked")){
                $("#oxygen_specify").attr("disabled", true);
                $("#oxygenn").val("N");
                $("#oxygen_specify").val("");
                
            } 
        }); 
    $("#oxygenu").click(function(){
            if($(this).is(":checked")){
                $("#oxygen_specify").attr("disabled", true);
                $("#oxygenu").val("U");
                $("#oxygen_specify").val("");
                
            } 
        }); 
 }
  function intubation()
 {
    $("#intubationy").click(function(){
            if($(this).is(":checked")){
                $("#intubation_specify").removeAttr("disabled");
                $("#intubationy").val("Y");
                
            }
        });
    $("#intubationn").click(function(){
            if($(this).is(":checked")){
                $("#intubation_specify").attr("disabled", true);
                $("#intubationn").val("N");
                $("#intubation_specify").val("");
                
            } 
        }); 
    $("#intubationu").click(function(){
            if($(this).is(":checked")){
                $("#intubation_specify").attr("disabled", true);
                $("#intubationu").val("U");
                $("#intubation_specify").val("");
                
            } 
        }); 
 }
  function bacterialtesting()
 {
    $("#bacterialtestingy").click(function(){
            if($(this).is(":checked")){
                $("#bacterialtesting_specify").removeAttr("disabled");
                $("#bacterialtestingy").val("Y");
                
            }
        });
    $("#bacterialtestingn").click(function(){
            if($(this).is(":checked")){
                $("#bacterialtesting_specify").attr("disabled", true);
                $("#bacterialtestingn").val("N");
                $("#bacterialtesting_specify").val("");
                
            } 
        }); 
    $("#bacterialtestingu").click(function(){
            if($(this).is(":checked")){
                $("#bacterialtesting_specify").attr("disabled", true);
                $("#bacterialtestingu").val("U");
                $("#bacterialtesting_specify").val("");
                
            } 
        }); 
 }
  function othertherapeuticprocedures()
 {
    $("#othertherapeuticproceduresy").click(function(){
            if($(this).is(":checked")){
                $("#othertherapeuticprocedures_specify").removeAttr("disabled");
                $("#othertherapeuticproceduresy").val("Y");
                
            }
        });
    $("#othertherapeuticproceduresn").click(function(){
            if($(this).is(":checked")){
                $("#othertherapeuticprocedures_specify").attr("disabled", true);
                $("#othertherapeuticproceduresn").val("N");
                $("#othertherapeuticprocedures_specify").val("");
                
            } 
        }); 
    $("#othertherapeuticproceduresu").click(function(){
            if($(this).is(":checked")){
                $("#othertherapeuticprocedures_specify").attr("disabled", true);
                $("#othertherapeuticproceduresu").val("U");
                $("#othertherapeuticprocedures_specify").val("");
                
            } 
        }); 
 }

