<!doctype html>
<html>
    <head>
        <title>PNDF Class</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">PNDF Class Sub Group 4<?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Sub Group 3:</label>
            <input type="text" class="form-control" name="dmsub3" id="dmsub3" placeholder="PNDFClass Code" value="<?php echo $dmsub3; ?>" /><?php echo form_error('dmsub3') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Sub Group 4:</label>
            <input type="text" class="form-control" name="dmsub4" id="dmsub4" placeholder="Sub Group 4" value="<?php echo $dmsub4; ?>" /><?php echo form_error('dmsub4') ?>
        </div>
	    

		<div class="form-group">
		    <label for="varchar">Description:</label>
            <input type="text" class="form-control" name="dms4desc" id="dms4desc" placeholder="Description" value="<?php echo $dms4desc; ?>" /><?php echo form_error('dms4desc') ?>
        </div>
	    
		<input type="hidden" name="dms2sta" value="A" />
		<input type="hidden" name="dms2lck" value="N" />
		<input type="hidden" name="dms2us" value="P" />
		<input type="hidden" name="dmcode" value="9" />
		<input type="hidden" name="dmsub1" value="9.1" />
		<input type="hidden" name="dmsub2" value="9.2" />
		<input type="hidden" name="dmsub3" value="9.3" />
		<input type="hidden" name="dms1key" value="99.1" />
		<input type="hidden" name="dms2key" value="99.19.2" />
		<input type="hidden" name="dms3key" value="99.19.29.3" />
		<input type="hidden" name="dms4key" value="99.19.29.39.4" />
		<input type="hidden" name="dmsdtmd" value="2020-05-24 23:00:00" />
		<input type="hidden" name="dmupsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('PNDFClass/ViewSub1/$1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>