<!doctype html>
<html>
    <head>
        <title>Employee</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Employee <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Employee ID:</label>
            <input type="text" class="form-control" name="employeeid" id="employeeid" placeholder="Employee ID" value="<?php echo $employeeid; ?>" /><?php echo form_error('employeeid') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">Last Name:</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $lastname; ?>" /><?php echo form_error('lastname') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">First Name:</label>
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $firstname; ?>" /><?php echo form_error('firstname') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Middle Name:</label>
            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle Name" value="<?php echo $middlename; ?>" /><?php echo form_error('middlename') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Maiden Name:</label>
            <input type="text" class="form-control" name="maidenname" id="maidenname" placeholder="Maiden Name" value="<?php echo $maidenname; ?>" /><?php echo form_error('maidenname') ?>
        </div>

        <div class="form-group">
            <label for="varchar">Status:</label>
			<?php if ($empstat=='A') {
				echo "<input type='radio' name='empstat' value='A' checked>Active
				<input type='radio' name='empstat' value='I'>Inactive";
			} else {
				echo "<input type='radio' name='empstat' value='A'>Active
				<input type='radio' name='empstat' value='I' checked>Inactive";
			}
			?>
			<?php echo form_error('empstat') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Prefix:</label>
            <input type="text" class="form-control" name="empprefix" id="empprefix" placeholder="Prefix" value="<?php echo $empprefix; ?>" /><?php echo form_error('empprefix') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Suffix:</label>
            <input type="text" class="form-control" name="empsuffix" id="empsuffix" placeholder="Suffix" value="<?php echo $empsuffix; ?>" /><?php echo form_error('empsuffix') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Department:</label>
            <input type="text" class="form-control" name="deptcode" id="deptcode" placeholder="Department" value="<?php echo $deptcode; ?>" /><?php echo form_error('deptcode') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Position Title:</label>
            <input type="text" class="form-control" name="postitle" id="postitle" placeholder="Position Title" value="<?php echo $postitle; ?>" /><?php echo form_error('postitle') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Address:</label>
            <input type="text" class="form-control" name="paddr" id="paddr" placeholder="Address" value="<?php echo $paddr; ?>" /><?php echo form_error('paddr') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Contact No.:</label>
            <input type="text" class="form-control" name="contactno" id="contactno" placeholder="Contact No." value="<?php echo $contactno; ?>" /><?php echo form_error('contactno') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Tax ID:</label>
            <input type="text" class="form-control" name="tin" id="tin" placeholder="Tax ID" value="<?php echo $tin; ?>" /><?php echo form_error('tin') ?>
        </div>

        <input type="hidden" name="provsex" value="" />
        <input type="hidden" name="provbdate" value="" />
	    <input type="hidden" name="entryby" value="JARG" />
		<input type="hidden" name="emplock" value="N" />
		<input type="hidden" name="datemod" value="2020-02-20 13:00:00" />
		<input type="hidden" name="updsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Employee') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>