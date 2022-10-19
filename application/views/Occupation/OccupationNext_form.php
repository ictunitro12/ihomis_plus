<!doctype html>
<html>
    <head>
        <title>OccupationNext</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">OccupationNext <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">SMajor Code:</label>
            <input type="text" class="form-control" name="smajcode" id="smajcode" placeholder="SMajor Code" value="<?php echo $smajcode; ?>" /><?php echo form_error('smajcode') ?>
        </div>
		
		<div class="form-group">
            <label for="varchar">Unit Code:</label>
            <input type="text" class="form-control" name="unitcode" id="unitcode" placeholder="Unit Code" value="<?php echo $unitcode; ?>" /><?php echo form_error('unitcode') ?>
        </div>

		<div class="form-group">
		    <label for="varchar">Unit Description:</label>
            <input type="text" class="form-control" name="unitdesc" id="unitdesc" placeholder="Unit Description" value="<?php echo $unitdesc; ?>" /><?php echo form_error('unitdesc') ?>
        </div>

        <div class="form-group">
            <label for="varchar">Min Code:</label>
            <input type="text" class="form-control" name="mincode" id="mincode" placeholder="Min Code" value="<?php echo $mincode; ?>" /><?php echo form_error('mincode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Min Description:</label>
            <input type="text" class="form-control" name="mindesc" id="mindesc" placeholder="Min Description" value="<?php echo $mindesc; ?>" /><?php echo form_error('mindesc') ?>
        </div>
	    
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($minstat=='A') {
				echo "<input type='radio' name='minstat' value='A' checked>Active
				<input type='radio' name='minstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='minstat' value='A'>Active
				<input type='radio' name='minstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('minstat') ?>
        </div>
	    
		<input type="hidden" name="minlock" value="N" />
		<input type="hidden" name="mindtmd" value="2020-02-20 13:00:00" />
		<input type="hidden" name="updsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('OccupationNext') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>