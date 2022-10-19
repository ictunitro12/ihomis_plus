<div class="modal" name="drugLookUp" id="drugLookUp" role="form">
		<div class="modal-dialog modal-dialog-centered modal-xl" tab-index="-1" role="form">
		<div class="modal-content">
			<div class="modal-header">
				<div class="text text-success h4 float-left"><i class="fa fa-pills"></i>Available Drug/s & Medicines</div>
					<button type="button" id="closeSearch" class="close text-danger  float-right" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<table id="lotnotbl"  style="cursor:pointer;"class="table table-md table-striped table-bordered  table-hover" width="100%">
					<thead>
						<tr>
							<th width="50px" >Lot No</th>
							<th width="100px">Description(<small>(Generic/Strength/Form/Route)</small>)</th>
							<th  style="text-align:center; vertical-align:middle;">Price</th>
							<th  style="text-align:center; vertical-align:middle;">Available</th>
							<th  style="text-align:center; vertical-align:middle;">dmdcomb</th>
							<th  style="text-align:center; vertical-align:middle;">dmdctr</th>
							<th  style="text-align:center; vertical-align:middle;">dmhdrsub</th>
							<th  style="text-align:center; vertical-align:middle;">Expiry</th>
							<th  style="text-align:center; vertical-align:middle;">Account</th>
							<th  style="text-align:center; vertical-align:middle;">Date as of</th>
							<th  style="text-align:center; vertical-align:middle;">For Sharing</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="modal-footer">
				
			</div>
		</div>
	</div>
	</div>


    <form id="frmDrugLookUp" method="post">
	<div class="modal" id="modalDrugSearch" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md " role="dialog">
			<div class="modal-content card-accent-success">
			<div class="modal-body">
			<button type="button" id="closeSearch" class="close text-danger" data-dismiss="modal">&times;</button>
		<h1 class="modal-title text-success"><i class="fa fa-thin fa-search fa-2x"></i> Look  up drug's & medicines</h1>
		<br></br>
		<div class="row">
                 <div class=" h6 col-md-2 col-form-label text-success  text-default mb-1">
                  EDPMS:
				</div>
				<div class="col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="EDPMS ID" name ="sedpms" id="sedpms" autocomplete="off" >
				</div>
				<div class=" h6 col-md-2 col-form-label text-success  text-default mb-1">
                  Drugname:
				</div>
				<div class="col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="Drugname" name ="sdrugname" id="sdrugname" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
				 Lotnumber:
				</div>
				<div class=" col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="Lotnumber" name ="slotno" id="slotno" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label text-success text-default mb-1">
				 Type of account:
				</div>
				<div class="col-md-10 mb-2">
					<select name="stoa" id="stoa" class="form-control form-control-lg" >
						<option>Select</option>
					</select>
				</div>
				<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
				Middlename:
				</div>
				<div class="col-md-10 mb-2">
					<input type="text" class="form-control form-control-lg" placeholder="MiddleName" name ="smname" id="smname" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label  text-success text-default mb-1">
				Birthdate:
				</div>
				<div class="col-md-10 mb-2">
					<input type="date" class="form-control form-control-lg" placeholder="BirthDate" name ="sbod" id="sbod" autocomplete="off" >
				</div>
				<div class="h6 col-md-2 col-form-label text-success  text-default mb-1">
				 Sex:
				</div>
				<div class="col-md-10 mb-2">
					<select name="ssex" id="ssex" class="form-control form-control-lg" >
						<option>Select</option>
						<option value="M">Male</option>
						<option  value="F">Female</option>
					</select>
				</div>
			</div>
			<button type="submit" name="sSubmit" class="btn btn-outline-success btn-lg btn-block btn-ladda text-success" data-color="green" data-style="expand-right"><i class="fa fa-search"></i> &nbsp SEARCH</button>
			</div>
			</div>
		</div>
	</div>
</form>