<form id = "frmAddNewBorn" name="frmAddNewBorn" role="form">
<div class="modal fade" id="modalAddNewBorn" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog modal-md" role="dialog">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title text-white">	<i class=""></i>&nbsp New Born</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
		<div class="form-row">	
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddfirstname" name="frmaddfirstname" placeholder ="FIRST NAME" />
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmiddlename" name="frmaddmiddlename" placeholder ="MIDDLE NAME" />
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddlastname" name="frmaddlastname" placeholder ="LAST NAME" />
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<select name="frmaddsex" id="frmaddsex" onchange="selExamlist(this.value);" class="form-control form-control-md" placeholder ="SEX">
				<option value="">SELECT</option>
				<option value="M">MALE</option>
				<option value="F">FEMALE</option>
				</select>
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddbirthdate" name="frmaddbirthdate" placeholder ="DATE OF BIRTH" />
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmadddistmark" name="frmadddistmark" placeholder ="DISTINGUISHING MARK" />
			</div>
			</br>
			</br>
			<div class="col-md-12">
					PHYSICAL EXAMINATION
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddpedate" name="frmaddpedate" placeholder ="DATE OF EXAMINATION" />
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmhourabirth" name="frmhourabirth" placeholder ="HOUR OF BIRTH" />
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddagphar1" name="frmaddagphar1" placeholder ="Apagar Score at Birth">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmeasuremnt" name="frmaddmeasuremnt" placeholder ="Mesurement">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddhead" name="frmaddhead" placeholder ="Head">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddagphar2" name="frmaddagphar2" placeholder ="Apagar Score Min. after">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddcircumfer" name="frmaddcircumfer" placeholder ="Circumference">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddchest" name="frmaddchest" placeholder ="Chest">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddagphar3" name="frmaddagphar3" placeholder ="Apagar Score 10 Min. after">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddpathogic" name="frmaddpathogic" placeholder ="Pathogic">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddabdomen1" name="frmaddabdomen1" placeholder ="Abdomen">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddgencond" name="frmaddgencond" placeholder ="General Conditions">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddbirthweigt" name="frmaddbirthweigt" placeholder ="Weight">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddbirthlengt" name="frmaddbirthlengt" placeholder ="Height">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmusctonus" name="frmaddmusctonus" placeholder ="GENERAL MUSCULAR TONUS">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				SKIN
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddskincolor" name="frmaddskincolor" placeholder ="Color">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddskinturgon" name="frmaddskinturgon" placeholder ="Turgon">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddabdomen2" name="frmaddabdomen2" placeholder ="Abdomen">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddskinrash" name="frmaddskinrash" placeholder ="Rash">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddspleen" name="frmaddspleen" placeholder ="Spleen">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddskindesqua" name="frmaddskindesqua" placeholder ="Desquemention">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddkidney" name="frmaddkidney" placeholder ="Kidneys">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				HEAD
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddheadmold" name="frmaddheadmold" placeholder ="Molding">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddliver" name="frmaddliver" placeholder ="Liver">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddheadscalp" name="frmaddheadscalp" placeholder ="Scalp">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddumbilcord" name="frmaddumbilcord" placeholder ="Umbilical Cord">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddheadfontan" name="frmaddheadfontan" placeholder ="Fontanells">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddheadsuture" name="frmaddheadsuture" placeholder ="Suture">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddinghernia" name="frmaddinghernia" placeholder ="Inguinal Hernia">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddface" name="frmaddface" placeholder ="FACE">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmadddrecti" name="frmadddrecti" placeholder ="Diactis Recti">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				EYES
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddeyeconjunc" name="frmaddeyeconjunc" placeholder ="Conjunctives">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddeyesclera" name="frmaddeyesclera" placeholder ="Scelra">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddotherfind1" name="frmaddotherfind1" placeholder ="Other Findings">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmeyespupil" name="frmeyespupil" placeholder ="Pupils">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddgenitals" name="frmaddgenitals" placeholder ="Genitals">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddeyesdisc" name="frmaddeyesdisc" placeholder ="Discharge">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				MALE
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmaletestes" name="frmaddmaletestes" placeholder ="Testes">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddtr" name="frmaddtr" placeholder ="Tr.">
			</div>
			</br>
			</br>
			<div class="col-md-3">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddml" name="frmaddml" placeholder ="L">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddears" name="frmaddears" placeholder ="EARS">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddnose" name="frmaddnose" placeholder ="NOSE">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				MOUTH
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmouthlip" name="frmaddmouthlip" placeholder ="Lip">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddvagbleed" name="frmaddvagbleed" placeholder ="Vaginal Bleeding">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmouthtong" name="frmaddmouthtong" placeholder ="Tounge">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddabnormal1" name="frmaddabnormal1" placeholder ="Abnormalities">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddmouthpala" name="frmaddmouthpala" placeholder ="Palate">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddextreme" name="frmaddextreme" placeholder ="Extremities">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddneck" name="frmaddneck" placeholder ="NECK">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddclubfoot" name="frmaddclubfoot" placeholder ="Clubfoot">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddsternoclai" name="frmaddsternoclai" placeholder ="Sternoclaidomastoid">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddhipdiscolo" name="frmaddhipdiscolo" placeholder ="Hip Dislocation">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddfistula" name="frmaddfistula" placeholder ="Fistula">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmfempulse" name="frmfempulse" placeholder ="Femoral Pulse">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddspine" name="frmaddspine" placeholder ="Spine">
			</div>
			</br>
			</br>
			<div class="col-md-6">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddanus" name="frmaddanus" placeholder ="Anus">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				CHEST
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmchestshape" name="frmchestshape" placeholder ="Chest Shape">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddrespirate" name="frmaddrespirate" placeholder ="Respiration">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddclavicles" name="frmaddclavicles" placeholder ="Clavicles">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddbreast" name="frmaddbreast" placeholder ="Breast">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddheart" name="frmaddheart" placeholder ="Heart">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddlungs" name="frmaddlungs" placeholder ="Lungs">
			</div>
			</br>
			</br>
			<div class="col-md-12">
				<input type="text" class="form-control form-control-mb" autocomplete="off"   id="frmaddimpression" name="frmaddimpression" placeholder ="IMPRESSION">
			</div>
			</br>
			</br>
			<div class="col-md-4">
				ASSISTANT RESIDENT:
			</div>
			<div class="col-md-8">
				<select name="frmaddemployee1" id="frmaddemployee1" onchange="selExamlist(this.value);" class="form-control form-control-md">
				<option value="">SELECT</option>
				</select>
			</div>
			</br>
			</br>
			<div class="col-md-4">
				RESIDENT:
			</div>
			<div class="col-md-8">
				<select name="frmaddemployee2" id="frmaddemployee2" onchange="selExamlist(this.value);" class="form-control form-control-md">
				<option value="">SELECT</option>
				</select>
			</div>
			
			</div>
					<input type="hidden" id="frmaddnbenccode" name="frmaddnbenccode" value=""  />				
			</div>
				<div class="modal-footer bg-secondary">
					<button type="submit" name="savefrmNewBorn" id="savefrmNewBorn"  class="btn btn-info btn-inline  btn-ladda btn-square" data-style="slide-right"><i class="fa fa-save"></i>&nbsp SAVE</button>
					<button class="btn btn-danger  btn-square btn-ladda" data-style="zoom-in" data-dismiss="modal" ><i class="fa fa-close"></i>CLOSE</button>
				</div>
			</div>
		</div>
	</div>
</form>