$(document).ready(function () {
    // add serch and number of rows to show
    if (!$.fn.DataTable.isDataTable('#access_log')) {
        $('#access_log').DataTable({
            responsive: true,
            "paging": false,
            "pageLength": 50,
            "lengthMenu": [10, 20, 30, 50],

        });
    }
    if (!$.fn.DataTable.isDataTable('#users')) {
        $('#users').DataTable({
            responsive: true,
            "paging": true,
            "pageLength": 10,
            "lengthMenu": [10, 20, 30, 50],

        });
    }
});
