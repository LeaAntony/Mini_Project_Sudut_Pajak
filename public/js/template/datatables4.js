document.addEventListener("DOMContentLoaded", function () {
    let table = document.getElementById("data-tables");
    let dataTable = new DataTable(table, {
        scrollX: true,
        pageLength: 10,
        lengthChange: false,
        columnDefs: [
            { targets: [0, 1, 2, 8], orderable: true },
            { targets: '_all', orderable: false }
        ]
    });
});