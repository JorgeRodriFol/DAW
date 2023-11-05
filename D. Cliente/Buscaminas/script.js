let tabla = document.querySelector(".tablero");

for (let i = 0; i < 8; i++) {
  let fila = document.createElement("tr");
  for (let j = 0; j < 8; j++) {
    let casilla = document.createElement("td");
    casilla.classList.add(i + "-" + j);
    casilla.textContent = parseInt(Math.random() * 2);
    casilla.addEventListener("click", function () {
      alert(casilla.classList);
    });
    fila.appendChild(casilla);
  }
  tabla.appendChild(fila);
}

/*const tablero = [];
for (let i = 0; i < 8; i++) {
  const fila = [];
  for (let j = 0; j < 8; j++) {
    fila[j] = parseInt(Math.random() * 2);
  }
  tablero[i] = fila;
}*/
