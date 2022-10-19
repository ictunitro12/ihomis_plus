	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto	">
					<div class="h3 text text-success"> 
						<i class="fa fa-th-list"></i>
						&nbsp<?php echo $header;?>
					</div>
				</div>


				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<a href="<?php echo site_url('MalariaLab/PatientForm');?>" data-toggle="tooltip" title="Add" class="btn btn-success btn-md  btn-ladda" data-style="zoom-in"><i class="fa fa-user-plus"></i>
						</a>
						&nbsp;<button class="btn btn-success btn-md  btn-ladda" data-style="zoom-in" data-toggle="tooltip" title="Select Date Range" onclick="daterangeselect();"><i class="fa fa-calendar"></i></button>
						<button id="btnCSS" class="btn btn-success btn-ladda" data-style="zoom-in" data-from="" data-to=""><i class="fa fa-file-pdf-o"></i></button>
					</div>
				</div>


			</div>	
		</div>


		<div class="card-body table-responsive">
			<table id="MalariaLabTable" class="table table-sm table-striped  table-bordered table-condensed table-hover ">
				<thead>
					<tr class="thead-dark">
						<th width="50px">Code</th>
						<th width="50px">Patient ID</th>
						<th>Patient Name</th>
						<th>Sex</th>
						<th>Birthday</th>
						<th width="50px"></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	
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
									<input type="date" class="form-control form-control-mg" placeholder="start date" name ="from" id="from" autocomplete="off" />
								</div>
								<br>
								<div class="row-md-6">
									<label class="text-success">To</label>
									<input type="date" class="form-control form-control-mg" placeholder="end date" name ="to" id="to" autocomplete="off" />
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


		<form name ="frmMalariaLabPDF" id="frmMalariaLabPDF" method="post">
			<div class="modal" id="ModalMalariaLab" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-vertical dialog modal-xl" role="dialog">
					<div class="modal-content card-accent-success">
						<div class="modal-header">
							<input name="code" id ="code" type="hidden">
							<input type = "hidden" name = "fromdatepdf"  id="fromdatepdf"/>
							<input type = "hidden" name = "todatepdf"  id="todatepdf"/>

							<h2 class="modal-title text-success"><i class="fa fa-heartbeat"></i>MalariaLab and ParaMalariaLab Fever (ICD 10 Code: A01)</h2>
						</div>
						<div class="modal-body border-success" id="MalariaLabPDF">

						</div>
						<div class="modal-footer bg-secondary"></div>
					</div>
				</div>
			</div>
		</form>

		<form name="frmDeleteMalariaLab" id="frmDeleteMalariaLab">
			<input type="hidden" name="formIdentification" id="formIdentification">
			<input type="hidden" name="deletecode" id="deletecode">
			<input type = "hidden" name = "fromdatedel"  id="fromdatedel"/>
			<input type = "hidden" name = "todatedel"  id="todatedel"/>

			<div class="modal fade" id="DeleteMalariaLab" role="dialog">
				<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
					<div class="modal-content">
						<div class="modal-header bg-danger">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<h4>Do you want to proceed?</h4>
						</div>
						<div class="modal-footer bg-secondary">
							<button  type ="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
						</div>
					</div>
				</div>
			</div>
		</form>	 

		<form id = "frmCSS">
			<div class="modal fade" id="ModalCSS" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-lg" role="dialog">
					<div class="modal-content">
						<div class="modal-body">
							<h3 class="modal-title text-success"><i class="fa fa-heartbeat"></i> MalariaLab</h3>
							<input type="hidden" id="enccodeCSS">
							<iframe id="CSS_pdf" type="application/pdf" frameborder="2" width="100%" height="800px"></iframe>
						</div>
					</div>
				</div>
			</div>
		</form>

		<input type = "hidden" name = "fromdate"  id="fromdate"/>
		<input type = "hidden" name = "todate"  id="todate"/>


		<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
		<script src="<?php echo base_url()?>assets/scripts/malarialab/delete.js"></script>
		<script src="<?php echo base_url()?>assets/scripts/malarialab/malarialab.js"></script>


		<script type="text/javascript">
			$(document).ready(function()
			{
				MalariaLabList($.session.get('from'),$.session.get('to'));
				$("#PatientPicInfo").prop('src', baseURL+'assets/img/avatars/none.png');
				if($.session.get('from') == undefined && $.session.get('to') == undefined)
				{
					$("#DateSearch").modal('show');
				}
				else
				{
					$("#DateSearch").modal('hide');
				}
				return false;
			});


		</script>
