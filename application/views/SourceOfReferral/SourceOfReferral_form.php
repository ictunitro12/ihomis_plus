<!doctype html>
<html>
    <head>
        <title>SourceOfReferral</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">SourceOfReferral <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">SourceOfReferral Code:</label>
            <input type="text" class="form-control" name="srfcode" id="srfcode" placeholder="SourceOfReferral Code" value="<?php echo $srfcode; ?>" /><?php echo form_error('srfcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">SourceOfReferral Name:</label>
            <input type="text" class="form-control" name="srfdesc" id="srfdesc" placeholder="SourceOfReferral Name" value="<?php echo $srfdesc; ?>" /><?php echo form_error('srfdesc') ?>
        </div>
	    
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($srfstat=='A') {
				echo "<input type='radio' name='srfstat' value='A' checked>Active
				<input type='radio' name='srfstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='srfstat' value='A'>Active
				<input type='radio' name='srfstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('srfstat') ?>
        </div>
	    
		<input type="hidden" name="srflock" value="N" />
		<input type="hidden" name="datemod" value="2020-02-20 13:00:00" />
		<input type="hidden" name="updsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('SourceOfReferral') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>