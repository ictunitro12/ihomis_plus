<Style>
td.details-control {
    width: 1px;
    padding: 0px;
    text-align: left;
    color: forestgreen;
    cursor: pointer;
}

tr.shown td.details-control {
    width: 1px;
    padding: 0px;
    text-align: left;
    color: red;
}
</style>
<div class="row">
    <div class="col-md-3">
        <?php $this->load->view('auth/_profile');?>
    </div>
    <div class="col-md-9">
        <div class=" card card-accent-success">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6 ">
                        <div class="h4 text text-success">
                            <i class="fa fa-plus"></i>
                            &nbsp<?php echo $header;?>
                            &nbsp <small><?php echo $subheader;?></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php $this->load->view('auth/_tabAuth');?>
                <div class="tab-content " id="myTabContent">
                    <div class="tab-pane fade show active mb-2 p-2" id="credential" role="tabpanel"
                        aria-labelledby="credential-tab">
                        <div id="frmFormuser">
                            <div id="message"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade show " id="access" role="tabpanel" aria-labelledby="access-tab">
                        <?php  $this->load->view('auth/access.php');?>
                    </div>
                    <div class="tab-pane fade show " id="activity" role="tabpanel" aria-labelledby="activity-tab"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<input type="hidden" id="userid" value="<?php echo $this->uri->segment(3);?>">
<script src="<?php echo base_url()?>assets/scripts/auth/auth.js"></script>
<script src="<?php echo base_url()?>assets/scripts/auth/edit.js"></script>
<script src="<?php echo base_url()?>assets/scripts/auth/auth_validate.js"></script>
<script type="text/javascript">
$(function() {
    var accuserID = atob($("#userid").val());
	initEdit(accuserID);
    

    console.log(accuserID);
$('a[data-toggle="tab"]').on("click", function (e) {
  var tab = e.target.id;
  switch (tab) {
    case "credentials-tab":
      initEdit(accuserID);
      break;
    case "access-tab":
      
      accessLevel(accuserID);
      break;
    case "histo-tab":
      History(enccode);
      break;
    default:
      break;
  }
});

});
</script>