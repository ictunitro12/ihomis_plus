

	<div class="tab-pane fade show active" id="reproductive" role="tabpanel" aria-labelledby="reproductive-tab">
		<div class="row">
			<div class="col-md-6">
				<div class="h5 text text-success"> 
					<i class="fa fa-th-list"></i>
					&nbsp Health Reproductive for Women
				</div>
			</div>
			<div class="col-md-6">
			<div class="btn-group pull-right" role="group" aria-label="">
			<button onclick="AddWomen()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"> </i>
			</button>
			</div>
			</div>		
		</div>	
		<table id="HealthWomenTable" class="table table-sm table-condensed table-bordered"width="100%">
			<thead>
				<tr>
					<th>hpercode</th>
					<th width="50%">Date of Assessment</th>
					<th width="30%">Fecundity</th>
					<th	width="15%">Do you have a partner?</th>
					<th></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th></th>
					<th width="50%"></th>
					<th width="30%"></th>
					<th	width="15%"></th>
					<th></th>
				</tr>
			</tfoot>
		</table>
	</div>

<form name="frmWomen"   id="frmWomen">
	<div class="modal fade" id="ModalAddWomen" tabindex="-1" role="dialog">
		<input type="hidden" name="formIden" id="formIden">
	<div class="modal-dialog modal-dialog-centered " role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white" ><i class="fa fa-plus"></i>&nbsp; Women of Reproductive Age Profile</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
		<input type="hidden" class="form-control form-control-mg" name ="code" id="code" value="" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="toecode" id="toecode" value="" autocomplete="off"/>
		<input type="hidden" class="form-control form-control-mg" name ="datereport" id="datereport" autocomplete="off"/>
		<div class="row">	
			<div class="col-md-4 col-form-label text-default mb-1"><i class="fa fa-asterisk text-danger "></i>&nbsp; Date of Assessment:</div>
				<div class="col-md-8">
					<input type="datetime-local" class="form-control form-control-mb" name="dateassess" id="dateassess" >
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> <i class="fa fa-asterisk text-danger "></i>&nbsp; Fecundity:</div>
			<div class="col-md-8">
					<select name ="fecun" id ="fecun" class="form-control">
						<option value="">SELECT</option>
						<option value="F">Fecund</option>
						<option value="I">Infecund</option>
					</select>
				</div>
			<div class="col-md-4 col-form-label text-default mb-1"> Do you have a partner?:</div>
				<div class="col-md-8">
					<select name ="partner" id ="partner" class="form-control">
						<option value="">SELECT</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Do you plan to have more children?:</div>
				<div class="col-md-8">
					<select name ="morechild" id ="morechild" class="form-control">
						<option value="">SELECT</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>		
			<div class="col-md-4 col-form-label text-default mb-1"> Are you currently using any FP method?:</div>
				<div class="col-md-8">
					<select name ="usefpmethod" id ="usefpmethod" class="form-control">
						<option value="">SELECT</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> What Type?:</div>
				<div class="col-md-8">
					<select name ="wattype" id ="wattype" class="form-control">
						<option value="">SELECT WHAT TYPE</option>
						<option value="M">Modern</option>
						<option value="T">Traditional</option>
					</select>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> What Method?:</div>
				<div class="col-md-4">
					<select name ="methodname" id ="methodname" class="form-control">
						<option value="">SELECT WHAT METHOD</option>
						<option value="01">Combined Oral Contraceptives (COC) </option>
						<option value="02">Progestin Only Pill (POP)</option>
						<option value="03">Injectible</option>
						<option value="04">Implant</option>
						<option value="05">Intra-Uterine Device - Interval</option>
						<option value="06">Intra-Uterine Device - Postpartum</option>
						<option value="07">Condom</option>
						<option value="08">Natural Family Planning - Cervical Mucus Method</option>
						<option value="09">Natural Family Planning - Basal Body Temperature</option>
						<option value="10">Natural Family Planning - Symptothermal Method</option>
						<option value="11">Natural Family Planning - Standard Days Method</option>				
						<option value="12">Lactational Amenorrhea Method</option>
						<option value="13">Others, specify</option>
					</select>
				</div>	
				<div class="col-md-4">
					<input type="text" class="form-control form-control-mg" name ="method_specify" id="method_specify" autocomplete="off"/>
				</div>	
			<div class="col-md-4 col-form-label text-default mb-1"> Would you like to switch to Modern Method?:</div>
				<div class="col-md-8">
					<select name ="modernmethod" id ="modernmethod" class="form-control">
						<option value="">SELECT</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>				


			<div class="col-md-4 col-form-label text-default mb-1"> If yes, when?:</div>
				<div class="col-md-8">
					<input type="datetime-local" class="form-control form-control-mb" autocomplete="off"  id="yesdate" name="yesdate" >
				</div>		
			<div class="col-md-4 col-form-label text-default mb-1"> For Counselling?:</div>
				<div class="col-md-8">
					<select name ="counselling" id ="counselling" class="form-control">
						<option value="">SELECT</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>				
			
			
		
		</div>
	</div>
	<div class="modal-footer bg-secondary">
		<button  class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i></button>
		<button class="btn btn-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i></button>
	</div>
	
	</div>
	</div>
	</div>
	</form>

	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/women.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/family.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/familyplanning/women_validation.js"></script>
	
