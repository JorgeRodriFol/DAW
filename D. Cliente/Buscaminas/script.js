var tablero = [];
var rows = 8;
var cols = 8;

inicializarTablero();
pintarTablero();

function inicializarTablero() {
  for (let i = 0; i < rows; i++) {
    let tr = document.createElement("tr");
    const fila = [];
    for (let j = 0; j < cols; j++) {
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

  let count = 0;
  for (let i = 0; i < tablero.length; ++i) {
    for (let j = 0; j < tablero[i].length; j++) {
      if (tablero[i][j].classList == 0) {
        tablero[i][j].classList = minasCercanas(i, j);
      }
    }
  }
}

function minasCercanas(row, col) {
  let count = 0;
  for (let i = -1; i <= 1; i++) {
    for (let j = -1; j <= 1; j++) {
      const newRow = row + i;
      const newCol = col + j;

      if (newRow >= 0 && newRow < rows && newCol >= 0 && newCol < cols) {
        if (tablero[newRow][newCol].classList == -1) {
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
          alert("Explotastes");
          location.reload();
        } else {
          tablero[i][j].textContent = tablero[i][j].classList;
        }
      });
      fila.appendChild(tablero[i][j]);
    }
    tabla.appendChild(fila);
  }
}
