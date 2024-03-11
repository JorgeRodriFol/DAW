$(document).ready(function () {
  // Manejar el evento de clic en la pregunta del acordeón
  $(".faq-question").click(function () {
    // Alternar la visibilidad de la respuesta
    $(this).next(".faq-answer").slideToggle();

    // Cambiar el ícono de flecha hacia arriba/abajo
    $(this).toggleClass("active");
  });
});
