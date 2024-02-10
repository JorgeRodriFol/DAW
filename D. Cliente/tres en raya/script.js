var modo = "nueve";
var modoJ2 = "aleatorio";
var fichasJ1 = 0;
var fichasJ2 = 0;
var victorias = 0;
var derrotas = 0;
var empates = 0;
var tiempo = 0;
var cronometro;
var fin = false;
var turno = 1;
const tablero = [];
var intervalo;

iniciarTiempo();
iniciarCuentaRegresiva();

function jugadaJugador(id, jugador) {
  if (!fin) {
    if (modoJ2 == "2jugadores" && turno % 2 == 0) {
      let casilla = document.getElementById(id);
      if (modo == "nueve") {
        if (casilla.className == "none") {
          pintarFicha(casilla, "j2");
          setTimeout(comprobarVictoria, 250);
        }
      } else {
        if (fichasJ2 < 3 && casilla.className == "none") {
          pintarFicha(casilla, "j2");
          fichasJ2++;
          setTimeout(comprobarVictoria, 250);
        } else if (fichasJ2 == 3 && casilla.className == "none") {
          alert("Deberas mover una de tus otras fichas");
        } else if (fichasJ2 == 3 && casilla.className == "j2") {
          casilla.innerHTML = "";
          casilla.className = "none";
          fichasJ2--;
        }
      }
    } else {
      let casilla = document.getElementById(id);
      if (modo == "nueve") {
        if (casilla.className == "none") {
          pintarFicha(casilla, jugador);
          setTimeout(comprobarVictoria, 250);
        }
      } else {
        if (fichasJ1 < 3 && casilla.className == "none") {
          pintarFicha(casilla, jugador);
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
    detenerRegresion();
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
    detenerRegresion();
  } else if (!fin) {
    let contador = 0;
    for (let i = 0; i < tablero.length; i++) {
      if (tablero[i].className == "none") {
        break;
      }
      contador++;
    }
    if (contador == tablero.length) {
      alert("Empate");
      let empateJ2 = document.querySelector("#empateJ2");
      let empateJ1 = document.querySelector("#empateJ1");
      empates++;
      empateJ2.innerHTML = empates;
      empateJ1.innerHTML = empates;
      fin = true;
      detenerCronometro();
      detenerRegresion();
    }
  }
  turno++;
  if (!fin) {
    reiniciarCuentaRegresiva();
    if (turno % 2 == 0 && modoJ2 != "2jugadores") {
      jugadaOrdenador();
    }
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

function jugadaOrdenador() {
  let casillaAnterior = null;
  const tablero = document.querySelectorAll(".tablero button");
  let jugado = false;
  if (modoJ2 == "aleatorio") {
    while (!jugado) {
      if (modo == "nueve") {
        let idCasilla = parseInt(Math.random() * 9);
        if (tablero[idCasilla].className == "none") {
          pintarFicha(tablero[idCasilla], "j2");
          jugado = true;
          setTimeout(comprobarVictoria, 250);
        }
      } else {
        if (fichasJ2 == 3) {
          let fichaQuitada = false;
          while (!fichaQuitada) {
            let idCasilla = parseInt(Math.random() * 9);
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
          let idCasilla = parseInt(Math.random() * 9);
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
          let idCasilla = parseInt(Math.random() * 9);
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
  } else if (modoJ2 == "ia") {
    if (modo == "nueve") {
      let idCasilla = mejorPosicion(tablero);
      pintarFicha(tablero[idCasilla], "j2");
      setTimeout(comprobarVictoria, 250);
    } else {
      if (fichasJ2 == 3) {
        let fichaQuitada = false;
        while (!fichaQuitada) {
          let idCasilla = parseInt(Math.random() * 9);
          if (tablero[idCasilla].className == "j2") {
            tablero[idCasilla].innerHTML = "";
            tablero[idCasilla].className = "none";
            fichasJ2--;
            fichaQuitada = true;
            casillaAnterior = idCasilla;
          }
        }
      }
      let idCasilla = mejorPosicion(tablero);
      pintarFicha(tablero[idCasilla], "j2");
      fichasJ2++;
      setTimeout(comprobarVictoria, 250);
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
  reiniciarCuentaRegresiva();
}

function pintarFicha(casilla, jugador) {
  let ficha = document.createElement("div");
  switch (jugador) {
    case "j1":
      ficha.style.backgroundColor = "red";
      ficha.style.borderRadius = "50%";
      break;
    case "j2":
      ficha.style.borderRadius = "25%";
      ficha.style.backgroundColor = "blue";
      break;
  }

  ficha.style.height = "75px";
  ficha.style.width = "75px";
  casilla.appendChild(ficha);
  casilla.className = jugador;
}

function cambiarModoJugador(nuevoModo) {
  modoJ2 = nuevoModo;
  reiniciar();
}

function iniciarCuentaRegresiva() {
  let tiempoRestante = 14;
  let tRestante = document.querySelector(".tRestante h1");
  intervalo = setInterval(() => {
    tRestante.innerHTML = "00:" + tiempoRestante.toString().padStart(2, "0");

    if (tiempoRestante <= 0) {
      turno++;
      if (modoJ2 == "2jugadores") {
        reiniciarCuentaRegresiva();
      } else {
        clearInterval(intervalo);
        jugadaOrdenador();
      }
    }

    tiempoRestante--;
  }, 1000);
}

function reiniciarCuentaRegresiva() {
  clearInterval(intervalo);
  iniciarCuentaRegresiva();
}

function detenerRegresion() {
  clearInterval(intervalo);
}

function mejorPosicion(tablero) {
  for (let i = 2; i > 0; i--) {
    let jugador = "j" + i;
    console.log(jugador);
    if (
      ((tablero[1].className == jugador && tablero[2].className == jugador) ||
        (tablero[3].className == jugador && tablero[6].className == jugador) ||
        (tablero[4].className == jugador && tablero[8].className == jugador)) &&
      tablero[0].className == "none"
    ) {
      return 0;
    } else if (
      ((tablero[0].className == jugador && tablero[2].className == jugador) ||
        (tablero[4].className == jugador && tablero[7].className == jugador)) &&
      tablero[1].className == "none"
    ) {
      return 1;
    } else if (
      ((tablero[0].className == jugador && tablero[1].className == jugador) ||
        (tablero[5].className == jugador && tablero[8].className == jugador) ||
        (tablero[4].className == jugador && tablero[6].className == jugador)) &&
      tablero[2].className == "none"
    ) {
      return 2;
    } else if (
      ((tablero[0].className == jugador && tablero[6].className == jugador) ||
        (tablero[4].className == jugador && tablero[5].className == jugador)) &&
      tablero[3].className == "none"
    ) {
      return 3;
    } else if (
      ((tablero[1].className == jugador && tablero[7].className == jugador) ||
        (tablero[3].className == jugador && tablero[5].className == jugador) ||
        (tablero[0].className == jugador && tablero[8].className == jugador)) &&
      tablero[4].className == "none"
    ) {
      return 4;
    } else if (
      ((tablero[2].className == jugador && tablero[8].className == jugador) ||
        (tablero[3].className == jugador && tablero[4].className == jugador)) &&
      tablero[5].className == "none"
    ) {
      return 5;
    } else if (
      ((tablero[7].className == jugador && tablero[8].className == jugador) ||
        (tablero[0].className == jugador && tablero[3].className == jugador) ||
        (tablero[2].className == jugador && tablero[4].className == jugador)) &&
      tablero[6].className == "none"
    ) {
      return 6;
    } else if (
      ((tablero[1].className == jugador && tablero[4].className == jugador) ||
        (tablero[6].className == jugador && tablero[8].className == jugador)) &&
      tablero[7].className == "none"
    ) {
      return 7;
    } else if (
      ((tablero[6].className == jugador && tablero[7].className == jugador) ||
        (tablero[2].className == jugador && tablero[5].className == jugador) ||
        (tablero[0].className == jugador && tablero[4].className == jugador)) &&
      tablero[8].className == "none"
    ) {
      return 8;
    }
  }

  let jugado = false;
  while (!jugado) {
    let idCasilla = parseInt(Math.random() * 9);
    if (tablero[idCasilla].className == "none") {
      return idCasilla;
    }
  }
}
