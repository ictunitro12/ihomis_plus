	function CountryList()
		{
			var data = new Object();
				data.id = "CountryTable";
				data.link = baseURL+"Ref_Country/CountryList";
				data.type = "POST";
				data.coldef=[
			{
				targets : 3,
				searchable:false,
				render: function (data) 
				{
					switch(data) 
					{
						case 'A' : return '<i class="fa fa-check  text-success"></i>&nbsp Active'; break;
						case 'I' : return '<i class="fa fa-remove text-danger"></i>&nbsp Inactive'; break;
						default  : return '<span class="badge  bg-default">Unknown</span>';
					}
				},
			},
			];
			loadTable(data);
		}
	
		$("#CountryTable").on("click",".ModalDeleteCountry",function(){
		var data = $(this).data();
		var countrycode = atob(data['countrycode']);
		console.log(countrycode);
		$('#DeleteCountry').modal('show');
		$("#formIdentification").val('delete');
		$("#deletecode").val(countrycode);

	});

		$("#CountryTable").on("click",".ModalEditCountry",function(){
		var data = $(this).data();
		var countrycode = atob(data['countrycode']);
		var country = atob(data['country']);
		var cstat = atob(data['cstat']);
		var nationality = atob(data['nationality']);


		$('#ModalAddCountry').modal('show');
		$("#formIden").val('update');
		$("#code").val(countrycode);
		$("#name").val(country);
		$("#nat").val(nationality);
		$("#status").val(cstat);

	});


	function AddCountry(){
		$('#ModalAddCountry').modal('show');
		$("#formIden").val('insert');


		var obj = getCountrycode();
			var i;
				for (i = 1; i <= obj['countrycode']; i++) {
				  $("#code").val(i);
				}

			console.log(i);
			$("#code").val(i);

		}

	function getCountrycode(){
        var obj;
        $.ajax({
            type: "POST",
            url: baseURL+"Ref_Country/getCountrycode",
            async:false,
            success: function(data,status){ 
                obj = $.parseJSON(data);
            },
            error: function(data,status){
            }
        });
		return obj;
    }	