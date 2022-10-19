	
	<form name="formSub" id="formSub">
	<div class="modal fade" id="modalAddSubMenu" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-center modal-md" role="dialog">
			<div class="modal-content">
			<div class="modal-body">
				<h2 class="text text-success"><i class="fa fa-th-list"></i>&nbsp Sublist Menu</h2>
				<div class="box-body box-profile">
					<input type="hidden" class="form-control" name="menuID" id="menuID"/>
					<input type="hidden" class="form-control" name="formIdenSub" id="formIdenSub"/>
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
				
				</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success" name="btnAddsubMenu"> <i class="fa fa-save"></i></button>
					&nbsp
					<a href="<?php echo site_url('Menus') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
				</div>
			</div>
		</div>
	</div>
	</form>
<script src="<?php echo base_url()?>assets/scripts/menu/addsub.js"></script>