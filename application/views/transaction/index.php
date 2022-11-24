<div class="row">
	<div class="col-sm-10">
		<div class="card card-accent-success">
			<div class="card-body">
				<div  id="container"><i class="fa fa-spinner fa-spin text-success col d-flex justify-content-center" style="font-size:50px;  margin: 0 auto; float: none;  margin-bottom: 10px;"></i></div>
			</div>
		</div>
	</div>
	<div class="col-sm-2">
		<?php $this->load->view('transaction/_menus.php');?>
	</div>
	<input name="module" id ="module" type="hidden" value="<?php echo $module;?>">
</div>
<script>
		 $(function(){
		$("#container").load(baseURL+"Stockroom/trans_view",function(){
			 initRequest();
		}); 
	 });
</script>

