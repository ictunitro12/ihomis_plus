	function orderExamination(enccode)
	{
		var enctr = encodeURIComponent(encodeURIComponent(enccode));
		var data = new Object();
		data.id = "docOrdexam";
		data.link =  baseURL+"DoctorsOrder/Examination/"+enctr;
		data.type = "POST";
		data.coldef =[
				{
					targets: ["_all"],
					className:"align-middle"
				},
				{
				targets: [0,2,4],
				visible:false
				},
				{
					targets: [1,8],
					orderable:false
				},
				{
					targets : [4],
					searchable:false,
					render: function ( data, type, row ) 
					{
						switch(data) 
						{
							case 'STAT' : return '<div class="bg-danger text-white p-2">URGENT</span>'; break;
							case 'ROUTIN' : return '<div class="bg-warning text-white p-2">ROUTINE</span>'; break;
							case 'UNKNO' : return '<div class="bg-primary text-white p-2">UNKNOWN</span>'; break;
							default  : return '<div class="bg-info text-white p-2">NO PRIORITY</span>';
						}
					},
				},
				];
		return loadTable(data);
	}
	
	function addExam(enccode,hpercode)
	{
		$('#procformIden').val("insert");
		$('#procEnccode').val(atob(enccode));	 
		$('#procHpercode').val(atob(hpercode));	
		$("#selExam").attr('disabled',false);
		selDoctor($("#frmProc"));
		SelEmp();
		$('#DocOrdExamModal').modal({backdrop:'true'});	
	}
	
	if($("#dateOrd").val() != ''){
			var error= $('<div class="invalid-feedback">Date Order is required!</div>');		
		if(isNaN($("#dateOrd").val())){
				toastr.warning("Date order is required!","warning");
				$("#dateOrd").addClass('is-invalid');
				if($("#dateOrd").next().attr('class') != 'invalid-feedback'){
					$("#dateOrd").after(error);
				}
		}
		
	}

	
	$("#docOrdexam").on('click','#btnEditExam_edit',function(){
	var key=encodeURIComponent(encodeURIComponent(atob($(this).data('docointkey'))));
	var proccode=encodeURIComponent(encodeURIComponent($(this).data('proccode')));
			$.ajax({
			type: "POST",
			url: baseURL+"DoctorsOrder/orderInfo/"+key+"/"+proccode,
			data: "JSON",
			async:false,
				success: function(data)
				{

					var obj = $.parseJSON(data);
					$('#docformIden').val('update');
					$('#docintkey').val(obj['docointkey']);
					$('#docproccode').val(obj['proccode']);
					$('#ordremarks').val(obj['appr']);
					$('#type').val(obj['priden']);
					$('#ordremarks').val(obj['apprvrmrks']);
					$('#ordReason').val(obj['ordreas']);
					$('#ordNotes').val(obj['donotes']);
					$('#rfee1').val(obj['rfee1']);
					$('#rfee2').val(obj['rfee2']);
					$('#rfee3').val(obj['rfee3']);
					if(obj['dopriority'] !==""){
						$("#priority option[value="+ obj['dopriority'] +"]").prop('selected', true);
					}
					$('#proccode').text(obj['proccode']);
					$('#procdesc').text(obj['procdesc']);
					$('#procrate').text(obj['procrate']);
					setDoctor(obj['licno']);
					selDoctor($("#frmProc"));
					SelEmp();
					$('#modalExamStatus').modal({backdrop:false,show:true});
				},
				error: function(data)
				{
					alert("Error: Fetching Information!");
				}
			});	
			
	});
	
	
	$('#docOrdexam').on('click','#btnDeleteExam_delete',function(){
		$('#deleteExamModal').modal('show');
		var key=encodeURIComponent(encodeURIComponent(atob($(this).data('docointkey'))));
		$('#delDoco').val(key);
		$('#delprocformIden').val('delete');
		
	});
	
	
	$("#proccid").each('onchange',function(){
		
		console.log(this.checked);
		
		if(this.checked == true)
		{
			$('#prio').prop('disabled',false);
		}else{
			
		}
	});
		
	function selExamlist(id=0)
	{	
		var room = $("#rmaccikey").text();
		var data = new Object();
		data.id="examList";
		data.link=baseURL+"DoctorsOrder/ExamList";
		data.type="POST";
		data.data={id:id,curRoom:room};
		data.serverside=true;
		data.rowsGroup=false;
		data.paging=true;
		data.info==true;
		data.destroy=true;
		data.search=true;
		data.select={
			style:'multi',
			className:'bg-success text-white select',
			selector: 'td:not(:nth-child(5),:nth-child(4),:nth-child(3),:nth-child(2))'
		};
		data.columns=[
						{data:"proccode"},//0
						{data :"prikey"},//1
						{data :"curcode"},//2
						{data: "prmapto"},//3
						{data : "procdesc",
							render: function (data, type, full, meta)
							{
								return '<small>'+data+'</small>';
							}
						},//4
						{
							render: function (data, type, full, meta)
							{
								return '<select  class="form-control form-control-sm" name="prio[]" id="prio"><option value="">Select</option> <option value="STAT">URGENT</option> <option value="ROUTIN">ROUTINE</option> </select>';
							}
						},
						{data : "procrate",
							render: function (data, type, full, meta)
							 {
								return '<input type="text" class="form-control form-control-sm"  name="procrate[]"  value="' + data + '">';
							 }
						},
						{data : "remarks",
							 render: function (data, type, full, meta)
							 {
								 return '<input type="text" class="form-control form-control-sm"  name="remarks[]" placeholder="Remarks" value="' + data + '">';
							 }
						 },
						 	 {
							 render: function (data, type, full, meta)
							 {
								 return '<input type="text" class="form-control form-control-sm"   name="notes[]" id="remarks[]" placeholder="Notes">';
							 }
						 },
						 {
							 render: function (data, type, full, meta)
							 {
								 return '<input type="text" class="form-control form-control-sm"   name="reason[]" id="reason[]" placeholder="Reason">';
							 }
						 }
						
					],
			data.coldef= [
			{
				targets: ["_all"],
				className: 'align-middle'
			},
			{
				targets: [0,1,2,3,6],
				visible: false
			}];
		var examList = Datatable(data);
	}
	
	

	
	   $('#frmProc').submit('click',function(){
		var formData = new FormData(this);
		var rowData = $("#examList").DataTable().rows({selected:  true}).data();
		var formType =  $("#procformIden").val();
		for(var i = 0; i <rowData.length; i++)
		{
			var dataString = 'formType='+formType+
					'&enccode='+$("#procEnccode").val()+
					'&hpercode='+$("#procHpercode").val()+
					'&type='+$("#selExam").val()+
					'&dateOrd='+$("#dateOrd").val()+
					'&datePost='+$("#datePost").val()+
					'&verby='+$("#selEmpexam_emp").val()+
					'&proccode='+rowData[i]['proccode']+
					'&procrate='+rowData[i]['procrate']+
					'&remarks='+rowData[i]['remarks']+
					'&prio='+ $($("#examList").DataTable().cell(i, 5).node()).find('select').val()+
					'&notes='+ $($("#examList").DataTable().cell(i, 8).node()).find('input').val()+
					'&reason='+ $($("#examList").DataTable().cell(i, 9).node()).find('input').val()+
					'&curcode='+rowData[i]['curcode']+
					'&prikey='+rowData[i]['prikey']+
					'&licno='+$("#selExam_doc").val()+
					'&prmapto='+rowData[i]['prmapto'];
				
				var url = baseURL+"DoctorsOrder/saveExamOrder";
					$.ajax({
					type:'POST',
					data:dataString,
					dataType:'JSON',
					url:url,
					success:function(data) {
						$("#docOrdexam").DataTable().ajax.reload();
						$("#DocOrdExamModal").modal('hide');
						toastr.success('Doctor/s saved!','Success');
					},
					error:function(data){
						console.log(data);
					}
					});
			
		
		}
		
		return false;
		});
		
		
		
	$("#docOrdexam").on('click','#btnStatusExam_info',function(){	
		var key=encodeURIComponent(encodeURIComponent($(this).data('docointkey')));
	});
   

	$('#frmDeleteExam').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/deleteExam",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					$("#docOrdexam").DataTable().ajax.reload();
				    $('#deleteExamModal').modal('hide');
					toastr.success('Order Successfully Deleted!' ,'Success');
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
   
   
   
	$('#frmExamUpdate').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"DoctorsOrder/updateExamOrder",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					$("#docOrdexam").DataTable().ajax.reload();
				    $('#modalExamStatus').modal('hide');
					toastr.success('Order Successfully Updated!' ,'Success');
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });