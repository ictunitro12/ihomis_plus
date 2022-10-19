  <div class="col-md-6">
	<div class=" card card-accent-success">
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 ">
			<div class="h3 text text-success"> 
			<i class="fa fa-plus"></i>
			&nbsp<?php echo $header;?>
			&nbsp <small><?php echo $subheader;?></small>
			</div>
		</div>	
		</div>
	</div>
	<div class="card-body">
	    	<form action="<?php echo $action; ?>" method="post">
			    <div class="form-group">
		            <label for="varchar">Code:</label>
		            <input type="text" class="form-control" name="strecode" id="strecode" placeholder="Code" value="<?php echo $strecode; ?>" /><?php echo form_error('strecode') ?>
		        </div>
				
				<div class="form-group">
				    <label for="varchar">Description:</label>
		            <input type="text" class="form-control" name="STREDESC" id="STREDESC" placeholder="Description" value="<?php echo $STREDESC; ?>" /><?php echo form_error('STREDESC') ?>
		        </div>
				
				<div class="form-group">
		            <label for="varchar">Status:</label>
					<?php if ($strestat=='A') {
						echo "<input type='radio' name='strestat' value='A' checked>Active
						<input type='radio' name='strestat' value='I'>Inactive";
					} else {
						echo "<input type='radio' name='strestat' value='A'>Active
						<input type='radio' name='strestat' value='I' checked>Inactive";
					}
					?>
					<?php echo form_error('strestat') ?>
		        </div>
			
				<input type="hidden" name="strelock" value="N" />
				<input type="hidden" name="updsw" value="P" />
				<input type="hidden" name="entryby" value="" />
				<?php date_default_timezone_set('Asia/Singapore');?>
				<input type="hidden" name="datemod" value="<?php echo date('Y-m-d H:i:s'); ?>" />
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
				&nbsp
				<a href="<?php echo site_url('Strength') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
			</form>
</div>
</div>