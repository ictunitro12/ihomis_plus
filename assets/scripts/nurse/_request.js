function requestList(type,ward)
	 {
		var table =$("#requestMed").DataTable({
        ajax:{
            url:baseURL+'Nurse/pharmacyRequest',
            type:'POST',
            data:{ward:ward,type:type}
        },
		 processing: true,
		 language:{
            'processing': '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'
			}, 	
		 destroy: true,
		 searching:true,
		 processing: true,
		 ordering:true,
		 paging:true,
		 info:true,
		  columns: [
			{"data" : "date"},
			{"data" : "description"},
			{"data" : "quantity"},
			{"data" : "issued"},
			{"data" : "received"},
			{"data" : "rxstatus"},
			{"data" : "phrxstatus"},
			{"data" : "priority"},
			{
				data : null ,
				render: function(data, type, row){
					if(row.phrxstatus =='S'){
						return "<div class=btn-group role=group>"+
						"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
						"<i class='fa fa-th-list'></i>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>"+
							"<a class='dropdown-item' data-dmdcomb='"+data['dmdcomb']+"'  data-dmdctr='"+data['dmdctr']+"'  data-locacode='"+data['locacode']+"'  data-date='"+data['dtereq']+"'  id='btnReqDrugReceive' href='#'><i class='fa fa-check'></i> &nbsp Receive</a>"+
						    "<a class='dropdown-item' data-dmdcomb='"+data['dmdcomb']+"'  data-dmdctr='"+data['dmdctr']+"'  data-locacode='"+data['locacode']+"'  data-date='"+data['dtereq']+"'  id='btnReqDrugDelete' href='#'><i class='fa fa-trash'></i> &nbsp Delete/Cancel</a>"+
						"</div>"+
					  "</div>";
					}else{
						return "<div class=btn-group role=group>"+
						"<button id='btnGroupDeliv' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
						"<i class='fa fa-th-list'></i>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDelivDrop'>"+
							"<a class='dropdown-item' data-dmdcomb='"+data['dmdcomb']+"'  data-dmdctr='"+data['dmdctr']+"'  data-locacode='"+data['locacode']+"'  data-date='"+data['dtereq']+"'  id='btnReqDrugEdit' href='#'><i class='fa fa-edit'></i> &nbsp Edit</a>"+
						    "<a class='dropdown-item' data-dmdcomb='"+data['dmdcomb']+"'  data-dmdctr='"+data['dmdctr']+"'  data-locacode='"+data['locacode']+"'  data-date='"+data['dtereq']+"'  id='btnReqDrugDelete' href='#'><i class='fa fa-trash'></i> &nbsp Delete/Cancel</a>"+
						"</div>"+
					  "</div>";
					}
				
				}	
			}
		
			],	
			columnDefs:[
			{	
				targets: ["_all"],
				className:"align-middle"
			},
			{	
				targets: [5,6,7],
				searchable:false,
				orderable:false,
					render: function (data,type,row) 
					{
						switch(data)
						{
							case 'U' : return '<div class="p-2 bg-danger text-white">Unserved</div>'; break;
							case 'S' : return '<div class="p-2 bg-success text-white">Served</div>'; break;
							case 'Y' : return '<div class="p-2 bg-primary text-white">Yes</div>'; break;
							case 'N' : return '<div class="p-2 bg-info text-white">No</div>'; break;
							default  : return '<div class="p-2 bg-warning text-white">No</div>';
						}
					}
			}
		
		],
	
		 }); 
	 }
	 
    $("#btnAdd_request").on("click",function(){
        $("#requestmodal_drug").modal('show');
		$("#dterequestMed").val(getTimeLocale());
        $("#formIdenreqMed").val("insert");
        $("#locacodeMed").val(id);
       $("#requestList_drug").DataTable({
            processing: true, 	
            destroy: true,
            searching:true,
            processing: true,
            ordering:true,
            paging:true,
            info:true,
            columnDefs :[
                {
                    targets:[2,3,4],
                    visible:false
                }

            ]
        }); 
    });
    
	$("#requestMed").on('click','#btnReqDrugEdit',function(){
		var data = $(this).data();
		var dmdctr =data['dmdctr'];
		var dmdcomb =data['dmdcomb'];
		var date =data['date'];
		var locacode =data['locacode'];
		var dataArr={};    
		dataArr.date=date;
		dataArr.locacode= locacode;
		dataArr.dmdcomb= dmdcomb;
		dataArr.dmdctr= dmdctr;
		

		$.post(baseURL+"Nurse/wardRequestInfo",{data:JSON.stringify(dataArr)},function(data){
		var obj=$.parseJSON(data);
			$("#itemdesc").text(obj['description']);
			$("#datereqedit").val(setTimeLocale(obj['dtereq']));
			$("#qtyreqedit").val(obj['qtyreq']);
			$("#dmdcomb_edit").val(obj['dmdcomb']);
			$("#dmdctr_edit").val(obj['dmdctr']);
			$("#locacode_edit").val(obj['locacode']);
		});
		
		$("#requestmodal_edit").modal('show');		
		

	});