<form id="frmDeleteSys" name="frmDeleteSys" method="post">
	<div class="modal" id="deleteSysModal" name="deleteSysModal" tabindex="-1" role="form">
		<input type="hidden" name="delSysenccode" id="delSysenccode">
		<input type="hidden" name="delSysdatelog" id="delSysdatelog">
		<input type="hidden" name="sysformIdenDelete" id="sysformIdenDelete" value="delete">
		<div class="modal-dialog modal-dialog-centered modal-md" role="form">
			<div class="modal-content">
				<div class="modal-header bg-danger">
					<h5 class="modal-title text-white"><i class=""></i>&nbsp <span id="key"></span></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<h4>Do you want to proceed?</h4>
					<h2 class="modal-title text-danger"></h2>
				</div>
				<div class="modal-footer ">
					<div class="btn-group float-right">
						<button  type ="submit" class="btn btn-outline-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp DELETE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<form id="frmSysRev" name="frmSysRev" class="form">
	<div class="modal" id="SysRevModal"  role="dialog">
		<div class="modal-dialog modal-dialog-vertical modal-md">
			<div class="modal-content">
				<div class="modal-body">
					<h2 class="modal-title text-success"><i class="fa fa-universal-access"></i> &nbsp System Review</h2>
					<div class="form-row">
						<div class="col-md-4 col-form-label text-default mb-1">
							General:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysGen" name="sysGen" placeholder ="General"></textarea>
						</div>
						
						<div class="col-md-4 col-form-label text-default mb-1">
							Skin:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysSkin" name="sysSkin" placeholder ="Head/EENT"></textarea>
						</div>		
						<div class="col-md-4 col-form-label text-default mb-1">
							EENT:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysEENT" name="sysEENT" placeholder ="EENT"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Musculoskeletal:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysMusco" name="sysMusco" placeholder ="Musculokeletal"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Respiratory:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysRespi" name="sysRespi" placeholder ="Respiratory"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Cardiovascular:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysCardio" name="sysCardio" placeholder ="Cardiovascular"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Gastrointestinal:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysGastro" name="sysGastro" placeholder ="Gastrointestinal"></textarea>
						</div>			
						<div class="col-md-4 col-form-label text-default mb-1">
							Genitourinary:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysGenito" name="sysGenito" placeholder ="Genitourinary"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Female-reproductive
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysRepro" name="sysRepro" placeholder ="Female Reproductive"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Nervous:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysNerv" name="sysNerv" placeholder ="Nervous"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							PTB:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysPTB" name="sysPTB" placeholder ="Pulmonary Tuberculosis"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Asthma:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysAsth" name="sysAsth" placeholder ="Asthma"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Cancer:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysCancer" name="sysCancer" placeholder ="Cancer"></textarea>
						</div>
						<div class="col-md-4 col-form-label text-default mb-1">
							Other:
						</div>
						<div class="col-md-8">
							<textarea type="text" class="form-control form-control mb-1" autocomplete="off"   id="sysOther" name="sysOther" placeholder ="Other"></textarea>
						</div>				
					</div>
				</div>
				<input type="hidden" name="sysEnccode" id="sysEnccode" >
				<input type="hidden" name="sysHpercode" id="sysHpercode">
				<input type="hidden" name="sysformIden" id="sysformIden">
				<div class="modal-footer">
					<div class="btn-group float-right">					
						<button type="submit" name="btnSave" id="btnSave" class="btn btn-outline-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp; SAVE</button>
						<button class="btn btn-outline-danger btn-ladda" data-dismiss="modal" data-style="zoom-in"><i class="fa fa-close"></i> CANCEL</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>