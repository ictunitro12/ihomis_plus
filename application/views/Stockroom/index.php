<div class="row">
    <div class="col-sm-10">
        <div id="container"><i class="fa fa-spinner fa-spin text-success col d-flex justify-content-center"
                style="font-size:50px;  margin: 0 auto; float: none;  margin-bottom: 10px;"></i></div>
    </div>
    <div class="col-sm-2">
        <?php $this->load->view('transaction/_menus.php');?>
    </div>
    <input name="module" id="module" type="hidden" value="<?php echo $module;?>">
</div>
<script>
$(function() {
    $("#container").load(baseURL + "Stockroom/stocklist_view", function() {
        $("#stocklist").DataTable();
    });
    $('a[data-toggle="list"]').on('click', function(e) {
        var tab = e.target.id;
        switch (tab) {
            case "stock-tab":
                $("#container").load(baseURL + "Stockroom/stocklist_view", function() {
                    $("#stocklist").DataTable();
                });
                break;
            case "issue-tab":
                $("#drugMedsIssue").DataTable().ajax.reload();
                break;
            case "return-tab":
                $("#drugMedsReturn").DataTable().ajax.reload();
                break;
            default:
                $("#drugsAndMeds_tbl").DataTable().ajax.reload();
                break;
        }
    });
});
</script>
<script src="<?php echo base_url()?>assets/scripts/stockroom/index.js"></script>
<script src="<?php echo base_url()?>assets/scripts/stockroom/_stockroom.js"></script>