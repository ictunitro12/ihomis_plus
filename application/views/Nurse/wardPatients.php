	<div class="row">
	    <div class="col-md-10 ">
	        <div class="card  card-sm card-accent-success">
	            <div class="card-body">
	                <div id="content"></div>
	            </div>
	        </div>
	    </div>
	    <div class="col-md-2">
	        <?php  include_once('wardinformation.php');?>
	    </div>
	</div>
	<?php  $this->load->view('PatientRecords/EPRModal.php');?>
	<script src="<?php echo base_url()?>assets/scripts/nurse/nurse.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/nurse/ward.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/admission/index.js"></script>
	<script type="text/javascript">
var wardCode = '<?php echo $this->uri->segment(3);?>';
	</script>