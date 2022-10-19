<?php include_once('issuance_modals.php'); ?>
<?php include_once('return_modals.php'); ?>
<?php include_once('replenish_modal.php'); ?>
<?php include_once('supplies_stock_modal.php'); ?>
<?php include_once('encounter_modal.php'); ?>
<?php include_once('stock_modals.php'); ?>
<?php include_once('dmstock_modal.php'); ?>
<?php include_once('deliveries_modal.php'); ?>
<?php include_once('adjustment_modal.php'); ?>
<div class="row">
	
</div>
	<input name="base_url" id ="base_url" type="hidden" value="<?php echo base_url();?>">
	<!-- MARVIN : START : CALL PHARMACY SCRIPT -->
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/pharmacy.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/issuance.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/return.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/replenish.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/supplies_stock.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/dmstock.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/deliveries.js"></script>
	<script src="<?php echo base_url()?>assets/scripts/pharmacy/pharmacy_index.js"></script>
	<!-- MARVIN : END : CALL PHARMACY SCRIPT -->
<script type="text/javascript">

$(document).ready(function(){
	
	
	
	
});

</script>
