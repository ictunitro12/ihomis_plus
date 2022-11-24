	function initEdit(id)
	{	
		var user_id  = encodeURIComponent(encodeURIComponent(id));
		$("#empPic").prop('src', baseURL+'assets/img/avatars/none.png');
		$('#formIdenAccess').val('update');
		$('#accuserID').val(user_id);
		$("#empPic").prop('src', baseURL+'assets/img/avatars/none.png');
		$('a[data-toggle="tab"]').removeClass('disabled');
		
		$("#frmFormuser").load(baseURL+"Auth/view_userForm",function(){
			$("#ichkReset").show();
				uppercase();
				setUserInformation(user_id);
				$("#chkActPass").hide();
		    $('#formIdenUser').val('update');
		$("#selEmp").prop('readonly',true);
		$("#chkActPass").prop('hidden',true);
	
		});
		
	}
	
	function initProfile(id)
	{	
		var user_id  = encodeURIComponent(encodeURIComponent(id));
		$("#empPic").prop('src', baseURL+'assets/img/avatars/none.png');
		$('#formIdenAccess').val('update');
		$('#accuserID').val(user_id);
		$("#empPic").prop('src', baseURL+'assets/img/avatars/none.png');
		$("#frmFormuser").load(baseURL+"Auth/view_userForm",function(){
			$("#ichkReset").show();
				uppercase();
				setUserInformation(user_id);
				$("#chkActPass").hide();
				$("#btnClose").hide();
		    $('#formIdenUser').val('update');
		});
	}

	function setUser(id)
	{
		var selEmp = $('#selEmp');
		$('#selEmp').prop('readonly', true);
		$.ajax({
			type: 'POST',
			url: baseURL+'Ref_Personnel/setUser/' + id,
		}).then(function (data) {
		var obj=$.parseJSON(data);
			var option = new Option(obj['name'], obj['employeeid'], true, true);
			selEmp.append(option).trigger('change');
			selEmp.trigger({
				theme:'coreui',
				type: 'select2:select',
				params: {
					data: data
				}
			});
		});	
	}
		
	function setUserInformation(id)
	{
		$.ajax({
		type: "POST",
		url: baseURL+"Auth/userInformation",
		data:{id:id},
		dataType: "JSON",
		success: function(data)
		{
			setUser(data['data']['id']);
			setDept(data['data']['deptcode']);
			employeeInformation(data['data']['deptcode']);
			$("#userPassword").val(data['data']['password']);
			$("#userPasswordConfirm").val(data['data']['password']);
			$("#userName").val(data['data']['username']);
			$("#userEmail").val(data['data']['email']);
			$("#userStatus").val(data['data']['active']);
			$("#userID").val(id);
		},
		error: function(data)
		{
			toastr.error('Error:'+' '+data.status+' '+data.statusText);
		}
		});
	}
	
	
	function accessLevel(id)
	{
	var table =$('#accessRow').DataTable({

			"ajax": baseURL+"auth/groupList",
			"searching":true,
			"paging":false,
			"destroy":true,
			"searching":false,
			"ordering" : false,
			"info" : false,
			"stateSave":false,
			"rowsGroup":[2],
			"processing":true,
			"rowCallback" :function ( row, data, start, end, display ) {
				var grp=data['id'];
				var rowData= $.ajax({
					type: "POST",
					data:{id:id,grp:grp},
					async: false, 
					dataType:'JSON',
					url:baseURL+'Auth/getuserAccess'}).responseJSON;
					if(rowData == 1){
						 $(table.cells(row, 0).nodes()).find("input[type=checkbox]").prop('checked',true);
						 if(data['isSub']=='Y'){
		
							var tr = $(row).closest('tr');	
							var tdi = $(table.cells(row, 0).nodes()).find("i.fa");
							var rows = table.row(row);
							rows.child(submenuList(getsubmenuList(grp))).show();
							rows.child().find("input[type=checkbox]").prop('checked',true);
							tr.addClass('shown');
							tdi.first().removeClass('fa-plus-square fa-2x');
							tdi.first().addClass('fa-minus-square');
							tdi.first().html('<input type="checkbox" checked id ="mainID" hidden name="mainID[]" value ="'+grp+'">');
						 }
					 
					}
			},
			"columns" : [
				{data : "isSub"},
				{
					data : "name", 
					render: function(data, type, row,meta)
					{
						return "<span>"+ data +"</span>";
					}
				},
				{
					data : "typegrp",
					render: function (data,type,row) 
					{
						switch(data)
						{
							case 'trans' : 
								return '<i class="fa fa-refresh"></i>&nbsp Transaction'; 
								break;
							case 'lib' : 
								return '<i class="fa fa-archive"></i>&nbsp Reference';
								break;
							case 'rep' : 
								return '<i class="fa fa-file"></i>&nbsp Report'; 
								break;
							case 'admin' : 
								return '<i class="fa fa-key"></i>&nbsp Administrator';
								break;
							case 'dash' : 
								return '<i class="fa fa-key"></i>&nbsp Administrator';
								break;
							default: return '	<i class="fa fa-arrow-right"></i>&nbsp submenu';
						}
					},
				}],
			columnDefs: [ {
				targets: 0,
				createdCell: function (td, cellData, rowData, row, col) {
				   if ( cellData === "Y" ){
						$(td).addClass('details-control');
						$(td).html('<i class="fa fa-plus-square"></i>');
					
				   }else{
					    $(td).html( "<input type='checkbox'  id='groupID"+row+"' name='groupID[]' value='"+rowData.id+"'>");
				   }
				}
			  },
				
		{
            orderable: false,
            targets: [0,1,2]
        }]
				
		});
		
         // Add event listener for opening and closing details
         $('#accessRow tbody').on('click', 'td.details-control', function () {
             var tr = $(this).closest('tr');
             var tdi = tr.find("i.fa");
             var row = table.row(tr);
			console.log(row.data().id);
             if (row.child.isShown()) 
			 {
                 row.child.hide();
                 tr.removeClass('shown');
                 tdi.first().removeClass('fa-minus-square');
                 tdi.first().addClass('fa-plus-square');
				 tdi.first().html('<input type="checkbox"  id ="mainID" hidden name="mainID[]" value ="'+row.data().id+'">');
             }
             else 
			 {
				 row.child(submenuList(getsubmenuList(row.data().id))).show();
				 tr.addClass('shown');
                 tdi.first().removeClass('fa-plus-square fa-2x');
                 tdi.first().addClass('fa-minus-square');
                 tdi.first().html('<input type="checkbox" checked id ="mainID" hidden name="mainID[]" value ="'+row.data().id+'">');
             }
         });

         table.on("user-select", function (e, dt, type, cell, originalEvent) {
             if ($(cell.node()).hasClass("details-control")) {
                 e.preventDefault();
             }
         });		
	} 

	
	function submenuList(data) 
	{
	var content = "<table id ='tblSub' class='table table-sm table-bordered table-success' width='50%'>"
		for(i=0; i<data['data'].length; i++){
		
			content += '<tr>'
						+'<td>'
						+ '<input type="checkbox" id="groupID"  name="groupID[]" value="'+data['data'][i]['id']+'"'
						+'</td>'
						+'<td>'
						+ data['data'][i]['name']
						+'</td>'
						+'</tr>';
		
		}
	return	content += "</table>";	
	}
	
	function getsubmenuList(id)
	{
		var obj;
		$.ajax({
			type: "POST",
			url: baseURL+"Auth/submenuList/"+id,
			data: "JSON",
			async:false,
			success: function(data)
			{
				obj = $.parseJSON(data);
			},
			error: function(data)
			{
				toastr.error('Error:'+' '+data.status+' '+data.statusText);
			}
			});
			return obj
	}
	
	function populateMenu(id)
	{
		var menuTable= $('#accessRow').DataTable();
		$.ajax({
			type: "POST",
			url: baseURL+"Auth/rolesGroups/"+id,
			data: "JSON",
			async:false,
			success: function(data)
			{ 
				var menuID=$.parseJSON(data);
				$.each(menuID, function(index, item){
					var rowIndexes = [];
						menuTable.rows( function ( idx, data, node ){	
						
						 if(data.id === item.groupID){
							if($('#'+id).is(':checked'))
							{
								$(menuTable.cell(idx, 0).node()).find('input[type="checkbox"]').prop('checked',true);  
							}else{
								$(menuTable.cell(idx, 0).node()).find('input[type="checkbox"]').prop('checked',false);  
							}                
						 } 

						 
						 
				 
						 return false;
					 });
				});
			
			},
			error: function(data)
			{
				toastr.error('Error:'+' '+data.status+' '+data.statusText);
			}
		});
	}
	