

<!-- FILM ENTRY -->
<form id="frmFilmEntry" method="post">
<div class="modal" id="modalFilmEntry" tabindex="-1" role="dialog">
<div class="modal-dialog modal-dialog-centered modal-lg" role="dialog">
<div class="modal-content card-accent-success">

<div class="modal-body border-success">
<h1 class="modal-title text-success">FILM ENTRY</h1>


<button type="button" id="editFilmEntry" name="editFilmEntry" class="btn btn-success">EDIT</button>
<button type="button" id="saveFilmEntry" name="saveFilmEntry" class="btn btn-success" formaction="<?php echo site_url('Radiology/UpdateFilmEntry'); ?>">SAVE</button>
<button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="close">CLOSE FORM</button>

<br/>
<input id="raddocointkey" name="raddocointkey" type="hidden" class="form-control form-control-sm" />
<input id="radradcode" name="radradcode" type="hidden" class="form-control form-control-sm" />


<div class="row">
	<div class="col-md-3">
		<label for="radtime" class="control-label">TIME/DATE</label>
		<input type="text" id="radtime" name="radtime" class="form-control"/>
	</div>

	<div class="col-md-2">
		<!--  <div class="form-group">
      <label for="filmType">Type of Film:</label>
      <select class="form-control" id="filmType" name="filmType">
      	<option value="" disabled hidden selected>SELECT Type of Film</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        <option value="E">E</option>
        <option value="F">F</option>
        <option value="G">G</option>
        <option value="UTZ">UTZ</option>
        <option value="NA">NA</option>
        <option value="CT">CT</option>
      </select>
    </div> -->
		<label for="radfilm" class="control-label">TYPE OF FILM:</label>

<!-- 	<select name="hradfilmdropdown" id="hradfilmdropdown">
	  <option value="A">A</option>
	  <option value="C">C</option>
	  <option value="D">D</option>
	  <option value="E">E</option>
	  <option value="F">F</option>
	</select> -->
		<input type="text" id="radfilm" name="radfilm" class="form-control"/>
	</div>
	<div class="col-md-2">
		<label for="radconsumed" class="control-label">CONSUMED:</label>
		<input type="text" id="radconsumed" name="radconsumed" class="form-control"/>
	</div>
	<div class="col-md-2">
		<label for="radspoiled" class="control-label">SPOILED:</label>
		<input type="text" id="radspoiled" name="radspoiled" class="form-control"/>
	</div>
	<div class="col-md-3">
		<label for="radenterby" class="control-label">ENTERED BY:</label>
		<input type="text" id="radenterby" name="radenterby" class="form-control"/>
	</div>
</div>
</div>
</div>
</div>
</div>

</form>

