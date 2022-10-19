	<div class="row">
		<div class="col-md-6 border-right">		
				Complete name:
				<input type="text" name="fname" id="fname"  class="form-control form-control-sm mb-1" placeholder="First name">
				<input type="text" name="mname" id="mname"  class="form-control  form-control-sm mb-1" placeholder="Middle name">
				<input type="text" name="lname" id="lname"  class="form-control  form-control-sm mb-1" placeholder="Last name">
				OR Details:
				<input type="datetime-local" name="ordate" id="ordate"  class="form-control  form-control-sm mb-1" placeholder="mm/dd/yyyy">
				<input type="text" name="orno" id="orno"  class="form-control  form-control-sm  mb-1" placeholder="O.R #">
				<select name="mode" class="form-control  form-control-sm mb-1" id="mode">
					<option value="">Select</option>
					<option value="c">Cash</option>
					<option value="x">Cheque</option>
				</select>	
				 Amount:
			<input type="0.00" name="paid_amt" id="paid_amt" onchange ="discount();"class="form-control  form-control-sm form-control-lg mb-1" placeholder="0.00">	
		</div>
		<div class="col-md-6 mb-1">
			Charge Date:
			<input type="datetime-local" name="chrgdate" stepup="1"  min="2017-12-31T12:59" id="chrgdate" class="form-control  form-control-sm form-control-md"  placeholder="Charge date">
			Chargeslip:
			<input type="text" readonly name="chrgslip" id="chrgslip" class="form-control  form-control-sm form-control-md"  placeholder="Chargeslip">
			Cost Center:
			<select  name="costcntr" id="costcntr"  class="form-control form-control-sm mb-2" placeholder="Cost Center" >
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
				<option value="MISCE">Miscellanous</option>
			</select>
			Discount : 
			<select type="text" name="typeDisc_disc" id="typeDisc_disc" onchange ="discount();"  class="form-control  form-control-sm"></select>
			Percent/Amount: 
			<select type="text" name="codeType" onchange ="discount();" id="codeType" class="form-control  form-control-sm">
				<option value="">Select</option>
				<option value="P">Percent</option>
				<option value="A">Amount</option>
			</select>
			Discount: 
			<input type="0.00" name="amountDisc" readonly id="amountDisc"  class="form-control form-control-lg mb-1" placeholder="0.00">
			Discounted Amount : 
			<input type="0.00" name="discAmount" readonly id="discAmount"  class="form-control form-control-lg mb-1" placeholder="0.00">
		</div>
		</div>
	</div>
	<input type="hidden" name="formType" id="formType" value="insert">
	<script src="<?php echo base_url()?>assets/scripts/billing/discount.js"></script>
