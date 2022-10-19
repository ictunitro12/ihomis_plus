	<input type="hidden" class="form-control" name="menuID" id="menuID"/>
		<div class="form-group">
		<label for="varchar">With SubLevel?:</label>
			<select name ="menuSub" id="menuSub" onchange="_changeState();" class="form-control">
				<option value="">SELECT</option>
				<option value="Y">YES</option>
				<option value="N">NO</option>
			</select>	
		</div>

		<div class="form-group">
		<label for="varchar">NAME:</label>
		<input type="text" class="form-control" name="menuName" id="menuName" placeholder="Display Name" />
		</div>
		
		<div class="form-group">
		<label for="varchar">ICON:</label>
		<input type="text" class="form-control" name="menuIcon" id="menuIcon" placeholder="eg: cil-menu" />
		<small class="text-information">Check reference COREUI icon here:<a   href="https://coreui.io/docs/icons/icons-list/" target="_blank"> Click here</a></small>
		</div>
		<div class="form-group">
			<label for="varchar">ORDER:</label>
			<input type="number" class="form-control" min="0" name="menuOrder" id="menuOrder" placeholder="0"  />
		</div>
		
		<div class="form-group">
		<label for="varchar">STATUS:</label>
			<select name ="menuStatus" id="menuStatus" class="form-control">
				<option value="">SELECT</option>
				<option value="A">ACTIVE</option>
				<option value="I">INACTIVE</option>
			</select>	
		</div>
		<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
		</button>
		&nbsp
		<a href="<?php echo site_url('Menus') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>