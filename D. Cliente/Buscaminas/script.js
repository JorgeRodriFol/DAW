var tablero = [];
var filas = 8;
var columnas = 8;

inicializarTablero();
pintarTablero();

function inicializarTablero() {
  for (let i = 0; i < filas; i++) {
    let tr = document.createElement("tr");
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

      if (newRow >= 0 && newRow < filas && newCol >= 0 && newCol < columnas) {
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
      tablero[i][j].addEventListener("mousedown", function (event) {
        if (event.which === 1) {
          if (tablero[i][j].classList == -1) {
            alert("Explotaste");
            location.reload();
          } else {
            mostrarCasillasAlrededor(i, j);
          }
        } else if (event.which === 3) {
          event.preventDefault();
          tablero[i][j].textContent = "X";
        }
      });
      fila.appendChild(tablero[i][j]);
    }
    tabla.appendChild(fila);
  }
}
function mostrarCasillasAlrededor(row, col) {
  if (tablero[row][col].classList == 0) {
    for (let i = -1; i <= 1; i++) {
      for (let j = -1; j <= 1; j++) {
        const newRow = row + i;
        const newCol = col + j;

        if (newRow >= 0 && newRow < filas && newCol >= 0 && newCol < columnas && tablero[newRow][newCol].classList >= 0) {
          
          tablero[newRow][newCol].textContent = tablero[newRow][newCol].classList;
        }
      }
    }
  } else {
    tablero[row][col].textContent = tablero[row][col].classList;
  }
}
