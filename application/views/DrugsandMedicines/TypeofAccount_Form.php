<!doctype html>
<html>
    <head>
        <title>TypeofAccount</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">TypeofAccount <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">

    	<div class="form-group">Barcode:</label>
            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barcode" value="<?php echo $barcode; ?>" /><?php echo form_error('barcode') ?>
        </div>

	    <div class="form-group">Beginning Balance:</label>
            <input type="text" class="form-control" name="begbal" id="begbal" placeholder="Beginning Balance" value="<?php echo $begbal; ?>" /><?php echo form_error('begbal') ?>
        </div>

		<div class="form-group">
		    <label for="varchar">Stock Balance:</label>
            <input type="text" class="form-control" name="stockbal" id="stockbal" placeholder="Stock Balance" value="<?php echo $stockbal; ?>" /><?php echo form_error('stockbal') ?>
        </div>
	    
		<input type="hidden" name="dmdcomb" value="000000002187" />
		<input type="hidden" name="reorder_level" value="" />
		<input type="hidden" name="dmdctr" value="1" />
		<input type="hidden" name="baldteasof" value="2020-06-08 13:00:00" />
		<input type="hidden" name="datemod" value="2020-06-08 13:00:00" />
		<input type="hidden" name="dmhdrsub" value="DRUME" />
		<input type="hidden" name="entryby" value="JARG" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('TypeofAccount/ViewSub1/$1') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>