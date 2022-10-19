<form id="frmUpload" method="POST" enctype="multipart/form-data"> 
	<div class="modal" id="modalFilmResult" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content card-accent-success">
			<div class="modal-header ">
			<h5 class="modal-title text-success"> <i class="fa fa-upload"></i>&nbsp Upload Film</h5>
			</div>
				<div class="modal-body">
				
					<div class="form-group">
						<label for="exampleFormControlFile1">Upload Result here:</label>
						<input type="file" class="form-control-file" name="radioPic" id="radioPic">
					</div>
					<div class="form-group">	
						<label for="exampleFormControlFile1">Notes  Here:</label>
						<textarea name = "radioNotes" id="radioNotes"  class="form-control" placeholder ="Notes/Remarks"></textarea>
					</div>
					<input type="hidden"  name ="docointkey" id="docointkey">
					<input type="hidden" name ="enccode" id="enccode">
					<input type="hidden" name ="hpercode" id="hpercode">
					<input type="hidden" name ="proccode" id="proccode">
				</div>
				<div class="modal-footer">
				<div class=" btn-group">
					<button type="submit" class="btn btn-outline-success" type="submit"> <i class="fa fa-upload"></i> Upload/Save</button>
                    <button type="button" class="btn btn-outline-danger" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            	 </div>
			</div>
		</div>
	</div>
	</div>
</form>
   <div class="modal" id="modalPdfFilm"  role="dialog">
      <div class="modal-dialog modal-lg" >
         <div class="modal-content">
            <div class="modal-body">
			   <h4 class="modal-title text-success"><i class="fa fa-heartbeat"></i> Radio Result</h4>
               <embed id="radio_PDF" type="application/pdf" frameborder="2" width="100%" height="800px">
            </div>
			<div class="modal-footer">
			<div class=" btn-group">
                        <button class="btn btn-outline-danger btn-ladda" data-style="zoom-in" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
            	 </div>
			</div>
         </div>
      </div>
   </div>