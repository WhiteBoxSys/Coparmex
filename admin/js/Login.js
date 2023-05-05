document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("FormLogin").addEventListener("submit", FormLogin);
});
async function FormLogin(e) {
  e.preventDefault();
  var form = document.getElementById("FormLogin");
  let data = new FormData(form);
  data.append("accion", "agregar");
  fetch("../controllers/LoginUser.php", {
    method: "POST",
    body: data,
  })
    .then((result) => result.text())
    .then((result) => {
      if (result == 1) {
        document.getElementById("success").style.display = "inherit";
        document.getElementById("wrong").style.display = "none";
        setTimeout(function () {
          window.location.href = "index.php";
        }, 5000);
      } else {
        document.getElementById("success").style.display = "none";
        document.getElementById("wrong").style.display = "inherit";
        setTimeout(function () {
          location.reload();
        }, 3000);
      }
    });
}
