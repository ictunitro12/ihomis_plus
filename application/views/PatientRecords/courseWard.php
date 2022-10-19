<form id="frmDeletecrsWard" name="frmDeletecrsWard" method="POST">
	<div class="modal" id="deletecrsWrdModal" name="deletecrsWrdModal" role="form">
		<input type="hidden" name="delcrsWrdEnccode" id="delcrsWrdEnccode">
		<input type="hidden" name="delcrsWrddatelog" id="delcrsWrddatelog">
		<input type="hidden" name="crsWrdformIdenDelete" id="crsWrdformIdenDelete" value="delete">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-body">
						<h4>Do you want to proceed?</h4>
					</div>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmcrsWard" name="frmcrsWard" class="form">
	<div class="modal" id="crsWardModal" tabindex="-1" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-body">
					<h4 class="modal-title text-success"><i class="fa fa-door-open"></i> Course in the ward</h4>
					<hr>
					</hr>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							Log:
						</div>
						<div class="col-md-8">
							<input type="datetime-local" class="form-control form-control-mb" autocomplete="off" id="crsWrdDateLog" name="crsWrdDateLog" placeholder="">
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Course in the ward:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control-mb" autocomplete="off" id="crsWrdDesc" name="crsWrdDesc" placeholder="Course in the ward"></textarea>
						</div>
					</div>
					<input type="hidden" name="crsWrdEnccode" id="crsWrdEnccode">
					<input type="hidden" name="crsWrdHpercode" id="crsWrdHpercode">
					<input type="hidden" name="crsWrdformIden" id="crsWrdformIden">
				</div>
				<div class="modal-footer">
					<div class="btn-group float-right">
						<button type="submit" name="btnSavecrsWard" id="btnSavecrsWard" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SAVE</button>&nbsp;
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i>&nbsp;CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<!--div class="card card-accent-success citw">
	<div class="card-header">
		<div class="clearfix">
			<div class="card-title h4 text text-success float-left"> 
				<i class="fa fa-pencil"></i>
				&nbsp Course in  the ward
			</div>		
			<button class ="btn btn-success btn-md float-right"  onclick="addcrsWard('<?php //echo $enccode;
																						?>','<?php //echo $hpercode;
																													?>');" id="btnAddcrsWard"><i class="fa fa-plus"></i></button>
		</div>
	</div>	
	<div class="card-body">
		<table id="courseTbl" class="table table-sm table-striped table-bordered table-condensed table-hover">
			<thead>
				<tr>
					<th></th>
					<th>Log</th>
					<th>Course ward</th>
					<th>Entry by</th>
					<th></th>
				</tr>
			</thead>
		</table>  
	</div>
</div>