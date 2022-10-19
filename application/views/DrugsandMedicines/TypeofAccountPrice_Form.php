<!doctype html>
<html>
    <head>
        <title>TypeofAccountPrice</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">TypeofAccountPrice <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">Unit Price:</label>
            <input type="text" class="form-control" name="dmduprice" id="dmduprice" placeholder="Unit Price" value="<?php echo $dmduprice; ?>" /><?php echo form_error('dmduprice') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Selling Price:</label>
            <input type="text" class="form-control" name="dmselprice" id="dmselprice" placeholder="Selling Price" value="<?php echo $dmselprice; ?>" /><?php echo form_error('dmselprice') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Remarks:</label>
            <input type="text" class="form-control" name="dmdrem" id="dmdrem" placeholder="Remarks" value="<?php echo $dmdrem; ?>" /><?php echo form_error('dmdrem') ?>
        </div>
	    
		<input type="hidden" name="dmdcomb" value="000000002187" />
		<input type="hidden" name="dmdctr" value="1" />
		<input type="hidden" name="dmdprdte" value="2020-06-08 09:18:00" />
		<input type="hidden" name="dmhdrsub" value="DRUME" />
		<input type="hidden" name="unitcode" value="tab" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('TypeofAccountPrice/ViewSub1/$1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>