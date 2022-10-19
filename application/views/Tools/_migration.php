3<div class="row">
	<div class="col-md-12">
		<div class="card card-accent-success">
			<div class="card-header">
				<div class="row">
					<div class="col-md-6 col-md-auto">
                     <h4 class="text text-success"><i class="fa fa-info"></i> &nbsp Migration information</h4>
                    </div>
				</div>
			</div>
			<div class="card-body">
            <div class="row">
        <div class="col-md-6">
        <table class="table table-sm table-striped table-bordered">
            <tr>
                <td class="text text-success"><i class="fa fa-arrow-right fa-lg"></i>&nbsp Current Version #: <a class="text-success" id="version_view"></a></td>
                <td class="text text-success"><button id="btnUpdate" class="btn btn-outline-success btn-sm btn-block" onclick="update();"><i class="fa fa-upload"></i> Update</button></td>
            </tr>
            <tr>
            <td class="text text-success"><i class="fa fa-arrow-right  fa-lg"></i>&nbsp New Version <a class="text-success" id="current_view"></a></td>
        </tr>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
<script>
    $(function(){
        $.get(baseURL+"Tools/current_version",function(data){
            var obj = $.parseJSON(data);
            $("#version_view").text(obj['current']);
            $("#current_view").text(obj['new']);
        });
    });
        
    function update(){
        var currentVersion = $("#version_view").text();
        var newVersion = $("#current_view").text();
        
        $.post(baseURL+"Tools/updateversion",{current : currentVersion,new:newVersion},function(data){
            $.get(baseURL+"Tools/current_version",function(data){
            var obj = $.parseJSON(data);
            $("#version_view").text(obj['current']);
            $("#current_view").text(obj['new']);
        });
        });
    }
</script>