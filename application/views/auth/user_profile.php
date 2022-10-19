<Style>
        td.details-control {
		width: 1px;
	   padding: 0px;
		text-align:left;
		color:forestgreen;
		cursor: pointer;
}
	tr.shown td.details-control {
	width: 1px;
	padding: 0px;
    text-align:left; 
    color:red;
}
</style>  
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
				<i class="fa fa-plus"></i>
				&nbsp<?php echo $header;?>
				&nbsp <small><?php echo $subheader;?></small>
				</div>
			</div>	
			</div>
		</div>
		<div class="card-body">
		<ul class="nav nav-tabs nav-justified" id="userAcct" role="tablist">
			<li class="nav-item">
				<a class="nav-link active  text text-success" id="credential-tab" data-toggle="tab" href="#credential" role="tab" aria-controls="credential" aria-expanded="true"> <i class="fa fa-lock fa-2x"></i>&nbsp Account</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text text-success disabled" id="activity-tab" data-toggle="tab" href="#activity" role="tab" aria-controls="activity"><i class="fa fa-history  fa-2x"></i> My Activities</a>
			</li>
		</ul>
		<div class="tab-content " id="myTabContent">
		<div class="tab-pane fade show active" id="credential" role="tabpanel" aria-labelledby="credential-tab">
				<div id="frmFormuser">
				<div id="message"></div>
				</div>
		 <input type="hidden" id="accuserID" name="accuserID" value="<?php echo $userID;?>">
		<div class="tab-pane fade show " id="activity" role="tabpanel" aria-labelledby="activity-tab"></div>
	</div>
	</div>
	</div>
	</div>
	</div>
<script src="<?php echo base_url()?>assets/scripts/auth/auth.js"></script>
<script src="<?php echo base_url()?>assets/scripts/auth/edit.js"></script>
<script type="text/javascript">
   $(function(){	
	   var accuserID= $('#accuserID').val();
		initProfile(accuserID);
	});	
</script>