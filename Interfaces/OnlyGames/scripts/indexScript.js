$(document).ready(function () {
  $("#myModal").fadeIn();

  // Cerrar la ventana modal al hacer clic en la "X" o fuera del contenido
  $("#myModal, #closeModal").click(function (e) {
    if (e.target === this || e.target.id === "closeModal") {
      $("#myModal").fadeOut();
    }
  });

  // Evitar que el clic en el contenido de la ventana modal la cierre
  $(".modal-content").click(function (e) {
    e.stopPropagation();
  });

  var indexNovedades = 0;
  var novedades = $("#novedades .tarjeta");
  var totalnovedades = novedades.length / 10;

  // Manejar clic en botón "Siguiente"
  $("#novedades #siguiente").click(function () {
    if (indexNovedades < totalnovedades - 1) {
      indexNovedades++;
    } else {
      indexNovedades = 0;
    }
    actualizarCarruselNovedades();
  });

  // Manejar clic en botón "Anterior"
  $("#novedades #anterior").click(function () {
    if (indexNovedades > 0) {
      indexNovedades--;
    } else {
      indexNovedades = totalnovedades - 1;
    }
    actualizarCarruselNovedades();
  });

  // Actualizar la posición del carrusel
  function actualizarCarruselNovedades() {
    var translateValue = -indexNovedades * 15 + "%";
    console.log(translateValue);
    $("#novedades .productos").css(
      "transform",
      "translateX(" + translateValue + ")"
    );
  }

  var indexValorados = 0;
  var valorados = $("#mejorValoradas .tarjeta");
  var totalValorados = valorados.length / 6;

  // Manejar clic en botón "Siguiente"
  $("#mejorValoradas #siguiente").click(function () {
    if (indexValorados < totalValorados - 1) {
      indexValorados++;
    } else {
      indexValorados = 0;
    }
    actualizarCarruselValorados();
  });

  // Manejar clic en botón "Anterior"
  $("#mejorValoradas #anterior").click(function () {
    if (indexValorados > 0) {
      indexValorados--;
    } else {
      indexValorados = totalValorados - 1;
    }
    actualizarCarruselValorados();
  });

  // Actualizar la posición del carrusel
  function actualizarCarruselValorados() {
    var translateValue = -indexValorados * 15 + "%";
    $("#mejorValoradas .productos").css(
      "transform",
      "translateX(" + translateValue + ")"
    );
  }
});
