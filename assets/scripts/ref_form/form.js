function FormList() {
    var data = new Object();
    data.id = "FormTable";
    data.link = baseURL + "Ref_Form/FormList";
    data.type = "POST";
    data.coldef = [{
        targets: [2],
        render: function (data, type, row) {
            switch (data) {
                case 'A':
                    return '<i class="fa fa-check text-success">&nbspActive</i>';
                    break;
                case 'I':
                    return '<i class="fa fa-remove text-danger">&nbspInactive</i>';
                    break;
                default:
                    return '';
            }
        },
    },
    {
        targets: [0, 1, 2, 3],
        orderable: false,
    },
    {
        targets: [2, 3],
        searchable: false,
    }
    ];
    loadTable(data);
}

function AddForm() {
    $('#ModalAddForm').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('insert');
    $('#status option[value="A"]').prop("selected", true);
    $("#key").prop('readonly', false);
}

$("#FormTable").on("click", ".ModalEditForm", function () {
    var data = $(this).data();
    var formcode = atob(data['formcode']);
    var formdesc = atob(data['formdesc']);
    var formstat = atob(data['formstat']);

    $('#ModalAddForm').modal({ backdrop: 'static' }).draggable({});
    $("#addID").val('update');
    $("#key").val(formcode);
    $("#fdesc").val(formdesc);
    $('#status option[value="' + formstat + '"]').prop("selected", true);
    $("#key").prop('readonly', true);
});

$("#FormTable").on("click", ".ModalDeleteForm", function () {
    var data = $(this).data();
    var formcode = atob(data['formcode']);
    var formdesc = atob(data['formdesc']);
    
    $('#DeleteForm').modal({ backdrop: 'static' }).draggable({});
    $("#formID").val('delete');
    $("#deletekey").val(formcode);
    $("#desc").text(formdesc);
});