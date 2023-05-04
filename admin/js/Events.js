function eliminarEvento(id) {
  const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
      confirmButton: "btn btn-success",
      cancelButton: "btn btn-danger",
    },
    buttonsStyling: false,
  });
  swalWithBootstrapButtons
    .fire({
      title: "Estas seguro que deseas eliminar el blog?",
      text: "¡No podrás revertir esto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Si, eliminar",
      cancelButtonText: "No, cancelar!",
      reverseButtons: true,
    })
    .then((result) => {
      if (result.isConfirmed) {
        let data = new FormData();
        data.append("id", id);
        data.append("caso", "eliminar");
        fetch("../controllers/NoticeController.php", {
          method: "POST",
          body: data,
        })
          .then((result) => result.text())
          .then((result) => {
            if (result == 1) {
              swalWithBootstrapButtons.fire(
                "Eliminado!",
                "Su archivo ha sido eliminado.",
                "success"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            } else {
              swalWithBootstrapButtons.fire(
                "Error",
                "Hemos tenido un error a la base de datos o la conexión.",
                "error"
              );
              setTimeout(function () {
                location.reload();
              }, 3000);
            }
          });
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          "Cancelado",
          "Tu archivo ha sido salvado",
          "error"
        );
      }
    });
}
document.addEventListener("DOMContentLoaded", function () {
  document
    .getElementById("AltaDeNoticias")
    .addEventListener("submit", crearCliente);
});
async function crearCliente(e) {
  e.preventDefault();
  var form = document.getElementById("AltaDeNoticias");
  let data = new FormData(form);
  data.append("caso", "agregar");
  fetch("../controllers/NoticeController.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      document.getElementById("successmessage").style.display = "inherit";
      setTimeout(function () {
        location.reload();
      }, 3000);
      form.reset();
    });
}