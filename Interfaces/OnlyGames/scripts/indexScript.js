$(document).ready(function () {
  setInterval(function () {
    // asignamos a una variable el valor de los elementos primero
    var primero = $("ul#slideshow").find("li").eq(0);
    // lo mostramos en un segudo y lo ocultamos en un segundo
    $(primero).fadeIn(1500).fadeOut(1500);
    // añadimos el primer elemento al final, con lo que pasa a ser el último
    $("ul#slideshow").append($(primero));
  }, 3000);
});
