<div class="modal" id="modalSnapShotResult" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="dialog">
		<div class="modal-content">
			<div   class="modal-body">
			<h4 class="modal-title text-success "><i class="fa fa-camera"></i>&nbsp Photo Result </h4>
				<div id="ImageSnapshot" class="img-fluid img-thumbnail rounded mx-auto d-block "></div>
				
			</div>
			<div class="modal-footer">
			<div class="btn-group mb-3">
					<div class="btn btn-outline-success btn-ladda" onclick="iniCamera();"  data-toggle="modal" data-target="#modalSnapShot" ><i class="fa fa-camera"></i> Take again</div>
					<button type="button" onclick ="save_snapshot();"class="btn btn-outline-success " data-style="zoom-out"><i class="fa fa-save"></i> Save</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="modalSnapShot" role="dialog">
	<div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
		<div class="modal-content">
			<div  class="modal-body">
				<h4 class="modal-title text-success"><i class="fa fa-camera"></i> Take Snapshot</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div  class="img-fluid img-thumbnail rounded mx-auto d-block mb-1" id="my_camera"></div>
				<button  type="button" onclick ="take_snapshot();"class="btn btn-outline-success btn-lg btn-block btn-ladda btn-pill" data-style="slide-right"><i class="fa fa-camera"></i> Take</button>
			</div>
		</div>
	</div>
</div>

