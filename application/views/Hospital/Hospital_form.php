<!doctype html>
<html>
    <head>
        <title>Hospital</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Hospital <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">

    	<div class="form-group">Hospital Name:</label>
            <input type="text" class="form-control" name="hhosname" id="hhosname" placeholder="Hospital Name" value="<?php echo $hhosname; ?>" /><?php echo form_error('hhosname') ?>
        </div>

	    <div class="form-group">Abbreviation:</label>
            <input type="text" class="form-control" name="hhosabbr" id="hhosabbr" placeholder="Abbreviation" value="<?php echo $hhosabbr; ?>" /><?php echo form_error('hhosabbr') ?>
        </div>
	    <input type="hidden" name="hfhudcode" value="0000183" />
		<input type="hidden" name="accno" value="H41008293" />
		<input type="hidden" name="accdte" value="2020-12-31 13:00:00" />
		<input type="hidden" name="htypcode" value="P" />
		<input type="hidden" name="bedcap" value="50" />
		<input type="hidden" name="hhosstr" value="Secret Street" />
		<input type="hidden" name="ctycode" value="045603" />
		<input type="hidden" name="provcode" value="0456" />
		<input type="hidden" name="hhoszip" value="4331" />
		<input type="hidden" name="cntrycode" value="PHIL" />
		<input type="hidden" name="hhosdte" value="2020-06-18 12:37:05" />
		<input type="hidden" name="hhosstat" value="A" />
		<input type="hidden" name="hhoslock" value="N" />
		<input type="hidden" name="datemod" value="2020-06-18 12:37:05" />
		<input type="hidden" name="updsw" value="T" />
		<input type="hidden" name="bgycode" value="045603005" />
		<input type="hidden" name="hhoscatg" value="" />
		<input type="hidden" name="hhosmem" value="45" />
		<input type="hidden" name="newfhudcode" value="DOH000000000000412" />
		<input type="hidden" name="neiss_userid" value="" />
		<input type="hidden" name="neiss_password" value="" />
		<input type="hidden" name="edpmpass" value="" />
		<input type="hidden" name="edpmcoycode" value="" />
		<input type="hidden" name="ws_id" value="" />
		<input type="hidden" name="ws_pw" value="" />
		<input type="hidden" name="ws_hospcode" value="393001" />
		<input type="hidden" name="epdmuser" value="" />
		<input type="hidden" name="edpmcomp" value="" />
		<input type="hidden" name="telno" value="14344" />
		<input type="hidden" name="emailadd" value="" />
		<input type="hidden" name="headeraddr" value="" />
		<input type="hidden" name="hhosemailadd" value="jargabalfin24@gmail.com" />
		<input type="hidden" name="eclaims_webpass" value="\M\`\[NK_" />
		<input type="hidden" name="hspecialcode" value="" />
		<input type="hidden" name="howner" value="" />
		<input type="hidden" name="phic_accretype" value="" />
		<input type="hidden" name="faxno" value="" />
		<input type="hidden" name="ohsrs_username" value="" />
		<input type="hidden" name="ohsrs_password" value="" />
		<input type="hidden" name="iso_accreno" value="" />
		<input type="hidden" name="iso_validfr" value="" />
		<input type="hidden" name="iso_validto" value="" />
		<input type="hidden" name="inter_accreno" value="" />
		<input type="hidden" name="inter_validfr" value="" />
		<input type="hidden" name="inter_validto" value="" />
		<input type="hidden" name="pcaho_accreno" value="" />
		<input type="hidden" name="pcaho_validfr" value="" />
		<input type="hidden" name="pcaho_validto" value="" />
		<input type="hidden" name="accdteto" value="" />
		<input type="hidden" name="hservcap" value="" />
		<input type="hidden" name="trauma" value="" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Hospital') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>