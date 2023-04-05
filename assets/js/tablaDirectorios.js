$(document).ready(function () {
  var oTable = $("#directory-table").dataTable({
    aoColumnDefs: [
      {
        bSortable: true,
        aTargets: [0],
      },
    ],
    aaSorting: [[3, "asc"]],
    dom: "Bfrtip",
    buttons: ["csv", "excel", "pdf"],
  });
});
