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
            <label for="varchar">Major Category:</label>
            <input type="text" class="form-control" name="ptcode" id="ptcode" placeholder="Major Category" value="<?php echo $ptcode; ?>" /><?php echo form_error('ptcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Sub-1 Category Code:</label>
            <input type="text" class="form-control" name="cl1code" id="cl1code" placeholder="Sub-1 Category Code" value="<?php echo $cl1code; ?>" /><?php echo form_error('cl1code') ?>
        </div>
	    
	    <div class="form-group">
		    <label for="varchar">Description:</label>
            <input type="text" class="form-control" name="cl1desc" id="cl1desc" placeholder="Description" value="<?php echo $cl1desc; ?>" /><?php echo form_error('cl1desc') ?>
        </div>
		
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($cl1stat=='A') {
				echo "<input type='radio' name='cl1stat' value='A' checked>Active
				<input type='radio' name='cl1stat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='cl1stat' value='A'>Active
				<input type='radio' name='cl1stat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('cl1stat') ?>
        </div>
	    
		<input type="hidden" name="cl1comb" value="018099" />
		<input type="hidden" name="cl1lock" value="N" />
		<input type="hidden" name="cl1upsw" value="T" />
		<input type="hidden" name="cl1dtmd" value="<?php date("Y-m-d H:i:s");?>" />
		<input type="hidden" name="compense" value="" />
		
	    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
		&nbsp
		<a href="<?php echo site_url('Non_Drugs/ViewSub1/018') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
	</form>
</div>
</div>