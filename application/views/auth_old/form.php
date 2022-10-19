				
				<div class="form-group" id="manual">
				<input type="checkbox" name ="chkActPass" id="chkActPass" onchange="manual()" value="" class="form-checkbox">
		            <label for="varchar">Manual</label>
				<small class="text text-primary"> Note: manual set the password</small>
				</div>
				<div class="form-group">
		            <label for="varchar">Employee List:</label>
		         <select name ="selEmp" id="selEmp" class="form-control"></select>	
		        </div>
			    <div class="form-group">
		            <label for="varchar">Username:</label>
		            <input type="text" class="form-control" name="userName" readonly id="userName" placeholder="Username"/>
		        </div>
				
				<div class="form-group" id ="emailAdd">
		            <label for="varchar">Email address:</label>
		            <input type="email" class="form-control" name="userEmail" id="userEmail" placeholder="Email Address"/>
		        </div>
				
				<div class="form-group" id="resetPass">
				<input type="checkbox" name ="chkReset" id="chkReset" onchange="resetPass()" value="" class="form-checkbox">
		            <label for="varchar">Reset password</label>
			
				</div>
				
				<div class="form-group" id="passw">
		            <label for="varchar">Password:</label>
		            <input type="password" class="form-control"  disabled name="userPassword" id="userPassword" placeholder="Password"/>
		        </div>
				<div class="form-group" id="passwc">
		            <label for="varchar">Confirm password:</label>
		            <input type="password" class="form-control"  disabled name="userPasswordConfirm" id="userPasswordConfirm" placeholder="Confirm password"/>
		        </div>
				
				<div class="form-group" id="stat">
		            <label for="varchar">Status:</label>
				<select name ="userStatus" id="userStatus" class="form-control">
					   <option value="">SELECT</option>
					   <option value="1">ACTIVE</option>
					   <option value="0">INACTIVE</option>
				   </select>	
		        </div>
			   
		