<!doctype html>
<html>
    <head>
        <title>PNDF Class</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">PNDF Class Sub Group 2<?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Sub Group 1:</label>
            <input type="text" class="form-control" name="dmsub1" id="dmsub1" placeholder="Sub Group 1" value="<?php echo $dmsub1; ?>" /><?php echo form_error('dmsub1') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Sub Group 2:</label>
            <input type="text" class="form-control" name="dmsub2" id="dmsub2" placeholder="Sub Group 2" value="<?php echo $dmsub2; ?>" /><?php echo form_error('dmsub2') ?>
        </div>
	    

		<div class="form-group">
		    <label for="varchar">Description:</label>
            <input type="text" class="form-control" name="dms2desc" id="dms2desc" placeholder="Description" value="<?php echo $dms2desc; ?>" /><?php echo form_error('dms2desc') ?>
        </div>
	    
		<input type="hidden" name="dms2sta" value="A" />
		<input type="hidden" name="dms2lck" value="N" />
		<input type="hidden" name="dms2us" value="P" />
		<input type="hidden" name="dmcode" value="9" />
		<input type="hidden" name="dms1key" value="99.1" />
		<input type="hidden" name="dms2key" value="99.19.2" />
		<input type="hidden" name="dmsdtmd" value="2020-05-24 23:00:00" />
		<input type="hidden" name="dmupsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('PNDFClass/ViewSub1/$1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>