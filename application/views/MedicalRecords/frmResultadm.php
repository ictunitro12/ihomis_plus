<form id = "frmResultadm" name="frmResultadm">'
<div class="modal" id="patientResultadm" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-body">
		<h4 class="modal-title text-success"><i class="fa fa-stethoscope"></i>&nbsp Admission Result</h4>
		<div class="form-row">
			<div class="col-md-5 col-form-label text-default mb-1">
				 Disposition:  
			</div>	
			<div class="col-md-7">
				<select name="dischDisp" id="dischDisp"  onchange="ConditionRadio(this.value);"class="form-control form-control-md">
					<option value="">Select</option>
					<option value="DISCH">Discharge</option>
					<option value="TRANS" data-toggle="collapse" href="#collapseRefferal">Transfer/Referral</option>
					<option value="DAMA">Discharge against medical advise</option>
					<option value="ABSC">Absconded</option>
					<option value="DIEDD">Died</option>
				</select>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				 Condition:  
			</div>	
			<div class="col-md-7">
				<input type="radio" id="recov" name="dischCond" value="RECOV" > Recovered</br>
				<input type="radio" id="impro" name="dischCond" value="IMPRO" > Improved</br>
				<input type="radio" id="unimp" name="dischCond" value="UNIMP" > Unimproved</br>
				<input type="radio" id="diemi" name="dischCond" value="DIEMI" > Died Less than 48hours Autopsied  </br>
				<input type="radio" id="diena" name="dischCond" value="DIENA" >  Died Less than 48hours not Autopsied </br>
				<input type="radio" id="diepo" name="dischCond" value="DIEPO" > Died Greater than 48hours Autopsied</br>
				<input type="radio" id="dpona" name="dischCond" value="DPONA" >  Died Greater than 48hours not Autopsied</br>
			</div>
			<div class="col-md-5 col-form-label text-default mb-1">
				Special Instruction/s:  
			</div>	
			<div class="col-md-7">
				<textarea class="form-control form-control-mb-1" name="specialins"  id="specialins" placeholder="Special Instruction/s" required>
				</textarea>
			</div>
			<input type="hidden" id="reshpercode" name="reshpercode">
			<input type="hidden" id="resenccode" name="resenccode"	>
	</div>
	</div>
	<div class="modal-footer">
		<div class="btn-group">
			<button type="submit" name="btnresSave" id="btnresSave"  class="btn btn-outline-success btn-ladda" data-style="slide-right"><i class="fa fa-save"></i>&nbsp Save</button>
			<button type="button" class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>Close</button>
		</div>
	</div>
</div>
</div>
</div>
</form>