<!doctype html>
<html>
    <head>
        <title>Setup</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Setup <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">

    	<div class="form-group">Set-up Code:</label>
            <input type="text" class="form-control" name="sucode" id="sucode" placeholder="Set-up Code" value="<?php echo $sucode; ?>" /><?php echo form_error('sucode') ?>
        </div>

	    <div class="form-group">Currency:</label>
            <input type="text" class="form-control" name="curcode" id="curcode" placeholder="Currency" value="<?php echo $curcode; ?>" /><?php echo form_error('curcode') ?>
        </div>
	    <input type="hidden" name="sudte" value="2020-06-17 13:00:00" />
		<input type="hidden" name="spval" value="45.00" />
		<input type="hidden" name="anesper" value="30.00" />
		<input type="hidden" name="srbmax" value="45" />
		<input type="hidden" name="srbmaxdep" value="45" />
		<input type="hidden" name="scuttime" value="2020-06-17 13:00:00" />
		<input type="hidden" name="incpfee" value="Y" />
		<input type="hidden" name="incapfee" value="Y" />
		<input type="hidden" name="civpopu" value="14344" />
		<input type="hidden" name="retro" value="N" />
		<input type="hidden" name="retamt" value="0.00" />
		<input type="hidden" name="sseppr" value="Y" />
		<input type="hidden" name="sitmrm" value="Y" />
		<input type="hidden" name="snmdoc" value="N" />
		<input type="hidden" name="scerco" value="N" />
		<input type="hidden" name="sbasrm" value="BDATE" />
		<input type="hidden" name="saggreg" value="Y" />
		<input type="hidden" name="sureqid" value="Y" />
		<input type="hidden" name="supercode" value="Y" />
		<input type="hidden" name="supatcode" value="ALL" />
		<input type="hidden" name="maxdeliver" value="2" />
		<input type="hidden" name="ratedeliver" value="2500.00" />
		<input type="hidden" name="ratedeliverpf" value="2000.00" />
		<input type="hidden" name="gpperday" value="1.00" />
		<input type="hidden" name="spperday" value="2.00" />
		<input type="hidden" name="senamt" value="3.00" />
		<input type="hidden" name="smaxsgee" value="4.00" />
		<input type="hidden" name="filepath" value="" />
		<input type="hidden" name="seqind" value="S" />
		<input type="hidden" name="pdfftp" value="C:\Shared Folder\FTPURL" />
		<input type="hidden" name="pdfshared" value="C:\Shared Folder\eClaimsDoc" />
		<input type="hidden" name="ftpuserid" value="" />
		<input type="hidden" name="ftppassword" value="" />
		<input type="hidden" name="authsign" value="June Anthony R. Gabalfin" />
		<input type="hidden" name="designation" value="CP II" />
		<input type="hidden" name="ftplog" value="" />
		<input type="hidden" name="hcntrycod" value="" />
		<input type="hidden" name="hcurloc" value="" />
		<input type="hidden" name="updsw" value="T" />
		<input type="hidden" name="datemod" value="2020-06-17 13:00:00" />
		<input type="hidden" name="casenum" value="" />
		<input type="hidden" name="sulock" value="N" />
		<input type="hidden" name="sustat" value="A" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Setup') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>