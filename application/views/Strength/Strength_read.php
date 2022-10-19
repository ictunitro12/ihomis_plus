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
        <h2 style="margin-top:0px">Hreligion Read</h2>
        <table class="table">
    	    <tr>
                <td>Code</td>
                <td><?php echo $strecode; ?></td>
            </tr>
    	    <tr>
                <td>Description</td>
                <td><?php echo $STREDESC; ?></td>
            </tr>
    	    <tr>
                <td>Status</td>
                <td><?php echo $strestat; ?></td>
            </tr>
    	    <tr>
                <td></td>
                <td><a href="<?php echo site_url('Strength') ?>" class="btn btn-default">Ok</a></td>
            </tr>
	   </table>
    </body>
</html>