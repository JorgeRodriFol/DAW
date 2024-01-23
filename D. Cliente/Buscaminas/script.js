var tablero = [];
var filas = 8;
var columnas = 8;

inicializarTablero();
pintarTablero();

function inicializarTablero() {
  for (let i = 0; i < filas; i++) {
    const fila = [];
    for (let j = 0; j < columnas; j++) {
      let casilla = document.createElement("td");
      casilla.classList.add(0);
      fila[j] = casilla;
    }
    tablero[i] = fila;
  }

  let numMinas = 10;
  let minasPuestas = 0;
  while (minasPuestas <= numMinas) {
    let fila = parseInt(Math.random() * tablero.length);
    let columna = parseInt(Math.random() * tablero[fila].length);
    if (tablero[fila][columna].classList == 0) {
      tablero[fila][columna].classList = -1;
      minasPuestas++;
    }
  }

  for (let i = 0; i < tablero.length; ++i) {
    for (let j = 0; j < tablero[i].length; j++) {
      if (tablero[i][j].classList == 0) {
        tablero[i][j].classList = minasCercanas(i, j);
      }
    }
  }
}

function minasCercanas(fila, columna) {
  let count = 0;
  for (let i = -1; i <= 1; i++) {
    for (let j = -1; j <= 1; j++) {
      const nuevaFila = fila + i;
      const nuevaColumna = columna + j;

      if (
        nuevaFila >= 0 &&
        nuevaFila < filas &&
        nuevaColumna >= 0 &&
        nuevaColumna < columnas
      ) {
        if (tablero[nuevaFila][nuevaColumna].classList == -1) {
          count++;
        }
      }
    }
  }
  return count;
}

function pintarTablero() {
  let tabla = document.querySelector(".tablero");
  for (let i = 0; i < tablero.length; i++) {
    let fila = document.createElement("tr");
    for (let j = 0; j < tablero[i].length; ++j) {
      tablero[i][j].addEventListener("click", function () {
        if (tablero[i][j].classList == -1) {
          alert("Explotaste");
          location.reload();
        } else {
          mostrarCasillasAlrededor(i, j);
        }
      });
      fila.appendChild(tablero[i][j]);
    }
    tabla.appendChild(fila);
  }
}
function mostrarCasillasAlrededor(fila, columna) {
  if (tablero[fila][columna].classList == 0) {
    for (let i = -1; i <= 1; i++) {
      for (let j = -1; j <= 1; j++) {
        const nuevaFila = fila + i;
        const nuevaColumna = columna + j;

        if (
          nuevaFila >= 0 &&
          nuevaFila < filas &&
          nuevaColumna >= 0 &&
          nuevaColumna < columnas &&
          tablero[nuevaFila][nuevaColumna].classList >= 0
        ) {
          tablero[nuevaFila][nuevaColumna].textContent =
            tablero[nuevaFila][nuevaColumna].classList;
        }
      }
    }
  }
  tablero[fila][columna].textContent = tablero[fila][columna].classList;
}
