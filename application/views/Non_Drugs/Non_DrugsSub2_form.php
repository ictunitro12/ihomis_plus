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
		    <label for="varchar">Sub-2 Category Code:</label>
            <input type="text" class="form-control" name="cl2code" id="cl2code" placeholder="Sub-2 Category Code" value="<?php echo $cl2code; ?>" /><?php echo form_error('cl2code') ?>
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

        <div class="form-group">
		    <label for="varchar">Stock No.:</label>
            <input type="text" class="form-control" name="stkno" id="stkno" placeholder="Stock No." value="<?php echo $stkno; ?>" /><?php echo form_error('stkno') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Barcode:</label>
            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="Barcode" value="<?php echo $barcode; ?>" /><?php echo form_error('barcode') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Description:</label>
            <input type="text" class="form-control" name="cl2desc" id="cl2desc" placeholder="Description" value="<?php echo $cl2desc; ?>" /><?php echo form_error('cl2desc') ?>
        </div>
		
		  <div class="form-group">
		    <label for="varchar">Description:</label>
          
        </div>
	    
	    <input type="hidden" name="cl2retprc" value="0.00" />
	    <input type="hidden" name="uomcode" value="PC" />
	    <input type="hidden" name="cl2dteas" value="2020-02-20 13:00:00" />
	    <input type="hidden" name="cl1comb" value="018099" />
		
		<input type="hidden" name="cl1comb" value="018099" />
		<input type="hidden" name="cl2comb" value="018099099" />
		<input type="hidden" name="cl2lock" value="N" />
		<input type="hidden" name="cl2upsw" value="T" />
		<input type="hidden" name="cl2dtmd" value="" />
		<input type="hidden" name="curcode" value="" />
		<input type="hidden" name="cl2purp" value="" />
		<input type="hidden" name="curcode1" value="" />
		<input type="hidden" name="uomcode1" value="N" />
		<input type="hidden" name="cl2ctr" value="" />
		<input type="hidden" name="brandname" value="" />
		<input type="hidden" name="stockbal" value="1000.00" />
		<input type="hidden" name="pharmaceutical" value="Y" />
		<input type="hidden" name="baldteasof" value="2020-02-20 13:00:00" />
		<input type="hidden" name="begbal" value="1000.00" />
		<input type="hidden" name="lot_no" value="" />
		<input type="hidden" name="reorder_level" value="" />
		
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Non_Drugs') ?>" class="btn btn-default">Cancel</a>
	</form>
  </div>
  </div>