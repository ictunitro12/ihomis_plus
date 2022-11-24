<div class="clearfix mb-1">
    <div class="text-success h4 float-left"><i class="fa fa-paper-plane"></i>&nbsp Request/s</div>
    <div class="btn-group float-right">
        <button type="button" class="btn btn-outline-success" id="btnAdd_request"><i class="fa fa-plus"></i>Add</button>
    </div>
</div>
<table id="requestMed" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
    <thead>
        <tr>
            <th class="all">Date</th>
            <th class="all">Item</th>
            <th class="all">Request</th>
            <th class="all">Issued</th>
            <th class="all">Received</th>
            <th class="">Ward</th>
            <th class="all">Pharmacy</th>
            <th class="all">Priority</th>
            <th class="all"></th>
        </tr>
    </thead>
</table>
<?php 
    $this->load->view('Nurse/_formDrugRequest.php');
    $this->load->view('Pharmacy/_modalDrugList.php');
?>
<script src="<?php echo base_url()?>assets/scripts/nurse/_request.js"></script>
<script src="<?php echo base_url()?>assets/scripts/nurse/_drugListMultiple.js"></script>