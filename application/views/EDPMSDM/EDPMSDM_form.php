<!doctype html>
<html>
    <head>
        <title>ModeOfAdmission</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">ModeOfAdmission <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">ModeOfAdmission Code:</label>
            <input type="text" class="form-control" name="admmode" id="admmode" placeholder="ModeOfAdmission Code" value="<?php echo $admmode; ?>" /><?php echo form_error('admmode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">ModeOfAdmission Name:</label>
            <input type="text" class="form-control" name="admdesc" id="admdesc" placeholder="ModeOfAdmission Name" value="<?php echo $admdesc; ?>" /><?php echo form_error('admdesc') ?>
        </div>
	    
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($admstat=='A') {
				echo "<input type='radio' name='admstat' value='A' checked>Active
				<input type='radio' name='admstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='admstat' value='A'>Active
				<input type='radio' name='admstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('admstat') ?>
        </div>
	    
		<input type="hidden" name="admlock" value="N" />
		<input type="hidden" name="datemod" value="2020-02-20 13:00:00" />
		<input type="hidden" name="updsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('ModeOfAdmission') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>