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
		            <input type="text" class="form-control" name="hmcode" id="hmcode" placeholder="Code" value="<?php echo $hmcode; ?>" /><?php echo form_error('hmcode') ?>
		        </div>
				
				<div class="form-group">
				    <label for="varchar">Description:</label>
		            <input type="text" class="form-control" name="hmdesc" id="hmdesc" placeholder="Description" value="<?php echo $hmdesc; ?>" /><?php echo form_error('hmdesc') ?>
		        </div>

		        <div class="form-group">
				    <label for="varchar">Rate:</label>
		            <input type="text" class="form-control" name="hmamt" id="hmamt" placeholder="0.00" value="<?php echo $hmamt; ?>" /><?php echo form_error('hmamt') ?>
		        </div>

		        <div class="form-group">
					<label class="text-success">Date as of:</label>
					<input type="date" class="form-control form-control-mg" placeholder="" name ="hmdteas" id="hmdteas" autocomplete="off" />		
		        </div>
				
				<div class="form-group">
		            <label for="varchar">Status: </label>
					<?php if ($hmstat=='A') {
						echo "<input type='radio' name='hmstat' value='A' checked>Active
						<input type='radio' name='hmstat' value='I'>Inactive";
					} else {
						echo "<input type='radio' name='hmstat' value='A'>Active
						<input type='radio' name='hmstat' value='I' checked>Inactive";
					}
					?>
					<?php echo form_error('hmstat') ?>
		        </div>

			    <input type="hidden" name="uomcode" value=""/>
				<input type="hidden" name="hmlock" value="N" />
				<input type="hidden" name="updsw" value="P" />
				<input type="hidden" name="srcchrg" value="" />
				<?php date_default_timezone_set('Asia/Singapore');?>
				<input type="hidden" name="datemod" value="<?php echo date('Y-m-d H:i:s'); ?>" />
			    
			   <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
				&nbsp
				<a href="<?php echo site_url('Miscellaneous') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
			</form>
			
			</div>
			</div>
			</div>
	