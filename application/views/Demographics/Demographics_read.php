<!doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Region Read</h2>
        <table class="table">
        <tr><td>Region code:</td><td><?php echo $regcode; ?></td></tr>
	    <tr><td>Region name:</td><td><?php echo $regname; ?></td></tr>
        <tr><td>Abbreviation:</td><td><?php echo $regabbrev; ?></td></tr>
	    <tr><td>Status:</td><td><?php echo $regstat; ?></td></tr>
	    <tr><td>Lock:</td><td><?php echo $reglock; ?></td></tr>
	    <tr><td>Date modified:</td><td><?php echo $regdtemod; ?></td></tr>
	    <tr><td>Update switch:</td><td><?php echo $updsw; ?></td></tr>
	    <tr><td></td><td><a class="btn btn-primary" href="<?php echo site_url('Demographics'); ?>">OK</a></td></tr>
	</table>
        </body>
</html>