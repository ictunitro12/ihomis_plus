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
	    <tr><td>admdesc</td><td><?php echo $reldesc; ?></td></tr>
	    <tr><td>Stat</td><td><?php echo $relstat; ?></td></tr>
	    <tr><td>rellock</td><td><?php echo $rellock; ?></td></tr>
	    
	    <tr><td>reldtemod</td><td><?php echo $reldatemod; ?></td></tr>
	    <tr><td>Updsw</td><td><?php echo $relupdsw; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('Religion') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>