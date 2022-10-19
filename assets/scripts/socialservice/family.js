
  Module=$('#module').val();

    function FamilyCompositionList()
  {

    var enc = $.session.get('enccode');
    var enccode = encodeURIComponent(encodeURIComponent(enc));
    console.log(enccode);

    var data = new Object();
    data.id = "tblMssfamily";
    data.link =baseURL+"SocialService/SocialServiceFamily/"+enccode;
    data.type = "POST";


    data.coldef =[
    {
      targets: [0,1,2],
      visible:false,
      orderable:false,
      
    },
    { 
    targets: [5,6,7],
    searchable:false,
    orderable:false,
    render: function (data,type,row) 
    {
      switch(data)
      {
        
        case 'S' : return '&nbsp SINGLE'; break;        
        case 'M' : return '&nbsp MARRIED'; break;
        case 'D' : return '&nbsp DIVORCE'; break;
        case 'X' : return '&nbsp SEPARATED'; break;
        case 'W' : return '&nbsp WIDOW/WIDOWER'; break;
        case 'N' : return '&nbsp N/A'; break;
        case 'MOTHE' : return '&nbsp MOTHER'; break;
        case 'FATHE' : return '&nbsp FATHER'; break;
        case 'SISTE' : return '&nbsp SISTER'; break;
        case 'BROTH' : return '&nbsp BROTHER'; break;
        case 'AUNT' : return '&nbsp AUNT'; break;
        case 'UNCLE' : return '&nbsp UNCLE'; break;
        case 'NEPHE' : return '&nbsp NEPHEW'; break;
        case 'NIECE' : return '&nbsp NIECE'; break;
        case 'COUSI' : return '&nbsp COUSIN'; break;
        case 'SPOUS' : return '&nbsp SPOUSE'; break;
        case 'FHEAD' : return '&nbsp HEAD OF FAMILY'; break;
        case 'N' : return '&nbsp NONE'; break;
        case 'E' : return '&nbsp ELEMENTARY GRADUATE'; break;
        case 'H' : return '&nbsp HIGHSCHOOL GRADUATE'; break;
        case 'V' : return '&nbsp VOCATIONAL'; break;
        case 'C' : return '&nbsp COLLEGE GRADUATE'; break;
        case 'L' : return '&nbsp ELEMENTARY LEVEL'; break;
        case 'I' : return '&nbsp HIGHSCHOOL LEVEL'; break;
        case 'O' : return '&nbsp COLLEGE LEVEL'; break;
        default  : return '';
      }
    },
    },

    
    ];
    loadTable(data);
  }


    $("#tblMssfamily").on("click",".ModalDeleteFamily",function(){
    var data = $(this).data();

    $('#DeleteMSSFamily').modal('show');
      $("#formIdentification").val('delete');
      $("#deletecode").val(data['enccode']);
      $("#deleteseqid").val(data['seq']);
  });


  $(".ModalAddFamily").on('click',function(){

    $('#AddFamily').modal('show');
    $("#AddIden").val('insert');
      var ccode = $.session.get('enccode');
      var percode = $.session.get('hpercode');

    $("#addenccode").val($.session.get('enccode'));
    $("#addhpercode").val($.session.get('hpercode'));

  });


    function getFamilyComposition(enccode,hpercode,seqid){
        var obj;
      var enccode = encodeURIComponent(encodeURIComponent(enccode));
      var hpercode = encodeURIComponent(encodeURIComponent(hpercode));
      var seqid = encodeURIComponent(encodeURIComponent(seqid));
      console.log(seqid);
        $.ajax({
            type: "POST",
            url: baseURL+"SocialService/getFamilyComposition/"+ enccode + "/"+hpercode+ "/" + seqid  ,
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


    $("#tblMssfamily").on("click",".ModalEditFamily",function(){
    var data = $(this).data();
    var enccode = data['enccode'];
    var hpercode = data['percode'];
    var seqid = data['seq'];

    var obj = getFamilyComposition(enccode, hpercode, seqid);
    console.log(seqid);
    $('#AddFamily').modal('show');
    $("#addenccode").val(obj['enccode']);
    $("#addhpercode").val(obj['hpercode']);
    $("#fam_fname").val(obj['familyfirst']);
    $("#fam_lname").val(obj['familylast']);
    $("#fam_middle").val(obj['familymiddle']);
    $("#fam_age").val(obj['AGE']);
    $("#fam_cs").val(obj['civil_stat']);
    $("#fam_relToPat").val(obj['reltopat']);
    $("#fam_educAttain").val(obj['educattain']);
    $("#fam_occupation").val(obj['famoccupation']);
    $("#fam_income").val(obj['montincome']);
    $("#famseqid").val(obj['seqid']);
    

    $("#AddIden").val('update');

  });
