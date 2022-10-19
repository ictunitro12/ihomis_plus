function Progressnotes(enccode) {
    var enctr = encodeURIComponent(encodeURIComponent(enccode));
    var data = new Object();
    data.id = "progressnotesList";
    data.link = baseURL + "PatientRecords/progressnotesList/" + enctr;
    data.type = "POST";
/*    data.paging = false;
 	data.info = false;
	data.searching = false;
	data.destroy = true; */
    data.coldef = [
        {
            targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            orderable: false,
        },
        {
            targets: [0, 2, 4, 5, 6, 8],
            searchable: false,
        },
        {
            targets: [0, 1, 3, 4, 6],
            visible: false,
        }
    ];
    loadTable(data);
}

function addProgressnotes(enccode, hpercode) {
    uppercase();
    $('#progressnotesModal').modal({ backdrop: 'static' }).draggable({});
    $('#progressnotesformIden').val("insert");
    $('#progressdate').val(getTimeLocale());
    $('#progressnotesEnccode').val(atob(enccode));
    $('#progressnotesHpercode').val(atob(hpercode));
    $("#progressdate").prop('readonly', false);
    selDoctor($("#frmprogressnotes"));
}

$('#progressnotesList').on('click', '#btnEditprogressnotes', function () {
    $('#progressnotesModal').modal({ backdrop: 'static' }).draggable({});

    var enccode = atob($(this).data('enccode'));
    var progdte = atob($(this).data('progdte'));
    var enctr = encodeURIComponent(encodeURIComponent(enccode));
    var log = encodeURIComponent(encodeURIComponent(progdte));

    $.ajax({
        type: "POST",
        url: baseURL + "PatientRecords/progressnotesInfo/" + enctr + '/' + log,
        data: "JSON",
        async: false,
        success: function (data) {
            var now = new Date();
            obj = $.parseJSON(data);
            $('#progressnotesformIden').val('update');
            $('#progressdate').val(setTimeLocale(obj['progdte']));
            $("#progressdate").prop('readonly', false);
            $('#progressnotesEnccode').val(enccode);
            $('#progressnotesHpercode').val(hpercode);
            $('#progrem').val(obj['progrem']);
            var progtype = obj['progtype'];
            $('#progtype option[value="' + progtype + '"]').prop("selected", true);
            var licno = obj['licno'];
            selDoctor($("#frmprogressnotes"));
            setDoc(licno);
        },
        error: function (data) {
            alert("Error fetching patient progress notes.");
        }
    });
});

$('#frmprogressnotes').validate({
    submitHandler: function (form) {
        var POSTURL = baseURL + "PatientRecords/saveProgressnotes";
        $.ajax({
            type: "POST",
            url: POSTURL,
            dataType: "JSON",
            cache: false,
            async: true,
            data: $(form).serialize(),
            success: function (data) {
                if ($('#progressnotesformIden').val() == 'insert') {
                    $("#progressnotesModal").modal('hide');
                    toastr.success('Record successfully saved.', 'Success');
                    Progressnotes(enccode);
                } else if ($('#progressnotesformIden').val() == 'update') {
                    toastr.success('Record successfully updated.', 'Success');
                    $("#progressnotesModal").modal('hide');
                    Progressnotes(enccode);
                } else if ($('#progressnotesformIden').val() == 'delete') {

                } else {
                    toastr.error('no post', 'data');
                }
            },
            error: function (data, xhr, text) {
                toastr.error(data, 'data');
                toastr.error(xhr, 'xhr');
                toastr.error(text, 'text');
            }
        });
        return false;
        $(form).submit();
    },
    rules: {
        progressdate: 'required',
        progtype: 'required',
        doc_doc: 'required',
        progrem: 'required'
    },
    errorElement: 'span',
    errorPlacement: function errorPlacement(error, element) {
        error.addClass('invalid-feedback');
        error.insertAfter(element);
    },
    highlight: function highlight(element) {
        $(element).addClass('is-invalid').removeClass('is-valid');
        if ($(element).hasClass('select2-offscreen')) {
            element = $("#s2id_" + element.attr("id") + " ul").parent();
            $(element).addClass('is-invalid').removeClass('is-valid');
        }
    },
    unhighlight: function unhighlight(element) {
        $(element).addClass('is-valid').removeClass('is-invalid');
        if ($(element).hasClass('select2-offscreen')) {
            $("#s2id_" + element.attr("id") + " ul").removeClass('is-invalid').addClass('is-valid');
        }
    }
});

$('#progressnotesList').on('click', '#btnDeleteprogressnotes', function () {
    var enccode = atob($(this).data('enccode'));
    var datelog = atob($(this).data('progdte'));
    var today = new Date(datelog);
    var datelog1 = today.toLocaleString("en-US");
    $("#deleteprogressnotesModal").modal({ backdrop: 'static' }).draggable({});
    $("#delprogressnotesEnccode").val(enccode);
    $("#delprogressdate").val(datelog);
    $("#delnamepn").text(datelog1);
    $("#progressnotesformIdenDelete").val("delete");
});

$('#frmDeleteprogressnotes').on('submit', function (e) {
    var form = this;
    $.ajax({
        type: "POST",
        url: baseURL + "PatientRecords/saveProgressnotes",
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data, response) {
            $('#deleteprogressnotesModal').modal('hide');
            toastr.success('Record successfully deleted. ', 'Success');
            Progressnotes(enccode);
        },
        error: function (xhr, desc, err) {
            toastr.error(xhr, 'Error');
        }
    });
    return false;
});

$("#progressnotesModal").on('hidden.coreui.modal', function () {
    $('#doc_doc').empty().trigger("change");
});