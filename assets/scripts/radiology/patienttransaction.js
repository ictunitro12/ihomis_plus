	function patienttransaction(enccode)
	{
		var enctr= encodeURIComponent(encodeURIComponent(enccode));
	    var orderTable = $('#pat_tbl').DataTable({
		"ajax" : baseURL+"Radiology/orderPat/"+enctr,
		select: {
            style: 'multi',
			className:'bg-success text-white select',
			selector: 'td:not(:nth-child(8))'
        },
		"aLengthMenu": [[15,20, 50, 75, -1], [15,20,50, 75, "All"]],
		"processing":true,
		"oLanguage": {sProcessing: '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>'},
		"destroy":true,
		"columns" : [
			{data:"intkey"},
			{data:"date"},
			{data:"pcchrgcod",
				render:function(data, type, row){
					if(data == null){
						return '<div class="text-danger"> No chargeslip!</div>';
					}else{
						return '<div class="text-link">'+data+'</div>';
					}
		 	  }
			},
			{data:"procdesc"},
			{data:"procrate"},
			{ render: function(data, type, row)
				{
					return (row.dopriority == 'ROUTIN' ? '<div class="text-warning">ROUTINE</div>' : (row.dopriority == 'STAT' ? '<div class="text-danger">URGENT!</div>' : '<div class="text-secondary">NONE</div>'));
				}
			},
			{ data:"estatus",
				render: function(data, type, row)
				{
					return (data == 'S' ? '<div class="text-success">SERVED</div>' : (data == 'P' ? '<div class="text-warning">PARTIAL!</div>' : '<div class="text-danger">UNSERVED</div>'));
				}
			},
			{ 
				data:"film",
				render: function(data, type, row)
				{
					return  (data > 0 ? '<div class="text-success"><i class="fa fa-check"></i> has film</div>' : (data ==  0 ? '<div class="text-danger">no film</div>' : '<div class="text-secondary">NONE</div>'));
				}	
			},
			{ 
					data:"intkey",
					render: function(data, type, row)
					{
					if(row.film == 0){
						return "<button type='button' class='btn btn-outline-success btn-sm' id='filmEntry' data-hpercode = '"+row.hpercode+"' data-proccode = '"+row.proccode+"' data-enccode = '"+row.enccode+"' data-docointkey ='"+data+"'><i class='fa fa-plus'></i>Add Film</button>"; 
					}else{
						 return "<div class=btn-group role=group>"+
						"<button id='btnGroupFilmResult' type='button' class='btn  btn-outline-success btn-sm dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"+
						"<i class='fa fa-th-list'></i>"+
						"</button>"+
						"<div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>"+
						   "<a class='dropdown-item'id='filmPDF' data-hpercode = '"+row.hpercode+"' data-proccode = '"+row.proccode+"' data-enccode = '"+row.enccode+"' data-docointkey ='"+data+"' href='#'>Result</a>"+
						   "<a class='dropdown-item'id='filmResult' data-hpercode = '"+row.hpercode+"' data-proccode = '"+row.proccode+"' data-enccode = '"+row.enccode+"' data-docointkey ='"+data+"' href='#'>Upload</a>"+
						   "<a class='dropdown-item'id='editFilm' data-hpercode = '"+row.hpercode+"' data-proccode = '"+row.proccode+"' data-enccode = '"+row.enccode+"' data-docointkey ='"+data+"' href='#'>Films</a>"+
						"</div>"+
					  "</div>";
					} 
				}	
			},
			{ 
					render: function(data, type, row,meta)
				{
					return "<input type='text' id='row[]' name='row[]' value='"+meta.row+"'>";
				}	
			}],

		"columnDefs":[
			{
				targets: [0,9],
				visible:false
			},
			{
				targets: ["_all"],
				className: 'align-middle'
			},
			{
				targets: [1,2,6],
				className: 'text-center'
			},
			{
				targets: [1],
				type: 'date'
			}
		
		],
		"footerCallback": function ( row, data, start, end, display ) {
			var api = this.api(), data;
 
			// Remove the formatting to get integer data for summation
			var intVal = function ( i ) {
				return typeof i === 'string' ?
					i.replace(/[\$,]/g, '')*1 :
					typeof i === 'number' ?
						i : 0;
			};
		
			// Total over all pages
			total = api
				.column(4)
				.data()
				.reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
 
			// Total over this page
			pageTotal = api
				.column( 4, { page: 'current'} )
				.data()
				.reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
	
			// Update footer
			$( api.column(4).footer() ).html(
				formatNumber(total.toFixed(2,0))
			);
			
			}
		});

		$('#pat_tbl').on('click','#filmEntry',function(){
			$('#modalFilm').modal('show');
			var docointkey=$(this).data('docointkey');
			var enccode=$(this).data('enccode');
			var proccode=$(this).data('proccode');
			var hpercode=$(this).data('hpercode');
			Film(docointkey);
			$('#filmEntrydocointkey').val(docointkey);
			$('#filmEntryenccode').val(enccode);
			$('#filmEntryproccode').val(proccode);
			$('#filmEntryhpercode').val(hpercode);
			$('#filmEntryproccode').val(proccode);
		});

		$('#pat_tbl').on('click','#editFilm',function(){
			$('#modalFilm').modal('show');
			var docointkey=$(this).data('docointkey');
			var enccode=$(this).data('enccode');
			var proccode=$(this).data('proccode');
			var hpercode=$(this).data('hpercode');
			Film(docointkey);
			
			$('#filmEntrydocointkey').val(docointkey);
			$('#filmEntryenccode').val(enccode);
			$('#filmEntryproccode').val(proccode);
			$('#filmEntryhpercode').val(hpercode);
			$('#filmEntryproccode').val(proccode);
		});
	
		orderTable.on('click','#filmResult',function(){
			$('#modalFilmResult').modal('show');
			var docointkey=$(this).data('docointkey');
			var hpercode=$(this).data('hpercode');
			var enccode=$(this).data('enccode');
			var proccode=$(this).data('proccode');
				$('#docointkey').val(docointkey);
				$('#enccode').val(enccode);
				$('#hpercode').val(hpercode);
				$('#proccode').val(proccode);	
		});
		
		orderTable.on('click','#filmPDF',function(){
			$('#modalPdfFilm').modal('show');
			var docointkey=encodeURIComponent(encodeURIComponent($(this).data('docointkey')));
			var hpercode=$(this).data('hpercode');
			var enccode=encodeURIComponent(encodeURIComponent($(this).data('enccode')));
			var proccode=encodeURIComponent(encodeURIComponent($(this).data('proccode')));
			var x = document.getElementById("radio_PDF").src = baseURL+'Radiology/radioPDF/'+enccode+'/'+docointkey+'/'+proccode;
		});

		$('#radiologyTable').on('click','#filmResult',function(){
			$('#modalFilmResult').modal('show');
			var docointkey=atob($(this).data('docointkey'));
			var enccode=atob($(this).data('enccode'));
			var caseno=atob($(this).data('caseno'));
			var hpercode=atob($(this).data('hpercode'));
			var proccode=atob($(this).data('proccode'));
		
		});

	

	$('#frmFilmEntry').on('submit', function(e){
		$.ajax({
			type : "POST",
			url  : baseURL+"Radiology/saveFilmEntry",
			data :new FormData(this),
			processData: false,
			contentType: false,
				success: function(data,response){
					if($('#filmEntryFormIden').val()=='insert'){
						$('#modalfilmEntry').modal('hide');
						$('#modalFilm').modal('show');
						Film($('#filmEntrydocointkey').val());
						toastr.success('Film Successfully Saved! ' ,'Success');
					}else if($('#filmEntryFormIden').val()=='update'){
						$('#modalfilmEntry').modal('hide');
						$('#modalFilm').modal('show');
						Film($('#filmEntrydocointkey').val());
						toastr.success('Film Successfully Updated! ' ,'Success');
					
					}else{
						
					}
				},
				error: function(xhr, desc, err){
					toastr.error('Error on saving ' ,xhr);
				}
		});
		return false;
   });
 
	



	
	}


	