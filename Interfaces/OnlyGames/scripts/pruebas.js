// Archivo: ../scripts/indexScript.js
$(document).ready(function () {
  // Selecciona los elementos con la clase 'flecha' y asigna un manejador de eventos
  $(".flecha").on("click", function () {
    // Obtiene el carrusel asociado al botón
    var carruselId = $(this).data("carrusel");
    var carrusel = $(".carrusel-" + carruselId);

    // Realiza la acción correspondiente según el botón
    if ($(this).hasClass("anterior")) {
      carrusel.cycle("prev");
    } else if ($(this).hasClass("siguiente")) {
      carrusel.cycle("next");
    }
  });

  // Configura los carruseles utilizando jQuery Cycle
  $(".carrusel").cycle({
    fx: "scrollHorz", // Efecto de transición (puedes cambiar a 'scrollHorz', 'scrollVert', etc.)
    speed: 1000, // Velocidad de la transición en milisegundos
    timeout: 3000, // Tiempo de espera entre imágenes en milisegundos
    pause: true,
  });
});
