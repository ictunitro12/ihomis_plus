<!doctype html>
<html>
    <head>
        <title>Miscellaneous</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Miscellaneous</h2>
        <table class="table">
    	    <tr>
                <td>Code</td>
                <td><?php echo $hmcode; ?></td>
            </tr>
    	    <tr>
                <td>Description</td>
                <td><?php echo $hmdesc; ?></td>
            </tr>
    	    <tr>
                <td>Unit of measure</td>
                <td><?php echo $uomcode; ?></td>
            </tr>
    	    <tr>
                <td>Rate</td>
                <td><?php echo $hmamt; ?></td>
            </tr>
    	    <tr>
                <td>Date as of</td>
                <td><?php echo $hmdteas; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php echo $hmstat; ?></td>
            </tr>
    	    <tr>
                <td></td>
                <td><a href="<?php echo site_url('Miscellaneous') ?>" class="btn btn-default">Ok</a></td>
            </tr>
    	</table>
    </body>
</html>