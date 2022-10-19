  Module=$('#module').val();

  function Day3List(enccode, hpercode)
  {
    var data = new Object();
    data.id = "Day3Table";
    data.link = baseURL+"MalariaLab/Day3List/" + enccode + "/" +hpercode;
    data.type = "POST";
    data.coldef=[
    {
      targets : [0,1],
      searchable:false,
      visible:false,
    }
    ];
    loadTable(data);
  } 

 function Day7List(enccode, hpercode)
  {
    var data = new Object();
    data.id = "Day7Table";
    data.link = baseURL+"MalariaLab/Day7List/" + enccode + "/" +hpercode;
    data.type = "POST";
    data.coldef=[
    {
      targets : [0,1],
      searchable:false,
      visible:false,
    }
    ];
    loadTable(data);
  } 

   function Day14List(enccode, hpercode)
  {
    var data = new Object();
    data.id = "Day14Table";
    data.link = baseURL+"MalariaLab/Day14List/" + enccode + "/" +hpercode;
    data.type = "POST";
    data.coldef=[
    {
      targets : [0,1],
      searchable:false,
      visible:false,
    }
    ];
    loadTable(data);
  } 

   function Day21List(enccode, hpercode)
  {
    var data = new Object();
    data.id = "Day21Table";
    data.link = baseURL+"MalariaLab/Day21List/" + enccode + "/" +hpercode;
    data.type = "POST";
    data.coldef=[
    {
      targets : [0,1],
      searchable:false,
      visible:false,
    }
    ];
    loadTable(data);
  } 

   function Day28List(enccode, hpercode)
  {
    var data = new Object();
    data.id = "Day28Table";
    data.link = baseURL+"MalariaLab/Day28List/" + enccode + "/" +hpercode;
    data.type = "POST";
    data.coldef=[
    {
      targets : [0,1],
      searchable:false,
      visible:false,
    }
    ];
    loadTable(data);
  } 


  $(".ModalAddFollowup").on('click',function(){

    $('#AddFollowup').modal('show');
    $("#FollowIden").val('insert');
    $("#Followenccode").val($("#encountercode").val());
    $("#Followhpercode").val($("#percode").val());

  });
  $("#FollowTable").on("click",".ModalEditFollow",function(){
    var data = $(this).data();
    console.log(data);
    $('#AddFollowup').modal('show');
    $("#Followid").val(data['follow_up_id']);
    $("#Followenccode").val(data['enccode']);
    $("#Followhpercode").val(data['hpercode']);
    $("#follow option[value='" + data['follow_day']+"']").attr("selected","selected");

    $("#slideno").val(data['slide_no']);
    $("#parasite").val(data['parasite_ul']);

    var collect=data['collected_date3'];
    var date_collect = ((collect == "1970-01-01 00:00:00") || (collect == null)) ? "0000-00-00 00:00:00" : setTimeLocale(collect);  
    $("#follow_dtecollect").val(date_collect);

    var conduct=data['conducted_date3'];
    var date_conduct = ((conduct == "1970-01-01 00:00:00") || (conduct == null)) ? "0000-00-00 00:00:00" : setTimeLocale(conduct);  
    $("#follow_dteexam").val(date_conduct);

    var result=data['result_date3'];
    var date_result = ((result == "1970-01-01 00:00:00") || (result == null)) ? "0000-00-00 00:00:00" : setTimeLocale(result);  
    $("#follow_dtereleased").val(date_result);


    $("#FollowIden").val('update');

  });

  $("#FollowTable").on("click",".ModalDeleteFollow",function(){
    var data = $(this).data();

    $('#DeleteFollow').modal('show');
    $("#delFollowformIden").val('delete');
    $("#deletecode").val(data['enccode']);
  });
