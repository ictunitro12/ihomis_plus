  
<div class="row">
	<div class="col-md-3">
			<?php $this->load->view('auth/_profile');?>
	</div>  
	<div class="col-md-9">
		<div class=" card card-accent-success">
		<div class="card-header">
			<div class="row">
			<div class="col-md-6 ">
				<div class="h4 text text-success"> 
				<i class="fa fa-plus"></i>
				&nbsp<?php echo $header;?>
				&nbsp <small><?php echo $subheader;?></small>
				</div>
			</div>	
			</div>
		</div>
		<div class="card-body">
		<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link active  text text-success" id="credential-tab" data-toggle="tab" href="#credential" role="tab" aria-controls="credential" aria-expanded="true"> <i class="fa fa-lock fa-2x"></i>&nbsp CREDENTIALS</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success disabled" id="access-tab" data-toggle="tab" href="#access" role="tab" aria-controls="access"><i class="fa fa-key fa-2x"></i> ACCESS </a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success disabled" id="activity-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity"><i class="fa fa-history  fa-2x"></i> ACTIVITIES</a>
			</li>
		</ul>
		<div class="tab-content " id="myTabContent">

<div class="tab-pane fade show active" id="credential" role="tabpanel" aria-labelledby="credential-tab">
<br>
<div class="alert alert-success"  id="msg-alert"  role="alert">
 <i class="fa fa-check fa-lg"></i> <span id="messaage"></span>
</div>
		<form name="formUser" id="formUser" method="POST">
			<?php  $this->load->view('auth/form.php');?>
			<input type="hidden" id="formIdenUser" name="formIdenUser">
			<input type="hidden" class="form-control" name="userID" id="userID" value="<?php echo $this->uri->segment(3);?>" placeholder=""/>
			<button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
			&nbsp
			<a href="<?php echo site_url('Auth') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
		</form>
</div>

<div class="tab-pane fade show " id="access" role="tabpanel" aria-labelledby="access-tab">
	<br>
			<form name="formAccess" id="formAccess" method="POST">
				<?php  $this->load->view('auth/access.php');?>
				<input type="hidden" id="formIdenAccess" name="formIdenAccess">
				<input type="hidden" class="form-control" name="accuserID" id="accuserID" value="<?php echo $this->uri->segment(3);?>"placeholder=""/>
				<button type="submit" class="btn btn-success"><i class="fa fa-save"></i></button>
				&nbsp
				<a href="<?php echo site_url('Auth') ?>" class="btn btn-danger"><i class="fa fa-remove"></i></a>
			</form>
	<br>
	</div>
	<div class="tab-pane fade show " id="activity" role="tabpanel" aria-labelledby="activity-tab"></div>
</div>
</div>
		
		</div>
	</div>
	</div>
<script src="<?php echo base_url()?>assets/scripts/auth/auth.js"></script>
<script src="<?php echo base_url()?>assets/scripts/auth/edit.js"></script>
<script src="<?php echo base_url()?>assets/scripts/auth/auth_validate.js"></script>
<script type="text/javascript">
   $(function(){
	   var accuserID= $('#accuserID').val();
		initEdit(atob(accuserID));
	});	
</script>





	