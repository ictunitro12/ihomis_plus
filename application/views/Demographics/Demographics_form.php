<div class="card card-accent-success with-border col-md-6"> 
	<div class="card-header">
		<div class="row">
		<div class="col-md-6 col-md-auto	">
			<div class="h3 text text-success"> 
			<i class="fa fa-th-list"></i>
			&nbsp<?php echo $header;?>
			</div>
		</div>
		</div>
		</div>
			<div class="card-body">
			
	    	<form action="<?php echo $action; ?>" method="post">
			    <div class="form-group">
		            <label for="varchar">Region Code:</label>
		            <input type="text" class="form-control" name="regcode" id="regcode" placeholder="Region Code" value="<?php echo $regcode; ?>" /><?php echo form_error('regcode') ?>
		        </div>
				
				<div class="form-group">
				    <label for="varchar">Region Name:</label>
		            <input type="text" class="form-control" name="regname" id="regname" placeholder="Region Name" value="<?php echo $regname; ?>" /><?php echo form_error('regname') ?>
		        </div>
			    
				<div class="form-group">
				    <label for="varchar">Abbreviation:</label>
		            <input type="text" class="form-control" name="regabbrev" id="regabbrev" placeholder="Abbreviation" value="<?php echo $regabbrev; ?>" /><?php echo form_error('regabbrev') ?>
		        </div>
				
				<div class="form-group">
		            <label for="varchar">Status:</label>
					<?php if ($regstat=='A') {
						echo "<input type='radio' name='regstat' value='A' checked>Active
						<input type='radio' name='regstat' value='I'>Inactive";
					} else {
						echo "<input type='radio' name='regstat' value='A'>Active
						<input type='radio' name='regstat' value='I' checked>Inactive";
					}
					?>
					<?php echo form_error('regstat') ?>
		        </div>
			    
				<input type="hidden" name="reglock" value="N" />
				<input type="hidden" name="updsw" value="P" />

				<?php date_default_timezone_set('Asia/Singapore');?>
				<input type="hidden" name="regdtemod" value="<?php echo date('Y-m-d H:i:s'); ?>" />
			    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> </button>
				&nbsp
				<a href="<?php echo site_url('Demographics') ?>" class="btn btn-outline-danger"><i class="fa fa-remove"></i></a>
			</form>
	</div>