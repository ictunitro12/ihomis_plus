<form name="frmAddSetup" id="frmAddSetup" class="form" enctype="multipart/form-data">
	<div class="card card-accent-success">
		<div class="card-header">
			<div class="row">
				<div class="col-md-6 col-md-auto">
					<div class="h3 text text-success">
						<i class="fa fa-th-list"></i>&nbsp;<?php echo $header; ?>
					</div>
				</div>

				<div class="col-md-6 col-md-auto">
					<div class="btn-group pull-right" role="group" aria-label="">
						<button type="submit" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp;SUBMIT</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Set-up code:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="code" id="code" autocomplete="off" />
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Separate professional fee from hospital charges:</label>
				<div class="col-md-3">
					<select name="sepprof" id="sepprof" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1">HOSPITAL NUMBER EDITABLE?:</label>
				<div class="col-md-3">
					<select name="hospnoedit" id="hospnoedit" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Date as of:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="date" class="form-control form-control-mb mb-1" name="dateasof" id="dateasof" class="datepicker" autocomplete="off" />
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Itemized room charges:</label>
				<div class="col-md-3">
					<select name="itemcharge" id="itemcharge" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Currency:<br>&nbsp;</label>
				<div class="col-md-3">
					<select name="currency" id="currency" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="PESO">Peso</option>
						<option value="YEN">Yen</option>
						<option value="DOLLA">Dollar</option>
						<option value="OTHE">Others</option>
					</select>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Display name of doctor instead of service rendered:</label>
				<div class="col-md-3">
					<select name="dispnamedoc" id="dispnamedoc" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Peso equivalent per relative unit:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1 text-right" name="pesounit" id="pesounit" autocomplete="off" onkeypress="return isNumber(event)"/>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Certified correct by:</label>
				<div class="col-md-3">
					<select name="certcorby" id="certcorby" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1">MAX NO. OF DELIVERIES FOR PHIC COMPUTATION:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="maxdelphicomp" id="maxdelphicomp" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Anesthesiologist percent fee:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1 text-right" name="anesthesia" id="anesthesia" autocomplete="off" onkeypress="return isNumber(event)"/>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Basis of room computation:</label>
				<div class="col-md-3">
					<select name="basisroomcomp" id="basisroomcomp" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="CUTOF">By Cut-off</option>
						<option value="BHOUR">By Hour</option>
						<option value="BDATE">By Date</option>
					</select>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1"> MAX. PHIC CLAIM FOR NORMAL SPONTANEOUS DELIVERY (NSD):</label>
				<div class="col-md-3">
					<input type="number" class="form-control form-control-mb mb-1" name="maxdelphiclaimnsd" id="maxdelphiclaimnsd" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Room and board not exceeding this days(s):<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1 text-right" name="roomnotexceed" id="roomnotexceed" autocomplete="off" onkeypress="return isNumber(event)"/>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Aggregate bill charges for manual billing:</label>
				<div class="col-md-3">
					<select name="aggbill" id="aggbill" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1"> MAX. PHIC CLAIM FOR PROFESSIONAL FEE IF NSD:</label>
				<div class="col-md-3">
					<input type="number" class="form-control form-control-mb mb-1" name="maxdelphiclaimprof" id="maxdelphiclaimprof" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Room and board not exceeding this days(s) to be shared by his dependents:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1 text-right" name="roomnotexceeddependents" id="roomnotexceeddependents" autocomplete="off" onkeypress="return isNumber(event)"/>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Display old hospital record number:</label>
				<div class="col-md-3">
					<select name="dispoldhosp" id="dispoldhosp" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1"> GP MAX PF PER DAY (Class A,B and C):</label>
				<div class="col-md-3">
					<input type="number" class="form-control form-control-mb mb-1" name="gpmaxpf" id="gpmaxpf" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Cut-off time for billing computation:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="time" class="form-control form-control-mb mb-1" name="cutoffbillcomp" id="cutoffbillcomp" autocomplete="off" />
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">Basis of rate of examinations:</label>
				<div class="col-md-3">
					<select name="basisrateexam" id="basisrateexam" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="ALL">One Rate for all accomodation</option>
						<option value="RMACC">Depends on room accomodation</option>
						<option value="CLASS">Depends on classification of accomodation</option>
					</select>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1">SPECIALIST MAX PF PER DAY (Class A,B and C):</label>
				<div class="col-md-3">
					<input type="number" class="form-control form-control-mb mb-1" name="specmaxpf" id="specmaxpf" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Include professional fee in billing computation:</label>
				<div class="col-md-3">
					<select name="incprofbill" id="incprofbill" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
						<option value="X">Not Applicable</option>
					</select>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">FTP url:</label>
				<div class="col-md-3">
					<textarea class="form-control form-control-mb mb-1" name="ftpurl" id="ftpurl" autocomplete="off"></textarea>
				</div>
				<!-- <label class="col-md-3 col-form-label text-default mb-1">GP MAX PF PER DAY (Class D):</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="gpclassd" id="gpclassd" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Include additional professional fee in billing computation:</label>
				<div class="col-md-3">
					<select name="incaddprofbill" id="incaddprofbill" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
						<option value="X">Not Applicable</option>
					</select>
				</div>
				<label class="col-md-3 col-form-label text-default mb-1">FTP shared folder:</label>
				<div class="col-md-3">
					<textarea class="form-control form-control-mb mb-1" name="ftpshared" id="ftpshared" autocomplete="off"></textarea>
				</div>

				<!-- <label class="col-md-3 col-form-label text-default mb-1">SPECIALIST MAX PF PER DAY (Class D):</label>
				<div class="col-md-3">
					<input type="number" class="form-control form-control-mb mb-1" name="specclassd" id="specclassd" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Civilian population:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1 text-right" name="civilpop" id="civilpop" autocomplete="off" onkeypress="return isNumber(event)"/>
				</div>

				<!-- <label class="col-md-3 col-form-label text-default mb-1">PICTURE REPOSITORY:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="picrep" id="picrep" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Retro payments:<br>&nbsp;</label>
				<div class="col-md-3">
					<select name="retpay" id="retpay" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</div>

				<!-- <label class="col-md-3 col-form-label text-default mb-1">SEQUENCE:</label>
				<div class="col-md-3">
					<select name="sequence" id="sequence" class="form-control form-control-mb mb-1" value="">
						<option value="">Select</option>
						<option value="S">Sequence</option>
						<option value="P">Percentage</option>
					</select>
				</div> -->
			</div>

			<div class="form-row">
				<label class="col-md-3 col-form-label text-default mb-1">Retro amount:<br>&nbsp;</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1 text-right" name="retamt" id="retamt" autocomplete="off" onkeypress="return isNumber(event)"/>
				</div>

			</div>

			<div class="form-row">
				<!-- <label class="col-md-3 col-form-label text-default mb-1">FTP USER ID:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="ftpuser" id="ftpuser" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<!-- <label class="col-md-3 col-form-label text-default mb-1">FTP PASSWORD:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="ftppass" id="ftppass" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<!-- <label class="col-md-3 col-form-label text-default mb-1">PHIC FORM 2 AUTHORIZED SIGNATORY:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="phicsignatory" id="phicsignatory" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<!-- <label class="col-md-3 col-form-label text-default mb-1">PHIC FORM 2 OFFICIAL DESIGNATION:</label>
				<div class="col-md-3">
					<input type="text" class="form-control form-control-mb mb-1" name="phicdesignation" id="phicdesignation" autocomplete="off" />
				</div> -->
			</div>

			<div class="form-row">
				<!-- <label class="col-md-3 col-form-label text-default mb-1">HOSPITAL LOGO:</label>
				<div class="col-md-3">
					<input type="file" name="logo_pic" id="logo_pic" value="">
				</div> -->
			</div>
		</div>
		<input type="hidden" id="setupCode" value="<?php echo $code; ?>">
		<div class="card-footer"></div>
	</div>
</form>
<script type="text/javascript">
	$(function() {
		var code = $("#setupCode").val();
		initSetup(code);
	});

	function initSetup(code) {
		$.ajax({
			type: "POST",
			url: baseURL + "Ref_Setup/getSetup/" + code,
			async: false,
			success: function(data, status) {
				obj = $.parseJSON(data);
				var dateasof = setTimeLocale(obj['sudte']);
				var date = dateasof.substring(0,10);

				var timeasof = setTimeLocale(obj['scuttime']);
				var time = timeasof.substring(11,19);
				$("#dateasof").val(date);
				$("#cutoffbillcomp").val(time);

				$("#code").val(obj['sucode']);
				$('#currency option[value="' + obj['curcode'] + '"]').prop("selected", true);
				$("#pesounit").val(obj['spval']);
				$("#anesthesia").val(obj['anesper']);
				$("#roomnotexceed").val(obj['srbmax']);
				$("#roomnotexceeddependents").val(obj['srbmaxdep']);

				$('#incprofbill option[value="' + obj['incpfee'] + '"]').prop("selected", true);
				$('#incaddprofbill option[value="' + obj['incapfee'] + '"]').prop("selected", true);
				$("#civilpop").val(obj['civpopu']);
				$('#retpay option[value="' + obj['retro'] + '"]').prop("selected", true);
				$("#retamt").val(obj['retamt']);
				$('#sepprof option[value="' + obj['sseppr'] + '"]').prop("selected", true);

				$('#itemcharge option[value="' + obj['sitmrm'] + '"]').prop("selected", true);
				$('#dispnamedoc option[value="' + obj['snmdoc'] + '"]').prop("selected", true);
				$('#certcorby option[value="' + obj['scerco'] + '"]').prop("selected", true);
				$('#basisroomcomp option[value="' + obj['sbasrm'] + '"]').prop("selected", true);
				$('#aggbill option[value="' + obj['saggreg'] + '"]').prop("selected", true);

				/* $("#hospnoedit").val(obj['sureqid']); */
				$('#dispoldhosp option[value="' + obj['supercode'] + '"]').prop("selected", true);
				$("#basisrateexam").val(obj['supatcode']);
				/* $("#maxdelphicomp").val(obj['maxdeliver']);
				$("#maxdelphiclaimnsd").val(obj['ratedeliver']);
				$("#maxdelphiclaimprof").val(obj['ratedeliverpf']);
				$("#gpmaxpf").val(obj['gpperday']);
				$("#specmaxpf").val(obj['spperday']);
				$("#gpclassd").val(obj['senamt']);
				$("#specclassd").val(obj['smaxsgee']);
				$("#picrep").val(obj['filepath']);
				$("#sequence").val(obj['seqind']); */
				$("#ftpurl").val(obj['pdfftp']);
				$("#ftpshared").val(obj['pdfshared']);
				/* $("#ftpuser").val(obj['ftpuserid']);
				$("#ftppass").val(obj['ftppassword']);
				$("#phicsignatory").val(obj['authsign']);
				$("#phicdesignation").val(obj['designation']); */
			},
			error: function(data, status) {
				alert(data);
			}
		});

	}

	function isNumber(evt) {
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if ((charCode != 8) && (charCode < 48 || charCode > 57)) {
			return false;
		} else {
			return true;
		}
	}

	$('input').on('paste', function(event) {
		if (event.originalEvent.clipboardData.getData('Text').match(/[^\d]/)) {
			event.preventDefault();
		}
	});
</script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_Setup/validation.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/Ref_Setup/delete.js"></script>