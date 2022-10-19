<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/plugin/datatables/extensions/Responsive/css/dataTables.responsive.css">

<div class="card card-accent-success">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6 col-md-auto	">
                <div class="h4 text text-success">
                    <i class="fa fa-file-text-o"></i>
                    &nbsp<?php echo $header; ?>&nbsp;&nbsp;<small><?php echo $subheader; ?></small>
                </div>
            </div>
            <div class="col-md-6 col-md-auto">
                <div class="btn-group pull-right" title="Add Laboratory Data" role="group" aria-label="">
                <a href="javascript:void(0)" onclick="history.go(-1)" type="button" class="btn btn-success btn-md btn-ladda" data-style="zoom-in" title="Sub-2"><i class="fa fa-arrow-left"></i></a>
                    <button onclick="AddLaboratoryData()" class="btn btn-success btn-md btn-ladda" data-style="zoom-in"><i class="fa fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive">
        <table id="LaboratoryDataTable" class="table table-sm table-striped table-bordered table-condensed table-hover" width="100%">
            <thead class="thead-dark">
                <tr>
                    <th></th>
                    <th></th>
                    <th class="align-middle" width="15%">Date of Collection</th>
                    <th class="align-middle" width="15%">Date sent to RITM</th>
                    <th class="align-middle" width="15%">Date received RITM</th>
                    <th class="align-middle" width="15%">Result</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="align-middle" width="10%">Type of container</th>
                    <th class="align-middle" width="15%">Name of courier</th>
                    <th class="align-middle" width="15%">Received by</th>
                    <th class="align-middle">Actions</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="card-footer"></div>
</div>

<form name="frmLaboratoryData" id="frmLaboratoryData">
    <div class="modal fade" id="ModalAddLaboratoryData" name="ModalAddLaboratoryData" role="form">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title text-white"><i class="fa fa-plus"></i> <?php echo $subheader; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="formIden" id="formIden" value="">
                        <input type="hidden" name="enccode" id="enccode" value="">
                        <input type="hidden" name="hpercode" id="hpercode" value="">
                        <input type="hidden" name="ctr" id="ctr" value="">
                        <label class="col-md-4 col-form-label text-default mb-1">Date collected:</label>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dcollected" name="dcollected">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Date sent to RITM:</label>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dsent" name="dsent">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Date received RITM:</label>
                        <div class="col-md-8">
                            <input type="datetime-local" class="form-control form-control-mb mb-1" autocomplete="off" id="dreceived" name="dreceived">
                        </div>

                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Result:</label>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb mb-1" id="labresult" name="labresult">
                                <option value="">Select</option>
                                <option value="WPV">Wild Poliovirus (WPV)</option>
                                <option value="SABIN">Sabin-like</option>
                                <option value="VDPV">Vaccine-derived poliovirus (VDPV)</option>
                                <option value="NEG">Negative (NEG)</option>
                                <option value="NPEV">Non Polio Entero Virus (NPEV)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1"></label>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb mb-1" id="labresultspecify" name="labresultspecify" disabled>
                                <option value="">Select</option>
                                <option value="1">Type 1</option>
                                <option value="2">Type 2</option>
                                <option value="3">Type 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Amount of stool:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-mb mb-1" id="aostool" name="aostool">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">No. of ice pack/s:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control form-control-mb mb-1" id="noipacks" name="noipacks">
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Qty of ice pack/s:</label>
                        <div class="col-md-8">
                            <select class="form-control form-control-mb mb-1" id="qoipacks" name="qoipacks">
                                <option value="">Select</option>
                                <option value="FROZEN">Frozen</option>
                                <option value="Thawed but cold">Thawed but cold</option>
                                <option value="WARM">Warm</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Type of container:</label>
                        <div class="col-md-8">
                            <textarea type="text" class="form-control form-control-mb mb-1" id="tocontainer" name="tocontainer"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Name of courier</label>
                        <div class="col-md-8">
                            <textarea type="text" class="form-control form-control-mb mb-1" id="nocourier" name="nocourier"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <label class="col-md-4 col-form-label text-default mb-1">Received by:</label>
                        <div class="col-md-8">
                            <textarea type="text" class="form-control form-control-mb mb-1" id="rby" name="rby"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer bg-secondary">
                    <button class="btn btn-success btn-ladda" data-style="zoom-in"><i class="fa fa-save"></i>&nbsp Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form name="frmDeleteLaboratoryData" id="frmDeleteLaboratoryData">
    <input type="hidden" name="formIdentification" id="formIdentification">
    <input type="hidden" name="deletecode" id="deletecode">
    <div class="modal fade" id="DeleteLaboratoryData" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-md" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white"><i class="far fa-eye-slash"></i>&nbsp <span id="key"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Do you want to proceed?</h4>
                </div>
                <div class="modal-footer bg-secondary">
                    <button type="submit" class="btn btn-danger btn-square btn-ladda" data-style="zoom-in"><i class="fa fa-trash"></i>&nbsp Delete</button>
                </div>
            </div>
        </div>
    </div>
</form>

<input type="hidden" name="base_url" id="base_url" value="<?php echo base_url(); ?>">
<input type="hidden" name="enccode" id="enccode">

<script type="text/javascript">
    $(document).ready(function() {
        var enccode = atob('<?php echo $this->uri->segment(3); ?>');
        var hpercode = atob('<?php echo $this->uri->segment(4); ?>');

        LaboratoryDataList(enccode, hpercode);
    });

    function AddLaboratoryData() {
        var enccode = atob('<?php echo $this->uri->segment(3); ?>');
        var hpercode = atob('<?php echo $this->uri->segment(4); ?>');

        $('#enccode').val(enccode);
        $('#hpercode').val(hpercode);
        $('#ModalAddLaboratoryData').modal({
            backdrop: 'static'
        }).draggable({});
        $("#formIden").val('insert');
    }
</script>
<script src="<?php echo base_url() ?>assets/scripts/afp/afp.js"></script>
<script src="<?php echo base_url() ?>assets/scripts/afp/labdata_validation.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>assets/scripts/afp/deletelabdata.js"></script>