
	
			    <div class="form-group">
		            <label for="varchar">CONTROLLER:</label>
		            <input type="text" class="form-control" name="controllerName" id="controllerName" placeholder="CONTROLLER"/>
		        </div>
				<div class="form-group">
		            <label for="varchar">TYPE:</label>
		           <select name ="controllerType" id="controllerType" class="form-control">
				   <option value="">SELECT</option>
				   <option value="TRANS">TRANSACTION</option>
				   <option value="REP">REPORT</option>
				   <option value="LIB">LIBRARY</option>
				   <option value="ADMIN">SYSTEM ADMINISTRATION</option>
				   </select>	
		        </div>
				<div class="form-group">
		            <label for="varchar">Status:</label>
				<select name ="controllerStatus" id="controllerStatus" class="form-control">
					   <option value="">SELECT</option>
					   <option value="A">ACTIVE</option>
					   <option value="I">INACTIVE</option>
				   </select>	
		        </div>
				<input type="hidden" id="formIdenController" name="formIdenController">
			    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
				&nbsp
				<a href="<?php echo site_url('Controller') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
		
