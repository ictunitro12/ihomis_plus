<form id="frmAddContactTracing">
	<div class="modal" id="AddContactTracing" name="AddContactTracing"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content card-accent-success">
				<input type="hidden" name="ContactIden" id="ContactIden">
				<input type="hidden" name="contactenccode" id="contactenccode">
				<input type="hidden" name="contacthpercode" id="contacthpercode">				
				<input type="hidden" name="contactid" id="contactid">				
				<div class="modal-header">
					<h3 class="modal-title text-success"><i class="fa fa-users fa-2x"></i>&nbsp; Contact Tracing</h3>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<label class="col-md-3 col-form-label text-default mb-1">Name:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="contact_fname" name="contact_fname"  placeholder = "Name">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Age:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="contact_age" name="contact_age"  placeholder = "Age">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Address:</label>
						<div class="col-md-9">
							<input type="text"  class="form-control form-control-mb" autocomplete="off" id="contact_address" name="contact_address"  placeholder = "Address">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Describe illness/symptoms:</label>
						<div class="col-md-9">
							<textarea type="text"  class="form-control form-control-mb" autocomplete="off" id="contact_illness" name="contact_illness"  placeholder = "Describe illness/symptoms"></textarea>
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Date when illness was observed:</label>
						<div class="col-md-9">
							<input type="datetime-local"  class="form-control form-control-mb" autocomplete="off" id="contact_dteill" name="contact_dteill">
						</div>

						<label class="col-md-3 col-form-label text-default mb-1">Contact Number:</label>
						<div class="col-md-9">
							<input type="number"  class="form-control form-control-mb" autocomplete="off" id="contact_number" name="contact_number"  placeholder = "Contact Number">
						</div>
						
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit"  class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteContactTracing" id="frmDeleteContactTracing">
	<input type="hidden" name="delcontactformIden" id="delcontactformIden">
	<input type="hidden" name="deletecode" id="deletecode">	
	<input type="hidden" name="deletecontactid" id="deletecontactid">	

	<div class="modal fade" id="DeleteContactTracing" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="mssenccode"></span></h5>
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

<!------------------------------------------------------------------------------------------------->

<form id="frmAddTravelA">
	<div class="modal" id="AddTravelA" name="AddTravelA"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content card-accent-success">
				<input type="hidden" name="Travel_1_Iden" id="Travel_1_Iden">
				<input type="hidden" name="travel_1_enccode" id="travel_1_enccode">
				<input type="hidden" name="travel_1_hpercode" id="travel_1_hpercode">				
				<input type="hidden" name="travel_1_id" id="travel_1_id">				
				<div class="modal-header">
					<h4 class="modal-title text-success"><i class="fa fa-users fa-2x"></i>&nbsp; History of Travel in the past 2 months before onset of signs and symptoms?</h4>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<label class="col-md-4 col-form-label text-default mb-1">Places Visited with overnight stay
						(Sitio/Brgy,Municipality,Provice):</label>
						<div class="col-md-8">
							<textarea type="text"  class="form-control form-control-mb" autocomplete="off" id="travel1_place" name="travel1_place"  placeholder = "Places Visited with overnight stay
							(Sitio/Brgy,Municipality,Provice)"></textarea>
						</div>

						<label class="col-md-12 col-form-label text-default mb-1"><b>Travel Period</b></label>

						<label class="col-md-4 col-form-label text-default mb-1">Date of Arrival:</label>
						<div class="col-md-8">
							<input type="datetime-local"  class="form-control form-control-mb" autocomplete="off" id="travel1_arrival" name="travel1_arrival">
						</div>

						<label class="col-md-4 col-form-label text-default mb-1">Date of Departure:</label>
						<div class="col-md-8">
							<input type="datetime-local"  class="form-control form-control-mb" autocomplete="off" id="travel1_departure" name="travel1_departure" >
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit"  class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteAddTravelA" id="frmDeleteAddTravelA">
	<input type="hidden" name="deltravel1_formIden" id="deltravel1_formIden">
	<input type="hidden" name="deletetravelcode1" id="deletetravelcode1">	
	<input type="hidden" name="deletetravelid1" id="deletetravelid1">	

	<div class="modal fade" id="DeleteAddTravelA" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="mssenccode"></span></h5>
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



<!------------------------------------------------------------------------------------------------->

<form id="frmAddTravelB">
	<div class="modal" id="AddTravelB" name="AddTravelB"  role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content card-accent-success">
				<input type="hidden" name="Travel_2_Iden" id="Travel_2_Iden">
				<input type="hidden" name="travel_2_enccode" id="travel_2_enccode">
				<input type="hidden" name="travel_2_hpercode" id="travel_2_hpercode">				
				<input type="hidden" name="travel_2_id" id="travel_2_id">				
				<div class="modal-header">
					<h4 class="modal-title text-success"><i class="fa fa-users fa-2x"></i>&nbsp; History of Travel  2 months after onset of signs and symptoms?</h4>
				</div>
				<div class="modal-body border-success">
					<div class="form-row">
						<label class="col-md-4 col-form-label text-default mb-1">Places Visited with overnight stay
						(Sitio/Brgy,Municipality,Provice):</label>
						<div class="col-md-8">
							<textarea type="text"  class="form-control form-control-mb" autocomplete="off" id="travel2_place" name="travel2_place"  placeholder = "Places Visited with overnight stay
							(Sitio/Brgy,Municipality,Provice)"></textarea>
						</div>

						<label class="col-md-12 col-form-label text-default mb-1"><b>Travel Period</b></label>

						<label class="col-md-4 col-form-label text-default mb-1">Date of Arrival:</label>
						<div class="col-md-8">
							<input type="datetime-local"  class="form-control form-control-mb" autocomplete="off" id="travel2_arrival" name="travel2_arrival">
						</div>

						<label class="col-md-4 col-form-label text-default mb-1">Date of Departure:</label>
						<div class="col-md-8">
							<input type="datetime-local"  class="form-control form-control-mb" autocomplete="off" id="travel2_departure" name="travel2_departure" >
						</div>
					</div>
				</div>
				<div class="modal-footer bg-secondary">
					<button type="submit"  class="btn btn-success btn-md btn-block btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i> SAVE</button>
				</div>
			</div>
		</div>
	</div>
</form>

<form name="frmDeleteAddTravelB" id="frmDeleteAddTravelB">
	<input type="hidden" name="deltravel_2_formIden" id="deltravel_2_formIden">
	<input type="hidden" name="deletetravelcode2" id="deletetravelcode2">
	<input type="hidden" name="deletetravelid2" id="deletetravelid2">		

	<div class="modal fade" id="DeleteAddTravelB" role="form">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white" ><i class="fa fa-user-o"></i>&nbsp <span id="mssenccode"></span></h5>
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



