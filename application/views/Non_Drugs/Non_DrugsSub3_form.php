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
		    <label for="varchar">Purchase Price:</label>
            <input type="text" class="form-control" name="costprc" id="costprc" placeholder="Purchase Price" value="<?php echo $costprc; ?>" /><?php echo form_error('costprc') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Selling Price:</label>
            <input type="text" class="form-control" name="cl2retprc" id="cl2retprc" placeholder="Selling Price" value="<?php echo $cl2retprc; ?>" /><?php echo form_error('cl2retprc') ?>
        </div>
	    
	    <div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($cl2stat=='A') {
				echo "<input type='radio' name='cl2stat' value='A' checked>Active
				<input type='radio' name='cl2stat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='cl2stat' value='A'>Active
				<input type='radio' name='cl2stat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('cl2stat') ?>

        </div>

        
	    <input type="hidden" name="uomcode" value="PC" />
	    <input type="hidden" name="cl2dteas" value="2020-02-20 13:10:00" />
	    
		<input type="hidden" name="cl2comb" value="018099001" />
		<input type="hidden" name="cl2lock" value="N" />
		<input type="hidden" name="cl2upsw" value="T" />
		<input type="hidden" name="cl2dtmd" value="" />
		
		
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Non_Drugs') ?>" class="btn btn-default">Cancel</a>
	</form>
	
	</div>
	</div>
 