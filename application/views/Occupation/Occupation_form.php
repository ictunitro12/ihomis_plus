<!doctype html>
<html>
    <head>
        <title>Occupation</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Occupation <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">SMajor Code:</label>
            <input type="text" class="form-control" name="smajcode" id="smajcode" placeholder="SMajor Code" value="<?php echo $smajcode; ?>" /><?php echo form_error('smajcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">SMajor Description:</label>
            <input type="text" class="form-control" name="smajdesc" id="smajdesc" placeholder="SMajor Description" value="<?php echo $smajdesc; ?>" /><?php echo form_error('smajdesc') ?>
        </div>

        <div class="form-group">
            <label for="varchar">Major Code:</label>
            <input type="text" class="form-control" name="majcode" id="majcode" placeholder="Major Code" value="<?php echo $majcode; ?>" /><?php echo form_error('majcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Major Description:</label>
            <input type="text" class="form-control" name="majdesc" id="majdesc" placeholder="Major Description" value="<?php echo $majdesc; ?>" /><?php echo form_error('majdesc') ?>
        </div>
	    
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($majstat=='A') {
				echo "<input type='radio' name='majstat' value='A' checked>Active
				<input type='radio' name='majstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='majstat' value='A'>Active
				<input type='radio' name='majstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('majstat') ?>
        </div>
	    
		<input type="hidden" name="majlock" value="N" />
		<input type="hidden" name="majdtmd" value="2020-02-20 13:00:00" />
		<input type="hidden" name="majupsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Occupation') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>