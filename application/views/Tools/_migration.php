<div class="row">
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
                                <td class="text text-success"><i class="fa fa-arrow-right fa-lg"></i>&nbsp Current Version #:</td>
                                <td> <input type="number" id="version"   step="1" name="version" class="form-control"></td>
                                <
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
    $(function() {
        $.get(baseURL + "Tools/current_version", function(data) {
            var obj = $.parseJSON(data);
            $("#version").val(obj['current']);
            
            $("#current_view").text(obj['new']);

            $("#version").attr({
             "max" : obj['new'],      
             "min" : obj['current']});
        });
    });

    function update() {
        var currentVersion = $("#version_view").text();
        var newVersion = $("#current_view").text();

        $.post(baseURL + "Tools/updateversion", {
            current: currentVersion,
            new: newVersion
        }, function(data) {
            $.get(baseURL + "Tools/current_version", function(data) {
                var obj = $.parseJSON(data);
                $("#version_view").text(obj['current']);
                $("#current_view").text(obj['new']);
            });
        });
    }

$("#version").on('change',function(){
    var id = $(this).val();
        $.post(baseURL+'Tools/versionupdate',{id:id},function(){

            toastr.success('record saved','Success');

        });

});
</script>