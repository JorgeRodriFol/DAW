let textoMes = document.querySelector(".cambiarmes>h1"); //Coger elemento

const dia_actual = new Date();
const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
textoMes.textContent = meses[dia_actual.getMonth()]; //cambiar texto