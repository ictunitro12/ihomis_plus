<!doctype html>
<html>
    <head>
        <title>Employee Next Level</title>
        <link rel="stylesheet" type="text/css" href="           https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    </head>
	
    <body>
        <h2 style="margin-top:0px">Employee Next Level <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Employee ID:</label>
            <input type="text" class="form-control" name="employeeid" id="employeeid" placeholder="Employee ID" value="<?php echo $employeeid; ?>" /><?php echo form_error('employeeid') ?>
        </div>
		
		<div class="form-group">
		    <label for="varchar">License:</label>
            <input type="text" class="form-control" name="licno" id="licno" placeholder="License" value="<?php echo $licno; ?>" /><?php echo form_error('licno') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Degree:</label>
            <input type="text" class="form-control" name="empdegree" id="empdegree" placeholder="Degree" value="<?php echo $empdegree; ?>" /><?php echo form_error('empdegree') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Accreditation Number:</label>
            <input type="text" class="form-control" name="accno" id="accno" placeholder="Accreditation Number" value="<?php echo $accno; ?>" /><?php echo form_error('accno') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Validity Date:</label>
            <input type="text" class="form-control" name="accdte" id="accdte" placeholder="Validity Date" value="<?php echo $accdte; ?>" /><?php echo form_error('accdte') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Classification:</label>
            <input type="text" class="form-control" name="clscode" id="clscode" placeholder="Classification" value="<?php echo $clscode; ?>" /><?php echo form_error('clscode') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Claims Code Group:</label>
            <input type="text" class="form-control" name="upiprov" id="upiprov" placeholder="Claims Code Group" value="<?php echo $upiprov; ?>" /><?php echo form_error('upiprov') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Category:</label>
            <input type="text" class="form-control" name="catcode" id="catcode" placeholder="Category" value="<?php echo $catcode; ?>" /><?php echo form_error('catcode') ?>
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
		    <label for="varchar">Alias Name:</label>
            <input type="text" class="form-control" name="empalias" id="empalias" placeholder="Alias Name" value="<?php echo $empalias; ?>" /><?php echo form_error('empalias') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Phil. Medical Association:</label>
            <input type="text" class="form-control" name="docpma" id="docpma" placeholder="Phil. Medical Association" value="<?php echo $docpma; ?>" /><?php echo form_error('docpma') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Professional Tax Regulation:</label>
            <input type="text" class="form-control" name="docptr" id="docptr" placeholder="Professional Tax Regulation" value="<?php echo $docptr; ?>" /><?php echo form_error('docptr') ?>
        </div>

        <div class="form-group">
		    <label for="varchar">Handling Physical Examination:</label>
            <input type="text" class="form-control" name="docpe" id="docpe" placeholder="Handling Physical Examination" value="<?php echo $docpe; ?>" /><?php echo form_error('docpe') ?>
        </div>

        <div class="form-group">
            <label for="varchar">Password:</label>
            <input type="text" class="form-control" name="provpassw" id="provpassw" placeholder="Password" value="<?php echo $provpassw; ?>" /><?php echo form_error('provpassw') ?>
        </div>

        <div class="form-group">
            <label for="varchar">User ID:</label>
            <input type="text" class="form-control" name="puserid" id="puserid" placeholder="User ID" value="<?php echo $puserid; ?>" /><?php echo form_error('puserid') ?>
        </div>

        <div class="form-group">
            <label for="varchar">Hint:</label>
            <input type="text" class="form-control" name="hint" id="hint" placeholder="Hint" value="<?php echo $hint; ?>" /><?php echo form_error('hint') ?>
        </div>

        <div class="form-group">
            <label for="varchar">Answer:</label>
            <input type="text" class="form-control" name="hanswer" id="hanswer" placeholder="Answer" value="<?php echo $hanswer; ?>" /><?php echo form_error('hanswer') ?>
        </div>

        <div class="form-group">
            <label for="varchar">X-12 Equivalent Code:</label>
            <input type="text" class="form-control" name="clscon" id="clscon" placeholder="X-12 Equivalent Code" value="<?php echo $clscon; ?>" /><?php echo form_error('clscon') ?>
        </div>


        <input type="hidden" name="postitle" value="" />
        <input type="hidden" name="clscon" value="" />
	    <input type="hidden" name="entryby" value="JARG" />
		<input type="hidden" name="emplock" value="N" />
		<input type="hidden" name="datemod" value="2020-02-20 13:00:00" />
		<input type="hidden" name="updsw" value="P" />
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
		<a href="<?php echo site_url('Employee') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>