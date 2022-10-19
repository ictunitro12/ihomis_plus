
         <div class="col-md-6">
	<div class="	 card card-accent-success">
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
		    <label for="varchar">Description:</label>
            <input type="text" class="form-control" name="ptdesc" id="ptdesc" placeholder="Description" value="<?php echo $ptdesc; ?>" /><?php echo form_error('ptdesc') ?>
        </div>
	    
		<div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($ptstat=='A') {
				echo "<input type='radio' name='ptstat' value='A' checked>Active
				<input type='radio' name='ptstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='ptstat' value='A'>Active
				<input type='radio' name='ptstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('ptstat') ?>
        </div>
		<input type="hidden" name="dateasof" value="<?php date("Y-m-d H:i:s");?>" />
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
		&nbsp
		<a href="<?php echo site_url('Non_Drugs') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
	</form>
 </div>
 </div>