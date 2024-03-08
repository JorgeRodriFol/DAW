var formValido = false;

$("input").on("blur", function () {
  if ($(this).val() == "") {
    $(this).css("border-image", "none");
    $(this).css("border-color", "red");
  } else {
    $(this).css("border-color", "none");
    $(this).css(
      "border-image",
      "linear-gradient(to bottom, #0099ff, #cc00fff9)"
    );
    $(this).css("border-image-slice", "1");
  }
});

$("#password").on("input", function () {
  let seguridad = validarFortalezaContraseña($("#password").val());
  if (seguridad == "Fuerte" || seguridad == "Medio") {
    formValido = true;
  } else {
    formValido = false;
  }
  $(".seguridad").text(seguridad);
});

function validarFortalezaContraseña(password) {
  var longitudMinima = 8;
  var tieneLetras = /[a-zA-Z]/.test(password);
  var tieneNumeros = /\d/.test(password);
  var tieneCaracteresEspeciales = /[!@#$%^&*(),.?":{}|<>]/.test(password);

  // Evalúa las reglas y devuelve una clasificación
  if (
    password.length >= longitudMinima &&
    tieneLetras &&
    tieneNumeros &&
    tieneCaracteresEspeciales
  ) {
    return "Fuerte";
  } else if (
    password.length >= longitudMinima &&
    (tieneLetras || tieneNumeros)
  ) {
    return "Media";
  } else {
    return "Debil";
  }
}
