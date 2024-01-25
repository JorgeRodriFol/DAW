<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Suma</title>
</head>

<body>
  <h1>Calculadora de Suma</h1>

  <form id="formulario-suma" method="post">
    <label for="numero1">Número 1:</label>
    <input type="number" id="numero1" name="numero1" required>

    <label for="numero2">Número 2:</label>
    <input type="number" id="numero2" name="numero2" required>

    <button type="button" onclick="realizarSuma()">Sumar</button>
  </form>

  <p id="resultado"></p>

  <script>
    function realizarSuma() {
      // Obtener los valores de los números desde el formulario
      var numero1 = document.getElementById('numero1').value;
      var numero2 = document.getElementById('numero2').value;

      // Crear un objeto FormData para enviar los datos
      var formData = new FormData();
      formData.append('numero1', numero1);
      formData.append('numero2', numero2);

      // Crear objeto XMLHttpRequest
      var xhr = new XMLHttpRequest();

      // Configurar la solicitud POST con el archivo php que realizará la suma
      xhr.open('POST', 'hora_servidor.php', true);

      // Configurar la función de callback para manejar la respuesta
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Actualizar el contenido de la página con el resultado
          document.getElementById('resultado').innerText = 'Resultado: ' + xhr.responseText;
        }
      };

      // Enviar la solicitud con los datos del formulario
      xhr.send(formData);
    }
  </script>
</body>

</html>