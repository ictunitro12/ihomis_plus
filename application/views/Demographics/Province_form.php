<!doctype html>
<html>
    <head>
        <title>Province</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    </head>
    <body>
	    <div class="container">
	        <h2 style="margin-top:0px"><?php echo $button ?> Province</h2>
	    	<form action="<?php echo $action; ?>" method="post">
			    <div class="form-group">
		            <label for="varchar">Province Code:</label>
		            <input type="text" class="form-control" name="provcode" id="provcode" placeholder="Province Code" value="<?php echo $provcode; ?>" /><?php echo form_error('provcode') ?>
		        </div>
				
				<div class="form-group">
				    <label for="varchar">Province Name:</label>
		            <input type="text" class="form-control" name="provname" id="provname" placeholder="Province Name" value="<?php echo $provname; ?>" /><?php echo form_error('provname') ?>
		        </div>
			    
				<div class="form-group">
				    <label for="varchar">Abbreviation:</label>
		            <input type="text" class="form-control" name="provabbrev" id="provabbrev" placeholder="Abbreviation" value="<?php echo $provabbrev; ?>" /><?php echo form_error('provabbrev') ?>
		        </div>

				<div class="form-group">
				    <label for="varchar"Province NSO Code:</label>
		            <input type="text" class="form-control" name="provnsocod" id="provnsocod" placeholder="NSO Code" value="<?php  echo $provnsocod; ?>" /><?php echo form_error('provnsocod') ?>
		        </div>

		        <div class="form-group">
				    <label for="varchar"Province DOH Code:</label>
		            <input type="text" class="form-control" name="provdohcod" id="provdohcod" placeholder="DOH Code" value="<?php echo $provdohcod; ?>" /><?php echo form_error('provdohcod') ?>
		        </div>

				
				<div class="form-group">
		            <label for="varchar">Status:</label>
					<?php if ($provstat=='A') {
						echo "<input type='radio' name='provstat' value='A' checked>Active
						<input type='radio' name='provstat' value='I'>Inactive";
					} else {
						echo "<input type='radio' name='provstat' value='A'>Active
						<input type='radio' name='provstat' value='I' checked>Inactive";
					}
					?>
					<?php echo form_error('provstat') ?>
		        </div>
			    
				<input type="hidden" name="provlock" value="N" />
				<input type="hidden" name="updsw" value="P" />

				<input type="hidden" name="provreg" value="17" />
				<?php date_default_timezone_set('Asia/Singapore');?>
				<input type="hidden" name="datemod" value="<?php echo date('Y-m-d H:i:s'); ?>" />
			    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
				<a href="<?php echo site_url('Demographics/Viewprov/'.$this->input->post('provreg',TRUE)); ?>" class="btn btn-default">Cancel</a>
			</form>
		</div>


	</body>
</html>