<link href="<?php echo base_url();?>assets/vendors/chartjs/css/coreui-chartjs.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
<?php $this->load->view('Dashboards/_system.php');?>

<script type="text/javascript">
	$(function(){
		nopatient();
		datepicker();
    
	
	});
</script>
<script src="<?php echo base_url()?>assets/scripts/dashboard/dashboard.js"></script>
<script src="<?php echo base_url()?>assets/scripts/dashboard/admitgraph.js"></script>
<script src="<?php echo base_url()?>assets/scripts/dashboard/opdgraph.js"></script>
<script src="<?php echo base_url()?>assets/scripts/dashboard/ergraph.js"></script>
<script src="<?php echo base_url()?>assets/vendors/moment/js/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/vendors/chartjs/js/coreui-chartjs.bundle.js"></script>

