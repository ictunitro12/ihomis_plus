<!doctype html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<title>ICPC Library</title>
<style>
body{
	padding: 50px 100px;
}
</style>

</head>
<body>
        <h2 style="margin-top:0px">ICPC</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Reason<?php echo form_error('encreason') ?></label>
            <input type="text" class="form-control" name="encreason" id="encreason" placeholder="code" value="<?php echo $encreason; ?>" />
        </div>
		
	    <div class="form-group">
            <label for="varchar">Discription <?php echo form_error('icpc_desc') ?></label>
            <input type="text" class="form-control" name="icpc_desc" id="icpc_desc" placeholder="Decription" value="<?php echo $icpc_desc; ?>" />
        </div>
		
		<div class="form-group">
            <label for="varchar">Search key <?php echo form_error('searchkey') ?></label>
            <input type="text" class="form-control" name="searchkey" id="searchkey" placeholder="Discount" value="<?php echo $searchkey; ?>" />
        </div>
		
		<div class="form-group">
            <label for="varchar">Status <?php echo form_error('icpcstat') ?></label>
          <?php
            if($icpcstat=='A')
				{
					echo "<input type='radio' name='icpcstat' id='icpcstat'  value='A' checked />Acitve 
					<input type='radio'  name='icpcstat' id='icpcstat'  value='I' />Inactive";
					
				}
				else
				{
					echo "<input type='radio' name='icpcstat' id='icpcstat'  value='A'  />Acitve 
					<input type='radio'  name='icpcstat' id='icpcstat'  value='I' checked />Inactive";
				}
			?>
        </div>
		<input type="hidden" name="icpclock" id="icpclock" value="N" />
		<input type="hidden"  name="datemod" id="datemod" value="2002/09/02" />
		<input type="hidden"  name="updsw" id="updsw" value="P" />
	     <button type="submit" class="btn btn-success">
			<span class="glyphicon glyphicon-ok"></span>&nbsp<?php echo $button ?>
		</button>
			<a href="<?php echo site_url('ICPC') ?>" class="btn btn-danger">
				<span class="glyphicon glyphicon-remove"></span> Cancel
			</a>
	</form>
</body>
</html>