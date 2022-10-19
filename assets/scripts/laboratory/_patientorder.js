function patientOrder(enccode)
{	
    var data = new Object();
    data.id = "patientOrders";
    data.link = baseURL +"Laboratory/orderPatient";
    data.data={enctr:enccode},
    data.type = "POST";
    data.destroy=true;
    data.search = true;
    data.paging = true;	
    data.info = true;
    data.rowsGroup= [0,1];
    data.select = {
        style: 'multi',
        selector: 'td:not(:nth-child(8))',
        className:'bg-success text-white selected'
    };	
    data.rowsGroup = false;
    data.orderable = false;
    data.rowCallback =function ( row, data, start, end, display ) {
        if(data['pcchrgcod'] != null )
        {
            $('td', row).addClass('bg-secondary wslip');
            $('td', row).prop('disabled',true);  
             
        } 
        if(data['procreslt'] == null ){
            $('td', row).addClass('table-warning');
            $('td', row).prop('disabled',true);  
        }
    },
    data.columns=[
        { data:"date"},//0
            { 
                data:"pcchrgcod",
                render: function(data, type, row)
                {
                    if(data== null || data == ''){
                        return '<div class="text-danger">No chargeslip!</div>';
                    }else{
                        return "<a href='javascript:void(0);' id='chargesliplink' data-hpercode="+row.hpercode+" data-pcchrgcod="+row.pcchrgcod+"  data-enccode="+row.enccode+" data-chrgslip="+data+">"+data+"<code>[click here]</code></a>";
                    }
                }
            },//1
            { data:"procdesc"},//2
            {
                render: function(data, type, row)
                {
                    return (row.dopriority == 'ROUTIN' ? '<div class="p-1 text-white bg-warning">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class=" p-1 text-white bg-danger">URGENT!</div>' : '<div class="p-1 text-white bg-secondary">NONE</div>'));
                }
            },//3
            { render: function(data, type, row)
                {
                    return (row.estatus == 'S' ? '<div class=" p-1 text-white bg-success">SERVED</div>' : (row.estatus == 'P' ? '<div class=" p-1 text-warning">PARTIAL!</div>' : '<div class="p-1 text-white bg-secondary">UNSERVED</div>'));
                }
            },	
            { 
                data:"doctor"
            },//4
            { 
                data:"procrate"
            },//5
            { 
                data:"intkey"
            },//6
            { 
                data:"procndte"
            },//6
            { 
                data:"prikey"
            },//6
            { 
                data:"procreslt",
                render: function(data, type, row)
                {
                   switch(data){
                    case "001":
                        return 'Urine';
                    break;
                    case "002":
                        return 'Blood Test ';
                    break;
                    case "003":
                        return 'Clinical Microbiological ';
                    break;
                    case "004":
                        return 'Gynecology Cytology ';
                    break;
                    case "005":
                        return 'Serology';
                    break;
                    case "006":
                        return 'Immunology';
                    break;
                    case "007":
                        return 'Fecalysis';
                    break;
                    case "008":
                        return 'Chemistry';
                    break;
                    case "009":
                        return 'Blood Exam';
                    break;
                    case "010":
                        return 'Bone Marrow Study';
                    break;
                    case "011":
                        return 'Clinical Microbiology Smear';
                    break;
                    case "012":
                        return 'Blood Transfusion';
                    break;
                    case "013":
                        return 'Surgical Pathological';
                    break;
                    case "014":
                        return 'Miscellaneous';
                    break;
                    default:
                        return "<span class='text-danger'>No result template!</span>";
                    break;
                   }
                }
            },//6
            { data:"procreslt",
                    render: function(data, type, row)
                    {
                    
                    switch(data){
                       
                        case "001":
                          var docointkey =row.intkey;
                         var rowData= $.ajax({
                            type: "GET",
                            async: false, 
                            dataType:'JSON',
                            url:baseURL+'Laboratory/hurresinfo/'+URLencode(docointkey)}).responseJSON;
                            if((rowData ==null)){
                                return "<button type='button' class='btn btn-ghost-primary btn-block btn-sm' id='btnAddSpecimen' data-enccode ='"+row.enccode+"'  data-hpercode ='"+row.hpercode+"'  data-docointkey ='"+row.intkey+"'  data-result ='"+row.procreslt+"'><i class='fa fa-plus'></i> Add Specimen</button>";
                               }else{
                                return  "<button type='button' class='btn btn-ghost-primary btn-block btn-sm' id='btnEditResult' data-result ='"+row.procreslt+"' data-enccode ='"+row.enccode+"'  data-hpercode ='"+row.hpercode+"'  data-docointkey ='"+row.intkey+"'  data-result ='"+row.procreslt+"'><i class='fa fa-edit'></i>&nbsp Edit Result</button>";
                               }
                        break;
                        case "002": 
                        var docointkey =row.intkey;
                        var rowData= $.ajax({
                            type: "GET",
                            async: false, 
                            dataType:'JSON',
                            url:baseURL+'Laboratory/hbldrsltinfo/'+URLencode(docointkey)}).responseJSON;
                            console.log(rowData);
                            if((rowData ==null)){
                                return "<button type='button' class='btn btn-ghost-primary btn-block btn-sm' id='btnAddSpecimen' data-enccode ='"+row.enccode+"'  data-hpercode ='"+row.hpercode+"'  data-docointkey ='"+row.intkey+"'  data-result ='"+row.procreslt+"'><i class='fa fa-plus'></i> Add Specimen</button>";
                               }else{
                                return  "<button type='button' class='btn btn-ghost-primary btn-block btn-sm' id='btnEditResult' data-result ='"+row.procreslt+"' data-enccode ='"+row.enccode+"'  data-hpercode ='"+row.hpercode+"'  data-docointkey ='"+row.intkey+"'  data-result ='"+row.procreslt+"'><i class='fa fa-edit'></i>&nbsp Edit Result</button>";
                               }
                        break;
                        case "003":
                            return 'Clinical Microbiological ';
                        break;
                        case "004":
                            return 'Gynecology Cytology ';
                        break;
                        case "005":
                            return 'Serology';
                        break;
                        case "006":
                            return 'Immunology';
                        break;
                        case "007":
                            return 'Fecalysis';
                        break;
                        case "008":
                            return 'Chemistry';
                        break;
                        case "009":
                            return 'Blood Exam';
                        break;
                        case "010":
                            return 'Bone Marrow Study';
                        break;
                        case "011":
                            return 'Clinical Microbiology Smear';
                        break;
                        case "012":
                            return 'Blood Transfusion';
                        break;
                        case "013":
                            return 'Surgical Pathological';
                        break;
                        case "014":
                            return 'Miscellaneous';
                        break;
                        default:
                            return "<span class='text-danger'>No result template!</span>";
                        break;
                    }
                    }
            }
    ]
        data.coldef  = [
        {
            targets :['_all'],
            className:"align-middle"
        },
        {
            targets :[6,7,8,9],
            visible:false
        }
        ];
var patientTable=Datatable(data);
patientTable.on('click' ,'#chargesliplink', function(){  
    var slipno = btoa($(this).data('pcchrgcod'));
    var hpercode = $(this).data('hpercode');
    var src =baseURL+'Laboratory/printChargeslip/'+slipno+'/'+hpercode;
    var x = document.getElementById("slipPDF").src = src;

    $("#chargeslip").modal({backdrop:'false',show:true});    
});	

patientTable.on('click',"#btnAddSpecimen",function(){
    if($(this).data('result') == null){
        toastr.warning('Result is not set','Please check references!');
    }else{
        $('#specidocointkey').val($(this).data('docointkey'));
        $('#specienccode').val($(this).data('enccode'));
        $('#specihpercode').val($(this).data('hpercode'));
        $('#speciproccode').val($(this).data('proccode'));
        $('#resultType').val($(this).data('result'));
        $.get(baseURL+"Laboratory/getLabno/"+$(this).data('result'), function (data){
            $("#labno").val($.trim(data));
            $('#speciFormIden').val('insert');
            $("#modalSpecimen").modal({backdrop:'false',show:true});
            seluom();
        });
    }
});

patientTable.on('click',"#btnEditResult",function(){
    var type = $(this).data('result');
    var docointkey = btoa($(this).data('docointkey'));		
    $.get(baseURL+'Laboratory/checkSpecimen/'+type+'/'+docointkey, function (data){
        if(data==1){
             $("input[name=docointkey]").val(atob(docointkey));
            _checkSpecimen(type,atob(docointkey));
        }else{
            toastr.warning('Please put specimen','No Specimen!');
        }
     });
    
});
}


function seluom()
	{	
		$('#speci_oum').select2({
		placeholder: 'Units of Measure',
        selectOnClose: true,
		allowClear: true,
		theme:'coreui',
		ajax:{
		url: baseURL+"/Laboratory/selOUM",
		dataType: "json",
		type:"POST",
		delay: 250,
		data: function(params){
		return{
			search: params.term
		};
		},
		processResults: function(data){
		var results = [];
		$.each(data, function(index, item){
		results.push({
		id:item.uomcode,
		text:item.uomdesc
		});
		});
		return{
		results: results
		}
		}
		}
		});
			$('#speci_oum').on('change', function() {
			$("'#speci_oum option:selected",this.value);
		});
	}
    function _checkSpecimen(type,docointkey)
	{
	switch (type) {
	  case '001':
			$('#modalUrinalysis').modal({backdrop:'false',show:true});
			$.get(baseURL+'Laboratory/hurresinfo/'+URLencode(docointkey),function(data){
				$("#docointkey_result").val(docointkey);
                
				var  obj = $.parseJSON(data);
                $("#enccode_result").val(obj['enccode']);
                $("#hpercode_result").val(obj['hpercode']);
                //color
				$("#frmcolor option[value=" + obj['urcolor'] + "]").prop(
					"selected",
					true
				  );
				 $("#frmcharac option[value=" + obj['urchar'] + "]").prop(
					"selected",
					true
				  );
                //microscopic
				$("#frmrcb").val(obj['urrbc']);
				$("#frmwbc").val(obj['urwbc']);
                $("#frmcrys option[value=" + obj['urcrystals'] + "]").prop(
					"selected",
					true
				  );
                  $("#frmsugar option[value=" + obj['ursugar'] + "]").prop(
					"selected",
					true
				  );
				$("#frmepith option[value=" + obj['urepicell'] + "]").prop(
					"selected",
					true
				  );
				  $("#frmbact option[value=" + obj['urbacteria'] + "]").prop(
					"selected",
					true
				  );

                  //Chemical
                  $("#frmreac").val(obj['urreaction']);
                  $("#frmsugar option[value=" + obj['ursugar'] + "]").prop(
					"selected",
					true
				  );
                  
				  $("#frmnotes").val(obj['urnotes']);
				  $("#frmbili option[value=" + obj['urbilirbn'] + "]").prop(
					"selected",
					true
				  );

                  $("#frmpregtest option[value=" + obj['urpregtst'] + "]").prop(
					"selected",
					true
				  );

				  $("#frmnitrite option[value=" + obj['urnitrite'] + "]").prop(
					"selected",
					true
				  );
				  $("#frmsp").val(obj['urspgrav']);
				  $("#frmprotein  option[value=" + obj['urprotein'] + "]").prop(
					"selected",
					true
				  );
				  $("#frmketone  option[value=" + obj['urketone'] + "]").prop(
					"selected",
					true
				  );
				  $("#frmurob  option[value=" + obj['urbilinogn'] + "]").prop(
					"selected",
					true
				  );
				

				  $("#frmascorbic  option[value=" + obj['uracid'] + "]").prop(
					"selected",
					true
				  );

				  $("#frmnotes").val(obj['urnotes']);
				  $("#frmmedtech").val(obj['medtech']);
				  $("#frmpathologist").val(obj['patholog']);

			});
		break;
	  case '002':
			$("#docointkey_bld").val(docointkey);
			$('#modalBlood').modal({backdrop:'false',show:true});
            $.get(baseURL+'Laboratory/hbldrsltinfo/'+URLencode(docointkey),function(data){
                var  obj = $.parseJSON(data);
                $("#docointkey_bld").val(docointkey);
                $("#enccode_bld").val(obj['enccode']);
                $("#hpercode_bld").val(obj['hpercode']);
                $("#bldHemo").val(obj['hemog']);
                $("#bldHemato").val(obj['medtech']);
                $("#bldRBC").val(obj['rbccount']);

                $("#bldMCV").val(obj['mcv']);
                $("#bldMCH").val(obj['mch']);
                $("#bldMCHC").val(obj['mchc']);

                $("#bldWBC").val(obj['wbccount']);
                $("#bldNeu").val(obj['neutroph']);
                $("#bldLympho").val(obj['lymphocy']);

                $("#bldBaso").val(obj['basophil']);
                $("#bldMono").val(obj['monocyte']);
                $("#bldEos").val(obj['eosinoph']);
                
                $("#bldStabs").val(obj['stabs']);
                $("#bldJuv").val(obj['juvenile']);
                $("#bldPlatelet").val(obj['platecnt']);

                $("#bldRet").val(obj['reticulo']);
                $("#bldBleed").val(obj['bleedtme']);

            });
		break;
	  case '003':
			$('#modalClinicalMicroSmear').modal({backdrop:'false',show:true});
		break;
	  case '004':
			$('#modalGyneCytology').modal({backdrop:'false',show:true});
		break;
	  case '005':
			$('#modalImmunologyandSerology').modal({backdrop:'false',show:true});
		break;
	  case '006':
			$('#modalImmunology').modal({backdrop:'false',show:true});
		break;
	  case '007':
			$('#modalFecalysis').modal({backdrop:'false',show:true});
		break;
		 case '008':
			$('#modalBloodChem').modal({backdrop:'false',show:true});
		break;
		 case '009':
			$('#modalBlood').modal({backdrop:'false',show:true});
		break;
		 case '010':
			$('#modalResult').modal({backdrop:'false',show:true});
		break;
		 case '011':
			$('#modalClinicalMicrobiological').modal({backdrop:'false',show:true});
		break;
		 case '012':
			$('#modalBloodTrans').modal({backdrop:'false',show:true});
		break;
		case '013':
			$('#modalSurgicalPathological').modal({backdrop:'false',show:true});
		break;
		case '014':
			$('#modalMiscellaneous').modal({backdrop:'false',show:true});
		break;
		default:
			toastr.warning('No result form!','Warning!');
		break;
	}
}