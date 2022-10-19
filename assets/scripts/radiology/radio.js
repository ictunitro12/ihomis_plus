var filmTime = "";
var filmType = "";
var filmConsumed = "";
var filmSpoiled = "";
var hospital = "";
var no = "";
var patient = "";
var ward = "";
var date = "";
var caseno = "";




 $(function() {
	getDetails();
   });

	$('#btnFilmEntry').click(function() {
		$('#modalFilmEntry').modal('show');
		$('#radtime').val(filmTime).prop('disabled', true).trigger('change');
		$('#radfilm').val(filmType).prop('disabled', true).trigger('change');
		$('#radconsumed').val(filmConsumed).prop('disabled', true).trigger('change');
		$('#radspoiled').val(filmSpoiled).prop('disabled', true).trigger('change');
		$('#radenterby').prop('disabled', true).trigger('change');
	});

	$('#btnflmpicture').click(function(){
		$('#modalflmpicture').modal('show');	
	});

	$('#btnChargeSlip').click(function(){
		$('#modalChargeSlip').modal('show');	
	});


	$('#btnResult').click(function(){
	$('#modalResult').modal('show');	
	});

	$('#idAvailStatus').on('click', function() {
		$('#modalAvailStatus').modal('show');	
	});
	
		$('#idChargeSlip').on('click', function() {
		$('#modalChargeSlip').modal('show');
		$('#csnoId').text(no).css( "font-weight","bold");

		$('#csdateId').text(date).css( "font-weight","bold");
		$('#cshospitalId').text(hospital).css( "font-weight","bold");
		$('#cspatientId').text(patient).css( "font-weight","bold");
		$('#cswardId').text(ward).css( "font-weight","bold");

		});



		$('#radiologyTable').on('click', '.film', function() {
			var vardocointkey = $(this).attr('data-docointkey');
			$.ajax({
				'type': 'POST',
				'url': '<?php echo site_url("Radiology/getFilmData"); ?>',
				'dataType': 'json',
				'data': {
					'docointkey': vardocointkey
				},
				'success' : function(data) { 
					if (data != null) {
					var docointkey = data['docointkey'];
					var radcode = data['radcode'];
					var rreqdte = data['rreqdte'];
					var typefilm = data['typefilm'];
					var typeconsume = data['typeno'];
					var radspoil = data['spoil'];

					$('#modalFilmEntry').modal('show');
					$('#raddocointkey').val(docointkey);
					$('#radradcode').val(radcode);
					$('#radtime').val(rreqdte).prop('disabled', true).trigger('change');
					$('#radfilm').val(typefilm).prop('disabled', true).trigger('change');
					$('#radconsumed').val(typeconsume).prop('disabled', true).trigger('change');
					$('#radspoiled').val(radspoil).prop('disabled', true).trigger('change');
					} else {
						toastr.warning('No data Available!</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');
					}

					
				}
			});
		});

		$('#radiologyTable').on('click', '.filmpicture', function() {
			var date = $(this).attr('data-date');
			var patient = $(this).attr('data-patlast');
			var hpercode = $(this).attr('data-hpercode');
			var procdesc = $(this).attr('data-procdesc');
			var room = $(this).attr('data-room');
			var licno2 = $(this).attr('data-licno2'); 
			$('#modalflmpicture').modal('show');
			$('#filmpicdate').text(date);
			$('#filmpicpatient').text(patient);
			$('#filmpichospno').text(hpercode);
			$('#filmpicexam').text(procdesc);
			$('#filmpicroom').text(room);
			$('#filmpicreqby').text(licno2);

		});


		$('#radiologyTable').on('click', '.result', function() {
			var date = $(this).attr('data-date');
			var patient = $(this).attr('data-patlast');
			var casnumber = $(this).attr('data-casnumber');
			var resultrequestby = $(this).attr('data-licno2');
			var resulthpercode = $(this).attr('data-hpercode');
			var resultprocdesc = $(this).attr('data-procdesc');
			var resultroom = $(this).attr('data-room');
			$('#modalResult').modal('show');
			$('#resultdate').text(date);
			$('#resultpatient').text(patient);
			$('#resultcaseno').text(casnumber);
			$('#resultreqby').text(resultrequestby);
			$('#resulthospo').text(resulthpercode);
			$('#resultprocdesc').text(resultprocdesc);
			$('#resultroom').text(resultroom);
		});


		$('#editFilmEntry').click(function() {
		$('#radtime').prop('disabled', false);
		$('#radfilm').prop('disabled', false);
		$('#radconsumed').prop('disabled', false);
		$('#radspoiled').prop('disabled', false);
		$('#radenterby').prop('disabled', false);
	});


	



	/* function getDetails() {

		var rad_tbl = $("#radiologyTable").DataTable({

			"ajax" : "<?php echo site_url('Radiology/RadiologyList');?>",
			"columns" : [
				{ data : "hpercode" },
				{ data : "casnumber" },
				{ data : "patlast" },
				{ data : "pcchrgcod" },
				{ data : "orno" },
				{ data : "dodate" },
				{ data : "room" },
				{ data : "dostat" },
				{ data : "examperform" },
				{ data : "rem1" },
				{ render: function (data, type, row, meta){
					return '<div class="btn-group  btn-ladda" btn-sm data-layout="zoom-in">\n\
					<button type="button" class="btn btn-success  btn-sm dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">\n\
					<span class="caret"></span>\n\
					<span class="sr-only">Toggle Dropdown</span>\n\
					</button>\n\
					<div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(71px, 34px, 0px); top: 0px; left: 0px; will-change: transform;" role="menu">\n\
					<button  class="dropdown-item film" data-docointkey="'+ row.docointkey+'" data-date="'+ row.dodate +'" data-typefilm="$2" data-typeno="$3" data-spoil="$4"><i class="fa fa-film"></i>&nbsp Film</button>\n\
					<button  class="dropdown-item filmpicture" data-date="'+ row.dodate +'" data-patlast="'+ row.patlast +'" data-hpercode="'+ row.hpercode +'" data-procdesc="'+ row.examperform +'" data-room="'+ row.room +'" data-licno2="'+ row.licno2 +'"><i class="fa fa-file-image-o"></i>&nbsp Film Picture</button>\n\
					<button  class="dropdown-item result" data-date="'+ row.dodate +'" data-patlast="'+ row.patlast +'" data-casnumber="'+ row.casnumber +'" data-licno2="'+ row.licno2 +'" data-hpercode="'+ row.hpercode +'" data-procdesc="'+ row.examperform +'" data-room="'+ row.room +'" ><i class="fa fa-folder"></i>&nbsp Result</button>\n\
					</div>\n\
					</div>';
				}, 'defaultContent': ''}
			]
		}); 
		
	}*/


		$("#radiologyTable tbody").on("click", "tr", function(){

			var data = rad_tbl.row(this).data();
			console.log(data);

			hospital = data.hpercode;
			no = data.casnumber;
			patient = data.patlast;
			ward = data.room;
			date = data.dodate;


		});

	$('#saveFilmEntry').click(function(e) {
		e.preventDefault();
		$.ajax({
			type: 'POST',
			url: $(this).attr('formaction'),
			data: $('#frmFilmEntry').serialize(),
			success: function(data) {
				if (data == 1) {
					$('#modalFilmEntry').modal('hide');
					toastr.success('Updated Successfully.</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Success');
				} else {
					toastr.warning('Update Failed.</br> <button type="button" class="btn btn-info   btn-block btn-md btn-toastr">Cancel</button>', 'Warning');
				}
			}
		});

	});






















	// 	var table = $("#radiologyTable").DataTable({
	// 	oLanguage: {sProcessing: '<i class="fa fa-cog fa-spin" style="font-size:30px;color:green"></i> <div class="text text-success"> Please wait....'},
	// 	aLengthMenu: [[15,20, 50, 75, -1], [15,20, 50, 75, "All"]],
	// 	ipageLength: 15,	
	// 	processing: true,
	// 	serverSide: true,
	// 	searching:true,
	// 	responsive: true,
	// 	info:true,
	// 	orderable: true,
	// 	paging: true,
	// 	autoWidth: true,
	// 	destroy: true,
	// 	ajax:{
	// 		"url":"<?php //echo site_url('Radiology/RadiologyList');?>",
	// 		"type":"POST"
	// 	},
	// 	columnDefs: [{
	// 		targets: [8,9,10,11,12,13,14,16,17,18],
	// 		visible: false,
	// 		orderable: false,
	// 	}]
	// 	});


	// 	$('#radiologyTable').on("click", "tr", function() {
	// 		var data = table.row(this).data();
	// 		hospital = data[0];
	// 		no = data[1];
	// 		patient = data[2];
	// 		filmTime = data[5];
	// 		filmType = data[10];
	// 		filmConsumed = data[11];
	// 		filmSpoiled = data[12];
	// 		ward = data[6];

		

	// 	});

	


	// }





























   $(function() {

	var data = new Object();
	data.id = "radiologyTable";
	data.link = "<?php //echo site_url('Radiology/RadiologyList');?>";
	data.type = "POST";
	loadTable(data);
   });
$('#flmpicture').click(function() {
$('#modalSpecimen').modal('show');
$('#labno').prop('disabled', true).trigger('change');
});

$('#editSpecimen').click(function() {
$('#labno').prop('disabled', false);
});





// function RadiologyList()
// {

// }

