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
            <label for="varchar">PNDFClass Code:</label>
            <input type="text" class="form-control" name="dmcode" id="dmcode" placeholder="PNDFClass Code" value="<?php echo $dmcode; ?>" /><?php echo form_error('dmcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">PNDFClass Name:</label>
            <input type="text" class="form-control" name="dmdesc" id="dmdesc" placeholder="PNDFClass Name" value="<?php echo $dmdesc; ?>" /><?php echo form_error('dmdesc') ?>
        </div>
		        <input type="hidden" name="dmstat" value="A" />
				<input type="hidden" name="dmlock" value="N" />
				<input type="hidden" name="dmdtmd" value="2020-05-24 23:00:00" />
				<input type="hidden" name="dmupsw" value="P" />
				
			     <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
				&nbsp
					<a href="<?php echo site_url('PNDFClass/ViewSub1/$1') ?>" class="btn btn-default">Cancel</a>
			</form>
			<div>
			<div>
	