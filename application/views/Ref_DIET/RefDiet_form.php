<style>

table#SubCategoryTable.dataTable tbody tr:hover {
  background-color: #80DB88;
}

</style>
<div class="col-md-6">
	<div class=" card card-accent-success">
		<div class="card-header">
			<div class="row">
			<div class="col-md-6 ">
				<div class="h3 text text-success"> 
				<i class="fa fa-plus"></i>
				&nbsp<?php echo $header;?>
				</div>
			</div>	
			</div>
		</div>
	
		<div class="card-body">
	    	<form action="<?php echo $action; ?>" method="post">
			    <div class="form-group">
		            <label for="varchar">Diet Code<?php echo form_error('dietcode') ?></label>
		            <input type="text" class="form-control" name="dietcode" id="dietcode" placeholder="code" value="<?php echo $dietcode; ?>" />
		        </div>
				
			    <div class="form-group">
		            <label for="varchar">Discription <?php echo form_error('dietdesc') ?></label>
		            <input type="text" class="form-control" name="dietdesc" id="dietdesc" placeholder="Decription" value="<?php echo $dietdesc; ?>" />
		        </div>
				
				<div class="form-group">
		            <label for="varchar">Discount <?php echo form_error('diettype') ?></label>
		            <input type="text" class="form-control" name="diettype" id="diettype" placeholder="Discount" value="<?php echo $diettype; ?>" />
		        </div>
				
				<div class="form-group">
		            <label for="varchar">Status <?php echo form_error('dietstat') ?></label>
		          <?php
		            if($dietstat=='A')
						{
							echo "<input type='radio' name='dietstat' id='dietstat'  value='A' checked />Acitve 
							<input type='radio'  name='dietstat' id='dietstat'  value='I' />Inactive";
							
						}
						else
						{
							echo "<input type='radio' name='dietstat' id='dietstat'  value='A'  />Acitve 
							<input type='radio'  name='dietstat' id='dietstat'  value='I' checked />Inactive";
						}
					?>
		        </div>
				<input type="hidden" name="dietlock" id="dietlock" value="N" />
				<input type="hidden"  name="dietdtmd" id="dietdtmd" value="2002/09/02" />
				<input type="hidden"  name="updsw" id="updsw" value="P" />
			     <button type="submit" class="btn btn-success">
					<span class="glyphicon glyphicon-ok"></span>&nbsp<?php echo $button ?>
				</button>
					<a href="<?php echo site_url('Ref_Diet') ?>" class="btn btn-danger">
						<span class="glyphicon glyphicon-remove"></span> Cancel
					</a>
			</form>
		</div>
	</div>
</div>