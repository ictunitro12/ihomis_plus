	<form name="formUser" id="formUser" method="POST">
		<div class="row">	
				<div class="col-md-6">
					<input type="checkbox" name ="chkActPass" id="chkActPass"  class="form-checkbox mb-1" aria-describedby="chkActPass">
					<label for="chkActPass">&nbsp Manual</label>
					 <small class="text text-primary"> Note: manual set the password</small>
					<div class="border-bottom bg-success"></div>
					<div id="title"></div>
					<label for="varchar" id="selEmplabel" >Employee List:</label>
					<select name ="selEmp" id="selEmp" class="form-control form-control mb-1"></select>
		            <input type="hidden" class="form-control form-control-md mb-1" name="userName" readonly id="userName" placeholder="Username"/>
		            <label for="varchar">Email address:</label>
		            <input type="email" class="form-control  mb-3 p-2" name="userEmail" id="userEmail" placeholder="Email Address"/>
					<div  id="ichkReset">
					<input type="checkbox" name ="chkReset" id="chkReset" class="form-checkbox mb-1">
		            <label for="varchar">:Reset</label>
					</div>

					<label for="userPassword" class="form-label">Password:</label>
					<div class="input-group mb-3">
					  <input type="password"  readonly  name="userPassword" id="userPassword"  class="form-control" placeholder="Password" aria-label="userPassword" aria-describedby="userPassword">
						<span class="input-group-text" id="userPassword"><i toggle="#userPassword" class="toggle-password fa fa-eye-slash"></i></span>
					</div>
					<label for="userPassword" class="form-label">Confirm password:</label>
					<div class="input-group mb-3">
						<input type="password" class="form-control"  readonly  name="userPasswordConfirm" id="userPasswordConfirm" placeholder="Confirm password"/>
						<span class="input-group-text" id="userPasswordConfirm"><i toggle="#userPasswordConfirm" class=" toggle-password fa fa-eye-slash"></i></span>
					</div>
					<label for="varchar">Department:</label>
					<select type="text" class="form-control mb-1" name="userDept_dept" id="userDept_dept" /></select>
					<label for="varchar">Status:</label>
					<select name ="userStatus" id="userStatus" class="form-control mb-1">
						   <option value="">Select</option>
						   <option value="1">Active</option>
						   <option value="0">Inactive</option>
					</select>
					<input type="hidden" id="formIdenUser" name="formIdenUser">
					<input type="hidden" class="form-control" name="userID" id="userID" placeholder=""/>
					<div class="btn-group float-right">
						<button type="submit" class="btn btn-outline-success float-right"><i class="fa fa-save"></i> Save</button>
						<a href="<?php echo site_url('Auth')?>" id="btnClose" class="btn btn-outline-danger"><i class="fa fa-remove"></i> Cancel</a>
					</div>
				 </div>
			</div>
		</form>
<script src="<?php echo base_url()?>assets/scripts/auth/auth_validate.js"></script>
<script src="<?php echo base_url()?>assets/scripts/auth/auth.js"></script>



		