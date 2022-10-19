<form id="dateRange" method="post">
	<div class="modal fade" id="DateSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm " role="dialog">
			<div class="modal-content card-accent-success">
				<div class="modal-header">
					<h3 class="modal-title text-success"><span class="fa fa-calendar"></span> Select Date</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
				</div>
				<div class="modal-body">
					<div id="baseDateControl">
						<div class="row-md-6">
							<label class="text-success">From</label>
							<input type="date" class="form-control form-control-mg" placeholder="start date" name="from" id="from" autocomplete="off" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" />
						</div>
						<br>
						<div class="row-md-6">
							<label class="text-success">To</label>
							<input type="date" class="form-control form-control-mg" placeholder="end date" name="to" id="to" autocomplete="off" min="1970-01-01" max="<?php echo date("Y-m-d"); ?>" />
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-block" data-style="slide-right" id="filter">Search &nbsp <i class="fa fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
</form>

<div class="col-md-12">
	<div class="card card-accent-success">
		<div class="card-body table-responsive">
			<h4 class="text text-success"><i class="<?php echo $icon; ?>">&nbsp;</i><?php echo $header; ?> <?php echo $subheader; ?><button type="button" id="btnDateSelect" title="Date Select" class="btn btn-success pull-right btn-md" data-style="zoom-in"><i class="fa fa-calendar-o"></i>
				</button></h4>
			<ul class="nav nav-tabs nav-justified" id="tabAggregates" role="tablist">
				<li class="nav-item">
					<a class="nav-link text text-success active" id="bysex-tab" data-toggle="tab" href="#by_Sex" role="tab" aria-controls="by_Sex" aria-expanded="true"><i class="fa fa-venus-mars"></i>&nbsp By Sex</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="byattendphys-tab" data-toggle="tab" href="#by_Attending_Physician" role="tab" aria-controls="by_Attending_Physician"><i class="fa fa-user-md"></i>&nbsp By Resident Physician</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text text-success" id="bydisease-tab" data-toggle="tab" href="#by_Disease" role="tab" aria-controls="by_Disease"><i class="fa fa-sun-o"></i>&nbsp By Disease</a>
				</li>
				<!-- <li class="nav-item">
				<a class="nav-link text text-success" id="bydaysadm-tab" data-toggle="tab" href="#by_Days_of_Admission" role="tab" aria-controls="by_Days_of_Admission"><i class="fa fa-sign-in"></i>&nbsp By No. of Days Of Admission</a>
			  </li> -->
				<li class="nav-item">
					<a class="nav-link text text-success" id="bydaydisc-tab" data-toggle="tab" href="#by_Days_of_Discharge" role="tab" aria-controls="by_Days_of_Discharge"><i class="fa fa-sign-out"></i>&nbsp By Date of Discharged</a>
				</li>
			</ul>
			<div class="tab-content" id="tab_content">
				<br>
				<?php $this->load->view('Rep_ERoom/_tabBySex.php'); ?>
				<?php $this->load->view('Rep_ERoom/_tabByAttendPhys.php'); ?>
				<?php $this->load->view('Rep_ERoom/_tabByDisease.php'); ?>
				<?php $this->load->view('Rep_ERoom/_tabByDayAdm.php'); ?>
				<?php $this->load->view('Rep_ERoom/_tabByDayDisc.php'); ?>
			</div>
		</div>
	</div>
</div>
</div>
<input type="hidden" id="baseURL" value="<?php echo base_url(); ?>">
<script src="<?php echo base_url() ?>assets/plugin/JQuery-Session-Plugin-master/jquery.session.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/reperaggregates/tabbing.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		initTabb($.session.get('from'), $.session.get('to'));
		if ($.session.get('from') == undefined && $.session.get('to') == undefined) {
			$("#DateSearch").modal();
		} else {
			$("#DateSearch").modal('hide');
		}
		return false;
	});
	/* 	$('#filter').on('click',function()
		{
			var from = $("#from").val();
			var to = $("#to").val();
			$.session.set('from',from);
			$.session.set('to',to);
			document.getElementById('rep_from').innerHTML = $.session.get('from');
			document.getElementById('rep_to').innerHTML = $.session.get('to');
			$("#DateSearch").modal('hide');
		});
	 */
	$('#dateRange').validate({
		submitHandler: function(form) {
			if ($("#from").val() > $("#to").val()) {
				alert("Warning: Please Select Valid Date Range!");
				$("#DateSearch").modal({
					backdrop: 'static'
				}).draggable({});
			} else {
				var from = $("#from").val();
				var to = $("#to").val();
				$.session.set('from', from);
				$.session.set('to', to);
				document.getElementById('rep_from').innerHTML = $.session.get('from');
				document.getElementById('rep_to').innerHTML = $.session.get('to');
				$("#DateSearch").modal('hide');
				return false;
				$(form).submit();
			}
		},

		rules: {
			from: 'required',
			to: 'required',
		},

		errorElement: 'span',
		errorPlacement: function errorPlacement(error, element) {
			error.addClass('invalid-feedback');
			if (element.prop('type') === 'checkbox') {
				error.insertAfter(element.parent('label'));
			} else if (element.hasClass('select2-hidden-accessible')) {
				element = $("#selReg" + element.attr("id") + "ul").parent();
				error.insertAfter(element);
			} else {
				error.insertAfter(element);
			}
		},

		highlight: function highlight(element) {
			$(element).addClass('is-invalid').removeClass('is-valid');
			if ($(element).hasClass('select2-offscreen')) {
				element = $("#s2id_" + element.attr("id") + " ul").parent();
				$(element).addClass('is-invalid').removeClass('is-valid');
			}
		},

		unhighlight: function unhighlight(element) {
			$(element).addClass('is-valid').removeClass('is-invalid');
			if ($(element).hasClass('select2-offscreen')) {
				$("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
			}
		}
	});

	$('#btnDateSelect').on('click', function() {
		$("#DateSearch").modal();
		$.session.remove('from');
		$.session.remove('to');
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/reperaggregates/tabbing.js"></script>