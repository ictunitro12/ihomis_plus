<!doctype html>
<html>
    <head>
        <title>Drugs and Medicines</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Drugs and Medicines <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">

    	<div class="form-group">Strenght:</label>
            <input type="text" class="form-control" name="dmdnost" id="dmdnost" placeholder="Strenght" value="<?php echo $dmdnost; ?>" /><?php echo form_error('dmdnost') ?>
        </div>

	    <div class="form-group">Beginning Balance:</label>
            <input type="text" class="form-control" name="begbal" id="begbal" placeholder="Beginning Balance" value="<?php echo $begbal; ?>" /><?php echo form_error('begbal') ?>
        </div>

		<div class="form-group">
		    <label for="varchar">Stock Balance:</label>
            <input type="text" class="form-control" name="stockbal" id="stockbal" placeholder="Stock Balance" value="<?php echo $stockbal; ?>" /><?php echo form_error('stockbal') ?>
        </div>
	    
		<input type="hidden" name="dmdcomb" value="000000002187" />
		<input type="hidden" name="dmdctr" value="1" />
		<input type="hidden" name="strecode" value="%" />
		<input type="hidden" name="formcode" value="AEROS" />
		<input type="hidden" name="rtecode" value="ANAL" />
		<input type="hidden" name="dmdpndf" value="Y" />
		<input type="hidden" name="dmdstat" value="A" />
		<input type="hidden" name="dmdlock" value="N" />
		<input type="hidden" name="dmdupsw" value="T" />
		<input type="hidden" name="dmddtmd" value="2020-06-11 13:00:00" />
		<input type="hidden" name="brandname" value="Secret" />
		<input type="hidden" name="atcode" value="" />
		<input type="hidden" name="dmdnnostp" value="" />
		<input type="hidden" name="dmdclaimno" value="" />
		<input type="hidden" name="techspec" value="" />
		<input type="hidden" name="grpcode" value="0000000651" />
		<input type="hidden" name="dmdrem" value="None" />
		<input type="hidden" name="dmdrxot" value="RXX" />
		<input type="hidden" name="dmdclmuom" value="" />
		<input type="hidden" name="dmdstco" value="" />
		<input type="hidden" name="dmdedl" value="" />
		<input type="hidden" name="lbscode" value="" />
		<input type="hidden" name="baldteasof" value="2020-06-11 13:00:00" />
		<input type="hidden" name="hprodid" value="" />
		<input type="hidden" name="lot_no" value="" />
		<input type="hidden" name="barcode" value="" />
		<input type="hidden" name="saltcode" value="" />
		<input type="hidden" name="packcode" value="" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('DrugsandMedicines') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>