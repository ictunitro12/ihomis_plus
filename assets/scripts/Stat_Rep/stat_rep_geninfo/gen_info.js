function GenInfo() {
    $.ajax({
        url: baseURL + "Rep_Statistical/GeneralInformation_Dataload/",
        type: "POST",
        dataType: "JSON",
        processData: false,
        cache: false,
        async: true,
        success: function (data, response) {
            var obj = data;
            $('#servcapgen').val(obj['hservcapgeneral']);
            $('#servcapspe').val(obj['hservcapspecial']);
            $('#trauma').val(obj['trauma']);
            $('#owner').val(obj['howner']);
            $('#coh').val(obj['coh']);
            $('#scsspecify').val(obj['specialtyspecify']);
            $('#pspecify').val(obj['ownershipspecify']);

            var servcapgen_a = document.getElementById('servcapgen').value;
            var servcapspe_a = document.getElementById('servcapspe').value;
            var trauma_a = document.getElementById('trauma').value;
            var owner_a = document.getElementById('owner').value;
            var coh_a = document.getElementById('coh').value;
            var scsspecify_a = document.getElementById('scsspecify').value;
            var pspecify_a = document.getElementById('pspecify').value;

            document.getElementById('servcapgen').innerHTML = servcapgen_a;
            document.getElementById('servcapspe').innerHTML = servcapspe_a;
            document.getElementById('trauma').innerHTML = trauma_a;
            document.getElementById('owner').innerHTML = owner_a;
            document.getElementById('coh').innerHTML = coh_a;
            document.getElementById('scsspecify').innerHTML = scsspecify_a;
            document.getElementById('pspecify').innerHTML = pspecify_a;
        },
        error: function (response) {
            toastr["error"]('<i class="fa fa-exclamation"></i>&nbsp' + "Error fetching data!");
        }
    });
}