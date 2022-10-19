<!doctype html>
<html>
    <head>
        <title>Religion</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Religion <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Religion Code:</label>
            <input type="text" class="form-control" name="relcode" id="relcode" placeholder="Religion Code" value="<?php echo $relcode; ?>" /><?php echo form_error('relcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Religion Name:</label>
            <input type="text" class="form-control" name="reldesc" id="reldesc" placeholder="Religion Name" value="<?php echo $reldesc; ?>" /><?php echo form_error('reldesc') ?>
        </div>
	    
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($relstat=='A') {
				echo "<input type='radio' name='relstat' value='A' checked>Active
				<input type='radio' name='relstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='relstat' value='A'>Active
				<input type='radio' name='relstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('relstat') ?>
        </div>
	    
		<input type="hidden" name="rellock" value="N" />
		<input type="hidden" name="reldatemod" value="2020-02-20 13:00:00" />
		<input type="hidden" name="relupdsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Religion') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>