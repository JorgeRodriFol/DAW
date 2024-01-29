var modo = "nueve";
var fichasJ1 = 0;

function ponerFicha(id) {
  let casilla = document.getElementById(id);
  if (modo == "nueve") {
    if (casilla.className == "false") {
      let ficha = document.createElement("div");
      ficha.style.borderRadius = "50%";
      ficha.style.border = "none";
      ficha.style.backgroundColor = "red";
      ficha.style.height = "75px";
      ficha.style.width = "75px";
      casilla.appendChild(ficha);
      casilla.className = "true";
    }
  } else {
    if (fichasJ1 < 3 && casilla.className == "false") {
      let ficha = document.createElement("div");
      ficha.style.borderRadius = "50%";
      ficha.style.border = "none";
      ficha.style.backgroundColor = "red";
      ficha.style.height = "75px";
      ficha.style.width = "75px";
      casilla.appendChild(ficha);
      casilla.className = "true";
      fichasJ1++;
    } else if (fichasJ1 == 3 && casilla.className == "false") {
      alert("Deberas mover una de tus otras fichas");
    } else {
      casilla.innerHTML = "";
      casilla.className = "false";
      fichasJ1--;
    }
  }
}

function cambiarModo(nuevoModo) {
  modo = nuevoModo;
  let casillas = document.querySelectorAll(".tablero button");
  fichasJ1 = 0;
  for (let i = 0; i < casillas.length; ++i) {
    casillas[i].innerHTML = "";
    casillas[i].className = "false";
  }
}
