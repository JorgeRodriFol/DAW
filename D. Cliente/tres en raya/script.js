var modo = "nueve";
var fichasJ1 = 0;
var fichasJ2 = 0;
var victorias = 0;
var derrotas = 0;
var empates = 0;
var tiempo = 0;
let cronometro;
let fin = false;
var turno = 1;

iniciarTiempo();

function jugadaJ1(id, jugador) {
  if (!fin) {
    let casilla = document.getElementById(id);
    if (modo == "nueve") {
      if (casilla.className == "none") {
        pintarFicha(casilla, jugador);
        setTimeout(comprobarVictoria, 250);
      }
    } else {
      if (fichasJ1 < 3 && casilla.className == "none") {
        pintarFicha(casilla, "j1");
        fichasJ1++;
        setTimeout(comprobarVictoria, 250);
      } else if (fichasJ1 == 3 && casilla.className == "none") {
        alert("Deberas mover una de tus otras fichas");
      } else if (fichasJ1 == 3 && casilla.className == "j1") {
        casilla.innerHTML = "";
        casilla.className = "none";
        fichasJ1--;
      }
    }
  }
}

function cambiarModo(nuevoModo) {
  modo = nuevoModo;
  reiniciar();
}

function comprobarVictoria() {
  const tablero = document.querySelectorAll(".tablero button");
  if (
    (tablero[0].className == "j1" &&
      tablero[1].className == "j1" &&
      tablero[2].className == "j1") ||
    (tablero[3].className == "j1" &&
      tablero[4].className == "j1" &&
      tablero[5].className == "j1") ||
    (tablero[6].className == "j1" &&
      tablero[7].className == "j1" &&
      tablero[8].className == "j1") ||
    (tablero[0].className == "j1" &&
      tablero[4].className == "j1" &&
      tablero[8].className == "j1") ||
    (tablero[6].className == "j1" &&
      tablero[4].className == "j1" &&
      tablero[2].className == "j1") ||
    (tablero[0].className == "j1" &&
      tablero[3].className == "j1" &&
      tablero[6].className == "j1") ||
    (tablero[1].className == "j1" &&
      tablero[4].className == "j1" &&
      tablero[7].className == "j1") ||
    (tablero[2].className == "j1" &&
      tablero[5].className == "j1" &&
      tablero[8].className == "j1")
  ) {
    alert("Victoria del Jugador 1");
    let victoriaJ1 = document.querySelector("#victoriaJ1");
    let derrotaJ2 = document.querySelector("#derrotaJ2");
    victorias++;
    victoriaJ1.innerHTML = victorias;
    derrotaJ2.innerHTML = victorias;
    fin = true;
    detenerCronometro();
  } else if (
    (tablero[0].className == "j2" &&
      tablero[1].className == "j2" &&
      tablero[2].className == "j2") ||
    (tablero[3].className == "j2" &&
      tablero[4].className == "j2" &&
      tablero[5].className == "j2") ||
    (tablero[6].className == "j2" &&
      tablero[7].className == "j2" &&
      tablero[8].className == "j2") ||
    (tablero[0].className == "j2" &&
      tablero[4].className == "j2" &&
      tablero[8].className == "j2") ||
    (tablero[6].className == "j2" &&
      tablero[4].className == "j2" &&
      tablero[2].className == "j2") ||
    (tablero[0].className == "j2" &&
      tablero[3].className == "j2" &&
      tablero[6].className == "j2") ||
    (tablero[1].className == "j2" &&
      tablero[4].className == "j2" &&
      tablero[7].className == "j2") ||
    (tablero[2].className == "j2" &&
      tablero[5].className == "j2" &&
      tablero[8].className == "j2")
  ) {
    alert("Victoria del Jugador 2");
    let victoriaJ2 = document.querySelector("#victoriaJ2");
    let derrotaJ1 = document.querySelector("#derrotaJ1");
    derrotas++;
    victoriaJ2.innerHTML = derrotas;
    derrotaJ1.innerHTML = derrotas;
    fin = true;
    detenerCronometro();
  }
  turno++;
  if (turno % 2 == 0 && !fin) {
    jugadaJ2();
  }
}

function iniciarTiempo() {
  tiempo = 0;
  document.querySelector(".tJuego h1").textContent = "00:00";
  cronometro = setInterval(actualizarCronometro, 10);
}

function actualizarCronometro() {
  tiempo += 10;
  const minutos = Math.floor(tiempo / (60 * 1000));
  const segundos = Math.floor((tiempo % (60 * 1000)) / 1000);
  document.querySelector(".tJuego h1").textContent =
    minutos.toString().padStart(2, "0") +
    ":" +
    segundos.toString().padStart(2, "0");
}

function detenerCronometro() {
  clearInterval(cronometro);
}

function jugadaJ2() {
  let casillaAnterior = null;
  const tablero = document.querySelectorAll(".tablero button");
  let jugado = false;
  while (!jugado) {
    if (modo == "nueve") {
      idCasilla = parseInt(Math.random() * 9);
      if (tablero[idCasilla].className == "none") {
        pintarFicha(tablero[idCasilla], "j2");
        jugado = true;
        setTimeout(comprobarVictoria, 250);
      }
    } else {
      if (fichasJ2 == 3) {
        let fichaQuitada = false;
        while (!fichaQuitada) {
          idCasilla = parseInt(Math.random() * 9);
          if (tablero[idCasilla].className == "j2") {
            tablero[idCasilla].innerHTML = "";
            tablero[idCasilla].className = "none";
            fichasJ2--;
            fichaQuitada = true;
            casillaAnterior = idCasilla;
          }
        }
      }
      if (casillaAnterior == null) {
        idCasilla = parseInt(Math.random() * 9);
        if (tablero[idCasilla].className == "none") {
          let ficha = document.createElement("div");
          ficha.style.borderRadius = "50%";
          ficha.style.border = "none";
          ficha.style.backgroundColor = "blue";
          ficha.style.height = "75px";
          ficha.style.width = "75px";
          tablero[idCasilla].appendChild(ficha);
          tablero[idCasilla].className = "j2";
          fichasJ2++;
          jugado = true;
          setTimeout(comprobarVictoria, 250);
        }
      } else {
        idCasilla = parseInt(Math.random() * 9);
        if (
          tablero[idCasilla].className == "none" &&
          idCasilla != casillaAnterior
        ) {
          let ficha = document.createElement("div");
          ficha.style.borderRadius = "50%";
          ficha.style.border = "none";
          ficha.style.backgroundColor = "blue";
          ficha.style.height = "75px";
          ficha.style.width = "75px";
          tablero[idCasilla].appendChild(ficha);
          tablero[idCasilla].className = "j2";
          fichasJ2++;
          jugado = true;
          setTimeout(comprobarVictoria, 250);
        }
      }
    }
  }
}

function reiniciar() {
  detenerCronometro();
  iniciarTiempo();
  fichasJ1 = 0;
  fichasJ2 = 0;
  turno = 1;
  let casillas = document.querySelectorAll(".tablero button");
  for (let i = 0; i < casillas.length; ++i) {
    casillas[i].innerHTML = "";
    casillas[i].className = "none";
  }
  fin = false;
}

function pintarFicha(casilla, jugador) {
  let ficha = document.createElement("div");
  ficha.style.borderRadius = "50%";
  ficha.style.border = "none";
  switch (jugador) {
    case "j1":
      ficha.style.backgroundColor = "red";
      break;
    case "j2":
      ficha.style.backgroundColor = "blue";
      break;
  }

  ficha.style.height = "75px";
  ficha.style.width = "75px";
  casilla.appendChild(ficha);
  casilla.className = jugador;
}
