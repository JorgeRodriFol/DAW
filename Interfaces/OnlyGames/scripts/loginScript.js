var formValido = false;

$("form input").on("blur", function () {
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

$("#correo").on("blur", function () {
  let correoValido = validarCorreo($("#correo").val());
  if (correoValido) {
    $(this).css("border-color", "none");
    $(this).css(
      "border-image",
      "linear-gradient(to bottom, #0099ff, #cc00fff9)"
    );
    $(this).css("border-image-slice", "1");
  } else {
    $(this).css("border-image", "none");
    $(this).css("border-color", "red");
  }
});

function validarFortalezaContraseña(password) {
  console.log("Hola");
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
    return "Medio";
  } else {
    return "Debil";
  }
}

function validarCorreo(correo) {
  var expresionRegular = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
  console.log(expresionRegular.test(correo));
  return expresionRegular.test(correo);
}

$("form").submit(function (event) {
  if (!formValido) {
    event.preventDefault();
    alert(
      "Asegurate de que todos los campos están rellenados correctamente correctos"
    );
    var inputs = $("form input");

    inputs.each(function () {
      if ($(this).val() === "") {
        $(this).css("border-image", "none");
        $(this).css("border-color", "red");
      } else {
        console.log($(this).attr("id"));
        if ($(this).attr("id") == "password") {
          let seguridad = validarFortalezaContraseña($("#password").val());
          if (seguridad == "Fuerte" || seguridad == "Medio") {
            $(this).css("border-color", "none");
            $(this).css(
              "border-image",
              "linear-gradient(to bottom, #0099ff, #cc00fff9)"
            );
            $(this).css("border-image-slice", "1");
          } else {
            $(this).css("border-image", "none");
            $(this).css("border-color", "red");
          }
          $(".seguridad").text(seguridad);
        } else {
          if ($(this).attr("id") == "correo") {
            let correoValido = validarCorreo($("#correo").val());
            if (correoValido) {
              $(this).css("border-color", "none");
              $(this).css(
                "border-image",
                "linear-gradient(to bottom, #0099ff, #cc00fff9)"
              );
              $(this).css("border-image-slice", "1");
            } else {
              $(this).css("border-image", "none");
              $(this).css("border-color", "red");
            }
          } else {
            $(this).css("border-color", "none");
            $(this).css(
              "border-image",
              "linear-gradient(to bottom, #0099ff, #cc00fff9)"
            );
            $(this).css("border-image-slice", "1");
          }
        }
      }
    });
  }
});
