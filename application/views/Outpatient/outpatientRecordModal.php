<form id = "frmVitalSign" name="frmVitalSign">
<div class="modal fade" id="outpatientVitalRecordModal" tabindex="-1" role="form">
	<div class="modal-dialog modal-dialog modal-md" role="form">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-heartbeat"></i> VitalSigns</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
		<legend>Vitals </legend>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Blood pressure:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsBp" name="vsBp" placeholder ="Diastolic/Systolic">
			</div>				
				<div class="col-md-4 col-form-label text-default mb-1">
			Temperature :
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsTemp" name="vsTemp" placeholder ="Degrees Celcius">
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Pulse rate:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsPulse" name="vsPulse" placeholder ="Pulserate">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Respiratory rate:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsRr" name="vsRr" placeholder ="Respiratory">
			</div>
			<legend>Intake </legend>
			<div class="col-md-4 col-form-label text-default mb-1">
			Oral:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsOral" name="vsOral" placeholder ="Oral Intake">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			N/C:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsNC" name="vsNC" placeholder ="N/C Intake">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Blood:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsBlood" name="vsBlood" placeholder ="Blood Intake">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			IV:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsIntake" name="vsIntake" placeholder ="Intravenous Intake">
			</div>				
			<div class="col-md-4 col-form-label text-default mb-1">
			Miscellanous:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsMiscel" name="vsMiscel" placeholder ="Miscellanous">
			</div>
			<legend>Height/Weight</legend>
			<div class="col-md-4 col-form-label text-default mb-1">
				Height:
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsHeight" name="vsHeight" placeholder ="Height">
			</div>
			<div class="col-md-5">
				<select name="vsHeightMeasure" id="vsHeightMeasure" class="form-control">
				<option value="">Select</option>
				<option value="INCHE">Inches</option>
				<option value="METER">Meter</option>
				<option value="CENTI">Centimeter</option>
				<option value="FEET">Feet</option>
				</select>
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
				Weight:
			</div>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="vsWeight" name="vsWeight" placeholder ="Weight">
			</div>
			<div class="col-md-5">
				<select name="vsWeightMeasure" id="vsWeightMeasure" class="form-control">
				<option value="">Select</option>
				<option value="POUND">Pound</option>
				<option value="KILOS">Kilos</option>
				</select>
			</div>	
			
		</div>
		<input type="hidden" name="vsEnccode" id="vsEnccode" value='<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?>'>
		<input type="hidden" name="vsHpercode" id="vsHpercode" value='<?php echo $this->uri->segment(6);?>'>
		<input type="hidden" name="vsformIden" id="vsformIden" value='insert'>
	
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="btnSaveVital" id="btnSaveVital"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
 <button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
	</div>
	</div>
	</div>
</div>
</form>
<form id = "frmHistory" name="frmHistory">
<div class="modal fade" id="outpatientHistoryRecordModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-history"></i> History</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
	
			<div class="col-md-4 col-form-label text-default mb-1">
			General Data:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisGen" name="hisGen" placeholder ="General Data">
			</div>				
				<div class="col-md-4 col-form-label text-default mb-1">
			Past History :
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisPast" name="hisPast" placeholder ="Past History">
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Occupation:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisOccup" name="hisOccup" placeholder ="Occupation">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Complaint:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisComp" name="hisComp" placeholder ="Complaint">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Family History:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisFam" name="hisFam" placeholder ="Family History">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Drug Therapy:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisDrug" name="hisDrug" placeholder ="Drug Therapy">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Alcohol:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisAlc" name="hisAlc" placeholder ="Alcohol Intake">
			</div>			
			<div class="col-md-4 col-form-label text-default mb-1">
			Tobacco:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisTob" name="hisTob" placeholder ="Tobacco Intake">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Drug Allergies:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisDrgAll" name="hisDrgAll" placeholder ="Drug Allergies">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Other Allergies:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="hisOthAll" name="hisOthAll" placeholder ="Other Allergies">
			</div>
						
		</div>
	</div>
	<input type="hidden" name="hisEnccode" id="hisEnccode" value='<?php echo $this->uri->segment(3)."/".$this->uri->segment(4)."/".$this->uri->segment(5);?>'>
		<input type="hidden" name="hisHpercode" id="hisHpercode" value='<?php echo $this->uri->segment(6);?>'>
		<input type="hidden" name="hisformIden" id="hisformIden" value="insert">
	<div class="modal-footer bg-secondary">
	<button type="submit" name="btnSaveHis" id="btnSaveHis"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<a href="<?php echo site_url('Admission');?>" class="btn btn-danger btn-square"><i class="fa fa-close"></i>&nbsp CLOSE</a>
	</div>
	</div>
	</div>
</div>
</form>


<div class="modal fade" id="outpatientPhyExamModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
	<div class="modal-content">
	<div class="modal-header bg-success">
	<h5 class="modal-title text-white">	<i class="fa fa-universal-access"></i>
&nbsp Physical Exam</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	<span aria-hidden="true">&times;</span>
	</button>
	</div>
	<div class="modal-body">
	
		<div class="form-row">
	
			<div class="col-md-4 col-form-label text-default mb-1">
			Skin:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phySkin" name="phySkin" placeholder ="Skin">
			</div>				
				<div class="col-md-4 col-form-label text-default mb-1">
			Head/EENT:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyEENT" name="phyEENT" placeholder ="Head/EENT">
			</div>		
			<div class="col-md-4 col-form-label text-default mb-1">
			Lymphnodes:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyLymph" name="phyLymph" placeholder ="Lymphnodes">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Chest-Lungs:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyLungs" name="phyLungs" placeholder ="Lungs">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Chest-Cardiovascular:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyCardio" name="phyCardio" placeholder ="Cardiovascular">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Breast:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyBreast" name="phyBreast" placeholder ="Breast">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Abdomen:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyAbdo" name="phyAbdo" placeholder ="Abdomen">
			</div>			
			<div class="col-md-4 col-form-label text-default mb-1">
			Rectum:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyRectum" name="phyRectum" placeholder ="Rectum">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Genitalia:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyGenitalia" name="phyGenitalia" placeholder ="Genitalia">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Musculoskeletal:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyMusco" name="phyMusco" placeholder ="Musculoskeletal">
			</div>
			
			<div class="col-md-4 col-form-label text-default mb-1">
			Extremities:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyExtrem" name="phyExtrem" placeholder ="Extremities">
			</div>
			<div class="col-md-4 col-form-label text-default mb-1">
			Neurological:
			</div>
			<div class="col-md-8">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="phyNeuro" name="phyNeuro" placeholder ="Neurological">
			</div>			
		</div>
	</div>
	<div class="modal-footer bg-secondary">
	<button type="submit" name="btnSavePhy" id="btnSavePhy"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
	<a href="<?php echo site_url('Admission');?>" class="btn btn-danger btn-square"><i class="fa fa-close"></i>&nbsp CLOSE</a>
	</div>
	</div>
	</div>
</div>
