function memCity(type)
{
	$("#"+type+"City").off();
	$("#"+type+"City").select2({
		enabled:true,
		placeholder: 'City',
		theme:'coreui',
		allowClear: true,
		ajax:{
		url: baseURL+"Demographics/searchCity/",
		dataType: "JSON",
		type:"POST",
		delay: 250,
		data:function(params){
		return{searchCity: params.term};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.ctycode,
		text:item.ctyname
		});
		});
		return{
		results: results
		}}}
		});
		
		
		$("#"+type+"City").on('change', function(){
			$(this).valid();
			var regCode = this.value.substring(0,2);
			var provCode = this.value.substring(0,4);
			if(this.value == ""){
				$("#"+type+"Reg").empty().trigger('change');
				$("#"+type+"Zip").val('');
				$("#"+type+"Brgy").empty().trigger('change');
				$("#"+type+"Prov").empty().trigger('change');
			}else{
				setMemRegion(type,regCode);
				setMemProv(type,provCode);
				memzip(type,regCode,this.value);
				MemBarangay(type,this.value);
			}
		});
}

function memzip(type,regCode,citycode)
{
	 if(regCode=='13'){
		 setMemZipNcr(type,citycode);
		 setMemDistrict(type,citycode);
		 $("#"+type+"Dist").empty().trigger('change');
	 }else{
		  $("#"+type+"Dist").empty().trigger('change');
		  $("#"+type+"Dist").prop('disabled',true);
		setMemZipCode(type,citycode);
	 }
	
}

function setMemZipNcr(type,cityCode)
{
	var zipSelect = $("#"+type+"Dist");
	$.ajax({
		type: 'POST',
		url: baseURL+'/Demographics/setDist/' + cityCode,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['distname'], obj['zipcode'], true, true);
		zipSelect.append(option).trigger('change');
		zipSelect.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

function setMemZipCode(type,cityCode)
{
		var Obj = new Object();
		Obj.url = baseURL+"Demographics/setZip/"+cityCode;
		Obj.data = "JSON";
		Obj.type = "POST";
		var row=Information(Obj);
		$("#"+type+"Zip").val(row[0]['ctyzipcode']);
}

function setMemRegion(type,regCode)
{
	var regionSet = $("#"+type+"Reg");
	$.ajax({
		type: 'POST',
		url: baseURL+'/Demographics/setRegion/' + regCode,
	}).then(function (data) {
		var obj=$.parseJSON(data);
		var option = new Option(obj['regname'], obj['regcode'], true, true);
		regionSet.append(option).trigger('change');
		regionSet.trigger({
			theme:'coreui',
			disabled:true,
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

function setMemProv(type,provId)
{
	var str = provId.substring(0,2);
	var provSet = $("#"+type+"Prov");
	$.ajax({
		type: 'POST',
		url: baseURL+'Demographics/setProvince/' + provId,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['provname'], obj['provcode'], true, true);
		provSet.append(option).trigger('change');
		provSet.trigger({
			theme:'coreui',
			disabled:true,
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

function setMemCity(type,cityId)
{
	memCity(type);
	var citySelect = $("#"+type+"City");
	$.ajax({
		type: 'POST',
		url: baseURL+'Demographics/setCity/' + cityId,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['ctyname'], obj['ctycode'], true, true);
		citySelect.append(option).trigger('change');
		citySelect.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}



function setMemBrgy(type,brgyCode)
{
	var brgySelect = $("#"+type+"Brgy");
	$.ajax({
		type: 'POST',
		url: baseURL+'/Demographics/setBrgy/' + brgyCode,
	}).then(function (data) {
	var obj=$.parseJSON(data);
		var option = new Option(obj['bgyname'], obj['bgycode'], true, true);
		brgySelect.append(option).trigger('change');
		brgySelect.trigger({
			theme:'coreui',
			type: 'select2:select',
			params: {
				data: data
			}
		});
	});
}

function MemRegion(type,regcode)
{	
	$("#"+type+"Reg").select2({
		enabled:true,	
		theme:'coreui',
		placeholder:'Select Region',
		triggerChange: true,
		allowClear: true,
		ajax:{
		url: baseURL+"/Demographics/searchRegion"+regcode,
		dataType: "JSON",
		type:"POST",
		delay: 250,
		data:function(params){return{searchRegion: params.term};},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){results.push({id:item.regcode,text:item.regname});});
		return{results: results}}
		},
	});	
	$("#"+type+"Reg").on('change', function(){
	});
}


function MemProvince(type,regcode)
{
	$("#"+type+"Prov").select2({
		enabled:true,
		placeholder: 'Province',
		theme:'coreui',
		allowClear: true,
		triggerChange: true,
		ajax:{
		url: baseURL+"/Demographics/searchProvince/"+regcode,
		dataType: "JSON",
		type:"POST",
		delay: 250,
		data:function(params){
		return{searchProvince: params.term};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.provcode,
		text:item.provname
		});
		});
		return{
		results: results
		}}}
		});
		$("#"+type+"Prov").on('change', function(){
		$("#"+type+"City").removeAttr("disabled");
		MemCity(type,this.value);
		setMemZip(type,this.value)
		});
}



function setMemDistrict(type,citycode)
{
	$("#"+type+"Dist").off();
	$("#"+type+"Dist").select2({
		enabled:true,
		placeholder: 'District',
		theme:'coreui',
		allowClear: true,
		ajax:{
		url: baseURL+"/Demographics/searchDistrict/"+citycode,
		dataType: "JSON",
		type:"POST",
		delay: 250,
		data:function(params){
		return{searchDist: params.term};
		},
		processResults: function(data){
			var results = [];
				
				$.each(data, function(index, item){
				results.push({
				id:item.zipcode,
				text:item.distname
				});
			});
			return{
				results: results
		}
		
		}
		}
		});
		$("#"+type+"Dist").removeAttr('disabled');
		$("#"+type+"Dist").on('change', function(){
		$("#"+type+"Zip").val(this.value);
		});
}





function MemBarangay(type,citycode)
{
	$("#"+type+"Brgy").empty();
	$("#"+type+"Brgy").select2({
		enabled:true,
		placeholder: 'Barangay',
		theme:'coreui',
		allowClear: true,
		ajax:{
		url: baseURL+"Demographics/searchBarangay/"+citycode,
		dataType: "JSON",
		type:"POST",
		delay: 250,
		data:function(params){
		return{searchBarangay: params.term};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.bgycode,
		text:item.bgyname
		});
		});
		return{
		results: results
		}}}
		});
		$("#"+type+"Brgy").removeAttr("disabled");
		$("#"+type+"Brgy").on('change', function(){
		var data =  $("#"+type+"Brgy option:selected",this);
		$(this).valid();
		var bgyCode=this.value.substr(0,6);
		});
}