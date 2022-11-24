<style>
table#medStock.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#requestMed.dataTable tbody tr:hover {
    background-color: #80DB88;
}

table#requestMed.dataTable tbody tr:hover {
    background-color: #80DB88;
}
</style>
<?php $this->load->view('nurse/drugsModalreq')?>

<div class="clearfix">
    <div class="card-title h4 text text-success float-left">
        <i class="fa fa-bar-chart"></i>
        &nbsp Stocks <span>Drugs and Medicine</span>
    </div>
    <table id="medStock" style="cursor:pointer" class="table table-sm table-striped table-bordered table-hover"
        width="100%">
        <thead>
            <tr>
                <th style="text-align:center; vertical-align:middle" rowspan="2">Code</th>
                <th style="text-align:left; vertical-align:middle" rowspan="2">Item Description</th>
                <th style="text-align:center" colspan="2">Stock</th>
            </tr>
            <tr>
                <th style="text-align:center">Reorder</th>
                <th style="text-align:center">Balance</th>
            </tr>
        </thead>
    </table>
    <script src="<?php echo base_url()?>assets/scripts/pharmacy/supplies_stock.js"></script>