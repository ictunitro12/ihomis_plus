	<div class="row">
	<div class="col-md-2 col-form-label  text-success mb-1">
	Account No:
	</div>
	<div class="col-md-4 mb-1">
	<input type="text" name="acctno" id="acctno" readonly class="form-control form-control-md" placeholder="Account No">
	<input type="hidden" name="chrgformIden" id="chrgformIden" >
	<input type="hidden" name="chrgEnccode" id="chrgEnccode">
	<input type="hidden" name="chrgHpercode" id="chrgHpercode">
	</div>
	<div class="col-md-2 col-form-label  text-success mb-1 ">
	Chargeslip:
	</div>
	<div class="col-md-4 mb-1">
	<input type="text" name="chrgslip" id="chrgslip" readonly class="form-control form-control-md" placeholder="Charge Slip">
	</div>
	</div>
	<div class="row">
	<div class="col-md-2 col-form-label  text-success mb-1">
	Charge Date:
	</div>
	<div class="col-md-4 mb-1">
	<input type="datetime-local" name="chrgdate" stepup="1"  min="2017-12-31T12:59" id="chrgdate" class="form-control form-control-md"  placeholder="Charge date">
	</div>
	<div class="col-md-2 col-form-label  text-success mb-1">
	Cost Center:
	</div>
	<div class="col-md-4 mb-1">
	<select  name="costcntr" id="costcntr"  class="form-control form-control-md" placeholder="Cost Center" >
	<option value="">Cost Centers</option>
	<option value="LABOR">Laboratory</option>
	<option value="RADIO">Radiology</option>
	<option value="PROCE">Procedure</option>
	<option value="PCKPR">Packages</option>
	<option value="RADTH">Radio Theraphy</option>
	<option value="NUCME">Nuclear Medicine</option>
	<option value="DENTA">Dental</option>
	<option value="DERMA">Dermatology</option>
	<option value="OPTHA">Opthalmology</option>
	<option value="PHARM">Pharmacy</option>
	<option value="NEURO">Neurology</option>
	<option value="OPD">Out-Patient Department</option>
	<option value="ER">Emergency Room</option>
	<option value="OR">Operating Room</option>
	<option value="DR">Delivery Room</option>
	<option value="WARD">Ward</option>
	<option value="PERIN">Perinatal</option>
	<option value="CSSR">Central Supply Room</option>
	<option value="PT">Physical Therapy</option>
	<!--option value="MISCE">Miscellanous</option -->
	</select>
	</div>
	</div>