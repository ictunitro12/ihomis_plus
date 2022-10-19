
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Major Category:</label>
            <input type="text" class="form-control" name="dmcode" id="dmcode" placeholder="Major Category" value="<?php echo $dmcode; ?>" /><?php echo form_error('dmcode') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Sub Group 1:</label>
            <input type="text" class="form-control" name="dmsub1" id="dmsub1" placeholder="Sub Group 1" value="<?php echo $dmsub1; ?>" /><?php echo form_error('dmsub1') ?>
        </div>
	    

		<div class="form-group">
		    <label for="varchar">Description:</label>
            <input type="text" class="form-control" name="dms1desc" id="dms1desc" placeholder="Description" value="<?php echo $dms1desc; ?>" /><?php echo form_error('dms1desc') ?>
        </div>
	    
		<input type="hidden" name="dms1sta" value="A" />
		<input type="hidden" name="dms1lck" value="N" />
		<input type="hidden" name="dms1us" value="P" />
		<input type="hidden" name="dms1key" value="99.1" />
		<input type="hidden" name="dmsdtmd" value="2020-05-24 23:00:00" />
		<input type="hidden" name="dmupsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('PNDFClass/ViewSub1/$1') ?>" class="btn btn-default">Cancel</a>
	</form>
