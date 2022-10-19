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
        <h2 style="margin-top:0px">Generic Core List</h2>
        <table class="table">
    	    <tr>
                <td>Code</td>
                <td><?php echo $gencode; ?></td>
            </tr>
    	    <tr>
                <td>Description</td>
                <td><?php echo $GENDESC; ?></td>
            </tr>
    	    <tr>
                <td>Status</td>
                <td><?php echo $genstat; ?></td>
            </tr>
    	    <tr>
                <td></td>
                <td><a href="<?php echo site_url('GenericCoreList') ?>" class="btn btn-default">Ok</a></td>
            </tr>
    	</table>
    </body>
</html>