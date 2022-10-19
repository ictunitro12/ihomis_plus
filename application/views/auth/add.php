<script src="<?php echo base_url()?>assets/scripts/auth/add.js"></script>
<div class="row">
	<div class="col-md-3">
		<?php $this->load->view('auth/_profile');?>
	</div>  
	<div class="col-md-9">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="row">
				<div class="col-md-6 ">
					<div class="h4 text text-success"> 
					<i class="fa fa-user-circle-o"></i>
					&nbsp<?php echo $header;?>
					&nbsp <small><?php echo $subheader;?></small>
					</div>
				</div>	
				</div>
			</div>
			<div class="card-body">
					<?php $this->load->view('auth/_tabAuth');?>
					<div class="tab-content " id="myTabContent">
					<div class="tab-pane fade show active mb-2 p-2" id="credential" role="tabpanel" aria-labelledby="credential-tab">
						<div id="frmFormuser">
						<div id="message"></div>
						</div>
					</div>
					<div class="tab-pane fade show " id="access" role="tabpanel" aria-labelledby="access-tab">
						<form name="formAccess" id="formAccess" method="POST">
							<?php  $this->load->view('auth/access.php');?>
							<input type="text" id="formIdenAccess" name="formIdenAccess">
							<button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
							&nbsp
							<a href="<?php echo site_url('Auth') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
						</form>
					</div>
					<div class="tab-pane fade show " id="activity" role="tabpanel" aria-labelledby="activity-tab"></div>
				</div>
			</div>
		</div>
	</div>
</div>
