<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
	<meta name="description" content="Integrated Hospital Operation Management System">
	<meta name="author" content="Department Of Health">
	<meta name="keyword" content="IHOMIS plus">
	<title>iHOMIS Plus</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/font-awesome/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/vendors/ladda/css/ladda-themeless.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/select2/css/select2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/select2/css/select2-coreui.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/toastr/css/toastr.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/pace/pace.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/floating-labels.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/bootstrap-daterangepicker/css/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/RowReorder/rowReorder.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">
	<script src="<?php echo base_url(); ?>assets/vendors/jquery/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/plugin/step/js/jquery.smartWizard.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-daterangepicker/js/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/datatables.net/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/jquery-ui-dist/js/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/vendors/jquery-validation/js/jquery.validate.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/select2/js/select2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/scripts/jquery.session.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/datatables/dataTables.select.min.js"></script>
	
	<script src="<?php echo base_url() ?>assets/plugin/datatables/extensions/RowReorder/rowReorder.js"></script>
	<script src="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/js/dataTables.responsive.js"></script>
	<script src="https://kit.fontawesome.com/bc48d378cb.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>assets/plugin/step/css/smart_wizard_theme_circles.min.css">
	<script type="text/javascript" src="https://unpkg.com/default-passive-events"></script>
	<!-- DROPZONE -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/dropzone/5.7.0/dist/min/dropzone.min.css">
</head>
<style>
	.dataTables_wrapper {
		font-family: helvetica;
		font-size: 11px;
		font-weight: bold;
		position: relative;
		clear: both;
		border-spacing: 0px;
    	border-collapse: collapse;
	}

	.dataTable tbody th,
	table.dataTable tbody td {
		padding: 1px 1px;
		white-space: nowrap;
		vertical-align: middle;
		cellspacing: 0;
	}

	.list-group {
		font-size: 12px; 
		color: white;
		font-weight: normal;
		text-decoration: none;
	}
	
	.div+list-group-flush{
	padding: -1px -1px;
	margin-bottom: -1px;
	margin-top: -1px;
	}
	.c-app {
		font-family: helvetica;
		font-size: 12px;
	}

	.modal-body {
		max-height: calc(100vh - 143px);
		overflow-y: auto;
	}

	.fa i{
        -webkit-text-stroke: 2px white;
    }

	.scroll {
		max-height: 500px;
		overflow-y: 500px;

		th {
			font-size: 10px;
		}

		td {
			font-size: 10px;
		}
	}

	#chargesList thead>tr {
		font-size: 11px;
	}

	ul.ErrorClass,
	input.ErrorClass,
	textarea.ErrorClass,
	select.ErrorClass {
		border-width: 1px !important;
		border-style: solid !important;
		border-color: #cc0000 !important;
		background-color: #f3d8d8 !important;
		background-image: url(http://goo.gl/GXVcmC) !important;
		background-position: 50% 50% !important;
		background-repeat: repeat !important;
	}

	ul.ErrorClass input {
		color: #666 !important;
	}

	label.ErrorClass {
		color: red;
		font-size: 11px;
		/*    font-style: italic;*/
		display: block;
	}

</style>

