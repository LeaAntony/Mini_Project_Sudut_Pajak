document.addEventListener("DOMContentLoaded", function () {
    let table = document.getElementById("data-tables");
    let dataTable = new DataTable(table, {
        scrollX: true,
        pageLength: 5,
        lengthChange: false,
        columnDefs: [
            { targets: [0, 1, 2, 4], orderable: true },
            { targets: '_all', orderable: false }
        ]
    });
});